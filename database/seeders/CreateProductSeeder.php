<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\ProductTag;
class CreateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define your products here
        $products = [
            [
                'id' => 1,
                'category_id' => 1,
                'name' => 'Product 1',
                'price' => 10.99,
                'description' => 'This is product 1.',
                'image' => 'product1.jpg',
                'tags' => ['tag1', 'tag2'],
            ],
            [
                'id' => 2,
                'category_id' => 2,
                'name' => 'Product 2',
                'price' => 19.99,
                'description' => 'This is product 2.',
                'image' => 'product2.jpg',
                'tags' => ['tag2', 'tag3'],
            ],
        ];

        // Insert the products into the Product table
        foreach ($products as $productData) {

            // Create the product and set the image path
            $product = new Product();
            $product->name = $productData['name'];
            $product->category_id = $productData['category_id'];
            $product->price = $productData['price'];
            $product->description = $productData['description'];
            $product->image = $productData['image'];
            $product->save();

            //Insert Tags to Producttags table
            $tags = $productData['tags'];

            foreach ($tags as $tagName) {
                $productTags = new ProductTag();
                $productTags->product_id = $product->id;
                $productTags->name = $tagName;
                $productTags->save();
            }
        }
    }
}
