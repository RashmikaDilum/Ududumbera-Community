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
                'description' => 'Crafted from the sap of wild kithul palms in the Knuckles Forest Reserve, this natural sweet is boiled and set into golden-brown blocks with deep caramel and smoky notes. Free from refined sugar or chemicals, kithul jaggery is a healthier sweetener for tea, desserts, or traditional recipes. Made by local artisans, it carries the taste and heritage of the forest in every bite.',
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
                'description' => 'Harvested from wild Caryota urens palms in the pristine Knuckles Forest Reserve, this traditional syrup is slow-boiled from fresh sap to preserve its rich caramel flavor with smoky, earthy notes. Free from additives and refined sugar, it’s a natural sweetener perfect with curd, desserts, or drinks. Every drop supports local communities and keeps alive a centuries-old forest tradition.',
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
                'description' => 'Grown in the fertile soils of the Knuckles Forest Reserve, this turmeric is naturally cultivated without chemicals and sun-dried to preserve its golden color and rich aroma. Packed with curcumin, it adds warm flavor to curries and teas while supporting wellness with its antioxidant and anti-inflammatory properties. Pure, organic, and sustainably produced by local farmers.',
                'price' => 450.00,
                'stock_quantity' => 120,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/turmeric-powder.jpg',
                'featured' => false
            ],

            [
                'name' => 'Dried Pepper seeds (100g)',
                'slug' => 'Dried Pepper seeds-100g',
                'description' => 'Handpicked from the lush hillsides of the Knuckles Forest Reserve, this premium black pepper is sun-dried to lock in its bold aroma and sharp, spicy flavor. Grown by the Kubukogolla community, every pack supports local livelihoods while offering you a natural, high-quality spice for curries, marinades, and everyday cooking.',
                'price' => 1500.00,
                'stock_quantity' => 75,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/pepper.jpg',
                'featured' => false
            ],
            [
                'name' => 'Pepper powder (100g)',
                'slug' => 'Pepper powder-100g',
                'description' => 'Handpicked from the lush hillsides of the Knuckles Forest Reserve, this premium black pepper is sun-dried to lock in its bold aroma and sharp, spicy flavor. Grown by the Kubukogolla community, every pack supports local livelihoods while offering you a natural, high-quality spice for curries, marinades, and everyday cooking.',
                'price' => 1500.00,
                'stock_quantity' => 75,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/',
                'featured' => false
            ],
            [
                'name' => 'White pepper seeds (100g)',
                'slug' => 'White pepper seeds-100g',
                'description' => 'edit',
                'price' => 1500.00,
                'stock_quantity' => 75,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/',
                'featured' => false
            ],
            [
                'name' => 'Cinnamon (100g)',
                'slug' => 'Cinnamon-100g',
                'description' => 'Ground from carefully harvested cinnamon bark, this fragrant powder adds warmth and sweetness to desserts, teas, and curries. Made by the Kubukogolla community, it combines authentic Sri Lankan flavor with support for local families.',
                'price' => 1500.00,
                'stock_quantity' => 75,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/',
                'featured' => false
            ],
            [
                'name' => 'Enasal (Dried Lemongrass)',
                'slug' => 'Enasal (Dried Lemongrass)',
                'description' => 'Harvested from the Knuckles foothills, Enasal offers a refreshing citrus aroma that enhances curries, soups, and teas. This traditional ingredient is naturally dried and prepared by the Kubukogolla community, preserving both flavor and heritage.',
                'price' => 1500.00,
                'stock_quantity' => 75,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/',
                'featured' => false
            ],
            [
                'name' => 'Enasal powder',
                'slug' => 'Enasal powder',
                'description' => 'Finely ground from dried lemongrass, this powder delivers a zesty citrus flavor that blends easily into cooking and teas. Sourced from the Kubukogolla community, it’s a convenient way to enjoy authentic Enasal while supporting local livelihoods.',
                'price' => 1500.00,
                'stock_quantity' => 75,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/',
                'featured' => false
            ],
            [
                'name' => 'Goraka Paste (100g)',
                'slug' => 'Goraka Paste-100g',
                'description' => 'Prepared from sun-dried Goraka (Garcinia cambogia) fruit, this rich paste adds a tangy depth to curries, meat dishes, and traditional recipes. Handmade by the Kubukogolla community, it offers authentic flavor while helping reduce reliance on Knuckles forest resources.',
                'price' => 1500.00,
                'stock_quantity' => 75,
                'in_stock' => true,
                'status' => 'active',
                'image' => 'images/products/',
                'featured' => false
            ],

        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }

        $this->command->info('Products seeded successfully!');
    }
}
