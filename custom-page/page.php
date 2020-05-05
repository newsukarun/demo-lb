<?php
function lb_admin_menu() {
	add_menu_page(
		__( 'Liveblog Page', 'my-textdomain' ),
		__( 'Liveblog Page', 'my-textdomain' ),
		'manage_options',
		'liveblog-page',
		'lb_admin_page_contents',
		'dashicons-schedule',
		3
	);
}

add_action( 'admin_menu', 'lb_admin_menu' );


function lb_admin_page_contents() {
	$post_id = filter_input( INPUT_GET, 'post', FILTER_SANITIZE_NUMBER_INT ); //@phpcs:ignore
	if ( empty( $post_id ) ) {
		?>
		<h1>
			<?php esc_html_e( 'Welcome to my custom admin page. Please Used post id ```&post={post_id}``` in screen', 'my-plugin-textdomain' ); ?>
		</h1>
		<?php
		die();
	}

	global $post, $post_type, $post_type_object;
	$post_ID          = $post_id;
	$post             = get_post( $post_id );
	$post_type        = $post->post_type;
	$post_type_object = get_post_type_object( $post_type );

	/**
	 * Setup post data for Gutenberg to work.
	 */
	setup_postdata( $post );
	require_once ABSPATH . '/wp-admin/edit-form-blocks.php';
	wp_reset_postdata();
}