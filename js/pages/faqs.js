// ============================================
// HYUNDAI WEBSITE - FAQS PAGE SCRIPTS
// ============================================

document.addEventListener('DOMContentLoaded', () => {
    initFaqAccordion();
});

function initFaqAccordion() {
    const items = document.querySelectorAll('.faq-item');
    if (!items.length) return;

    items.forEach(item => {
        const question = item.querySelector('.faq-question');
        if (!question) return;

        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            items.forEach(i => i.classList.remove('active'));
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
}

