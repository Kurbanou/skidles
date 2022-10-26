'use strict'

import { nav as nav } from "../../js/nav.js";


const inner = document.querySelector('.news_inner');
const arrowUp = document.querySelector('.up');
const arrowDown = document.querySelector('.down');
const nubmerNews = inner.children.length;
let position = 0;

arrowDown.addEventListener('click', down);
arrowUp.addEventListener('click', up);
nav();

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