<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brandcowry
 */

?>

	</div><!-- #content -->

	<footer class="pgfooter">
	<div class="container">
	<!-- <?php wp_nav_menu(
					array(
						'theme_location'  => 'footer-nav',
						'menu_class'      => 'nav justify-content-center',
						'fallback_cb'     => '',
						'depth'           => 2,
						'walker'          => new brandcowry_WP_Bootstrap_Navwalker(),
					)
				); ?> -->

		<div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <ul class="social">
                    <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/img/facebook.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/img/twitter.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/img/instagram.svg" alt=""></a></li>
                </ul>
                    <p><?php echo date('Y')?> Brandcowry&reg;. All rights reserved</p>


            </div>
	</div>

</footer>
</div><!-- #page -->
<!-- <?php wp_enqueue_script('jquery');?> -->
<?php wp_footer(); ?>

</body>
</html>
