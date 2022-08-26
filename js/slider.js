// var slider = document.querySelector("[data-slider] .top");
// function toggleSlider(params) {
//     for (let counter = 0; counter < slider.length; counter++) {
//         switch (counter) {
//             case 2:
//                 slider.style.backgroundImage = "url(../images/slide1.png)";
//                 slider.style.transition = "ease-in 0.5s";
//                 break;
        
//             default:
//                 break;
//         }
        
//     }
// }

const sliders = [
    "./img/homeslider.jpg",
    "./img/slider1.jpg",
    "./img/slider2.jpg",
    "./img/slider3.jpg",
    "./img/slider4.jpg",
    "./img/slider5.jpg",
]

const slide = document.getElementById('slide');

setInterval(() => {
    const randomPic = sliders[Math.floor(Math.random() * (sliders.length - 1))] 
    console.log(randomPic)
    slide.style.backgroundImage = `url(${randomPic})`;
    slide.style.transition = "all 0.4s";
}, 5000);