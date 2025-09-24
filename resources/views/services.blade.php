<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Our Services - Ududumbara Community</title>
    <meta name="title" content="Our Services - Ududumbara Community">
    <meta name="description" content="Experience authentic Sri Lankan culture through our community services. Artisan workshops, cultural tours, camping sites, and guided experiences in the Knuckles Conservation Area.">
    <meta name="keywords" content="Sri Lankan cultural tours, artisan workshops, camping sites, guided tours, Knuckles Conservation Area, community services, sustainable tourism, cultural experiences">
    <meta name="author" content="Ududumbara Community">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Our Services - Ududumbara Community">
    <meta property="og:description" content="Experience authentic Sri Lankan culture through our community services. Artisan workshops, cultural tours, camping sites, and guided experiences in the Knuckles Conservation Area.">
    <meta property="og:image" content="{{ asset('images/main.jpg') }}">
    <meta property="og:site_name" content="Ududumbara Community">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Our Services - Ududumbara Community">
    <meta property="twitter:description" content="Experience authentic Sri Lankan culture through our community services. Artisan workshops, cultural tours, camping sites, and guided experiences in the Knuckles Conservation Area.">
    <meta property="twitter:image" content="{{ asset('images/main.jpg') }}">

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
            background-color: #f8f8f8;
            color: #333;
        }
        html {
            scroll-behavior: smooth;
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
        .btn-primary {
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="text-gray-800">
    <x-header />

    <!-- Services Hero Section -->

    <section class="relative py-20 md:py-32 text-center overflow-hidden text-white">
        <!-- Background Image -->
        <div class="absolute inset-0 w-full h-full bg-cover bg-center" style="background-image: url('{{ asset('images/main.jpg') }}');"></div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="container mx-auto relative z-10 px-4">
            <h2 class="text-5xl font-extrabold mb-4">Our Community Services</h2>
            <p class="text-xl max-w-3xl mx-auto opacity-95">
                Experience the heart of Sri Lankan culture through our unique services, designed to connect you with our artisans and their traditions.
            </p>
        </div>
    </section>

    <!-- Detailed Services Section -->
    <main class="container mx-auto py-16 md:py-24 px-4 space-y-20">



        <!-- Service 3: workshop Community & Cultural Tours -->
        <section id="tours" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
             <div class="order-2 md:order-1">
                <h3 class="text-3xl font-bold text-green-800 mb-4">Artisan Workshops, Community & Cultural Tours</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Experience the vibrant culture and heritage of Kubukogolla with our hands-on artisan workshops. Learn the traditional art of making Kithul Pani and Kithul Hakuru, including live demonstrations of climbing and tapping the kithul palm. Participate in picking fresh gammiris (pepper) and preparing authentic Sri Lankan dishes like roti, thalapa, lunu miris, and other local cuisines.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Beyond food, engage with the community by joining local religious rituals and traditional ceremonies, including kothil events and seasonal village celebrations. These workshops offer a unique opportunity to immerse yourself in age-old customs, culinary traditions, and spiritual practices, connecting deeply with the lifestyle and culture of the Knuckles communit
                </p>
                <a href="#contact" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transition duration-300 btn-primary inline-block">Schedule a Tour</a>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('images/services/tours.png') }}" alt="Cultural Tours" class="rounded-xl shadow-lg w-full h-96 object-cover">
            </div>
        </section>

        <!-- Service 4: Kabana Stay -->
        <section id="kabana-stay" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('images/services/kabana.png') }}" alt="Kabana Stay" class="rounded-xl shadow-lg w-full h-96 object-cover">
            </div>
            <div>
                <h3 class="text-3xl font-bold text-green-800 mb-4">Kabana Stay</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Stay in our comfortable resort featuring two bedrooms, a living room, a kitchen, and a bathroom, perfect for families or small groups. Enjoy traditional Sri Lankan cuisine prepared with fresh local ingredients, from kithul-based dishes to roti, lunu miris, and more.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Explore the surroundings with adventurous activities like safe swimming at nearby spots, professional-guided diving, hiking trails, and relaxing nature walks. Immerse yourself in local culture by engaging with the community, learning traditional practices, and experiencing the heritage of Kubukogolla.
                </p>
                <a href="#contact" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transition duration-300 btn-primary inline-block">Check Availability</a>
            </div>
        </section>

        <!-- Service 5: Tour Guide -->
        <section id="tour-guide" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
             <div class="order-2 md:order-1">
                <h3 class="text-3xl font-bold text-green-800 mb-4">Local Tour Guides</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Explore the Knuckles region with our knowledgeable local guides, who offer an authentic and immersive experience. Discover hidden trails, scenic viewpoints, and natural swimming spots while learning about the local culture, traditions, and biodiversity.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Participate in community activities, traditional ceremonies, and culinary experiences, gaining deeper insight into the heritage and lifestyle of Kubukogolla. Safe, informative, and unforgettable — your gateway to the heart of the region.
                </p>
                <a href="#contact" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transition duration-300 btn-primary inline-block">Find Your Guide</a>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('images/services/tour_guide.png') }}" alt="Tour Guide" class="rounded-xl shadow-lg w-full h-96 object-cover">
            </div>
        </section>

        <!-- Service 6: Camping Sites -->
        <section id="camping-sites" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('images/services/camping_sites.png') }}" alt="Camping Sites" class="rounded-xl shadow-lg w-full h-96 object-cover">
            </div>
            <div>
                <h3 class="text-3xl font-bold text-green-800 mb-4">Scenic Camping Sites</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Immerse yourself in nature at our scenic camping site in the heart of the Knuckles region. Set up your tent amid lush surroundings and enjoy relaxing walks, nearby swimming spots, and guided hiking trails.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Experience traditional Sri Lankan cuisine, engage with the local community, and participate in cultural activities and ceremonies. Perfect for adventurers and families seeking a blend of nature, culture, and authentic village life.
                </p>
                <a href="#contact" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transition duration-300 btn-primary inline-block">Book a Campsite</a>
            </div>
        </section>

    </main>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 section-heading mx-auto">Inquire About Our Services</h2>
            <div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-200">
                <p class="text-center text-gray-700 mb-6">Interested in one of our services? Fill out the form below and we'll get back to you shortly.</p>
                <form class="space-y-4">
                    <div>
                        <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Name</label>
                        <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Your Name">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Your Email">
                    </div>
                    <div>
                        <label for="service-interest" class="block text-gray-700 text-sm font-semibold mb-2">Service of Interest</label>
                        <select id="service-interest" name="service-interest" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                            <option>General Inquiry</option>
                            <option>Artisan Workshops</option>
                            <option>Community & Cultural Tours</option>
                            <option>Kabana Stay</option>
                            <option>Local Tour Guides</option>
                            <option>Camping Sites</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 text-sm font-semibold mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Please provide some details about your request."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-md transition duration-300 btn-primary">Send Inquiry</button>
                </form>
            </div>
        </div>
    </section>

    <x-footer />
</body>
</html>
