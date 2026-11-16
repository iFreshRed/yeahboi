(() => {
	const filterForm = document.querySelector('#opportunity-search-form');
	const cards = [...document.querySelectorAll('[data-opportunity-card]')];
	const count = document.querySelector('[data-result-count]');
	const emptyState = document.querySelector('[data-empty-state]');

	if (!filterForm || !cards.length || !count || !emptyState) {
		return;
	}

	const getFilters = () => Object.fromEntries(
		[...new FormData(filterForm)].map(([name, value]) => [name, value.trim().toLowerCase()])
	);

	const matchesOpportunity = (card, filters) => {
		const searchableText = `${card.dataset.title} ${card.dataset.skills}`;

		return (!filters.keyword || searchableText.includes(filters.keyword))
			&& (!filters.location || card.dataset.location.includes(filters.location))
			&& (!filters.location_type || card.dataset.locationType === filters.location_type)
			&& (!filters.cause || card.dataset.cause === filters.cause)
			&& (!filters.good_for || card.dataset.goodFor.split(' ').includes(filters.good_for))
			&& (!filters.duration || card.dataset.duration === filters.duration)
			&& (!filters.date_from || card.dataset.date >= filters.date_from)
			&& (!filters.date_to || card.dataset.date <= filters.date_to)
			&& (!filters.distance || card.dataset.locationType === 'remote' || Number(card.dataset.distance) <= Number(filters.distance))
			&& (!filters.skill || card.dataset.skills.includes(filters.skill));
	};

	const updateResults = () => {
		const filters = getFilters();
		let visibleCount = 0;

		cards.forEach((card) => {
			const matches = matchesOpportunity(card, filters);

			card.hidden = !matches;
			visibleCount += matches ? 1 : 0;
		});

		count.textContent = String(visibleCount);
		emptyState.hidden = visibleCount > 0;
	};

	filterForm.addEventListener('input', updateResults);
	filterForm.addEventListener('change', updateResults);
	filterForm.addEventListener('submit', (event) => {
		event.preventDefault();
		updateResults();
	});

	filterForm.addEventListener('reset', () => {
		window.setTimeout(() => {
			filterForm.querySelector('#filter-cause').value = '';
			updateResults();
		}, 0);
	});

	updateResults();
})();
