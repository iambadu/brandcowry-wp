<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package brandcowry
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'brandcowry_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'wp_body_open' ); ?>
	<div class="wrapper">

		<!-- ******************* The Navbar Area ******************* -->
		<div class="fixedwrap" itemscope itemtype="http://schema.org/WebSite">

			<a class="skip-link sr-only sr-only-focusable"
				href="#content"><?php esc_html_e( 'Skip to content', 'brandcowry' ); ?></a>
			<div class="navwrap fixed-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col"> <a class="nav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo get_template_directory_uri()?>/img/hr-logo.svg" alt="">
							</a>
						</div>
						<div class="col">
							<div class="nav-but-wrap">
								<div class="menu-icon hover-target">
									<span class="menu-icon__line menu-icon__line-left"></span>
									<span class="menu-icon__line"></span>
									<span class="menu-icon__line menu-icon__line-right"></span>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<nav class="nav">
				<?php wp_nav_menu(
								array(
									'theme_location'  => 'header_nav',
									'container_class' => 'nav__content',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'nav__list',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 2,
									'walker'          => new brandcowry_WP_Bootstrap_Navwalker(),
								)
							);
					?>
			</nav>


			<!-- The WordPress Menu goes here -->

		</div>

	</div><!-- #wrapper-navbar end -->