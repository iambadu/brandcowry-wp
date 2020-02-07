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
          <h1 class="lead">We’re are team of curious professionals that are obsessed with creating brands and digital experiences that get results. We embrace every challenge and push ourselves to the limit to produce nothing but the very best every time.</h1>
        </div>
      </div>
    </section>
      <section class="team">
        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6">
              <div class="member">
                  <img src="<?php echo get_template_directory_uri()?>/img/sarpong2.jpg" alt="">
                  <div class="name">
                    <p>emmanuel sarpong</p>
                    <span>ceo / creative director</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="member">
                  <img src="<?php echo get_template_directory_uri()?>/img/sarpong2.jpg" alt="">
                  <div class="name">
                    <p>emmanuel sarpong</p>
                    <span>ceo / creative director</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
              <div class="member">
                  <img src="<?php echo get_template_directory_uri()?>/img/sarpong2.jpg" alt="">
                  <div class="name">
                    <p>emmanuel sarpong</p>
                    <span>ceo / creative director</span>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="member">
                  <img src="<?php echo get_template_directory_uri()?>/img/sarpong2.jpg" alt="">
                  <div class="name">
                    <p>emmanuel sarpong</p>
                    <span>ceo / creative director</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="member">
                  <img src="<?php echo get_template_directory_uri()?>/img/sarpong2.jpg" alt="">
                  <div class="name">
                    <p>emmanuel sarpong</p>
                    <span>ceo / creative director</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
              <div class="member">
                  <img src="<?php echo get_template_directory_uri()?>/img/sarpong2.jpg" alt="">
                  <div class="name">
                    <p>emmanuel sarpong</p>
                    <span>ceo / creative director</span>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>

    <?php endwhile;?>


  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer()?>