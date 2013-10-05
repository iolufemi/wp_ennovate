<?php get_header(); ?>
</div>
<div class="insidewrapper">
<?php wp_reset_query() ?>
						<section id="post">

							<header class="inside">

								<h1>

									Error 404! Page Not Found.

								</h1>

							</header>

							<div class="container">

								<article>
                                <p>
                                <blockquote>The page you are trying to access does not exist Here. Please, <a href="<?php echo home_url('/'); ?>">CLICK HERE</a> to go back <a href="<?php echo home_url('/'); ?>">HOME</a>.</blockquote>
                                </p>
								</article>

							</div>

						</section>

</div>

<?php get_footer(); ?>