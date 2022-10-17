'use strict'

export function nav(){

    const burgerMenu = document.querySelector('.menu-toggle'),
          menu = document.querySelector('.main__menu'),
          links = menu.querySelectorAll('a'),
          li = menu.getElementsByTagName('li'),
          footerLinks = document.querySelector('.footer_nav').querySelectorAll('a');


    function burger() {
        document.body.classList.toggle('open');
        for (let i = 0; i < li.length; i++){
            if (document.body.classList.contains('open')) {
                li[i].style.transitionDelay = `${i * 0.1 + 0.65}s`;
                links[i].setAttribute('data-text', links[i].innerHTML.slice(3,-4));
                links.forEach(el => {
                    el.addEventListener('click', burger)
                })
            } else {
                li[i].style.transitionDelay = '0s';
            }
        }
    }

    links.forEach(el =>{
        if (location.href == el.href) {
            el.classList.add('active');
        }
    });

    footerLinks.forEach(el =>{
        if (location.href == el.href) {
            el.classList.add('active');
        }
    });

    burgerMenu.addEventListener('click',burger);

}


