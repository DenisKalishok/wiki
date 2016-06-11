<?php
	require_once ('wiki_customize.php');
	require_once ('BootstrapNavMenuWalker.php');

/*registration style*/
	wp_register_style(
		'style',
	 	get_template_directory_uri() . '/style.css');
	wp_register_style(
		'bootstrap_css',
	 	get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_register_style(
		'bootstrap_theme_css',
	 	get_template_directory_uri() . '/css/bootstrap-theme.min.css');
	wp_enqueue_style(
		'font_awesome_css',
		get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style(
		'header',
		get_template_directory_uri() . '/css/header.css');
	wp_enqueue_style(
		'index',
		get_template_directory_uri() . '/css/index.css');
	wp_enqueue_style(
		'page',
		get_template_directory_uri() . '/css/page.css');
	wp_enqueue_style(
		'footer',
		get_template_directory_uri() . '/css/footer.css');
	wp_enqueue_style(
		'sidebar',
		get_template_directory_uri() . '/css/sidebar.css');
	wp_enqueue_style(
		'category',
		get_template_directory_uri() . '/css/category.css');
	wp_enqueue_style(
		'404',
		get_template_directory_uri() . '/css/404.css');
	wp_enqueue_style(
		'animate',
		get_template_directory_uri() . '/css/animate.css');

	
/*style turn to loading*/
	wp_enqueue_style('style');
	wp_enqueue_style('bootstrap_css');
	wp_enqueue_style('bootstrap_theme_css');
	wp_enqueue_style('font_awesome_css');
	wp_enqueue_style('header');
	wp_enqueue_style('index');
	wp_enqueue_style('page');
	wp_enqueue_style('footer');
	wp_enqueue_style('sidebar');
	wp_enqueue_style('category');
	wp_enqueue_style('404');
	wp_enqueue_style('animate');


/*registration script*/
	wp_register_script(
		'bootstrap_js',
		get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_register_script(
		'jQuery',
		get_template_directory_uri() . '/js/jquery-2.2.1.min.js');
	wp_register_script(
		'jquery.sticky',
		get_template_directory_uri() . '/js/jquery.sticky.js');
	wp_register_script(
		'script',
		get_template_directory_uri() . '/js/script.js');
	wp_register_script(
		'ajax_check_street',
		get_template_directory_uri() . '/module_check_street/js/ajax_check_street.js');


 /*script turn to loading*/
 	wp_enqueue_script('jQuery');
 	wp_enqueue_script('bootstrap_js');	
 	wp_enqueue_script('jquery.sticky');
 	wp_enqueue_script('script');
	wp_enqueue_script('ajax_check_street');


/*registration menu*/
	register_nav_menu('header_menu','Header Menu');

/*form-search html5*/
	add_theme_support('html5', array('search-form'));
/*number print words in index*/
function do_excerpt($string, $word_limit) {
  $words = explode(' ', $string, ($word_limit + 1));
  if (count($words) > $word_limit)
  array_pop($words);
  echo implode(' ', $words).' ...';
}
/*replacement separator title*/
add_filter( 'document_title_separator', function(){ return ' | '; } );
?>