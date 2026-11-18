<?php
/**
 * Stepper: one page, which says what the site is, in the styles of 19h47's small apps.
 *
 * @package Stepper
 */

add_action(
	'after_setup_theme',
	static function (): void {
		add_theme_support( 'title-tag' );
	}
);

add_action(
	'wp_enqueue_scripts',
	static function (): void {
		$version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style( 'stepper-app-style', get_theme_file_uri( 'app-style.css' ), array(), $version );
		wp_enqueue_style( 'stepper', get_stylesheet_uri(), array( 'stepper-app-style' ), $version );

		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'classic-theme-styles' );
	}
);

/*
 * No blocks and no emoji on the page: the styles of core for them, outside the layers, would come before those of the
 * theme.
 */
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_enqueue_scripts', 'wp_enqueue_emoji_styles' );

/*
 * The site has one page: any other URL, such as a run, a book or a search, is not found. The files WordPress
 * serves itself, robots.txt, the favicon and the feeds, are left to it.
 */
add_action(
	'template_redirect',
	static function (): void {
		if ( is_front_page() || is_robots() || is_favicon() || is_feed() ) {
			return;
		}

		global $wp_query;

		$wp_query->set_404();
		status_header( 404 );
		nocache_headers();
	}
);
