document.addEventListener('DOMContentLoaded', () => {
    const animatedElements = document.querySelectorAll('.feature-box, .application-box, .practice-box');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    animatedElements.forEach(element => {
        element.style.transform = 'translateY(20px)';
        observer.observe(element);
    });
});

