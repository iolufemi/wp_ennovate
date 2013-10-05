<?php 
/**
 * Template Name: Portfolio Section
 * 
 * */
 ?>

<?php get_header(); ?>

                    </div>
					<div class="insidewrapper">
                        <?php 
                        if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
                        elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
                        else { $paged = 1; }
                                                
                                                query_posts('category_name=portfolio&posts_per_page=6&paged=' . $paged); ?>

						<section id="portfolio">

							<header class="inside">

								<h1>

									PORTFOLIO

								</h1>

							</header>

							<div class="container">

								<article id="ajaxFeeder">

                                <?php 

                                $c = 0;

                                while (have_posts()) : the_post(); 

                                $c++;

                                ?>

									<div class="one-third column <?php if($c == 1){ echo "alpha";} if($c == 3){ echo "omega"; $c = 0; } ?>">

										<figure>

                                        <?php the_post_thumbnail('one-third'); ?>

										</figure>

									</div>

                                <?php endwhile; ?>     
                                <div class="pagnavi"><?php wp_pagenavi(); ?></div>

                        <?php wp_reset_query(); ?>

								</article>

							</div>

						</section>
					</div>
<?php get_footer(); ?>