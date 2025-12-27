<?php
/**
 * Contact Section Template Part
 *
 * @package Shahana_Theme
 */
?>

<!-- Contact Section -->
<section class="contact" id="contact">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">GET IN TOUCH</span>
            <h2 class="section-title">REACH OUT</h2>
            <p class="section-subtitle">Looking for a Digital Marketing Expert in Malappuram? Let's connect! Whether you're seeking expert advice, have questions, or need tailored strategies for your business, I'm here to help you.</p>
        </div>
        <div class="contact-content">
            <div class="contact-info">
                <div class="info-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Location</h3>
                    <p>Malappuram, Kerala, India</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p>02shahananm@gmail.com</p>
                </div>
                <div class="info-card">
                    <i class="fas fa-phone"></i>
                    <h3>Phone</h3>
                    <p>+91 9074826232</p>
                </div>
                <div class="social-links">
                    <a href="https://www.facebook.com/share/1D6QnThkJQ/" target="_blank" rel="noopener noreferrer" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/shahanaa.__.__?igsh=MW1yeGtlZ3JudWY3eQ==" target="_blank" rel="noopener noreferrer" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/shahana-n-m-635aa1256" target="_blank" rel="noopener noreferrer" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://wa.me/message/DAFIY5KFJ5VWK1" target="_blank" class="social-link"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <form class="contact-form" id="contact-form">
                <?php wp_nonce_field('shahana_nonce', 'shahana_contact_nonce'); ?>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="phone" name="phone" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-group">
                    <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-submit">
                    <span>Send Message</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</section>
