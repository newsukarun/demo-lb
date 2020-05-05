<?php
function gb_replace_editor( $allow, $post ) {
	if ( ! $allow && 'liveblog' === $post->post_type ) {
		return true;
	}

	return $allow;
}

add_action( 'use_block_editor_for_post', 'gb_replace_editor', 1000, 2 );

function liveblog_posttype() {

	register_post_type( 'liveblog',
		// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Liveblog Post' ),
				'singular_name' => __( 'LiveBlog' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'liveblog'),
			'show_in_rest' => true,

		)
	);
}
add_action( 'init', 'liveblog_posttype' );