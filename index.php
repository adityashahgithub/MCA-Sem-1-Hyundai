<?php 
// Define base path for assets (relative to project root)
define('BASE_PATH', '');
include 'includes/header.php'; 
?>

<main>
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-slider">
            <div class="hero-slide active">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <h1 class="hero-title reveal">Move Beyond Limits with Hyundai</h1>
                    <p class="hero-subtitle reveal">Explore our modern, sustainable, and dynamic lineup.</p>
                    <div class="hero-buttons reveal">
                        <a href="#models" class="btn btn-primary">Explore Models</a>
                        <a href="#contact" class="btn btn-secondary">Book Test Drive</a>
                    </div>
                </div>
            </div>
            <div class="hero-slide">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <h1 class="hero-title">Innovation Meets Performance</h1>
                    <p class="hero-subtitle">Experience the future of driving with Hyundai's advanced technology.</p>
                    <div class="hero-buttons">
                        <a href="#models" class="btn btn-primary">Explore Models</a>
                        <a href="#contact" class="btn btn-secondary">Book Test Drive</a>
                    </div>
                </div>
            </div>
            <div class="hero-slide">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <h1 class="hero-title">Sustainable Mobility Solutions</h1>
                    <p class="hero-subtitle">Join the electric revolution with Hyundai's eco-friendly vehicles.</p>
                    <div class="hero-buttons">
                        <a href="#models" class="btn btn-primary">Explore Models</a>
                        <a href="#contact" class="btn btn-secondary">Book Test Drive</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-indicators">
            <span class="indicator active" data-slide="0"></span>
            <span class="indicator" data-slide="1"></span>
            <span class="indicator" data-slide="2"></span>
        </div>
    </section>

    <!-- Featured Models Section -->
    <section class="featured-models" id="models">
        <div class="container">
            <h2 class="section-title reveal">Our Bestsellers</h2>
            <p class="section-subtitle reveal">Discover our most popular models designed for the Indian market</p>
            <div class="models-grid">
                <div class="model-card reveal">
                    <div class="model-image">
                        <img src="assets/images/cars/car1.svg" alt="Hyundai Creta">
                    </div>
                    <div class="model-info">
                        <h3>Hyundai Creta</h3>
                        <p class="model-price">Starting from ₹10.99 Lakh*</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <div class="model-card reveal">
                    <div class="model-image">
                        <img src="assets/images/cars/car2.svg" alt="Hyundai Venue">
                    </div>
                    <div class="model-info">
                        <h3>Hyundai Venue</h3>
                        <p class="model-price">Starting from ₹7.53 Lakh*</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <div class="model-card reveal">
                    <div class="model-image">
                        <img src="assets/images/cars/car3.svg" alt="Hyundai i20">
                    </div>
                    <div class="model-info">
                        <h3>Hyundai i20</h3>
                        <p class="model-price">Starting from ₹7.04 Lakh*</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <div class="model-card reveal">
                    <div class="model-image">
                        <img src="assets/images/cars/car4.svg" alt="Hyundai Verna">
                    </div>
                    <div class="model-info">
                        <h3>Hyundai Verna</h3>
                        <p class="model-price">Starting from ₹9.22 Lakh*</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <div class="model-card reveal">
                    <div class="model-image">
                        <img src="assets/images/cars/car5.svg" alt="Hyundai Tucson">
                    </div>
                    <div class="model-info">
                        <h3>Hyundai Tucson</h3>
                        <p class="model-price">Starting from ₹27.38 Lakh*</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Hyundai Section -->
    <section class="why-hyundai" id="services">
        <div class="container">
            <h2 class="section-title reveal">Why Choose Hyundai</h2>
            <p class="section-subtitle reveal">Experience excellence in every drive</p>
            <div class="features-grid">
                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <img src="assets/images/icons/service.svg" alt="Innovation">
                    </div>
                    <h3>Innovation</h3>
                    <p>Cutting-edge technology and advanced features that enhance your driving experience and keep you connected on the go.</p>
                </div>
                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <img src="assets/images/icons/offer.svg" alt="Safety">
                    </div>
                    <h3>Safety</h3>
                    <p>Comprehensive safety features and top ratings ensure peace of mind for you and your loved ones on every journey.</p>
                </div>
                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <img src="assets/images/icons/contact.svg" alt="Sustainability">
                    </div>
                    <h3>Sustainability</h3>
                    <p>Leading the charge towards a greener future with electric and hybrid vehicles that reduce environmental impact.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Offers Preview Section -->
    <section class="offers-preview" id="offers">
        <div class="container">
            <div class="offers-banner reveal">
                <div class="offers-content">
                    <h2>Special Offers & Finance Options</h2>
                    <p>Get attractive deals, exchange bonuses, and flexible EMI options on select models</p>
                    <a href="#contact" class="btn btn-primary">View All Offers</a>
                </div>
                <div class="offers-animation">
                    <div class="sliding-text">
                        <span>Up to ₹1,00,000 Exchange Bonus</span>
                        <span>Low Interest Rates Available</span>
                        <span>Extended Warranty Options</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title reveal">Get In Touch</h2>
            <p class="section-subtitle reveal">Have questions? We're here to help</p>
            <div class="contact-wrapper reveal">
                <form class="contact-form" action="php/form_handler.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

