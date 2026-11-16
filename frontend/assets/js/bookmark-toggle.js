(() => {
	const buttons = [...document.querySelectorAll('[data-bookmark-toggle]')];
	if (!buttons.length) {
		return;
	}

	const storageKey = 'helphive-bookmarked-opportunities';
	let savedIds = new Set();
	try {
		const storedIds = JSON.parse(localStorage.getItem(storageKey) || '[]');
		if (Array.isArray(storedIds)) {
			savedIds = new Set(storedIds.filter((id) => typeof id === 'string'));
		}
	} catch {
		savedIds = new Set();
	}

	const updateButton = (button) => {
		const isSaved = savedIds.has(button.dataset.opportunityId);
		button.setAttribute('aria-pressed', String(isSaved));
		button.setAttribute('aria-label', `${isSaved ? 'Remove saved' : 'Save'} ${button.dataset.opportunityTitle}`);
		button.title = isSaved ? 'Saved on this browser' : 'Save on this browser';
		button.classList.toggle('is-saved', isSaved);
	};

	buttons.forEach((button) => {
		updateButton(button);
		button.addEventListener('click', () => {
			const id = button.dataset.opportunityId;
			if (savedIds.has(id)) {
				savedIds.delete(id);
			} else {
				savedIds.add(id);
			}
			try {
				localStorage.setItem(storageKey, JSON.stringify([...savedIds]));
			} catch {
				return;
			}
			updateButton(button);
		});
	});
})();
