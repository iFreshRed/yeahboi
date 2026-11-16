<?php
$opportunityDetails = [
	'coastal-cleanup' => [
		'title' => 'Coastal Cleanup Drive', 'organization' => 'Blue Shores Initiative', 'cause' => 'Environment & Nature',
		'type' => 'In person', 'location' => 'North Shore', 'date' => 'Saturday, December 5, 2026', 'time' => '9:00 AM - 12:00 PM',
		'duration' => '3 hours', 'volunteers' => '20 volunteers', 'skills' => 'Outdoor activity, teamwork', 'image' => 'environment&nature.png',
		'description' => 'Help clean the shoreline and protect marine ecosystems through a community coastal cleanup.',
		'about' => 'Join neighbors for a hands-on morning caring for the coastline. The organizing team will provide cleanup supplies and a short safety briefing before the activity begins.',
		'tasks' => ['Collect litter along the marked shoreline route.', 'Sort collected materials for proper disposal.', 'Follow the site safety guidance from the organizing team.'],
	],
	'animal-shelter-assistant' => [
		'title' => 'Animal Shelter Assistant', 'organization' => 'Paws & Care Foundation', 'cause' => 'Animal Welfare',
		'type' => 'In person', 'location' => 'Central Animal Shelter', 'date' => 'Tuesday, November 24, 2026', 'time' => '10:00 AM - 1:00 PM',
		'duration' => '3 hours', 'volunteers' => '8 volunteers', 'skills' => 'Animal care, cleaning, teamwork', 'image' => 'animal_welfare.png',
		'description' => 'Help care for rescued animals by preparing food, cleaning their spaces, and spending time with them.',
		'about' => 'Support the shelter team with daily care tasks in a calm, supervised environment. Volunteers will receive an orientation before working with animals.',
		'tasks' => ['Prepare food and refresh water stations.', 'Help tidy animal spaces with staff guidance.', 'Offer calm company to animals ready for interaction.'],
	],
	'community-care-companion' => [
		'title' => 'Community Care Companion', 'organization' => 'Kind Hearts Community', 'cause' => 'Community Support',
		'type' => 'In person', 'location' => 'Midtown Community Center', 'date' => 'Saturday, November 28, 2026', 'time' => '1:00 PM - 4:00 PM',
		'duration' => '3 hours', 'volunteers' => '10 volunteers', 'skills' => 'Conversation, listening, outreach', 'image' => 'community_support.png',
		'description' => 'Support older adults through friendly conversations, simple activities, and community outreach.',
		'about' => 'Spend an afternoon helping create a welcoming space for older adults at the community center. Activities are coordinated by the organization team.',
		'tasks' => ['Welcome attendees and help set up activities.', 'Join small-group conversations and games.', 'Share any support requests with the organization coordinator.'],
	],
	'weekend-reading-buddies' => [
		'title' => 'Weekend Reading Buddies', 'organization' => 'Bright Futures Foundation', 'cause' => 'Education & Youth',
		'type' => 'In person', 'location' => 'Westside Library', 'date' => 'Saturday, December 12, 2026', 'time' => '10:00 AM - 12:00 PM',
		'duration' => '2 hours', 'volunteers' => '12 volunteers', 'skills' => 'Reading, tutoring, working with children', 'image' => 'education&youth.png',
		'description' => 'Help children build reading confidence through storytelling and reading sessions.',
		'about' => 'Pair with a young reader for a supportive reading session. The foundation team will provide books and an orientation for volunteers.',
		'tasks' => ['Read together using age-appropriate books.', 'Encourage children as they practice reading aloud.', 'Return materials and share session notes with the coordinator.'],
	],
	'environmental-awareness-creator' => [
		'title' => 'Environmental Awareness Creator', 'organization' => 'Green Earth Network', 'cause' => 'Environment & Nature',
		'type' => 'Remote', 'location' => 'Remote', 'date' => 'Tuesday, December 15, 2026', 'time' => 'Flexible schedule',
		'duration' => 'Ongoing', 'volunteers' => '5 volunteers', 'skills' => 'Writing, design, social media', 'image' => 'environment&nature.png',
		'description' => 'Create digital awareness content about recycling, pollution, and environmental protection.',
		'about' => 'Collaborate remotely with the Green Earth Network team to prepare accessible educational content for community channels.',
		'tasks' => ['Draft clear, accurate environmental awareness content.', 'Coordinate with the organization on review and publication.', 'Use approved assets and accessibility guidance.'],
	],
];

