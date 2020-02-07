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

	<div class="container page blogpost">
		<main class="mx-auto col-lg-10">

		<?php
		while ( have_posts() ) :
			the_post();
?>
			<div class="article">
				<h1><?php the_title() ?></h1>
				<div class="article-meta">
					<div class="author-img">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
					</div>
					<div class="author-name">
						<span class="author-prefix">Written by: <?php the_author()?></span>
						<span>Published on: <?php the_date()?></span>
					</div>

				</div>
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