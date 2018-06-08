<?php
//show bootstrap walker on Theme
require_once('class-wp-bootstrap-navwalker.php');

// Theme navbarResponsive function
function wp_theme_setup(){
  register_nav_menus( array(
  	'primary' => __( 'Primary Menu', 'THEMENAME' ),
    'secondary' => __('Secondary Menu', 'SUBITEMS'),
  ) );
}
//action hook to load navbar after theme loads
add_action('after_setup_theme','wp_theme_setup');
