<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Ududumbara Community</title>
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
        .btn-primary {
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="text-gray-800 relative">
    <!-- Blurred Background -->
    <div class="fixed inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center blur-sm" style="background-image: url('{{ asset('images/contact/bg.jpg') }}');"></div>
        <div class="absolute inset-0 bg-black opacity-30"></div>
    </div>

    <!-- Main Content Wrapper -->
    <div class="relative z-10 min-h-screen flex flex-col">
        <x-header />

        <main class="flex-grow flex items-center justify-center py-12 px-4">
            <div class="bg-white/80 backdrop-blur-sm p-8 rounded-lg shadow-xl w-full max-w-md text-black">
                <h2 class="text-3xl font-bold text-center mb-6 text-green-800">Forgot Password</h2>
                <p class="text-center text-gray-700 mb-8">Enter your email address and we'll send you a password reset link.</p>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                        {{ session('status') }}
                    </div>
                @endif

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

                <form action="{{ route('password.email') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email Address</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" 
                               class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 bg-transparent" 
                               placeholder="you@example.com" required autofocus>
                    </div>

                    <div>
                        <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-md transition duration-300 btn-primary">
                            Send Password Reset Link
                        </button>
                    </div>
                </form>

                <div class="text-center mt-6 text-gray-700">
                    Remember your password? <a href="{{ route('login') }}" class="text-green-600 hover:underline">Back to Login</a>
                </div>
            </div>
        </main>

        <x-footer />
    </div>
</body>
</html>
