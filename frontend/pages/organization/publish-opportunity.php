<?php $accountArea = 'organization'; $activeAccountPage = 'publish-opportunity'; ?>
<main class="account-page content-page">
	<div class="account-layout content-width">
		<?php include 'frontend/components/sidebar.php'; ?>
		<section class="account-main">
			<header class="account-heading">
				<p class="page-eyebrow">Organization Space</p>
				<h1>Publish an Opportunity</h1>
				<p>Share the details volunteers need to decide if an activity is right for them.</p>
			</header>
			<section class="account-empty-state">
				<h2>Opportunity publishing isn't connected yet</h2>
				<p>The existing publish handler is empty, so this page cannot save or publish an opportunity.</p>
				<fieldset class="unavailable-form" disabled>
					<label>Opportunity Title<input name="title"></label>
					<label>Cause Area<select name="cause"><option>Select a cause</option></select></label>
					<label>Description<textarea name="description" rows="4"></textarea></label>
					<button class="primary-link" type="button">Publish Opportunity</button>
				</fieldset>
			</section>
		</section>
	</div>
</main>
