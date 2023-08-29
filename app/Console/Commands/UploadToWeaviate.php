<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\Models\ProductOption;
use Illuminate\Console\Command;
use Weaviate\Weaviate;

class UploadToWeaviate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:upload-to-weaviate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload all products in the db to weaviate.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $weaviate = new Weaviate(config('weaviate.host') . '/v1', '', ['X-OpenAI-Api-Key' => env('OPENAI_API_KEY')]);

        $this->createClass($weaviate, 'AVK_Products', 'AVK test products');
        $products = ProductOption::with('product')->get();
        $productData = $products->map(function ($option) {
            return [
                'class' => 'AVK_Products',
                'properties' => [
                    'ref_nr' => $option->ref_nr,
                    'name' => $option->product->name,
                    'sub_title' => $option->product->sub_title,
                    'category' => $option->product->category,
                    'variant' => $option->product->variant_name,
                    'description' => $option->product->description,
                    'features' => $option->product->features,
                    'price' => $option->price,
                    'dn' => $option->dn,
                    'pn' => $option->pn,
                    'connection' => $option->product->connection,
                    'material' => $option->product->material,
                    'closing_direction' => $option->product->closing_direction,
                    'notes' => $option->notes,
                ]
            ];
        });
        $weaviate->batch()->create($productData->toArray());
        
        // $products = Product::get();
        // $productData = $products->map(function ($product) {
        //     return [
        //         'class' => 'AVK_Products',
        //         'properties' => [
        //             'name' => $product->name,
        //             'sub_title' => $product->sub_title,
        //             'category' => $product->category,
        //             'variant' => $product->variant_name,
        //             'description' => $product->description,
        //             'features' => $product->features,
        //             'connection' => $product->connection,
        //             'material' => $product->material,
        //             'closing_direction' => $product->closing_direction,
        //         ]
        //     ];
        // });
        // $weaviate->batch()->create($productData->toArray());

        // $this->createClass($weaviate, 'AVK_Product_Options', 'AVK test product options');
        // $options = ProductOption::with('product')->get();
        // $optionData = $options->map(function ($option) {
        //     return [
        //         'class' => 'AVK_Products',
        //         'properties' => [
        //             'product_id' => $option->product->id,
        //             'ref_nr' => $option->ref_nr,
        //             'price' => $option->price,
        //             'dn' => $option->dn,
        //             'pn' => $option->pn,
        //             'notes' => $option->notes,
        //         ]
        //     ];
        // });
        // $weaviate->batch()->create($optionData->toArray());

    }

    private function createClass($weaviate, $name, $description) {
        try {
            $weaviate->schema()->deleteClass($name);
        } catch (\Exception $e) {
            //Ignore
        }

        $weaviate->schema()->createClass([
            'class' => $name,
            'description' => $description,
            'vectorizer' => 'text2vec-openai',
            'moduleConfig' => [
                'text2vec-openai' => [
                    'vectorizeClassName' => true,
                    'model' => 'ada',
                    'modelVersion' => '002',
                    'type' => 'text'
                ]
            ]
        ]);
    }
}
