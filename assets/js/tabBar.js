// Designed by:  Mauricio Bucardo
// Original image:
// https://dribbble.com/shots/5619509-Animated-Tab-Bar

"use strict";
import { svg as svg} from "../../assets/js/svgLogo.js";
export function tabBar() {
    const body = document.body;
    const menu = body.querySelector(".menu__inner");
    const menuItems = menu.querySelectorAll(".menu__item");
    const menuBorder = menu.querySelector(".menu__border");
    const inners = document.querySelectorAll('.intro__inner_item');
    let activeItem = menu.querySelector(".active");
    const bgc = ['#F9804B','#D31414','#F9B04B','#3871A1','#4B9200'];
    const intro = document.querySelector('.intro');
    const bg = [
        'linear-gradient( rgba(253, 253, 255, 0.52) , rgba(253, 253, 255, 0.52)),linear-gradient( rgba(253, 193, 170, .8) , rgba(254, 205, 153, .8)), url(../../assets/img/jpg/intro/1.jpg) center center no-repeat',
        'linear-gradient( rgba(253, 253, 255, 0.52) , rgba(253, 253, 255, 0.52)),  url(../../assets/img/jpg/intro/2.jpg) center center no-repeat',
        'linear-gradient( rgba(253, 253, 255, 0.52) , rgba(253, 253, 255, 0.52)), url(../../assets/img/jpg/intro/3.jpg) top left no-repeat',
        'linear-gradient( rgba(253, 253, 255, 0.52) , rgba(253, 253, 255, 0.52)),  url(../../assets/img/jpg/intro/4.jpg) center center no-repeat',
        'linear-gradient( rgba(253, 253, 255, 0.52) , rgba(253, 253, 255, 0.52)),  url(../../assets/img/jpg/intro/5.jpg) center center no-repeat',
    ];


    inners[0].innerHTML = svg;

    for (let i = 0; i < menuItems.length; i++) {
        menuItems[i].style.setProperty('--bgColorItem', bgc[i]);
    }

    function clickItem(item, index) {
        const intro = document.querySelector('.intro');



        intro.style.background = bg[index];

        intro.style.backgroundSize = 'cover';

        if (index === 0) {
            inners[0].innerHTML = svg;
        }

        menu.style.removeProperty("--timeOut");

        if (activeItem == item) return;

        if (activeItem) {
            const li = intro.querySelectorAll('li');
            if (li) {
                li.forEach(el => el.style.transitionDelay = '0s')
            }


            activeItem.classList.remove("active");
            inners.forEach(el =>  {
                el.classList.remove('visible');
            });
        }

        item.classList.add("active");

        activeItem = item;
        offsetMenuBorder(activeItem, menuBorder);
        inners[index].classList.add('visible');
        const li = inners[index].querySelectorAll('li');

        if (li) {
            for (let i = 0; i < li.length; i++){
                li[i].style.transitionDelay = `${i * 0.1 + 0.65}s`;
            }
        }

    }

    function offsetMenuBorder(element, menuBorder) {
        const offsetActiveItem = element.getBoundingClientRect();
        const left =
            Math.floor(
            offsetActiveItem.left -
                menu.offsetLeft -
                (menuBorder.offsetWidth - offsetActiveItem.width) / 2
            ) + "px";
        menuBorder.style.transform = `translate3d(${left}, 0 , 0)`;
    }

    offsetMenuBorder(activeItem, menuBorder);

    menuItems.forEach((item, index) => {
        item.addEventListener("click", () => clickItem(item, index));
    });

    window.addEventListener("resize", () => {
        offsetMenuBorder(activeItem, menuBorder);
        menu.style.setProperty("--timeOut", "none");
    });
}