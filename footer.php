<footer class="footer card card-body shadow-blur rounded-0 pt-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <a href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_site_icon_url(); ?>" height="45" class="mb-3 footer-logo" alt="<?php echo get_bloginfo('name'); ?>">
            </a>
            <h6 class="font-weight-bolder mb-4"><?php echo get_bloginfo('name') ?></h6>
          </div>
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim/" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                  <i class="fab fa-dribbble text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                  <i class="fab fa-github text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer1') ) ?>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer2') ) ?>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer3') ) ?>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
          <?php wp_nav_menu( array(
				'theme_location'  => 'footer-menu',
				'depth'           => 2,
				'container'       => 'div',
				'container_class' => '',
				'menu_class'      => ''
		  ) ); ?>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              Copyright &copy; <?php echo date("Y"); ?> JAMS Development <img src="https://bhg.house/assets/img/jams.png" alt="JAMS" height="25" style="margin-top:-10px" />. All rights reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
