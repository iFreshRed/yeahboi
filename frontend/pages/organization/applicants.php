<?php $accountArea = 'organization'; $activeAccountPage = 'applicants'; ?>
<main class="account-page content-page">
	<div class="account-layout content-width">
		<?php include 'frontend/components/sidebar.php'; ?>
		<section class="account-main">
			<header class="account-heading">
				<p class="page-eyebrow">Organization Space</p>
				<h1>Applicants</h1>
				<p>Review volunteer registrations for your activities.</p>
			</header>
			<div class="account-empty-state">
				<h2>Applicant records aren't available</h2>
				<p>Applicant information requires organization authorization and registration data. No volunteer records are displayed.</p>
			</div>
		</section>
	</div>
</main>
