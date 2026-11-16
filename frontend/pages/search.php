<?php
$causeOptions = [
	'environment' => 'Environment & Nature',
	'education' => 'Education & Youth',
	'community' => 'Community Support',
	'animal-welfare' => 'Animal Welfare',
];
$selectedCause = $_GET['cause'] ?? '';
if (!is_string($selectedCause) || !isset($causeOptions[$selectedCause])) {
	$selectedCause = '';
}

$opportunities = [
	[
		'id' => 'coastal-cleanup', 'title' => 'Coastal Cleanup Drive', 'organization' => 'Blue Shores Initiative',
		'cause' => 'environment', 'cause_label' => $causeOptions['environment'], 'type' => 'in-person', 'type_label' => 'In person',
		'location' => 'Lapu-Lapu City', 'date' => '2026-12-05', 'date_label' => 'Sat, Dec 5, 2026', 'time' => '9:00 AM - 12:00 PM',
		'duration' => 'short', 'duration_label' => '3 hours', 'skills' => 'outdoors cleanup teamwork', 'good_for' => 'individuals groups',
		'good_for_label' => 'Good for groups', 'distance' => 8,
		'image' => 'frontend/assets/images/environment&nature.png',
		'description' => 'Help clean the shoreline and protect marine ecosystems through a community coastal cleanup.',
	],
	[
		'id' => 'animal-shelter-assistant', 'title' => 'Animal Shelter Assistant', 'organization' => 'Paws & Care Foundation',
		'cause' => 'animal-welfare', 'cause_label' => $causeOptions['animal-welfare'], 'type' => 'in-person', 'type_label' => 'In person',
		'location' => 'Cebu City', 'date' => '2026-11-24', 'date_label' => 'Tue, Nov 24, 2026', 'time' => '10:00 AM - 1:00 PM',
		'duration' => 'short', 'duration_label' => '3 hours', 'skills' => 'animal-care cleaning teamwork', 'good_for' => 'individuals',
		'good_for_label' => 'Good for individuals', 'distance' => 5,
		'image' => 'frontend/assets/images/animal_welfare.png',
		'description' => 'Help care for rescued animals by preparing food, cleaning their spaces, and spending time with them.',
	],
	[
		'id' => 'community-care-companion', 'title' => 'Community Care Companion', 'organization' => 'Kind Hearts Community',
		'cause' => 'community', 'cause_label' => $causeOptions['community'], 'type' => 'in-person', 'type_label' => 'In person',
		'location' => 'Midtown Community Center', 'date' => '2026-11-28', 'date_label' => 'Sat, Nov 28, 2026', 'time' => '1:00 PM - 4:00 PM',
		'duration' => 'short', 'duration_label' => '3 hours', 'skills' => 'conversation listening outreach', 'good_for' => 'individuals groups',
		'good_for_label' => 'Good for individuals', 'distance' => 3,
		'image' => 'frontend/assets/images/community_support.png',
		'description' => 'Support older adults through friendly conversations, simple activities, and community outreach.',
	],
	[
		'id' => 'weekend-reading-buddies', 'title' => 'Weekend Reading Buddies', 'organization' => 'Bright Futures Foundation',
		'cause' => 'education', 'cause_label' => $causeOptions['education'], 'type' => 'in-person', 'type_label' => 'In person',
		'location' => 'Westside Library', 'date' => '2026-12-12', 'date_label' => 'Sat, Dec 12, 2026', 'time' => '10:00 AM - 12:00 PM',
		'duration' => 'short', 'duration_label' => '2 hours', 'skills' => 'reading tutoring children', 'good_for' => 'individuals groups',
		'good_for_label' => 'Good for groups', 'distance' => 6,
		'image' => 'frontend/assets/images/education&youth.png',
		'description' => 'Help children build reading confidence through storytelling and reading sessions.',
	],
	[
		'id' => 'environmental-awareness-creator', 'title' => 'Environmental Awareness Creator', 'organization' => 'Green Earth Network',
		'cause' => 'environment', 'cause_label' => $causeOptions['environment'], 'type' => 'remote', 'type_label' => 'Remote',
		'location' => 'Remote', 'date' => '2026-12-15', 'date_label' => 'Tue, Dec 15, 2026', 'time' => 'Flexible schedule',
		'duration' => 'ongoing', 'duration_label' => 'Ongoing', 'skills' => 'writing design social-media', 'good_for' => 'individuals',
		'good_for_label' => 'Good for individuals', 'distance' => 0,
		'image' => 'frontend/assets/images/environment&nature.png',
		'description' => 'Create digital awareness content about recycling, pollution, and environmental protection.',
	],
];
?>
<main class="content-page search-page">
	<section class="search-toolbar-area" aria-label="Search and filter opportunities">
		<form class="search-controls" id="opportunity-search-form">
			<div class="opportunity-searchbar">
			<label class="search-field keyword-field" for="search-term">
				<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="10.8" cy="10.8" r="6.6" /><path d="m16 16 4.4 4.4" /></svg>
				<input id="search-term" name="keyword" type="search" placeholder="Search by keyword, skill, or interest">
			</label>
			<label class="search-field location-field" for="search-location">
				<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 10.1c0 5-7 11-7 11s-7-6-7-11a7 7 0 1 1 14 0Z" /><circle cx="12" cy="10" r="2.3" /></svg>
				<input id="search-location" name="location" type="search" placeholder="Cebu, Philippines">
			</label>
			<label class="search-field distance-field" for="search-distance">
				<svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="8.5" /><circle cx="12" cy="12" r="4.7" /><circle cx="12" cy="12" r="1.2" /><path d="m18.2 5.8 2.2-2.2" /></svg>
				<select id="search-distance" name="distance" aria-label="Maximum distance">
					<option value="">Distance</option>
					<option value="5">Within 5 km</option>
					<option value="10">Within 10 km</option>
					<option value="25">Within 25 km</option>
					<option value="50">Within 50 km</option>
				</select>
				<span class="select-chevron" aria-hidden="true">&#8964;</span>
			</label>
			<button class="primary-link" type="submit">Search</button>
			</div>

		<div class="filter-bar" aria-label="Opportunity filters">
			<span class="filter-bar-label"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16l-6.2 7.2v5.1l-3.6 1.8v-6.9z" /></svg>Filters</span>
			<details class="filter-chip">
				<summary><span class="filter-icon">&#9678;</span>Location Type<span class="filter-chevron">&#8964;</span></summary>
				<div class="filter-popover"><select name="location_type" aria-label="Location Type"><option value="">Any location</option><option value="in-person">On-site</option><option value="remote">Remote</option></select></div>
			</details>
			<details class="filter-chip">
				<summary><span class="filter-icon">&#9670;</span>Cause Areas<span class="filter-chevron">&#8964;</span></summary>
				<div class="filter-popover"><select name="cause" id="filter-cause" data-initial-value="<?php echo htmlspecialchars($selectedCause, ENT_QUOTES, 'UTF-8'); ?>"><option value="">All causes</option><?php foreach ($causeOptions as $value => $label): ?><option value="<?php echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); ?>"<?php echo $selectedCause === $value ? ' selected' : ''; ?>><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></option><?php endforeach; ?></select></div>
			</details>
			<details class="filter-chip">
				<summary><span class="filter-icon">&#9786;</span>Good For<span class="filter-chevron">&#8964;</span></summary>
				<div class="filter-popover"><select name="good_for" aria-label="Good For"><option value="">Anyone</option><option value="individuals">Individuals</option><option value="groups">Groups</option></select></div>
			</details>
			<details class="filter-chip">
				<summary><span class="filter-icon">&#8987;</span>Duration<span class="filter-chevron">&#8964;</span></summary>
				<div class="filter-popover"><select name="duration" aria-label="Duration"><option value="">Any duration</option><option value="short">One day</option><option value="ongoing">Ongoing</option></select></div>
			</details>
			<details class="filter-chip date-filter-chip">
				<summary><span class="filter-icon">&#9635;</span>Date<span class="filter-chevron">&#8964;</span></summary>
				<div class="filter-popover date-filter-fields"><label>From<input name="date_from" type="date"></label><label>To<input name="date_to" type="date"></label></div>
			</details>
			<details class="filter-chip">
				<summary><span class="filter-icon">&#10022;</span>Skills<span class="filter-chevron">&#8964;</span></summary>
				<div class="filter-popover"><select name="skill" aria-label="Skills"><option value="">Any skill</option><option value="teamwork">Teamwork</option><option value="cleanup">Cleanup</option><option value="reading">Reading</option><option value="tutoring">Tutoring</option><option value="writing">Writing</option></select></div>
			</details>
			<button class="filter-clear" type="reset" aria-label="Clear all filters" title="Clear all filters">&times;</button>
		</div>
		</form>
	</section>

	<section class="search-results content-width" aria-label="Volunteer opportunities">
		<div class="results-heading">
			<p class="result-count"><span data-result-count><?php echo count($opportunities); ?></span> Opportunities</p>
			<p class="sample-data-note">Sample listings</p>
		</div>
		<div class="opportunity-list" data-opportunity-list>
			<?php foreach ($opportunities as $opportunity): ?>
				<article class="opportunity-card" data-opportunity-card
					data-title="<?php echo htmlspecialchars(strtolower($opportunity['title'] . ' ' . $opportunity['organization'] . ' ' . $opportunity['description']), ENT_QUOTES, 'UTF-8'); ?>"
					data-location="<?php echo htmlspecialchars(strtolower($opportunity['location']), ENT_QUOTES, 'UTF-8'); ?>"
					data-location-type="<?php echo htmlspecialchars($opportunity['type'], ENT_QUOTES, 'UTF-8'); ?>"
					data-cause="<?php echo htmlspecialchars($opportunity['cause'], ENT_QUOTES, 'UTF-8'); ?>"
					data-good-for="<?php echo htmlspecialchars($opportunity['good_for'], ENT_QUOTES, 'UTF-8'); ?>"
					data-duration="<?php echo htmlspecialchars($opportunity['duration'], ENT_QUOTES, 'UTF-8'); ?>"
					data-date="<?php echo htmlspecialchars($opportunity['date'], ENT_QUOTES, 'UTF-8'); ?>"
					data-distance="<?php echo (int) $opportunity['distance']; ?>"
					data-skills="<?php echo htmlspecialchars($opportunity['skills'], ENT_QUOTES, 'UTF-8'); ?>">
					<a class="opportunity-image-link" href="index.php?page=opportunity&amp;id=<?php echo rawurlencode($opportunity['id']); ?>" tabindex="-1" aria-hidden="true">
						<img src="<?php echo htmlspecialchars($opportunity['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
					</a>
					<div class="opportunity-card-body">
						<div class="opportunity-card-heading">
							<div>
								<a class="opportunity-title-link" href="index.php?page=opportunity&amp;id=<?php echo rawurlencode($opportunity['id']); ?>"><h2><?php echo htmlspecialchars($opportunity['title'], ENT_QUOTES, 'UTF-8'); ?></h2></a>
								<p class="opportunity-organization"><?php echo htmlspecialchars($opportunity['organization'], ENT_QUOTES, 'UTF-8'); ?></p>
							</div>
							<button class="bookmark-button" type="button" data-bookmark-toggle data-opportunity-id="<?php echo htmlspecialchars($opportunity['id'], ENT_QUOTES, 'UTF-8'); ?>" data-opportunity-title="<?php echo htmlspecialchars($opportunity['title'], ENT_QUOTES, 'UTF-8'); ?>" aria-pressed="false" aria-label="Save <?php echo htmlspecialchars($opportunity['title'], ENT_QUOTES, 'UTF-8'); ?>" title="Save on this browser">
								<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6.5 4.5h11v16l-5.5-3.8-5.5 3.8z" /></svg>
							</button>
						</div>
						<span class="cause-badge cause-<?php echo htmlspecialchars($opportunity['cause'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars(str_replace(' & Youth', '', str_replace(' & Nature', '', $opportunity['cause_label'])), ENT_QUOTES, 'UTF-8'); ?></span>
						<div class="opportunity-divider"></div>
						<p class="opportunity-description"><?php echo htmlspecialchars($opportunity['description'], ENT_QUOTES, 'UTF-8'); ?></p>
						<div class="opportunity-meta">
							<span class="meta-chip meta-onsite"><i aria-hidden="true"></i><?php echo htmlspecialchars($opportunity['type'] === 'remote' ? 'Remote' : 'On-site', ENT_QUOTES, 'UTF-8'); ?></span>
							<span class="meta-chip"><i class="meta-location" aria-hidden="true"></i><?php echo htmlspecialchars($opportunity['location'], ENT_QUOTES, 'UTF-8'); ?></span>
							<span class="meta-chip"><i class="meta-calendar" aria-hidden="true"></i><?php echo htmlspecialchars($opportunity['date_label'] . ' · ' . $opportunity['time'], ENT_QUOTES, 'UTF-8'); ?></span>
							<span class="meta-chip"><i class="meta-people" aria-hidden="true"></i><?php echo htmlspecialchars($opportunity['good_for_label'], ENT_QUOTES, 'UTF-8'); ?></span>
							<span class="meta-chip"><i class="meta-duration" aria-hidden="true"></i><?php echo htmlspecialchars($opportunity['duration_label'], ENT_QUOTES, 'UTF-8'); ?></span>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
		<p class="search-empty-state" data-empty-state hidden>No opportunities match these filters. Try broadening your search.</p>
	</section>
</main>
<script src="frontend/assets/js/search-filter.js" defer></script>
<script src="frontend/assets/js/bookmark-toggle.js" defer></script>
