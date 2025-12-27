<?php
/**
 * Shahana Portfolio Theme functions and definitions
 *
 * @package Shahana_Theme
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Define theme constants
 */
define('SHAHANA_THEME_VERSION', '1.0.0');
define('SHAHANA_THEME_DIR', get_template_directory());
define('SHAHANA_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function shahana_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'shahana-theme'),
        'footer'  => esc_html__('Footer Menu', 'shahana-theme'),
    ));
}
add_action('after_setup_theme', 'shahana_theme_setup');

/**
 * Enqueue styles and scripts
 */
function shahana_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // Main Theme Styles
    wp_enqueue_style(
        'shahana-main-style',
        SHAHANA_THEME_URI . '/assets/css/main.css',
        array('google-fonts', 'font-awesome'),
        SHAHANA_THEME_VERSION
    );

    // Theme Stylesheet (for WordPress recognition)
    wp_enqueue_style(
        'shahana-style',
        get_stylesheet_uri(),
        array('shahana-main-style'),
        SHAHANA_THEME_VERSION
    );

    // Main JavaScript
    wp_enqueue_script(
        'shahana-main-script',
        SHAHANA_THEME_URI . '/assets/js/main.js',
        array(),
        SHAHANA_THEME_VERSION,
        true
    );

    // Pass data to JavaScript
    wp_localize_script('shahana-main-script', 'shahanaData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('shahana_nonce'),
        'themeUri' => SHAHANA_THEME_URI,
    ));
}
add_action('wp_enqueue_scripts', 'shahana_enqueue_scripts');

/**
 * Add structured data schema
 */
function shahana_add_schema() {
    if (is_front_page()) {
        ?>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "Shahana N M - Digital Marketing Strategist",
            "description": "Best Digital Marketing Strategist in Malappuram, Kerala. Expert in Meta Ads, SEO, Social Media Marketing, and WordPress Development.",
            "url": "<?php echo esc_url(home_url('/')); ?>",
            "telephone": "+919074826232",
            "email": "02shahananm@gmail.com",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Malappuram",
                "addressRegion": "Kerala",
                "addressCountry": "IN"
            },
            "priceRange": "$$",
            "serviceType": ["Digital Marketing", "SEO", "Social Media Marketing", "Meta Ads", "Content Creation", "WordPress Development"]
        }
        </script>
        <?php
    }
}
add_action('wp_head', 'shahana_add_schema');

/**
 * Handle contact form submission via AJAX
 */
function shahana_handle_contact_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'shahana_nonce')) {
        wp_send_json_error('Security check failed');
    }

    // Sanitize input
    $first_name = sanitize_text_field($_POST['firstName']);
    $last_name = sanitize_text_field($_POST['lastName']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $message = sanitize_textarea_field($_POST['message']);

    // Validate
    if (empty($first_name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields');
    }

    // Prepare email
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . $first_name . ' ' . $last_name;
    $body = "Name: $first_name $last_name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Message:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8', 'Reply-To: ' . $email);

    // Send email
    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success('Message sent successfully!');
    } else {
        wp_send_json_error('Failed to send message. Please try again.');
    }
}
add_action('wp_ajax_shahana_contact', 'shahana_handle_contact_form');
add_action('wp_ajax_nopriv_shahana_contact', 'shahana_handle_contact_form');

/**
 * Custom image sizes
 */
function shahana_custom_image_sizes() {
    add_image_size('project-thumb', 400, 500, true);
    add_image_size('testimonial-avatar', 100, 100, true);
}
add_action('after_setup_theme', 'shahana_custom_image_sizes');

/**
 * Get theme asset URL helper
 */
function shahana_asset($path) {
    return SHAHANA_THEME_URI . '/assets/' . $path;
}
