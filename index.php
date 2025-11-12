<?php 
// Define base path for assets (relative to project root)
define('BASE_PATH', '');
include 'includes/header.php';
include 'includes/image_helper.php';
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
                        <?php 
                        $cretaImg = getCarImage('creta', 'suv');
                        $cretaSrcSet = generateSrcSet('creta', 'suv', 'webp');
                        ?>
                        <picture>
                            <source srcset="<?php echo $cretaSrcSet; ?>" type="image/webp" sizes="(max-width: 576px) 400px, (max-width: 992px) 800px, 1200px">
                            <img src="<?php echo $cretaImg; ?>" alt="Hyundai Creta" loading="lazy" width="1600" height="590">
                        </picture>
                    </div>
                    <div class="model-info">
                        <h3>Hyundai Creta</h3>
                        <p class="model-price">Starting from ₹10.99 Lakh*</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <div class="model-card reveal">
                    <div class="model-image">
                        <?php 
                        $venueImg = getCarImage('venue', 'suv');
                        $venueSrcSet = generateSrcSet('venue', 'suv', 'webp');
                        ?>
                        <picture>
                            <source srcset="<?php echo $venueSrcSet; ?>" type="image/webp" sizes="(max-width: 576px) 400px, (max-width: 992px) 800px, 1200px">
                            <img src="<?php echo $venueImg; ?>" alt="Hyundai Venue" loading="lazy" width="1600" height="590">
                        </picture>
                    </div>
                    <div class="model-info">
                        <h3>Hyundai Venue</h3>
                        <p class="model-price">Starting from ₹7.53 Lakh*</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <div class="model-card reveal">
                    <div class="model-image">
                        <?php 
                        $i20Img = getCarImage('i20', 'hatchback');
                        $i20SrcSet = generateSrcSet('i20', 'hatchback', 'webp');
                        ?>
                        <picture>
                            <source srcset="<?php echo $i20SrcSet; ?>" type="image/webp" sizes="(max-width: 576px) 400px, (max-width: 992px) 800px, 1200px">
                            <img src="<?php echo $i20Img; ?>" alt="Hyundai i20" loading="lazy" width="1600" height="590">
                        </picture>
                    </div>
                    <div class="model-info">
                        <h3>Hyundai i20</h3>
                        <p class="model-price">Starting from ₹7.04 Lakh*</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <div class="model-card reveal">
                    <div class="model-image">
                        <?php 
                        $vernaImg = getCarImage('verna', 'sedan');
                        $vernaSrcSet = generateSrcSet('verna', 'sedan', 'webp');
                        ?>
                        <picture>
                            <source srcset="<?php echo $vernaSrcSet; ?>" type="image/webp" sizes="(max-width: 576px) 400px, (max-width: 992px) 800px, 1200px">
                            <img src="<?php echo $vernaImg; ?>" alt="Hyundai Verna" loading="lazy" width="1600" height="590">
                        </picture>
                    </div>
                    <div class="model-info">
                        <h3>Hyundai Verna</h3>
                        <p class="model-price">Starting from ₹9.22 Lakh*</p>
                        <a href="#" class="btn btn-outline">View Details</a>
                    </div>
                </div>
                <div class="model-card reveal">
                    <div class="model-image">
                        <?php 
                        $tucsonImg = getCarImage('alcazar', 'suv');
                        $tucsonSrcSet = generateSrcSet('alcazar', 'suv', 'webp');
                        ?>
                        <picture>
                            <source srcset="<?php echo $tucsonSrcSet; ?>" type="image/webp" sizes="(max-width: 576px) 400px, (max-width: 992px) 800px, 1200px">
                            <img src="<?php echo $tucsonImg; ?>" alt="Hyundai Alcazar" loading="lazy" width="1600" height="590">
                        </picture>
                    </div>
                    <div class="model-info">
                        <h3>Hyundai alcazar</h3>
                        <p class="model-price">Starting from ₹15.99 Lakh*</p>
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
                        <img src="<?php echo getFeatureIcon('innovation'); ?>" alt="Innovation">
                    </div>
                    <h3>Innovation</h3>
                    <p>Cutting-edge technology and advanced features that enhance your driving experience and keep you connected on the go.</p>
                </div>
                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <img src="<?php echo getFeatureIcon('safety'); ?>" alt="Safety">
                    </div>
                    <h3>Safety</h3>
                    <p>Comprehensive safety features and top ratings ensure peace of mind for you and your loved ones on every journey.</p>
                </div>
                <div class="feature-card reveal">
                    <div class="feature-icon">
                        <img src="<?php echo getFeatureIcon('sustainability'); ?>" alt="Sustainability">
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

