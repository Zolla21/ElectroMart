
<?php
if (!isset($pageTitle)) {
    $pageTitle = 'ElectroMart | Electronics Store';
}

$searchTerm = trim($_GET['search'] ?? '');
$selectedCategory = trim($_GET['category'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>

    <meta name="description" content="Discover laptops, smartphones, computers, gaming devices and accessories at ElectroMart.">

    <meta name="theme-color" content="#10243a">

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet"
    >

    <!-- ElectroMart Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<div class="em-announcement">
    <div class="container text-center">
        <i class="bi bi-truck me-2"></i>
        Discover technology for your everyday life
    </div>
</div>

<header class="em-header">
    <div class="container">
        <div class="em-header-main">

            <!-- Brand -->
            <a href="index.php" class="em-brand" aria-label="ElectroMart home">
                <span class="em-brand-icon">
                    <i class="bi bi-lightning-charge-fill"></i>
                </span>

                <span>
                    Electro<span>Mart</span>
                    <small>TECHNOLOGY STORE</small>
                </span>
            </a>

            <!-- Product Search -->
            <form
                class="em-search"
                action="index.php#featured"
                method="get"
                role="search"
            >
                <label class="visually-hidden" for="product-search">
                    Search products
                </label>

                <input
                    type="search"
                    id="product-search"
                    name="search"
                    placeholder="Search laptops, phones, accessories..."
                    value="<?= htmlspecialchars($searchTerm, ENT_QUOTES, 'UTF-8') ?>"
                >

                <?php if ($selectedCategory !== ''): ?>
                    <input
                        type="hidden"
                        name="category"
                        value="<?= htmlspecialchars($selectedCategory, ENT_QUOTES, 'UTF-8') ?>"
                    >
                <?php endif; ?>

                <button type="submit" aria-label="Search">
                    <i class="bi bi-search"></i>
                </button>
            </form>

            <!-- Account and Cart -->
            <div class="em-header-actions">
                <a
                    href="index.php#newsletter-form"
                    class="em-header-action"
                    aria-label="Account features coming soon"
                    title="Account features coming soon"
                >
                    <i class="bi bi-person"></i>
                    <span>Account</span>
                </a>

                <a
                    href="index.php#featured"
                    class="em-header-action em-cart-link"
                    aria-label="Shopping cart"
                >
                    <span class="em-cart-icon">
                        <i class="bi bi-bag"></i>
                        <span class="cart-count d-none">0</span>
                    </span>
                    <span>Cart</span>
                </a>
            </div>

        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="em-navigation" aria-label="Main navigation">
        <div class="container">
            <div class="em-navigation-inner">

                <a href="index.php" class="em-nav-link">
                    <i class="bi bi-house-door me-1"></i>
                    Home
                </a>

                <a href="index.php#featured" class="em-nav-link">
                    All Products
                </a>

                <a
                    href="index.php?category=Laptops#featured"
                    class="em-nav-link"
                >
                    Laptops
                </a>

                <a
                    href="index.php?category=Smartphones#featured"
                    class="em-nav-link"
                >
                    Smartphones
                </a>

                <a
                    href="index.php?category=Computers#featured"
                    class="em-nav-link"
                >
                    Computers
                </a>

                <a
                    href="index.php?category=Accessories#featured"
                    class="em-nav-link"
                >
                    Accessories
                </a>

                <span class="em-nav-tag">Explore Technology</span>

            </div>
        </div>
    </nav>
</header>
