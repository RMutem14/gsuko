// Slider de témoignages
document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.testimonials-track');
    const cards = document.querySelectorAll('.testimonial-card');
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.querySelector('.slider-arrow.prev');
    const nextBtn = document.querySelector('.slider-arrow.next');
    
    let currentIndex = 0;
    const cardCount = cards.length;
    let cardsPerView = 4;
    
    // Ajuster le nombre de cartes visibles selon la taille de l'écran
    function updateCardsPerView() {
        if (window.innerWidth <= 992) {
            cardsPerView = 3;
        }
        if (window.innerWidth <= 768) {
            cardsPerView = 2;
        }
        if (window.innerWidth <= 576) {
            cardsPerView = 1;
        } else if (window.innerWidth > 1200) {
            cardsPerView = 4;
        }
        
        updateSlider();
    }
    
    // Mettre à jour la position du slider
    function updateSlider() {
        const cardWidth = cards[0].offsetWidth + 30; // Largeur + marge
        const maxIndex = Math.max(cardCount - cardsPerView, 0);
        
        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }
        
        track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        
        // Mettre à jour les dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }
    
    // Bouton suivant
    nextBtn.addEventListener('click', function() {
        const maxIndex = Math.max(cardCount - cardsPerView, 0);
        if (currentIndex < maxIndex) {
            currentIndex++;
            updateSlider();
        }
    });
    
    // Bouton précédent
    prevBtn.addEventListener('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });
    
    // Navigation par dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            currentIndex = index;
            updateSlider();
        });
    });
    
    // Gestion du redimensionnement
    window.addEventListener('resize', function() {
        updateCardsPerView();
    });
    
    // Initialisation
    updateCardsPerView();
    
    // Animation automatique du slider
    let autoSlideInterval = setInterval(() => {
        const maxIndex = Math.max(cardCount - cardsPerView, 0);
        if (currentIndex < maxIndex) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateSlider();
    }, 5000);
    
    // Pause au survol
    const sliderContainer = document.querySelector('.testimonials-container');
    sliderContainer.addEventListener('mouseenter', () => {
        clearInterval(autoSlideInterval);
    });
    
    sliderContainer.addEventListener('mouseleave', () => {
        autoSlideInterval = setInterval(() => {
            const maxIndex = Math.max(cardCount - cardsPerView, 0);
            if (currentIndex < maxIndex) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateSlider();
        }, 5000);
    });
})