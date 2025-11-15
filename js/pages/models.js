// ============================================
// HYUNDAI WEBSITE - MODELS PAGE SCRIPTS
// ============================================

document.addEventListener('DOMContentLoaded', () => {
    initModelFilters();
});

function initModelFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.model-card-page');
    const noResults = document.getElementById('noResults');

    if (!filterButtons.length || !cards.length) return;

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');

            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            let visibleCount = 0;

            cards.forEach((card, index) => {
                const cardCategory = card.getAttribute('data-category');
                const matches = category === 'all' || cardCategory === category;

                if (matches) {
                    card.classList.remove('fade-out');
                    card.classList.add('fade-in');
                    setTimeout(() => {
                        card.classList.remove('is-hidden');
                    }, 50);
                    visibleCount += 1;
                } else {
                    card.classList.remove('fade-in');
                    card.classList.add('fade-out');
                    setTimeout(() => {
                        card.classList.add('is-hidden');
                    }, 300);
                }
            });

            if (noResults) {
                noResults.style.display = visibleCount === 0 ? 'block' : 'none';
            }
        });
    });
}

