<?php get_header(); ?>
</div>
<div class="insidewrapper">
<?php wp_reset_query() ?>
						<section id="post">

							<header class="inside">

								<h1>

									<?php the_title(); ?>

								</h1>

							</header>

							<div class="container">

								<article>

                                <?php the_content(); ?>

								</article>

							</div>

						</section>

</div>

<?php get_footer(); ?>