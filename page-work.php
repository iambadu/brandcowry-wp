<?php get_header() ?>
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
<div class="hmportfolio nomgn">
        <div class="row">
            <?php
// Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => '4',
);

$the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ) : ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-md-6 p-item">
                <div class="hovereffect">
                    <?php the_post_thumbnail('large') ?>
                    <a href="<?php the_permalink() ?>">
                        <div class="overlay">
                            <h3 class="title"><?php the_title() ?></h3>
                        </div>
                </div>
                </a>
        </div>
    <?php endwhile; ?>
 </div>
<?php endif; ?>
</div>
<?php get_footer(); ?>