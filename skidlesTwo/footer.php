<footer>
        <div class="wrapper">
            <div class="footer__inner">

                <div class="item1">
                    <div class="logo"><h1>Ски<span>д</span>ельский лесхоз</h1></div>
                </div>

                <div class="item2">
                    <button class="button contactButton">Электронное обращение</button>
                </div>

                <div class="item3">
                    <div class="social">
                        <div class="icons">
                            <a href="https://www.instagram.com/skidles_1/" target="_blank">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/instagram.svg" width="16" alt="icon">
                            </a>
                            <a href="https://www.instagram.com/skidles_1/" target="_blank">
                                <p>Instagram</p>
                            </a>
                        </div>
                        <div class="icons">
                            <a href="https://t.me/skidles_by" target="_blank">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/telegram.svg"  width="16" alt="icon">
                            </a>
                            <a href="https://t.me/skidles_by" target="_blank">
                                <p>Telegram</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item4">
                    <ul class="footer_nav">
                        <li>
                            <a href="http://skidles.by/"><p>Главная</p></a>
                        </li>
                        <li>
                            <a href="http://skidles.by/info/"><p>Информация</p></a>
                        </li>
                        <li>
                            <a href="http://skidles.by/kontakty/"><p>Контакты</p></a>
                        </li>
                    </ul>
                </div>

                <div class="item5">
                    <div class="designed">
                        <p class="little">
                            Designed by Faridun Kurbanou kurbanou.faridun@gmail.com
                        </p>
                    </div>
                </div>
				<div class="item6">
                    <div class="workingHours">
                      <div class="daysWeek">
                        <div class="dayWeeek">ПН</div>
                        <div class="dayWeeek">ВТ</div>
                        <div class="dayWeeek">СР</div>
                        <div class="dayWeeek">ЧТ</div>
                        <div class="dayWeeek">ПТ</div>
                        <div class="dayWeeek">СБ</div>
                        <div class="dayWeeek">ВС</div>
                      </div>
                      <div class="regimRaboty">
                        <p>Работаем c 8:00 - 17:00</p>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/worckHours.svg" alt="obed">
                        <p>13:00 - 14:00</p>
                      </div>
                    </div>
                </div>

                <!--попап-->
                 <div class="contactUs">
                    <div class="contactUs__inner">
                        <div class="x_icon2">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/x_icon.svg" alt="x_icon">
                        </div>
                        <p class="subtitle">Изменение порядка подачи электронных обращений</p>
                        <p class="post">Со 2 января 2023 года вступают в силу изменения и дополнения, внесенные в Закон Республики Беларусь от 18.07.2011 № 300-З «Об обращениях граждан и юридических лиц».</p>
                        <p class="post">В связи с этим изменится порядок подачи электронных обращений: электронные обращения будут подаваться посредством государственной единой (интегрированной) республиканской информационной системы учета и обработки обращений граждан и юридических лиц.</p>
                        <button class="button" onclick="document.location='https://xn--80abnmycp7evc.xn--90ais/'">обращения.бел</button>
                    </div>
                    <div class="fill"></div>
                </div>
            </div>
        </div>

	<div class='lang'>
		<div><?php echo do_shortcode('[gtranslate]'); ?></div>
		<div><?php echo do_shortcode( '[bvi]' ); ?></div>
	</div>


    </footer>
    <?php wp_footer(); ?>

</body>
</html>