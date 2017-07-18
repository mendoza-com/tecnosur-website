<?php

if ( ! function_exists('cozy_edge_fonts_options_map') ) {
	/**
	 * Font options page
	 */
	function cozy_edge_fonts_options_map() {

		cozy_edge_add_admin_page(
			array(
				'slug' => '_fonts_page',
				'title' => esc_html__('Fonts', 'cozy'),
				'icon' => 'fa fa-font'
			)
		);

		/**
		 * Headings
		 */
		$panel_headings = cozy_edge_add_admin_panel(
			array(
				'page' => '_fonts_page',
				'name' => 'panel_headings',
				'title' => esc_html__('Headings', 'cozy')
			)
		);

		//H1
		$group_heading_h1 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_h1',
			'title'			=> esc_html__('H1 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for H1 heading', 'cozy'),
			'parent'		=> $panel_headings
		));

		$row_heading_h1_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h1_1',
			'parent'	=> $group_heading_h1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'h1_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_h1_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h1_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h1_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h1_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h1_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h1_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_h1_1
		));

		$row_heading_h1_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h1_2',
			'parent'	=> $group_heading_h1,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'h1_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_h1_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h1_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_h1_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h1_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_h1_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h1_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h1_2
		));

		//H2
		$group_heading_h2 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_h2',
			'title'			=> esc_html__('H2 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for H2 heading', 'cozy'),
			'parent'		=> $panel_headings
		));

		$row_heading_h2_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h2_1',
			'parent'	=> $group_heading_h2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'h2_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_h2_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h2_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h2_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h2_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h2_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h2_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_h2_1
		));

		$row_heading_h2_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h2_2',
			'parent'	=> $group_heading_h2,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'h2_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_h2_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h2_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_h2_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h2_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_h2_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h2_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h2_2
		));

		//H3
		$group_heading_h3 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_h3',
			'title'			=> esc_html__('H3 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for H3 heading', 'cozy'),
			'parent'		=> $panel_headings
		));

		$row_heading_h3_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h3_1',
			'parent'	=> $group_heading_h3
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'h3_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_h3_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h3_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h3_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h3_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h3_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h3_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_h3_1
		));

		$row_heading_h3_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h3_2',
			'parent'	=> $group_heading_h3,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'h3_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_h3_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h3_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_h3_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h3_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_h3_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h3_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h3_2
		));

		//H4
		$group_heading_h4 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_h4',
			'title'			=> esc_html__('H4 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for H4 heading', 'cozy'),
			'parent'		=> $panel_headings
		));

		$row_heading_h4_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h4_1',
			'parent'	=> $group_heading_h4
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'h4_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_h4_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h4_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h4_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h4_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h4_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h4_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_h4_1
		));

		$row_heading_h4_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h4_2',
			'parent'	=> $group_heading_h4,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'h4_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_h4_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h4_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_h4_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h4_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_h4_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h4_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h4_2
		));

		//H5
		$group_heading_h5 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_h5',
			'title'			=> esc_html__('H5 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for H5 heading', 'cozy'),
			'parent'		=> $panel_headings
		));

		$row_heading_h5_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h5_1',
			'parent'	=> $group_heading_h5
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'h5_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_h5_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h5_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h5_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h5_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h5_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h5_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_h5_1
		));

		$row_heading_h5_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h5_2',
			'parent'	=> $group_heading_h5,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'h5_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_h5_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h5_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_h5_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h5_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_h5_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h5_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h5_2
		));

		//H6
		$group_heading_h6 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_h6',
			'title'			=> esc_html__('H6 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for h6 heading', 'cozy'),
			'parent'		=> $panel_headings
		));

		$row_heading_h6_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h6_1',
			'parent'	=> $group_heading_h6
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'h6_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_h6_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h6_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h6_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h6_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h6_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h6_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_h6_1
		));

		$row_heading_h6_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_h6_2',
			'parent'	=> $group_heading_h6,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'h6_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_h6_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h6_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_h6_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'h6_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_h6_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h6_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_h6_2
		));

		/**
		 * Headings
		 */
		$panel_predef_headings = cozy_edge_add_admin_panel(
			array(
				'page' => '_fonts_page',
				'name' => 'panel_predef_headings',
				'title' => esc_html__('Predefined Headings Style', 'cozy')
			)
		);

		//predefined_h1
		$group_heading_predefined_h1 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_predefined_h1',
			'title'			=> esc_html__('Predefined H1 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for Predefined H1 Heading', 'cozy'),
			'parent'		=> $panel_predef_headings
		));

		$row_heading_predefined_h1_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h1_1',
			'parent'	=> $group_heading_predefined_h1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'predefined_h1_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_predefined_h1_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h1_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h1_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h1_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h1_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h1_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_predefined_h1_1
		));

		$row_heading_predefined_h1_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h1_2',
			'parent'	=> $group_heading_predefined_h1,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'predefined_h1_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_predefined_h1_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h1_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_predefined_h1_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h1_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_predefined_h1_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h1_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h1_2
		));

		//predefined_h2
		$group_heading_predefined_h2 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_predefined_h2',
			'title'			=> esc_html__('Predefined H2 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for Predefined H2 Heading', 'cozy'),
			'parent'		=> $panel_predef_headings
		));

		$row_heading_predefined_h2_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h2_1',
			'parent'	=> $group_heading_predefined_h2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'predefined_h2_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_predefined_h2_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h2_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h2_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h2_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h2_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h2_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_predefined_h2_1
		));

		$row_heading_predefined_h2_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h2_2',
			'parent'	=> $group_heading_predefined_h2,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'predefined_h2_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_predefined_h2_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h2_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_predefined_h2_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h2_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_predefined_h2_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h2_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h2_2
		));

		//predefined_h3
		$group_heading_predefined_h3 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_predefined_h3',
			'title'			=> esc_html__('Predefined H3 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for Predefined H3 Heading', 'cozy'),
			'parent'		=> $panel_predef_headings
		));

		$row_heading_predefined_h3_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h3_1',
			'parent'	=> $group_heading_predefined_h3
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'predefined_h3_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_predefined_h3_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h3_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h3_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h3_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h3_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h3_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_predefined_h3_1
		));

		$row_heading_predefined_h3_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h3_2',
			'parent'	=> $group_heading_predefined_h3,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'predefined_h3_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_predefined_h3_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h3_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_predefined_h3_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h3_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_predefined_h3_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h3_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h3_2
		));

		//predefined_h4
		$group_heading_predefined_h4 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_predefined_h4',
			'title'			=> esc_html__('Predefined H4 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for Predefined H4 Heading', 'cozy'),
			'parent'		=> $panel_predef_headings
		));

		$row_heading_predefined_h4_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h4_1',
			'parent'	=> $group_heading_predefined_h4
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'predefined_h4_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_predefined_h4_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h4_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h4_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h4_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h4_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h4_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_predefined_h4_1
		));

		$row_heading_predefined_h4_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h4_2',
			'parent'	=> $group_heading_predefined_h4,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'predefined_h4_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_predefined_h4_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h4_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_predefined_h4_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h4_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_predefined_h4_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h4_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h4_2
		));

		//predefined_h5
		$group_heading_predefined_h5 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_predefined_h5',
			'title'			=> esc_html__('Predefined H5 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for Predefined H5 Heading', 'cozy'),
			'parent'		=> $panel_predef_headings
		));

		$row_heading_predefined_h5_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h5_1',
			'parent'	=> $group_heading_predefined_h5
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'predefined_h5_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_predefined_h5_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h5_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h5_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h5_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h5_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h5_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_predefined_h5_1
		));

		$row_heading_predefined_h5_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h5_2',
			'parent'	=> $group_heading_predefined_h5,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'predefined_h5_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_predefined_h5_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h5_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_predefined_h5_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h5_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_predefined_h5_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h5_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h5_2
		));

		//predefined_h6
		$group_heading_predefined_h6 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_heading_predefined_h6',
			'title'			=> esc_html__('Predefined H6 Style', 'cozy'),
			'description'	=> esc_html__('Define styles for Predefined H6 Heading', 'cozy'),
			'parent'		=> $panel_predef_headings
		));

		$row_heading_predefined_h6_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h6_1',
			'parent'	=> $group_heading_predefined_h6
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'predefined_h6_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_heading_predefined_h6_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h6_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h6_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h6_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h6_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h6_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_heading_predefined_h6_1
		));

		$row_heading_predefined_h6_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_heading_predefined_h6_2',
			'parent'	=> $group_heading_predefined_h6,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'predefined_h6_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_heading_predefined_h6_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h6_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_heading_predefined_h6_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'predefined_h6_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_heading_predefined_h6_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'predefined_h6_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_heading_predefined_h6_2
		));

		/**
		 * Headings Responsive (Tablet Portrait View)
		 */
		$panel_responsive_headings = cozy_edge_add_admin_panel(
			array(
				'page' => '_fonts_page',
				'name' => 'panel_responsive_headings',
				'title' => esc_html__('Headings Responsive (Tablet Portrait View)', 'cozy')
			)
		);

		//H1
		$group_responsive_heading_h1 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive_heading_h1',
			'title'			=> esc_html__('H1 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for H1 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings
		));

		$row_responsive_heading_h1_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive_heading_h1_1',
			'parent'	=> $group_responsive_heading_h1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h1_responsive_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h1_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h1_responsive_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h1_1
		));

		//H2
		$group_responsive_heading_h2 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive_heading_h2',
			'title'			=> esc_html__('H2 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for H2 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings
		));

		$row_responsive_heading_h2_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive_heading_h2_1',
			'parent'	=> $group_responsive_heading_h2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h2_responsive_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h2_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h2_responsive_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h2_1
		));

		//H3
		$group_responsive_heading_h3 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive_heading_h3',
			'title'			=> esc_html__('H3 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for H3 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings
		));

		$row_responsive_heading_h3_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive_heading_h3_1',
			'parent'	=> $group_responsive_heading_h3
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h3_responsive_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h3_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h3_responsive_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h3_1
		));

		//H4
		$group_responsive_heading_h4 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive_heading_h4',
			'title'			=> esc_html__('H4 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for H4 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings
		));

		$row_responsive_heading_h4_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive_heading_h4_1',
			'parent'	=> $group_responsive_heading_h4
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h4_responsive_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h4_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h4_responsive_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h4_1
		));

		//H5
		$group_responsive_heading_h5 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive_heading_h5',
			'title'			=> esc_html__('H5 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for H5 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings
		));

		$row_responsive_heading_h5_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive_heading_h5_1',
			'parent'	=> $group_responsive_heading_h5
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h5_responsive_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h5_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h5_responsive_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h5_1
		));

		//H6
		$group_responsive_heading_h6 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive_heading_h6',
			'title'			=> esc_html__('H6 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for h6 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings
		));

		$row_responsive_heading_h6_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive_heading_h6_1',
			'parent'	=> $group_responsive_heading_h6
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h6_responsive_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h6_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h6_responsive_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive_heading_h6_1
		));

		/**
		 * Headings Responsive (Mobile Devices)
		 */
		$panel_responsive_headings2 = cozy_edge_add_admin_panel(
			array(
				'page' => '_fonts_page',
				'name' => 'panel_responsive_headings2',
				'title' => esc_html__('Headings Responsive (Mobile Devices)', 'cozy')
			)
		);

		//H1
		$group_responsive2_heading_h1 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive2_heading_h1',
			'title'			=> esc_html__('H1 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for H1 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings2
		));

		$row_responsive2_heading_h1_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive2_heading_h1_1',
			'parent'	=> $group_responsive2_heading_h1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h1_responsive_fontsize2',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h1_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h1_responsive_lineheight2',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h1_1
		));

		//H2
		$group_responsive2_heading_h2 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive2_heading_h2',
			'title'			=> esc_html__('H2 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for H2 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings2
		));

		$row_responsive2_heading_h2_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive2_heading_h2_1',
			'parent'	=> $group_responsive2_heading_h2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h2_responsive_fontsize2',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h2_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h2_responsive_lineheight2',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h2_1
		));

		//H3
		$group_responsive2_heading_h3 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive2_heading_h3',
			'title'			=> esc_html__('H3 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for H3 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings2
		));

		$row_responsive2_heading_h3_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive2_heading_h3_1',
			'parent'	=> $group_responsive2_heading_h3
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h3_responsive_fontsize2',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h3_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h3_responsive_lineheight2',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h3_1
		));

		//H4
		$group_responsive2_heading_h4 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive2_heading_h4',
			'title'			=> esc_html__('H4 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for H4 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings2
		));

		$row_responsive2_heading_h4_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive2_heading_h4_1',
			'parent'	=> $group_responsive2_heading_h4
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h4_responsive_fontsize2',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h4_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h4_responsive_lineheight2',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h4_1
		));

		//H5
		$group_responsive2_heading_h5 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive2_heading_h5',
			'title'			=> esc_html__('H5 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for H5 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings2
		));

		$row_responsive2_heading_h5_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive2_heading_h5_1',
			'parent'	=> $group_responsive2_heading_h5
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h5_responsive_fontsize2',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h5_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h5_responsive_lineheight2',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h5_1
		));

		//H6
		$group_responsive2_heading_h6 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_responsive2_heading_h6',
			'title'			=> esc_html__('H6 Responsive Style', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for h6 heading', 'cozy'),
			'parent'		=> $panel_responsive_headings2
		));

		$row_responsive2_heading_h6_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_responsive2_heading_h6_1',
			'parent'	=> $group_responsive2_heading_h6
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h6_responsive_fontsize2',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h6_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'h6_responsive_lineheight2',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_responsive2_heading_h6_1
		));

		/**
		 * Text
		 */
		$panel_text = cozy_edge_add_admin_panel(
			array(
				'page' => '_fonts_page',
				'name' => 'panel_text',
				'title' => esc_html__('Text', 'cozy')
			)
		);

		$group_text = cozy_edge_add_admin_group(array(
			'name'			=> 'group_text',
			'title'			=> esc_html__('Paragraph', 'cozy'),
			'description'	=> esc_html__('Define styles for paragraph text', 'cozy'),
			'parent'		=> $panel_text
		));

		$row_text_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_text_1',
			'parent'	=> $group_text
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'text_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Color', 'cozy'),
			'parent'		=> $row_text_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'text_fontsize',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_text_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'text_lineheight',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_text_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'text_texttransform',
			'default_value'	=> '',
			'label'			=> esc_html__('Text Transform', 'cozy'),
			'options'		=> cozy_edge_get_text_transform_array(),
			'parent'		=> $row_text_1
		));

		$group_text_res1 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_text_res1',
			'title'			=> esc_html__('Paragraph Responsive (Table Portrait View)', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for paragraph text for table devices - portrait view', 'cozy'),
			'parent'		=> $panel_text
		));

		$row_res_text_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_text_1',
			'parent'	=> $group_text_res1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'text_fontsize_res1',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_res_text_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'text_lineheight_res1',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_res_text_1
		));

		$group_text_res2 = cozy_edge_add_admin_group(array(
			'name'			=> 'group_text_res2',
			'title'			=> esc_html__('Paragraph Responsive (Mobile Devices)', 'cozy'),
			'description'	=> esc_html__('Define responsive styles for paragraph text for mobile devices', 'cozy'),
			'parent'		=> $panel_text
		));

		$row_res_text_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_res_text_2',
			'parent'	=> $group_text_res2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'text_fontsize_res2',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Size', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_res_text_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'text_lineheight_res2',
			'default_value'	=> '',
			'label'			=> esc_html__('Line Height', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_res_text_2
		));

		$row_text_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_text_2',
			'parent'	=> $group_text,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'text_google_fonts',
			'default_value'	=> '-1',
			'label'			=> esc_html__('Font Family', 'cozy'),
			'parent'		=> $row_text_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'text_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_text_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'text_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_text_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'text_letterspacing',
			'default_value'	=> '',
			'label'			=> esc_html__('Letter Spacing', 'cozy'),
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_text_2
		));

		$group_link = cozy_edge_add_admin_group(array(
			'name'			=> 'group_link',
			'title'			=> esc_html__('Links', 'cozy'),
			'description'	=> esc_html__('Define styles for link text', 'cozy'),
			'parent'		=> $panel_text
		));

		$row_link_1 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_link_1',
			'parent'	=> $group_link
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'link_color',
			'default_value'	=> '',
			'label'			=> esc_html__('Link Color', 'cozy'),
			'parent'		=> $row_link_1
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'link_hovercolor',
			'default_value'	=> '',
			'label'			=> esc_html__('Hover Link Color', 'cozy'),
			'parent'		=> $row_link_1
		));

		$row_link_2 = cozy_edge_add_admin_row(array(
			'name'		=> 'row_link_2',
			'parent'	=> $group_link,
			'next'		=> true
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'link_fontstyle',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Style', 'cozy'),
			'options'		=> cozy_edge_get_font_style_array(),
			'parent'		=> $row_link_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'link_fontweight',
			'default_value'	=> '',
			'label'			=> esc_html__('Font Weight', 'cozy'),
			'options'		=> cozy_edge_get_font_weight_array(),
			'parent'		=> $row_link_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'link_fontdecoration',
			'default_value'	=> '',
			'label'			=> esc_html__('Link Decoration', 'cozy'),
			'options'		=> cozy_edge_get_text_decorations(),
			'parent'		=> $row_link_2
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'link_hover_fontdecoration',
			'default_value'	=> '',
			'label'			=> esc_html__('Hovel Link Decoration', 'cozy'),
			'options'		=> cozy_edge_get_text_decorations(),
			'parent'		=> $row_link_2
		));

	}

	add_action( 'cozy_edge_options_map', 'cozy_edge_fonts_options_map', 3);
}