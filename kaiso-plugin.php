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
      'supports' => array('title', 'thumbnail'),
      ' register_meta_box_cb' => 'distributor_register_meta_box',
    )
  );
}
add_action('init', 'register_post_types');

function distributor_register_meta_box ($post)
{
	add_meta_box('link-meta-box', __('Lien externe'), 'distributor_link_meta_box', 'distributor');
}

function distributor_link_meta_box ()
{
	echo 'link here';
}
