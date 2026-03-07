<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary Meta Tags -->
    <title>{{ $product->name }} - Authentic Sri Lankan Products | Ududumbara Community</title>
    <meta name="title" content="{{ $product->name }} - Authentic Sri Lankan Products | Ududumbara Community">
    <meta name="description" content="{{ $product->description }} - Handcrafted with love from the Knuckles Conservation Area.">
    <meta name="keywords" content="{{ $product->name }}, Sri Lankan products, handcrafted goods, Knuckles Conservation Area, Ududumbara Community">
    <meta name="author" content="Ududumbara Community">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="product">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $product->name }} - Ududumbara Community">
    <meta property="og:description" content="{{ $product->description }}">
    <meta property="og:image" content="{{ asset($product->image) }}">
    <meta property="og:site_name" content="Ududumbara Community">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $product->name }} - Ududumbara Community">
    <meta property="twitter:description" content="{{ $product->description }}">
    <meta property="twitter:image" content="{{ asset($product->image) }}">

    <!-- Additional SEO Meta Tags -->
    <meta name="geo.region" content="LK">
    <meta name="geo.placename" content="Knuckles Conservation Area, Sri Lanka">
    <meta name="theme-color" content="#008000">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Product Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "{{ $product->name }}",
      "image": "{{ asset($product->image) }}",
      "description": "{{ $product->description }}",
      "brand": {
        "@type": "Brand",
        "name": "Knuckles Products - Ududumbara Community"
      },
      "offers": {
        "@type": "Offer",
        "url": "{{ url()->current() }}",
        "priceCurrency": "LKR",
        "price": "{{ $product->effective_price }}",
        "availability": "{{ $product->isAvailable() ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock' }}",
        "itemCondition": "https://schema.org/NewCondition",
        "seller": {
          "@type": "Organization",
          "name": "Knuckles Products - Ududumbara Community"
        }
      }
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon-192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com/3.4.0"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        /* Browser compatibility reset */
        *, *::before, *::after {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        /* Custom scroll-to animation */
        html {
            scroll-behavior: smooth;
        }

        /* Custom button styling for hover effects */
        .btn-primary {
            transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            -webkit-transform: translateY(-2px);
            -moz-transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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
            width: 50%;
            height: 3px;
            background-color: #008000;
            border-radius: 9999px;
        }

        /* Product image styling */
        .product-main-img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            object-position: center;
            border-radius: 1rem;
        }

        .related-product-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: center;
            border-radius: 0.75rem;
        }

        /* Breadcrumb styling */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }

        .breadcrumb a {
            color: #059669;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb a:hover {
            color: #047857;
            text-decoration: underline;
        }

        .breadcrumb span {
            color: #6b7280;
        }

        /* Stock status styling */
        .stock-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .in-stock {
            background-color: #dcfce7;
            color: #166534;
        }

        .out-of-stock {
            background-color: #fef2f2;
            color: #991b1b;
        }
    </style>
