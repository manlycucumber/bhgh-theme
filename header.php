<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<title><?php echo get_bloginfo('name') ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>


<body class="bhgh-layout sidebar-collapse">
	<div id="bgimg" class="page-header header-filter" data-parallax="false" filter-color="warning"" style="background-image: url('<?php background_image(); ?>');"></div>
	<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
	<div class="container">
		<div class="navbar-translate">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                <?php $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id , 'full');
                
                if(has_custom_logo()){
                    echo '<img src="' . esc_url($logo[0]) . '" height="100" alt="' . get_bloginfo('name') . '">';
                }else{
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }?>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="sr-only">Toggle navigation</span>
				<span class="navbar-toggler-icon"></span>
				<span class="navbar-toggler-icon"></span>
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<?php wp_nav_menu( array(
            'theme_location'  => 'header-menu',
            'depth'           => 2,
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker()
        ) ); ?>
	</div>
</nav>
