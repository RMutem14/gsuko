document.addEventListener('DOMContentLoaded', function() {
    // Burger menu toggle
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeMenu = document.querySelector('.close-menu');
    
    burger.addEventListener('click', function() {
        mobileMenu.classList.add('active');
    });
    
    closeMenu.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
    });
    
    // Mobile dropdown toggle
    const mobileServicesDropdown = document.querySelector('.mobile-services-dropdown');
    const mobileServicesLink = document.querySelector('.mobile-services-dropdown > a');
    
    mobileServicesLink.addEventListener('click', function(e) {
        e.preventDefault();
        mobileServicesDropdown.classList.toggle('active');
    });
    
    // Close menu when clicking on links
    const mobileLinks = document.querySelectorAll('.mobile-menu a:not(.mobile-services-dropdown > a)');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
        });
    });
});