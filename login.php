
<?php
$pageTitle = 'Sign In | ElectroMart';
require_once __DIR__ . '/includes/header.php';
?>

<style>
/* ElectroMart modern login page - isolated styles */
.em-auth {
    --auth-navy: #10243a;
    --auth-teal: #087f8c;
    --auth-muted: #718096;
    --auth-border: #e1e7ef;

    min-height: 620px;
    padding: 48px 20px;
    background: #f4f7fb;
    display: flex;
    align-items: center;
    justify-content: center;
}

.em-auth *,
.em-auth *::before,
.em-auth *::after {
    box-sizing: border-box;
}

.em-auth__layout {
    width: 100%;
    max-width: 1040px;
    min-height: 540px;
    display: grid;
    grid-template-columns: 0.95fr 1.05fr;
    background: #fff;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 22px 65px rgba(16, 36, 58, 0.10);
}

.em-auth__welcome {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 42px 38px;
    color: #fff;
    background: linear-gradient(145deg, #10243a 0%, #173c55 58%, #087f8c 100%);
    overflow: hidden;
}

.em-auth__welcome::before,
.em-auth__welcome::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 50%;
    pointer-events: none;
}

.em-auth__welcome::before {
    width: 300px;
    height: 300px;
    right: -150px;
    top: -90px;
}

.em-auth__welcome::after {
    width: 240px;
    height: 240px;
    right: -95px;
    bottom: -110px;
}

.em-auth__brand {
    position: relative;
    z-index: 1;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    color: #fff;
    text-decoration: none;
    font-size: 1.25rem;
    font-weight: 800;
    letter-spacing: -0.03em;
}

.em-auth__brand-icon {
    width: 42px;
    height: 42px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
    color: var(--auth-navy);
    background: #fff;
    font-size: 1.35rem;
}

.em-auth__welcome-content {
    position: relative;
    z-index: 1;
    margin: 44px 0;
}

.em-auth__eyebrow {
    display: inline-block;
    margin-bottom: 18px;
    padding: 7px 12px;
    border: 1px solid rgba(255, 255, 255, 0.25);
    border-radius: 30px;
    color: #e5fbff;
    font-size: 0.78rem;
    font-weight: 600;
    letter-spacing: 0.04em;
}

.em-auth__welcome h1 {
    margin: 0 0 18px;
    color: #fff;
    font-size: clamp(2rem, 3.5vw, 2.8rem);
    line-height: 1.15;
    font-weight: 800;
    letter-spacing: -0.045em;
}

.em-auth__welcome-content > p {
    max-width: 350px;
    margin: 0;
    color: #d4e3ed;
    font-size: 0.98rem;
    line-height: 1.8;
}

.em-auth__benefits {
    position: relative;
    z-index: 1;
    display: grid;
    gap: 17px;
}

.em-auth__benefit {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #f0f8fc;
    font-size: 0.9rem;
}

.em-auth__benefit i {
    width: 35px;
    height: 35px;
    flex: 0 0 35px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.13);
    font-size: 1rem;
}

.em-auth__form-panel {
    min-width: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 44px clamp(24px, 5vw, 56px);
    background: #fff;
}

.em-auth__form-inner {
    width: 100%;
    max-width: 370px;
    min-width: 0;
}

.em-auth__mobile-brand {
    display: none;
}

.em-auth__heading {
    margin: 0 0 8px;
    color: var(--auth-navy);
    font-size: 2rem;
    font-weight: 800;
    letter-spacing: -0.04em;
}

.em-auth__subtitle {
    margin: 0 0 30px;
    color: var(--auth-muted);
    font-size: 0.94rem;
    line-height: 1.65;
}

.em-auth__message:empty {
    display: none;
}

.em-auth__message {
    margin-bottom: 18px;
    padding: 12px 14px;
    border-radius: 10px;
    font-size: 0.9rem;
    overflow-wrap: anywhere;
}

.em-auth__field {
    margin-bottom: 20px;
}

.em-auth__label {
    display: block;
    margin-bottom: 8px;
    color: #26384d;
    font-size: 0.88rem;
    font-weight: 700;
}

.em-auth__input-wrap {
    position: relative;
}

.em-auth__input {
    display: block;
    width: 100%;
    min-width: 0;
    height: 52px;
    padding: 0 15px;
    border: 1px solid var(--auth-border);
    border-radius: 11px;
    outline: none;
    background: #fff;
    color: var(--auth-navy);
    font: inherit;
    font-size: 0.94rem;
    transition: border-color 0.2s, box-shadow 0.2s;
}

