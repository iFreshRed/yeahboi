<?php $accountArea = 'organization'; $activeAccountPage = 'attendance'; ?>
<main class="account-page content-page">
	<div class="account-layout content-width">
		<?php include 'frontend/components/sidebar.php'; ?>
		<section class="account-main">
			<header class="account-heading">
				<p class="page-eyebrow">Organization Space</p>
				<h1>Attendance</h1>
				<p>Record participation and verify volunteer hours.</p>
			</header>
			<div class="account-empty-state">
				<h2>Attendance tools aren't connected yet</h2>
				<p>Attendance and hour verification require a protected organization account and a working attendance handler.</p>
			</div>
		</section>
	</div>
</main>
