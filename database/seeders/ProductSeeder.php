<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete all existing products
        Product::query()->delete();

        // Create products with descriptions from the view
        $products = [
            [
                'name' => 'Pure Kithul Jaggery',
                'slug' => 'pure-kithul-jaggery',
                'description' => 'A natural sweetener with a unique caramel flavor, traditionally made from the sap of the Kithul palm.',
                'price' => 850.00,
                'stock_quantity' => 100,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/kithul-jaggery.jpg',
                'featured' => true
            ],
            [
                'name' => 'Fresh Kithul Treacle',
                'slug' => 'fresh-kithul-treacle',
                'description' => 'Liquid golden nectar, perfect as a topping or natural syrup, rich in traditional flavor.',
                'price' => 700.00,
                'stock_quantity' => 80,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/kithul-juice.jpg',
                'featured' => true
            ],
            [
                'name' => 'Organic Turmeric Powder',
                'slug' => 'organic-turmeric-powder',
                'description' => 'Pure, potent turmeric, hand-processed by local farmers for maximum flavor and health benefits.',
                'price' => 450.00,
                'stock_quantity' => 120,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/turmeric-powder.jpg',
                'featured' => false
            ],
            [
                'name' => 'Community Slippers',
                'slug' => 'community-slippers',
                'description' => 'Comfortable and stylish slippers, hand-crafted with natural fibers by skilled village artisans.',
                'price' => 1200.00,
                'stock_quantity' => 50,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/handwoven-slippers.jpg',
                'featured' => false
            ],
            [
                'name' => 'Pepper (100g)',
                'slug' => 'pepper-100g',
                'description' => 'Premium quality black pepper, hand-harvested and sun-dried for maximum flavor and aroma.',
                'price' => 1500.00,
                'stock_quantity' => 75,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/pepper.jpg',
                'featured' => false
            ]
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }

        $this->command->info('Products seeded successfully!');
    }
} 