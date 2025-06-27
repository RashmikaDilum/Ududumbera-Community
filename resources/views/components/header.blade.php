<header id="main-header" class="sticky top-0 bg-black/70 backdrop-blur-sm shadow-sm p-4 h-24 w-full z-50 transition-transform duration-300 ease-in-out">
    <div class="container mx-auto h-full relative">
        <!-- Left Logo (Overlaid) - Positioned absolutely relative to the container div -->
        <div class="absolute left-0 -top-2 z-20">
            <a href="{{ url('/') }}" class="block bg-transparent p-2 rounded-full">
                <img class="h-28 w-auto max-w-none" src="{{ asset('images/logoo.png') }}" alt="Logo" style="display: block;">
            </a>
        </div>

        <nav class="flex items-center h-full">
            <!-- Left spacer to push content to center, and account for logo space -->
            <!-- The logo is absolute, so this div creates the necessary left padding/spacing -->
            <div class="flex-1 min-w-[160px]"></div>

            <!-- Desktop Navigation Links (Centered) -->
            <div class="space-x-6 md:flex hidden flex-shrink-0">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-green-400 font-bold border-green-400' : 'text-gray-200 font-medium border-transparent' }} pb-1 border-b-2 hover:text-green-400 transition duration-300">Home</a>
                <a href="{{ url('/our-story') }}" class="{{ request()->is('our-story') ? 'text-green-400 font-bold border-green-400' : 'text-gray-200 font-medium border-transparent' }} pb-1 border-b-2 hover:text-green-400 transition duration-300 hidden md:block">Our Story</a>
                <a href="{{ url('/products') }}" class="{{ request()->is('products') ? 'text-green-400 font-bold border-green-400' : 'text-gray-200 font-medium border-transparent' }} pb-1 border-b-2 hover:text-green-400 transition duration-300">Products</a>
                <a href="{{ url('/how-its-made') }}" class="{{ request()->is('how-its-made') ? 'text-green-400 font-bold border-green-400' : 'text-gray-200 font-medium border-transparent' }} pb-1 border-b-2 hover:text-green-400 transition duration-300">How It's Made</a>
                <a href="{{ url('/services') }}" class="{{ request()->is('services') ? 'text-green-400 font-bold border-green-400' : 'text-gray-200 font-medium border-transparent' }} pb-1 border-b-2 hover:text-green-400 transition duration-300">Services</a>
                <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'text-green-400 font-bold border-green-400' : 'text-gray-200 font-medium border-transparent' }} pb-1 border-b-2 hover:text-green-400 transition duration-300">Contact</a>
            </div>

            <!-- Right spacer to push content to center -->
            <div class="flex-1"></div>

            <!-- Right Section: Cart, and Mobile Menu Button -->
            <div class="w-auto flex items-center space-x-6 flex-shrink-0">
                <!-- Cart Icon -->
                <button id="open-cart-button" class="relative text-gray-200 hover:text-green-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    <span id="cart-item-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center hidden">0</span>
                </button>

                <!-- Login Link (moved to right of cart, visible on desktop) -->
                <a href="{{ url('/login') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-5 rounded-full transition duration-300 hidden md:block text-sm whitespace-nowrap">Login</a>

                <!-- Mobile Menu Button (Hamburger) (Adjusted for dark background) -->
                <button id="mobile-menu-button" class="md:hidden text-gray-200 hover:text-green-400 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </nav>
    </div>

    <!-- Mobile Menu (Initially Hidden) -->
    <div id="mobile-menu" class="hidden md:hidden absolute top-24 left-0 w-full bg-black/70 backdrop-blur-sm shadow-lg z-20 border-t border-white/10">
        <div class="flex flex-col items-start space-y-2 p-4">
            <a href="{{ url('/') }}" class="block w-full text-left py-2 px-4 text-gray-200 hover:bg-white/10 hover:text-white rounded-md transition duration-300">Home</a>
            <a href="{{ url('/products') }}" class="block w-full text-left py-2 px-4 text-gray-200 hover:bg-white/10 hover:text-white rounded-md transition duration-300">Products</a>
            <a href="{{ url('/how-its-made') }}" class="block w-full text-left py-2 px-4 text-gray-200 hover:bg-white/10 hover:text-white rounded-md transition duration-300">How It's Made</a>
            <a href="{{ url('/services') }}" class="block w-full text-left py-2 px-4 text-gray-200 hover:bg-white/10 hover:text-white rounded-md transition duration-300">Services</a>
            <a href="{{ url('/our-story') }}" class="block w-full text-left py-2 px-4 text-gray-200 hover:bg-white/10 hover:text-white rounded-md transition duration-300">Our Story</a>
            <a href="{{ url('/login') }}" class="block w-full text-left py-2 px-4 text-gray-200 hover:bg-white/10 hover:text-white rounded-md transition duration-300">Login</a>
            <a href="{{ url('/contact') }}" class="block w-full text-left py-2 px-4 text-gray-200 hover:bg-white/10 hover:text-white rounded-md transition duration-300">Contact</a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Hide/show header on scroll logic
        const header = document.getElementById('main-header');
        if (header) {
            let lastScrollTop = 0;
            const headerHeight = header.offsetHeight;

            window.addEventListener('scroll', function() {
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop && scrollTop > headerHeight) {
                    // Scrolling Down - hide header
                    header.classList.add('-translate-y-full');
                } else {
                    // Scrolling Up - show header
                    header.classList.remove('-translate-y-full');
                }
                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
            }, false);
        }
    });
</script>
