<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Ududumbara Community</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Ududumbara Commiunity', sans-serif;
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
    <section class="relative py-20 md:py-32 text-center overflow-hidden bg-emerald-500 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-5xl font-extrabold mb-4">Our Community Services</h2>
            <p class="text-xl max-w-3xl mx-auto opacity-90">
                Experience the heart of Sri Lankan culture through our unique services, designed to connect you with our artisans and their traditions.
            </p>
        </div>
    </section>

    <!-- Detailed Services Section -->
    <main class="container mx-auto py-16 md:py-24 px-4 space-y-20">

        <!-- Service 1: Custom & Bulk Orders -->
        <section id="custom-orders" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="order-2 md:order-1">
                <h3 class="text-3xl font-bold text-green-800 mb-4">Custom & Bulk Orders</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Looking for unique corporate gifts, wedding favors, or special event decorations? We offer bespoke services to bring your vision to life. Our artisans can create custom versions of our products or design something entirely new for you.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    We handle bulk orders with care, ensuring each item maintains its handcrafted quality. Contact us to discuss your requirements, and we'll work with you to create something truly memorable.
                </p>
                <a href="#contact" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transition duration-300 btn-primary inline-block">Request a Quote</a>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('images/services/custom-orders.jpg') }}" alt="Custom Orders" class="rounded-xl shadow-lg w-full h-96 object-cover">
            </div>
        </section>

        <!-- Service 2: Artisan Workshops -->
        <section id="workshops" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('images/services/workshops.jpg') }}" alt="Artisan Workshops" class="rounded-xl shadow-lg w-full h-96 object-cover">
            </div>
            <div>
                <h3 class="text-3xl font-bold text-green-800 mb-4">Artisan Workshops</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Immerse yourself in Sri Lankan craft with our hands-on workshops. Learn the secrets of Kithul tapping, try your hand at traditional weaving, or discover the art of natural dyeing.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Led by our most experienced artisans, these workshops offer a unique opportunity to connect with the culture, learn a new skill, and create your own handcrafted souvenir to take home. Suitable for all ages and skill levels.
                </p>
                <a href="#contact" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transition duration-300 btn-primary inline-block">Book a Workshop</a>
            </div>
        </section>

        <!-- Service 3: Community & Cultural Tours -->
        <section id="tours" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
             <div class="order-2 md:order-1">
                <h3 class="text-3xl font-bold text-green-800 mb-4">Community & Cultural Tours</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Journey into the heart of our villages with a guided cultural tour. See firsthand where our products come from, meet the artisans and their families, and experience the rhythm of daily life in rural Sri Lanka.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Our tours include visits to Kithul groves, artisan homes, and local markets. Enjoy a traditional home-cooked meal and listen to stories that have been passed down through generations. It's an authentic, unforgettable experience.
                </p>
                <a href="#contact" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transition duration-300 btn-primary inline-block">Schedule a Tour</a>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('images/services/tours.jpg') }}" alt="Cultural Tours" class="rounded-xl shadow-lg w-full h-96 object-cover">
            </div>
        </section>

        <!-- Service 4: Kabana Stay -->
        <section id="kabana-stay" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('images/services/kabana-stay.jpg') }}" alt="Kabana Stay" class="rounded-xl shadow-lg w-full h-96 object-cover">
            </div>
            <div>
                <h3 class="text-3xl font-bold text-green-800 mb-4">Kabana Stay</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Escape the hustle and bustle and find tranquility in our traditional Kabana. Nestled in nature, our eco-friendly accommodations offer a rustic yet comfortable stay.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Wake up to the sounds of the forest, enjoy meals made from fresh, local ingredients, and spend your days exploring the beautiful surroundings. It's the perfect retreat for nature lovers and those seeking a peaceful getaway.
                </p>
                <a href="#contact" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transition duration-300 btn-primary inline-block">Check Availability</a>
            </div>
        </section>

        <!-- Service 5: Tour Guide -->
        <section id="tour-guide" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
             <div class="order-2 md:order-1">
                <h3 class="text-3xl font-bold text-green-800 mb-4">Local Tour Guides</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Explore the Knuckles Mountain Range and surrounding areas with an experienced local guide. Our guides are born and raised in these hills and possess an unparalleled knowledge of the trails, wildlife, and hidden gems.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Whether you're looking for a challenging trek, a gentle nature walk, or a bird-watching expedition, our guides can tailor a tour to your interests and fitness level, ensuring a safe and enriching adventure.
                </p>
                <a href="#contact" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transition duration-300 btn-primary inline-block">Find Your Guide</a>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('images/services/tour-guide.jpg') }}" alt="Tour Guide" class="rounded-xl shadow-lg w-full h-96 object-cover">
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
                            <option>Custom & Bulk Orders</option>
                            <option>Artisan Workshops</option>
                            <option>Community & Cultural Tours</option>
                            <option>Kabana Stay</option>
                            <option>Local Tour Guides</option>
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
</html><a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'text-green-700 font-bold border-green-700' : 'text-gray-600 font-medium border-transparent' }} pb-1 border-b-2 hover:text-green-700 transition duration-300">Services</a>
