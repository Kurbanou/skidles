'use strict'

// import { nav as nav } from "../../js/nav.js";
// nav();

const inner = document.querySelector('.news_inner');
const arrowUp = document.querySelector('.up');
const arrowDown = document.querySelector('.down');
const nubmerNews = inner.children.length;
let position = 0;
let isActiveUp = false;
let isActiveDown = false;

setInterval(function(){
    if (isActiveDown) {
        down();
    } else if (isActiveUp){
        up();
    }
},100);

arrowDown.addEventListener('mousedown', () => {
    isActiveDown = true;
});
arrowUp.addEventListener('mousedown', () => {
    isActiveUp = true;
});
arrowDown.addEventListener('mouseup', () => {
    isActiveDown = false;
});
arrowDown.addEventListener('mouseleave', () => {
    isActiveDown = false;
});
arrowUp.addEventListener('mouseup', () => {
    isActiveUp = false;
});
arrowUp.addEventListener('mouseleave', () => {
    isActiveUp = false;
});

arrowDown.addEventListener('click', down);
arrowUp.addEventListener('click', up);

function down() {
    if ((arrowDown.classList.contains('disable')) || (nubmerNews.length === 0)){
        return arrowDown.classList.add('disable');
    } else {
        arrowUp.classList.remove('disable');
        position++;
        inner.style.marginTop = `-${position * 40}` + 'px';
        if(position === nubmerNews -5) arrowDown.classList.add('disable');
        return position;
    }
}

function up() {
    if ((arrowUp.classList.contains('disable')) || (nubmerNews.length === 0)) {
        return arrowUp.classList.add('disable');
    } else {
        arrowDown.classList.remove('disable');
        position--;
        inner.style.marginTop = `-${position * 40}` + 'px';
        if(position === 0) arrowUp.classList.add('disable');
        return position;
    }
}