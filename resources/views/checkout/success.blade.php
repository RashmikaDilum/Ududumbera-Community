<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Primary Meta Tags -->
    <title>Order Confirmation - Sri Lankan Community Delights</title>
    <meta name="title" content="Order Confirmation - Sri Lankan Community Delights">
    <meta name="description" content="Your order has been successfully placed. Thank you for supporting our community!">
    <meta name="robots" content="noindex, nofollow">

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
    </style>
</head>
<body>
    <!-- Include Header Component -->
    @include('components.header')

    <!-- Main Content -->
    <div class="min-h-screen py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Success Message -->
            <div class="text-center mb-12">
                <div class="mx-auto flex items-center justify-center h-24 w-24 rounded-full bg-green-100 mb-6">
                    <svg class="h-12 w-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Order Placed Successfully!</h1>
                <p class="text-lg text-gray-600 mb-6">Thank you for your order. We've received your request and will process it soon.</p>
                
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                        <p class="text-green-800">{{ session('success') }}</p>
                    </div>
                @endif
            </div>

            <!-- Order Details -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 mb-8">
                <div class="border-b border-gray-200 pb-6 mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Order Details</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <p class="text-sm font-medium text-gray-500">Order Number</p>
                            <p class="text-lg font-semibold text-gray-900">#{{ $order->id }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Order Date</p>
                            <p class="text-lg font-semibold text-gray-900">{{ $order->created_at->format('M d, Y') }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Payment Method</p>
                            <p class="text-lg font-semibold text-gray-900 capitalize">{{ str_replace('_', ' ', $order->payment_method) }}</p>
                        </div>
                    </div>
                </div>

                <!-- Shipping Address -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Shipping Address</h3>
                    <div class="bg-gray-50 rounded-lg p-4">
                        @php
                            $shipping = $order->shipping_address;
                        @endphp
                        <p class="font-medium text-gray-900">{{ $shipping['first_name'] }} {{ $shipping['last_name'] }}</p>
                        <p class="text-gray-700">{{ $shipping['email'] }}</p>
                        <p class="text-gray-700">{{ $shipping['phone'] }}</p>
                        <p class="text-gray-700 mt-2">{{ $shipping['address'] }}</p>
                        <p class="text-gray-700">{{ $shipping['city'] }}, {{ $shipping['postal_code'] }}</p>
                        <p class="text-gray-700">{{ $shipping['country'] }}</p>
                    </div>
                </div>

                <!-- Order Items -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Order Items</h3>
                    <div class="space-y-4">
                        @foreach($order->orderItems as $item)
                            <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-lg">
                                <img src="{{ $item->product->image ?? '/images/placeholder.jpg' }}" 
                                     alt="{{ $item->product->name }}" 
                                     class="w-16 h-16 object-cover rounded-lg">
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-800">{{ $item->product->name }}</h4>
                                    <p class="text-sm text-gray-600">Quantity: {{ $item->quantity }}</p>
                                    <p class="text-sm text-gray-600">Unit Price: LKR {{ number_format($item->price, 2) }}</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-semibold text-gray-800">LKR {{ number_format($item->total, 2) }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="border-t border-gray-200 pt-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Order Summary</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between text-gray-600">
                            <span>Subtotal ({{ $order->total_items }} items):</span>
                            <span>LKR {{ number_format($order->total - $order->shipping, 2) }}</span>
                        </div>
                        
                        <div class="flex justify-between text-gray-600">
                            <span>Shipping:</span>
                            <span>{{ $order->shipping > 0 ? 'LKR ' . number_format($order->shipping, 2) : 'Free' }}</span>
                        </div>
                        
                        <div class="flex justify-between text-xl font-bold text-gray-800 pt-3 border-t border-gray-200">
                            <span>Total:</span>
                            <span>LKR {{ number_format($order->total, 2) }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Next Steps -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 mb-8">
                <h3 class="text-lg font-semibold text-blue-800 mb-3">What happens next?</h3>
                <div class="space-y-2 text-blue-700">
                    @if($order->payment_method === 'payhere')
                        <p>• You will receive payment instructions via email shortly</p>
                        <p>• Once payment is confirmed, we'll process your order</p>
                    @elseif($order->payment_method === 'bank_transfer')
                        <p>• Please transfer the amount to our bank account (details will be emailed to you)</p>
                        <p>• Send us the transfer receipt for verification</p>
                    @else
                        <p>• We'll contact you to confirm your order</p>
                        <p>• Payment will be collected upon delivery</p>
                    @endif
                    <p>• You'll receive a tracking number once your order ships</p>
                    <p>• Estimated delivery: 3-7 business days within Sri Lanka</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="text-center space-y-4 sm:space-y-0 sm:flex sm:space-x-4 sm:justify-center">
                <a href="{{ route('products.index') }}" 
                   class="inline-flex items-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    Continue Shopping
                </a>
                
                <a href="{{ url('/') }}" 
                   class="inline-flex items-center px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium rounded-lg transition duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Back to Home
                </a>
            </div>
        </div>
    </div>

    <!-- Include Footer Component -->
    @include('components.footer')
</body>
</html>
