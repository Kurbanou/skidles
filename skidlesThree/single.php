<?php
/**
 * The template for displaying all single posts это для конкретной новости
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package skidles
 */

get_header();
?>
					

    <main>
        <section class="single">
            <div class="wrapper">
                <div class="single_inner">
                    <h1><?php single_post_title(); ?></h1>
					
							  <?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>
										<h4>Опубликовано <?php the_time('F j, Y'); ?></h4>
										
							  <?php endwhile; endif; ?> 
                   
                    <div class="single-content">
                        <?php the_content(); ?></div>
                        <div class="social social_inner">                   
                            <a href="https://www.instagram.com/skidles_1/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/instagram.svg" alt="icon" width="14px"></a>
                            <a href="https://t.me/skidles_by" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/telegram.svg" alt="icon" width="14px"></a>
                            <a href="https://www.facebook.com/minleshoz" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/facebook.svg" alt="icon" width="14px"></a>
                            <a href="https://twitter.com/minleshoz" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/x_icon.svg" alt="icon" width="14px"></a>                
                            <a href="https://www.youtube.com/channel/UCEPbuES4gWuvW2dW8EIX7hQ/featured?view_as=subscriber" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/svg/youtube.svg" alt="icon" width="14px"></a>                
                        </div>
                  </div>
             </div>                       
        </section>
    </main>

<?php
get_footer();
?>


