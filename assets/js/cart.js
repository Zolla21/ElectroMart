
document.addEventListener("DOMContentLoaded", () => {
    const cartContent = document.getElementById("cart-content");
    const storageKey = "electromart-cart";

    function loadCart() {
        try {
            const saved = JSON.parse(localStorage.getItem(storageKey) || "[]");

            if (!Array.isArray(saved)) {
                return [];
            }

            return saved.filter((item) =>
                Number.isSafeInteger(item.id) &&
                item.id > 0 &&
                typeof item.name === "string" &&
                Number.isFinite(item.price) &&
                item.price >= 0 &&
                Number.isSafeInteger(item.quantity) &&
                item.quantity > 0
            );
        } catch {
            return [];
        }
    }

    let cart = loadCart();

    function saveCart() {
        try {
            localStorage.setItem(storageKey, JSON.stringify(cart));
        } catch (error) {
            console.warn("Could not save cart changes.", error);
        }
    }

    function formatPrice(amount) {
        return new Intl.NumberFormat("en-US", {
            style: "currency",
            currency: "USD"
        }).format(amount);
    }

    function updateHeaderCount() {
        const count = cart.reduce(
            (total, item) => total + item.quantity,
            0
        );

        document.querySelectorAll(".cart-count").forEach((element) => {
            element.textContent = count;
            element.classList.toggle("d-none", count === 0);
        });
    }

    function renderCart() {
        updateHeaderCount();

        if (cart.length === 0) {
            cartContent.innerHTML = `
                <div class="text-center py-5">
                    <i class="bi bi-bag-x display-1 text-secondary"></i>
                    <h2 class="h4 mt-3">Your cart is empty</h2>
                    <p class="text-secondary">
                        Browse our products and add something you like.
                    </p>
                    <a href="index.php#featured" class="btn btn-primary">
                        Explore Products
                    </a>
                </div>
            `;
            return;
        }

        const subtotal = cart.reduce(
            (total, item) => total + item.price * item.quantity,
            0
        );

        cartContent.innerHTML = `
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-0">
                            ${cart.map((item) => `
                                <div class="d-flex flex-wrap align-items-center
                                    justify-content-between gap-3 p-3 border-bottom">
                                    <div class="flex-grow-1">
                                        <h2 class="h6 mb-1">
                                            ${escapeHTML(item.name)}
                                        </h2>
                                        <div class="text-secondary">
                                            ${formatPrice(item.price)} each
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center gap-2">
                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary btn-sm"
                                            data-action="decrease"
                                            data-id="${item.id}"
                                            aria-label="Decrease quantity"
                                        >−</button>

                                        <span class="fw-semibold"
                                            aria-label="Quantity">
                                            ${item.quantity}
                                        </span>

                                        <button
                                            type="button"
                                            class="btn btn-outline-secondary btn-sm"
                                            data-action="increase"
                                            data-id="${item.id}"
                                            aria-label="Increase quantity"
                                        >+</button>
                                    </div>

                                    <div class="fw-semibold">
                                        ${formatPrice(item.price * item.quantity)}
                                    </div>

                                    <button
                                        type="button"
                                        class="btn btn-outline-danger btn-sm"
                                        data-action="remove"
                                        data-id="${item.id}"
                                    >
                                        <i class="bi bi-trash me-1"></i>
                                        Remove
                                    </button>
                                </div>
                            `).join("")}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="h5 mb-4">Order Summary</h2>

                            <div class="d-flex justify-content-between mb-3">
                                <span class="text-secondary">Subtotal</span>
                                <span>${formatPrice(subtotal)}</span>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <span class="text-secondary">Shipping</span>
                                <span>Calculated later</span>
                            </div>

                            <hr>

                            <div class="d-flex justify-content-between fw-bold mb-4">
                                <span>Total</span>
                                <span>${formatPrice(subtotal)}</span>
                            </div>

                            <button
                                type="button"
                                class="btn btn-primary w-100"
                                disabled
                            >
                                Checkout (Coming Soon)
                            </button>

                            <p class="small text-secondary mt-3 mb-0">
                                Checkout will be enabled when the backend
                                and order processing features are implemented.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    function escapeHTML(value) {
        return value.replace(/[&<>"']/g, (character) => ({
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;"
        })[character]);
    }

    cartContent.addEventListener("click", (event) => {
        const button = event.target.closest("button[data-action]");

        if (!button) {
            return;
        }

        const id = Number(button.dataset.id);
        const action = button.dataset.action;
        const item = cart.find((product) => product.id === id);

        if (!item) {
            return;
        }

        if (action === "increase") {
            item.quantity++;
        } else if (action === "decrease") {
            item.quantity--;

            if (item.quantity <= 0) {
                cart = cart.filter((product) => product.id !== id);
            }
        } else if (action === "remove") {
            cart = cart.filter((product) => product.id !== id);
        }

        saveCart();
        renderCart();
    });

    renderCart();
});
