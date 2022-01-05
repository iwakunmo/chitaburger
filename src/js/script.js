
// モーダル

export function modal() {
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

//ヘッダーの文字色

export function headerColor() {
    const mv = document.querySelector('.js-mv');
    
    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0
    };
    
    const observer = new IntersectionObserver(changeColor, options);
    observer.observe(mv);
    
    function changeColor(entries) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                const header = document.querySelector('header');
                header.classList.add('is-change');
            } else {
                header.classList.remove('is-change');
            }
        })
    }
}

//ハンバーガーメニュー

export function hamburgerMenu() {
    let hamburger = document.querySelector('.hamburger');
    let headerMenu = document.querySelector('.header__menu');
    hamburger.addEventListener('click', function () {
        hamburger.classList.toggle('is-open');
        headerMenu.classList.toggle('is-open');
    })
}

//メディアクエリ固定

export function fixMediaQuery() {
    !(function () {
        const viewport = document.querySelector('meta[name="viewport"]');
        function switchViewport() {
        const value =
            window.outerWidth > 400
            ? 'width=device-width,initial-scale=1'
            : 'width=400';
        if (viewport.getAttribute('content') !== value) {
            viewport.setAttribute('content', value);
        }
    }
    addEventListener('resize', switchViewport, false);
    switchViewport();
    })();
}