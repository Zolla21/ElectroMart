
<?php
$pageTitle = 'ElectroMart | Discover Better Technology';

$categories = [
    ['name' => 'Laptops', 'icon' => 'bi-laptop'],
    ['name' => 'Smartphones', 'icon' => 'bi-phone'],
    ['name' => 'Computers', 'icon' => 'bi-pc-display'],
    ['name' => 'Monitors', 'icon' => 'bi-display'],
    ['name' => 'Headphones', 'icon' => 'bi-headphones'],
    ['name' => 'Gaming', 'icon' => 'bi-controller'],
    ['name' => 'Tablets', 'icon' => 'bi-tablet'],
    ['name' => 'Accessories', 'icon' => 'bi-usb-symbol']
];

$products = [
    [
        'id' => 1,
        'name' => 'Premium Performance Laptop',
        'category' => 'Laptops',
        'price' => 78500,
        'old_price' => 85000,
        'badge' => 'BEST SELLER',
        'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=700&q=85'
    ],
    [
        'id' => 2,
        'name' => 'Next Generation Smartphone',
        'category' => 'Smartphones',
        'price' => 42500,
        'old_price' => 0,
        'badge' => 'NEW',
        'image' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=700&q=85'
    ],
    [
        'id' => 3,
        'name' => 'Professional Wireless Headphones',
        'category' => 'Headphones',
        'price' => 6800,
        'old_price' => 8500,
        'badge' => 'SALE',
        'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=700&q=85'
    ],
    [
        'id' => 4,
        'name' => 'Ultra Wide Desktop Monitor',
        'category' => 'Monitors',
        'price' => 28500,
        'old_price' => 0,
        'badge' => '',
        'image' => 'https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?auto=format&fit=crop&w=700&q=85'
    ],
    [
        'id' => 5,
        'name' => 'Professional Laptop Computer',
        'category' => 'Laptops',
        'price' => 92500,
        'old_price' => 99000,
        'badge' => 'POPULAR',
        'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=700&q=85'
    ],
    [
        'id' => 6,
        'name' => 'Wireless Gaming Controller',
        'category' => 'Gaming',
        'price' => 5500,
        'old_price' => 0,
        'badge' => 'NEW',
        'image' => 'https://images.unsplash.com/photo-1592840496694-26d035b52b48?auto=format&fit=crop&w=700&q=85'
    ],
    [
        'id' => 7,
        'name' => 'Modern Tablet Device',
        'category' => 'Tablets',
        'price' => 19800,
        'old_price' => 22000,
        'badge' => 'SALE',
        'image' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?auto=format&fit=crop&w=700&q=85'
    ],
    [
        'id' => 8,
        'name' => 'Essential Computer Accessories',
        'category' => 'Accessories',
        'price' => 3200,
        'old_price' => 0,
        'badge' => '',
        'image' => 'https://images.unsplash.com/photo-1527814050087-3793815479db?auto=format&fit=crop&w=700&q=85'
    ]
];

$benefits = [
    ['bi-truck', 'Convenient shopping', 'Explore products in one place'],
    ['bi-shield-check', 'Secure shopping', 'Designed for customer confidence'],
    ['bi-patch-check', 'Quality selection', 'Technology for your needs'],
    ['bi-headset', 'Customer support', 'Help when you need it']
];

require_once __DIR__ . '/includes/header.php';
?>

