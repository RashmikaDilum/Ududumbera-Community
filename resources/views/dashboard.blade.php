<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Ududumbara Community</title>
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
    
    <main class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h1 class="text-3xl font-bold text-green-800 mb-6">Welcome to Your Dashboard</h1>
                
                <!-- User Info Card -->
                <div class="bg-green-50 border border-green-200 rounded-lg p-6 mb-8">
                    <h2 class="text-xl font-semibold text-green-800 mb-4">Your Account Information</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-600"><strong>Name:</strong> {{ auth()->user()->name }}</p>
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
</body>
</html>
