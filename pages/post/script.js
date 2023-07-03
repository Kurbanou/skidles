'use strict'

import { nav as nav } from "../../assets/js/nav.js";
import { popupCreate } from "../../assets/js/popup.js";

nav();

const content = document.querySelector('.content');

if(content && window.screen.width > 1000){
    const images = content.querySelectorAll('img');
    images.forEach(image => {
        image.addEventListener('click', () => {
            popupCreate();
            const popupInner = document.querySelector('.popup_inner');
            const imageBox = document.createElement('div');
            imageBox.classList = 'imageBox';
            popupInner.appendChild(imageBox);
            imageBox.innerHTML =`${image.outerHTML}`

        })}
    )
}