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
<div class="container entry-content">
    <div class="col-md-12">
        <div class="row">
            <?php
// Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => '9',
    'paged' => $paged,
);

$the_query = new WP_Query($args);
?>

<?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-md-4">
        <div class="post">
            <a href="<?php the_permalink()?>"><?php the_post_thumbnail()?></a>
            <div class="post__content">
                <span class="post__category"><?php the_category('single') ?></span>
                <a href="<?php the_permalink()?>">
                    <h2 class="h5"><?php the_title()?></h2>
                </a>
                <span class="post__date"><?php echo get_the_date()?></span>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
 </div>
    <div class="pagination">
        <?php
        echo paginate_links( array(
            'format'  => 'page/%#%',
            'current' => $paged,
            'total'   => $the_query->max_num_pages,
            'mid_size'        => 2,
            'prev_text'       => __('&laquo; Prev Page'),
            'next_text'       => __('Next Page &raquo;')
        ) );
        ?>
    </div>

<?php endif; ?>

    </div>
</div>
<?php get_footer(); ?>