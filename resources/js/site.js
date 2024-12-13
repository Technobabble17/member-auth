document.addEventListener('DOMContentLoaded', function () {
    const scrollToTopButton = document.getElementById('scrollToTop');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 400 && window.innerWidth < 800) {
            scrollToTopButton.classList.remove('hidden');
        } else {
            scrollToTopButton.classList.add('hidden');
        }
    });

    scrollToTopButton.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // status (logout) alert timeout
    ['status-alert', 'error-alert', 'success-alert'].forEach(id => {
        const alertElement = document.getElementById(id);
        if (alertElement) {
            const timeout = alertElement.dataset.timeout || 3000;
            setTimeout(() => {
                alertElement.style.transition = "opacity 0.5s ease";
                alertElement.style.opacity = "0";
                setTimeout(() => alertElement.remove(), 500);
            }, timeout);
        }
    });
});