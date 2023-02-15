<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>

  <title>
    Home - <?php echo get_bloginfo('name') ?><
  </title>

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <style>
	body {
		background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/bg.png);
	}
  </style>
</head>

<body class="bg-gray-200">
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3 d-md-block" href="<?php echo get_home_url(); ?>">
              <?php $custom_logo_id = get_theme_mod('custom_logo');
				$logo = wp_get_attachment_image_src($custom_logo_id , 'full');

				if(has_custom_logo()){
					echo '<img src="' . esc_url($logo[0]) . '" height="100" alt="' . get_bloginfo('name') . '">';
				}else{
					echo '<h1>' . get_bloginfo('name') . '</h1>';
			    }?>
            </a>

            <button class="navbar-toggler shadow-none ms-md-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <?php wp_nav_menu( array(
				'theme_location'  => 'header-menu',
				'depth'           => 2,
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0',
				'menu_class'      => 'navbar-nav navbar-nav-hover ms-auto',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker()
			) ); ?>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>

  </div>

  <header class="position-relative">
    <div class="page-header min-vh-65 position-relative" style="background-image: url('<?php background_image(); ?>');" loading="lazy">
      <span class="mask bg-gradient-warning opacity-3"></span>
    </div>
  </header>
