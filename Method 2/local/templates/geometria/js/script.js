let logo = document.querySelector('.header__logo');
let menu = document.querySelector('.menu-small');

console.log(logo);

function menuVisible() {
  menu.classList.toggle('menu-small_visible');
}

logo.addEventListener('click', menuVisible);

function TinySlider() {
    tns({
        container: '#slider',
        loop: true,
        nav: true,
        navPosition: 'bottom',
        //items: 1,
        slideBy: 1,
        center: true,
        gutter: 100,
        speed: 600,
        controlsContainer: '#sliderControls',
    })
}

document.addEventListener('DOMContentLoaded', () => {
    new TinySlider()
})



