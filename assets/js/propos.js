document.addEventListener('DOMContentLoaded', function () {
    // Filtrage des membres de l'équipe
    const filterButtons = document.querySelectorAll('.filter-btn');
    const teamCards = document.querySelectorAll('.team-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Active le bouton cliqué
            filterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            const filterValue = button.getAttribute('data-filter');

            teamCards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // Animation pour la timeline
    const timelineItems = document.querySelectorAll('.timeline-item');

    function checkTimelineAnimation() {
        const triggerBottom = window.innerHeight / 5 * 4;

        timelineItems.forEach(item => {
            const itemTop = item.getBoundingClientRect().top;

            if (itemTop < triggerBottom) {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }
        });
    }

    // Initial state
    timelineItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(50px)';
        item.style.transition = 'all 0.5s ease';
    });

    window.addEventListener('scroll', checkTimelineAnimation);
    checkTimelineAnimation(); // Run once on load
});