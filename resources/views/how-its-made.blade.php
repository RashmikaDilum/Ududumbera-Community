<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>How It's Made - Knuckles Products | Ududumbara Community</title>
    <meta name="title" content="How It's Made - Knuckles Products | Ududumbara Community">
    <meta name="description" content="Discover the traditional craftsmanship behind our Knuckles products. Learn about Kithul tapping, turmeric processing, and handwoven slipper making from Sri Lankan artisans.">
    <meta name="keywords" content="Kithul tapping process, turmeric processing, handwoven slippers, traditional craftsmanship, Sri Lankan artisans, Knuckles Conservation Area, sustainable production">
    <meta name="author" content="Ududumbara Community">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="How It's Made - Knuckles Products | Ududumbara Community">
    <meta property="og:description" content="Discover the traditional craftsmanship behind our Knuckles products. Learn about Kithul tapping, turmeric processing, and handwoven slipper making from Sri Lankan artisans.">
    <meta property="og:image" content="{{ asset('images/hero/kithulTapping.jpg') }}">
    <meta property="og:site_name" content="Ududumbara Community">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="How It's Made - Knuckles Products | Ududumbara Community">
    <meta property="twitter:description" content="Discover the traditional craftsmanship behind our Knuckles products. Learn about Kithul tapping, turmeric processing, and handwoven slipper making from Sri Lankan artisans.">
    <meta property="twitter:image" content="{{ asset('images/hero/kithulTapping.jpg') }}">

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

    <!-- How It's Made Section -->
    <section id="how-its-made" class="py-16 md:py-24 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 section-heading mx-auto">The Journey: From Land to Your Hand</h2>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Kithul Making Process -->
                <div class="bg-white rounded-xl shadow-md p-8 border border-gray-200 hover:shadow-lg transition duration-300">
                    <h3 class="text-2xl font-bold text-green-800 mb-4">The Art of Kithul Tapping</h3>
                    <div class="mb-6">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/iOfuZl-y2qc?autoplay=1&mute=1" title="Kithul Tapping Process" frameborder="0" allow="autoplay; accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="rounded-lg shadow-sm"></iframe>
                    </div>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        Kithul products begin with the ancient practice of Kithul palm tapping. Generations of knowledge are passed down as skilled tappers carefully climb the majestic Kithul tree to collect its precious sap. This sap, a naturally sweet and nutritious liquid, is then meticulously processed.
                    </p>
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        For **Kithul Juice (Treacle)**, the sap is gently boiled over a wood fire, slowly reducing it to a thick, golden syrup – a pure, unadulterated taste of nature. For **Kithul Jaggery**, the boiling continues until the treacle crystallizes into solid blocks, traditionally poured into coconut shells to cool and harden. This labor-intensive process ensures the authentic flavor and quality of every piece.
                    </p>
                    <a href="{{ url('/products') }}" class="text-green-600 hover:underline font-semibold mt-4 inline-block">Discover Kithul Products &rightarrow;</a>
                </div>

                <!-- Turmeric Process -->
                <div class="bg-white rounded-xl shadow-md p-8 border border-gray-200 hover:shadow-lg transition duration-300">
                    <h3 class="text-2xl font-bold text-green-800 mb-4">From Root to Golden Spice: Our Turmeric</h3>
                    <img src="{{ asset('images/hero/Tumeric.jpg') }}" alt="Turmeric Processing" class="w-full rounded-lg mb-4 shadow-sm">
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Our turmeric powder begins with carefully grown turmeric rhizomes in the fertile soils of Kubukogolla. The rhizomes are harvested by hand, cleaned thoroughly, and sun-dried to preserve their vibrant golden color, aroma, and natural curcumin content. Once dried, the rhizomes are ground into a fine powder using traditional methods, ensuring maximum flavor, color, and nutritional value. This process, carried out by the local community, maintains the authentic, natural quality of turmeric while supporting sustainable village livelihoods.
                    </p>
                    <a href="{{ url('/products') }}" class="text-green-600 hover:underline font-semibold mt-4 inline-block">Shop Turmeric &rightarrow;</a>
                </div>
            </div>

            <!-- Slippers & Pepper Process -->
            <div class="container mx-auto px-4 mt-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Slippers Process -->
                    <div class="bg-white rounded-xl shadow-md p-8 border border-gray-200 hover:shadow-lg transition duration-300">
                        <h3 class="text-2xl font-bold text-green-800 mb-4">Weaving Comfort: Community Rubber Slippers</h3>
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/VQl6Mp2KbgM?autoplay=1&mute=1" title="Slipper Making Process" frameborder="0" allow="autoplay; accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="rounded-lg shadow-sm"></iframe>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Our rubber slippers are made from high-quality rubber, molded into durable slipper shapes. Each pair is carefully trimmed and finished by hand to ensure comfort and long-lasting wear. Produced by the Kubukogolla community, buying these slippers helps reduce reliance on the Knuckles Forest for income, supporting local livelihoods while providing sturdy, everyday footwear.
                        <a href="{{ url('/products') }}" class="text-green-600 hover:underline font-semibold mt-4 inline-block">Shop Rubber Slippers &rightarrow;</a>
                    </div>
                    <!-- Pepper Drying Process -->
                    <div class="bg-white rounded-xl shadow-md p-8 border border-gray-200 hover:shadow-lg transition duration-300">
                        <h3 class="text-2xl font-bold text-green-800 mb-4"> Pepper Drying</h3>
                        <iframe width="100%" height="350" src="https://youtube.com/embed/ZHg6WFzIFpg?autoplay=1&mute=1" title="pepper drying Process" frameborder="0" allow="autoplay; accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="rounded-lg shadow-sm"></iframe>
                        <p class="text-gray-700 leading-relaxed">
                            Our pepper is harvested at peak ripeness and dried using age-old methods under the Sri Lankan sun. This natural drying process preserves the pepper’s robust flavor and aroma, ensuring a premium spice for your kitchen. Local farmers carefully monitor the drying to maintain quality and support sustainable agriculture in our community.
                        </p>
                        <a href="{{ url('/products') }}" class="text-green-600 hover:underline font-semibold mt-4 inline-block">Shop Dryed pepper &rightarrow;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
</body>
</html>
</body>
</html>
