<?php get_header() ?>
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto h-inwrap">
                <div class="h-img mx-auto">
                    <ul>
                        <li class="imgsld"><img src="<?php echo get_template_directory_uri() ?>/img/hero1.png" alt=""
                                srcset=""></li>
                        <li class="imgsld"><img src="<?php echo get_template_directory_uri() ?>/img/hero2.png" alt=""
                                srcset=""></li>
                    </ul>
                </div>
                <div class="h-logo">
                    <img src="<?php echo get_template_directory_uri() ?>/img/hr-logo.png" alt="">
                </div>
            </div>
        </div>

    </div>
</section>
<section>
    <div class=" container">
        <div class="mx-auto col-md-12 col-lg-10 text-intro">
            <span>GROW YOUR BRAND TO ROCKSTAR LEVEL</span>
            <h2>Branding can be complicated and confusing. Let us help you focus on what you do best</h2>
            <h2></h2>
            <p>We are a creative agency focused on helping brands and businesses gain a cutting edge in today’s connected world. Using battle tested branding strategies and thoughtful design, we assist brands and companies to find their voice and grow in today’s economy.</p>

            <a class="impact-link">LEARN MORE</a>
        </div>
    </div>
</section>

<section class="hmportfolio">
    <div class="row">
        <?php
 // The Query
 $posts = new WP_Query(array(
     'post_type' => 'portfolio',
     'posts_per_page' => '4',
 ));

 // The Loop
 while ( $posts->have_posts() ) :
     $posts->the_post();
?>
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
        <?php
endwhile;
 wp_reset_postdata();
 ?>

    </div>
    <div class="mx-auto text-center">
        <a class="impact-link" href="#">how we work</a>
    </div>
</section>
<section>
    <div class="container">
        <div class="tmonial col-md-8 mx-auto">
            <h3>Yango’s expertise in digital media buying strategy and implementation has been invaluable and helped deliver our most effective campaigns to date</h3>
        </div>
    </div>
</section>
<section class="hmblog">
    <div class="container">
        <div class="sectitle">
            <h2>From Our Blog</h2>
        </div>
        <div class="row">
            <?php
 // The Query
 $posts = new WP_Query(array(
     'post_type' => 'post',
     'posts_per_page' => '3',
 ));

 // The Loop
 while ( $posts->have_posts() ) :
     $posts->the_post();
?>
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
            <?php
endwhile;
 wp_reset_postdata();
 ?>

        </div>
</section>
<section>
    <div class="container cta">
        <h2 class="ctahead text-center">Do you want to start a project ?</h2>
        <p class="mx-auto col-md-8 text-center"> If you have any questions or a problem to solve, we’d love to hear from
            you. Get in touch and leave your details, or feel free to call us direct</p>
        <div class="mx-auto text-center">
            <a class="impact-link" href="#">Contact us</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>