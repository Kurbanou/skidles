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


get_header(); ?>  

<main>  
    <section class="single">  
        <div class="wrapper"> 
			 <div class="news-content"> 
				 <?php if ( have_posts() ) : ?>  
                <?php while ( have_posts() ) : the_post(); ?>  
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
                        <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>  
						<h4> Опубликовано: <?php echo get_the_date('F j, Y'); ?> </h4>  
                        <div class="post-content">
							 <?php   
                                    // Check if a post thumbnail has been set  
                                    if ( has_post_thumbnail() ) {  
                                        // Display the thumbnail  
                                        echo '<a href="' . get_permalink() . '">' . get_the_post_thumbnail( get_the_ID(), 'medium' ) . '</a>';   
                                    } else {  
                                        echo '<p>Изображение не найдено.</p>'; // Message if the thumbnail is absent  
                                    }  
                                ?>                            
							<div>
								<?php the_excerpt(); ?>
							</div>                    
<!--                             <div class="read-more">
								<a href="<?php the_permalink(); ?>" > <i class="fa-solid fa-up-right-from-square"></i> Смотреть запись</a>
							</div>                         -->
                        </div>                      
                    </article>  
                <?php endwhile; ?> 
				  <?php else : ?>  
                <p>Записей не найдено.</p>  
            <?php endif; ?> 
				 </div>

                <div class="pagination">  
                    <?php  
                    the_posts_pagination( array(  
                        'mid_size'  => 2, // Количество страниц до и после текущей  
                        'prev_text' => '← Назад',  
                        'next_text' => 'Вперёд →',  
                    ) );  
                    ?>  
                </div>  

            
        </div>  
    </section>  
</main>  

<?php get_footer(); ?>


<!-- Примечания:
Если на странице блога отображается большое количество записей, обязательно проверьте настройки пагинации:
В админке WordPress перейдите в Настройки → Чтение.
Убедитесь, что указано нужное количество записей на странице.
Если используются произвольные запросы через WP_Query, для работы пагинации нужно настроить параметр paged. -->
 