<?php $showOrganizationForm = ($_GET['mode'] ?? '') === 'form'; ?>
<?php if ($showOrganizationForm): ?>
<main class="content-page organization-register-page">
	<section class="organization-register-intro content-width">
		<p class="page-eyebrow">Grow your community impact</p>
		<h1>Register your organization</h1>
		<p class="page-lead">Tell us about your organization so we can review your profile and help connect you with volunteers.</p>
	</section>

	<div class="organization-register-layout content-width">
		<form class="organization-register-form">
			<section class="organization-form-section" aria-labelledby="organization-details-title">
				<h2 id="organization-details-title">Organization Details</h2>
				<div class="organization-form-grid">
					<label class="field-wide">Organization Name<input name="organization_name" required></label>
					<label>Organization Type
						<select name="organization_type" required>
							<option value="">Select a type</option>
							<option>Nonprofit</option>
							<option>Community Group</option>
							<option>School</option>
							<option>Other</option>
						</select>
					</label>
					<label>Email Address<input name="email" type="email" autocomplete="email" required></label>
					<label>Contact Number<input name="contact_number" type="tel" autocomplete="tel" required></label>
					<label>Location<input name="location" autocomplete="address-level2" required></label>
					<label>Website<input name="website" type="url" placeholder="https://"></label>
					<label class="field-wide">Organization Description<textarea name="description" rows="5" required></textarea></label>
				</div>
			</section>

			<section class="organization-form-section" aria-labelledby="organization-causes-title">
				<h2 id="organization-causes-title">Cause Areas</h2>
				<div class="cause-check-grid">
					<label><input type="checkbox" name="causes[]" value="environment"> Environment &amp; Nature</label>
					<label><input type="checkbox" name="causes[]" value="education"> Education &amp; Youth</label>
					<label><input type="checkbox" name="causes[]" value="community"> Community Support</label>
					<label><input type="checkbox" name="causes[]" value="animal-welfare"> Animal Welfare</label>
				</div>
			</section>

			<section class="organization-form-section" aria-labelledby="organization-files-title">
				<h2 id="organization-files-title">Organization Materials</h2>
				<div class="organization-form-grid">
					<label>Logo or Organization Image<input type="file" name="organization_image" accept="image/*"></label>
					<label>Supporting Documents<input type="file" name="supporting_documents" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"></label>
				</div>
			</section>

			<fieldset class="organization-submit-field" disabled>
				<button class="primary-link" type="submit">Register Organization</button>
			</fieldset>
			<p class="organization-form-status" role="status">Submission is unavailable until an organization registration handler is configured. New organizations are not automatically verified.</p>
		</form>

		<aside class="organization-review-note">
			<span class="review-note-mark" aria-hidden="true">i</span>
			<h2>Every organization is reviewed</h2>
			<p>Submitted details are intended for review before an organization profile is approved. Approval and verification are separate from submitting this form.</p>
		</aside>
	</div>
</main>
<?php else: ?>
<main class="organization-landing-page">
	<section class="organization-landing-hero">
		<div class="organization-hero-wrap">
			<article class="organization-hero-card">
				<img class="organization-hero-image" src="frontend/assets/images/community_support.png" alt="Community members working together">
				<div class="organization-hero-copy">
					<h1>Bring your cause to the Hive.</h1>
					<p>Connect with passionate volunteers and turn your organization's mission into meaningful community action.</p>
					<a class="organization-outline-link" href="index.php?page=organization-register&amp;mode=form">Register your organization <span aria-hidden="true">&#8594;</span></a>
				</div>
			</article>
		</div>
	</section>

	<section class="organization-benefits content-width" aria-labelledby="organization-benefits-title">
		<h2 id="organization-benefits-title">Why Join HelpHive?</h2>
		<div class="organization-benefit-grid">
			<article>
				<span class="organization-benefit-icon" aria-hidden="true"><svg viewBox="0 0 48 48"><circle cx="19" cy="16" r="8" /><path d="M5 41c0-9 5-15 14-15 5 0 8 2 11 5" /><circle cx="34" cy="33" r="8" /><path d="m40 39 5 5" /></svg></span>
				<h3>Find Volunteers</h3>
				<p>Connect with people who care about your cause.</p>
			</article>
			<article>
				<span class="organization-benefit-icon" aria-hidden="true"><svg viewBox="0 0 48 48"><rect x="6" y="13" width="36" height="27" rx="4" /><path d="m8 17 16 12 16-12M17 13V8h14v5" /></svg></span>
				<h3>Post Opportunities</h3>
				<p>Share activities and welcome new volunteers.</p>
			</article>
			<article>
				<span class="organization-benefit-icon" aria-hidden="true"><svg viewBox="0 0 48 48"><path d="M7 40V24h9v16M20 40V13h9v27M33 40V6h9v34M4 42h41" /></svg></span>
				<h3>Track Impact</h3>
				<p>Manage participation and verified volunteer hours.</p>
			</article>
		</div>
	</section>

	<section class="organization-steps">
		<div class="content-width">
			<h2>Get Started in 3 Simple Steps</h2>
			<ol>
				<li><span>1</span><div><h3>Create an Account</h3><p>Sign up or log in to get started.</p></div></li>
				<li><span>2</span><div><h3>Register Your Organization</h3><p>Submit your organization's information for review.</p></div></li>
				<li><span>3</span><div><h3>Start Making an Impact</h3><p>Once approved, publish opportunities and manage volunteer participation.</p></div></li>
			</ol>
		</div>
	</section>

	<section class="organization-landing-cta">
		<div>
			<h2>Your Community Needs You.</h2>
			<p>Join HelpHive and bring more helping hands to your mission.</p>
			<a href="index.php?page=organization-register&amp;mode=form">Register your Organization</a>
		</div>
	</section>
</main>
<?php endif; ?>
