<?php
        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );
 
        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !function_exists(core_mods) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			} 
		}
		core_mods();
	}
	function my_scripts_method() {
	   wp_register_script('functions', get_stylesheet_directory_uri() . '/js/functions.js', array('jquery'),'1.0' );
	   wp_enqueue_script('functions');
	 	if (is_home() || is_front_page()){
			wp_register_script('slider', get_stylesheet_directory_uri() . '/js/slides.js', array('jquery'),'1.0' );
			wp_enqueue_script('slider');
			
			wp_register_script('ease', get_stylesheet_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'),'1.3' );
			wp_enqueue_script('ease');
			}
		}
	add_action('wp_enqueue_scripts', 'my_scripts_method');

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }   
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.
	
	function my_custom_login_logo() {
    echo '<style type="text/css">.login h1 a {height:100px;background-image:url('.get_bloginfo('stylesheet_directory').'/images/logo-login.png) !important;background-size:auto;}</style>';}
	
	add_action('login_head', 'my_custom_login_logo');
?>