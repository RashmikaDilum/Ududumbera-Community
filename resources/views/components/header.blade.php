<header class="relative bg-white shadow-sm p-4 h-24 w-full">
    <nav class="container mx-auto flex justify-between items-center h-full">
        <!-- Center Logo (Overlaid) - Fixed positioning -->
        <div class="absolute left-1/2 top-2 transform -translate-x-1/2 z-20" style="left: 50%; margin-left: -56px;">
            <a href="{{ url('/') }}" class="block bg-transparent p-2 rounded-full">
                <img class="h-28 w-auto max-w-none" src="{{ asset('images/logoo.png') }}" alt="Logo" style="display: block;">
            </a>
        </div>

        <!-- Left Section: Logo and Site Title -->
        <div class="w-1/3 pl-12" style="min-width: 0;">
            <a href="{{ url('/') }}" class="hidden md:block text-2xl font-bold text-green-700 tracking-wide" style="font-family: Arial, Helvetica, sans-serif; white-space: nowrap;">Knuckles Products</a>
        </div>

        <!-- Right Section: Navigation Links, Cart, and Mobile Menu Button -->
        <div class="w-auto flex justify-end items-center space-x-6" style="min-width: 0;">
            <!-- Desktop Navigation Links -->
            <div class="space-x-6 md:flex hidden" style="flex-shrink: 0;">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'text-green-700 font-bold border-green-700' : 'text-gray-600 font-medium border-transparent' }} pb-1 border-b-2 hover:text-green-700 transition duration-300">Home</a>
                <a href="{{ url('/products') }}" class="{{ request()->is('products') ? 'text-green-700 font-bold border-green-700' : 'text-gray-600 font-medium border-transparent' }} pb-1 border-b-2 hover:text-green-700 transition duration-300">Products</a>
                <a href="{{ url('/how-its-made') }}" class="{{ request()->is('how-its-made') ? 'text-green-700 font-bold border-green-700' : 'text-gray-600 font-medium border-transparent' }} pb-1 border-b-2 hover:text-green-700 transition duration-300">How It's Made</a>
                <a href="{{ url('/our-story') }}" class="{{ request()->is('our-story') ? 'text-green-700 font-bold border-green-700' : 'text-gray-600 font-medium border-transparent' }} pb-1 border-b-2 hover:text-green-700 transition duration-300">Our Story</a>
                <a href="{{ url('/#contact') }}" class="text-gray-600 font-medium border-b-2 border-transparent pb-1 hover:text-green-700 transition duration-300">Contact</a>
            </div>
            <!-- Cart Icon -->
            <button id="open-cart-button" class="relative text-gray-600 hover:text-green-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                <span id="cart-item-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center hidden">0</span>
            </button>

            <!-- Mobile Menu Button (Hamburger) -->
            <button class="md:hidden text-gray-600 hover:text-green-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
    </nav>
</header>