.em-auth__input::placeholder {
    color: #a0acba;
}

.em-auth__input:focus {
    border-color: var(--auth-teal);
    box-shadow: 0 0 0 4px rgba(8, 127, 140, 0.10);
}

.em-auth__input--password {
    padding-right: 52px;
}

.em-auth__toggle {
    position: absolute;
    top: 50%;
    right: 8px;
    transform: translateY(-50%);
    width: 38px;
    height: 38px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 0;
    border-radius: 8px;
    background: transparent;
    color: #718096;
    cursor: pointer;
}

.em-auth__toggle:hover {
    background: #f0f5f8;
    color: var(--auth-teal);
}

.em-auth__options {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    margin: 2px 0 24px;
}

.em-auth__remember {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #59687a;
    font-size: 0.84rem;
    cursor: pointer;
}

.em-auth__remember input {
    width: 16px;
    height: 16px;
    margin: 0;
    accent-color: var(--auth-teal);
}

.em-auth__link {
    color: var(--auth-teal);
    font-size: 0.84rem;
    font-weight: 700;
    text-decoration: none;
}

.em-auth__link:hover {
    color: #075e69;
    text-decoration: underline;
}

.em-auth__submit {
    width: 100%;
    min-height: 52px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 13px 18px;
    border: 0;
    border-radius: 11px;
    background: var(--auth-teal);
    color: #fff;
    font: inherit;
    font-size: 0.96rem;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.2s, transform 0.2s;
}

.em-auth__submit:hover {
    background: #066a75;
}

.em-auth__submit:active {
    transform: translateY(1px);
}

.em-auth__submit:focus-visible,
.em-auth__toggle:focus-visible {
    outline: 3px solid rgba(8, 127, 140, 0.3);
    outline-offset: 3px;
}

.em-auth__register {
    margin: 25px 0 0;
    text-align: center;
    color: var(--auth-muted);
    font-size: 0.88rem;
    line-height: 1.7;
}

.em-auth__register a {
    margin-left: 4px;
}

.em-auth__security {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    gap: 7px;
    margin-top: 25px;
    padding-top: 20px;
    border-top: 1px solid #edf1f5;
    color: #8390a0;
    font-size: 0.77rem;
    line-height: 1.6;
    text-align: center;
}

.em-auth__security i {
    flex-shrink: 0;
    margin-top: 2px;
    color: var(--auth-teal);
}

/* Tablet and mobile */
@media (max-width: 767.98px) {
    .em-auth {
        min-height: auto;
        padding: 24px 14px 32px;
        background: #f4f7fb;
    }

    .em-auth__layout {
        max-width: 460px;
        min-height: 0;
        grid-template-columns: minmax(0, 1fr);
        border-radius: 20px;
    }

    .em-auth__welcome {
        display: none;
    }

    .em-auth__form-panel {
        padding: 30px 24px;
    }

    .em-auth__mobile-brand {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        margin-bottom: 28px;
        color: var(--auth-navy);
        font-size: 1.2rem;
        font-weight: 800;
        text-decoration: none;
    }

    .em-auth__mobile-brand .em-auth__brand-icon {
        color: #fff;
        background: var(--auth-teal);
    }

    .em-auth__heading {
        font-size: 1.8rem;
    }

    .em-auth__subtitle {
        margin-bottom: 25px;
    }
}

@media (max-width: 380px) {
    .em-auth {
        padding-right: 8px;
        padding-left: 8px;
    }

    .em-auth__form-panel {
        padding: 26px 17px;
    }

    .em-auth__options {
        align-items: flex-start;
        flex-direction: column;
    }
}
</style>

