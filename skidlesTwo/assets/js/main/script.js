'use strict'

import { nav as nav } from "../../js/nav.js";
import { tabBar as tabBar } from "../../js/tabBar.js";
import { clsPopup, popupCreate } from "../../js/popup.js";


nav();
tabBar();




function siteInfo(){
    popupCreate();
    const popupInner = document.querySelector('.popup_inner');
    const popupInfo =document.createElement('div');
    popupInfo.classList = 'popupInfo';
    popupInfo.innerHTML = `<div class="popupInfo">
                                <div class="descr">
                                    <p class="subtitle">В разработке!</p>
                                    <p>Наш сайт в разработке, но мы готовы к работе! Мы готовим для вас что-то удивительное и захватывающее.</p>
                                    <button class="button cls">Перейти на сайт</button>
                                    <div class="social">
                                        <div class="icons">
                                            <a href="https://www.instagram.com/skidles_1/" target="_blank">
                                                <img src="http://skidles.by/wp-content/themes/skidlesTwo/assets/img/svg/instagram.svg" width="16px" alt="icon">
                                            </a>
                                            <a href="https://www.instagram.com/skidles_1/" target="_blank">
                                                
                                            </a>
                                        </div>
                                        <div class="icons">
                                            <a href="https://t.me/skidles_by" target="_blank">
                                                <img src="http://skidles.by/wp-content/themes/skidlesTwo/assets/img/svg/telegram.svg"  width="16px" alt="icon">
                                            </a>
                                            <a href="https://t.me/skidles_by" target="_blank">
                                                
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="img">
                                    <img src="http://skidles.by/wp-content/themes/skidlesTwo/assets/img/jpg/v_razrabotke.jpg" alt="img">
                                </div>
                            </div>`;
    popupInner.appendChild(popupInfo);
    const cls = document.querySelector('.cls');
    cls.addEventListener('click', clsPopup);
    const popup = document.querySelector('.popups');
    popup.classList.add('v_razrabotke')
}

siteInfo();






