
<?php
$pageTitle = 'Login | ElectroMart';
require_once __DIR__ . '/includes/header.php';
?>

<main class="container py-5">
    <div class="row justify-content-center align-items-center g-5">

        <div class="col-lg-5">
            <div class="mb-4">
                <span class="badge text-bg-primary mb-3">
                    Welcome to ElectroMart
                </span>

                <h1 class="fw-bold display-6">
                    Your technology journey starts here.
                </h1>

                <p class="text-secondary">
                    Sign in to manage your account, keep track of orders,
                    and enjoy a more convenient shopping experience.
                </p>
            </div>

            <div class="d-flex align-items-start gap-3 mb-3">
                <i class="bi bi-bag-check fs-4 text-primary"></i>
                <div>
                    <h2 class="h6 fw-bold mb-1">Manage your orders</h2>
                    <p class="text-secondary mb-0">
                        View your orders and track their progress.
                    </p>
                </div>
            </div>

            <div class="d-flex align-items-start gap-3 mb-3">
                <i class="bi bi-heart fs-4 text-primary"></i>
                <div>
                    <h2 class="h6 fw-bold mb-1">Save your favorites</h2>
                    <p class="text-secondary mb-0">
                        Keep your favorite products close at hand.
                    </p>
                </div>
            </div>

            <div class="d-flex align-items-start gap-3">
                <i class="bi bi-shield-check fs-4 text-primary"></i>
                <div>
                    <h2 class="h6 fw-bold mb-1">Shop with confidence</h2>
                    <p class="text-secondary mb-0">
                        Account security will be enabled with backend authentication.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5">

                    <div class="text-center mb-4">
                        <span class="em-brand-icon d-inline-flex mb-3">
                            <i class="bi bi-lightning-charge-fill"></i>
                        </span>

                        <h2 class="h3 fw-bold">Sign in</h2>

                        <p class="text-secondary">
                            Enter your account details below.
                        </p>
                    </div>

                    <div
                        id="login-message"
                        class="alert alert-info d-none"
                        role="status"
                    ></div>

                    <form id="login-form">
                        <div class="mb-3">
                            <label for="login-email" class="form-label fw-semibold">
                                Email address
                            </label>

                            <input
                                type="email"
                                class="form-control form-control-lg"
                                id="login-email"
                                name="email"
                                placeholder="you@example.com"
                                autocomplete="email"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="login-password" class="form-label fw-semibold">
                                Password
                            </label>

                            <input
                                type="password"
                                class="form-control form-control-lg"
                                id="login-password"
                                name="password"
                                placeholder="Enter your password"
                                autocomplete="current-password"
                                required
                            >
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="remember-me"
                                >

                                <label class="form-check-label" for="remember-me">
                                    Remember me
                                </label>
                            </div>

                            <a href="#forgot-password" id="forgot-password-link"
                               class="text-decoration-none">
                                Forgot password?
                            </a>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            Sign in
                        </button>
                    </form>

                    <p class="small text-secondary text-center mt-4 mb-0">
                        New to ElectroMart?
                        <a href="#register" id="register-link"
                           class="text-decoration-none fw-semibold">
                            Create an account
                        </a>
                    </p>

                    <p class="small text-secondary text-center mt-3 mb-0">
                        Login, registration, and password recovery will be
                        connected to the backend in a later step.
                    </p>

                </div>
            </div>
        </div>

    </div>
</main>

<script src="assets/js/login.js"></script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
