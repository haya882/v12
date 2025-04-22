<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Product::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $categories = Category::pluck('id', 'name');

        $products = [
            [
                'name' => 'Women Casual Dress',
                'price' => 49.999,
                'description' => 'Elegant and lightweight for casual wear.',
                'gender' => 'women',
                'quantity' => 20,
                'category_id' => $categories['Clothing'] ?? null,
            ],
            [
                'name' => 'Men Sneakers',
                'price' => 89.500,
                'description' => 'Durable and comfortable sneakers for everyday use.',
                'gender' => 'men',
                'quantity' => 35,
                'category_id' => $categories['Footwear'] ?? null,
            ],
            [
                'name' => 'Unisex Backpack',
                'price' => 35.000,
                'description' => 'Spacious and stylish backpack for daily needs.',
                'gender' => 'men',
                'quantity' => 15,
                'category_id' => $categories['Accessories'] ?? null,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
