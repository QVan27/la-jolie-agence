<?php 
require get_template_directory() . '/inc/general.php';
require get_template_directory() . '/inc/func.php';

// Custom 

// Admin 

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/extra/template-tags.php';
require get_template_directory() . '/inc/extra/template-functions.php';

// Hide Admin Bar
add_filter( 'show_admin_bar', '__return_false' );