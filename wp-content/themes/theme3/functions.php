<?
function load_style_script(){
	wp_enqueue_style('mystyle', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('style-flex', get_template_directory_uri() . '/flexslider.css');
	wp_enqueue_style('style-jquery-ui-1.9.2', get_template_directory_uri() . '/css/custom-theme/jquery-ui-1.9.2.custom.css');
	wp_enqueue_style('modern', get_template_directory_uri() . '/js/modernizr.js');
	wp_enqueue_style('google-jq', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_style('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js');
	wp_enqueue_style('shCore', get_template_directory_uri() . '/js/shCore.js');
	wp_enqueue_style('shBrushXml', get_template_directory_uri() . '/js/shBrushXml.js');
	wp_enqueue_style('shBrushJScript', get_template_directory_uri() . '/js/shBrushJScript.js');
	wp_enqueue_style('jquery.easing', get_template_directory_uri() . '/js/jquery.easing.js');
	wp_enqueue_style('jjquery.mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js');
	wp_enqueue_style('demo', get_template_directory_uri() . '/js/demo.js');
	wp_enqueue_style('jquery-ui-1.9.2', get_template_directory_uri() . '/js/jquery-ui-1.9.2.custom.js');
	
}

add_action('wp_enqueue_scripts', 'load_style_script');