<?php

    get_header(Blog);

/* Template name: page */

?>
    <main>
        <section class="singl page">
            <div class="wrapper">
                <h2><?php single_post_title(); ?></h2>
				<?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    </main>




<?php get_footer( ); ?>


<!-- <?php echo esc_url( get_template_directory_uri() ); ?> -->

