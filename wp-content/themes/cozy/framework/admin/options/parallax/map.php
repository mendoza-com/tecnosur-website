<?php

if ( ! function_exists('cozy_edge_parallax_options_map') ) {
	/**
	 * Parallax options page
	 */
	function cozy_edge_parallax_options_map()
	{
		$panel_parallax = cozy_edge_add_admin_panel(
			array(
				'page'  => '_elements_page',
				'name'  => 'panel_parallax',
				'title' => esc_html__('Parallax', 'cozy')
			)
		);

		cozy_edge_add_admin_field(array(
			'type'			=> 'onoff',
			'name'			=> 'parallax_on_off',
			'default_value'	=> 'off',
			'label'			=> esc_html__('Parallax on touch devices', 'cozy'),
			'description'	=> esc_html__('Enabling this option will allow parallax on touch devices', 'cozy'),
			'parent'		=> $panel_parallax
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'text',
			'name'			=> 'parallax_min_height',
			'default_value'	=> '400',
			'label'			=> esc_html__('Parallax Min Height', 'cozy'),
			'description'	=> esc_html__('Set a minimum height for parallax images on small displays (phones, tablets, etc.)', 'cozy'),
			'args'			=> array(
				'col_width'	=> 3,
				'suffix'	=> 'px'
			),
			'parent'		=> $panel_parallax
		));

	}

	add_action( 'cozy_edge_options_elements_map', 'cozy_edge_parallax_options_map');

}