<main>

    <!-- =========================
         HERO SECTION
    ========================== -->
    <section class="em-hero">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <div class="em-hero-content">

                        <span class="em-eyebrow">
                            <i class="bi bi-stars me-2"></i>
                            YOUR WORLD OF TECHNOLOGY
                        </span>

                        <h1>
                            Discover technology
                            <span>that moves you forward.</span>
                        </h1>

                        <p class="em-hero-description">
                            Explore laptops, smartphones, computers, gaming
                            devices, and accessories designed for work,
                            learning, creativity, and entertainment.
                        </p>

                        <div class="em-hero-buttons">
                            <a href="#featured" class="btn em-primary-btn">
                                Shop collection
                                <i class="bi bi-arrow-up-right ms-2"></i>
                            </a>

                            <a href="#categories" class="btn em-outline-btn">
                                Explore categories
                                <i class="bi bi-grid ms-2"></i>
                            </a>
                        </div>

                        <div class="em-hero-trust">
                            <span>
                                <i class="bi bi-patch-check-fill"></i>
                                Quality selection
                            </span>

                            <span>
                                <i class="bi bi-headset"></i>
                                Customer support
                            </span>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="em-hero-visual">

                        <div class="em-hero-orbit"></div>

                        <div class="em-hero-image-frame">
                            <img
                                src="assets/images/hero-laptop.png"
                                alt="Laptop with a bright colorful display"
                                fetchpriority="high"
                            >
                        </div>

                        <div class="em-floating-card em-floating-top">
                            <span class="em-floating-icon">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </span>

                            <div>
                                <strong>Upgrade your setup</strong>
                                <small>Discover your next device</small>
                            </div>
                        </div>

                        <div class="em-floating-card em-floating-bottom">
                            <span class="em-floating-icon">
                                <i class="bi bi-stars"></i>
                            </span>

                            <div>
                                <strong>Technology made simple</strong>
                                <small>Explore more possibilities</small>
                            </div>
                        </div>

                        <div class="em-hero-decoration em-hero-decoration-one"></div>
                        <div class="em-hero-decoration em-hero-decoration-two"></div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END HERO SECTION -->


    <!-- =========================
         SHOPPING BENEFITS
    ========================== -->
    <section class="em-benefits">
        <div class="container">
            <div class="row g-4">

                <?php foreach ($benefits as $benefit): ?>
                    <div class="col-6 col-lg-3">
                        <div class="em-benefit">
                            <i class="bi <?= htmlspecialchars($benefit[0]) ?>"></i>

                            <div>
                                <strong><?= htmlspecialchars($benefit[1]) ?></strong>
                                <small><?= htmlspecialchars($benefit[2]) ?></small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


    <!-- =========================
         PRODUCT CATEGORIES
    ========================== -->
    <section class="em-section" id="categories">
        <div class="container">

            <div class="em-section-heading">
                <div>
                    <span class="em-section-label">FIND YOUR NEXT DEVICE</span>
                    <h2>Explore our categories</h2>
                    <p>Everything you need to power your digital life.</p>
                </div>
            </div>

            <div class="row g-3">

                <?php foreach ($categories as $category): ?>
                    <div class="col-6 col-md-4 col-lg-3">

                        <button
                            type="button"
                            class="em-category-card w-100 text-start"
                            data-category="<?= htmlspecialchars($category['name']) ?>"
                        >
                            <div class="em-category-icon">
                                <i class="bi <?= htmlspecialchars($category['icon']) ?>"></i>
                            </div>

                            <div>
                                <h3><?= htmlspecialchars($category['name']) ?></h3>

                                <span>
                                    Explore products
                                    <i class="bi bi-arrow-up-right"></i>
                                </span>
                            </div>
                        </button>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


    <!-- =========================
         FEATURED PRODUCTS
    ========================== -->
    <section class="em-section em-section-soft" id="featured">
        <div class="container">

            <div class="em-section-heading">
                <div>
                    <span class="em-section-label">THE ELECTROMART COLLECTION</span>
                    <h2>Featured products</h2>
                    <p>Explore technology selected for your everyday needs.</p>
                </div>

                <button
                    type="button"
                    class="em-text-link em-reset-filter"
                >
                    View all products
                    <i class="bi bi-arrow-right"></i>
                </button>
            </div>

            <div class="em-product-toolbar">
                <div class="em-filter-buttons">
                    <button type="button" class="em-filter-btn active" data-filter="All">All</button>
                    <button type="button" class="em-filter-btn" data-filter="Laptops">Laptops</button>
                    <button type="button" class="em-filter-btn" data-filter="Smartphones">Phones</button>
                    <button type="button" class="em-filter-btn" data-filter="Headphones">Audio</button>
                    <button type="button" class="em-filter-btn" data-filter="Gaming">Gaming</button>
                </div>

                <span class="em-result-count" id="product-count">
                    <?= count($products) ?> products
                </span>
            </div>

            <div class="row g-4" id="product-grid">

                <?php foreach ($products as $product): ?>
                    <div
                        class="col-6 col-md-4 col-xl-3 em-product-item"
                        data-category="<?= htmlspecialchars($product['category']) ?>"
                        data-name="<?= htmlspecialchars(strtolower($product['name'])) ?>"
                    >
                        <article class="em-product-card h-100">

                            <div class="em-product-image">

                                <?php if ($product['badge'] !== ''): ?>
                                    <span class="em-sale-badge">
                                        <?= htmlspecialchars($product['badge']) ?>
                                    </span>
                                <?php endif; ?>


<button
    type="button"
    class="em-wishlist"
    data-id="<?= $product['id'] ?>"
    data-name="<?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?>"
    aria-label="Add to wishlist"
    aria-pressed="false"
>
    <i class="bi bi-heart"></i>
