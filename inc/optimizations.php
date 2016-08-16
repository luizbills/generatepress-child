<?php

// Remove Font Awesome
add_filter( 'generate_fontawesome_essentials', 'gpchild_fontawesome_essentials' );
function gpchild_fontawesome_essentials() {
    return true;
}

// Remove Query Strings
add_filter( 'style_loader_src', 'gpchild_remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'gpchild_remove_cssjs_ver', 10, 2 );
function gpchild_remove_cssjs_ver( $src ) {
	return strpos( $src, '?ver=' ) ? remove_query_arg( 'ver', $src ) : $src;
}

// Remove Emojis
add_action( 'init', 'generate_disable_wp_emojicons' );
function generate_disable_wp_emojicons() {
	// all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
}
