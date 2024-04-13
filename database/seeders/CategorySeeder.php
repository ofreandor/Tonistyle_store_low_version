<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create(['category_name' => 'Shoes']);

        Category::create(['category_name' => 'Clothing']);
        Category::create(['category_name' => 'Electronics']);
        Category::create(['category_name' => 'Food & Groceries']);
        Category::create(['category_name' => 'Jewelry & Watches']);
        Category::create(['category_name' => 'Men']);
        Category::create(['category_name' => 'Women']);
        Category::create(['category_name' => 'Unisex']);
        Category::create(['category_name' => 'Kids or Children']);
        Category::create(['category_name' => 'Phone & Accessories']);
        Category::create(['category_name' => 'Charger']);
        Category::create(['category_name' => 'Ear phones']);
        Category::create(['category_name' => 'Footwear']);
    }
}
