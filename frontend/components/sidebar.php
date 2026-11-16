<?php
$accountLinks = ($accountArea ?? 'volunteer') === 'organization'
	? [
		['key' => 'my-organization', 'label' => 'Organization Overview'],
		['key' => 'publish-opportunity', 'label' => 'Publish Opportunity'],
		['key' => 'applicants', 'label' => 'Applicants'],
		['key' => 'attendance', 'label' => 'Attendance'],
		['key' => 'reports', 'label' => 'Reports'],
	]
	: [
		['key' => 'my-profile', 'label' => 'My Profile'],
		['key' => 'my-applications', 'label' => 'My Applications'],
		['key' => 'saved-opportunities', 'label' => 'Saved Opportunities'],
		['key' => 'notifications', 'label' => 'Notifications'],
		['key' => 'account-settings', 'label' => 'Account Settings'],
	];
?>
<nav class="account-sidebar" aria-label="<?php echo ($accountArea ?? 'volunteer') === 'organization' ? 'Organization navigation' : 'Volunteer navigation'; ?>">
	<p class="account-sidebar-title"><?php echo ($accountArea ?? 'volunteer') === 'organization' ? 'Organization' : 'Volunteer'; ?></p>
	<?php foreach ($accountLinks as $link): ?>
		<a href="index.php?page=<?php echo htmlspecialchars($link['key'], ENT_QUOTES, 'UTF-8'); ?>"<?php echo ($activeAccountPage ?? '') === $link['key'] ? ' aria-current="page"' : ''; ?>>
			<?php echo htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8'); ?>
		</a>
	<?php endforeach; ?>
</nav>
