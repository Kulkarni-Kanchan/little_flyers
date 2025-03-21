// Load the animation JSON file and render it
var animation = bodymovin.loadAnimation({
    container: document.getElementById('animation-container'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'Animation.json' // Replace 'animation.json' with the path to your Lottie animation JSON file
});
