<?php 
	define('IMG', get_template_directory_uri().'/assets/img');
	define('CSS', get_template_directory_uri().'/assets/css');
	define('JS', get_template_directory_uri().'/assets/js');


	function load_scripts()
	{

		$versao = '0.0.1';

		/* Registering style */
		wp_register_style('animatecss', CSS . '/animate.css', array(), $versao, false );
		wp_register_style('bootstrapcss', CSS . '/bootstrap.css', array(), $versao, false );		
		wp_register_style('entypo-fontellocss', CSS . '/entypo-fontello.css', array(), $versao, false );
		wp_register_style('font-awesomecss', CSS . '/font-awesome.css', array(), $versao, false );
		wp_register_style('jscss', CSS . '/js_composer.min.css', array(), $versao, false );
		wp_register_style('main-mediacss', CSS . '/main-media.css', array(), $versao, false );
		wp_register_style('maincss', CSS . '/main.css', array(), $versao, false );
		wp_register_style('prettyphotocss', CSS . '/prettyPhoto.css', array(), $versao, false );
		wp_register_style('skin_2css', CSS . '/skin_2.css', array(), $versao, false );
		wp_register_style('wt-visualcss', CSS . '/wt-visual-composer-extensions-front.css', array(), $versao, false );



		wp_register_script('bootstrapjs', JS . '/vendor/bootstrap.min.js', array('jquery'), $versao);
		wp_register_script('conditionaljs', JS . '/vendor/conditional.min.js', array(''), $versao);
		wp_register_script('jqueryjs', JS . '/vendor/jquery.fitvids.js', array(''), $versao);
		wp_register_script('jqueryfl', JS . '/vendor/jquery.flexslider-min.js', array(''), $versao);
		wp_register_script('jqueryow', JS . '/vendor/jquery.owlCarousel.js', array(''), $versao);
		wp_register_script('jqueryst', JS . '/vendor/jquery.sticky.js', array(''), $versao);
		wp_register_script('modernizrjs', JS . '/vendor/modernizr-2.6.1.min.js', array(''), $versao);
		wp_register_script('smoothscrolljs', JS . '/vendor/SmoothScroll.min.js', array(''), $versao);
		wp_register_script('mainjs', JS . '/main.js', array(''), $versao);
		wp_register_script('pluginsjs', JS . '/plugins.js', array(''), $versao);

		

		wp_enqueue_style('bootstrapcss');
		wp_enqueue_style('animatecss');
		wp_enqueue_style('entypo-fontellocss');
		wp_enqueue_style('font-awesomecss');
		wp_enqueue_style('main-mediacss');
		wp_enqueue_style('maincss');
		wp_enqueue_style('prettyphotocss');
		wp_enqueue_style('skin_2css');
		wp_enqueue_style('wt-visualcss');
		wp_enqueue_style('jscss');
		

		wp_enqueue_script('bootstrapjs');
		wp_enqueue_script('conditionaljs');
		wp_enqueue_script('jqueryjs');
		wp_enqueue_script('jqueryfl');
		wp_enqueue_script('jqueryow');
		wp_enqueue_script('jqueryst');
		wp_enqueue_script('modernizrjs');
		wp_enqueue_script('smoothscrolljs');
		wp_enqueue_script('mainjs');
		wp_enqueue_script('pluginsjs');
		
		
	}

	add_action('wp_enqueue_scripts', 'load_scripts');
	

if( function_exists('acf_add_options_page') ) {
 
	$option_page = acf_add_options_page(array(
		'page_title' 	=> 'Opções',
		'menu_title' 	=> 'Opções',
		'menu_slug' 	=> 'opcoes',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));
 
}

register_nav_menus( array(
	'header' => 'header Menu',
	'footer' => 'Footer Menu',
	'footer2' => 'Footer Menu2',
) );