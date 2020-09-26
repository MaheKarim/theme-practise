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
	
	wp_enqueue_style('main-css', get_template_directory_uri(). '/style.css');
	
	}
	// Add Action Hook
	add_action('wp_enqueue_scripts', 'mahekarim_cssScripts');