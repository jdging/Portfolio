<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<?php esc_html_e( 'We hope you\'re having a great time using the Qi Addons for Elementor', 'qi-addons-for-elementor' ); ?> <br />
<?php
printf(
	// translators: 1. plugin review link.
	esc_html__( 'Leave a %s let us know about your experience!', 'qi-addons-for-elementor' ),
	'<a href="https://wordpress.org/plugins/qi-addons-for-elementor/#reviews">' . esc_html__( 'rating', 'qi-addons-for-elementor' ) . '</a>'
);
