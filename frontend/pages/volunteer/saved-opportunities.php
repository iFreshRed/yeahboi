<?php $accountArea = 'volunteer'; $activeAccountPage = 'saved-opportunities'; ?>
<main class="account-page content-page">
	<div class="account-layout content-width">
		<?php include 'frontend/components/sidebar.php'; ?>
		<section class="account-main">
			<header class="account-heading">
				<p class="page-eyebrow">Volunteer Space</p>
				<h1>Saved Opportunities</h1>
				<p>Keep track of opportunities you want to revisit.</p>
			</header>
			<div class="account-empty-state">
				<h2>Saved opportunities aren't connected yet</h2>
				<p>Saved listings require an account-backed bookmark workflow. No saved items are stored or shown.</p>
				<a class="primary-link" href="index.php?page=search">Explore Opportunities</a>
			</div>
		</section>
	</div>
</main>
