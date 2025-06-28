<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lankan Community Delights</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com/3.4.0"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: rgb(248, 248, 248);
        color: #333;
    }
    
    /* Browser compatibility reset */
    *, *::before, *::after {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    
    /* Fix for Chrome flexbox interpretation */
    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        max-width: 100%;
    }
    
    @media (min-width: 768px) {
        .product-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (min-width: 1024px) {
        .product-grid {
            grid-template-columns: repeat(4, 1fr);
            max-width: 1200px;
            margin: 0 auto;
        }
    }
    
    /* Product card fixed dimensions */
    .product-card {
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        height: auto;
        min-height: 450px;
    }
    
    .product-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        object-position: center;
        border-radius: 0.75rem;
        flex-shrink: 0;
    }
    
    .product-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 1.5rem;
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
</style>
</head>
<body class="text-gray-800">
    <x-header />

    <!-- Hero Section -->
    <section class="relative py-20 md:py-32 text-center overflow-hidden">
        <!-- Slider Container -->
        <div id="hero-slider" class="absolute inset-0 w-full h-full">
            <!-- Slide Images (Absolute positioned, controlled by JS) -->
            {{-- Add your actual hero images here. Use absolute inset-0 for full coverage. --}}
            {{-- The 'transition-opacity' and 'duration-1000' classes handle the fade effect --}}
            {{-- The 'opacity-0' class makes them initially hidden. JS will control which one is 'opacity-100' --}}
            <div class="absolute inset-0 w-full h-full bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0" style="background-image: url('{{ asset('images/hero/slide-image-1.jpg') }}');"></div>
            <div class="absolute inset-0 w-full h-full bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0" style="background-image: url('{{ asset('images/hero/slide-image-2.jpg') }}');"></div>
            <div class="absolute inset-0 w-full h-full bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0" style="background-image: url('{{ asset('images/hero/slide-image-3.jpg') }}');"></div>
            {{-- Add more slide divs here for additional images --}}
            <div class="absolute inset-0 w-full h-full bg-cover bg-center transition-opacity duration-1000 ease-in-out opacity-0" style="background-image: url('{{ asset('images/hero/slide-image-4.jpg') }}');"></div>
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-40"></div>

        <!-- Content -->
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-4xl md:text-6xl text-white font-extrabold leading-tight mb-6">Authentic Sri Lankan Delights & Handcrafted Treasures</h1>
            <p class="text-lg text-white md:text-xl mb-10 max-w-3xl mx-auto">Savor the rich taste of tradition and experience the beauty of community-made products, sustainably sourced from the heart of Sri Lanka.</p>
            <a href="{{ url('/products') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 btn-primary">Explore Our Products</a>
        </div>
        <!-- Navigation Dots -->
        <div id="slider-dots" class="absolute bottom-8 left-0 right-0 flex justify-center space-x-3 z-20">
            {{-- Add a button for each slide. JS will control the 'active' state. --}}
            <button class="w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-80 transition duration-300 dot"></button>
            <button class="w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-80 transition duration-300 dot"></button>
            <button class="w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-80 transition duration-300 dot"></button>
            <button class="w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-80 transition duration-300 dot"></button>
        </div>
    </section>
    <!-- Products Section -->
