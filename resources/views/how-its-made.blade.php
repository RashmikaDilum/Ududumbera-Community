<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How It's Made - Knuckles Products</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Ududumbara Commiunity', sans-serif;
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

    <!-- How It's Made Section -->
    <section id="how-its-made" class="py-16 md:py-24 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 section-heading mx-auto">The Journey: From Land to Your Hand</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Kithul Making Process -->
                <div class="bg-white rounded-xl shadow-md p-8 border border-gray-200 hover:shadow-lg transition duration-300">
                    <h3 class="text-2xl font-bold text-green-800 mb-4">The Art of Kithul Tapping</h3>
                    <img src="{{ asset('images/hero/kithulTapping.jpg') }}" alt="Kithul Tapping" class="rounded-lg mb-6 shadow-sm">
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        Kithul products begin with the ancient practice of Kithul palm tapping. Generations of knowledge are passed down as skilled tappers carefully climb the majestic Kithul tree to collect its precious sap. This sap, a naturally sweet and nutritious liquid, is then meticulously processed.
                    </p>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        For **Kithul Juice (Treacle)**, the sap is gently boiled over a wood fire, slowly reducing it to a thick, golden syrup – a pure, unadulterated taste of nature. For **Kithul Jaggery**, the boiling continues until the treacle crystallizes into solid blocks, traditionally poured into coconut shells to cool and harden. This labor-intensive process ensures the authentic flavor and quality of every piece.
                    </p>
                    <a href="{{ url('/products') }}" class="text-green-600 hover:underline font-semibold mt-4 inline-block">Discover Kithul Products &rightarrow;</a>
                </div>

                <!-- Turmeric & Slippers Making Process -->
                <div class="bg-white rounded-xl shadow-md p-8 border border-gray-200 hover:shadow-lg transition duration-300">
                    <h3 class="text-2xl font-bold text-green-800 mb-4">Handcrafted Excellence: Turmeric & Slippers</h3>
                    
                    <!-- Turmeric Process -->
                    <div class="mb-8">
                        <h4 class="text-xl font-semibold text-gray-700 mb-2">From Root to Golden Spice: Our Turmeric</h4>
                        <img src="{{ asset('images/hero/Tumeric.jpg') }}" alt="Turmeric Processing" class="w-full rounded-lg mb-4 shadow-sm">
                        <p class="text-gray-700 leading-relaxed">
                            Our organic turmeric is cultivated in fertile Sri Lankan soils. After careful harvesting, the turmeric rhizomes are cleaned, boiled, dried in the sun, and then ground into a vibrant, aromatic powder. This traditional method preserves its potent flavor and beneficial properties, ensuring you receive the purest spice.
                        </p>
                    </div>

                    <!-- Hand Slippers Process -->
                    <div>
                        <h4 class="text-xl font-semibold text-gray-700 mb-2">Weaving Comfort: Community Hand Slippers</h4>
                        <img src="{{ asset('images/hero/Slipers.jpg') }}" alt="Slipper Making" class="w-full rounded-lg mb-4 shadow-sm">
                        <p class="text-gray-700 leading-relaxed">
                            Each pair of our hand slippers is a testament to the skill and dedication of local artisans. Using locally sourced natural fibers, they meticulously weave and craft each component. This traditional hand-making process not only creates unique, comfortable footwear but also provides sustainable livelihoods for families within our community.
                        </p>
                    </div>
                    <a href="{{ url('/products') }}" class="text-green-600 hover:underline font-semibold mt-4 inline-block">Shop Handcrafted Goods &rightarrow;</a>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
</body>
</html>