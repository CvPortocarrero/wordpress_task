<?php
function enqueue_styles_child_theme() {

	$parent_style = 'twentyseventeen-style';
	$child_style  = 'twentyseventeen-child-style';

	wp_enqueue_style( $parent_style,
				get_template_directory_uri() . '/style.css' );
	
	wp_enqueue_style( $child_style,
				get_stylesheet_directory_uri() . '/style.css',
				array( $parent_style ),
				wp_get_theme()->get('Version')
				);		 
	
			//enqueue local css
	       wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/assets/css/style.css',false,'1.1','all');	
}

 add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );
 
