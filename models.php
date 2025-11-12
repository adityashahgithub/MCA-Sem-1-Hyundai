<?php 
// Define base path for assets (relative to project root)
define('BASE_PATH', '');
include 'includes/header.php'; 
?>

<main>
    <!-- Page Hero Section -->
    <section class="page-hero">
        <div class="page-hero-overlay"></div>
        <div class="container">
            <div class="page-hero-content">
                <h1 class="page-title reveal">Explore Our Models</h1>
                <p class="page-subtitle reveal">Discover the perfect Hyundai vehicle for your lifestyle</p>
            </div>
        </div>
    </section>

    <!-- Models Section with Filters -->
    <section class="models-page-section">
        <div class="container">
            <!-- Category Filters -->
            <div class="filter-container reveal">
                <div class="filter-buttons">
                    <button class="filter-btn active" data-category="all">All Models</button>
                    <button class="filter-btn" data-category="suv">SUV</button>
                    <button class="filter-btn" data-category="sedan">Sedan</button>
                    <button class="filter-btn" data-category="hatchback">Hatchback</button>
                    <button class="filter-btn" data-category="electric">Electric</button>
                </div>
            </div>

            <!-- Models Grid -->
            <div class="models-page-grid" id="modelsGrid">
                <!-- SUV Models -->
                <div class="model-card-page" data-category="suv">
                    <div class="model-image-page">
                        <img src="<?php echo BASE_PATH; ?>assets/images/cars/car1.svg" alt="Hyundai Creta">
                        <div class="model-badge">SUV</div>
                    </div>
                    <div class="model-info-page">
                        <h3>Hyundai Creta</h3>
                        <p class="model-tagline">Bold & Powerful</p>
                        <p class="model-price">Starting from ₹10.99 Lakh*</p>
                        <div class="model-features">
                            <span class="feature-tag">5 Seater</span>
                            <span class="feature-tag">Petrol/Diesel</span>
                            <span class="feature-tag">Manual/AMT</span>
                        </div>
                        <div class="model-actions">
                            <a href="#contact" class="btn btn-primary">Book Test Drive</a>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="model-card-page" data-category="suv">
                    <div class="model-image-page">
                        <img src="<?php echo BASE_PATH; ?>assets/images/cars/car2.svg" alt="Hyundai Venue">
                        <div class="model-badge">SUV</div>
                    </div>
                    <div class="model-info-page">
                        <h3>Hyundai Venue</h3>
                        <p class="model-tagline">Compact & Smart</p>
                        <p class="model-price">Starting from ₹7.53 Lakh*</p>
                        <div class="model-features">
                            <span class="feature-tag">5 Seater</span>
                            <span class="feature-tag">Petrol/Diesel</span>
                            <span class="feature-tag">Manual/AMT</span>
                        </div>
                        <div class="model-actions">
                            <a href="#contact" class="btn btn-primary">Book Test Drive</a>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="model-card-page" data-category="suv">
                    <div class="model-image-page">
                        <img src="<?php echo BASE_PATH; ?>assets/images/cars/car5.svg" alt="Hyundai Tucson">
                        <div class="model-badge">SUV</div>
                    </div>
                    <div class="model-info-page">
                        <h3>Hyundai Tucson</h3>
                        <p class="model-tagline">Premium & Luxurious</p>
                        <p class="model-price">Starting from ₹27.38 Lakh*</p>
                        <div class="model-features">
                            <span class="feature-tag">5 Seater</span>
                            <span class="feature-tag">Petrol/Diesel</span>
                            <span class="feature-tag">Automatic</span>
                        </div>
                        <div class="model-actions">
                            <a href="#contact" class="btn btn-primary">Book Test Drive</a>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Sedan Models -->
                <div class="model-card-page" data-category="sedan">
                    <div class="model-image-page">
                        <img src="<?php echo BASE_PATH; ?>assets/images/cars/car4.svg" alt="Hyundai Verna">
                        <div class="model-badge">Sedan</div>
                    </div>
                    <div class="model-info-page">
                        <h3>Hyundai Verna</h3>
                        <p class="model-tagline">Elegant & Dynamic</p>
                        <p class="model-price">Starting from ₹9.22 Lakh*</p>
                        <div class="model-features">
                            <span class="feature-tag">5 Seater</span>
                            <span class="feature-tag">Petrol/Diesel</span>
                            <span class="feature-tag">Manual/CVT</span>
                        </div>
                        <div class="model-actions">
                            <a href="#contact" class="btn btn-primary">Book Test Drive</a>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="model-card-page" data-category="sedan">
                    <div class="model-image-page">
                        <img src="<?php echo BASE_PATH; ?>assets/images/cars/car3.svg" alt="Hyundai Aura">
                        <div class="model-badge">Sedan</div>
                    </div>
                    <div class="model-info-page">
                        <h3>Hyundai Aura</h3>
                        <p class="model-tagline">Style & Performance</p>
                        <p class="model-price">Starting from ₹6.09 Lakh*</p>
                        <div class="model-features">
                            <span class="feature-tag">5 Seater</span>
                            <span class="feature-tag">Petrol/CNG</span>
                            <span class="feature-tag">Manual/AMT</span>
                        </div>
                        <div class="model-actions">
                            <a href="#contact" class="btn btn-primary">Book Test Drive</a>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Hatchback Models -->
                <div class="model-card-page" data-category="hatchback">
                    <div class="model-image-page">
                        <img src="<?php echo BASE_PATH; ?>assets/images/cars/car3.svg" alt="Hyundai i20">
                        <div class="model-badge">Hatchback</div>
                    </div>
                    <div class="model-info-page">
                        <h3>Hyundai i20</h3>
                        <p class="model-tagline">Premium & Sporty</p>
                        <p class="model-price">Starting from ₹7.04 Lakh*</p>
                        <div class="model-features">
                            <span class="feature-tag">5 Seater</span>
                            <span class="feature-tag">Petrol/Diesel</span>
                            <span class="feature-tag">Manual/CVT</span>
                        </div>
                        <div class="model-actions">
                            <a href="#contact" class="btn btn-primary">Book Test Drive</a>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="model-card-page" data-category="hatchback">
                    <div class="model-image-page">
                        <img src="<?php echo BASE_PATH; ?>assets/images/cars/car2.svg" alt="Hyundai Grand i10 Nios">
                        <div class="model-badge">Hatchback</div>
                    </div>
                    <div class="model-info-page">
                        <h3>Hyundai Grand i10 Nios</h3>
                        <p class="model-tagline">Smart & Efficient</p>
                        <p class="model-price">Starting from ₹5.13 Lakh*</p>
                        <div class="model-features">
                            <span class="feature-tag">5 Seater</span>
                            <span class="feature-tag">Petrol/CNG</span>
                            <span class="feature-tag">Manual/AMT</span>
                        </div>
                        <div class="model-actions">
                            <a href="#contact" class="btn btn-primary">Book Test Drive</a>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Electric Models -->
                <div class="model-card-page" data-category="electric">
                    <div class="model-image-page">
                        <img src="<?php echo BASE_PATH; ?>assets/images/cars/car1.svg" alt="Hyundai Kona Electric">
                        <div class="model-badge electric-badge">Electric</div>
                    </div>
                    <div class="model-info-page">
                        <h3>Hyundai Kona Electric</h3>
                        <p class="model-tagline">Future of Mobility</p>
                        <p class="model-price">Starting from ₹23.84 Lakh*</p>
                        <div class="model-features">
                            <span class="feature-tag">5 Seater</span>
                            <span class="feature-tag">Electric</span>
                            <span class="feature-tag">452 km Range</span>
                        </div>
                        <div class="model-actions">
                            <a href="#contact" class="btn btn-primary">Book Test Drive</a>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="model-card-page" data-category="electric">
                    <div class="model-image-page">
                        <img src="<?php echo BASE_PATH; ?>assets/images/cars/car4.svg" alt="Hyundai IONIQ 5">
                        <div class="model-badge electric-badge">Electric</div>
                    </div>
                    <div class="model-info-page">
                        <h3>Hyundai IONIQ 5</h3>
                        <p class="model-tagline">Next Generation EV</p>
                        <p class="model-price">Starting from ₹44.95 Lakh*</p>
                        <div class="model-features">
                            <span class="feature-tag">5 Seater</span>
                            <span class="feature-tag">Electric</span>
                            <span class="feature-tag">631 km Range</span>
                        </div>
                        <div class="model-actions">
                            <a href="#contact" class="btn btn-primary">Book Test Drive</a>
                            <a href="#" class="btn btn-outline">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- No Results Message -->
            <div class="no-results" id="noResults" style="display: none;">
                <p>No models found in this category.</p>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content reveal">
                <h2>Can't Find What You're Looking For?</h2>
                <p>Our team is here to help you find the perfect Hyundai vehicle for your needs.</p>
                <a href="index.php#contact" class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

