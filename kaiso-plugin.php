<?php

defined('ABSPATH') or die();

/*
Plugin Name:  Kaiso Records
Description:  Kaiso Records WP Plugin
Version:      1.0
Author:       01101101
Text Domain:  krptd
*/

function register_post_types ()
{
  register_post_type('distributor',
    array(
      'labels' => array(
        'name' => __( 'Distributeurs' ),
        'singular_name' => __( 'Distributeur' )
      ),
      'public' => true,
      'has_archive' => false,
    )
  );
}
add_action('init', 'register_post_types');
