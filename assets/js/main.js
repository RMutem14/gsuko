// Animation pour les cartes de service
document.addEventListener('DOMContentLoaded', function () {
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