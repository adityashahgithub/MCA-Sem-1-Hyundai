// ============================================
// HYUNDAI WEBSITE - MODEL DETAIL PAGE SCRIPTS
// ============================================

let carData = null;

document.addEventListener('DOMContentLoaded', () => {
    loadCarData();
    initTabs();
    initGalleryModal();
});

// ============================================
// LOAD CAR DATA FROM JSON
// ============================================

async function loadCarData() {
    try {
        const urlParams = new URLSearchParams(window.location.search);
        const carId = urlParams.get('id') || 'creta';
        
        const response = await fetch('data/cars.json');
        const data = await response.json();
        const car = data.cars.find(c => c.id === carId);
        
        if (car) {
            carData = car;
            populatePage(car);
        } else {
            console.error('Car not found:', carId);
        }
    } catch (error) {
        console.error('Error loading car data:', error);
    }
}

// ============================================
// POPULATE PAGE WITH CAR DATA
// ============================================

function populatePage(car) {
    // Update hero section
    document.getElementById('modelTitle').textContent = car.name;
    document.getElementById('modelTagline').textContent = car.tagline;
    document.getElementById('modelBadge').textContent = car.segment.toUpperCase();
    
    // Update hero image
    const heroImg = document.getElementById('modelHeroImage');
    heroImg.src = car.hero_image;
    heroImg.alt = car.name;
    
    // Update highlight section
    document.getElementById('modelHighlight').textContent = `${car.name} - ${car.tagline}`;
    document.getElementById('modelDescription').textContent = `Experience the ${car.name} with ${car.features.length} premium features designed for modern driving.`;
    
    // Update specs
    document.getElementById('modelEngine').textContent = car.engine;
    document.getElementById('modelTransmission').textContent = car.transmission;
    document.getElementById('modelPower').textContent = `Up to ${car.power_ps} PS`;
    document.getElementById('modelMileage').textContent = `${car.mileage} ${car.mileage_unit}`;
    
    // Populate features
    populateFeatures(car.features);
    
    // Populate gallery
    populateGallery(car.gallery_images, car.name);
    
    // Populate variants
    populateVariants(car.variants);
    
    // Update page title
    document.title = `${car.name} - Hyundai India`;
    
    // Update CTA section
    const ctaTitle = document.getElementById('ctaTitle');
    if (ctaTitle) {
        ctaTitle.textContent = `Ready to Experience the ${car.name}?`;
    }
}

// ============================================
// POPULATE FEATURES
// ============================================

function populateFeatures(features) {
    const container = document.getElementById('featureCards');
    container.innerHTML = '';
    
    features.forEach(feature => {
        const card = document.createElement('div');
        card.className = 'feature-card-detail reveal';
        card.innerHTML = `
            <h3>${feature.split(' ')[0]} ${feature.split(' ')[1] || ''}</h3>
            <p>${feature}</p>
        `;
        container.appendChild(card);
    });
}

// ============================================
// POPULATE GALLERY
// ============================================

function populateGallery(images, carName) {
    const container = document.getElementById('galleryGrid');
    container.innerHTML = '';
    
    images.forEach((imgUrl, index) => {
        const item = document.createElement('div');
        item.className = 'gallery-item reveal';
        item.innerHTML = `
            <img src="${imgUrl}" alt="${carName} - Image ${index + 1}" loading="lazy">
        `;
        item.addEventListener('click', () => openModal(imgUrl, carName));
        container.appendChild(item);
    });
}

// ============================================
// POPULATE VARIANTS
// ============================================

function populateVariants(variants) {
    const container = document.getElementById('trimGrid');
    container.innerHTML = '';
    
    variants.forEach(variant => {
        const card = document.createElement('div');
        card.className = 'trim-card reveal';
        card.innerHTML = `
            <h4>${variant} Variant</h4>
            <ul>
                <li>Premium features included</li>
                <li>Advanced safety systems</li>
                <li>Modern technology integration</li>
            </ul>
        `;
        container.appendChild(card);
    });
}

// ============================================
// TABS FUNCTIONALITY
// ============================================

function initTabs() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetTab = button.getAttribute('data-tab');
            
            // Remove active class from all buttons and contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked button and corresponding content
            button.classList.add('active');
            document.getElementById(`${targetTab}Tab`).classList.add('active');
        });
    });
}

// ============================================
// GALLERY MODAL
// ============================================

function initGalleryModal() {
    // Create modal element
    const modal = document.createElement('div');
    modal.className = 'modal';
    modal.id = 'imageModal';
    modal.innerHTML = `
        <div class="modal-content">
            <span class="modal-close">&times;</span>
            <img id="modalImage" src="" alt="">
        </div>
    `;
    document.body.appendChild(modal);
    
    // Close modal handlers
    const closeBtn = modal.querySelector('.modal-close');
    closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });
}

function openModal(imageUrl, altText) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    modalImg.src = imageUrl;
    modalImg.alt = altText;
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';
    document.body.style.overflow = '';
}
