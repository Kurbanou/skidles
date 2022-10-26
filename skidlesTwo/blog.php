<?php

	get_header('');
    
/* Template name: blog */
// для вывода записей в теме 2.0

?>

 <main>
        <section class="blog_post">

                <div class="inner_blog_post">
                    <div class="wrapper">
                        <div class="last-news__inner">
                            
                            <!--выводим последний пост-->
                       

                            <div class="last-news__img">
                                <img src="#" alt="news">ggggg
                                <div class="last-news__date">ggggggg</div>
                            </div>


                            <div class="last-news__content">

                                <div class="title_post">
                                    <h2 >gggggg</h2>
                                </div>

                                <div class="text_post">
                                    <p class="post">gggggggg</p>
                                </div>

                                <div class="last-news__button">
                                    <button onclick="document.location='gggggg'" class="button">Подробнее</button>
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
                                <div class="arhiv__news">
                                    
                                <!--/вывели последний пост сейчас все-->
                
                                <?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>
                                    <p class="date_post"><?php the_time('F j, Y'); ?></p>
                                    <a  href="<?php the_permalink(); ?>"> <p><?php the_title(); ?></p> </a>
                                <?php endwhile; endif; ?>
                                   
                                </div>
                            </div>
                        </div>
                        

                        <div class="controls">
                            <button class="arrow up disable">
                                &#129029;
                            </button>
                            <button class="arrow down">
                                &#129031;
                            </button>
                        </div>
                    </div>
                </div>
        </section>

    </main>
	
<?php
get_footer();
?>