<?php
/*
	Disable the default theme stylesheet (style.css)
	- When not used, prevents 1 file request.
*/
add_action( 'wp_enqueue_scripts', 'gpchild_remove_default_style', 20 );
function gpchild_remove_default_style() {
    wp_dequeue_style( 'generate-child' );
    wp_deregister_style( 'generate-child' );
}
