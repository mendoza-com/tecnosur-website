<?php

if ( ! function_exists('cozy_edge_reset_options_map') ) {
	/**
	 * Reset options panel
	 */
	function cozy_edge_reset_options_map() {

		cozy_edge_add_admin_page(
			array(
				'slug'  => '_reset_page',
				'title' => esc_html__('Reset', 'cozy'),
				'icon'  => 'fa fa-retweet'
			)
		);

		$panel_reset = cozy_edge_add_admin_panel(
			array(
				'page'  => '_reset_page',
				'name'  => 'panel_reset',
				'title' => esc_html__('Reset', 'cozy')
			)
		);

		cozy_edge_add_admin_field(array(
			'type'	=> 'yesno',
			'name'	=> 'reset_to_defaults',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Reset to Defaults', 'cozy'),
			'description'	=> esc_html__('This option will reset all Edge Options values to defaults', 'cozy'),
			'parent'		=> $panel_reset
		));

	}

	add_action( 'cozy_edge_options_map', 'cozy_edge_reset_options_map', 21 );

}