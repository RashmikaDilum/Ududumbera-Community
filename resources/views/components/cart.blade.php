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

    // CSRF Token for Laravel
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    // Check if user is authenticated
    const isAuthenticated = {{ auth()->check() ? 'true' : 'false' }};

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
        openCartButton.addEventListener('click', () => {
            if (isAuthenticated) {
                loadCartFromServer();
            }
            openCart();
        });
    }
    if (closeCartModalButton) {
        closeCartModalButton.addEventListener('click', closeCart);
    }
    if (continueShoppingButton) {
        continueShoppingButton.addEventListener('click', closeCart);
    }
    if (checkoutButton) {
        checkoutButton.addEventListener('click', () => {
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
    window.cart = window.cart || []; // Local cart array for guest users
    const cartItemsContainer = document.getElementById('cart-items-container');
    const emptyCartMessage = document.getElementById('empty-cart-message');
    const cartSubtotalEl = document.getElementById('cart-subtotal');
    const cartTotalEl = document.getElementById('cart-total');

    // API Helper Functions
    async function makeRequest(url, options = {}) {
        const defaultOptions = {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            }
        };

        const response = await fetch(url, { ...defaultOptions, ...options });
        const data = await response.json();

        if (!response.ok) {
            throw new Error(data.error || 'Request failed');
        }

        return data;
    }

    // Load cart from server (for authenticated users)
    async function loadCartFromServer() {
        if (!isAuthenticated) return;

        try {
            const data = await makeRequest('/cart');
            displayServerCart(data);
        } catch (error) {
            console.error('Failed to load cart:', error);
            showNotification('Failed to load cart', 'error');
        }
    }

    // Display server cart data
    function displayServerCart(data) {
        const items = data.items || [];
        updateCartDisplay(items, data.total || 0, data.total_items || 0);
    }

    // Add item to server cart
    async function addToServerCart(productId, quantity = 1) {
        try {
            const data = await makeRequest('/cart/add', {
                method: 'POST',
                body: JSON.stringify({
                    product_id: productId,
                    quantity: quantity
                })
            });

            await loadCartFromServer(); // Refresh cart display
            return data;
        } catch (error) {
            console.error('Failed to add to cart:', error);
            throw error;
        }
    }

    // Update cart item on server
    async function updateServerCartItem(cartItemId, quantity) {
        try {
            const data = await makeRequest(`/cart/${cartItemId}`, {
                method: 'PUT',
                body: JSON.stringify({ quantity: quantity })
            });

            await loadCartFromServer(); // Refresh cart display
            return data;
        } catch (error) {
            console.error('Failed to update cart item:', error);
            throw error;
        }
    }

    // Remove item from server cart
    async function removeFromServerCart(cartItemId) {
        try {
            const data = await makeRequest(`/cart/${cartItemId}`, {
                method: 'DELETE'
            });

            await loadCartFromServer(); // Refresh cart display
            return data;
        } catch (error) {
            console.error('Failed to remove from cart:', error);
            throw error;
        }
    }

    // Get cart count from server
    async function getCartCount() {
        try {
            const data = await makeRequest('/cart/count');
            updateCartCount(data.count);
            return data.count;
        } catch (error) {
            console.error('Failed to get cart count:', error);
            updateCartCount(0);
            return 0;
        }
    }

    function updateCartDisplay(items = [], total = 0, totalItems = 0) {
        if (!cartItemsContainer || !emptyCartMessage || !cartSubtotalEl || !cartTotalEl) return;

        // Clear previous items but keep the empty message
        const cartItems = cartItemsContainer.querySelectorAll('.cart-item');
        cartItems.forEach(item => item.remove());

        if (items.length === 0) {
            emptyCartMessage.classList.remove('hidden');
        } else {
            emptyCartMessage.classList.add('hidden');
            items.forEach((item) => {
                const itemElement = document.createElement('div');
                itemElement.classList.add('cart-item', 'flex', 'justify-between', 'items-center', 'py-4', 'border-b', 'border-gray-200');
                itemElement.innerHTML = `
                    <div class="flex items-center space-x-3">
                        <img src="${item.image || '/images/placeholder.jpg'}" alt="${item.name}" class="w-16 h-16 object-cover rounded-md shadow">
                        <div>
                            <p class="font-semibold text-gray-800 text-md">${item.name}</p>
                            <p class="text-xs text-gray-500">LKR ${parseFloat(item.price).toFixed(2)}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="text-gray-500 hover:text-green-600 p-1 rounded-full transition duration-150" onclick="handleQuantityChange('${item.id || item.product_id}', ${item.quantity - 1})">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path></svg>
                        </button>
                        <span class="text-md font-medium text-gray-700 w-8 text-center">${item.quantity}</span>
                        <button class="text-gray-500 hover:text-green-600 p-1 rounded-full transition duration-150" onclick="handleQuantityChange('${item.id || item.product_id}', ${item.quantity + 1})">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        </button>
                        <button class="text-red-500 hover:text-red-700 transition duration-150 ml-3" onclick="handleRemoveFromCart('${item.id || item.product_id}')">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </div>
                `;
                cartItemsContainer.appendChild(itemElement);
            });
        }

        cartSubtotalEl.textContent = `LKR ${total.toFixed(2)}`;
        cartTotalEl.textContent = `LKR ${total.toFixed(2)}`;

        updateCartCount(totalItems);
    }

    function updateCartCount(count) {
        if (!cartItemCountEl) return;

        if (count > 0) {
            cartItemCountEl.textContent = count;
            cartItemCountEl.classList.remove('hidden');
            cartItemCountEl.style.display = 'flex';
        } else {
            cartItemCountEl.classList.add('hidden');
            cartItemCountEl.style.display = 'none';
        }
    }

    function showNotification(message, type = 'success') {
        if (cartNotification) {
            cartNotification.textContent = message;
            cartNotification.className = `fixed top-6 right-6 px-6 py-3 rounded-lg shadow-lg transform transition-all duration-500 ease-in-out z-[101] ${
                type === 'error' ? 'bg-red-600' : 'bg-green-600'
            } text-white`;
            
            cartNotification.classList.remove('translate-y-[-100%]', 'opacity-0');
            cartNotification.classList.add('translate-y-0', 'opacity-100');
            
            setTimeout(() => {
                cartNotification.classList.remove('translate-y-0', 'opacity-100');
                cartNotification.classList.add('translate-y-[-100%]', 'opacity-0');
            }, 3000);
        }
    }

    // Global cart functions
    window.addToCart = async function(productName, productPrice, productImage, productId = null) {
        if (isAuthenticated && productId) {
            try {
                await addToServerCart(productId);
                showNotification(`${productName} added to cart!`);
            } catch (error) {
                showNotification(error.message || 'Failed to add item to cart', 'error');
            }
        } else {
            // Local storage for guest users
            const existingItemIndex = window.cart.findIndex(item => item.name === productName);
            if (existingItemIndex > -1) {
                window.cart[existingItemIndex].quantity++;
            } else {
                window.cart.push({ 
                    name: productName, 
                    price: parseFloat(productPrice), 
                    quantity: 1, 
                    image: productImage,
                    product_id: productId 
                });
            }
            
            // Calculate totals
            let subtotal = 0;
            let totalItems = 0;
            window.cart.forEach(item => {
                subtotal += item.price * item.quantity;
                totalItems += item.quantity;
            });
            
            updateCartDisplay(window.cart, subtotal, totalItems);
            showNotification(`${productName} added to cart!`);
        }
    }

    // Global functions for cart operations
    window.handleQuantityChange = async function(itemId, newQuantity) {
        if (newQuantity <= 0) {
            return window.handleRemoveFromCart(itemId);
        }

        if (isAuthenticated) {
            try {
                await updateServerCartItem(itemId, newQuantity);
            } catch (error) {
                showNotification(error.message || 'Failed to update quantity', 'error');
            }
        } else {
            // Handle local cart
            const index = window.cart.findIndex(item => item.product_id == itemId || item.name == itemId);
            if (index > -1) {
                window.cart[index].quantity = newQuantity;
                let subtotal = 0;
                let totalItems = 0;
                window.cart.forEach(item => {
                    subtotal += item.price * item.quantity;
                    totalItems += item.quantity;
                });
                updateCartDisplay(window.cart, subtotal, totalItems);
            }
        }
    }

    window.handleRemoveFromCart = async function(itemId) {
        if (isAuthenticated) {
            try {
                await removeFromServerCart(itemId);
                showNotification('Item removed from cart');
            } catch (error) {
                showNotification(error.message || 'Failed to remove item', 'error');
            }
        } else {
            // Handle local cart
            const index = window.cart.findIndex(item => item.product_id == itemId || item.name == itemId);
            if (index > -1) {
                window.cart.splice(index, 1);
                let subtotal = 0;
                let totalItems = 0;
                window.cart.forEach(item => {
                    subtotal += item.price * item.quantity;
                    totalItems += item.quantity;
                });
                updateCartDisplay(window.cart, subtotal, totalItems);
                showNotification('Item removed from cart');
            }
        }
    };

    // Make updateCartDisplay globally available
    window.updateCartDisplay = updateCartDisplay;
});
</script>
