<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary SEO Meta Tags -->
    <meta name="description" content="Looking to grow your business online? Shahana N M is the best Digital Marketing Strategist in Malappuram, Kerala. Expert in Meta Ads, SEO, Social Media Marketing, Content Creation & WordPress Development.">
    <meta name="keywords" content="Digital Marketing Strategist Malappuram, Best Digital Marketer Kerala, SEO Expert Malappuram, Meta Ads Specialist, Social Media Marketing Kerala">
    <meta name="author" content="Shahana N M">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:title" content="Shahana N M | Best Digital Marketing Strategist in Malappuram">
    <meta property="og:description" content="Transform your business with expert Digital Marketing services. Specialized in Meta Ads, SEO, SMM & Content Creation.">
    <meta property="og:image" content="<?php echo shahana_asset('images/shana-nm.jpeg'); ?>">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="twitter:title" content="Shahana N M | Best Digital Marketing Strategist in Malappuram">
    <meta property="twitter:description" content="Transform your business with expert Digital Marketing services.">
    
    <!-- Geo Tags -->
    <meta name="geo.region" content="IN-KL">
    <meta name="geo.placename" content="Malappuram">
    <meta name="geo.position" content="11.0509;76.0711">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Custom Cursor -->
<div class="cursor" id="cursor"></div>
<div class="cursor-follower" id="cursor-follower"></div>

<!-- Navigation -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <?php 
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo 'SHAHANA';
            }
            ?>
        </a>
        <div class="nav-menu" id="nav-menu">
            <a href="#about" class="nav-link">ABOUT</a>
            <a href="#services" class="nav-link">SERVICES</a>
            <a href="#projects" class="nav-link">PORTFOLIO</a>
            <a href="#testimonial" class="nav-link">REVIEWS</a>
            <a href="#faq" class="nav-link">FAQ</a>
            <a href="#contact" class="nav-link btn-nav">HIRE ME</a>
        </div>
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>