</head>
<body class="text-gray-800">
    <x-header />

    <!-- Product Detail Section -->
    <main class="container mx-auto py-12 px-4">
        <!-- Breadcrumb -->
        <nav class="breadcrumb">
            <a href="{{ url('/') }}">Home</a>
            <span>/</span>
            <a href="{{ route('products.index') }}">Products</a>
            <span>/</span>
            <span class="text-gray-900 font-medium">{{ $product->name }}</span>
        </nav>

        <!-- Product Detail Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
            <!-- Product Image -->
            <div class="space-y-4">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-main-img">
                </div>
            </div>

            <!-- Product Information -->
            <div class="space-y-6">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $product->name }}</h1>
                    
                    <!-- Stock Status -->
                    @if($product->isAvailable())
                        <div class="stock-badge in-stock">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            In Stock ({{ $product->stock_quantity }} available)
                        </div>
                    @else
                        <div class="stock-badge out-of-stock">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            Out of Stock
                        </div>
                    @endif
                </div>

                <!-- Price -->
                <div class="space-y-2">
                    @if($product->sale_price)
                        <div class="flex items-center gap-3">
                            <span class="text-3xl font-bold text-green-700">LKR {{ number_format($product->sale_price, 2) }}</span>
                            <span class="text-xl text-gray-500 line-through">LKR {{ number_format($product->price, 2) }}</span>
                            <span class="bg-red-100 text-red-800 text-sm font-semibold px-2 py-1 rounded-full">
                                Save {{ number_format((($product->price - $product->sale_price) / $product->price) * 100, 0) }}%
                            </span>
                        </div>
                    @else
                        <span class="text-3xl font-bold text-green-700">LKR {{ number_format($product->price, 2) }}</span>
                    @endif
                </div>

                <!-- Description -->
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">About This Product</h3>
                    <p class="text-gray-700 leading-relaxed text-lg">{{ $product->description }}</p>
                </div>

                <!-- Features/Benefits (You can expand this based on your needs) -->
                <div class="space-y-4">
                    <h3 class="text-xl font-semibold text-gray-900">Key Features</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Handcrafted by local artisans</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Sustainably sourced from Knuckles Conservation Area</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Supporting local community livelihoods</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-green-600 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Traditional methods and authentic quality</span>
                        </li>
                    </ul>
                </div>

                <!-- Add to Cart Section -->
                <div class="bg-gray-50 rounded-xl p-6 space-y-4">
                    @if($product->isAvailable())
                        <div class="flex items-center gap-4 mb-4">
                            <label for="quantity" class="text-gray-700 font-medium">Quantity:</label>
                            <div class="flex items-center border border-gray-300 rounded-md">
                                <button type="button" id="decrease-qty" class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-l-md">-</button>
                                <input type="number" id="quantity" value="1" min="1" max="{{ $product->stock_quantity }}" class="w-16 px-3 py-2 text-center border-0 focus:outline-none">
                                <button type="button" id="increase-qty" class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-r-md">+</button>
                            </div>
                        </div>
                        <button id="add-to-cart-btn" 
                                data-product-id="{{ $product->id }}"
                                data-product-name="{{ $product->name }}"
                                data-product-price="{{ $product->effective_price }}"
                                data-product-image="{{ asset($product->image) }}"
                                class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-8 rounded-full shadow-lg transition duration-300 btn-primary text-lg">
                            Add to Cart - LKR {{ number_format($product->effective_price, 2) }}
                        </button>
                    @else
                        <button disabled class="w-full bg-gray-400 text-white font-bold py-4 px-8 rounded-full shadow-lg text-lg cursor-not-allowed">
                            Out of Stock
                        </button>
                    @endif
                    
                    <div class="flex items-center justify-center gap-6 text-sm text-gray-600">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10"></path>
                            </svg>
                            <span>Free Shipping</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>Quality Guaranteed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        @if($relatedProducts->count() > 0)
        <section class="py-16">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 section-heading mx-auto">You Might Also Like</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($relatedProducts as $relatedProduct)
                <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-green-600">
                    <a href="{{ route('products.show', $relatedProduct->slug) }}">
                        <img src="{{ asset($relatedProduct->image) }}" alt="{{ $relatedProduct->name }}" class="related-product-img">
                    </a>
                    <div class="p-6">
                        <a href="{{ route('products.show', $relatedProduct->slug) }}">
                            <h3 class="font-semibold text-xl mb-2 text-green-800 hover:text-green-600 transition duration-300">{{ $relatedProduct->name }}</h3>
                        </a>
                        <p class="text-gray-600 text-sm mb-4">{{ Str::limit($relatedProduct->description, 80) }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-green-700 font-bold text-lg">LKR {{ number_format($relatedProduct->effective_price, 2) }}</span>
                            @if($relatedProduct->isAvailable())
                                <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn-related"
                                        data-product-id="{{ $relatedProduct->id }}"
                                        data-product-name="{{ $relatedProduct->name }}"
                                        data-product-price="{{ $relatedProduct->effective_price }}"
                                        data-product-image="{{ asset($relatedProduct->image) }}">
                                    Add to Cart
                                </button>
                            @else
                                <span class="text-gray-500 text-sm">Out of Stock</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        @endif
    </main>

    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Quantity controls
            const quantityInput = document.getElementById('quantity');
            const decreaseBtn = document.getElementById('decrease-qty');
            const increaseBtn = document.getElementById('increase-qty');
            const addToCartBtn = document.getElementById('add-to-cart-btn');

            if (decreaseBtn && increaseBtn && quantityInput) {
                decreaseBtn.addEventListener('click', () => {
                    const currentValue = parseInt(quantityInput.value);
                    if (currentValue > 1) {
                        quantityInput.value = currentValue - 1;
                        updateCartButtonPrice();
                    }
                });

                increaseBtn.addEventListener('click', () => {
                    const currentValue = parseInt(quantityInput.value);
                    const maxValue = parseInt(quantityInput.max);
                    if (currentValue < maxValue) {
                        quantityInput.value = currentValue + 1;
                        updateCartButtonPrice();
                    }
                });

                quantityInput.addEventListener('change', () => {
                    const value = parseInt(quantityInput.value);
                    const min = parseInt(quantityInput.min);
                    const max = parseInt(quantityInput.max);
                    
                    if (value < min) quantityInput.value = min;
                    if (value > max) quantityInput.value = max;
                    
                    updateCartButtonPrice();
                });
            }

            function updateCartButtonPrice() {
                if (addToCartBtn && quantityInput) {
                    const quantity = parseInt(quantityInput.value);
                    const price = parseFloat(addToCartBtn.dataset.productPrice);
                    const total = price * quantity;
                    addToCartBtn.innerHTML = `Add to Cart - LKR ${total.toFixed(2)}`;
                }
            }

            // Main add to cart functionality
            if (addToCartBtn) {
                addToCartBtn.addEventListener('click', () => {
                    const quantity = quantityInput ? parseInt(quantityInput.value) : 1;
                    const productId = addToCartBtn.dataset.productId;
                    const productName = addToCartBtn.dataset.productName;
                    const productPrice = parseFloat(addToCartBtn.dataset.productPrice);
                    const productImage = addToCartBtn.dataset.productImage;

                    // Call the global addToCart function from cart component
                    if (window.addToCart) {
                        for (let i = 0; i < quantity; i++) {
                            window.addToCart(productName, productPrice, productImage, productId);
                        }
                    }
                });
            }

            // Related products add to cart
            document.querySelectorAll('.add-to-cart-btn-related').forEach(button => {
                button.addEventListener('click', () => {
                    const productId = button.dataset.productId;
                    const productName = button.dataset.productName;
                    const productPrice = parseFloat(button.dataset.productPrice);
                    const productImage = button.dataset.productImage;

                    // Call the global addToCart function from cart component
                    if (window.addToCart) {
                        window.addToCart(productName, productPrice, productImage, productId);
                    }
                });
            });
        });
    </script>
</body>
</html>
