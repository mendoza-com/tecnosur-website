<?php

if ( ! function_exists('cozy_edge_mobile_header_options_map') ) {

	function cozy_edge_mobile_header_options_map() {

		cozy_edge_add_admin_page(array(
			'slug'  => '_mobile_header',
			'title' => esc_html__('Mobile Header', 'cozy'),
			'icon'  => 'fa fa-mobile'
		));

		$panel_mobile_header = cozy_edge_add_admin_panel(array(
			'title' => esc_html__('Mobile header', 'cozy'),
			'name'  => 'panel_mobile_header',
			'page'  => '_mobile_header'
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_header_height',
			'type'        => 'text',
			'label'       => esc_html__('Mobile Header Height', 'cozy'),
			'description' => esc_html__('Enter height for mobile header in pixels', 'cozy'),
			'parent'      => $panel_mobile_header,
			'args'        => array(
				'col_width' => 3,
				'suffix'    => 'px'
			)
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_header_background_color',
			'type'        => 'color',
			'label'       => esc_html__('Mobile Header Background Color', 'cozy'),
			'description' => esc_html__('Choose color for mobile header', 'cozy'),
			'parent'      => $panel_mobile_header
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_menu_background_color',
			'type'        => 'color',
			'label'       => esc_html__('Mobile Menu Background Color', 'cozy'),
			'description' => esc_html__('Choose color for mobile menu', 'cozy'),
			'parent'      => $panel_mobile_header
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_menu_separator_color',
			'type'        => 'color',
			'label'       => esc_html__('Mobile Menu Item Separator Color', 'cozy'),
			'description' => esc_html__('Choose color for mobile menu horizontal separators', 'cozy'),
			'parent'      => $panel_mobile_header
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_logo_height',
			'type'        => 'text',
			'label'       => esc_html__('Logo Height For Mobile Header', 'cozy'),
			'description' => esc_html__('Define logo height for screen size smaller than 1000px', 'cozy'),
			'parent'      => $panel_mobile_header,
			'args'        => array(
				'col_width' => 3,
				'suffix'    => 'px'
			)
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_logo_height_phones',
			'type'        => 'text',
			'label'       => esc_html__('Logo Height For Mobile Devices', 'cozy'),
			'description' => esc_html__('Define logo height for screen size smaller than 480px', 'cozy'),
			'parent'      => $panel_mobile_header,
			'args'        => array(
				'col_width' => 3,
				'suffix'    => 'px'
			)
		));

		cozy_edge_add_admin_section_title(array(
			'parent' => $panel_mobile_header,
			'name'   => 'mobile_header_fonts_title',
			'title'  => esc_html__('Typography', 'cozy')
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_text_color',
			'type'        => 'color',
			'label'       => esc_html__('Navigation Text Color', 'cozy'),
			'description' => esc_html__('Define color for mobile navigation text', 'cozy'),
			'parent'      => $panel_mobile_header
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_text_hover_color',
			'type'        => 'color',
			'label'       => esc_html__('Navigation Hover/Active Color', 'cozy'),
			'description' => esc_html__('Define hover/active color for mobile navigation text', 'cozy'),
			'parent'      => $panel_mobile_header
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_font_family',
			'type'        => 'font',
			'label'       => esc_html__('Navigation Font Family', 'cozy'),
			'description' => esc_html__('Define font family for mobile navigation text', 'cozy'),
			'parent'      => $panel_mobile_header
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_font_size',
			'type'        => 'text',
			'label'       => esc_html__('Navigation Font Size', 'cozy'),
			'description' => esc_html__('Define font size for mobile navigation text', 'cozy'),
			'parent'      => $panel_mobile_header,
			'args'        => array(
				'col_width' => 3,
				'suffix'    => 'px'
			)
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_line_height',
			'type'        => 'text',
			'label'       => esc_html__('Navigation Line Height', 'cozy'),
			'description' => esc_html__('Define line height for mobile navigation text', 'cozy'),
			'parent'      => $panel_mobile_header,
			'args'        => array(
				'col_width' => 3,
				'suffix'    => 'px'
			)
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_text_transform',
			'type'        => 'select',
			'label'       => esc_html__('Navigation Text Transform', 'cozy'),
			'description' => esc_html__('Define text transform for mobile navigation text', 'cozy'),
			'parent'      => $panel_mobile_header,
			'options'     => cozy_edge_get_text_transform_array(true)
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_font_style',
			'type'        => 'select',
			'label'       => esc_html__('Navigation Font Style', 'cozy'),
			'description' => esc_html__('Define font style for mobile navigation text', 'cozy'),
			'parent'      => $panel_mobile_header,
			'options'     => cozy_edge_get_font_style_array(true)
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_font_weight',
			'type'        => 'select',
			'label'       => esc_html__('Navigation Font Weight', 'cozy'),
			'description' => esc_html__('Define font weight for mobile navigation text', 'cozy'),
			'parent'      => $panel_mobile_header,
			'options'     => cozy_edge_get_font_weight_array(true)
		));

		cozy_edge_add_admin_section_title(array(
			'name' => 'mobile_opener_panel',
			'parent' => $panel_mobile_header,
			'title' => esc_html__('Mobile Menu Opener', 'cozy')
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_icon_pack',
			'type'        => 'select',
			'label'       => esc_html__('Mobile Navigation Icon Pack', 'cozy'),
			'default_value' => 'font_awesome',
			'description' => esc_html__('Choose icon pack for mobile navigation icon', 'cozy'),
			'parent'      => $panel_mobile_header,
			'options'     => cozy_edge_icon_collections()->getIconCollectionsExclude(array('linea_icons', 'simple_line_icons'))
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_icon_color',
			'type'        => 'color',
			'label'       => esc_html__('Mobile Navigation Icon Color', 'cozy'),
			'description' => esc_html__('Choose color for icon header', 'cozy'),
			'parent'      => $panel_mobile_header
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_icon_hover_color',
			'type'        => 'color',
			'label'       => esc_html__('Mobile Navigation Icon Hover Color', 'cozy'),
			'description' => esc_html__('Choose hover color for mobile navigation icon ', 'cozy'),
			'parent'      => $panel_mobile_header
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'mobile_icon_size',
			'type'        => 'text',
			'label'       => esc_html__('Mobile Navigation Icon size', 'cozy'),
			'description' => esc_html__('Choose size for mobile navigation icon ', 'cozy'),
			'parent'      => $panel_mobile_header,
			'args' => array(
				'col_width' => 3,
				'suffix' => 'px'
			)
		));

	}

	add_action( 'cozy_edge_options_map', 'cozy_edge_mobile_header_options_map', 5);

}