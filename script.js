// ==========================================
// Navbar Scroll Effect
// ==========================================
const navbar = document.getElementById('navbar');
const backToTop = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
        backToTop.classList.add('visible');
    } else {
        navbar.classList.remove('scrolled');
        backToTop.classList.remove('visible');
    }
});

// ==========================================
// Mobile Navigation Toggle
// ==========================================
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');
const navLinks = document.querySelectorAll('.nav-link');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
});

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
    });
});

// ==========================================
// Typing Effect
// ==========================================
const typingText = document.getElementById('typing-text');
const words = ['Meta Ads', 'SEO', 'Social Media Marketing', 'Content Creation', 'Email Marketing', 'Web Development'];
let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;
let typingSpeed = 100;

function typeEffect() {
    const currentWord = words[wordIndex];

    if (isDeleting) {
        typingText.textContent = currentWord.substring(0, charIndex - 1);
        charIndex--;
        typingSpeed = 50;
    } else {
        typingText.textContent = currentWord.substring(0, charIndex + 1);
        charIndex++;
        typingSpeed = 100;
    }

    if (!isDeleting && charIndex === currentWord.length) {
        isDeleting = true;
        typingSpeed = 2000; // Pause at end
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        wordIndex = (wordIndex + 1) % words.length;
        typingSpeed = 500; // Pause before next word
    }

    setTimeout(typeEffect, typingSpeed);
}

// Start typing effect
setTimeout(typeEffect, 1500);

// ==========================================
// FAQ Accordion
// ==========================================
const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');

    question.addEventListener('click', () => {
        const isActive = item.classList.contains('active');

        // Close all items
        faqItems.forEach(faq => faq.classList.remove('active'));

        // Open clicked item if it wasn't active
        if (!isActive) {
            item.classList.add('active');
        }
    });
});

// ==========================================
// Smooth Scroll for Navigation Links
// ==========================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// ==========================================
// Back to Top Button
// ==========================================
backToTop.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// ==========================================
// Counter Animation
// ==========================================
const statNumbers = document.querySelectorAll('.stat-number');
let countersStarted = false;

function animateCounters() {
    statNumbers.forEach(stat => {
        const target = parseInt(stat.getAttribute('data-count'));
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                stat.textContent = Math.floor(current);
                requestAnimationFrame(updateCounter);
            } else {
                stat.textContent = target;
            }
        };

        updateCounter();
    });
}

// ==========================================
// Intersection Observer for Animations
// ==========================================
const observerOptions = {
    threshold: 0.2,
    rootMargin: '0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-in');

            // Start counter animation when about section is visible
            if (entry.target.id === 'about' && !countersStarted) {
                countersStarted = true;
                animateCounters();
            }
        }
    });
}, observerOptions);

// Observe all sections
document.querySelectorAll('section').forEach(section => {
    observer.observe(section);
});

// ==========================================
// Form Handling
// ==========================================
const contactForm = document.getElementById('contact-form');

