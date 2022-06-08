var slider = document.querySelector("[data-slider] .top");
function toggleSlider(params) {
    for (let counter = 0; counter < slider.length; counter++) {
        switch (counter) {
            case 2:
                slider.style.backgroundImage = "url(../images/slide1.png)";
                slider.style.transition = "ease-in 0.5s";
                break;
        
            default:
                break;
        }
        
    }
}