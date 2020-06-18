<?php

function ju_enqueue() {
	wp_register_style(
		'ju_google_fonts',
		'https://fonts.googleapis.com/css?family=Advent+Pro:400,500,600'
	);
	wp_register_style(
		'ju_bootstrap',
		get_template_directory_uri(). '/assets/css/bootstrap.css'
	);
	wp_register_style(
		'ju_ionicons',
		get_template_directory_uri(). '/assets/css/ionicons.min.css'
	);
	wp_register_style(
		'ju_animate',
		get_template_directory_uri(). '/assets/css/animate.css'
	);
	wp_register_style(
		'ju_swiper',
		get_template_directory_uri(). '/assets/css/swiper.min.css'
	);
	wp_register_style(
		'ju_application',
		get_template_directory_uri(). '/assets/css/application.css'
	);

	wp_register_script(
		'ju_recaptcha',
		'https://www.google.com/recaptcha/api.js',
		array(), false, false
	);

	wp_enqueue_style('ju_google_fonts');
	wp_enqueue_style('ju_bootstrap');
	wp_enqueue_style('ju_ionicons');
	wp_enqueue_style('ju_animate');
	wp_enqueue_style('ju_swiper');
	wp_enqueue_style('ju_application');
	wp_enqueue_script('ju_recaptcha');

	wp_register_script(
		'ju_easing',
		get_template_directory_uri(). '/assets/js/vendor/jquery.easing.min.js',
		array(), false, true
	);

	wp_register_script(
		'ju_bootstrap',
		get_template_directory_uri(). '/assets/js/vendor/bootstrap.min.js',
		array(), false, true
	);

	wp_register_script(
		'ju_masonry',
		get_template_directory_uri(). '/assets/js/vendor/masonry-3.1.4.js',
		array(), false, true
	);

	wp_register_script(
		'ju_visible',
		get_template_directory_uri(). '/assets/js/vendor/jquery.visible.min.js',
		array(), false, true
	);

	wp_register_script(
		'ju_swiper',
		get_template_directory_uri(). '/assets/js/vendor/swiper.jquery.min.js',
		array(), false, true
	);

	wp_register_script(
		'ju_tweenmax',
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js',
		array(), false, true
	);

	wp_register_script(
		'ju_tweenmax',
		'https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js',
		array(), false, true
	);

	wp_register_script(
		'ju_countto',
		get_template_directory_uri(). '/assets/js/vendor/jquery.countTo.js',
		array(), false, true
	);

	wp_register_script(
		'ju_map',
		'https://maps.googleapis.com/maps/api/js?key=AIzaSyCeuOjOnMsz1H7LwESXlYU1O5WQ-pUxXfU',
		array(), false, true
	);

	wp_register_script(
		'ju_main',
		get_template_directory_uri(). '/assets/js/main-cv.js',
		array(), false, true
	);

	wp_enqueue_script('jquery');
	wp_enqueue_script('ju_easing');
	wp_enqueue_script('ju_bootstrap');
	wp_enqueue_script('ju_masonry');
	wp_enqueue_script('ju_visible');
	wp_enqueue_script('ju_swiper');
	wp_enqueue_script('ju_tweenmax');
	wp_enqueue_script('ju_countto');
	wp_enqueue_script('ju_map');
	wp_enqueue_script('ju_main');

}