<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Ududumbara Community</title>
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

        <!-- Service 2: Artisan Workshops -->
        <section id="workshops" class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <img src="{{ asset('images/services/artisan_worksop.png') }}" alt="Artisan Workshops" class="rounded-xl shadow-lg w-full h-96 object-cover">
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
                    Experience the great outdoors with our designated camping sites. Set up your tent in breathtaking locations with stunning views of the Knuckles Mountain Range.
                </p>
                <p class="text-gray-700 leading-relaxed mb-6">
                    Our sites provide a safe and serene environment for you to connect with nature. Whether you're an experienced camper or new to it, we offer basic amenities to ensure a comfortable and memorable stay under the stars.
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
