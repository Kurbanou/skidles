<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package skidles
 */

get_header(Blog);
?>

    <main>
        <section class="singl">
            <div class="wrapper">

                <h2><?php single_post_title(); ?></h2>
				   <div class="back" onclick="window.location.href 	='http://skidles.by/novosti/';">
                        <div class="backSvg">
                            <div class="krug">
                                <div class="treug"></div>
                            </div>
                        </div>
                        <p>Вернуться назад к новостям</p>

                    </div>
                <div class="content post">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
?>


