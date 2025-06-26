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
                    At Lanka Harvests, our journey began with a simple yet profound vision: to connect the rich, authentic products of Sri Lankan rural communities directly with discerning customers worldwide. We believe in sustainable practices, fair trade, and empowering the talented individuals who uphold generations of traditional craftsmanship and farming methods.
                </p>
                <img src="https://placehold.co/800x450/b0d7c0/0a4d0f?text=Happy+Community+Members" alt="Community Empowerment" class="w-full rounded-xl shadow-md my-8">
                <p>
                    Every purchase from our store directly contributes to the livelihoods of these communities, helping to preserve traditional skills, support local economies, and ensure a brighter future for families. From the diligent Kithul tappers scaling ancient palms to the skilled hands weaving intricate slippers and the dedicated farmers nurturing vibrant turmeric, each product tells a story of heritage, hard work, and hope.
                </p>
                <p>
                    We are more than just a marketplace; we are a bridge. A bridge that connects you to the heart of Sri Lanka, its authentic flavors, and its enduring traditions. Thank you for being a part of our story.
                </p>
            </div>
        </div>
    </section>

    <x-footer />
</body>
</html>