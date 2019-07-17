<?php

/**
 * Add your metaboxes here
 */

// Homepage
add_action( 'cmb2_admin_init', 'cmb2_homepage' );
function cmb2_homepage() {
	$cmb = new_cmb2_box( array(
		'id'            => 'homepage',
		'title'         => __( 'Homepage', 'cmb2' ),
    'object_types'  => array( 'page', ), // Post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'page-templates/page-homepage.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
  ) );
  $cmb->add_field( array(
    'name' => 'Title',
    'id'   => 'title', 
    'type' => 'text',
  ) );
  $cmb->add_field( array(
		'name'       => __( 'Text', 'cmb2' ),
		'id'         => 'text',
    'type'       => 'wysiwyg',
    'options' => array(
      'wpautop' => false, // use wpautop?
      'media_buttons' => false, // show insert/upload button(s)
      'teeny' => false, // output the minimal editor config used in Press This
      'tinymce' => array(
        'height' => 30,
        'toolbar1' => 'bold',
      ), // load TinyMCE, can be used to pass settings directly to TinyMCE using an array()
      'quicktags' => false // load Quicktags, can be used to pass settings directly to Quicktags using an array()
    ),
  ) );
  $cmb->add_field( array(
    'name' => 'URL',
    'id'   => 'link', 
    'type' => 'text_url',
  ) );
}