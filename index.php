<?php

add_shortcode( 'ya-api-form', function() {
    ob_start();

	get_template_part(
		'widgets/ya-api-form/template'
	);

	$res = ob_get_contents();
	ob_end_clean();

	return $res;
});

wp_enqueue_script(
	'jquery',
	'https://code.jquery.com/jquery-3.7.0.min.js',
	array(),
	wp_get_theme()->get( 'Version' ),
	true
);

wp_enqueue_script(
	'ya-api-form',
	get_template_directory_uri() . '/widgets/ya-api-form/api.js',
	array('jquery'),
	filemtime( get_theme_file_path('/widgets/ya-api-form/api.js') ),
	true
);

add_filter( 'script_loader_tag', function($tag) {
	if ( str_contains($tag, 'ya-api-form') ) {
		$tag = str_replace( 'text/javascript', 'module', $tag );
	}

	return $tag;
});