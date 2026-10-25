
document.addEventListener("DOMContentLoaded", () => {
    const productItems = [...document.querySelectorAll(".em-product-item")];
    const filterButtons = [...document.querySelectorAll(".em-filter-btn")];
    const categoryButtons = [...document.querySelectorAll("[data-category]")];
    const resultCount = document.getElementById("product-count");

    const searchInput = document.querySelector("#product-search, [name='search']");
    const urlParams = new URLSearchParams(window.location.search);

    const requestedCategory = urlParams.get("category") || "All";
    const requestedSearch = urlParams.get("search") || "";

    const availableCategories = new Set(
        productItems.map((item) => item.dataset.category)
    );

    let activeFilter = availableCategories.has(requestedCategory)
        ? requestedCategory
        : "All";

    function filterProducts(category = activeFilter, search = "") {
        activeFilter = category;

        const normalizedSearch = search.trim().toLowerCase();
        let visible = 0;

        productItems.forEach((item) => {
            const itemCategory = item.dataset.category || "";
            const itemName = item.dataset.name || "";

            const matchesCategory =
                category === "All" || itemCategory === category;

            const matchesSearch =
                itemName.toLowerCase().includes(normalizedSearch);

            const show = matchesCategory && matchesSearch;

            item.classList.toggle("d-none", !show);

            if (show) {
                visible++;
            }
        });

        if (resultCount) {
            resultCount.textContent = `${visible} products`;
        }

        filterButtons.forEach((button) => {
            const isActive = button.dataset.filter === category;

            button.classList.toggle("active", isActive);
            button.setAttribute("aria-pressed", String(isActive));
        });
    }

    // Filter products using the category buttons.
    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            filterProducts(
                button.dataset.filter,
                searchInput?.value || ""
            );
        });
    });

    // Filter products using the category cards.
    categoryButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const category = button.dataset.category;

            if (!availableCategories.has(category)) {
                return;
            }

            filterProducts(category, searchInput?.value || "");

            document.getElementById("featured")?.scrollIntoView({
                behavior: "smooth"
            });
        });
    });

    // Reset product filters.
    document.querySelectorAll(".em-reset-filter").forEach((button) => {
        button.addEventListener("click", () => {
            if (searchInput) {
                searchInput.value = "";
            }

            filterProducts("All", "");
        });
    });

    // Filter products as the user types.
    if (searchInput) {
        searchInput.addEventListener("input", () => {
            filterProducts(activeFilter, searchInput.value);
        });
    }

    // Apply search and category values from the URL on page load.
    if (searchInput) {
        searchInput.value = requestedSearch;
    }

    filterProducts(activeFilter, requestedSearch);

    // Keep the existing cart, wishlist and newsletter code below.


    // Frontend only cart.
    let cart = [];

    try {
        cart = JSON.parse(localStorage.getItem("electromart-cart")) || [];
    } catch {
        cart = [];
    }


    function updateCartCount() {
        const count = cart.reduce(
            (total, item) => total + item.quantity,
            0
        );

        document.querySelectorAll(".cart-count").forEach((element) => {
            element.textContent = count;
            element.classList.toggle("d-none", count === 0);
        });

        try {
            localStorage.setItem(
                "electromart-cart",
                JSON.stringify(cart)
            );
        } catch (error) {
            console.warn(
                "Could not save the cart in this browser.",
                error
            );
        }
    }

    document.querySelectorAll(".em-add-cart").forEach((button) => {
        button.addEventListener("click", () => {
            const id = Number(button.dataset.id);
            const name = button.dataset.name;
            const price = Number(button.dataset.price);

            const existing = cart.find((item) => item.id === id);

            if (existing) {
                existing.quantity++;
            } else {
                cart.push({ id, name, price, quantity: 1 });
            }

            updateCartCount();

            const originalText = button.innerHTML;
            button.innerHTML =
                '<i class="bi bi-check2 me-2"></i>Added to cart';
            button.disabled = true;

            window.setTimeout(() => {
                button.innerHTML = originalText;
                button.disabled = false;
            }, 900);
        });
    });

    updateCartCount();


    // Frontend wishlist interaction with localStorage persistence.
    const wishlistButtons = document.querySelectorAll(".em-wishlist");
    let wishlist = [];

    try {
        const savedWishlist = JSON.parse(
            localStorage.getItem("electromart-wishlist") || "[]"
        );

        if (Array.isArray(savedWishlist)) {
            wishlist = savedWishlist.filter(
                (id) => Number.isSafeInteger(id) && id > 0
            );
        }
    } catch {
        wishlist = [];
    }

    function saveWishlist() {
        try {
            localStorage.setItem(
                "electromart-wishlist",
                JSON.stringify(wishlist)
            );
        } catch (error) {
            console.warn("Could not save wishlist in this browser.", error);
        }
    }

    function updateWishlistButton(button) {
        const productId = Number(button.dataset.id);
        const selected = wishlist.includes(productId);

        button.setAttribute("aria-pressed", String(selected));
        button.setAttribute(
            "aria-label",
            selected ? "Remove from wishlist" : "Add to wishlist"
        );

        button.innerHTML = selected
            ? '<i class="bi bi-heart-fill"></i>'
            : '<i class="bi bi-heart"></i>';

        button.classList.toggle("selected", selected);
    }

    wishlistButtons.forEach((button) => {
        updateWishlistButton(button);

        button.addEventListener("click", () => {
            const productId = Number(button.dataset.id);

            if (!Number.isSafeInteger(productId) || productId <= 0) {
                return;
            }

            if (wishlist.includes(productId)) {
                wishlist = wishlist.filter((id) => id !== productId);
            } else {
                wishlist.push(productId);
            }

            saveWishlist();
            updateWishlistButton(button);
        });
    });


    // Demonstration only. No email is sent or saved.
    const newsletter = document.getElementById("newsletter-form");
    const newsletterMessage = document.getElementById("newsletter-message");

    newsletter?.addEventListener("submit", (event) => {
        event.preventDefault();

        newsletterMessage.textContent =
            "Thank you. Newsletter registration will be enabled later.";

        newsletter.reset();
    });
});
