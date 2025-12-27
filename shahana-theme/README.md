# Shahana Portfolio - WordPress Theme

A modern, dark-themed portfolio WordPress theme for Digital Marketing Strategist.

## Features

- ✨ Glassmorphism navbar effect
- 🎴 Fan-style project gallery with lightbox
- 📱 Fully responsive design
- 🎯 SEO optimized
- ⚡ Fast loading
- 💬 Testimonial slider
- ❓ FAQ accordion
- 📧 Contact form with AJAX submission

## Installation

### Method 1: Upload via WordPress Admin

1. **Zip the theme folder:**
   - Select the entire `shahana-theme` folder
   - Right-click and create a ZIP file

2. **Upload to WordPress:**
   - Go to WordPress Admin → Appearance → Themes
   - Click "Add New" → "Upload Theme"
   - Choose the ZIP file and click "Install Now"
   - Click "Activate"

### Method 2: FTP/File Manager Upload

1. **Upload theme folder:**
   - Connect to your server via FTP or cPanel File Manager
   - Navigate to `wp-content/themes/`
   - Upload the entire `shahana-theme` folder

2. **Activate theme:**
   - Go to WordPress Admin → Appearance → Themes
   - Find "Shahana Portfolio" and click "Activate"

## Post-Installation Setup

### 1. Set Homepage

1. Go to Settings → Reading
2. Select "A static page" for homepage display
3. Create a new page (e.g., "Home") and select it as the homepage
4. Click "Save Changes"

### 2. Configure Menus (Optional)

1. Go to Appearance → Menus
2. Create a new menu for the primary location
3. Add custom links for section anchors:
   - About: `#about`
   - Services: `#services`
   - Portfolio: `#projects`
   - Reviews: `#testimonial`
   - FAQ: `#faq`
   - Contact: `#contact`

### 3. Set Custom Logo (Optional)

1. Go to Appearance → Customize
2. Click on "Site Identity"
3. Upload your logo image
4. Publish changes

## Theme Structure

```
shahana-theme/
├── assets/
│   ├── css/
│   │   └── main.css          # Main stylesheet
│   ├── js/
│   │   └── main.js           # Main JavaScript
│   └── images/               # Theme images
├── template-parts/
│   ├── testimonials.php      # Testimonials section
│   ├── faq.php               # FAQ section
│   └── contact.php           # Contact section
├── style.css                 # Theme header
├── functions.php             # Theme functions
├── header.php                # Header template
├── footer.php                # Footer template
├── front-page.php            # Homepage template
└── index.php                 # Fallback template
```

## Customization

### Changing Content

Most content is hardcoded in the template files. To modify:

1. **About Section:** Edit `front-page.php`
2. **Services:** Edit `front-page.php`
3. **Projects:** Add images to `assets/images/` and update `front-page.php`
4. **Testimonials:** Edit `template-parts/testimonials.php`
5. **FAQ:** Edit `template-parts/faq.php`
6. **Contact Info:** Edit `template-parts/contact.php`

### Changing Colors

Edit `assets/css/main.css` and modify the CSS variables at the top:

```css
:root {
    --primary-color: #c9a962;
    --bg-dark: #0a0a0a;
    /* ... other variables */
}
```

## Requirements

- WordPress 5.0+
- PHP 7.4+
- Modern browser with JavaScript enabled

## Support

For questions or support, contact:
- Email: 02shahananm@gmail.com
- Website: https://shahananm.com

## License

GNU General Public License v2 or later

---

Made with ❤️ by Shahana N M
