<?php

if ( ! function_exists('cozy_edge_sidebar_options_map') ) {

	function cozy_edge_sidebar_options_map() {

		cozy_edge_add_admin_page(
			array(
				'slug'  => '_sidebar_page',
				'title' => esc_html__('Sidebar', 'cozy'),
				'icon'  => 'fa fa-indent'
			)
		);

		$panel_widgets = cozy_edge_add_admin_panel(
			array(
				'page'  => '_sidebar_page',
				'name'  => 'panel_widgets',
				'title' => esc_html__('Widgets', 'cozy')
			)
		);

		/**
		 * Navigation style
		 */
		cozy_edge_add_admin_field(array(
			'type'			=> 'color',
			'name'			=> 'sidebar_background_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Sidebar Background Color', 'cozy'),
			'description'	=> esc_html__('Choose background color for sidebar', 'cozy'),
			'parent'		=> $panel_widgets
		));

		$group_sidebar_padding = cozy_edge_add_admin_group(array(
			'name'		=> 'group_sidebar_padding',
			'title'		=> esc_html__('Padding', 'cozy'),
			'parent'	=> $panel_widgets
		));

		$row_sidebar_padding = cozy_edge_add_admin_row(array(
			'name'		=> 'row_sidebar_padding',
			'parent'	=> $group_sidebar_padding
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'sidebar_padding_top',
			'default_value'	=> '',
			'label'			=> esc_html__('Top Padding', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_sidebar_padding
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'sidebar_padding_right',
			'default_value'	=> '',
			'label'			=> esc_html__('Right Padding', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_sidebar_padding
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'sidebar_padding_bottom',
			'default_value'	=> '',
			'label'			=> esc_html__('Bottom Padding', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_sidebar_padding
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'sidebar_padding_left',
			'default_value'	=> '',
			'label'			=> esc_html__('Left Padding', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_sidebar_padding
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'select',
			'name'			=> 'sidebar_alignment',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Alignment', 'cozy'),
			'description'	=> esc_html__('Choose text aligment', 'cozy'),
			'options'		=> array(
				'left' => esc_html__('Left', 'cozy'),
				'center' => esc_html__('Center', 'cozy'),
				'right' => esc_html__('Right', 'cozy')
			),
			'parent'		=> $panel_widgets
		));

	}

	add_action( 'cozy_edge_options_map', 'cozy_edge_sidebar_options_map', 9);

}