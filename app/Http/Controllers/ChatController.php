<?php

namespace App\Http\Controllers;

use App\Clients\OpenAiClient;
use App\Services\OpenAiService;
use App\Actions\SearchWeaviateAction;
use App\Models\ProductOption;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatController
{
    public function __construct(
        private readonly OpenAiService $openAiService,
        private readonly SearchWeaviateAction $searchWeaviate,
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
        // $response = $this->openAiService->getUserIntenion($request->message);

        $response = ["add_to_cart" => true, "order_products" => [["avk_number" => '02-200-60-804649', "amount" => 55], ["avk_number" => '06-040-80-0136499', "amount" => 22], ["avk_number" => '06-350-80-002', "amount" => 5]], "products_direct_to_cart" => [], "products_remove_from_cart" => [["avk_number" => '06-300-70-01237', "amount" => 88]], "product_suggestions" => "a butterfly valve", "chat" => "And how are you today?"];

        $orderProducts = $this->getProducts($response['order_products']);

        return response()->json([
            'orderProducts' => $orderProducts,
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

        foreach($orderProducts as $orderProduct) {
            $product = ProductOption::where('avk_nr', $orderProduct['avk_number'])
                ->with('product')
                ->first();

            $products[] = $product;
        }

        return $products;
    }
}
