<?php
/*
 * Plugin Name: Test Stuff
 */

function sample_admin_notice__success() {
	?>
	<div class="notice notice-success is-dismissible">
		<p><?php _e( 'Hello!', 'sample-text-domain' ); ?></p>
	</div>
	<?php
}
add_action( 'admin_notices', 'sample_admin_notice__success' );