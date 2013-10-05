					<footer>

						<div class="container">

							<div class="ten columns copyright">

								&copy;

								<?php echo date( 'Y'); ?> <a href="<?php echo home_url(); //make logo a home link?>">ennovateNIGERIA Limited</a>

									. All Rights Reserved.

							</div>

							<div class="six columns social">

								<a href="http://www.facebook.com/pages/EnnovateNIGERIA/171091952907942" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" width="56" height="54" alt="FaceBook" title="Be Our Fan on FaceBook" /></a>
                                <a href="http://www.linkedin.com/company/ennovatenigeria"  target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-icon.png" width="56" height="54"  alt="LinkedIn" title="Follow Us on LinkedIn" /></a>
								<img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" width="56" height="54" alt="Twitter" title="Follow Us on Twitter" />

							</div>

						</div>

					</footer>

					<!-- container -->

					<!-- End Document==================================================-->

					<!-- Javascript==================================================-->

					<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js">

					</script>
                    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-6.2.1-packed.js">

					</script>
                    <script>
                    var e_home_url = "<?php echo home_url("/"); ?>";
                    </script>

					<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.arbitrary-anchor.mod.js">

					</script>
                    
                    <script src="<?php echo get_template_directory_uri(); ?>/js/responsive-nav.js">
                    
					</script>
                    
					<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ennovate.js">

					</script>
                    
                    <script>
                      var navigation = responsiveNav("#nav", {
                        animate: true,        // Boolean: Use CSS3 transitions, true or false
                        transition: 400,      // Integer: Speed of the transition, in milliseconds
                        label: "Menu",        // String: Label for the navigation toggle
                        insert: "after",      // String: Insert the toggle before or after the navigation
                        customToggle: "",     // Selector: Specify the ID of a custom toggle
                        openPos: "relative",  // String: Position of the opened nav, relative or static
                        jsClass: "js",        // String: 'JS enabled' class which is added to <html> el
                        init: function(){},   // Function: Init callback
                        open: function(){},   // Function: Open callback
                        close: function(){}   // Function: Close callback
                      });
                    </script>

                    <?php wp_footer(); ?>

				</body>

				

				</html>