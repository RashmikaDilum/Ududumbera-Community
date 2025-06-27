<!-- Font Awesome for social icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eOOK3iZv8e/CIGHNkrLBCARmvceJpRGenSGAdewrLS2iZouJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<footer class="bg-gradient-to-br from-slate-900 via-gray-800 to-slate-900 text-white">
    <div class="max-w-6xl mx-auto px-6 py-16">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Logo and Description -->
            <div class="lg:col-span-2 text-center lg:text-left">
                <div class="mb-6">
                    <a href="{{ url('/') }}" class="inline-flex items-center justify-center lg:justify-start space-x-3 mb-4">
                        <img class="h-40 w-auto" src="{{ asset('images/logoo.png') }}" alt="Logo">
                        <span class="font-bold text-xl text-white">Knuckles Products</span>
                    </a>
                    <p class="text-gray-300 leading-relaxed max-w-md mx-auto lg:mx-0">
                        Connecting you with authentic, handcrafted goods from the heart of Sri Lankan communities. Support local artisans and embrace tradition.
                    </p>
                </div>

                <!-- Social Media -->
                <div class="flex justify-center lg:justify-start space-x-4">
                    <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <img src="{{ asset('images/footer/facebook.png') }}"alt="icon" class="w-4 h-4 object-contain" />
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <img src="{{ asset('images/footer/instagram.png') }}" alt="icon" class="w-4 h-4 object-contain" />
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <img src="{{ asset('images/footer/twitter.png') }}" alt="icon" class="w-4 h-4 object-contain" />
                    </a>
                    <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-green-600 rounded-full flex items-center justify-center transition-all duration-300 hover:scale-110">
                        <img src="{{ asset('images/footer/linkdin.png') }}" alt="icon" class="w-4 h-4 object-contain" />
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="text-center lg:text-left">
                <h4 class="font-semibold text-lg text-white mb-6 relative">
                    Quick Links
                    <span class="absolute bottom-0 left-1/2 lg:left-0 transform -translate-x-1/2 lg:translate-x-0 w-12 h-0.5 bg-green-500"></span>
                </h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}" class="text-gray-300 hover:text-green-400 transition-colors duration-200">Home</a></li>
                    <li><a href="{{ url('/products') }}" class="text-gray-300 hover:text-green-400 transition-colors duration-200">Products</a></li>
                    <li><a href="{{ url('/services') }}" class="text-gray-300 hover:text-green-400 transition-colors duration-200">Services</a></li>
                    <li><a href="{{ url('/how-its-made') }}" class="text-gray-300 hover:text-green-400 transition-colors duration-200">How It's Made</a></li>
                    <li><a href="{{ url('/our-story') }}" class="text-gray-300 hover:text-green-400 transition-colors duration-200">Our Story</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="text-center lg:text-left">
                <h4 class="font-semibold text-lg text-white mb-6 relative">
                    Our Services
                    <span class="absolute bottom-0 left-1/2 lg:left-0 transform -translate-x-1/2 lg:translate-x-0 w-12 h-0.5 bg-green-500"></span>
                </h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('/workshops') }}" class="text-gray-300 hover:text-green-400 transition-colors duration-200">Artisan Workshops</a></li>
                    <li><a href="{{ url('/tours') }}" class="text-gray-300 hover:text-green-400 transition-colors duration-200">Cultural Tours</a></li>
                    <li><a href="{{ url('/kabana-stay') }}" class="text-gray-300 hover:text-green-400 transition-colors duration-200">Kabana Stay</a></li>
                    <li><a href="{{ url('/tour-guide') }}" class="text-gray-300 hover:text-green-400 transition-colors duration-200">Tour Guide</a></li>
                    <li><a href="{{ url('/camping-sites') }}" class="text-gray-300 hover:text-green-400 transition-colors duration-200">Camping Sites</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="border-t border-gray-700 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
                <p class="mb-4 md:mb-0">&copy; {{ date('Y') }} Ududumbara Community. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-green-400 transition-colors duration-200">Privacy Policy</a>
                    <a href="#" class="hover:text-green-400 transition-colors duration-200">Terms of Service</a>
                    <a href="{{ url('/#contact') }}" class="hover:text-green-400 transition-colors duration-200">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