</button>

                                <img
                                    src="<?= htmlspecialchars($product['image']) ?>"
                                    alt="<?= htmlspecialchars($product['name']) ?>"
                                    loading="lazy"
                                >
                            </div>

                            <div class="em-product-info">

                                <span class="em-product-category">
                                    <?= htmlspecialchars($product['category']) ?>
                                </span>

                                <h3 class="em-product-name">
                                    <?= htmlspecialchars($product['name']) ?>
                                </h3>

                                <div class="em-price">
                                    <?= number_format($product['price'], 2) ?> ETB

                                    <?php if ($product['old_price'] > $product['price']): ?>
                                        <span class="em-old-price">
                                            <?= number_format($product['old_price'], 2) ?> ETB
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <button
                                    type="button"
                                    class="btn em-add-cart w-100"
                                    data-id="<?= $product['id'] ?>"
                                    data-name="<?= htmlspecialchars($product['name']) ?>"
                                    data-price="<?= $product['price'] ?>"
                                >
                                    <i class="bi bi-cart-plus me-2"></i>
                                    Add to cart
                                </button>

                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="text-center mt-5">
                <button
                    type="button"
                    class="btn em-outline-btn em-reset-filter"
                >
                    Explore all products
                    <i class="bi bi-arrow-right ms-2"></i>
                </button>
            </div>

        </div>
    </section>


    <!-- =========================
         PROMOTIONAL BANNER
    ========================== -->
    <section class="em-promo-section">
        <div class="container">
            <div class="em-promo">

                <div class="em-promo-content">
                    <span class="em-section-label">THE SMARTER CHOICE</span>

                    <h2>
                        Your next great technology experience starts here.
                    </h2>

                    <p>
                        From productivity essentials to entertainment devices,
                        find technology that fits your lifestyle.
                    </p>

                    <a href="#featured" class="btn em-light-btn">
                        Discover products
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>

                <div class="em-promo-icon">
                    <i class="bi bi-cpu"></i>
                </div>

            </div>
        </div>
    </section>


    <!-- =========================
         NEW ARRIVALS
    ========================== -->
    <section class="em-section">
        <div class="container">

            <div class="em-section-heading">
                <div>
                    <span class="em-section-label">FRESH FINDS</span>
                    <h2>New and noteworthy</h2>
                    <p>Discover more from our sample electronics collection.</p>
                </div>
            </div>

            <div class="row g-4">

                <?php foreach (array_slice($products, 4, 4) as $product): ?>
                    <div class="col-6 col-md-4 col-xl-3">

                        <article class="em-product-card h-100">

                            <div class="em-product-image">
                                <span class="em-sale-badge">DISCOVER</span>

                                <img
                                    src="<?= htmlspecialchars($product['image']) ?>"
                                    alt="<?= htmlspecialchars($product['name']) ?>"
                                    loading="lazy"
                                >
                            </div>

                            <div class="em-product-info">

                                <span class="em-product-category">
                                    <?= htmlspecialchars($product['category']) ?>
                                </span>

                                <h3 class="em-product-name">
                                    <?= htmlspecialchars($product['name']) ?>
                                </h3>

                                <div class="em-price">
                                    <?= number_format($product['price'], 2) ?> ETB
                                </div>

                                <button
                                    type="button"
                                    class="btn em-add-cart w-100"
                                    data-id="<?= $product['id'] ?>"
                                    data-name="<?= htmlspecialchars($product['name']) ?>"
                                    data-price="<?= $product['price'] ?>"
                                >
                                    <i class="bi bi-cart-plus me-2"></i>
                                    Add to cart
                                </button>

                            </div>
                        </article>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>


    <!-- =========================
         NEWSLETTER
    ========================== -->
    <section class="em-newsletter-section">
        <div class="container">

            <div class="em-newsletter">

                <div>
                    <span class="em-section-label">STAY IN THE LOOP</span>
                    <h2>Discover what's next.</h2>

                    <p>
                        Get updates about new products and upcoming promotions.
                    </p>
                </div>

                <form class="em-newsletter-form" id="newsletter-form">

                    <label class="visually-hidden" for="newsletter-email">
                        Email address
                    </label>

                    <input
                        type="email"
                        id="newsletter-email"
                        name="email"
                        placeholder="Enter your email address"
                        required
                    >

                    <button type="submit" class="btn em-primary-btn">
                        Subscribe
                    </button>

                </form>

                <p
                    class="em-newsletter-message"
                    id="newsletter-message"
                    aria-live="polite"
                ></p>

            </div>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

