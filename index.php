<?php

add_shortcode('ya-api-form', function() {
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
	array(),
	filemtime(get_template_directory_uri() . '/widgets/ya-api-form/api.js'),
	true
);