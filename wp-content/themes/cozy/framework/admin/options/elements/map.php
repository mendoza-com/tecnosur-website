<?php

if ( ! function_exists('cozy_edge_load_elements_map') ) {
	/**
	 * Add Elements option page for shortcodes
	 */
	function cozy_edge_load_elements_map() {

		cozy_edge_add_admin_page(
			array(
				'slug' => '_elements_page',
				'title' => esc_html__('Elements', 'cozy'),
				'icon' => 'fa fa-header'
			)
		);

		do_action( 'cozy_edge_options_elements_map' );

	}

	add_action('cozy_edge_options_map', 'cozy_edge_load_elements_map', 11);

}