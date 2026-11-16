<?php $accountArea = 'volunteer'; $activeAccountPage = 'register-activity'; ?>
<main class="account-page content-page">
	<div class="account-layout content-width">
		<?php include 'frontend/components/sidebar.php'; ?>
		<section class="account-main">
			<header class="account-heading">
				<p class="page-eyebrow">Volunteer Space</p>
				<h1>Register for an Activity</h1>
				<p>Review the opportunity and registration details.</p>
			</header>
			<div class="account-empty-state">
				<h2>No activity selected</h2>
				<p>Choose an opportunity to review its details. Registration is unavailable until authentication and registration handling are connected.</p>
				<a class="primary-link" href="index.php?page=search">Find an Opportunity</a>
			</div>
		</section>
	</div>
</main>
