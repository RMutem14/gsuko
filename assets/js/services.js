// Animation pour les cartes de service
document.addEventListener('DOMContentLoaded', function () {
    const serviceCards = document.querySelectorAll('.service-card');
    const processSteps = document.querySelectorAll('.process-step');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    serviceCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
        observer.observe(card);
    });

    processSteps.forEach((step, index) => {
        step.style.opacity = '0';
        step.style.transform = 'translateX(-20px)';
        step.style.transition = `opacity 0.5s ease ${index * 0.2}s, transform 0.5s ease ${index * 0.2}s`;
        observer.observe(step);
    });

    // Menu mobile
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const overlay = document.querySelector('.overlay');
    const closeMenu = document.querySelector('.close-menu');

    burger.addEventListener('click', function () {
        mobileMenu.classList.add('active');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });

    closeMenu.addEventListener('click', function () {
        mobileMenu.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    });

    overlay.addEventListener('click', function () {
        mobileMenu.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    });

    // Services dropdown in mobile menu
    const mobileServices = document.querySelector('.mobile-menu .services-dropdown');
    if (mobileServices) {
        mobileServices.addEventListener('click', function (e) {
            if (e.target.tagName === 'A') {
                e.preventDefault();
                this.classList.toggle('active');
            }
        });
    }
});