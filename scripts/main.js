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
