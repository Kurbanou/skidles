'use strict'

export function nav(){

    const burgerMenu = document.querySelector('.menu-toggle'),
          menu = document.querySelector('.main__menu'),
          links = menu.querySelectorAll('a'),
          li = menu.getElementsByTagName('li');

    function burger() {
        document.body.classList.toggle('open');
        for (let i = 0; i < li.length; i++){
            if (document.body.classList.contains('open')) {
                li[i].style.transitionDelay = `${i * 0.1 + 0.65}s`;
            } else {
                li[i].style.transitionDelay = '0s';
            }
        }
    }


    /*для добавления атрибута и стилизации https://codepen.io/hexagoncircle/pen/OMJeja */
    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener('click',burger);
        links[i].setAttribute('data-text', links[i].innerHTML);
    }



    links.forEach(el =>{
        if (location.href == el.href) {
            el.classList.add('active');
        }
    });

    burgerMenu.addEventListener('click',burger);
}


