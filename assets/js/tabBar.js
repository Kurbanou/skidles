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


    inners[0].innerHTML = svg;

    for (let i = 0; i < menuItems.length; i++) {
        menuItems[i].style.setProperty('--bgColorItem', bgc[i]);
    }

    function clickItem(item, index) {

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