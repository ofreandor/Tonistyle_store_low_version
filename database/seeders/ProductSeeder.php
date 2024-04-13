<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $products = [
            [
                'product_name' => 'Example Product 1',
                'price' => 3249.00,
                'quantity' => 100,
                'category_id' => 1,
                'brand_id' => 1,
                'status' => 'active',
                'color' => 'Red',
                'discount' => 10.00,
                'size' => 'M',
            ],

            [
                'product_name' => 'Example Product 2',
                'price' => 1132.00,
                'quantity' => 50,
                'category_id' => 2,
                'brand_id' => 2,
                'status' => 'active',
                'color' => 'Blue',
                'discount' => 5.00,
                'size' => 'L',
            ],
            // Add more products as needed
        ];

         foreach ($products as $product) {
            Product::create($product);
        }
    }
}