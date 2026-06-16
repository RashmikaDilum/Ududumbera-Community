<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Dashboard - Ududumbara Community</title>
    <meta name="title" content="Dashboard - Ududumbara Community">
    <meta name="description" content="Access your Ududumbara Community account dashboard. Manage your profile, view account information, and explore our community products and services.">
    <meta name="keywords" content="Ududumbara Community dashboard, user account, profile management, community member portal">
    <meta name="author" content="Ududumbara Community">
    <meta name="robots" content="noindex, nofollow">
    <meta name="language" content="English">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Dashboard - Ududumbara Community">
    <meta property="og:description" content="Access your Ududumbara Community account dashboard. Manage your profile, view account information, and explore our community products and services.">
    <meta property="og:image" content="{{ asset('images/main.jpg') }}">
    <meta property="og:site_name" content="Ududumbara Community">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Dashboard - Ududumbara Community">
    <meta property="twitter:description" content="Access your Ududumbara Community account dashboard. Manage your profile, view account information, and explore our community products and services.">
    <meta property="twitter:image" content="{{ asset('images/main.jpg') }}">

    <!-- Additional SEO Meta Tags -->
    <meta name="geo.region" content="LK">
    <meta name="geo.placename" content="Knuckles Conservation Area, Sri Lanka">
    <meta name="theme-color" content="#008000">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon-192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

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
    </style>
</head>
<body>
    <x-header />

    <main class="max-w-7xl mx-auto px-4 md:px-8 lg:px-16 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h1 class="text-3xl font-bold text-green-800 mb-6">Welcome, {{ auth()->user()->first_name ?? auth()->user()->name }}!</h1>

                <!-- Session Status -->
                @if (session('success'))
                    <div id="success-alert" class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- User Info Card -->
                <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-semibold text-green-800">Your Account Information</h2>
                        <a href="{{ route('profile.edit') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition duration-300 text-sm whitespace-nowrap">Edit Profile</a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t border-green-200 pt-4">
                        <div>
                            <p class="text-gray-600"><strong>Name:</strong> {{ trim(auth()->user()->first_name . ' ' . auth()->user()->last_name) ?: auth()->user()->name }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600"><strong>Email:</strong> {{ auth()->user()->email }}</p>
                        </div>
                        @if(auth()->user()->phone)
                        <div>
                            <p class="text-gray-600"><strong>Phone:</strong> {{ auth()->user()->phone }}</p>
                        </div>
                        @endif
                        @if(auth()->user()->address)
                        <div>
                            <p class="text-gray-600"><strong>Address:</strong> {{ auth()->user()->address }}</p>
                        </div>
                        @endif
                        <div>
                            <p class="text-gray-600"><strong>Member Since:</strong> {{ auth()->user()->created_at->format('F j, Y') }}</p>
                        </div>
                        @if(auth()->user()->google_id)
                        <div>
                            <p class="text-gray-600"><strong>Google Account:</strong> Connected</p>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <a href="/products" class="bg-green-600 hover:bg-green-700 text-white p-6 rounded-lg text-center transition duration-300">
                        <h3 class="text-lg font-semibold mb-2">Browse Products</h3>
                        <p class="text-green-100">Explore our community products</p>
                    </a>

                    <a href="/services" class="bg-blue-600 hover:bg-blue-700 text-white p-6 rounded-lg text-center transition duration-300">
                        <h3 class="text-lg font-semibold mb-2">Our Services</h3>
                        <p class="text-blue-100">Learn about what we offer</p>
                    </a>

                    <a href="/contact" class="bg-purple-600 hover:bg-purple-700 text-white p-6 rounded-lg text-center transition duration-300">
                        <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
                        <p class="text-purple-100">Get in touch with our team</p>
                    </a>
                </div>

                <!-- Logout Section -->
                <div class="border-t pt-6">
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-md transition duration-300">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <x-footer />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alert = document.getElementById('success-alert');
            if (alert) {
                setTimeout(() => {
                    // Start fading out
                    alert.style.transition = 'opacity 0.5s ease-out';
                    alert.style.opacity = '0';

                    // Remove the element from the DOM after the transition is complete
                    setTimeout(() => alert.remove(), 500);
                }, 3000); // Hide after 3 seconds
            }
        });
    </script>
</body>
</html>
