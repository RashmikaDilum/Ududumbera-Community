<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Our Story - Knuckles Products | Ududumbara Community</title>
    <meta name="title" content="Our Story - Knuckles Products | Ududumbara Community">
    <meta name="description" content="Learn about the Ududumbara Community's journey in empowering local villages within the UNESCO World Heritage Knuckles Conservation Area through sustainable agriculture and traditional crafts.">
    <meta name="keywords" content="Ududumbara Community story, Knuckles Conservation Area, UNESCO World Heritage, sustainable agriculture, community empowerment, Sri Lankan villages, Kubukkgolla, Pussalla, Meemure">
    <meta name="author" content="Ududumbara Community">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Our Story - Knuckles Products | Ududumbara Community">
    <meta property="og:description" content="Learn about the Ududumbara Community's journey in empowering local villages within the UNESCO World Heritage Knuckles Conservation Area through sustainable agriculture and traditional crafts.">
    <meta property="og:image" content="{{ asset('images/happyCommiunityMenbers.jpg') }}">
    <meta property="og:site_name" content="Ududumbara Community">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Our Story - Knuckles Products | Ududumbara Community">
    <meta property="twitter:description" content="Learn about the Ududumbara Community's journey in empowering local villages within the UNESCO World Heritage Knuckles Conservation Area through sustainable agriculture and traditional crafts.">
    <meta property="twitter:image" content="{{ asset('images/happyCommiunityMenbers.jpg') }}">

    <!-- Additional SEO Meta Tags -->
    <meta name="geo.region" content="LK">
    <meta name="geo.placename" content="Knuckles Conservation Area, Sri Lanka">
    <meta name="theme-color" content="#008000">
    <link rel="canonical" href="{{ url()->current() }}">

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

    <!-- Our Story Section -->
    <section id="our-story" class="pt-32 pb-16 md:pt-36 md:pb-24 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 section-heading mx-auto">Our Story: Empowering Communities</h2>
            <div class="max-w-4xl mx-auto text-lg leading-relaxed text-gray-700 space-y-6">
                <p>
                    Nestled within the Knuckles Conservation Area – a UNESCO World Heritage site in Sri Lanka – the villages of Kubukkgolla, Pussalla, and Meemure are home to communities who lead simple, traditional lives rooted in centuries-old customs. These communities depend on sustainable agriculture for their livelihoods, cultivating their home gardens and collecting various commercial forest products from the surrounding protected area.
                </p>
                <img src="{{ asset('images/happyCommiunityMenbers.jpg') }}" alt="Happy community members from the Knuckles Conservation Area" class="rounded-xl shadow-lg w-full h-auto">
                <p>
                    Thanks to these unique conditions and practices, they produce naturally grown, chemical-free ingredients of exceptional quality. By applying modern processing techniques, these pure harvests are transformed into final products that retain their natural goodness, ensuring they are healthy and safe for consumers.
                </p>
                <p>
                    This effort is part of a project supported by the United Nations Global Environment Facility Small Grants Programme. Through this initiative, we work with local farmers to bring these exceptional, sustainable products directly from their hands to yours — fostering friendship among nations while preserving the rich biodiversity of the Knuckles Range
                </p>
            </div>
        </div>
    </section>

    <x-footer />
</body>
</html>
