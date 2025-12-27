<?php
/**
 * Front Page Template
 *
 * @package Shahana_Theme
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-bg-image">
        <img src="<?php echo shahana_asset('images/hero-bg.jpeg'); ?>" alt="Shahana N M - Best Digital Marketing Strategist in Malappuram Kerala">
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <div class="hero-text">
            <p class="hero-intro">👋 HELLO, I'M</p>
            <h1 class="hero-name">SHAHANA</h1>
            <h2 class="hero-title">BEST DIGITAL MARKETING<br>STRATEGIST IN MALAPPURAM</h2>
            <p class="hero-tagline">I help businesses grow online with proven digital strategies that deliver real results</p>
            <div class="hero-expertise">
                <span>EXPERT IN</span>
                <span class="typing-text" id="typing-text"></span>
                <span class="cursor">|</span>
            </div>
            <div class="hero-buttons">
                <a href="#contact" class="btn btn-primary"><i class="fas fa-rocket"></i> Let's Work Together</a>
                <a href="#services" class="btn btn-secondary"><i class="fas fa-briefcase"></i> View Services</a>
            </div>
            <div class="hero-trust">
                <span><i class="fas fa-check-circle"></i> Free Consultation</span>
                <span><i class="fas fa-check-circle"></i> Results Guaranteed</span>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about" id="about">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">INTRODUCTION</span>
            <h2 class="section-title">HERE IS SOMETHING ABOUT ME!</h2>
        </div>
        <div class="about-content">
            <div class="about-image">
                <div class="image-frame">
                    <img src="<?php echo shahana_asset('images/shana-nm.jpeg'); ?>" alt="Shahana">
                    <div class="frame-decoration"></div>
                </div>
            </div>
            <div class="about-text">
                <p>My name is <strong>Shahana</strong>, and I'm from <strong>Malappuram, Kerala</strong>. I completed my graduation from Calicut University, where I developed a strong foundation in academics and communication. My interest in creativity, technology, and branding led me to explore the growing world of digital marketing and design.</p>
                <p>To enhance my practical skills, I pursued a <strong>Diploma in Digital Marketing and Graphic Designing</strong> from Adsin Learning Hub. During this course, I gained hands-on experience in tools like Adobe Photoshop, Illustrator, Canva, and key digital platforms such as Meta Ads, SEO, and Google tools.</p>
                <p>Today, I'm passionate about helping businesses grow through innovative digital strategies and eye-catching visuals. My goal is to build a successful career as a <strong>Digital Marketer and Graphic Designer</strong>, combining creativity with strategy to deliver impactful results.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services" id="services">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">WHAT I DO</span>
            <h2 class="section-title">MY SERVICES</h2>
            <p class="section-subtitle">Driving online growth through targeted digital strategies!</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-search"></i></div>
                <h3>SEO</h3>
                <p>Search Engine Optimization (SEO) is the process of improving a website's visibility on search engines like Google.</p>
                <div class="service-hover"><i class="fas fa-arrow-right"></i></div>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-share-alt"></i></div>
                <h3>SMM</h3>
                <p>SMM is the use of social media platforms to promote products or services, engage with audience, and build brand awareness.</p>
                <div class="service-hover"><i class="fas fa-arrow-right"></i></div>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-pen-fancy"></i></div>
                <h3>CONTENT CREATION</h3>
                <p>Content creation is the process of developing and sharing ideas through text, images, or videos to inform or engage an audience.</p>
                <div class="service-hover"><i class="fas fa-arrow-right"></i></div>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fas fa-envelope-open-text"></i></div>
                <h3>EMAIL MARKETING</h3>
                <p>Email marketing is a powerful strategy used to send personalized messages to a targeted audience.</p>
                <div class="service-hover"><i class="fas fa-arrow-right"></i></div>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fab fa-meta"></i></div>
                <h3>META ADS</h3>
                <p>Meta Ads are paid promotions on Facebook and Instagram that help businesses reach targeted audiences and boost visibility.</p>
                <div class="service-hover"><i class="fas fa-arrow-right"></i></div>
            </div>
            <div class="service-card">
                <div class="service-icon"><i class="fab fa-wordpress"></i></div>
                <h3>WordPress Development</h3>
                <p>WordPress is a simple and flexible website builder that lets you create and manage websites easily.</p>
                <div class="service-hover"><i class="fas fa-arrow-right"></i></div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Me Section -->
<section class="why-choose-me" id="why-choose-me">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">WHY ME</span>
            <h2 class="section-title">WHY CHOOSE ME AS YOUR DIGITAL MARKETER?</h2>
            <p class="section-subtitle">Partner with someone who truly cares about your business growth</p>
        </div>
        <div class="why-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-bullseye"></i></div>
                <div class="why-number">01</div>
                <h3>Results-Driven Approach</h3>
                <p>I focus on delivering measurable results that directly impact your business growth.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-lightbulb"></i></div>
                <div class="why-number">02</div>
                <h3>Creative & Innovative</h3>
                <p>I bring fresh, creative ideas to every project that capture your audience's attention.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-comments"></i></div>
                <div class="why-number">03</div>
                <h3>Clear Communication</h3>
                <p>I believe in transparent communication with regular updates and reports.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-clock"></i></div>
                <div class="why-number">04</div>
                <h3>Timely Delivery</h3>
                <p>I respect deadlines and deliver quality work on time.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-hand-holding-heart"></i></div>
                <div class="why-number">05</div>
                <h3>Personalized Strategies</h3>
                <p>I create customized marketing strategies tailored to your business needs.</p>
            </div>
            <div class="why-card">
                <div class="why-icon"><i class="fas fa-rupee-sign"></i></div>
                <div class="why-number">06</div>
                <h3>Affordable & Valuable</h3>
                <p>Get premium quality services at competitive prices.</p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects" id="projects">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">PORTFOLIO</span>
            <h2 class="section-title">PROJECTS</h2>
            <p class="section-subtitle">My recent works</p>
        </div>
        <div class="projects-fan-container">
            <div class="projects-fan" id="projectsFan">
                <?php for ($i = 1; $i <= 12; $i++): 
                    $ext = ($i <= 4) ? 'jpeg' : (($i == 9 || $i == 11 || $i == 12) ? 'jpg' : 'png');
                ?>
                <div class="fan-card" data-index="<?php echo $i - 1; ?>">
                    <img src="<?php echo shahana_asset('images/work-' . $i . '.' . $ext); ?>" alt="Project <?php echo $i; ?>">
                    <div class="fan-card-overlay">
                        <span>CLICK TO<br>VIEW</span>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/testimonials'); ?>

<?php get_template_part('template-parts/faq'); ?>

<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>
