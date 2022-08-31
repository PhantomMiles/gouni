const sliders = [
    "./img/homeslider.jpg",
    "./img/slider1.jpg",
    "./img/slider2.jpg",
    "./img/slider3.jpg",
    "./img/slider4.jpg",
]

const slide = document.getElementById('slide');

setInterval(() => {
    const randomPic = sliders[Math.floor(Math.random() * (sliders.length - 1))] 
    console.log(randomPic)
    slide.style.backgroundImage = `url(${randomPic})`;
    slide.style.transition = "all 0.4s";
}, 5000);