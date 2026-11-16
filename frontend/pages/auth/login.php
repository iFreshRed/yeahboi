
<div id="login-modal" class="login-modal" role="dialog" aria-modal="true" aria-label="HelpHive account access">
    <section class="login-box login-view" aria-labelledby="login-modal-title">
        <a href="#" class="close-login" aria-label="Close account dialog">&times;</a>
        <a class="modal-brand" href="index.php" aria-label="HelpHive home">
            <img src="frontend/assets/images/helphive_logo.png" alt="">
            <span><strong>Help</strong><strong>Hive</strong></span>
        </a>
        <div class="modal-divider"></div>
        <h2 id="login-modal-title">Log in or create your account</h2>
        <p class="modal-switch-copy">Don't have an account? <a href="#signup-panel">Sign Up</a></p>

        <div class="social-login-options" aria-label="Social sign-in options">
            <button type="button" class="social-login-button" disabled><span class="google-mark" aria-hidden="true">G</span>Continue with Google</button>
            <button type="button" class="social-login-button" disabled><span class="facebook-mark" aria-hidden="true">f</span>Continue with Facebook</button>
        </div>

        <div class="modal-divider"></div>
        <form class="modal-auth-form">
            <fieldset disabled>
                <label for="login-email">Email Address</label>
                <input type="email" id="login-email" name="email" placeholder="Enter your email" autocomplete="email" required>
                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="password" placeholder="Enter your password" autocomplete="current-password" required>
                <span class="forgot-password">Forgot Password?</span>
                <button type="submit" class="login-submit">Log In</button>
            </fieldset>
        </form>
        <p class="auth-modal-status" role="status">Sign-in options aren't connected yet.</p>
        <p class="auth-modal-legal">By creating an account, you agree to our <a href="index.php?page=terms">Terms of Use</a> and <a href="index.php?page=privacy">Privacy Policy</a>.</p>
    </section>

    <section id="signup-panel" class="login-box signup-view" aria-labelledby="signup-modal-title">
        <a href="#" class="close-login" aria-label="Close account dialog">&times;</a>
        <a class="modal-brand" href="index.php" aria-label="HelpHive home">
            <img src="frontend/assets/images/helphive_logo.png" alt="">
            <span><strong>Help</strong><strong>Hive</strong></span>
        </a>
        <div class="modal-divider"></div>
        <h2 id="signup-modal-title">Create your account</h2>
        <p class="modal-switch-copy">Already have an account? <a href="#login-modal">Log In</a></p>

        <form class="modal-auth-form signup-modal-form">
            <fieldset disabled>
                <div class="signup-name-fields">
                    <label for="modal-first-name">First Name<input id="modal-first-name" name="first_name" autocomplete="given-name" required></label>
                    <label for="modal-last-name">Last Name<input id="modal-last-name" name="last_name" autocomplete="family-name" required></label>
                </div>
                <label for="modal-signup-email">Email Address<input id="modal-signup-email" name="email" type="email" autocomplete="email" required></label>
                <label for="modal-signup-password">Password<input id="modal-signup-password" name="password" type="password" autocomplete="new-password" minlength="8" required></label>
                <label for="modal-signup-location">Location<input id="modal-signup-location" name="location" autocomplete="address-level2" required></label>
                <button type="submit" class="login-submit">Create Account</button>
            </fieldset>
        </form>
        <p class="auth-modal-status" role="status">Account creation isn't connected yet.</p>
        <p class="auth-modal-legal">By creating an account, you agree to our <a href="index.php?page=terms">Terms of Use</a> and <a href="index.php?page=privacy">Privacy Policy</a>.</p>
    </section>
</div>