contactForm.addEventListener('submit', function (e) {
    e.preventDefault();

    // Get form data
    const formData = new FormData(this);
    const data = Object.fromEntries(formData);

    // Simple validation
    if (!data.firstName || !data.email || !data.message) {
        showNotification('Please fill in all required fields', 'error');
        return;
    }

    // Simulate form submission
    const submitBtn = this.querySelector('.btn-submit');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    submitBtn.disabled = true;

    setTimeout(() => {
        showNotification('Thank you! Your message has been sent successfully.', 'success');
        contactForm.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 2000);
});

// ==========================================
// Notification System
// ==========================================
function showNotification(message, type) {
    // Remove existing notification
    const existing = document.querySelector('.notification');
    if (existing) existing.remove();

    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerHTML = `
        <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'}"></i>
        <span>${message}</span>
    `;

    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 30px;
        background: ${type === 'success' ? 'linear-gradient(135deg, #10b981, #059669)' : 'linear-gradient(135deg, #ef4444, #dc2626)'};
        color: white;
        padding: 15px 25px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 0.95rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        z-index: 10000;
        animation: slideIn 0.4s ease forwards;
    `;

    document.body.appendChild(notification);

    // Remove after 4 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOut 0.4s ease forwards';
        setTimeout(() => notification.remove(), 400);
    }, 4000);
}

// Add notification animation styles
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateX(100px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    @keyframes slideOut {
        from {
            opacity: 1;
            transform: translateX(0);
        }
        to {
            opacity: 0;
            transform: translateX(100px);
        }
    }
    
    section {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }
    
    section.animate-in {
        opacity: 1;
        transform: translateY(0);
    }
    
    .hero {
        opacity: 1 !important;
        transform: none !important;
    }
`;
document.head.appendChild(style);

// ==========================================
// Active Navigation Link Highlight
// ==========================================
const sections = document.querySelectorAll('section[id]');

window.addEventListener('scroll', () => {
    let current = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;

        if (scrollY >= sectionTop - 200) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// ==========================================
// Parallax Effect for Hero
// ==========================================
const heroImage = document.querySelector('.hero-image img');

window.addEventListener('scroll', () => {
    if (heroImage && window.innerWidth > 992) {
        const scrolled = window.scrollY;
        heroImage.style.transform = `translateY(${scrolled * 0.1}px)`;
    }
});

// ==========================================
// Service Cards Hover Effect
// ==========================================
const serviceCards = document.querySelectorAll('.service-card');

serviceCards.forEach(card => {
    card.addEventListener('mouseenter', function () {
        this.style.setProperty('--hover', '1');
    });

    card.addEventListener('mouseleave', function () {
        this.style.setProperty('--hover', '0');
    });
});

// ==========================================
// Loading Animation
// ==========================================
window.addEventListener('load', () => {
    document.body.style.overflow = 'hidden';

    setTimeout(() => {
        document.body.style.overflow = '';
    }, 500);
});

console.log('🚀 Portfolio website loaded successfully!');

// ==========================================
// Projects Slider
// ==========================================
const sliderTrack = document.getElementById('sliderTrack');
const sliderPrev = document.getElementById('sliderPrev');
const sliderNext = document.getElementById('sliderNext');
const sliderDots = document.getElementById('sliderDots');
const slides = document.querySelectorAll('.slide');

let currentSlide = 0;
let slidesPerView = 3;
let autoSlideInterval;

// Calculate slides per view based on screen width
function updateSlidesPerView() {
    if (window.innerWidth <= 576) {
        slidesPerView = 1;
    } else if (window.innerWidth <= 992) {
        slidesPerView = 2;
    } else {
        slidesPerView = 3;
    }
}

// Get total number of slide groups
function getTotalGroups() {
    return Math.ceil(slides.length / slidesPerView);
}

// Create dots
function createDots() {
    sliderDots.innerHTML = '';
    const totalGroups = getTotalGroups();

    for (let i = 0; i < totalGroups; i++) {
        const dot = document.createElement('div');
        dot.classList.add('slider-dot');
        if (i === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(i));
        sliderDots.appendChild(dot);
    }
}

// Update dots
function updateDots() {
    const dots = sliderDots.querySelectorAll('.slider-dot');
    const currentGroup = Math.floor(currentSlide / slidesPerView);

    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentGroup);
    });
}

// Go to specific slide
function goToSlide(groupIndex) {
    currentSlide = groupIndex * slidesPerView;

    // Make sure we don't go past the last slide
    const maxSlide = slides.length - slidesPerView;
    if (currentSlide > maxSlide) {
        currentSlide = maxSlide;
    }
    if (currentSlide < 0) {
        currentSlide = 0;
    }

    updateSlider();
}

// Update slider position
function updateSlider() {
    const slideWidth = 100 / slidesPerView;
    const offset = currentSlide * slideWidth;
    sliderTrack.style.transform = `translateX(-${offset}%)`;

    // Update slide widths
    slides.forEach(slide => {
        slide.style.minWidth = `${slideWidth}%`;
    });

    updateDots();
    updateArrows();
}

// Update arrow states
function updateArrows() {
    const maxSlide = slides.length - slidesPerView;
    sliderPrev.disabled = currentSlide <= 0;
    sliderNext.disabled = currentSlide >= maxSlide;
}

// Next slide
function nextSlide() {
    const maxSlide = slides.length - slidesPerView;
    if (currentSlide < maxSlide) {
        currentSlide += slidesPerView;
        if (currentSlide > maxSlide) {
            currentSlide = maxSlide;
        }
        updateSlider();
    }
}

// Previous slide
function prevSlide() {
    if (currentSlide > 0) {
        currentSlide -= slidesPerView;
        if (currentSlide < 0) {
            currentSlide = 0;
        }
        updateSlider();
    }
}

// Auto slide
function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        const maxSlide = slides.length - slidesPerView;
        if (currentSlide >= maxSlide) {
            currentSlide = 0;
        } else {
            currentSlide += slidesPerView;
            if (currentSlide > maxSlide) {
                currentSlide = maxSlide;
            }
        }
        updateSlider();
    }, 5000);
}

