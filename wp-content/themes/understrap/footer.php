<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type');
?>

<?php get_sidebar('footerfull'); ?>
<div  id="footer-scroll">

</div>
<div class="wrapper" id="wrapper-footer">

	<div class="container-fluid footer-inner">
		<div class="row footer-border">
		<div class="col-sm-12 col-md-6 col-lg-3">
		<div class="footer-col">
			<h4><?php _e('LONDON', 'understrap') ?></h4>
			 <p>Level 1, Devonshire House<br>
				 One Mayfair Place, Mayfair<br>
				 W1J8Aj, United Kingdom<br>

				 T +44 20 3205 7182
			 </p>
		</div>
	</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="footer-col">
					<h4><?php _e('ANTWERP', 'understrap') ?></h4>
					 <p>Level 6<br>
						 Pelikaanstraat 54<br>
						 2018 Antwerp, Belgium<br>

						 T +32 3 206 10 30
					 </p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="footer-col phone">
				<h4><?php _e('HONG KONG', 'understrap') ?></h4>
				 <p>Suite 901, Level 9<br>
					 The Hong Kong Club Building<br>
					 3A Chater Road Central, Hong Kong<br>

					 T +852 3125 7531
				 </p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="footer-col social-col">
					<h4><?php _e('ONLINE', 'understrap') ?></h4>
							<p><span>Email:</span> contact@irisalexander.com</p>
							<p><span>WeChat:</span> irisalexander</p>
							<p><span>WhatsApp:</span> + 44 77 6054 6898</p>
							<p><span>Instagram:</span> irisalexanderofficial</p>
				</div>
		   </div>
    </div>

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

							<span><?php _e('&#9426; 2017 DDA Trading. All rights reserved.', 'understrap') ?></span>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

		</div>

	</div><!-- container end -->

<?php wp_footer(); ?>

</body>

</html>
