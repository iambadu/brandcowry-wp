<?php get_header()?>
<div>
  <main>

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
    <section class="container">
      <div class="col-md-12">
        <div class="srv-intro">
          <h1 class="h2">We build effective <a href="linkme">brand identities</a>, powerful <a href="linkme">brand
              strategies</a> that gives brands and organisations a competitive edge.
          </h1>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="gdcol">
          <img src="<?php echo get_template_directory_uri()?>/img/imgbta.jpg" alt="">
        </div>
        <div class="gdcol">
          <h6 class="srvtitl">Branding</h6>
          <h2>Branding</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed doloribus cumque qui nihil, laudantium
            assumenda dolor consectetur soluta molestias fugiat veritatis culpa vero provident perferendis vel earum
            explicabo sunt maxime?</p>
            <a class="srvlink" href="#">learn more</a>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="gdcol">
          <img src="<?php echo get_template_directory_uri()?>/img/imgbta.jpg" alt="">
        </div>
        <div class="gdcol">
          <h6 class="srvtitl">Branding</h6>
          <h2>Branding</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed doloribus cumque qui nihil, laudantium
            assumenda dolor consectetur soluta molestias fugiat veritatis culpa vero provident perferendis vel earum
            explicabo sunt maxime?</p>
            <a class="srvlink" href="#">learn more</a>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="gdcol">
          <img src="<?php echo get_template_directory_uri()?>/img/imgbta.jpg" alt="">
        </div>
        <div class="gdcol">
          <h6 class="srvtitl">Branding</h6>
          <h2>Branding</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed doloribus cumque qui nihil, laudantium
            assumenda dolor consectetur soluta molestias fugiat veritatis culpa vero provident perferendis vel earum
            explicabo sunt maxime?</p>
            <a class="srvlink" href="#">learn more</a>
        </div>
      </div>
    </section>

    <?php endwhile;?>


  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer()?>