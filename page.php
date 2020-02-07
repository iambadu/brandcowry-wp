<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brandcowry
 */

get_header();
?>

	<div >
		<main >

		<?php
		while ( have_posts() ) :
			the_post();?>
			<section class="hero">
        <div class="container">
            <div class="row">
                <div class="page-intro">
                    <div class="hm-title">
						<?php the_field('page_head');?>
                    </div>
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <p><?php the_field('page_desc');?></p>
                </div>
            </div>

        </div>
    </section>
			<?php 
			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
