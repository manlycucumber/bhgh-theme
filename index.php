<?php get_header(); ?>
  <div class="card card-body blur shadow-blur mx-4 mx-md-5 mx-lg-10 mt-n9">
    <div class="section my-4 my-lg-5">
      <div class="container">
        <?php if (have_posts()){ while(have_posts()) : the_post();
                    the_content();
        endwhile; } ?>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
