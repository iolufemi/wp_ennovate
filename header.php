<!DOCTYPE html>

<!--[if lt IE 7 ]>

	<html class="ie ie6" lang="en">

	<![endif]-->

	<!--[if IE 7 ]>

		<html class="ie ie7" lang="en">

		<![endif]-->

		<!--[if IE 8 ]>

			<html class="ie ie8" lang="en">

			<![endif]-->

			<!--[if (gte IE 9)|!(IE)]>

				<!-->

				<html lang="en">

				<!--<![endif]-->

				<head>

					<!-- Basic Page Needs==================================================-->

					<meta charset="<?php bloginfo( 'charset' ); ?>" />

					<title>

						<?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?>

					</title>

					<meta name="description" content="<?php bloginfo('description'); ?>" />

					<meta name="author" content="Olanipekun Olufemi, EnnovateNIGERIA" />

                    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

					<!-- Mobile Specific Metas==================================================-->

					<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

					<!-- CSS==================================================-->

					<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/base.css" />

					<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/skeleton.css" />

					<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/layout.css" />
                    
                    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/responsive-nav.css" />
                    
                    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

					<!--[if lt IE 9]>

						<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">

						</script>

					<![endif]-->

					<!-- Favicons==================================================-->

					<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />

					<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />

					<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png" />

					<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png" />

                    <?php wp_head(); ?>

				</head>

				<body <?php body_class(); ?>>

					<!-- Primary Page Layout==================================================-->

					<div class="homewrapper" id="homepage">

						<header id="home">

							<div class="container">

								<div class="two columns alpha logo">

                                <a href="<?php echo home_url(); //make logo a home link?>">

									<figure>

										<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" />

									</figure>

                                </a>

								</div>
                                <?php if(is_home() || is_front_page()){ ?>
								<nav class="fourteen columns omega nav" id="nav">

									<ul>

										<li>

											<a href="##homepage">HOME<hr /><span>home</span></a>

										</li>

										<li>

											<a href="##about">ABOUT US<hr /><span>who we are</span></a>

										</li>

										<li>

											<a href="##services">SERVICES<hr /><span>what we do</span></a>

										</li>

										<li>

											<a href="##portfolio">PORTFOLIO<hr /><span>our works</span></a>

										</li>

										<li>

											<a href="##blog">BLOG<hr /><span>updates</span></a>

										</li>

										<li>

											<a href="##contact">CONTACT US<hr /><span>say hello</span></a>

										</li>

									</ul>

								</nav>
                                <?php }else{ ?>
                                <nav class="fourteen columns omega nav" id="nav">

									<ul>

										<li>

											<a href="<?php echo home_url(); ?>/##homepage">HOME<hr /><span>home</span></a>

										</li>

										<li>

											<a href="<?php echo home_url(); ?>/##about">ABOUT US<hr /><span>who we are</span></a>

										</li>

										<li>

											<a href="<?php echo home_url(); ?>/##services">SERVICES<hr /><span>what we do</span></a>

										</li>

										<li>

											<a href="<?php echo home_url(); ?>/##portfolio">PORTFOLIO<hr /><span>our works</span></a>

										</li>

										<li>

											<a href="<?php echo home_url(); ?>/##blog">BLOG<hr /><span>updates</span></a>

										</li>

										<li>

											<a href="<?php echo home_url(); ?>/##contact">CONTACT US<hr /><span>say hello</span></a>

										</li>

									</ul>

								</nav>
                                <?php } ?>

							</div>

						</header>