<main class="em-auth">
    <div class="em-auth__layout">

        <!-- Welcome panel for desktop -->
        <section class="em-auth__welcome">
            <a class="em-auth__brand" href="index.php">
                <span class="em-auth__brand-icon">
                    <i class="bi bi-lightning-charge-fill"></i>
                </span>
                <span>ElectroMart</span>
            </a>

            <div class="em-auth__welcome-content">
                <span class="em-auth__eyebrow">YOUR TECH. YOUR WORLD.</span>

                <h1>Everything you need, all in one place.</h1>

                <p>
                    Sign in to enjoy a simpler shopping experience,
                    manage your orders, and keep your favorite technology
                    within reach.
                </p>
            </div>

            <div class="em-auth__benefits">
                <div class="em-auth__benefit">
                    <i class="bi bi-box-seam"></i>
                    <span>Keep track of your orders</span>
                </div>

                <div class="em-auth__benefit">
                    <i class="bi bi-heart"></i>
                    <span>Keep your favorite products close</span>
                </div>

                <div class="em-auth__benefit">
                    <i class="bi bi-shield-check"></i>
                    <span>Account security planned for checkout</span>
                </div>
            </div>
        </section>

        <!-- Sign-in form -->
        <section class="em-auth__form-panel">
            <div class="em-auth__form-inner">

                <a class="em-auth__mobile-brand" href="index.php">
                    <span class="em-auth__brand-icon">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </span>
                    <span>ElectroMart</span>
                </a>

                <h2 class="em-auth__heading">Welcome back</h2>

                <p class="em-auth__subtitle">
                    Sign in to your account to continue.
                </p>

                <div
                    id="login-message"
                    class="em-auth__message"
                    role="status"
                    aria-live="polite"
                ></div>

                <form id="login-form">
                    <div class="em-auth__field">
                        <label class="em-auth__label" for="login-email">
                            Email address
                        </label>

                        <input
                            class="em-auth__input"
                            type="email"
                            id="login-email"
                            name="email"
                            placeholder="name@example.com"
                            autocomplete="email"
                            required
                        >
                    </div>

                    <div class="em-auth__field">
                        <label class="em-auth__label" for="login-password">
                            Password
                        </label>

                        <div class="em-auth__input-wrap">
                            <input
                                class="em-auth__input em-auth__input--password"
                                type="password"
                                id="login-password"
                                name="password"
                                placeholder="Enter your password"
                                autocomplete="current-password"
                                required
                            >

                            <button
                                class="em-auth__toggle"
                                type="button"
                                id="toggle-password"
                                aria-label="Show password"
                                aria-pressed="false"
                            >
                                <i class="bi bi-eye" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>

                    <div class="em-auth__options">
                        <label class="em-auth__remember" for="remember-me">
                            <input
                                type="checkbox"
                                id="remember-me"
                                name="remember"
                            >
                            <span>Remember me</span>
                        </label>

                        <a
                            href="#forgot-password"
                            class="em-auth__link"
                            id="forgot-password-link"
                        >
                            Forgot password?
                        </a>
                    </div>

                    <button class="em-auth__submit" type="submit">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Sign in</span>
                    </button>
                </form>

                <p class="em-auth__register">
                    Don't have an account?
                    <a
                        href="#register"
                        class="em-auth__link"
                        id="register-link"
                    >Create account</a>
                </p>

                <div class="em-auth__security">
                    <i class="bi bi-info-circle"></i>
                    <span>
                        Account authentication, registration, and password
                        recovery will be connected when the backend is ready.
                    </span>
                </div>

            </div>
        </section>

    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('login-password');
    const toggleButton = document.getElementById('toggle-password');

    if (passwordInput && toggleButton) {
        toggleButton.addEventListener('click', function () {
            const showing = passwordInput.type === 'text';

            passwordInput.type = showing ? 'password' : 'text';
            toggleButton.setAttribute('aria-pressed', String(!showing));
            toggleButton.setAttribute(
                'aria-label',
                showing ? 'Show password' : 'Hide password'
            );

            const icon = toggleButton.querySelector('i');
            if (icon) {
                icon.className = showing ? 'bi bi-eye' : 'bi bi-eye-slash';
            }
        });
    }

    const loginForm = document.getElementById('login-form');
    const message = document.getElementById('login-message');

    if (loginForm && message) {
        loginForm.addEventListener('submit', function (event) {
            event.preventDefault();

            message.className = 'em-auth__message alert alert-info';
            message.textContent =
                'The login interface is ready. Authentication will work after the backend is connected.';
        });
    }

    const forgotLink = document.getElementById('forgot-password-link');
    const registerLink = document.getElementById('register-link');

    function showComingSoon(event, feature) {
        event.preventDefault();

        if (!message) return;

        message.className = 'em-auth__message alert alert-info';
        message.textContent = feature + ' will be available when the backend is implemented.';
    }

    if (forgotLink) {
        forgotLink.addEventListener('click', function (event) {
            showComingSoon(event, 'Password recovery');
        });
    }

    if (registerLink) {
        registerLink.addEventListener('click', function (event) {
            showComingSoon(event, 'Account registration');
        });
    }
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
