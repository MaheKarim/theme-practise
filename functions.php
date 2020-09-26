<?php

    // Add Theme Support
    function mahekarim_themeSetup(){
    	
        add_theme_support('title_tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5');
        add_theme_support('post-formats' , [
        	'aside',
	        'gallery',
	        'link',
	        'image',
	        'quote',
	        'status',
	        'audio',
	        'video'
        ]);
    }
    add_action('after_setup_theme', 'mahekarim_themeSetup');
    
    // Local Scripts Enable

	function mahekarim_cssScripts() {
	
	wp_enqueue_style( 'main-css', get_stylesheet_uri(), [] , time(), 'all' );
	wp_enqueue_style( 'custom-css', get_template_directory_uri(). '/assets/custom.css', [], '1.0' , 'all' );
	wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
		wp_enqueue_style('google-font-architects', '//fonts.googleapis.com/css2?family=Architects+Daughter&display=swap
');
	
	}
	// Add Action Hook
	add_action('wp_enqueue_scripts', 'mahekarim_cssScripts');
	
	// Adding Menu

	register_nav_menus([
		'main-menu' => __('Main Menu', 'mahekarim'),
		'footer-menu' => __('Footer Menu', 'mahekarim')
	]);