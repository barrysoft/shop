<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        require 'data/products.php';
        require 'data/images.php';

        $productsImages = array_column($images, 'image', 'article_id');
        $products = [];
        $productCategories = [];
        foreach ($articles as $id => $product) {
            $imagePath = 'products-images/'.(array_key_exists($product['id'], $productsImages) ? $productsImages[$product['id']] : 'default.jpg');
            $price = $product['price'];
            array_push($products, [
                'id' => $product['id'],
                'name' => $product['designation'],
                'brief_description' => $product['designation'],
                'description' => $product['designation'],
                'price' => $price,
                'old_price' => $price,
                'sku' => 'SKU-'.$id.rand(100, 986), //$this->faker->unique()->bothify('SKU-####'),
                'stock_status' => 'instock', //array_rand(['instock', 'outstock']),
                'quantity' => $product['quantite'],
                'image' => $imagePath,
                'images' => json_encode([$imagePath]),
            ]);
            if ($product['famille_id'])
                array_push($productCategories, [
                    'category_id' => $product['famille_id'],
                    'product_id' => $product['id'],
                ]);
        }
        foreach (array_chunk($products,1000) as $products) {
            Product::query()->insert($products);
        }
        foreach (array_chunk($productCategories,1000) as $productCategories) {
            DB::table('category_product')->insert($productCategories);
        }
    }
}
