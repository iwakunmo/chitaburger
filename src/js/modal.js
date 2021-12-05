export function modal(){
    const modalBtn = document.querySelectorAll('.js-mdl__btn');
    const modal = document.querySelectorAll('.js-mdl');
    
    modalBtn.forEach(function (m) {
        m.addEventListener('click', function (e) {
            const target = e.currentTarget;
            target.nextElementSibling.classList.toggle('is-show')
        })
    })

    modal.forEach(function (m) {
        m.addEventListener('click', function (e) {
            const target = e.currentTarget;
            target.classList.remove('is-show')
        })
    })
}
