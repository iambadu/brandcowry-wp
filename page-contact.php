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
    <section class="cnt-intro">
      <div class="container">
        <div class="col-md-12">
          <h1>Let's work together</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe consequuntur reiciendis eligendi temporibus veritatis laudantium fuga quisquam sunt amet alias nulla doloribus omnis quas sequi exercitationem nisi, eos dolorum cumque.</p>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="col-md-12">
        <?php the_content()?>
      </div>
    </section>

    <?php endwhile;?>


  </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer()?>