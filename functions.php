<?php

// include PHP files
require get_template_directory() . '/includes/metaboxes.php';
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/enqueue.php';
require get_template_directory() . '/includes/security.php';
require_once('includes/class-wp-bootstrap-navwalker.php');

// theme support
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// register menus
register_nav_menus( array(
	'header_menu' => __( 'Header Menu' ),
	'footer_menu' => __( 'Footer Menu' )
));

// custom pagination
function custom_pagination( $posts ) {

	$links = paginate_links(
	  array(
		'mid_size' => 2,
		'current' => max( 1, get_query_var('paged') ),
		'total' => $posts->max_num_pages,
		'prev_next' => true,
		'prev_text' => __( '&larr; Prev' ),
		'next_text' => __( 'Next &rarr;' ),
		'type'      => 'array',
	  )
	);
	?>
	<nav aria-label="Posts navigation">
	  <ul class="pagination">
		<?php
		  if ( $links ) {
			foreach ( $links as $key => $link ) { ?>
			  <li class="page-item <?php echo strpos( $link, 'current' ) ? 'active' : '' ?>">
				  <?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>
			  </li>
		<?php
			}
		  }
		?>
	  </ul>
	</nav>
	<?php
  }
