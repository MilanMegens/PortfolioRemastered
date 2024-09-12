const reviews = document.querySelectorAll('.boxke');
let currentReview = 0;

function showReview(index) {
    // Verberg de huidige review
    reviews[currentReview].style.display = 'none';

    // Toon de nieuwe review
    currentReview = index;
    reviews[currentReview].style.display = 'block';
}

document.getElementById('next').addEventListener('click', () => {
    const nextIndex = (currentReview + 1) % reviews.length;
    showReview(nextIndex);
});

document.getElementById('prev').addEventListener('click', () => {
    const prevIndex = (currentReview - 1 + reviews.length) % reviews.length;
    showReview(prevIndex);
});

// Toon de eerste review bij het laden
showReview(currentReview);

document.getElementById('openOverlay').addEventListener('click', function(e) {
    e.preventDefault(); // Zorg ervoor dat de link niet naar Instagram gaat
    document.getElementById('overlay').style.display = 'block';
});

document.getElementById('closeOverlay').addEventListener('click', function(e) {
    e.preventDefault(); // Voorkom de standaard actie van de link
    document.getElementById('overlay').style.display = 'none'; // Verberg de overlay
});