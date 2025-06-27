<!-- Font Awesome for social icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eOOK3iZv8e/CIGHNkrLBCARmvceJpRGenSGAdewrLS2iZouJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<footer class="bg-green-100/80 backdrop-blur-md text-gray-800 border-t border-green-200">
    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-gray-600 text-sm">
            <!-- Logo and Description (Container) -->
            <div class="space-y-4 md:col-span-2 lg:col-span-1 p-4 rounded-lg">
                <a href="{{ url('/') }}" class="flex items-center space-x-3">
                    <img class="h-16 w-auto" src="{{ asset('images/logoo.png') }}" alt="Logo">
                    <span class="font-semibold text-lg text-green-800">Knuckles Products</span>
                </a>
                <p class="text-gray-600">
                    Connecting you with authentic, handcrafted goods from the heart of Sri Lankan communities. Support local artisans and embrace tradition.
                </p>
                <div class="flex space-x-4 text-gray-500 pt-2">
                    <a href="#" class="hover:text-green-700 transition-colors"><i class="fab fa-x-twitter fa-lg"></i></a>
                    <a href="#" class="hover:text-green-700 transition-colors"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="hover:text-green-700 transition-colors"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="hover:text-green-700 transition-colors"><i class="fab fa-linkedin fa-lg"></i></a>
                </div>
            </div>

            <!-- Explore -->
            <div class="lg:border-r lg:border-green-300">
                <h4 class="font-semibold text-green-800 mb-4">Explore</h4>
                <ul class="space-y-3">
                    <li><<div class="space-y-4 md:col-span-2 lg:col-span-1 p-4 rounded-lg bg-white shadow-md">
                        <!-- ... logo and description content ... -->
                    </div>
                    <div class="space-y-4 md:col-span-2 lg:col-span-1 p-4 rounded-lg bg-white shadow-md">
                        <!-- ... logo and description content ... -->
                    </div>
                    <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
                    <li><a href="{{ url('/products') }}" class="hover:underline">Products</a></li>
                    <li><a href="{{ url('/services') }}" class="hover:underline">Services</a></li>
                    <li><a href="{{ url('/how-its-made') }}" class="hover:underline">How It's Made</a></li>
                </ul>
            </div>

            <!--services -->
            <div>
                <h4 class="font-semibold text-green-800 mb-4">Services</h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('/workshops') }}" class="hover:underline">Artisan workshops</a></li>
                    <li><a href="{{ url('/tours') }}" class="hover:underline">Community & Cultural Tours</a></li>
                    <li><a href="{{ url('/kabana-stay') }}" class="hover:underline">kabana-stay</a></li>
                    <li><a href="{{ url('/tour-guide') }}" class="hover:underline">tour guide</a></li>
                    <li><a href="{{ url('/camping-sites') }}" class="hover:underline">camping sites</a></li>

                </ul>
            </div>

            <!-- Company -->
            <div>
                <h4 class="font-semibold text-green-800 mb-4">Company</h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('/our-story') }}" class="hover:underline">Our Story</a></li>
                    <li><a href="{{ url('/#contact') }}" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h4 class="font-semibold text-green-800 mb-4">Legal</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Terms of Service</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom -->
        <div class="mt-12 border-t border-green-200 pt-6 flex flex-col md:flex-row justify-between text-xs text-gray-500">
            <p>&copy; {{ date('Y') }} Ududumbara Community. All rights reserved.</p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
