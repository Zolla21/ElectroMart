
<?php
$pageTitle = 'Shopping Cart | ElectroMart';
require_once __DIR__ . '/includes/header.php';
?>

<main class="container py-5">
    <div class="mb-4">
        <h1 class="fw-bold">Your Shopping Cart</h1>
        <p class="text-secondary">
            Review your selected products before checkout.
        </p>
    </div>

    <div id="cart-content">
        <div class="text-center py-5">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading cart...</span>
            </div>
            <p class="mt-3 text-secondary">Loading your cart...</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="index.php#featured" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left me-2"></i>
            Continue Shopping
        </a>
    </div>
</main>

<script src="assets/js/cart.js"></script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
