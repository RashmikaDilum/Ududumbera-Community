<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Test Registration - Ududumbara Community</title>
    <meta name="title" content="Test Registration - Ududumbara Community">
    <meta name="description" content="Test registration form for the Ududumbara Community. Create your test account to access our products and services.">
    <meta name="keywords" content="Ududumbara Community test registration, test account, community membership">
    <meta name="author" content="Ududumbara Community">
    <meta name="robots" content="noindex, nofollow">
    <meta name="language" content="English">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Test Registration - Ududumbara Community">
    <meta property="og:description" content="Test registration form for the Ududumbara Community. Create your test account to access our products and services.">
    <meta property="og:image" content="{{ asset('images/contact/bg.jpg') }}">
    <meta property="og:site_name" content="Ududumbara Community">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Test Registration - Ududumbara Community">
    <meta property="twitter:description" content="Test registration form for the Ududumbara Community. Create your test account to access our products and services.">
    <meta property="twitter:image" content="{{ asset('images/contact/bg.jpg') }}">

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
            background-color: #f8f8f8; /* Fallback background */
            color: #333;
        }
        html {
            scroll-behavior: smooth;
        }
        /* Custom button styling for hover effects */
        .btn-primary {
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        /* Test form specific styling */

    </style>
</head>
<body class="text-gray-800 relative">
    <!-- Blurred Background -->
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center blur-sm" style="background-image: url('{{ asset('images/contact/bg.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black opacity-40"></div> <!-- Slightly darker overlay for test form -->
    </div>

    <!-- Main Content Wrapper -->
    <div class="relative z-10 min-h-screen flex flex-col">
        <x-header />

        <main class="flex-grow flex items-center justify-center py-12 px-4">
            <div class="bg-white/85 backdrop-blur-sm p-8 rounded-lg shadow-xl w-full max-w-lg text-black">


                <h2 class="text-3xl font-bold text-center mb-4 text-green-800">Create a New Account</h2>
                <p class="text-center text-gray-700 mb-8">Fill out this form to create your account.</p>

                <!-- Validation Errors -->
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Success Message -->
                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('register') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="first_name" class="block text-gray-700 text-sm font-semibold mb-2">
                                First Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                                   class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-white/90"
                                   placeholder="John" required autofocus>
                        </div>
                        <div>
                            <label for="last_name" class="block text-gray-700 text-sm font-semibold mb-2">
                                Last Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                   class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-white/90"
                                   placeholder="Doe" required>
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">
                            Email Address <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                               class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-white/90"
                               placeholder="test@example.com" required>
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label for="phone" class="block text-gray-700 text-sm font-semibold mb-2">
                            Phone Number <span class="text-gray-500">(Optional)</span>
                        </label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                               class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-white/90"
                               placeholder="+94 77 123 4567">
                    </div>

                    <!-- Address Field -->
                    <div>
                        <label for="address" class="block text-gray-700 text-sm font-semibold mb-2">
                            Address <span class="text-gray-500">(Optional)</span>
                        </label>
                        <textarea id="address" name="address" rows="3"
                                  class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-white/90 resize-none"
                                  placeholder="Enter your full address">{{ old('address') }}</textarea>
                    </div>

                    <!-- Password Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">
                                Password <span class="text-red-500">*</span>
                            </label>
                            <input type="password" id="password" name="password"
                                   class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-white/90"
                                   placeholder="••••••••" required>
                            <p class="text-xs text-gray-500 mt-1">Minimum 8 characters</p>
                        </div>
                        <div>
                            <label for="password_confirmation" class="block text-gray-700 text-sm font-semibold mb-2">
                                Confirm Password <span class="text-red-500">*</span>
                            </label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                   class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-white/90"
                                   placeholder="••••••••" required>
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="flex items-start">
                        <input type="checkbox" id="terms" name="terms" required
                               class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded mt-1">
                        <label for="terms" class="ml-3 text-sm text-gray-700">
                            I agree to the <a href="#" class="text-green-600 hover:underline">Terms and Conditions</a>
                            and <a href="#" class="text-green-600 hover:underline">Privacy Policy</a>
                            <span class="text-red-500">*</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit" class="w-full bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white font-bold py-3 px-6 rounded-md transition duration-300 btn-primary">
                            Create Account
                        </button>
                    </div>
                </form>


                <!-- Login Link -->
                <div class="text-center mt-6 text-gray-700">
                    Already have an account? <a href="{{ route('login') }}" class="text-green-600 hover:underline font-medium">Sign in here</a>
                </div>

            </div>
        </main>

        <x-footer />
    </div>

    <!-- Simple Form Validation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('password_confirmation');

            // Password confirmation validation
            confirmPassword.addEventListener('input', function() {
                if (password.value !== confirmPassword.value) {
                    confirmPassword.setCustomValidity('Passwords do not match');
                } else {
                    confirmPassword.setCustomValidity('');
                }
            });

            // Form submission validation
            form.addEventListener('submit', function(e) {
                if (password.value !== confirmPassword.value) {
                    e.preventDefault();
                    alert('Passwords do not match. Please check and try again.');
                    confirmPassword.focus();
                }
            });
        });
    </script>
</body>
</html>
