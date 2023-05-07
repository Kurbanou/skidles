<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package skidles
 *  *

 */

get_header();
?>



    <main>
        <section class="blog_post">

                <div class="inner_blog_post">
                    <div class="wrapper">
                        <div class="last-news__inner">

                            <?php  $post = get_post('');?>

                            <div class="last-news__img">
                                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="news">
                                <div class="last-news__date"><?php the_time('j'); ?></div>
                            </div>


                            <div class="last-news__content">

                                <div class="title_post">
                                    <h2 ><?php the_title(); ?></h2>
                                </div>

                                <div class="text_post">
                                    <p class="post"><?php echo get_the_excerpt() ?></p>
                                </div>

                                <div class="last-news__button">
                                    <button class="button" onclick="window.location.href ='<?php echo get_permalink(); ?>';">Подробнее</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container__arhiv">
                    <div class="inner_arhiv_post">
                        <p class="subtitle">Новости:</p>
                        <div class="over_news">
                            <div class="news_inner">




                                    <?php
                                    //  <!--выводим записи-->
                                    $posts = get_posts( array(
                                        'numberposts' => 999,
                                        'category'    => 0,
                                        'orderby'     => 'date',
                                        'order'       => 'DESC',
                                        'include'     => array(),
                                        'exclude'     => array(),
                                        'meta_key'    => '',
                                        'meta_value'  =>'',
                                        'post_type'   => 'post',
                                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                    ) );
                                    foreach( $posts as $post ){
                                        setup_postdata($post);
                                        // формат вывода the_title() ...
                                    ?>
                                    <div class="arhiv__news">
                                        <p class="date_post"><?php echo get_the_date(); ?></p>
                                        <a  href="<?php echo get_permalink(); ?>"><p><?php the_title(); ?></p></a>
                                    </div>
                                    <?php } wp_reset_postdata(); ?>

                            </div>
                        </div>
                        <div class="controls">
                            <button class="arrow up disable">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/up.svg" width="16" alt="svg">
                            </button>
                            <button class="arrow down">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/down.svg" width="16" alt="svg">
                            </button>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <script src="../wp-content/themes/skidlesTwo/assets/js/blog/script.js" type="module"></script>

<?php

get_footer();
