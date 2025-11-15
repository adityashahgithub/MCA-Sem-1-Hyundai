// ============================================
// HYUNDAI WEBSITE - INDEX PAGE SCRIPTS
// ============================================

document.addEventListener('DOMContentLoaded', () => {
    initHeroSlider();
    initRevealDelays();
});

// ============================================
// HERO SLIDER
// ============================================

function initHeroSlider() {
    const slides = document.querySelectorAll('.hero-slide');
    const indicators = document.querySelectorAll('.indicator');
    if (!slides.length || !indicators.length) return;

    let currentSlide = 0;
    let slideInterval;

    const showSlide = (index) => {
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));

        if (slides[index]) {
            slides[index].classList.add('active');
        }
        if (indicators[index]) {
            indicators[index].classList.add('active');
        }
    };

    const nextSlide = () => {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    };

    const startSlider = () => {
        slideInterval = setInterval(nextSlide, 4000);
    };

    const stopSlider = () => {
        clearInterval(slideInterval);
    };

    showSlide(0);
    startSlider();

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
            stopSlider();
            startSlider();
        });
    });

    const heroSection = document.querySelector('.hero');
    if (heroSection) {
        heroSection.addEventListener('mouseenter', stopSlider);
        heroSection.addEventListener('mouseleave', startSlider);
    }
}

// ============================================
// STAGGERED REVEAL DELAYS
// ============================================

function initRevealDelays() {
    const modelCards = document.querySelectorAll('.model-card');
    const featureCards = document.querySelectorAll('.feature-card');

    modelCards.forEach((card, index) => {
        card.style.transitionDelay = `${index * 0.1}s`;
    });

    featureCards.forEach((card, index) => {
        card.style.transitionDelay = `${index * 0.1}s`;
    });
}

