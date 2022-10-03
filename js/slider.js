const sliders = [
    "./img/homeslider.jpg",
    "./img/slider1.jpg",
    "./img/slider2.jpg",
    "./img/slider3.jpg",
    "./img/slider4.jpg",
    "./img/GOU1.jpg",
    "./img/GOU2.jpg",
    "./img/GOU3.jpg",
    "./img/GOU4.jpg",
    "./img/GOU5.jpg",
    "./img/GOU6.jpg",
    "./img/GOU7.jpg",
    "./img/GOU8.jpg",
]

const slide = document.getElementById('slide');

setInterval(() => {
    const randomPic = sliders[Math.floor(Math.random() * (sliders.length - 1))] 
    console.log(randomPic)
    slide.style.backgroundImage = `url(${randomPic})`;
    slide.style.transition = "all 0.5s";
}, 5000);