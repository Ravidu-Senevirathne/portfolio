document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        root: null,
        threshold: 0.1,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-float');
                entry.target.style.opacity = '1';
                observer.unobserve(entry.target); // Stop observing once animation is triggered
            }
        });
    }, observerOptions);

    // Select all elements with scroll-animate class
    document.querySelectorAll('.scroll-animate').forEach(element => {
        element.style.opacity = '0';
        observer.observe(element);
    });
});
