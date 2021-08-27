<?php
/**
 * Set up the theme options and styles.
 *
 * @package oddEvan\Hecksite
 */

namespace oddEvan\Hecksite;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support for post thumbnails.
 */
function hecksite_theme_setup() {
	/**
	 * Add default posts and comments RSS feed links to <head>.
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for post thumbnails and featured images.
	 */
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'editor-styles' );

	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\hecksite_theme_setup' );

/**
 * Enqueue theme scripts and styles.
 */
function hecksite_theme_scripts() {
	wp_enqueue_style( 'hecksite-style', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ) );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\hecksite_theme_scripts' );
