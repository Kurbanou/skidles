<?php

function custom_excerpt($excerpt) {  
    return wp_trim_words($excerpt, 20, '...');  
}  

add_filter('the_excerpt', 'custom_excerpt');  

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
    // Определяем путь к директории темы
    $theme_dir = get_template_directory_uri();

    // Подключаем Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kablammo&family=Lora:ital,wght@0,400..700;1,400..700&family=Oswald:wght@200..700&display=swap',
		
        [], 
        null
    );

    // Подключаем основной файл стилей темы в конце, чтобы он загружался последним
    wp_enqueue_style(
        'skidles-main-style', 
        get_stylesheet_uri(), 
        [], 
        '2.0'
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


// Чтобы контролировать количество записей на странице для пагинации, используйте параметр posts_per_page в запросе. Для главной страницы блога это можно сделать так:

function custom_posts_per_page( $query ) {
    if ( $query->is_main_query() && !is_admin() ) {
        if ( $query->is_home() ) {
            $query->set( 'posts_per_page', 6 );
        }
    }
}
add_action( 'pre_get_posts', 'custom_posts_per_page' );
