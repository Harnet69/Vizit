<?
/*безопасное подключение стилей и скриптов*/
function load_style_script(){
	wp_enqueue_style('mystyle', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('style-flex', get_template_directory_uri() . '/flexslider.css');
	wp_enqueue_style('style-jquery-ui-1.9.2', get_template_directory_uri() . '/css/custom-theme/jquery-ui-1.9.2.custom.css');
	wp_enqueue_script('modern', get_template_directory_uri() . '/js/modernizr.js');
	wp_enqueue_script('google-jq', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js');
	wp_enqueue_script('shCore', get_template_directory_uri() . '/js/shCore.js');
	wp_enqueue_script('shBrushXml', get_template_directory_uri() . '/js/shBrushXml.js');
	wp_enqueue_script('shBrushJScript', get_template_directory_uri() . '/js/shBrushJScript.js');
	wp_enqueue_script('jquery.easing', get_template_directory_uri() . '/js/jquery.easing.js');
	wp_enqueue_script('jjquery.mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js');
	wp_enqueue_script('demo', get_template_directory_uri() . '/js/demo.js');
	wp_enqueue_script('jquery-ui-1.9.2', get_template_directory_uri() . '/js/jquery-ui-1.9.2.custom.js');
}

add_action('wp_enqueue_scripts', 'load_style_script');

/*создание собственной вкладки в админке*/
function my_options(){
	add_settings_field('tel', 'Мой номер телефона','show_phone','general');
	register_setting('general','my_tel');
}
add_action ('admin_init', 'my_options');

		function show_phone(){
			echo "<input class='regular-text' type='text' name='my_tel' value='".esc_attr(get_option('my_tel'))."';>";
		}	
/*Иконки соцсетей*/
register_sidebar(array('name' => 'Иконки',
								'id' =>'icon',
								'description' => 'Добавьте иконки соц. сетей полем Текст',
								'before_widget' => '',
								'after_widget'  => '',
								'before_title'  => '',
								'after_title'   => ''));