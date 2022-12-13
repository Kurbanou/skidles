'use strict'




function popupCreate() {

    const popup = document.createElement('div');
    popup.className = 'popups';
    popup.innerHTML = `<div class="popup_inner">
        <div class="x_icon"><img src="http://skidles.by/wp-content/themes/skidlesTwo/assets/img/svg/x_icon.svg" alt="x_icon"></div></div>`;
    const body = document.querySelector('body');
    body.appendChild(popup);
    body.classList.add('locked');
    const fon = document.createElement('span');
    fon.classList = 'fon__popup';
    body.appendChild(fon);
    const xIcon = document.querySelector('.x_icon');
    xIcon.addEventListener('click', clsPopup);
    fon.addEventListener('click', clsPopup);
    setTimeout(() => {popup.classList.add('open');},300 )
    setTimeout(() => {xIcon.classList.add('rotate');},600 )

}

function clsPopup() {
    const popup = document.querySelector('.popups');
    const body = document.querySelector('body');
    const fon = document.querySelector('.fon__popup');
    popup.remove();
    fon.remove();
    body.classList.remove('locked');

}


export{popupCreate,clsPopup}