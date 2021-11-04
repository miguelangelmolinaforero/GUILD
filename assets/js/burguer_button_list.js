const menu = document.querySelector('.menu');
// console.log(menu);
const burgerButton = document.querySelector('#burger-menu');
// console.log(burgerButton);
const ipad = window.matchMedia('screen and (max-width: 767px)');


ipad.addListener(validation);
if (ipad.matches) {
    burgerButton.addEventListener('click', hideShow)
}

function validation(event) {
    if (event.matches) {
        burgerButton.addEventListener('click', hideShow)
    } else {
        burgerButton.removeEventListener('click', hideShow)
    }
    // console.log(event.matches);

}

function hideShow() {
    if (menu.classList.contains('is-active')) {
        menu.classList.remove('is-active');
    } else {
        menu.classList.add('is-active');
    }
}
//document.querySelector('.menu').classList.add('is-active');