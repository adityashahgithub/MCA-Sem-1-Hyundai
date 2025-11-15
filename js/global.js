// ============================================
// HYUNDAI WEBSITE - GLOBAL JAVASCRIPT
// ============================================

document.addEventListener('DOMContentLoaded', () => {
    document.body.classList.add('fade-in');

    initNavbar();
    initMobileNav();
    initBackToTop();
    initSmoothScroll();
    initScrollReveal();
    initImageLoader();
    initContactForm();
    initPageTransitions();
    setActiveNavLink();
    preventFormResubmission();
});

// Handle browser back/forward to remove fade-out class
window.addEventListener('pageshow', () => {
    document.body.classList.remove('fade-out');
});

// ============================================
// NAVBAR SCROLL EFFECT
// ============================================

function initNavbar() {
    const navbar = document.getElementById('navbar');
    if (!navbar) return;

    const toggleScrolledClass = () => {
        if (window.pageYOffset > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };

    toggleScrolledClass();
    window.addEventListener('scroll', toggleScrolledClass);
}

// ============================================
// MOBILE NAVIGATION
// ============================================

function initMobileNav() {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    if (!hamburger || !navMenu) return;

    const closeMenu = () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        document.body.style.overflow = '';
    };

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
        document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
    });

    navMenu.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            closeMenu();
        });
    });

    document.addEventListener('click', (event) => {
        if (!hamburger.contains(event.target) && !navMenu.contains(event.target)) {
            closeMenu();
        }
    });
}

// ============================================
// BACK TO TOP BUTTON
// ============================================

function initBackToTop() {
    const backToTopBtn = document.getElementById('backToTop');
    if (!backToTopBtn) return;

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// ============================================
// SMOOTH SCROLL
// ============================================

function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');

    links.forEach(link => {
        link.addEventListener('click', function (event) {
            const href = this.getAttribute('href');
            if (!href || href === '#' || href === '#!') {
                return;
            }

            const target = document.querySelector(href);
            if (target) {
                event.preventDefault();
                const offsetTop = target.offsetTop - 70;

                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ============================================
// SCROLL REVEAL ANIMATION
// ============================================

function initScrollReveal() {
    const revealElements = document.querySelectorAll('.reveal, .reveal-fade, .reveal-scale, .reveal-slide-left, .reveal-slide-right');
    if (!revealElements.length) return;

    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -80px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('in-view');
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }, index * 50);
            }
        });
    }, observerOptions);

    revealElements.forEach(element => {
        observer.observe(element);
    });
}

// ============================================
// IMAGE FADE-IN
// ============================================

function initImageLoader() {
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        img.addEventListener('load', function () {
            this.style.opacity = '1';
        });

        img.style.opacity = '0';
        img.style.transition = 'opacity 0.3s ease';
    });
}

// ============================================
// CONTACT FORM HANDLER
// ============================================

function initContactForm() {
    const forms = document.querySelectorAll('.contact-form');
    if (!forms.length) return;

    forms.forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const inputs = this.querySelectorAll('input[required], textarea[required]');
            let isValid = true;

            inputs.forEach(input => {
                input.style.borderColor = '';
            });

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = '#ef4444';
                }
            });

            if (!isValid) {
                alert('Please fill in all required fields.');
                return;
            }

            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn ? submitBtn.textContent : null;
            if (submitBtn) {
                submitBtn.textContent = 'Sending...';
                submitBtn.disabled = true;
            }

            setTimeout(() => {
                alert('Thank you for reaching out! Our team will get back to you shortly.');
                this.reset();
                if (submitBtn && originalText) {
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }
            }, 600);
        });
    });
}

// ============================================
// PAGE TRANSITIONS
// ============================================

function initPageTransitions() {
    const links = document.querySelectorAll('a[data-no-transition="false"], nav a, .btn');

    links.forEach(link => {
        link.addEventListener('click', (event) => {
            const href = link.getAttribute('href');
            const target = link.getAttribute('target');

            if (!href ||
                href.startsWith('#') ||
                href.startsWith('mailto:') ||
                href.startsWith('tel:') ||
                link.hasAttribute('data-no-transition') && link.getAttribute('data-no-transition') === 'true' ||
                target === '_blank' ||
                event.metaKey ||
                event.ctrlKey ||
                event.shiftKey ||
                event.altKey) {
                return;
            }

            event.preventDefault();
            document.body.classList.add('fade-out');

            setTimeout(() => {
                window.location.href = href;
            }, 300);
        });
    });
}

// ============================================
// ACTIVE NAVIGATION STATE
// ============================================

function setActiveNavLink() {
    const navLinks = document.querySelectorAll('.nav-link');
    if (!navLinks.length) return;

    const path = window.location.pathname.split('/').pop();
    const normalizedPath = path === '' ? 'index.html' : path;
    const pageMap = {
        'index.html': 'home',
        'models.html': 'models',
        'model-detail.html': 'models',
        'ev.html': 'ev',
        'services.html': 'services',
        'offers.html': 'offers',
        'dealers.html': 'dealers',
        'careers.html': 'careers',
        'contact.html': 'contact',
        'faqs.html': 'faqs',
        'news.html': 'news',
        'gallery.html': 'gallery',
        'about.html': 'about',
        'privacy.html': 'privacy',
        '404.html': 'error'
    };

    const currentPage = pageMap[normalizedPath] || null;

    navLinks.forEach(link => {
        const pageKey = link.dataset.page || null;
        let isActive = false;

        if (pageKey && currentPage) {
            isActive = pageKey === currentPage;
        } else if (!pageKey && link.getAttribute('href') && link.getAttribute('href').startsWith('#')) {
            const targetHash = link.getAttribute('href');
            isActive = normalizedPath === 'index.html' && window.location.hash === targetHash;
        }

        link.classList.toggle('active', isActive);
    });
}

// ============================================
// FORM RESUBMISSION PREVENTION
// ============================================

function preventFormResubmission() {
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
}