function stopAutoSlide() {
    clearInterval(autoSlideInterval);
}

// Event listeners
if (sliderPrev && sliderNext) {
    sliderPrev.addEventListener('click', () => {
        prevSlide();
        stopAutoSlide();
        startAutoSlide();
    });

    sliderNext.addEventListener('click', () => {
        nextSlide();
        stopAutoSlide();
        startAutoSlide();
    });
}

// Touch/Swipe support
let touchStartX = 0;
let touchEndX = 0;

const projectsSlider = document.getElementById('projectsSlider');

if (projectsSlider) {
    projectsSlider.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        stopAutoSlide();
    }, { passive: true });

    projectsSlider.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
        startAutoSlide();
    }, { passive: true });
}

function handleSwipe() {
    const swipeThreshold = 50;
    const diff = touchStartX - touchEndX;

    if (diff > swipeThreshold) {
        nextSlide();
    } else if (diff < -swipeThreshold) {
        prevSlide();
    }
}

// Keyboard navigation
document.addEventListener('keydown', (e) => {
    const projectsSection = document.getElementById('projects');
    const rect = projectsSection.getBoundingClientRect();
    const isInView = rect.top < window.innerHeight && rect.bottom > 0;

    if (isInView) {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            stopAutoSlide();
            startAutoSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            stopAutoSlide();
            startAutoSlide();
        }
    }
});

// Resize handler
let resizeTimeout;
window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
        updateSlidesPerView();
        createDots();
        currentSlide = 0;
        updateSlider();
    }, 250);
});

// Initialize slider
if (sliderTrack && slides.length > 0) {
    updateSlidesPerView();
    createDots();
    updateSlider();
    startAutoSlide();

    // Pause on hover
    projectsSlider.addEventListener('mouseenter', stopAutoSlide);
    projectsSlider.addEventListener('mouseleave', startAutoSlide);
}

// ==========================================
// Custom Cursor
// ==========================================
const cursor = document.getElementById('cursor');
const cursorFollower = document.getElementById('cursor-follower');

// Check if we're on a touch device
const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;

if (cursor && cursorFollower && !isTouchDevice) {
    let mouseX = 0;
    let mouseY = 0;
    let cursorX = 0;
    let cursorY = 0;
    let followerX = 0;
    let followerY = 0;

    // Update mouse position
    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    // Smooth cursor animation
    function animateCursor() {
        // Main cursor - faster follow
        cursorX += (mouseX - cursorX) * 0.2;
        cursorY += (mouseY - cursorY) * 0.2;
        cursor.style.left = cursorX + 'px';
        cursor.style.top = cursorY + 'px';

        // Follower - slower follow for nice trailing effect
        followerX += (mouseX - followerX) * 0.1;
        followerY += (mouseY - followerY) * 0.1;
        cursorFollower.style.left = followerX + 'px';
        cursorFollower.style.top = followerY + 'px';

        requestAnimationFrame(animateCursor);
    }

    animateCursor();

    // Hover effects for interactive elements
    const interactiveElements = document.querySelectorAll('a, button, .btn, .nav-link, .social-link, .service-card, .project-card, .faq-question, .slider-arrow, .slider-dot, input, textarea');

    interactiveElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            cursor.classList.add('hover');
            cursorFollower.classList.add('hover');
        });

        el.addEventListener('mouseleave', () => {
            cursor.classList.remove('hover');
            cursorFollower.classList.remove('hover');
        });
    });

    // Click effect
    document.addEventListener('mousedown', () => {
        cursor.classList.add('click');
        cursorFollower.classList.add('click');
    });

    document.addEventListener('mouseup', () => {
        cursor.classList.remove('click');
        cursorFollower.classList.remove('click');
    });

    // Hide cursor when leaving window
    document.addEventListener('mouseleave', () => {
        cursor.style.opacity = '0';
        cursorFollower.style.opacity = '0';
    });

    document.addEventListener('mouseenter', () => {
        cursor.style.opacity = '1';
        cursorFollower.style.opacity = '1';
    });
}

console.log('✨ Custom cursor initialized!');
