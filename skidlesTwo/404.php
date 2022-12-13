<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package skidles
 */
 
get_header(404);
?>


    <section class="error404">
        <div class="wrapper">
            <div class="error404__inner">
                <img  src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/404.svg" alt="img">
                <button class="button" onclick = "window.location.href =`http://skidles.by`;">На главную</button>
            </div>
        </div>
    </section>


