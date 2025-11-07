<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary Meta Tags -->
    <title>Knuckles Products - All Products | Ududumbara Community</title>
    <meta name="title" content="Knuckles Products - All Products | Ududumbara Community">
    <meta name="description" content="Shop authentic Sri Lankan products from the Knuckles Conservation Area. Kithul Jaggery, Turmeric Powder, Handwoven Slippers, and more handcrafted treasures.">
    <meta name="keywords" content="Kithul Jaggery, Kithul Treacle, Turmeric Powder, Handwoven Slippers, Sri Lankan products, organic spices, handcrafted goods, Knuckles Conservation Area">
    <meta name="author" content="Ududumbara Community">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Knuckles Products - All Products | Ududumbara Community">
    <meta property="og:description" content="Shop authentic Sri Lankan products from the Knuckles Conservation Area. Kithul Jaggery, Turmeric Powder, Handwoven Slippers, and more handcrafted treasures.">
    <meta property="og:image" content="{{ asset('images/products.jpg') }}">
    <meta property="og:site_name" content="Ududumbara Community">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Knuckles Products - All Products | Ududumbara Community">
    <meta property="twitter:description" content="Shop authentic Sri Lankan products from the Knuckles Conservation Area. Kithul Jaggery, Turmeric Powder, Handwoven Slippers, and more handcrafted treasures.">
    <meta property="twitter:image" content="{{ asset('images/products.jpg') }}">

    <!-- Additional SEO Meta Tags -->
    <meta name="geo.region" content="LK">
    <meta name="geo.placename" content="Knuckles Conservation Area, Sri Lanka">
    <meta name="theme-color" content="#008000">
    <link rel="canonical" href="{{ url()->current() }}">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com/3.4.0"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f8f8; /* Light background */
            color: #333;
        }
        /* Custom scroll-to animation */
        html {
            scroll-behavior: smooth;
        }
        /* Specific styling for product images to ensure consistent look */
        .product-img {
            width: 100%;
            height: 250px; /* Fixed height for consistency */
            object-fit: cover; /* Cover ensures image fills the area without distortion */
            border-radius: 0.75rem; /* rounded-xl */
        }
        /* Custom button styling for hover effects */
        .btn-primary {
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .section-heading {
            position: relative;
            display: inline-block;
            padding-bottom: 8px;
        }
        .section-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50%; /* Adjust width as needed */
            height: 3px;
            background-color: #008000; /* Green line */
            border-radius: 9999px; /* For rounded ends */
        }
    </style>
</head>
<body class="text-gray-800">
    <x-header />

    <!-- Products Hero Section -->
    <section class="relative py-20 md:py-32 text-center overflow-hidden text-white">
        <!-- Background Image -->
        <div class="absolute inset-0 w-full h-full bg-cover bg-center" style="background-image: url('{{ asset('images/products.jpg') }}');"></div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="container mx-auto relative z-10 px-4">
            <h2 class="text-5xl font-extrabold mb-4">Discover Our Handcrafted Treasures</h2>
            <p class="text-xl max-w-3xl mx-auto opacity-95">
                Explore our full collection of unique products, lovingly made by skilled artisans from various village communities. Each item tells a story of tradition, dedication, and craft.
            </p>
        </div>
    </section>

    <!-- All Products Section -->
    <main class="py-12 flex-grow">
        <div class="max-w-7xl mx-auto px-4 md:px-8 lg:px-16">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 section-heading mx-auto">All Available Products</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($products as $product)
            <!-- Product Card: {{ $product->name }} -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black" data-product-id="{{ $product->id }}">
                <a href="{{ route('products.show', $product->slug) }}">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-img">
                </a>
                <div class="p-6">
                    <a href="{{ route('products.show', $product->slug) }}">
                        <h3 class="font-semibold text-xl mb-2 text-green-800 hover:text-green-600 transition duration-300">{{ $product->name }}</h3>
                    </a>
                    <p class="text-gray-600 text-sm mb-4">{{ Str::limit($product->description, 100) }}</p>
                    <div class="flex justify-between items-center">
                        @if($product->sale_price)
                            <div class="flex flex-col">
                                <span class="text-green-700 font-bold text-lg">LKR {{ number_format($product->sale_price, 2) }}</span>
                                <span class="text-gray-500 text-sm line-through">LKR {{ number_format($product->price, 2) }}</span>
                            </div>
                        @else
                            <span class="text-green-700 font-bold text-lg">LKR {{ number_format($product->price, 2) }}</span>
                        @endif
                        
                        @if($product->isAvailable())
                            <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                        @else
                            <span class="text-gray-500 text-sm">Out of Stock</span>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-600 text-lg">No products available at the moment.</p>
                <p class="text-gray-500 text-sm mt-2">Please check back later for our amazing handcrafted products!</p>
            </div>
            @endforelse
            </div>
        </div>
    </main>

    <!-- Services Call to Action Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-green-800 mb-4">More Than Just Products</h2>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto mb-8">
                Immerse yourself in our culture. We also offer unique services like artisan workshops, cultural tours, and tranquil Kabana stays.
            </p>
            <a href="{{ url('/services') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 btn-primary">Explore Our Services</a>
        </div>
    </section>

    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Attach event listeners to "Add to Cart" buttons
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', () => {
                    const card = button.closest('.bg-gray-50'); // Product card container
                    if (card) {
                        const name = card.querySelector('h3').textContent.trim();
                        const priceElement = card.querySelector('.text-green-700.font-bold');
                        const priceText = priceElement.textContent;
                        const price = parseFloat(priceText.replace('LKR ', '').replace(',', '').trim());
                        const image = card.querySelector('img.product-img').src;
                        const productId = card.getAttribute('data-product-id');

                        // Call the global addToCart function from cart component
                        if (window.addToCart) {
                            window.addToCart(name, price, image, productId);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>


