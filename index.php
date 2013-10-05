<?php get_header(); ?>

						<section>

							<div class="slider">

								<img src="<?php echo get_template_directory_uri(); ?>/images/slid.jpg" alt="" title="" />

							</div>

						</section>

					</div>

					<div class="insidewrapper">

                    <?php query_posts('category_name=about&showposts=1'); ?>

                    <?php while (have_posts()) : the_post(); ?>

						<section id="about">

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

                        <?php endwhile; ?>

                        <?php wp_reset_query(); ?>

						<section id="services">

							<header class="inside">

								<h1>

									SERVICES

								</h1>

							</header>

							<div class="container">

								<article>

									<div class="one-third column alpha icon">

										<figure>

											<img src="<?php echo get_template_directory_uri(); ?>/images/webdevelopment.png" alt="WEB DEVELOPMENT" title="WEB DEVELOPMENT" />

											<figcaption>

												WEB DEVELOPMENT

											</figcaption>

										</figure>

									</div>

									<div class="one-third column icon">

										<figure>

											<img src="<?php echo get_template_directory_uri(); ?>/images/onlineadvert.png" alt="ONLINE ADVERTISMENT" title="ONLINE ADVERTISMENT" />

											<figcaption>

												ONLINE ADVERTISMENT

											</figcaption>

										</figure>

									</div>

									<div class="one-third column omega icon">

										<figure>

											<img src="<?php echo get_template_directory_uri(); ?>/images/emailmarketing.png" alt="EMAIL MARKETING" title="EMAIL MARKETING" />

											<figcaption>

												EMAIL MARKETING

											</figcaption>

										</figure>

									</div>

									<div class="clear">

									</div>

									<div class="one-third column alpha icon">

										<figure>

											<img src="<?php echo get_template_directory_uri(); ?>/images/socialmediamarketing.png" alt="SOCIAL MEDIA MARKETING AND MANAGEMENT" title="SOCIAL MEDIA MARKETING AND MANAGEMENT" />

											<figcaption>

												SOCIAL MEDIA MARKETING AND MANAGEMENT

											</figcaption>

										</figure>

									</div>

									<div class="one-third column icon">

										<figure>

											<img src="<?php echo get_template_directory_uri(); ?>/images/marketreserch.png" alt="MARKET RESEARCH, SURVEYS, FEASIBILITY STUDIES AND FINANCIAL MODELLING" title="MARKET RESEARCH, SURVEYS, FEASIBILITY STUDIES AND FINANCIAL MODELLING" />

											<figcaption>

												MARKET RESEARCH, SURVEYS, FEASIBILITY STUDIES AND FINANCIAL MODELLING

											</figcaption>

										</figure>

									</div>

									<div class="one-third column omega icon">

										<figure>

											<img src="<?php echo get_template_directory_uri(); ?>/images/hosting.png" alt="PREMIUM AFFORDABLE HOSTING SOLUTIONS VIS WHOGOHOST.COM" title="PREMIUM AFFORDABLE HOSTING SOLUTIONS VIS WHOGOHOST.COM" />

											<figcaption>

												PREMIUM AFFORDABLE HOSTING SOLUTIONS VIS

												<span>

													WHOGOHOST.COM

												</span>

											</figcaption>

										</figure>

									</div>

								</article>

							</div>

						</section>

						<section id="portfolio">

							<header class="inside">

								<h1>

									PORTFOLIO

								</h1>

							</header>

							<div class="container">

								<article id="ajaxFeeder">


								</article>

							</div>

						</section>

                        

						<section id="blog">

							<header class="inside">

								<h1>

									BLOG

								</h1>

							</header>

							<div class="container">

								<article id="ajaxFeeder">

								</article>

							</div>

						</section>

                        

                        <?php query_posts('category_name=contact&showposts=1'); ?>

                        <?php while (have_posts()) : the_post(); ?>

						<section id="contact">

							<header class="inside">

								<h1>

									CONTACT US

								</h1>

							</header>

							<div class="container">

								<article>

									<h3>

										Say Hello!

									</h3>

									<div class="ten columns form">

										<?php the_content(); ?>

									</div>

								</article>

							</div>

						</section>

                        <?php endwhile; ?>     

                        <?php wp_reset_query(); ?>
                        <section class="our_clients">
                        <header class="inside">

								<h1>

									OUR CLIENTS

								</h1>

							</header>
                        <div class="container"><div class="sixteen columns"><?php ppm_carousel(); ?></div></div></section>

					</div>

<?php get_footer(); ?>