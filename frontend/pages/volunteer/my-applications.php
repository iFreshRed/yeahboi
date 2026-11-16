<?php $accountArea = 'volunteer'; $activeAccountPage = 'my-applications'; ?>
<main class="account-page content-page">
	<div class="account-layout content-width">
		<?php include 'frontend/components/sidebar.php'; ?>
		<section class="account-main">
			<header class="account-heading">
				<p class="page-eyebrow">Volunteer Space</p>
				<h1>My Applications</h1>
				<p>Review the activities you've registered for.</p>
			</header>
			<div class="account-empty-state">
				<h2>Applications aren't connected yet</h2>
				<p>There are no registration records to show. Activity registrations require the account and database workflows to be connected.</p>
				<a class="primary-link" href="index.php?page=search">Browse Opportunities</a>
			</div>
		</section>
	</div>
</main>
