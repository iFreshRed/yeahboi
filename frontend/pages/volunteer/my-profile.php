<?php $accountArea = 'volunteer'; $activeAccountPage = 'my-profile'; ?>
<main class="account-page content-page">
	<div class="account-layout content-width">
		<?php include 'frontend/components/sidebar.php'; ?>
		<section class="account-main">
			<header class="account-heading">
				<p class="page-eyebrow">Volunteer Space</p>
				<h1>My Profile</h1>
				<p>Your profile and participation summary.</p>
			</header>
			<div class="account-empty-state">
				<h2>Profile information isn't connected yet</h2>
				<p>Personal details, completed activities, and verified hours will appear here when account data is available. No profile information is being displayed.</p>
				<a class="primary-link" href="index.php?page=search">Explore Opportunities</a>
			</div>
		</section>
	</div>
</main>
