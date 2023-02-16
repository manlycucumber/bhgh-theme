<?php
    function theme_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
        add_theme_support( 'custom-background' );
	}

    function theme_logo() {
        $defaults = array(
            'height'               => 130,
            'width'                => 300,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array('site-title')
        );
        add_theme_support( 'custom-logo', $defaults );
    }

    function theme_background() {
        $defaults = array(
            'default-image'          => '',
            'default-preset'         => 'fill', // 'default', 'fill', 'fit', 'repeat', 'custom'
            'default-position-x'     => 'center',    // 'left', 'center', 'right'
            'default-position-y'     => 'center',     // 'top', 'center', 'bottom'
            'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
            'default-repeat'         => 'no-repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
            'default-attachment'     => 'fixed',  // 'scroll', 'fixed'
            'default-color'          => '',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
        );
        add_theme_support( 'custom-background', $defaults );
    }

    function theme_menu() {
		register_nav_menus(
            array(
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
            )
        );
	}

    function register_navwalker(){
	    require_once get_template_directory() . '/navwalker.php';
    }


	function theme_scripts(){
        wp_register_style('material-kit-css', get_template_directory_uri() . '/assets/css/material-kit.min.css' );
		wp_register_style('fonts-css', 'https://fonts.googleapis.com/css?family=Courgette:300,400,500,700|Roboto+Slab:400,700|Material+Icons' );

        wp_enqueue_style('material-kit-css');
		wp_enqueue_style('fonts-css');

        wp_enqueue_style('style-css', get_stylesheet_uri(), array(), '1.0');

		wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
        wp_register_script('popper-js', get_template_directory_uri() . '/assets/js/popper.min.js');
		wp_register_script('material-kit-js', get_template_directory_uri() . '/assets/js/material-kit-pro.min.js' );
		wp_register_script('choices-js', get_template_directory_uri() . '/assets/js/choices.min.js' );

		wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('popper-js');
		wp_enqueue_script('material-kit-js');
		wp_enqueue_script('choices-js');
	}
	
	function theme_widgets() {
        register_sidebar(array(
            'name' => 'Sidebar',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));
    }

	add_action('after_setup_theme', 'theme_setup');
    add_action('after_setup_theme', 'theme_logo' );
    add_action('after_setup_theme', 'theme_background' );
    add_action('after_setup_theme', 'register_navwalker');
    add_action('init', 'theme_menu');
	add_action('wp_enqueue_scripts', 'theme_scripts');
    add_action('widgets_init', 'theme_widgets');
?>
