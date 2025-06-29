<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Knuckles Products - All Products</title>
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
    <section class="relative py-20 md:py-32 text-center overflow-hidden bg-emerald-500">
        <div class="container mx-auto">
            <h2 class="text-5xl font-extrabold mb-4">Discover Our Handcrafted Treasures</h2>
            <p class="text-xl max-w-3xl mx-auto opacity-90">
                Explore our full collection of unique products, lovingly made by skilled artisans from various village communities. Each item tells a story of tradition, dedication, and craft.
            </p>
        </div>
    </section>

    <!-- All Products Section -->
    <main class="container mx-auto py-12 px-4 flex-grow">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 section-heading mx-auto">All Available Products</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Product Card: Kithul Jaggery -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black" id="1" data-product-id="1">
                <img src="{{ asset('images/products/kithul-jaggery.jpg') }}" alt="Kithul Jaggery" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Pure Kithul Jaggery</h3>
                    <p class="text-gray-600 text-sm mb-4">A natural sweetener with a unique caramel flavor, traditionally made from the sap of the Kithul palm.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 850.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Kithul Juice -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black" data-product-id="2">
                <img src="{{ asset('images/products/kithul-juice.jpg') }}" alt="Kithul Juice" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Fresh Kithul Juice (Treacle)</h3>
                    <p class="text-gray-600 text-sm mb-4">Liquid golden nectar, perfect as a topping or natural syrup, rich in traditional flavor.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 700.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Turmeric Powder -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black" data-product-id="3">
                <img src="{{ asset('images/products/turmeric-powder.jpg') }}" alt="Turmeric Powder" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Organic Turmeric Powder</h3>
                    <p class="text-gray-600 text-sm mb-4">Pure, potent turmeric, hand-processed by local farmers for maximum flavor and health benefits.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 450.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Community Hand Slippers -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black" data-product-id="4">
                <img src="{{ asset('images/products/handwoven-slippers.jpg') }}" alt="Hand Slippers" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Hand-Woven Community Slippers</h3>
                    <p class="text-gray-600 text-sm mb-4">Comfortable and stylish slippers, hand-crafted with natural fibers by skilled village artisans.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 1200.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Handwoven Basket (from product.blade.php original) -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black" data-product-id="5">
                <img src="https://placehold.co/600x400/D0F0C0/333333?text=Handwoven+Basket" alt="Handwoven Basket" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Handwoven Basket</h3>
                    <p class="text-gray-600 text-sm mb-4">Artisans weave intricate patterns using natural fibers, perfect for home decor or storage.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 1500.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Clay Pottery Set (from product.blade.php original) -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black" data-product-id="6">
                <img src="https://placehold.co/600x400/C0E0F0/333333?text=Clay+Pottery+Set" alt="Clay Pottery Set" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Hand-Painted Clay Pottery</h3>
                    <p class="text-gray-600 text-sm mb-4">Unique, lead-free pottery sets, each piece a canvas of cultural stories.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 2500.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Traditional Textile Scarf (from product.blade.php original) -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black" data-product-id="7">
                <img src="https://placehold.co/600x400/F0C0D0/333333?text=Textile+Scarf" alt="Traditional Textile Scarf" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Hand-Loomed Textile Scarf</h3>
                    <p class="text-gray-600 text-sm mb-4">Soft, vibrantly colored scarves woven on traditional looms, unique and elegant.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 1800.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Artisan Wooden Carving (from product.blade.php original) -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black" data-product-id="8">
                <img src="https://placehold.co/600x400/C0D0E0/333333?text=Wooden+Carving" alt="Wooden Carving" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Artisan Wooden Carving</h3>
                    <p class="text-gray-600 text-sm mb-4">Intricately carved wooden figurines, each telling a story of local folklore.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 2200.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Natural Handmade Soap (from product.blade.php original) -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black" data-product-id="9">
                <img src="https://placehold.co/600x400/E0C0F0/333333?text=Natural+Soap" alt="Natural Handmade Soap" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Natural Handmade Soap</h3>
                    <p class="text-gray-600 text-sm mb-4">Organic soaps made with local herbs and oils, gentle on skin and eco-friendly.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 600.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
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
                        const name = card.querySelector('h3').textContent;
                        const priceText = card.querySelector('.text-green-700.font-bold').textContent;
                        const price = parseFloat(priceText.replace('LKR ', '').trim());
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
