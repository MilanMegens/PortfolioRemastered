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

// Functie om de pagina naar boven te scrollen
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Functie om te controleren of we niet op de homepage zijn
function checkIfNotHome() {
    const scrollToTopButton = document.getElementById('scrollToTop');

    // Controleren of we niet op de homepage zijn
    if (window.location.pathname !== '/') {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) { // Toon knop als er meer dan 200px is gescrold
                scrollToTopButton.style.display = 'flex';
            } else {
                scrollToTopButton.style.display = 'none';
            }
        });
    } else {
        scrollToTopButton.style.display = 'none'; // Verberg knop op de homepage
    }
}

// Roep de functie aan zodra de pagina is geladen
window.onload = checkIfNotHome;