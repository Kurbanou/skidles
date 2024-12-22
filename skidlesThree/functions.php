<?php

add_action( 'after_setup_theme', 'skidles_theme_setup' );
function skidles_theme_setup() {
    // Поддержка миниатюр
    add_theme_support( 'post-thumbnails' );
}

function skidles_enqueue_module_script() {
    wp_enqueue_script(
        'main-script', // Уникальный идентификатор
        get_template_directory_uri() . '/assets/js/app.js', // Путь к файлу
        array(), // Зависимости (оставьте пустым)
        '1.0.0', // Версия
        true // Загружать в футере
    );

    // Добавляем `type="module"` к скрипту
    add_filter('script_loader_tag', function($tag, $handle) {
        if ('main-script' === $handle) {
            return str_replace('<script ', '<script type="module" ', $tag);
        }
        return $tag;
    }, 10, 2);
}
add_action('wp_enqueue_scripts', 'skidles_enqueue_module_script');

function skidles_enqueue_styles() {
    wp_enqueue_style(
        'skidles-main-style', // Уникальный идентификатор
        get_stylesheet_uri(), // Путь к файлу style.css (не добавляем дополнительный путь)
        array(), // Зависимости (оставьте пустым, если нет зависимостей)
        '2.0' // Версия файла
    );

	  // Подключаем Google Fonts
	  wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kablammo&family=Lora:ital,wght@0,400..700;1,400..700&family=Oswald:wght@200..700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'skidles_enqueue_styles');


function skidles_enqueue_fontawesome() {
    wp_enqueue_script(
        'font-awesome', // Уникальный идентификатор
        'https://kit.fontawesome.com/cca0d0f347.js', // URL скрипта
        array(), // Зависимости
        null, // Версия (null для отключения версионирования)
        false // Подключение в <head> (false)
    );
}
add_action('wp_enqueue_scripts', 'skidles_enqueue_fontawesome');
