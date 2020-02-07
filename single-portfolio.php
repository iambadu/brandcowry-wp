<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package brandcowry
 */

get_header();
?>

	<div class="container page single-post">
		<main class="mx-auto col-lg-10">

		<?php
		while ( have_posts() ) :
			the_post();
?>
			<div class="article">
				<h1><?php the_title() ?></h1>
				<?php the_content()?>
			</div>
			<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
 ?>