export function hamburgerMenu() {
    let hamburger = document.querySelector('.hamburger');
    let headerMenu = document.querySelector('.header__menu');
    hamburger.addEventListener('click', function () {
        hamburger.classList.toggle('is-open');
        headerMenu.classList.toggle('is-open');
    })
}