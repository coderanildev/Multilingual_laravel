@extends('frontend.layouts.app')

@section('content')

<section>
  <!-- HERO SECTION -->
<section class="hero-pattern position-relative d-flex align-items-center justify-content-center overflow-hidden" style="min-height: 600px;">
    <!-- Abstract Decoration - FIXED GRADIENT -->
    <div class="position-absolute top-0 start-0 w-100 h-100 csir-gradient-right" style="opacity: 0.9;"></div>
    <div class="position-absolute top-0 end-0 w-1/2 h-100 bg-white opacity-5 skew-x-12 translate-x-20"></div>
    
    <div class="container position-relative z-10">
        <div class="row align-items-center">
            <div class="col-lg-6 text-white space-y-6">
                <!-- Text Slider -->
                <div class="text-slider-container" style="min-height: 300px;">
                    <div class="text-slider">
                        <!-- Slide 1 -->
                        <div class="text-slide active">
                            <div class="d-inline-block px-3 py-1 csir-bg-gold csir-text-blue text-uppercase small fw-bold mb-3 rounded" style="letter-spacing: 0.1em;">
                                Premier Institute
                            </div>
                            <h2 class="display-4 font-serif fw-bold mb-4">
                                Bridging Science  and <span class="csir-text-gold">Society</span>
                            </h2>
                            <p class="lead mb-4 text-light" style="max-width: 500px;">
                                Advancing India's scientific temper through cutting-edge communication strategies and evidence-based policy research.
                            </p>
                            <div class="d-flex flex-wrap gap-4 pt-2">
                                <a href="#journals" class="px-5 py-3 bg-white csir-text-blue fw-semibold rounded shadow-lg hover:bg-gray-100 transition-all duration-300 hover-lift">
                                    Explore Journals
                                </a>
                                <a href="#about" class="px-5 py-3 border border-white text-white fw-semibold rounded hover-fill transition-all duration-300">
                                    Our Vision
                                </a>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="text-slide">
                            <div class="d-inline-block px-3 py-1 csir-bg-gold csir-text-blue text-uppercase small fw-bold mb-3 rounded" style="letter-spacing: 0.1em;">
                                Hindi Pakhwada 2026
                            </div>
                            <h2 class="display-4 font-serif fw-bold mb-4">
                                हिंदी निरीक्षण  <span class="csir-text-gold">2026</span>
                            </h2>
                            <p class="lead mb-4 text-light" style="max-width: 500px;">
                                विज्ञान संचार में हिंदी का प्रयोग बढ़ाने और राष्ट्रीय भाषा को बढ़ावा देने के लिए विशेष पखवाड़ा।
                            </p>
                            <div class="d-flex flex-wrap gap-4 pt-2">
                                <a href="#" class="px-5 py-3 bg-white csir-text-blue fw-semibold rounded shadow-lg hover:bg-gray-100 transition-all duration-300 hover-lift">
                                    जानकारी देखें
                                </a>
                                <a href="#" class="px-5 py-3 border border-white text-white fw-semibold rounded hover-fill transition-all duration-300">
                                    कार्यक्रम विवरण
                                </a>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="text-slide">
                            <div class="d-inline-block px-3 py-1 csir-bg-gold csir-text-blue text-uppercase small fw-bold mb-3 rounded" style="letter-spacing: 0.1em;">
                                Book Publication
                            </div>
                            <h2 class="display-4 font-serif fw-bold mb-4">
                                ज्ञान का प्रसार  <span class="csir-text-gold">पुस्तक प्रकाशन</span>
                            </h2>
                            <p class="lead mb-4 text-light" style="max-width: 500px;">
                                विज्ञान संचार और नीति शोध पर नवीनतम पुस्तकों का प्रकाशन। शोधकर्ताओं के लिए मंच।
                            </p>
                            <div class="d-flex flex-wrap gap-4 pt-2">
                                <a href="#" class="px-5 py-3 bg-white csir-text-blue fw-semibold rounded shadow-lg hover:bg-gray-100 transition-all duration-300 hover-lift">
                                    View Catalogue
                                </a>
                                <a href="#" class="px-5 py-3 border border-white text-white fw-semibold rounded hover-fill transition-all duration-300">
                                    Submit Manuscript
                                </a>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="text-slide">
                            <div class="d-inline-block px-3 py-1 csir-bg-gold csir-text-blue text-uppercase small fw-bold mb-3 rounded" style="letter-spacing: 0.1em;">
                                Vigilance Awareness
                            </div>
                            <h2 class="display-4 font-serif fw-bold mb-4">
                                सतर्कता सप्ताह  <span class="csir-text-gold">2025</span>
                            </h2>
                            <p class="lead mb-4 text-light" style="max-width: 500px;">
                                भ्रष्टाचार मुक्त भारत के निर्माण की दिशा में। पारदर्शिता, जवाबदेही और नैतिक शासन।
                            </p>
                            <div class="d-flex flex-wrap gap-4 pt-2">
                                <a href="#" class="px-5 py-3 bg-white csir-text-blue fw-semibold rounded shadow-lg hover:bg-gray-100 transition-all duration-300 hover-lift">
                                    Pledge Now
                                </a>
                                <a href="#" class="px-5 py-3 border border-white text-white fw-semibold rounded hover-fill transition-all duration-300">
                                    Events Schedule
                                </a>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="text-slide">
                            <div class="d-inline-block px-3 py-1 csir-bg-gold csir-text-blue text-uppercase small fw-bold mb-3 rounded" style="letter-spacing: 0.1em;">
                                Integrity Campaign
                            </div>
                            <h2 class="display-4 font-serif fw-bold mb-4">
                                ईमानदारी का संकल्प <span class="csir-text-gold">जनभागीदारी</span>
                            </h2>
                            <p class="lead mb-4 text-light" style="max-width: 500px;">
                                संस्थागत ईमानदारी को बढ़ावा देने के लिए विशेष कार्यक्रम और जागरूकता अभियान।
                            </p>
                            <div class="d-flex flex-wrap gap-4 pt-2">
                                <a href="#" class="px-5 py-3 bg-white csir-text-blue fw-semibold rounded shadow-lg hover:bg-gray-100 transition-all duration-300 hover-lift">
                                    Participate
                                </a>
                                <a href="#" class="px-5 py-3 border border-white text-white fw-semibold rounded hover-fill transition-all duration-300">
                                    Report Issues
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Text Slider Dots -->
                    <div class="text-slider-dots d-flex justify-content-start mt-4">
                        <button class="slider-dot active" data-slide="0"></button>
                        <button class="slider-dot" data-slide="1"></button>
                        <button class="slider-dot" data-slide="2"></button>
                        <button class="slider-dot" data-slide="3"></button>
                        <button class="slider-dot" data-slide="4"></button>
                    </div>
                </div>
            </div>
            
            <!-- Hero Card / Image Slider - Now visible on all devices -->
            <div class="col-lg-6 mt-5 mt-lg-0 position-relative">
                <div class="position-absolute top-0 start-0 w-100 h-100 csir-bg-gold opacity-20 rounded-lg blur-lg"></div>
                <div class="position-relative bg-white p-2 rounded-lg shadow-4xl rotate-2 hover:rotate-0 transition-all duration-500">
                    <!-- Image Slider -->
                    <div class="image-slider rounded overflow-hidden position-relative" style="height: 320px;">
                        <!-- Slide 1 -->
                        <div class="image-slide active">
                            <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&q=80&w=800" 
                                 alt="Research Lab" 
                                 class="img-fluid w-100 h-100 object-cover opacity-90 hover:scale-105 transition-all duration-700">
                            <div class="position-absolute bottom-0 start-0 w-100 csir-gradient-top p-4">
                                <p class="text-white fw-bold fs-5 mb-0">New Policy Framework 2026</p>
                            </div>
                        </div>
                        
                        <!-- Slide 2 -->
                        <div class="image-slide">
                            <img src="https://www.niscpr.res.in/includes/images/slider/hindi-nirikshan-2026.png" 
                                 alt="Hindi Nirikshan 2026" 
                                 class="img-fluid w-100 h-100 object-cover opacity-90 hover:scale-105 transition-all duration-700">
                            <div class="position-absolute bottom-0 start-0 w-100 csir-gradient-top p-4">
                                <p class="text-white fw-bold fs-5 mb-0">हिंदी निरीक्षण 2026</p>
                            </div>
                        </div>
                        
                        <!-- Slide 3 -->
                        <div class="image-slide">
                            <img src="https://www.niscpr.res.in/includes/images/slider/CSIR-NIScPR-Book-Publication-Programme.png" 
                                 alt="Book Publication Programme" 
                                 class="img-fluid w-100 h-100 object-cover opacity-90 hover:scale-105 transition-all duration-700">
                            <div class="position-absolute bottom-0 start-0 w-100 csir-gradient-top p-4">
                                <p class="text-white fw-bold fs-5 mb-0">Book Publication Programme</p>
                            </div>
                        </div>
                        
                        <!-- Slide 4 -->
                        <div class="image-slide">
                            <img src="https://www.niscpr.res.in/includes/images/slider/vigilance-week-1.png" 
                                 alt="Vigilance Week 2025" 
                                 class="img-fluid w-100 h-100 object-cover opacity-90 hover:scale-105 transition-all duration-700">
                            <div class="position-absolute bottom-0 start-0 w-100 csir-gradient-top p-4">
                                <p class="text-white fw-bold fs-5 mb-0">Vigilance Awareness Week 2025</p>
                            </div>
                        </div>
                        
                        <!-- Slide 5 -->
                        <div class="image-slide">
                            <img src="https://niscpr.res.in/includes/images/slider/vigilance-week-3.png" 
                                 alt="Vigilance Week Activities" 
                                 class="img-fluid w-100 h-100 object-cover opacity-90 hover:scale-105 transition-all duration-700">
                            <div class="position-absolute bottom-0 start-0 w-100 csir-gradient-top p-4">
                                <p class="text-white fw-bold fs-5 mb-0">Integrity Campaign 2025</p>
                            </div>
                        </div>
                        
                        <!-- Image Slider Dots -->
                        <div class="position-absolute bottom-3 start-50 translate-middle-x d-flex gap-2 z-10">
                            <button class="image-slider-dot active" data-slide="0"></button>
                            <button class="image-slider-dot" data-slide="1"></button>
                            <button class="image-slider-dot" data-slide="2"></button>
                            <button class="image-slider-dot" data-slide="3"></button>
                            <button class="image-slider-dot" data-slide="4"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Stats Bar (Absolute Bottom) -->
    <div class="position-absolute bottom-0 w-100 bg-white bg-opacity-10 backdrop-blur border-top border-white-10 d-none d-lg-block">
        <div class="container py-4">
            <div class="row justify-content-around text-white text-center">
                <div class="col-auto stats-bar-item">
                    <p class="display-6 fw-bold font-serif mb-0">18+</p>
                    <p class="text-uppercase small opacity-80" style="letter-spacing: 0.1em;">Research Journals</p>
                </div>
                <div class="col-auto stats-bar-item">
                    <p class="display-6 fw-bold font-serif mb-0">80+</p>
                    <p class="text-uppercase small opacity-80" style="letter-spacing: 0.1em;">Years of Legacy</p>
                </div>
                <div class="col-auto stats-bar-item">
                    <p class="display-6 fw-bold font-serif mb-0">500+</p>
                    <p class="text-uppercase small opacity-80" style="letter-spacing: 0.1em;">Policy Papers</p>
                </div>
                <div class="col-auto">
                    <p class="display-6 fw-bold font-serif mb-0">Global</p>
                    <p class="text-uppercase small opacity-80" style="letter-spacing: 0.1em;">Collaborations</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Slider Styles */
    .text-slider {
        position: relative;
        min-height: 300px;
    }
    
    .text-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.5s ease, visibility 0.5s ease;
    }
    
    .text-slide.active {
        opacity: 1;
        visibility: visible;
    }
    
    .image-slider {
        position: relative;
        overflow: hidden;
    }
    
    .image-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.5s ease, visibility 0.5s ease;
    }
    
    .image-slide.active {
        opacity: 1;
        visibility: visible;
    }
    
    /* Slider Dots */
    .text-slider-dots {
        gap: 10px;
    }
    
    .slider-dot,
    .image-slider-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        border: none;
        background-color: rgba(255, 255, 255, 0.3);
        padding: 0;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .slider-dot.active,
    .image-slider-dot.active {
        background-color: var(--csir-gold);
        transform: scale(1.2);
    }
    
    .slider-dot:hover,
    .image-slider-dot:hover {
        background-color: rgba(197, 160, 89, 0.7);
    }
    
    .image-slider-dot {
        background-color: rgba(0, 0, 0, 0.3);
    }
    
    .image-slider-dot.active {
        background-color: var(--csir-blue);
    }
    
    .image-slider-dot:hover {
        background-color: var(--csir-light);
    }
    
    /* Fade Animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    .text-slide.active,
    .image-slide.active {
        animation: fadeIn 0.8s ease forwards;
    }
</style>

<script>

// Add hover effects for hero card rotation - FIXED
document.addEventListener('DOMContentLoaded', function() {
    // Hero card rotation on hover - FIXED
    const heroCard = document.querySelector('.hero-pattern .rotate-2');
    if (heroCard) {
        heroCard.addEventListener('mouseenter', function() {
            this.style.transform = 'rotate(0deg)';
        });
        heroCard.addEventListener('mouseleave', function() {
            this.style.transform = 'rotate(2deg)';
        });
    }
    
    // Hero image scale on hover - FIXED
    const heroImages = document.querySelectorAll('.hero-pattern .hover\\:scale-105');
    heroImages.forEach(heroImage => {
        if (heroImage) {
            heroImage.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.05)';
            });
            heroImage.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        }
    });
    
    // Video play button scale on hover - FIXED
    const videoButton = document.querySelector('.group-hover\\:scale-110');
    if (videoButton) {
        const container = videoButton.closest('.position-relative');
        if (container) {
            container.addEventListener('mouseenter', function() {
                videoButton.style.transform = 'scale(1.1)';
            });
            container.addEventListener('mouseleave', function() {
                videoButton.style.transform = 'scale(1)';
            });
        }
    }
});





    document.addEventListener('DOMContentLoaded', function() {
        // Slider Elements
        const textSlides = document.querySelectorAll('.text-slide');
        const imageSlides = document.querySelectorAll('.image-slide');
        const textDots = document.querySelectorAll('.slider-dot');
        const imageDots = document.querySelectorAll('.image-slider-dot');
        
        let currentSlide = 0;
        const totalSlides = textSlides.length;
        let slideInterval;
        
        // Function to show slide
        function showSlide(index) {
            // Remove active class from all slides and dots
            textSlides.forEach(slide => slide.classList.remove('active'));
            imageSlides.forEach(slide => slide.classList.remove('active'));
            textDots.forEach(dot => dot.classList.remove('active'));
            imageDots.forEach(dot => dot.classList.remove('active'));
            
            // Add active class to current slide and dots
            textSlides[index].classList.add('active');
            imageSlides[index].classList.add('active');
            textDots[index].classList.add('active');
            imageDots[index].classList.add('active');
            
            currentSlide = index;
        }
        
        // Function for next slide
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }
        
        // Function for previous slide
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }
        
        // Initialize slider
        showSlide(0);
        
        // Auto slide every 3 seconds
        function startAutoSlide() {
            slideInterval = setInterval(nextSlide, 5000);
        }
        
        // Stop auto slide on hover
        function stopAutoSlide() {
            clearInterval(slideInterval);
        }
        
        // Start auto slide
        startAutoSlide();
        
        // Pause on hover
        const heroSection = document.querySelector('.hero-pattern');
        heroSection.addEventListener('mouseenter', stopAutoSlide);
        heroSection.addEventListener('mouseleave', startAutoSlide);
        
        // Dot click events
        textDots.forEach(dot => {
            dot.addEventListener('click', function() {
                const slideIndex = parseInt(this.getAttribute('data-slide'));
                showSlide(slideIndex);
                // Reset timer on manual click
                clearInterval(slideInterval);
                startAutoSlide();
            });
        });
        
        imageDots.forEach(dot => {
            dot.addEventListener('click', function() {
                const slideIndex = parseInt(this.getAttribute('data-slide'));
                showSlide(slideIndex);
                // Reset timer on manual click
                clearInterval(slideInterval);
                startAutoSlide();
            });
        });
        
        // Optional: Add keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                prevSlide();
                clearInterval(slideInterval);
                startAutoSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
                clearInterval(slideInterval);
                startAutoSlide();
            }
        });
    });
</script>







    <!-- TICKER -->
    <div class="csir-bg-gold csir-text-blue overflow-hidden whitespace-nowrap py-2 border-bottom border-gray-200 shadow-inner">
        <div class="animate-ticker px-4 fw-semibold small">
            <span class="mx-4"><i class="fas fa-bell me-2"></i>Admissions Open for Ph.D. (Sciences) - Jan 2026 Session</span>
          
            <span class="mx-4">Call for Papers: Indian Journal of Traditional Knowledge (Special Issue)</span>
      
            <span class="mx-4">Result Declared: Senior Project Associate Walk-in Interview</span>
        
            <span class="mx-4">New Book Release: "Science in Ancient India" available in Bookstore</span>
        </div>
    </div>

    <!-- MAIN CONTENT GRID -->
    <div class="container-fluid py-5">
        <div class="row g-4">
            <!-- LEFT: Director's Message & About -->
            <div class="col-lg-8 space-y-5">
                
                <!-- Director's Message -->
                <!-- Leadership Section -->
    <section>
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <span class="csir-text-gold fw-bold text-uppercase small d-block" style="letter-spacing: 0.1em;">Our Leadership</span>
            <h2 class="h2 font-serif fw-bold csir-text-blue mt-1">Leadership Team</h2>
        </div>
        <a href="#" class="text-muted fw-medium text-decoration-none hover-blue">View All Leadership &rarr;</a>
    </div>
    
    <div class="row g-4">
        <!-- Card 1 - PM Narendra Modi -->
        <div class="col-md-6 col-lg-3">
            <div class="group bg-white rounded-3 shadow-sm border border-gray-100 hover-card position-relative overflow-hidden text-center p-4">
                <div class="position-absolute top-0 start-0 w-100 h-100 csir-bg-blue opacity-5"></div>
                <div class="mx-auto rounded-circle overflow-hidden border-4 border-white shadow-lg mb-3 bg-light" style="width: 120px; height: 120px;">
                    <img src="https://www.niscpr.res.in/includes/images/prime-minister.png" alt="Shri Narendra Modi" class="img-fluid w-100 h-100 object-cover">
                </div>
                <h4 class="fw-bold text-dark mb-1">Shri Narendra Modi</h4>
                <p class="small text-muted mb-2">President, CSIR</p>
                <div class="d-inline-block px-3 py-1 bg-csir-blue-10 csir-text-blue rounded-pill small fw-medium">
                    President
                </div>
                <div class="mt-3 pt-3 border-top border-gray-100">
                    <p class="small text-secondary mb-2">Hon'ble Prime Minister of India</p>
                    <a href="#" class="small csir-text-blue fw-medium text-decoration-none hover-underline d-flex align-items-center justify-content-center">
                        View Profile <i class="fas fa-external-link-alt ms-2 fs-6"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 2 - Dr. Jitendra Singh -->
        <div class="col-md-6 col-lg-3">
            <div class="group bg-white rounded-3 shadow-sm border border-gray-100 hover-card position-relative overflow-hidden text-center p-4">
                <div class="position-absolute top-0 start-0 w-100 h-100 csir-bg-gold opacity-5"></div>
                <div class="mx-auto rounded-circle overflow-hidden border-4 border-white shadow-lg mb-3 bg-light" style="width: 120px; height: 120px;">
                    <img src="https://www.niscpr.res.in/includes/images/vice-president-CSIR.png" alt="Dr. Jitendra Singh" class="img-fluid w-100 h-100 object-cover">
                </div>
                <h4 class="fw-bold text-dark mb-1">Dr. Jitendra Singh</h4>
                <p class="small text-muted mb-2">Vice President, CSIR</p>
                <div class="d-inline-block px-3 py-1 bg-csir-gold-10 csir-text-blue rounded-pill small fw-medium">
                    Vice President
                </div>
                <div class="mt-3 pt-3 border-top border-gray-100">
                    <p class="small text-secondary mb-2">Union Minister of Science & Technology</p>
                    <a href="#" class="small csir-text-blue fw-medium text-decoration-none hover-underline d-flex align-items-center justify-content-center">
                        View Profile <i class="fas fa-external-link-alt ms-2 fs-6"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 3 - Dr. N Kalaiselvi -->
        <div class="col-md-6 col-lg-3">
            <div class="group bg-white rounded-3 shadow-sm border border-gray-100 hover-card position-relative overflow-hidden text-center p-4">
                <div class="position-absolute top-0 start-0 w-100 h-100 csir-bg-blue opacity-5"></div>
                <div class="mx-auto rounded-circle overflow-hidden border-4 border-white shadow-lg mb-3 bg-light" style="width: 120px; height: 120px;">
                    <img src="https://www.niscpr.res.in/includes/images/dg-csir.png" alt="Dr. N Kalaiselvi" class="img-fluid w-100 h-100 object-cover">
                </div>
                <h4 class="fw-bold text-dark mb-1">Dr. N Kalaiselvi</h4>
                <p class="small text-muted mb-2">Director General, CSIR & Secretary DSIR</p>
                <div class="d-inline-block px-3 py-1 bg-csir-blue-10 csir-text-blue rounded-pill small fw-medium">
                    Director General
                </div>
                <div class="mt-3 pt-3 border-top border-gray-100">
                    <p class="small text-secondary mb-2">First Woman DG of CSIR</p>
                    <a href="#" class="small csir-text-blue fw-medium text-decoration-none hover-underline d-flex align-items-center justify-content-center">
                        View Profile <i class="fas fa-external-link-alt ms-2 fs-6"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 4 - Director Geetanjali (Director's Message) -->
        <div class="col-md-6 col-lg-3">
            <div class="group bg-white rounded-3 shadow-sm border border-gray-100 hover-card position-relative overflow-hidden text-center p-4 h-100 d-flex flex-column">
                <div class="position-absolute top-0 start-0 w-100 h-100 csir-bg-gold opacity-5"></div>
                <div class="mx-auto rounded-circle overflow-hidden border-4 border-white shadow-lg mb-3 bg-light flex-shrink-0" style="width: 120px; height: 120px;">
                    <img src="https://www.niscpr.res.in/includes/images/slider/director.png" alt="Director CSIR-NIScPR" class="img-fluid w-100 h-100 object-cover">
                </div>
                <h4 class="fw-bold text-dark mb-1">Prof. Ranjana Aggarwal</h4>
                <p class="small text-muted mb-2">Director, CSIR-NIScPR</p>
                <div class="d-inline-block px-3 py-1 bg-csir-gold-10 csir-text-blue rounded-pill small fw-medium mb-3">
                    Director's Message
                </div>
                <div class="mt-auto pt-3 border-top border-gray-100 flex-grow-1 d-flex flex-column">
                    <p class="small text-secondary mb-3 fst-italic">"Science is not finished until it is communicated."</p>
                    <a href="#" class="small csir-text-blue fw-medium text-decoration-none hover-underline d-flex align-items-center justify-content-center mt-auto">
                        Read Full Message <i class="fas fa-arrow-right ms-2 group-hover:translate-x-1 transition-all"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

                <!-- Knowledge Products (Journals) -->
                <section id="journals">
                    <div class="d-flex justify-content-between align-items-end mb-4">
                        <div>
                            <span class="csir-text-gold fw-bold text-uppercase small d-block" style="letter-spacing: 0.1em;">Our Output</span>
                            <h2 class="h2 font-serif fw-bold csir-text-blue mt-1">Key Journals</h2>
                        </div>
                        <a href="#" class="text-muted fw-medium text-decoration-none hover-blue">View All (18) &rarr;</a>
                    </div>
                    
                    <div class="row g-4">
                        <!-- Journal Card 1 -->
                        <div class="col-md-6">
                            <div class="group bg-white rounded-3 p-4 shadow-sm border border-gray-100 hover-card position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 h-100 csir-bg-blue group-hover:bg-csir-gold transition-all duration-300" style="width: 4px;"></div>
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h4 class="fw-bold text-dark mb-0 group-hover:text-csir-blue transition-all duration-300">IJEB</h4>
                                        <p class="small text-muted mb-0">Indian Journal of Experimental Biology</p>
                                    </div>
                                    <span class="badge bg-blue-50 csir-text-blue">IF: 1.2</span>
                                </div>
                                <p class="small text-secondary mt-3 line-clamp-2">
                                    A leading monthly research journal reporting significant contributions in experimental biology.
                                </p>
                                <div class="mt-4 pt-3 border-top border-gray-50 d-flex justify-content-between align-items-center">
                                    <span class="small text-muted">Monthly</span>
                                    <a href="#" class="small csir-text-blue fw-medium text-decoration-none hover-underline">Access Current Issue</a>
                                </div>
                            </div>
                        </div>

                        <!-- Journal Card 2 -->
                        <div class="col-md-6">
                            <div class="group bg-white rounded-3 p-4 shadow-sm border border-gray-100 hover-card position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 h-100 csir-bg-blue group-hover:bg-csir-gold transition-all duration-300" style="width: 4px;"></div>
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h4 class="fw-bold text-dark mb-0 group-hover:text-csir-blue transition-all duration-300">JSIR</h4>
                                        <p class="small text-muted mb-0">Journal of Scientific & Industrial Research</p>
                                    </div>
                                    <span class="badge bg-blue-50 csir-text-blue">IF: 0.9</span>
                                </div>
                                <p class="small text-secondary mt-3 line-clamp-2">
                                    Covers general science, technology, policy, and management of R&D.
                                </p>
                                <div class="mt-4 pt-3 border-top border-gray-50 d-flex justify-content-between align-items-center">
                                    <span class="small text-muted">Monthly</span>
                                    <a href="#" class="small csir-text-blue fw-medium text-decoration-none hover-underline">Access Current Issue</a>
                                </div>
                            </div>
                        </div>

                        <!-- Journal Card 3 -->
                        <div class="col-md-6">
                            <div class="group bg-white rounded-3 p-4 shadow-sm border border-gray-100 hover-card position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 h-100 csir-bg-blue group-hover:bg-csir-gold transition-all duration-300" style="width: 4px;"></div>
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h4 class="fw-bold text-dark mb-0 group-hover:text-csir-blue transition-all duration-300">IJC - A</h4>
                                        <p class="small text-muted mb-0">Indian Journal of Chemistry (Sec A)</p>
                                    </div>
                                    <span class="badge bg-blue-50 csir-text-blue">IF: 0.7</span>
                                </div>
                                <p class="small text-secondary mt-3 line-clamp-2">
                                    Focusing on Inorganic, Bio-inorganic, Physical, Theoretical & Analytical Chemistry.
                                </p>
                                <div class="mt-4 pt-3 border-top border-gray-50 d-flex justify-content-between align-items-center">
                                    <span class="small text-muted">Monthly</span>
                                    <a href="#" class="small csir-text-blue fw-medium text-decoration-none hover-underline">Access Current Issue</a>
                                </div>
                            </div>
                        </div>

                        <!-- Journal Card 4 -->
                        <div class="col-md-6">
                            <div class="group bg-white rounded-3 p-4 shadow-sm border border-gray-100 hover-card position-relative overflow-hidden">
                                <div class="position-absolute top-0 start-0 h-100 csir-bg-blue group-hover:bg-csir-gold transition-all duration-300" style="width: 4px;"></div>
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <h4 class="fw-bold text-dark mb-0 group-hover:text-csir-blue transition-all duration-300">IJTK</h4>
                                        <p class="small text-muted mb-0">Indian Journal of Traditional Knowledge</p>
                                    </div>
                                    <span class="badge bg-blue-50 csir-text-blue">IF: 1.1</span>
                                </div>
                                <p class="small text-secondary mt-3 line-clamp-2">
                                    Documenting and validating traditional knowledge systems and practices.
                                </p>
                                <div class="mt-4 pt-3 border-top border-gray-50 d-flex justify-content-between align-items-center">
                                    <span class="small text-muted">Quarterly</span>
                                    <a href="#" class="small csir-text-blue fw-medium text-decoration-none hover-underline">Access Current Issue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Mission Areas -->
                <section class="row g-3 mt-4">
                    <div class="col-6 col-md-3">
                        <a href="#" class="group d-flex flex-column align-items-center justify-content-center p-4 bg-white rounded-3 shadow-sm text-center text-decoration-none border border-transparent hover-border-blue transition-all duration-300">
                            <div class="rounded-circle bg-blue-50 csir-text-blue d-flex align-items-center justify-content-center mb-3 group-hover:bg-csir-blue group-hover:text-white transition-all duration-300" style="width: 48px; height: 48px;">
                                <i class="fas fa-bullhorn fs-5"></i>
                            </div>
                            <h4 class="fw-bold small text-dark mb-0">Science Comm.</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="#" class="group d-flex flex-column align-items-center justify-content-center p-4 bg-white rounded-3 shadow-sm text-center text-decoration-none border border-transparent hover-border-blue transition-all duration-300">
                            <div class="rounded-circle bg-blue-50 csir-text-blue d-flex align-items-center justify-content-center mb-3 group-hover:bg-csir-blue group-hover:text-white transition-all duration-300" style="width: 48px; height: 48px;">
                                <i class="fas fa-balance-scale fs-5"></i>
                            </div>
                            <h4 class="fw-bold small text-dark mb-0">Policy Research</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="#" class="group d-flex flex-column align-items-center justify-content-center p-4 bg-white rounded-3 shadow-sm text-center text-decoration-none border border-transparent hover-border-blue transition-all duration-300">
                            <div class="rounded-circle bg-blue-50 csir-text-blue d-flex align-items-center justify-content-center mb-3 group-hover:bg-csir-blue group-hover:text-white transition-all duration-300" style="width: 48px; height: 48px;">
                                <i class="fas fa-book-open fs-5"></i>
                            </div>
                            <h4 class="fw-bold small text-dark mb-0">Digital Library</h4>
                        </a>
                    </div>
                    <div class="col-6 col-md-3">
                        <a href="#" class="group d-flex flex-column align-items-center justify-content-center p-4 bg-white rounded-3 shadow-sm text-center text-decoration-none border border-transparent hover-border-blue transition-all duration-300">
                            <div class="rounded-circle bg-blue-50 csir-text-blue d-flex align-items-center justify-content-center mb-3 group-hover:bg-csir-blue group-hover:text-white transition-all duration-300" style="width: 48px; height: 48px;">
                                <i class="fas fa-users fs-5"></i>
                            </div>
                            <h4 class="fw-bold small text-dark mb-0">Jigyasa</h4>
                        </a>
                    </div>
                </section>
            </div>
            
            <!-- RIGHT: News, Notices & Quick Links -->
            <div class="col-lg-4 space-y-4">
                
                <!-- Notice Board -->
                <div class="bg-white rounded-3 shadow-lg border-top border-csir-gold border-top-4 overflow-hidden">
                    <div class="p-3 bg-light border-bottom d-flex justify-content-between align-items-center">
                        <h3 class="fw-bold csir-text-blue mb-0 d-flex align-items-center">
                            <i class="fas fa-clipboard-list me-2"></i> Notice Board
                        </h3>
                        <span class="badge bg-white text-muted border">Latest</span>
                    </div>
                    <div class="p-3" style="max-height: 400px; overflow-y: auto;">
                        <!-- Notice Item -->
                        <div class="d-flex gap-3 align-items-start pb-3 border-bottom mb-3">
                            <div class="flex-shrink-0 bg-blue-50 rounded text-center p-1" style="width: 48px;">
                                <span class="d-block small fw-bold text-muted">JAN</span>
                                <span class="d-block display-6 fw-bold csir-text-blue lh-1">18</span>
                            </div>
                            <div>
                                <a href="#" class="small fw-medium text-dark text-decoration-none hover-blue d-block mb-1">
                                    Walk-in Interview for Engagement of Project Staff (Advt No. 02/2026)
                                </a>
                                <span class="small text-muted d-block">Recruitment</span>
                            </div>
                        </div>

                        <!-- Notice Item -->
                        <div class="d-flex gap-3 align-items-start pb-3 border-bottom mb-3">
                            <div class="flex-shrink-0 bg-blue-50 rounded text-center p-1" style="width: 48px;">
                                <span class="d-block small fw-bold text-muted">JAN</span>
                                <span class="d-block display-6 fw-bold csir-text-blue lh-1">15</span>
                            </div>
                            <div>
                                <a href="#" class="small fw-medium text-dark text-decoration-none hover-blue d-block mb-1">
                                    Logo Competition Results: 80 Years of CSIR Celebration
                                </a>
                                <span class="small text-muted d-block">Events</span>
                            </div>
                        </div>

                        <!-- Notice Item -->
                        <div class="d-flex gap-3 align-items-start pb-3 border-bottom mb-3">
                            <div class="flex-shrink-0 bg-blue-50 rounded text-center p-1" style="width: 48px;">
                                <span class="d-block small fw-bold text-muted">JAN</span>
                                <span class="d-block display-6 fw-bold csir-text-blue lh-1">10</span>
                            </div>
                            <div>
                                <a href="#" class="small fw-medium text-dark text-decoration-none hover-blue d-block mb-1">
                                    Subscription Rates Revised for 2026 Journals
                                </a>
                                <span class="small text-muted d-block">Notice</span>
                            </div>
                        </div>

                        <!-- Notice Item -->
                        <div class="d-flex gap-3 align-items-start pb-3 mb-3">
                            <div class="flex-shrink-0 bg-blue-50 rounded text-center p-1" style="width: 48px;">
                                <span class="d-block small fw-bold text-muted">DEC</span>
                                <span class="d-block display-6 fw-bold csir-text-blue lh-1">28</span>
                            </div>
                            <div>
                                <a href="#" class="small fw-medium text-dark text-decoration-none hover-blue d-block mb-1">
                                    Distinguished Lecture Series: Dr. R. Mashelkar
                                </a>
                                <span class="small text-muted d-block">Lecture</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 bg-light text-center border-top">
                        <a href="#" class="small fw-bold csir-text-blue text-decoration-none hover-underline">View All Archives</a>
                    </div>
                </div>

                <!-- Featured Video / Media -->
                <div class="bg-white rounded-3 shadow p-3">
                    <h3 class="fw-bold text-dark mb-3 small text-uppercase" style="letter-spacing: 0.1em;">Featured Video</h3>
                    <div class="position-relative rounded-3 overflow-hidden bg-dark mb-2 cursor-pointer" style="padding-top: 56.25%;">
                        <!-- Simulated Video Thumbnail -->
                        <div class="position-absolute top-0 start-0 w-100 h-100 csir-bg-blue opacity-50"></div>
                        <img src="https://images.unsplash.com/photo-1576086213369-97a306d36557?auto=format&fit=crop&q=80&w=400" class="position-absolute top-0 start-0 w-100 h-100 object-cover" style="mix-blend-mode: overlay;">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <div class="rounded-circle bg-white csir-text-blue shadow-lg d-flex align-items-center justify-content-center group-hover:scale-110 transition-all duration-300" style="width: 48px; height: 48px;">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <p class="small fw-medium text-muted mb-0">CSIR-NIScPR Foundation Day Celebrations 2025</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="fw-bold text-dark mb-3 small text-uppercase" style="letter-spacing: 0.1em;">Resources</h3>
                    <div class="d-grid gap-2">
                        <a href="#" class="d-flex justify-content-between align-items-center p-3 bg-white border border-gray-200 rounded-3 text-decoration-none hover-border-blue hover-shadow transition-all duration-300">
                            <span class="small fw-medium text-secondary hover-blue">NOPR Repository</span>
                            <i class="fas fa-external-link-alt small text-muted"></i>
                        </a>
                        <a href="#" class="d-flex justify-content-between align-items-center p-3 bg-white border border-gray-200 rounded-3 text-decoration-none hover-border-blue hover-shadow transition-all duration-300">
                            <span class="small fw-medium text-secondary hover-blue">NKRC Consortium</span>
                            <i class="fas fa-external-link-alt small text-muted"></i>
                        </a>
                        <a href="#" class="d-flex justify-content-between align-items-center p-3 bg-white border border-gray-200 rounded-3 text-decoration-none hover-border-blue hover-shadow transition-all duration-300">
                            <span class="small fw-medium text-secondary hover-blue">Staff Directory</span>
                            <i class="fas fa-address-book small text-muted"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CALL TO ACTION / NEWSLETTER -->

</section>

@endsection
