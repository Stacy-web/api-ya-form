<?php
add_shortcode('ya-api-form', function () {
	ob_start();

	get_template_part(
		'widgets/ya-api-form/template'
	);

	$res = ob_get_contents();
	ob_end_clean();

	return $res;
});

wp_enqueue_style(
	'bootstrap',
	'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css',
	array()
);

wp_enqueue_style(
	'api-ya-form',
	get_template_directory_uri() . '/widgets/ya-api-form/style.css',
	array('bootstrap', 'twenty-twenty-one-style'),
	filemtime(get_theme_file_path('/widgets/ya-api-form/style.css'))
);

wp_enqueue_script(
	'jquery',
	'https://code.jquery.com/jquery-3.7.0.min.js',
	array(),
	wp_get_theme()->get('Version'),
	true
);

wp_enqueue_script(
	'ya-api-form-help',
	get_template_directory_uri() . '/widgets/ya-api-form/script.js',
	array('jquery'),
	filemtime(get_theme_file_path('/widgets/ya-api-form/script.js')),
	true
);

wp_enqueue_script(
	'ya-api-form',
	get_template_directory_uri() . '/widgets/ya-api-form/api.js',
	array('jquery'),
	filemtime(get_theme_file_path('/widgets/ya-api-form/api.js')),
	true
);

add_action( 'wp_enqueue_scripts', function() {
	wp_localize_script( 'ya-api-form', 'ajax', array(
		'url' => admin_url('admin-ajax.php')
	) );
} );