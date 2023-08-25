<?php

namespace App\Http\Controllers;

use App\Actions\AddProductToCartAction;
use App\Actions\RemoveProductFromCartAction;
use App\Actions\SearchWeaviateAction;
use App\Clients\OpenAiClient;
use App\Models\ProductOption;
use App\Services\OpenAiService;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatController
{
    public function __construct(
        private readonly OpenAiService $openAiService,
        private readonly SearchWeaviateAction $searchWeaviate,
        private readonly AddProductToCartAction $addProductToCart,
        private readonly RemoveProductFromCartAction $removeProductFromCart,
    ) {
    }

    function index()
    {
        return Inertia::render('OfferGenerator');
    }

    public function init()
    {
        $client = new OpenAiClient();
        $client->init();

        $welcomeMessage = __('chat.intro');

        return response()->json($welcomeMessage);
    }

    public function chat(Request $request)
    {
        $response = $this->openAiService->getUserIntenion($request->message);
        // $response = ["add_to_cart" => true, "order_products" => [["ref_number" => '02-200-60-804649', "amount" => 55], ["ref_number" => '06-040-80-0136499', "amount" => 22], ["ref_number" => '06-350-80-002', "amount" => 5]], "products_direct_to_cart" => [], "products_remove_from_cart" => [["ref_number" => '06-300-70-01237', "amount" => 88]], "product_suggestions" => "a butterfly valve", "chat" => "And how are you today?"];
        
        // dd($response, json_decode($response, true));
        $data = json_decode($response, true);
        // dd($data);

        if(isset($data['add_to_cart'])) {
            $this->addProductsToCart($data['add_to_cart']);
        }

        $orderProducts = isset($data['order_products']) && count($data['order_products']) ? $this->getProducts($data['order_products']) : [];
        
        if(isset($data['products_direct_to_cart']) && count($data['products_direct_to_cart'])) {
            $this->addProductsToCart($data['products_direct_to_cart']);
        }

        if(isset($data['products_remove_from_cart']) && count($data['products_remove_from_cart'])) {
            $this->removeProductsFromCart($data['products_remove_from_cart']);
        }
        if(isset($data['products_change_amount']) && count($data['products_change_amount'])) {
            $this->addProductsToCart($data['products_change_amount']);
        }
        
        return response()->json([
            'orderProducts' => $orderProducts,
            'rawResponse' => $response,
            'rawData' => $data,
        ]);

        // $pdfSnippets = $this->searchWeaviate->execute('NRGi_PDFs', $request->message, $request->type);
        // session(['pdf_snippets' => $pdfSnippets]);

        // $context = '';
        // foreach ($pdfSnippets as $snippet) {
        //     $context .= $snippet['section_title'] . ' ' . $snippet['text'];
        // }

        // $stream = $this->openAiService->chat($request->message, $context, true);

        // return response()->stream($stream, 200, [
        //     'Content-Type' => 'text/event-stream',
        //     'Cache-Control' => 'no-cache',
        //     'X-Accel-Buffering' => 'no',
        // ]);
    }

    public function getProducts($orderProducts)
    {
        $products = [];

        //Hande single product (ChatGBT might return a single product instead of an array)
        if(isset($orderProducts['ref_number'])) {
            $product = ProductOption::where('ref_nr', $orderProducts['ref_number'])
                ->with('product')
                ->first();

            return [['product' => $product, 'amount' => $orderProducts['amount']]];
        } else {
            foreach ($orderProducts as $orderProduct) {
                $product = ProductOption::where('ref_nr', $orderProduct['ref_number'])
                    ->with('product')
                    ->first();

                $products[] = ['product' => $product, 'amount' => $orderProduct['amount']];
            }
        }

        return $products;
    }
    
    public function addProductsToCart($products)
    {
        //Hande single product (ChatGBT might return a single product instead of an array)
        if (isset($products['ref_number'])) {
            $this->addProductToCart->execute($products['ref_number'], $products['amount']);
        } else {
            foreach ($products as $product) {
                $this->addProductToCart->execute($product['ref_number'], $product['amount']);
            }
        }
    }
    
    public function removeProductsFromCart($products)
    {
        //Hande single product (ChatGBT might return a single product instead of an array)
        if (isset($products['ref_number'])) {
            $this->removeProductFromCart->execute($products['ref_number']);
        } else {
            foreach ($products as $product) {
                $this->removeProductFromCart->execute($product['ref_number']);
            }
        }
    }
}
