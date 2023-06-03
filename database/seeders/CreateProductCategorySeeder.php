<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\ProductCategory;

class CreateProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define your product categories here
        $categories = [
            ['id' => 1, 'name' => 'Category 1'],
            ['id' => 2, 'name' => 'Category 2'],
            ['id' => 3, 'name' => 'Category 3'],
        ];

        // Insert the categories into the product category table in database
        foreach ($categories as $category) {
            ProductCategory::create($category);
        }
    }
}
