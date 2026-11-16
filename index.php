<?php

$pages = [
	'home' => [
		'title' => 'HelpHive | Home',
		'content' => 'frontend/pages/home.php',
		'stylesheet' => 'frontend/assets/css/pages/home.css',
		'section' => 'home',
	],
	'search' => [
		'title' => 'HelpHive | Search Opportunities',
		'content' => 'frontend/pages/search.php',
		'stylesheet' => 'frontend/assets/css/pages/search.css',
		'section' => 'search',
	],
	'opportunity' => [
		'title' => 'HelpHive | Opportunity Details',
		'content' => 'frontend/pages/opportunity.php',
		'stylesheet' => 'frontend/assets/css/pages/opportunity.css',
		'section' => 'search',
	],
	'about' => [
		'title' => 'HelpHive | About',
		'content' => 'frontend/pages/about.php',
		'stylesheet' => 'frontend/assets/css/pages/about.css',
		'section' => 'about',
	],
	'faqs' => [
		'title' => 'HelpHive | FAQs',
		'content' => 'frontend/pages/faqs.php',
		'stylesheet' => 'frontend/assets/css/pages/faqs.css',
		'section' => 'faqs',
	],
	'contact' => [
		'title' => 'HelpHive | Contact Us',
		'content' => 'frontend/pages/contact.php',
		'stylesheet' => 'frontend/assets/css/pages/contact.css',
		'section' => 'contact',
	],
	'terms' => [
		'title' => 'HelpHive | Terms of Service',
		'content' => 'frontend/pages/terms.php',
		'stylesheet' => 'frontend/assets/css/pages/terms.css',
		'section' => 'terms',
	],
	'privacy' => [
		'title' => 'HelpHive | Privacy Policy',
		'content' => 'frontend/pages/privacy.php',
		'stylesheet' => 'frontend/assets/css/pages/privacy.css',
		'section' => 'privacy',
	],
	'signup' => [
		'title' => 'HelpHive | Create Account',
		'content' => 'frontend/pages/auth/signup.php',
		'stylesheet' => 'frontend/assets/css/pages/auth.css',
		'section' => 'account',
	],
	'organization-submitted' => [
		'title' => 'HelpHive | Registration Submitted',
		'content' => 'frontend/pages/organization/organization-submitted.php',
		'stylesheet' => 'frontend/assets/css/pages/organization-submitted.css',
		'section' => 'organization',
	],
	'organization-register' => [
		'title' => 'HelpHive | Register Organization',
		'content' => 'frontend/pages/organization/register-organization.php',
		'stylesheet' => 'frontend/assets/css/pages/register-organization.css',
		'section' => 'organization',
	],
	'my-profile' => [
		'title' => 'HelpHive | My Profile',
		'content' => 'frontend/pages/volunteer/my-profile.php',
		'stylesheet' => 'frontend/assets/css/pages/my-profile.css',
		'section' => 'volunteer',
	],
	'account-settings' => [
		'title' => 'HelpHive | Account Settings',
		'content' => 'frontend/pages/volunteer/account-settings.php',
		'stylesheet' => 'frontend/assets/css/pages/account-settings.css',
		'section' => 'volunteer',
	],
	'my-applications' => [
		'title' => 'HelpHive | My Applications',
		'content' => 'frontend/pages/volunteer/my-applications.php',
		'stylesheet' => 'frontend/assets/css/pages/my-applications.css',
		'section' => 'volunteer',
	],
	'saved-opportunities' => [
		'title' => 'HelpHive | Saved Opportunities',
		'content' => 'frontend/pages/volunteer/saved-opportunities.php',
		'stylesheet' => 'frontend/assets/css/pages/saved-opportunities.css',
		'section' => 'volunteer',
	],
	'notifications' => [
		'title' => 'HelpHive | Notifications',
		'content' => 'frontend/pages/volunteer/notifications.php',
		'stylesheet' => 'frontend/assets/css/pages/notifications.css',
		'section' => 'volunteer',
	],
	'register-activity' => [
		'title' => 'HelpHive | Register for an Activity',
		'content' => 'frontend/pages/volunteer/register-activity.php',
		'stylesheet' => 'frontend/assets/css/pages/register-activity.css',
		'section' => 'volunteer',
	],
	'my-organization' => [
		'title' => 'HelpHive | My Organization',
		'content' => 'frontend/pages/organization/my-organization.php',
		'stylesheet' => 'frontend/assets/css/pages/my-organization.css',
		'section' => 'organization',
	],
	'publish-opportunity' => [
		'title' => 'HelpHive | Publish Opportunity',
		'content' => 'frontend/pages/organization/publish-opportunity.php',
		'stylesheet' => 'frontend/assets/css/pages/publish-opportunity.css',
		'section' => 'organization',
	],
	'applicants' => [
		'title' => 'HelpHive | Applicants',
		'content' => 'frontend/pages/organization/applicants.php',
		'stylesheet' => 'frontend/assets/css/pages/applicants.css',
		'section' => 'organization',
	],
	'attendance' => [
		'title' => 'HelpHive | Attendance',
		'content' => 'frontend/pages/organization/attendance.php',
		'stylesheet' => 'frontend/assets/css/pages/attendance.css',
		'section' => 'organization',
	],
	'reports' => [
		'title' => 'HelpHive | Reports',
		'content' => 'frontend/pages/organization/reports.php',
		'stylesheet' => 'frontend/assets/css/pages/reports.css',
		'section' => 'organization',
	],
];

$pageKey = $_GET['page'] ?? 'home';
$pageExists = is_string($pageKey) && isset($pages[$pageKey]);
if (!$pageExists) {
	http_response_code(404);
}

$pageTitle = $pageExists ? $pages[$pageKey]['title'] : 'HelpHive | Page Not Found';
$pageStylesheet = $pageExists ? $pages[$pageKey]['stylesheet'] : '';
$pageSection = $pageExists ? $pages[$pageKey]['section'] : '';

include 'frontend/components/header.php';
if ($pageExists) {
	include $pages[$pageKey]['content'];
} else {
	?><main class="not-found-page"><h1>Page not found</h1><p>The page you requested doesn't exist.</p><a href="index.php">Back to Home</a></main><?php
}
include 'frontend/components/footer.php';

?>
