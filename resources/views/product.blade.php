<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Knuckles Products - All Products</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Ududumbara Commiunity', sans-serif;
            background-color: #f8f8f8; /* Light background */
            color: #333;
        }
        /* Custom scroll-to animation */
        html {
            scroll-behavior: smooth;
        }
        /* Specific styling for product images to ensure consistent look */
        .product-img {
            width: 100%;
            height: 250px; /* Fixed height for consistency */
            object-fit: cover; /* Cover ensures image fills the area without distortion */
            border-radius: 0.75rem; /* rounded-xl */
        }
        /* Custom button styling for hover effects */
        .btn-primary {
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .section-heading {
            position: relative;
            display: inline-block;
            padding-bottom: 8px;
        }
        .section-heading::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50%; /* Adjust width as needed */
            height: 3px;
            background-color: #008000; /* Green line */
            border-radius: 9999px; /* For rounded ends */
        }
    </style>
</head>
<body class="text-gray-800">
    <x-header />

    <!-- Products Hero Section -->
    <section class="relative py-20 md:py-32 text-center overflow-hidden bg-emerald-500">
        <div class="container mx-auto">
            <h2 class="text-5xl font-extrabold mb-4">Discover Our Handcrafted Treasures</h2>
            <p class="text-xl max-w-3xl mx-auto opacity-90">
                Explore our full collection of unique products, lovingly made by skilled artisans from various village communities. Each item tells a story of tradition, dedication, and craft.
            </p>
        </div>
    </section>

    <!-- All Products Section -->
    <main class="container mx-auto py-12 px-4 flex-grow">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 section-heading mx-auto">All Available Products</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Product Card: Kithul Jaggery -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black">
                <img src="{{ asset('images/products/kithul-jaggery.jpg') }}" alt="Kithul Jaggery" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Pure Kithul Jaggery</h3>
                    <p class="text-gray-600 text-sm mb-4">A natural sweetener with a unique caramel flavor, traditionally made from the sap of the Kithul palm.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 850.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Kithul Juice -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black">
                <img src="{{ asset('images/products/kithul-juice.jpg') }}" alt="Kithul Juice" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Fresh Kithul Juice (Treacle)</h3>
                    <p class="text-gray-600 text-sm mb-4">Liquid golden nectar, perfect as a topping or natural syrup, rich in traditional flavor.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 700.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Turmeric Powder -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black">
                <img src="{{ asset('images/products/turmeric-powder.jpg') }}" alt="Turmeric Powder" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Organic Turmeric Powder</h3>
                    <p class="text-gray-600 text-sm mb-4">Pure, potent turmeric, hand-processed by local farmers for maximum flavor and health benefits.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 450.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Community Hand Slippers -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black">
                <img src="{{ asset('images/products/handwoven-slippers.jpg') }}" alt="Hand Slippers" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Hand-Woven Community Slippers</h3>
                    <p class="text-gray-600 text-sm mb-4">Comfortable and stylish slippers, hand-crafted with natural fibers by skilled village artisans.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 1200.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Handwoven Basket (from product.blade.php original) -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black">
                <img src="https://placehold.co/600x400/D0F0C0/333333?text=Handwoven+Basket" alt="Handwoven Basket" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Handwoven Basket</h3>
                    <p class="text-gray-600 text-sm mb-4">Artisans weave intricate patterns using natural fibers, perfect for home decor or storage.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 1500.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Clay Pottery Set (from product.blade.php original) -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black">
                <img src="https://placehold.co/600x400/C0E0F0/333333?text=Clay+Pottery+Set" alt="Clay Pottery Set" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Hand-Painted Clay Pottery</h3>
                    <p class="text-gray-600 text-sm mb-4">Unique, lead-free pottery sets, each piece a canvas of cultural stories.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 2500.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Traditional Textile Scarf (from product.blade.php original) -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black">
                <img src="https://placehold.co/600x400/F0C0D0/333333?text=Textile+Scarf" alt="Traditional Textile Scarf" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Hand-Loomed Textile Scarf</h3>
                    <p class="text-gray-600 text-sm mb-4">Soft, vibrantly colored scarves woven on traditional looms, unique and elegant.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 1800.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Artisan Wooden Carving (from product.blade.php original) -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black">
                <img src="https://placehold.co/600x400/C0D0E0/333333?text=Wooden+Carving" alt="Wooden Carving" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Artisan Wooden Carving</h3>
                    <p class="text-gray-600 text-sm mb-4">Intricately carved wooden figurines, each telling a story of local folklore.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 2200.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product Card: Natural Handmade Soap (from product.blade.php original) -->
            <div class="bg-gray-50 rounded-xl shadow-md overflow-hidden transition-all duration-300 ease-in-out border border-gray-200 hover:shadow-2xl hover:scale-105 hover:border-black">
                <img src="https://placehold.co/600x400/E0C0F0/333333?text=Natural+Soap" alt="Natural Handmade Soap" class="product-img">
                <div class="p-6">
                    <h3 class="font-semibold text-xl mb-2 text-green-800">Natural Handmade Soap</h3>
                    <p class="text-gray-600 text-sm mb-4">Organic soaps made with local herbs and oils, gentle on skin and eco-friendly.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-green-700 font-bold text-lg">LKR 600.00</span>
                        <button class="bg-green-600 hover:bg-green-700 text-white text-sm font-semibold py-2 px-4 rounded-full transition duration-300 btn-primary add-to-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />

    <!-- Shopping Cart Modal/Section (Initially Hidden) -->
    <div id="cart-modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 overflow-y-auto h-full w-full flex items-center justify-center hidden z-[100]">
        <div class="relative mx-auto p-6 border w-full max-w-lg md:max-w-2xl shadow-xl rounded-lg bg-white">
            <div class="mt-3">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl leading-6 font-bold text-gray-900">Your Shopping Cart</h3>
                    <button id="close-cart-modal" class="text-gray-500 hover:text-gray-800 transition duration-150">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
                <div id="cart-items-container" class="my-5 max-h-96 overflow-y-auto pr-2 text-sm text-gray-600">
                    <!-- Cart items will be dynamically added here by JavaScript -->
                    <p id="empty-cart-message" class="text-center py-4">Your cart is currently empty.</p>
                </div>
                <div id="cart-summary" class="border-t pt-6">
                    <div class="flex justify-between text-lg font-semibold text-gray-800 mb-2">
                        <span>Subtotal:</span>
                        <span id="cart-subtotal">LKR 0.00</span>
                    </div>
                    <!-- Add more summary lines if needed (e.g., Tax, Shipping) -->
                    <div class="flex justify-between text-xl font-bold text-green-700 mt-3">
                        <span>Total:</span>
                        <span id="cart-total">LKR 0.00</span>
                    </div>
                </div>
                <div class="items-center px-4 py-3 mt-8 space-y-3 md:space-y-0 md:flex md:space-x-4 md:justify-end">
                    <button id="continue-shopping-button" class="w-full md:w-auto px-6 py-3 bg-gray-200 text-gray-800 text-base font-medium rounded-md shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-150">
                        Continue Shopping
                    </button>
                    <button id="checkout-button" class="w-full md:w-auto px-6 py-3 bg-green-600 text-white text-base font-medium rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-150">
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Cart Modal Elements
            const cartModal = document.getElementById('cart-modal');
            const openCartButton = document.getElementById('open-cart-button');
            const closeCartModalButton = document.getElementById('close-cart-modal');
            const continueShoppingButton = document.getElementById('continue-shopping-button');
            const cartItemCountEl = document.getElementById('cart-item-count');

            // Function to open the cart modal
            function openCart() {
                if (cartModal) cartModal.classList.remove('hidden');
            }

            // Function to close the cart modal
            function closeCart() {
                if (cartModal) cartModal.classList.add('hidden');
            }

            // Event Listeners for cart
            if (openCartButton) {
                openCartButton.addEventListener('click', openCart);
            }
            if (closeCartModalButton) {
                closeCartModalButton.addEventListener('click', closeCart);
            }
            if (continueShoppingButton) {
                continueShoppingButton.addEventListener('click', () => {
                    closeCart(); // Close the modal
                    // Since this is the products page, we don't scroll to a section on this page.
                    // If you want to scroll to a specific section on this page, add its ID here.
                });
            }

            // Close modal if user clicks outside of it (on the backdrop)
            if (cartModal) {
                cartModal.addEventListener('click', (event) => {
                    if (event.target === cartModal) {
                        closeCart();
                    }
                });
            }

            // --- Basic Cart Logic ---
            let cart = []; // This will store { name, price, quantity, image }
            const cartItemsContainer = document.getElementById('cart-items-container');
            const emptyCartMessage = document.getElementById('empty-cart-message');
            const cartSubtotalEl = document.getElementById('cart-subtotal');
            const cartTotalEl = document.getElementById('cart-total');

            function updateCartDisplay() {
                if (!cartItemsContainer || !emptyCartMessage || !cartSubtotalEl || !cartTotalEl || !cartItemCountEl) return;

                cartItemsContainer.innerHTML = ''; // Clear previous items
                let subtotal = 0;
                let totalItems = 0;

                if (cart.length === 0) {
                    cartItemsContainer.appendChild(emptyCartMessage); // Re-add if cleared
                    emptyCartMessage.classList.remove('hidden');
                } else {
                    emptyCartMessage.classList.add('hidden');
                    cart.forEach((item, index) => {
                        const itemElement = document.createElement('div');
                        itemElement.classList.add('flex', 'justify-between', 'items-center', 'py-4', 'border-b', 'border-gray-200');
                        itemElement.innerHTML = `
                            <div class="flex items-center space-x-3">
                                <img src="${item.image}" alt="${item.name}" class="w-16 h-16 object-cover rounded-md shadow">
                                <div>
                                    <p class="font-semibold text-gray-800 text-md">${item.name}</p>
                                    <p class="text-xs text-gray-500">LKR ${parseFloat(item.price).toFixed(2)}</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <button class="text-gray-500 hover:text-green-600 p-1 rounded-full transition duration-150" onclick="updateQuantity(${index}, ${item.quantity - 1})">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                                </button>
                                <span class="text-md font-medium text-gray-700 w-8 text-center">${item.quantity}</span>
                                <button class="text-gray-500 hover:text-green-600 p-1 rounded-full transition duration-150" onclick="updateQuantity(${index}, ${item.quantity + 1})">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                </button>
                                <button class="text-red-500 hover:text-red-700 transition duration-150 ml-3" onclick="removeFromCart(${index})">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        `;
                        cartItemsContainer.appendChild(itemElement);
                        subtotal += item.price * item.quantity;
                        totalItems += item.quantity;
                    });
                }

                cartSubtotalEl.textContent = `LKR ${subtotal.toFixed(2)}`;
                cartTotalEl.textContent = `LKR ${subtotal.toFixed(2)}`; // Assuming no tax/shipping for now

                if (totalItems > 0) {
                    cartItemCountEl.textContent = totalItems;
                    cartItemCountEl.classList.remove('hidden');
                } else {
                    cartItemCountEl.classList.add('hidden');
                }
            }

            window.addToCart = function(productName, productPrice, productImage) {
                const existingItemIndex = cart.findIndex(item => item.name === productName);
                if (existingItemIndex > -1) {
                    cart[existingItemIndex].quantity++;
                } else {
                    cart.push({ name: productName, price: parseFloat(productPrice), quantity: 1, image: productImage });
                }
                updateCartDisplay();
                // openCart(); // Optionally open cart when item is added
            }

            window.removeFromCart = function(index) {
                cart.splice(index, 1);
                updateCartDisplay();
            }

            window.updateQuantity = function(index, newQuantity) {
                if (!cart[index]) return; // Item might have been removed by another action

                const quantity = parseInt(newQuantity);
                if (quantity <= 0) {
                    cart.splice(index, 1); // Remove item if quantity is 0 or less
                } else {
                    cart[index].quantity = quantity;
                    updateCartDisplay();
                }
            }

            // Attach event listeners to "Add to Cart" buttons
            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', () => {
                    const card = button.closest('.bg-gray-50'); // Product card container
                    if (card) {
                        const name = card.querySelector('h3').textContent;
                        const priceText = card.querySelector('.text-green-700.font-bold').textContent;
                        const price = parseFloat(priceText.replace('LKR ', '').trim());
                        const image = card.querySelector('img.product-img').src;
                        addToCart(name, price, image);
                    }
                });
            });

            updateCartDisplay(); // Initial call
        });
    </script>
</body>
</html>
