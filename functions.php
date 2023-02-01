<?php
function enqueue_styles_child_theme()
{

	$parent_style = 'parent-style';
	$child_style  = 'child-style';

	wp_enqueue_style(
		$parent_style,
		get_template_directory_uri() . '/style.css'
	);

	wp_enqueue_style(
		$child_style,
		get_stylesheet_directory_uri() . '/style.css',
		array($parent_style),
		wp_get_theme()->get('Version')
	);

	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');


	wp_enqueue_script(
		'bootstrap-bundle',
		get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
		array( 'jquery' )
	);
}
add_action('wp_enqueue_scripts', 'enqueue_styles_child_theme');
