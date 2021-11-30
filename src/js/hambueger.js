export function hamburgerMenu() {
    let hamburger = document.querySelector('.hamburger');
    hamburger.addEventListener('click', function () {
        hamburger.classList.toggle('is-open');
    })
}