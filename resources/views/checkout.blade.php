<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Primary Meta Tags -->
    <title>Checkout - Sri Lankan Community Delights</title>
    <meta name="title" content="Checkout - Sri Lankan Community Delights">
    <meta name="description" content="Complete your order for authentic Sri Lankan products from the Knuckles Conservation Area.">
    <meta name="robots" content="noindex, nofollow">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com/3.4.0"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-inter min-h-screen text-gray-800" style="background-image: url('{{ asset('images/happyCommiunityMenbers.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; background-repeat: no-repeat;">
    <!-- Include Header Component -->
    @include('components.header')

    <!-- Main Content -->
    <div class="min-h-screen py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Error/Success Messages -->
            @if(session('error'))
                <div class="bg-red-50 border border-red-200 rounded-lg p-4 mb-6">
                    <p class="text-red-800 font-medium">{{ session('error') }}</p>
                </div>
            @endif

            @if(session('success'))
                <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6">
                    <p class="text-green-800 font-medium">{{ session('success') }}</p>
                </div>
            @endif

            <div class="bg-white/95 backdrop-blur-sm rounded-3xl shadow-2xl border border-white/20">
                <form method="POST" action="{{ route('checkout.process') }}" class="lg:grid lg:grid-cols-12 lg:gap-8 p-8">
                    @csrf
                
                <!-- Left Column - Forms -->
                <div class="lg:col-span-7">
                    <!-- Customer Information -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-8 mb-6 shadow-lg border border-white/30">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 pb-3 border-b-2 border-gray-200 flex items-center gap-3">
                            <svg class="w-6 h-6 inline mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Customer Information
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="user_first_name">Account First Name</label>
                                <input type="text" id="user_first_name" value="{{ $user->first_name }}" readonly 
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl bg-gray-50 text-sm transition-all duration-300 shadow-sm cursor-not-allowed border-slate-300">
                            </div>
                            
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="user_last_name">Account Last Name</label>
                                <input type="text" id="user_last_name" value="{{ $user->last_name }}" readonly 
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl bg-gray-50 text-sm transition-all duration-300 shadow-sm cursor-not-allowed border-slate-300">
                            </div>
                            
                            <div class="mb-6 md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="user_email">Account Email</label>
                                <input type="email" id="user_email" value="{{ $user->email }}" readonly 
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl bg-gray-50 text-sm transition-all duration-300 shadow-sm cursor-not-allowed border-slate-300">
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Information -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-8 mb-6 shadow-lg border border-white/30">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 pb-3 border-b-2 border-gray-200 flex items-center gap-3">
                            <svg class="w-6 h-6 inline mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Shipping Information
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="shipping_first_name">First Name *</label>
                                <input type="text" id="shipping_first_name" name="shipping_first_name" 
                                       value="{{ old('shipping_first_name', $user->first_name) }}" required
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl bg-white text-sm transition-all duration-300 shadow-sm focus:outline-none focus:border-emerald-500 focus:shadow-lg focus:ring-4 focus:ring-emerald-100 hover:-translate-y-0.5 @error('shipping_first_name') border-red-500 @enderror">
                                @error('shipping_first_name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="shipping_last_name">Last Name *</label>
                                <input type="text" id="shipping_last_name" name="shipping_last_name" 
                                       value="{{ old('shipping_last_name', $user->last_name) }}" required
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl bg-white text-sm transition-all duration-300 shadow-sm focus:outline-none focus:border-emerald-500 focus:shadow-lg focus:ring-4 focus:ring-emerald-100 hover:-translate-y-0.5 @error('shipping_last_name') border-red-500 @enderror">
                                @error('shipping_last_name')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="shipping_email">Email *</label>
                                <input type="email" id="shipping_email" name="shipping_email" 
                                       value="{{ old('shipping_email', $user->email) }}" required
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl bg-white text-sm transition-all duration-300 shadow-sm focus:outline-none focus:border-emerald-500 focus:shadow-lg focus:ring-4 focus:ring-emerald-100 hover:-translate-y-0.5 @error('shipping_email') border-red-500 @enderror">
                                @error('shipping_email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="shipping_phone">Phone Number *</label>
                                <input type="tel" id="shipping_phone" name="shipping_phone" 
                                       value="{{ old('shipping_phone') }}" required
                                       placeholder="+94 XX XXX XXXX"
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl bg-white text-sm transition-all duration-300 shadow-sm focus:outline-none focus:border-emerald-500 focus:shadow-lg focus:ring-4 focus:ring-emerald-100 hover:-translate-y-0.5 @error('shipping_phone') border-red-500 @enderror">
                                @error('shipping_phone')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-6 md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="shipping_address">Street Address *</label>
                                <textarea id="shipping_address" name="shipping_address" rows="3" required
                                          placeholder="Enter your full address including house number, street name, and area"
                                          class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl bg-white text-sm transition-all duration-300 shadow-sm focus:outline-none focus:border-emerald-500 focus:shadow-lg focus:ring-4 focus:ring-emerald-100 hover:-translate-y-0.5 @error('shipping_address') border-red-500 @enderror">{{ old('shipping_address') }}</textarea>
                                @error('shipping_address')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="shipping_city">City *</label>
                                <input type="text" id="shipping_city" name="shipping_city" 
                                       value="{{ old('shipping_city') }}" required
                                       placeholder="e.g., Colombo, Kandy, Galle"
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl bg-white text-sm transition-all duration-300 shadow-sm focus:outline-none focus:border-emerald-500 focus:shadow-lg focus:ring-4 focus:ring-emerald-100 hover:-translate-y-0.5 @error('shipping_city') border-red-500 @enderror">
                                @error('shipping_city')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="shipping_postal_code">Postal Code *</label>
                                <input type="text" id="shipping_postal_code" name="shipping_postal_code" 
                                       value="{{ old('shipping_postal_code') }}" required
                                       placeholder="e.g., 10100, 20000"
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl bg-white text-sm transition-all duration-300 shadow-sm focus:outline-none focus:border-emerald-500 focus:shadow-lg focus:ring-4 focus:ring-emerald-100 hover:-translate-y-0.5 @error('shipping_postal_code') border-red-500 @enderror">
                                @error('shipping_postal_code')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="mb-6 md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-2" for="shipping_country">Country *</label>
                                <select id="shipping_country" name="shipping_country" required
                                        class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl bg-white text-sm transition-all duration-300 shadow-sm focus:outline-none focus:border-emerald-500 focus:shadow-lg focus:ring-4 focus:ring-emerald-100 hover:-translate-y-0.5 @error('shipping_country') border-red-500 @enderror">
                                    <option value="">Select Country</option>
                                    <option value="Sri Lanka" {{ old('shipping_country') == 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka</option>
                                    <option value="India" {{ old('shipping_country') == 'India' ? 'selected' : '' }}>India</option>
                                    <option value="Maldives" {{ old('shipping_country') == 'Maldives' ? 'selected' : '' }}>Maldives</option>
                                    <option value="Other" {{ old('shipping_country') == 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                                @error('shipping_country')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-8 mb-6 shadow-lg border border-white/30">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 pb-3 border-b-2 border-gray-200 flex items-center gap-3">
                            <svg class="w-6 h-6 inline mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                            Payment Method
                        </h2>
                        
                        <div class="space-y-4">
                            <div class="border-2 border-gray-200 rounded-xl p-5 transition-all duration-300 cursor-pointer bg-white hover:border-emerald-500 hover:shadow-lg">
                                <input type="radio" id="payhere" name="payment_method" value="payhere" 
                                       {{ old('payment_method', 'payhere') == 'payhere' ? 'checked' : '' }}
                                       class="w-4 h-4 text-emerald-600 focus:ring-emerald-500">
                                <label for="payhere" class="ml-3 flex-1 cursor-pointer">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="font-semibold text-gray-800">PayHere</p>
                                            <p class="text-sm text-gray-600">Pay securely with PayHere (Cards, Bank Transfer, eWallets)</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <img src="https://www.payhere.lk/downloads/images/payhere_logo_small.png" alt="PayHere" class="h-6">
                                        </div>
                                    </div>
                                </label>
                            </div>
                            
                            <div class="border-2 border-gray-200 rounded-xl p-5 transition-all duration-300 cursor-pointer bg-white hover:border-emerald-500 hover:shadow-lg">
                                <input type="radio" id="bank_transfer" name="payment_method" value="bank_transfer" 
                                       {{ old('payment_method') == 'bank_transfer' ? 'checked' : '' }}
                                       class="w-4 h-4 text-emerald-600 focus:ring-emerald-500">
                                <label for="bank_transfer" class="ml-3 flex-1 cursor-pointer">
                                    <div>
                                        <p class="font-semibold text-gray-800">Bank Transfer</p>
                                        <p class="text-sm text-gray-600">Direct bank transfer to our account (Manual verification required)</p>
                                    </div>
                                </label>
                            </div>
                            
                            <div class="border-2 border-gray-200 rounded-xl p-5 transition-all duration-300 cursor-pointer bg-white hover:border-emerald-500 hover:shadow-lg">
                                <input type="radio" id="cash_on_delivery" name="payment_method" value="cash_on_delivery" 
                                       {{ old('payment_method') == 'cash_on_delivery' ? 'checked' : '' }}
                                       class="w-4 h-4 text-emerald-600 focus:ring-emerald-500">
                                <label for="cash_on_delivery" class="ml-3 flex-1 cursor-pointer">
                                    <div>
                                        <p class="font-semibold text-gray-800">Cash on Delivery</p>
                                        <p class="text-sm text-gray-600">Pay when you receive your order (Available for Sri Lanka only)</p>
                                    </div>
                                </label>
                            </div>
                        </div>
                        
                        @error('payment_method')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Right Column - Order Summary -->
                <div class="lg:col-span-5">
                    <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-8 mb-6 shadow-lg border border-white/30 sticky top-30">
                        <h2 class="text-xl font-bold text-gray-800 mb-6 pb-3 border-b-2 border-gray-200 flex items-center gap-3">
                            <svg class="w-6 h-6 inline mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                            Order Summary
                        </h2>
                        
                        <!-- Cart Items -->
                        <div class="space-y-4 mb-6">
                            @foreach($cartItems as $item)
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
                        
                        <!-- Order Totals -->
                        <div class="border-t border-gray-200 pt-6 space-y-4">
                            <div class="flex justify-between text-gray-600">
                                <span>Subtotal:</span>
                                <span>LKR {{ number_format($subtotal, 2) }}</span>
                            </div>
                            
                            <div class="flex justify-between text-gray-600">
                                <span>Shipping:</span>
                                <span>{{ $shippingCost > 0 ? 'LKR ' . number_format($shippingCost, 2) : 'Free' }}</span>
                            </div>
                            
                            @if($tax > 0)
                            <div class="flex justify-between text-gray-600">
                                <span>Tax:</span>
                                <span>LKR {{ number_format($tax, 2) }}</span>
                            </div>
                            @endif
                            
                            <div class="flex justify-between text-xl font-bold text-gray-800 pt-4 border-t border-gray-200">
                                <span>Total:</span>
                                <span>LKR {{ number_format($total, 2) }}</span>
                            </div>
                        </div>
                        
                        <!-- Place Order Button -->
                        <div class="mt-8">
                            <button type="submit" class="bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-bold py-4 px-6 rounded-xl border-none w-full text-base cursor-pointer transition-all duration-300 shadow-lg hover:-translate-y-1 hover:shadow-2xl active:translate-y-0 hover:from-emerald-600 hover:to-emerald-700">
                                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                Place Order - LKR {{ number_format($total, 2) }}
                            </button>
                            
                            <p class="text-xs text-gray-500 text-center mt-3">
                                By placing your order, you agree to our 
                                <a href="#" class="text-emerald-600 hover:underline">Terms & Conditions</a> and 
                                <a href="#" class="text-emerald-600 hover:underline">Privacy Policy</a>
                            </p>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Footer Component -->
    @include('components.footer')

    <script>
        // Auto-populate shipping fields with account info
        document.addEventListener('DOMContentLoaded', function() {
            // Form validation feedback
            const form = document.querySelector('form');
            form.addEventListener('submit', function(e) {
                const submitButton = form.querySelector('button[type="submit"]');
                submitButton.disabled = true;
                submitButton.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Processing Order...
                `;
                
                // Re-enable button after 10 seconds in case of issues
                setTimeout(() => {
                    submitButton.disabled = false;
                    submitButton.innerHTML = `
                    Place Order - LKR {{ number_format($total, 2) }}
                `;
                }, 10000);
            });
        });
    </script>
</body>
</html>
