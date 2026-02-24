
        // Set Current Date
        const dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        document.getElementById('current-date').textContent = new Date().toLocaleDateString('en-US', dateOptions);
        document.getElementById('last-updated').textContent = new Date().toLocaleDateString('en-US');

        // Font Size Adjustment
        let currentZoom = 100;
        function adjustFont(direction) {
            currentZoom += direction * 10;
            if (currentZoom < 80) currentZoom = 80;
            if (currentZoom > 130) currentZoom = 130;
            document.body.style.zoom = currentZoom + "%";
        }
        function resetFont() {
            currentZoom = 100;
            document.body.style.zoom = "100%";
        }

        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const isOpen = menu.style.transform === 'translateX(0px)' || menu.style.transform === '';
            
            if (isOpen) {
                menu.style.transform = 'translateX(100%)';
            } else {
                menu.style.transform = 'translateX(0px)';
            }
        }

        // Sticky Header Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('main-header');
            if (window.scrollY > 50) {
                header.classList.add('shadow', 'py-1');
                header.classList.remove('py-2');
            } else {
                header.classList.remove('shadow', 'py-1');
                header.classList.add('py-2');
            }
        });

        // Add hover effects for hero card rotation
        document.addEventListener('DOMContentLoaded', function() {
            // Hero card rotation on hover
            const heroCard = document.querySelector('.hero-pattern .rotate-2');
            if (heroCard) {
                heroCard.addEventListener('mouseenter', function() {
                    this.style.transform = 'rotate(0deg)';
                });
                heroCard.addEventListener('mouseleave', function() {
                    this.style.transform = 'rotate(2deg)';
                });
            }
            
            // Hero image scale on hover
            const heroImage = document.querySelector('.hero-pattern .hover\\:scale-105');
            if (heroImage) {
                heroImage.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                });
                heroImage.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            }
            
            // Video play button scale on hover
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
            slideInterval = setInterval(nextSlide, 3000);
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
