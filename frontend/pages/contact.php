<main class="content-page contact-page">
	<section class="contact-intro content-width">
		<p class="page-eyebrow">Contact HelpHive</p>
		<h1>Send us a message</h1>
		<p class="page-lead">Fill out the form below, and let us know how we can help.</p>
	</section>

	<div class="contact-layout content-width">
		<section class="contact-form-panel" aria-labelledby="contact-form-title">
			<h2 id="contact-form-title">Your message</h2>
			<form>
				<fieldset disabled>
					<label for="contact-name">Full Name</label>
					<input id="contact-name" name="full_name" autocomplete="name" required>

					<label for="contact-email">Email Address</label>
					<input id="contact-email" name="email" type="email" autocomplete="email" required>

					<label for="contact-subject">Subject</label>
					<input id="contact-subject" name="subject" required>

					<label for="contact-message">Message</label>
					<textarea id="contact-message" name="message" rows="6" required></textarea>

					<button class="primary-link" type="submit">Send Message</button>
				</fieldset>
			</form>
			<p class="contact-form-status">Message submission is unavailable until a server handler is configured.</p>
		</section>

		<aside class="contact-aside">
			<h2>Looking for an answer?</h2>
			<p>Browse common questions about volunteering, organization registration, and HelpHive.</p>
			<a href="index.php?page=faqs">Visit FAQs <span aria-hidden="true">&#8594;</span></a>
		</aside>
	</div>
</main>
