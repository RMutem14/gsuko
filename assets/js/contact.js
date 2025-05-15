document.addEventListener('DOMContentLoaded', function() {
    // Form submission
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Here you would normally send the form data to your server
            // For this example, we'll just show an alert
            alert('Merci pour votre message! Nous vous contacterons bientôt.');
            contactForm.reset();
        });
    }
});