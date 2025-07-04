<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Story - Knuckles Products</title>
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
    <section id="our-story" class="py-16 md:py-24 bg-white">
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