<section id="products" class="relative py-16 md:py-24">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 bg-cover bg-center blur-sm" style="background-image: url('{{ asset('images/main.jpg') }}');"></div>
    <div class="absolute inset-0 bg-black opacity-50"></div>

    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 section-heading mx-auto text-white">Our Featured Products</h2>

        <div class="product-grid">
            <!-- Product Card: Kithul Jaggery -->
            <div class="product-card bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-green-600">
                <img src="{{ asset('images/products/kithul-jaggery.jpg') }}" alt="Kithul Jaggery" class="product-img">
                <div class="product-content">
                    <div>
                        <h3 class="font-semibold text-xl mb-2 text-green-800">Pure Kithul Jaggery</h3>
                        <p class="text-gray-600 text-sm mb-4">A natural sweetener with a unique caramel flavor, traditionally made from the sap of the Kithul palm.</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 850.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Kithul Juice -->
            <div class="product-card bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-green-600">
                <img src="{{ asset('images/products/kithul-juice.jpg') }}" alt="Kithul Juice" class="product-img">
                <div class="product-content">
                    <div>
                        <h3 class="font-semibold text-xl mb-2 text-green-800">Fresh Kithul Juice (Treacle)</h3>
                        <p class="text-gray-600 text-sm mb-4">Liquid golden nectar, perfect as a topping or natural syrup, rich in traditional flavor.</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 700.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Turmeric Powder -->
            <div class="product-card bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-green-600">
                <img src="{{ asset('images/products/turmeric-powder.jpg') }}" alt="Turmeric Powder" class="product-img">
                <div class="product-content">
                    <div>
                        <h3 class="font-semibold text-xl mb-2 text-green-800">Organic Turmeric Powder</h3>
                        <p class="text-gray-600 text-sm mb-4">Pure, potent turmeric, hand-processed by local farmers for maximum flavor and health benefits.</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 450.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Community Hand Slippers -->
            <div class="product-card bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-green-600">
                <img src="{{ asset('images/products/handwoven-slippers.jpg') }}" alt="Hand Slippers" class="product-img">
                <div class="product-content">
                    <div>
                        <h3 class="font-semibold text-xl mb-2 text-green-800">Hand-Woven Community Slippers</h3>
                        <p class="text-gray-600 text-sm mb-4">Comfortable and stylish slippers, hand-crafted with natural fibers by skilled village artisans.</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 1200.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- How It's Made Summary Section -->
    <section id="how-its-made-summary" class="py-16 md:py-24 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4 section-heading mx-auto">From Land to Your Hand</h2>
            <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">
                Every product tells a story of tradition, dedication, and community. We follow time-honored methods to bring you authentic, high-quality goods straight from the heart of Sri Lanka.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center max-w-5xl mx-auto">
                <!-- Left Side: Image -->
                <div class="rounded-xl overflow-hidden shadow-lg">
                    <img src="{{ asset('images/hero/kithulTapping.jpg') }}" alt="Artisan crafting a product" class="w-full h-auto md:h-96 object-cover rounded-xl">
                </div>
                <!-- Right Side: Text -->
                <div class="bg-gray-50 rounded-xl p-4 shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105  ">
                    <h3 class="text-2xl font-bold text-green-800 mb-4">The Art of Our Craft</h3>
                    <p class="text-gray-700 mb-4 leading-relaxed ">
                        From the ancient practice of Kithul palm tapping to the careful harvesting of organic turmeric, our processes are steeped in tradition. Skilled artisans use natural materials to handcraft each item, ensuring every product you receive supports sustainable livelihoods.
                    </p>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        This dedication preserves our heritage and brings a piece of Sri Lankan culture to you.
                    </p>
                    <a href="{{ url('/how-its-made') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-lg transition duration-300 btn-primary inline-block">Learn How It's Made</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section id="services" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 section-heading mx-auto">Our Services</h2>
            <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12">
                Beyond our products, we offer unique experiences and services that connect you directly with our community's culture and craftsmanship.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                
                <!-- Service Card 2: Workshops -->
                <div class="text-center p-8 bg-gray-50 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition duration-300">
                    <div class="mb-4 inline-block p-4 bg-green-100 rounded-full">
                        <svg class="w-10 h-10 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0l-3.172 3.172a1 1 0 00.707 1.707H17.62a1 1 0 00.707-1.707l-3.172-3.172M6.75 15.75c0-1.02.424-1.93.992-2.599a3.75 3.75 0 115.516 0c.568.67.992 1.579.992 2.599s-.424 1.93-.992 2.599a3.75 3.75 0 11-5.516 0c-.568-.67-.992-1.579-.992-2.599z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-green-800 mb-2">Artisan Workshops</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Join our hands-on workshops and learn traditional crafts like kithul tapping and weaving directly from our skilled artisans.
                    </p>
                    <a href="{{ url('/services#workshops') }}" class="text-green-600 hover:underline font-semibold mt-4 inline-block">Learn More &rightarrow;</a>
                </div>

                <!-- Service Card 3: Cultural Tours -->
                <div class="text-center p-8 bg-gray-50 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition duration-300">
                    <div class="mb-4 inline-block p-4 bg-green-100 rounded-full">
                        <svg class="w-10 h-10 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-green-800 mb-2">Community & Cultural Tours</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Experience the heart of Sri Lankan village life. Visit our communities, see how our products are made, and enjoy the local culture.
                    </p>
                    <a href="{{ url('/services#tours') }}" class="text-green-600 hover:underline font-semibold mt-4 inline-block">Book a Tour &rightarrow;</a>
                </div>

                <!-- Service Card 4: Kabana Stay -->
                <div class="text-center p-8 bg-gray-50 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition duration-300">
                    <div class="mb-4 inline-block p-4 bg-green-100 rounded-full">
                        <svg class="w-10 h-10 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.931 0-3.598 1.126-4.312 2.733-.715-1.607-2.381-2.733-4.311-2.733C5.101 3.75 3 5.765 3 8.25c0 .722.273 1.398.744 1.885M5 9.75h14.002c.266 0 .52.102.706.29.188.187.29.442.29.71v5.282c0 .267-.102.52-.29.707-.186.187-.44.29-.706.29H5c-.266 0-.52-.102-.706-.29-.187-.186-.29-.44-.29-.707V10.75c0-.268.103-.52.29-.707.187-.188.44-.29.706-.29h.002z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-green-800 mb-2">Kabana Stay</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Immerse yourself in nature with a tranquil stay in our traditional Kabana. Experience the serenity of village life.
                    </p>
                    <a href="{{ url('/services#kabana-stay') }}" class="text-green-600 hover:underline font-semibold mt-4 inline-block">Book Your Stay &rightarrow;</a>
                </div>

                <!-- Service Card 5: Tour Guide -->
                <div class="text-center p-8 bg-gray-50 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition duration-300">
                    <div class="mb-4 inline-block p-4 bg-green-100 rounded-full">
                        <svg class="w-10 h-10 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75a2.25 2.25 0 012.25 2.25V15m0 0l-3-3m3 3l-3 3M7.5 19.5h-4.5c-1.08 0-1.988-.79-1.988-1.777v-8.447c0-.988.908-1.777 1.988-1.777h4.5m0 0c.96.001 1.887.291 2.621.795l3.5 3.5c.445.445.714 1.036.714 1.677v2.016" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-green-800 mb-2">Tour Guide</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Enhance your visit with a knowledgeable local guide. Discover hidden gems and gain deeper insights into the area's culture and nature.
                    </p>
                    <a href="{{ url('/services#tour-guide') }}" class="text-green-600 hover:underline font-semibold mt-4 inline-block">Find a Guide &rightarrow;</a>
                </div>

                <!-- Service Card 6: Camping Sites -->
                <div class="text-center p-8 bg-gray-50 rounded-xl shadow-md border border-gray-200 hover:shadow-lg transition duration-300">
                    <div class="mb-4 inline-block p-4 bg-green-100 rounded-full">
                        <svg class="w-10 h-10 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.362-3.797zM15.362 5.214C14.267 5.072 13.16 5 12 5c-1.16 0-2.267.072-3.362.214m6.724 0a3.375 3.375 0 013.375 3.375c0 1.623-1.093 3.023-2.588 3.543m-6.724 0c1.093-.52 2.588-1.92 2.588-3.543a3.375 3.375 0 013.375-3.375" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-green-800 mb-2">Camping Sites</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Connect with nature at our scenic camping sites. Enjoy stunning views and a peaceful retreat under the stars.
                    </p>
                    <a href="{{ url('/services#camping-sites') }}" class="text-green-600 hover:underline font-semibold mt-4 inline-block">Book a Site &rightarrow;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-16 bg-green-700 text-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Support Local, Experience Authentic!</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Discover the genuine taste and craftsmanship that comes directly from the hands of Sri Lankan communities.</p>
            <a href="{{ url('/products') }}" class="bg-white text-green-700 hover:bg-gray-200 font-bold py-3 px-8 rounded-full shadow-lg transition duration-300 btn-primary">Shop Now</a>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 section-heading mx-auto">Get In Touch</h2>
            <div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-200">
                <p class="text-center text-gray-700 mb-6">Have questions or want to learn more about our products and communities?</p>
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
                        <label for="message" class="block text-gray-700 text-sm font-semibold mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-md transition duration-300 btn-primary">Send Message</button>
                </form>
            </div>
            <div class="text-center text-gray-600 mt-8">
                <p>Email: <a href="mailto:info@lankaharvests.com" class="text-green-700 hover:underline">info@lankaharvests.com</a></p>
                <p>Phone: +94 XX XXX XXXX</p>
                <p>Follow Us: 
                    <a href="#" class="text-green-700 hover:text-green-800 mx-2"><svg class="inline-block w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.247 0-1.64.773-1.64 1.562V12h2.773l-.443 2.89h-2.33V22C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg></a>
                    <a href="#" class="text-green-700 hover:text-green-800 mx-2"><svg class="inline-block w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.002 3.797.048.843.04 1.144.109 1.523.272.474.205.786.679.996 1.176.222.5.27.847.275 2.759v.007c0 4.29-2.652 7.789-6.237 8.56.06.635.1.96.1 1.29 0 1.957-.66 2.21-1.29 2.21-.247 0-.52-.028-.73-.047-.381-.035-1.173-.107-1.472-.258-.298-.151-.594-.474-.917-.936-.323-.462-.562-.894-.592-1.343-.028-.448-.02-1.09.02-2.316.035-1.226.062-1.767.118-2.227.114-.46.305-.758.536-.985.23-.227.502-.344.976-.413.395-.06.843-.1 1.705-.138 2.029-.009 2.379-.009 3.841.062 1.34.062 2.22.18 2.502.324.298.15.547.464.761.933.214.468.27.848.275 2.766v.007a.274.274 0 01-.27.27h-4.507c-.495 0-.895-.4-.895-.895v-3.773h.907c.496 0 .895-.4.895-.895a.895.895 0 00-.895-.895h-.907V7.078h.923c.496 0 .895-.4.895-.895a.895.895 0 00-.895-.895h-.923V4.288c0-1.912-.047-2.259-.275-2.759-.22-.497-.532-.97-.996-1.176-.379-.163-.68-.232-1.523-.272C14.866 2.002 14.512 2 12.082 2h-.001zm-3.11 3.23c-1.343 0-2.434 1.104-2.434 2.46s1.091 2.46 2.434 2.46 2.434-1.104 2.434-2.46-1.091-2.46-2.434-2.46z" clip-rule="evenodd" /></svg></a>
                    <a href="#" class="text-green-700 hover:text-green-800 mx-2"><svg class="inline-block w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M22.162 5.602c-.628.278-1.3.465-2.002.55.723-.434 1.278-1.12 1.538-1.942-.676.4-1.42.69-2.216.85.63-1.054.346-2.39-1.265-2.924C16.92 1.058 15.65 1 14.31 1.018c-2.336.012-4.223 1.916-4.212 4.254.004.34.037.674.098 1.002C6.91 6.136 3.996 4.54 1.91 1.836c-.352.607-.547 1.307-.547 2.037 0 1.405.717 2.646 1.808 3.375-.667-.02-1.296-.205-1.848-.508v.025c0 2.072 1.467 3.805 3.414 4.195-.36.096-.74.148-1.134.148-.278 0-.547-.027-.81-.073.54 1.704 2.113 2.94 3.97 2.972C9.444 17.575 7.6 18.25 5.56 18.25c-.356 0-.705-.02-.857-.047 1.884 1.21 4.12 1.917 6.543 1.917 7.848 0 12.128-6.52 12.128-12.128v-.546c.83-.598 1.545-1.34 2.112-2.193z"/></svg></a>
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('#hero-slider > div'); // Select the slide divs
            const dots = document.querySelectorAll('#slider-dots .dot');
            let currentSlide = 0;
            const slideInterval = 5000; // 5 seconds per slide
            const transitionDuration = 1000; // Matches CSS transition duration

            function showSlide(index) {
                // Ensure index is within bounds
                index = (index + slides.length) % slides.length;

                // Hide all slides
                slides.forEach(slide => {
                    slide.classList.remove('opacity-100');
                    slide.classList.add('opacity-0');
                });
                // Deactivate all dots
                dots.forEach(dot => {
                    dot.classList.remove('opacity-100');
                    dot.classList.add('opacity-50');
                });

                // Show the selected slide after a brief delay to allow transition
                 setTimeout(() => {
                    slides[index].classList.remove('opacity-0');
                    slides[index].classList.add('opacity-100');
                 }, 50); // Small delay to ensure opacity: 0 is applied first

                // Activate the corresponding dot
                dots[index].classList.remove('opacity-50');
                dots[index].classList.add('opacity-100');

                currentSlide = index;
            }
            // Initial display
            showSlide(currentSlide);

            // Auto slide
            setInterval(() => showSlide(currentSlide + 1), slideInterval);

            // Dot navigation
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    // Manual navigation - just show the slide, auto slide continues
                    showSlide(index);
                });
            });

            // Attach event listeners to "Add to Cart" buttons
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', () => {
                    const card = button.closest('.product-card'); // Product card container
                    if (card) {
                        const name = card.querySelector('h3').textContent;
                        const priceText = card.querySelector('.text-green-700.font-bold').textContent;
                        const price = parseFloat(priceText.replace('LKR ', '').trim());
                        const image = card.querySelector('img.product-img').src;
                        
                        // Call the global addToCart function from cart component
                        if (window.addToCart) {
                            window.addToCart(name, price, image);
                        }
                    }
                });
            });
        });
    </script>

    </body>
    </html>>
                
                            