setTimeout(() => {
    // Add a class to show the second SVG and trigger its animation
    document.getElementById('svg2').classList.add('show');
}, 750); // Match the animation duration of svg1 (8s)

const preloadFrame = document.getElementById('preloadFrame');

setTimeout(() => {
    window.location.href = "start.php";
}, 2000); // 8s for svg1 + 8s for svg2 + 1s delay = 17s total