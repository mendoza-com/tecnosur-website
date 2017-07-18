<?php

if ( ! function_exists('cozy_edge_title_options_map') ) {

	function cozy_edge_title_options_map() {

		cozy_edge_add_admin_page(
			array(
				'slug' => '_title_page',
				'title' => esc_html__('Title','cozy'),
				'icon' => 'fa fa-list-alt'
			)
		);

		$panel_title = cozy_edge_add_admin_panel(
			array(
				'page' => '_title_page',
				'name' => 'panel_title',
				'title' => esc_html__('Title Settings','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'show_title_area',
				'type' => 'yesno',
				'default_value' => 'yes',
				'label' => esc_html__('Show Title Area','cozy'),
				'description' => esc_html__('This option will enable/disable Title Area','cozy'),
				'parent' => $panel_title,
				'args' => array(
					"dependence" => true,
					"dependence_hide_on_yes" => "",
					"dependence_show_on_yes" => "#edgtf_show_title_area_container"
				)
			)
		);

		$show_title_area_container = cozy_edge_add_admin_container(
			array(
				'parent' => $panel_title,
				'name' => 'show_title_area_container',
				'hidden_property' => 'show_title_area',
				'hidden_value' => 'no'
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_type',
				'type' => 'select',
				'default_value' => 'standard',
				'label' => esc_html__('Title Area Type','cozy'),
				'description' => esc_html__('Choose title type','cozy'),
				'parent' => $show_title_area_container,
				'options' => array(
					'standard' => esc_html__('Standard','cozy'),
					'breadcrumb' => esc_html__('Breadcrumb','cozy'),
				),
				'args' => array(
					"dependence" => true,
					"hide" => array(
						"standard" => "",
						"breadcrumb" => "#edgtf_title_area_type_container"
					),
					"show" => array(
						"standard" => "#edgtf_title_area_type_container",
						"breadcrumb" => ""
					)
				)
			)
		);

		$title_area_type_container = cozy_edge_add_admin_container(
			array(
				'parent' => $show_title_area_container,
				'name' => 'title_area_type_container',
				'hidden_property' => 'title_area_type',
				'hidden_value' => '',
				'hidden_values' => array('breadcrumb'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_enable_breadcrumbs',
				'type' => 'yesno',
				'default_value' => 'no',
				'label' => esc_html__('Enable Breadcrumbs','cozy'),
				'description' => esc_html__('This option will display Breadcrumbs in Title Area','cozy'),
				'parent' => $title_area_type_container,
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_enable_separator',
				'type' => 'yesno',
				'default_value' => 'no',
				'label' => esc_html__('Enable Separator','cozy'),
				'description' => esc_html__('This option will display Separator in Title Area','cozy'),
				'parent' => $show_title_area_container
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_animation',
				'type' => 'select',
				'default_value' => 'no',
				'label' => esc_html__('Animations','cozy'),
				'description' => esc_html__('Choose an animation for Title Area','cozy'),
				'parent' => $show_title_area_container,
				'options' => array(
					'no' => esc_html__('No Animation','cozy'),
					'right-left' => esc_html__('Text right to left','cozy'),
					'left-right' => esc_html__('Text left to right','cozy'),
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_vertial_alignment',
				'type' => 'select',
				'default_value' => 'header_bottom',
				'label' => esc_html__('Vertical Alignment','cozy'),
				'description' => esc_html__('Specify title vertical alignment','cozy'),
				'parent' => $show_title_area_container,
				'options' => array(
					'header_bottom' => esc_html__('From Bottom of Header','cozy'),
					'window_top' => esc_html__('From Window Top','cozy'),
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_content_alignment',
				'type' => 'select',
				'default_value' => 'left',
				'label' => esc_html__('Horizontal Alignment','cozy'),
				'description' => esc_html__('Specify title horizontal alignment','cozy'),
				'parent' => $show_title_area_container,
				'options' => array(
					'left' => esc_html__('Left','cozy'),
					'center' => esc_html__('Center','cozy'),
					'right' => esc_html__('Right','cozy'),
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_text_size',
				'type' => 'select',
				'default_value' => 'large',
				'label' => esc_html__('Text Size','cozy'),
				'description' => esc_html__('Choose a default Title size','cozy'),
				'parent' => $show_title_area_container,
				'options' => array(
					'large'     => esc_html__('Large','cozy'),
					'medium'    => esc_html__('Medium','cozy'),
					'small'     => esc_html__('Small','cozy'),


				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_background_color',
				'type' => 'color',
				'label' => esc_html__('Background Color','cozy'),
				'description' => esc_html__('Choose a background color for Title Area','cozy'),
				'parent' => $show_title_area_container
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_background_image',
				'type' => 'image',
				'label' => esc_html__('Background Image','cozy'),
				'description' => esc_html__('Choose an Image for Title Area','cozy'),
				'parent' => $show_title_area_container
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_background_image_responsive',
				'type' => 'yesno',
				'default_value' => 'no',
				'label' => esc_html__('Background Responsive Image','cozy'),
				'description' => esc_html__('Enabling this option will make Title background image responsive','cozy'),
				'parent' => $show_title_area_container,
				'args' => array(
					"dependence" => true,
					"dependence_hide_on_yes" => "#edgtf_title_area_background_image_responsive_container",
					"dependence_show_on_yes" => ""
				)
			)
		);

		$title_area_background_image_responsive_container = cozy_edge_add_admin_container(
			array(
				'parent' => $show_title_area_container,
				'name' => 'title_area_background_image_responsive_container',
				'hidden_property' => 'title_area_background_image_responsive',
				'hidden_value' => 'yes'
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_background_image_parallax',
				'type' => 'select',
				'default_value' => 'no',
				'label' => esc_html__('Background Image in Parallax','cozy'),
				'description' => esc_html__('Enabling this option will make Title background image parallax','cozy'),
				'parent' => $title_area_background_image_responsive_container,
				'options' => array(
					'no' => esc_html__('No','cozy'),
					'yes' => esc_html__('Yes','cozy'),
					'yes_zoom' => esc_html__('Yes, with zoom out','cozy'),
				)
			)
		);

		cozy_edge_add_admin_field(array(
			'name' => 'title_area_height',
			'type' => 'text',
			'label' => esc_html__('Height','cozy'),
			'description' => esc_html__('Set a height for Title Area','cozy'),
			'parent' => $title_area_background_image_responsive_container,
			'args' => array(
				'col_width' => 2,
				'suffix' => 'px'
			)
		));

		cozy_edge_add_admin_field(
			array(
				'name' => 'title_area_border_bottom',
				'type' => 'yesno',
				'default_value' => 'no',
				'label' => esc_html__('Enable Border Bottom','cozy'),
				'description' => esc_html__('This option will display Border Bottom in Title Area','cozy'),
				'parent' => $show_title_area_container
			)
		);


		$panel_typography = cozy_edge_add_admin_panel(
			array(
				'page' => '_title_page',
				'name' => 'panel_title_typography',
				'title' => esc_html__('Typography','cozy'),
			)
		);

		$group_page_title_styles = cozy_edge_add_admin_group(array(
			'name'			=> 'group_page_title_styles',
			'title'			=> esc_html__('Title','cozy'),
			'description'	=> esc_html__('Define styles for page title','cozy'),
			'parent'		=> $panel_typography
		));

		$row_page_title_styles_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_page_title_styles_1',
			'parent'	=> $group_page_title_styles
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'page_title_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color','cozy'),
			'parent'		=> $row_page_title_styles_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_title_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size','cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_title_styles_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_title_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height','cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_title_styles_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_title_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform','cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_page_title_styles_1
		));

		$row_page_title_styles_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_page_title_styles_2',
			'parent'	=> $group_page_title_styles,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'page_title_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family','cozy'),
			'parent'		=> $row_page_title_styles_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_title_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style','cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_page_title_styles_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_title_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight','cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_page_title_styles_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_title_letter_spacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing','cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_title_styles_2
		));

		$group_page_subtitle_styles = cozy_edge_add_admin_group(array(
			'name'			=> 'group_page_subtitle_styles',
			'title'			=> esc_html__('Subtitle','cozy'),
			'description'	=> esc_html__('Define styles for page subtitle','cozy'),
			'parent'		=> $panel_typography
		));

		$row_page_subtitle_styles_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_page_subtitle_styles_1',
			'parent'	=> $group_page_subtitle_styles
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'page_subtitle_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color','cozy'),
			'parent'		=> $row_page_subtitle_styles_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_subtitle_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size','cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_subtitle_styles_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_subtitle_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height','cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_subtitle_styles_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_subtitle_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform','cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_page_subtitle_styles_1
		));

		$row_page_subtitle_styles_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_page_subtitle_styles_2',
			'parent'	=> $group_page_subtitle_styles,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'page_subtitle_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family','cozy'),
			'parent'		=> $row_page_subtitle_styles_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_subtitle_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style','cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_page_subtitle_styles_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_subtitle_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight','cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_page_subtitle_styles_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_subtitle_letter_spacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing','cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_subtitle_styles_2
		));

		$group_page_breadcrumbs_styles = cozy_edge_add_admin_group(array(
			'name'			=> 'group_page_breadcrumbs_styles',
			'title'			=> esc_html__('Breadcrumbs','cozy'),
			'description'	=> esc_html__('Define styles for page breadcrumbs','cozy'),
			'parent'		=> $panel_typography
		));

		$row_page_breadcrumbs_styles_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_page_breadcrumbs_styles_1',
			'parent'	=> $group_page_breadcrumbs_styles
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'page_breadcrumb_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color','cozy'),
			'parent'		=> $row_page_breadcrumbs_styles_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_breadcrumb_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size','cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_breadcrumbs_styles_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_breadcrumb_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height','cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_breadcrumbs_styles_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_breadcrumb_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform','cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_page_breadcrumbs_styles_1
		));

		$row_page_breadcrumbs_styles_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_page_breadcrumbs_styles_2',
			'parent'	=> $group_page_breadcrumbs_styles,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'page_breadcrumb_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family','cozy'),
			'parent'		=> $row_page_breadcrumbs_styles_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_breadcrumb_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style','cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_page_breadcrumbs_styles_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_breadcrumb_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight','cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_page_breadcrumbs_styles_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_breadcrumb_letter_spacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing','cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_breadcrumbs_styles_2
		));

		$row_page_breadcrumbs_styles_3 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_page_breadcrumbs_styles_3',
			'parent'	=> $group_page_breadcrumbs_styles,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'page_breadcrumb_hovercolor',
			'default_value'	=> '',
			'label'			=> esc_html__('Hover/Active Color','cozy'),
			'parent'		=> $row_page_breadcrumbs_styles_3
		));

	}

	add_action( 'cozy_edge_options_map', 'cozy_edge_title_options_map', 6);

}