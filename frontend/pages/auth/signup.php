<main class="auth-page content-page">
	<section class="auth-panel" aria-labelledby="signup-title">
		<a class="auth-brand" href="index.php" aria-label="HelpHive home">
			<img src="frontend/assets/images/helphive_logo.png" alt="">
			<span><strong>Help</strong><strong>Hive</strong></span>
		</a>
		<p class="page-eyebrow">Join the community</p>
		<h1 id="signup-title">Create your account</h1>
		<p class="auth-lead">Find meaningful ways to give back and keep track of your volunteer journey.</p>

		<form class="auth-form">
			<fieldset disabled>
				<div class="auth-name-fields">
					<label>First Name<input name="first_name" autocomplete="given-name" required></label>
					<label>Last Name<input name="last_name" autocomplete="family-name" required></label>
				</div>
				<label>Email Address<input name="email" type="email" autocomplete="email" required></label>
				<label>Password<input name="password" type="password" autocomplete="new-password" minlength="8" required></label>
				<label>Location<input name="location" autocomplete="address-level2" required></label>
				<button class="primary-link" type="submit">Create Account</button>
			</fieldset>
		</form>
		<p class="auth-status" role="status">Account creation is unavailable until a server handler is configured.</p>
		<p class="auth-switch">Already have an account? <a href="#login-modal">Log In</a></p>
		<p class="auth-legal">By continuing, you agree to our <a href="index.php?page=terms">Terms of Service</a> and <a href="index.php?page=privacy">Privacy Policy</a>.</p>
	</section>
</main>
