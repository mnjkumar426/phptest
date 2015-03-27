<?php
function eg_js_include(){
	if(!is_admin()){
		
		wp_register_script('eg_js_jquery_boot_strap', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', null, null,true);
		wp_enqueue_script('eg_js_jquery_boot_strap');
		
		wp_register_script('eg_js_boot_strap', get_stylesheet_directory_uri().'/js/bootstrap.min.js', null,null,true);
		wp_enqueue_script('eg_js_boot_strap');
		
		wp_register_script('eg_js_additional_bootstrap', get_stylesheet_directory_uri().'/js/eg-additional-bootstrap.js', null,null,true);
		wp_enqueue_script('eg_js_additional_bootstrap');
		
		
		
		wp_register_script('eg_js_g', get_stylesheet_directory_uri().'/js/jquery.roundabout.min.js', null,null,true);
		wp_enqueue_script('eg_js_g');
		wp_register_script('eg_js_m', get_stylesheet_directory_uri().'/js/jquery.roundabout-shapes.js', null,null,true);
		wp_enqueue_script('eg_js_m');
		wp_register_script('eg_js_other', get_stylesheet_directory_uri().'/js/bcl.js', null,null,true);
		wp_enqueue_script('eg_js_other');
	}
}
add_action("init","eg_js_include");

function eg_css_include(){
	if(!is_admin()){
		wp_register_style('eg_bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' ,'',NULL);
	
		wp_enqueue_style( 'eg_bootstrap');
		
		

		wp_register_style('eg_animation',get_stylesheet_directory_uri().'/css/animate.css', '',null);
		
		wp_enqueue_style('eg_animation');
		
		wp_register_style('fontaewsome',get_stylesheet_directory_uri().'/css/font-awesome.min.css', '',null);
		
		wp_enqueue_style('fontaewsome');
		
		wp_register_style('eg_style',get_stylesheet_directory_uri().'/css/bcl.css', '',null);
		
		wp_enqueue_style('eg_style');
		
	}
}
add_action("init","eg_css_include");