<!-- Shopping Cart Modal/Section (Initially Hidden) -->
<div id="cart-modal" class="fixed inset-0 bg-gray-800 bg-opacity-75 overflow-y-auto h-full w-full hidden z-[100]" style="display: none; align-items: center; justify-content: center;">
    <div class="relative mx-auto p-6 border w-full max-w-lg md:max-w-2xl shadow-xl rounded-lg bg-white">
        <div class="mt-3">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-2xl font-bold text-gray-800">Shopping Cart</h3>
                <button id="close-cart-modal" class="text-gray-400 hover:text-gray-600 transition duration-150">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <div id="cart-items-container" class="my-5 max-h-96 overflow-y-auto pr-2 text-sm text-gray-600">
                <!-- Empty cart message -->
                <div id="empty-cart-message" class="text-center py-8 text-gray-500">
                    <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <p class="text-lg">Your cart is empty</p>
                    <p class="text-sm mt-1">Add some products to get started!</p>
                </div>
            </div>
            
            <div id="cart-summary" class="border-t pt-6">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-lg font-semibold text-gray-800">Subtotal:</span>
                    <span id="cart-subtotal" class="text-lg font-bold text-green-600">LKR 0.00</span>
                </div>
                <div class="flex justify-between items-center mb-6">
                    <span class="text-xl font-bold text-gray-800">Total:</span>
                    <span id="cart-total" class="text-xl font-bold text-green-600">LKR 0.00</span>
                </div>
            </div>
            
            <div class="items-center px-4 py-3 mt-8 space-y-3 md:space-y-0 md:flex md:space-x-4 md:justify-end">
                <button id="continue-shopping-button" class="w-full md:w-auto px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium rounded-lg transition duration-150">
                    Continue Shopping
                </button>
                <button id="checkout-button" class="w-full md:w-auto px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-bold rounded-lg transition duration-150">
                    Checkout
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Notification Toast -->
<div id="cart-notification" class="fixed top-6 right-6 bg-green-600 text-white px-6 py-3 rounded-lg shadow-lg transform translate-y-[-100%] opacity-0 transition-all duration-500 ease-in-out z-[101]">
    Item added to cart!
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Initialize cart functionality only once
    if (window.cartInitialized) return;
    window.cartInitialized = true;

    // Cart Modal Elements
    const cartModal = document.getElementById('cart-modal');
    const openCartButton = document.getElementById('open-cart-button');
    const closeCartModalButton = document.getElementById('close-cart-modal');
    const continueShoppingButton = document.getElementById('continue-shopping-button');
    const checkoutButton = document.getElementById('checkout-button');
    const cartNotification = document.getElementById('cart-notification');
    const cartItemCountEl = document.getElementById('cart-item-count');

    // Function to open the cart modal
    function openCart() {
        if (cartModal) {
            cartModal.classList.remove('hidden');
            cartModal.style.display = 'flex';
        }
    }

    // Function to close the cart modal
    function closeCart() {
        if (cartModal) {
            cartModal.classList.add('hidden');
            cartModal.style.display = 'none';
        }
    }

    // Event Listeners for cart
    if (openCartButton) {
        openCartButton.addEventListener('click', openCart);
    }
    if (closeCartModalButton) {
        closeCartModalButton.addEventListener('click', closeCart);
    }
    if (continueShoppingButton) {
        continueShoppingButton.addEventListener('click', closeCart);
    }
    if (checkoutButton) {
        checkoutButton.addEventListener('click', () => {
            // TODO: Implement checkout functionality
            alert('Checkout functionality will be implemented soon!');
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

    // --- Cart Logic ---
    window.cart = window.cart || []; // Global cart array
    const cartItemsContainer = document.getElementById('cart-items-container');
    const emptyCartMessage = document.getElementById('empty-cart-message');
    const cartSubtotalEl = document.getElementById('cart-subtotal');
    const cartTotalEl = document.getElementById('cart-total');

    function updateCartDisplay() {
        if (!cartItemsContainer || !emptyCartMessage || !cartSubtotalEl || !cartTotalEl || !cartItemCountEl) return;

        // Clear previous items but keep the empty message
        const items = cartItemsContainer.querySelectorAll('.cart-item');
        items.forEach(item => item.remove());

        let subtotal = 0;
        let totalItems = 0;

        if (window.cart.length === 0) {
            emptyCartMessage.classList.remove('hidden');
        } else {
            emptyCartMessage.classList.add('hidden');
            window.cart.forEach((item, index) => {
                const itemElement = document.createElement('div');
                itemElement.classList.add('cart-item', 'flex', 'justify-between', 'items-center', 'py-4', 'border-b', 'border-gray-200');
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
            cartItemCountEl.style.display = 'flex';
        } else {
            cartItemCountEl.classList.add('hidden');
            cartItemCountEl.style.display = 'none';
        }
    }

    // Global cart functions
    window.addToCart = function(productName, productPrice, productImage) {
        const existingItemIndex = window.cart.findIndex(item => item.name === productName);
        if (existingItemIndex > -1) {
            window.cart[existingItemIndex].quantity++;
        } else {
            window.cart.push({ name: productName, price: parseFloat(productPrice), quantity: 1, image: productImage });
        } 
        
        // Show notification
        if (cartNotification) {
            cartNotification.textContent = `${productName} added to cart!`;
            cartNotification.classList.remove('translate-y-[-100%]', 'opacity-0');
            cartNotification.classList.add('translate-y-0', 'opacity-100');
            setTimeout(() => {
                cartNotification.classList.remove('translate-y-0', 'opacity-100');
                cartNotification.classList.add('translate-y-[-100%]', 'opacity-0');
            }, 3000); // Hide after 3 seconds
        }
        updateCartDisplay();
    }

    window.removeFromCart = function(index) {
        window.cart.splice(index, 1);
        updateCartDisplay();
    }

    window.updateQuantity = function(index, newQuantity) {
        if (!window.cart[index]) return; // Item might have been removed by another action

        const quantity = parseInt(newQuantity);
        if (quantity <= 0) {
            window.cart.splice(index, 1); // Remove item if quantity is 0 or less
        } else {
            window.cart[index].quantity = quantity;
        }
        updateCartDisplay();
    }

    // Make updateCartDisplay globally available
    window.updateCartDisplay = updateCartDisplay;

    // Initial call
    updateCartDisplay();
});
</script>
