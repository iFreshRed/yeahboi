<?php $accountArea = 'organization'; $activeAccountPage = 'my-organization'; ?>
<main class="account-page content-page">
	<div class="account-layout content-width">
		<?php include 'frontend/components/sidebar.php'; ?>
		<section class="account-main">
			<header class="account-heading">
				<p class="page-eyebrow">Organization Space</p>
				<h1>My Organization</h1>
				<p>Organization profile, verification status, and opportunities.</p>
			</header>
			<div class="account-empty-state">
				<h2>Organization information isn't connected yet</h2>
				<p>No organization profile or verification status is available. Organization access and profile data require the authentication and database workflows to be connected.</p>
				<a class="primary-link" href="index.php?page=organization-register">Register an Organization</a>
			</div>
		</section>
	</div>
</main>
