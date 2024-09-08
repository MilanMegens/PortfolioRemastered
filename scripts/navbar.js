// Zorg ervoor dat de ScrollToPlugin is ingeladen
gsap.registerPlugin(ScrollToPlugin);

function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('active');
}

document.querySelectorAll('.nav-items a, .desktop-menu a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault(); // Voorkom standaard link gedrag
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            gsap.to(window, {
                duration: 1.5,
                scrollTo: {
                    y: targetElement, 
                    offsetY: 70 // Pas de offset aan indien nodig
                },
                ease: 'power2.inOut'
            });
        }
    });
});