$opportunityId = $_GET['id'] ?? '';
$opportunity = is_string($opportunityId) ? ($opportunityDetails[$opportunityId] ?? null) : null;
if (!$opportunity) {
	http_response_code(404);
}
?>
<main class="content-page opportunity-page">
	<?php if ($opportunity): ?>
		<div class="content-width">
			<a class="opportunity-back-link" href="index.php?page=search">&#8592; Back to Opportunities</a>
			<section class="opportunity-detail-hero">
				<img src="frontend/assets/images/<?php echo htmlspecialchars($opportunity['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
				<div>
					<p class="page-eyebrow"><?php echo htmlspecialchars($opportunity['cause'], ENT_QUOTES, 'UTF-8'); ?> <span>·</span> <?php echo htmlspecialchars($opportunity['type'], ENT_QUOTES, 'UTF-8'); ?></p>
					<h1><?php echo htmlspecialchars($opportunity['title'], ENT_QUOTES, 'UTF-8'); ?></h1>
					<p class="detail-organization"><?php echo htmlspecialchars($opportunity['organization'], ENT_QUOTES, 'UTF-8'); ?></p>
					<p class="detail-description"><?php echo htmlspecialchars($opportunity['description'], ENT_QUOTES, 'UTF-8'); ?></p>
					<dl class="detail-facts">
						<div><dt>Location</dt><dd><?php echo htmlspecialchars($opportunity['location'], ENT_QUOTES, 'UTF-8'); ?></dd></div>
						<div><dt>Date &amp; time</dt><dd><?php echo htmlspecialchars($opportunity['date'] . ' · ' . $opportunity['time'], ENT_QUOTES, 'UTF-8'); ?></dd></div>
						<div><dt>Duration</dt><dd><?php echo htmlspecialchars($opportunity['duration'], ENT_QUOTES, 'UTF-8'); ?></dd></div>
						<div><dt>Volunteers needed</dt><dd><?php echo htmlspecialchars($opportunity['volunteers'], ENT_QUOTES, 'UTF-8'); ?></dd></div>
						<div><dt>Skills</dt><dd><?php echo htmlspecialchars($opportunity['skills'], ENT_QUOTES, 'UTF-8'); ?></dd></div>
					</dl>
				</div>
			</section>

			<div class="opportunity-detail-columns">
				<div class="opportunity-detail-copy">
					<section>
						<h2>About This Opportunity</h2>
						<p><?php echo htmlspecialchars($opportunity['about'], ENT_QUOTES, 'UTF-8'); ?></p>
					</section>
					<section>
						<h2>What You'll Do</h2>
						<ul>
							<?php foreach ($opportunity['tasks'] as $task): ?>
								<li><?php echo htmlspecialchars($task, ENT_QUOTES, 'UTF-8'); ?></li>
							<?php endforeach; ?>
						</ul>
					</section>
				</div>
				<aside class="registration-panel">
					<h2>Ready to help?</h2>
					<p>Registration requires an active volunteer account.</p>
					<a class="primary-link" href="#signup-panel">Create an Account</a>
					<p class="hours-notice">Attendance and volunteer hours are reviewed and verified by the organization after the activity.</p>
				</aside>
			</div>
			<p class="sample-data-note">Illustrative opportunity details for layout preview; not live registration data.</p>
		</div>
	<?php else: ?>
		<div class="content-width opportunity-missing">
			<h1>Opportunity not found</h1>
			<p>This sample listing is unavailable. Browse current examples instead.</p>
			<a class="primary-link" href="index.php?page=search">Back to Opportunities</a>
		</div>
	<?php endif; ?>
</main>
