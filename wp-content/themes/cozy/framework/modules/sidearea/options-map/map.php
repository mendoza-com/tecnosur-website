<?php

if ( ! function_exists('cozy_edge_sidearea_options_map') ) {

	function cozy_edge_sidearea_options_map() {

		cozy_edge_add_admin_page(
			array(
				'slug' => '_side_area_page',
				'title' => esc_html__('Side Area','cozy'),
				'icon' => 'fa fa-bars'
			)
		);

		$side_area_panel = cozy_edge_add_admin_panel(
			array(
				'title' => esc_html__('Side Area','cozy'),
				'name' => 'side_area',
				'page' => '_side_area_page'
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_panel,
				'type' => 'select',
				'name' => 'side_area_type',
				'default_value' => 'side-menu-slide-from-right',
				'label' => esc_html__('Side Area Type','cozy'),
				'description' => esc_html__('Choose a type of Side Area','cozy'),
				'options' => array(
					'side-menu-slide-from-right' => esc_html__('Slide from Right Over Content','cozy'),
					'side-menu-slide-with-content' => esc_html__('Slide from Right With Content','cozy'),
					'side-area-uncovered-from-content' => esc_html__('Side Area Uncovered from Content','cozy'),
				),
				'args' => array(
					'dependence' => true,
					'hide' => array(
						'side-menu-slide-from-right' => '#edgtf_side_area_slide_with_content_container',
						'side-menu-slide-with-content' => '#edgtf_side_area_width_container',
						'side-area-uncovered-from-content' => '#edgtf_side_area_width_container, #edgtf_side_area_slide_with_content_container'
					),
					'show' => array(
						'side-menu-slide-from-right' => '#edgtf_side_area_width_container',
						'side-menu-slide-with-content' => '#edgtf_side_area_slide_with_content_container',
						'side-area-uncovered-from-content' => ''
					)
				)
			)
		);

		$side_area_width_container = cozy_edge_add_admin_container(
			array(
				'parent' => $side_area_panel,
				'name' => 'side_area_width_container',
				'hidden_property' => 'side_area_type',
				'hidden_value' => '',
				'hidden_values' => array(
					'side-menu-slide-with-content',
					'side-area-uncovered-from-content'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_width_container,
				'type' => 'text',
				'name' => 'side_area_width',
				'default_value' => '',
				'label' => esc_html__('Side Area Width','cozy'),
				'description' => esc_html__('Enter a width for Side Area (in percentages, enter more than 30)','cozy'),
				'args' => array(
					'col_width' => 3,
					'suffix' => '%'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_width_container,
				'type' => 'color',
				'name' => 'side_area_content_overlay_color',
				'default_value' => '',
				'label' => esc_html__('Content Overlay Background Color','cozy'),
				'description' => esc_html__('Choose a background color for a content overlay','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_width_container,
				'type' => 'text',
				'name' => 'side_area_content_overlay_opacity',
				'default_value' => '',
				'label' => esc_html__('Content Overlay Background Transparency','cozy'),
				'description' => esc_html__('Choose a transparency for the content overlay background color (0 = fully transparent, 1 = opaque)','cozy'),
				'args' => array(
					'col_width' => 3
				)
			)
		);

		$side_area_slide_with_content_container = cozy_edge_add_admin_container(
			array(
				'parent' => $side_area_panel,
				'name' => 'side_area_slide_with_content_container',
				'hidden_property' => 'side_area_type',
				'hidden_value' => '',
				'hidden_values' => array(
					'side-menu-slide-from-right',
					'side-area-uncovered-from-content'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_slide_with_content_container,
				'type' => 'select',
				'name' => 'side_area_slide_with_content_width',
				'default_value' => 'width-470',
				'label' => esc_html__('Side Area Width','cozy'),
				'description' => esc_html__('Choose width for Side Area','cozy'),
				'options' => array(
					'width-270' => '270px',
					'width-370' => '370px',
					'width-470' => '470px'
				)
			)
		);

//init icon pack hide and show array. It will be populated dinamically from collections array
		$side_area_icon_pack_hide_array = array();
		$side_area_icon_pack_show_array = array();

//do we have some collection added in collections array?
		if (is_array(cozy_edge_icon_collections()->iconCollections) && count(cozy_edge_icon_collections()->iconCollections)) {
			//get collections params array. It will contain values of 'param' property for each collection
			$side_area_icon_collections_params = cozy_edge_icon_collections()->getIconCollectionsParams();

			//foreach collection generate hide and show array
			foreach (cozy_edge_icon_collections()->iconCollections as $dep_collection_key => $dep_collection_object) {
				$side_area_icon_pack_hide_array[$dep_collection_key] = '';

				//we need to include only current collection in show string as it is the only one that needs to show
				$side_area_icon_pack_show_array[$dep_collection_key] = '#edgtf_side_area_icon_' . $dep_collection_object->param . '_container';

				//for all collections param generate hide string
				foreach ($side_area_icon_collections_params as $side_area_icon_collections_param) {
					//we don't need to include current one, because it needs to be shown, not hidden
					if ($side_area_icon_collections_param !== $dep_collection_object->param) {
						$side_area_icon_pack_hide_array[$dep_collection_key] .= '#edgtf_side_area_icon_' . $side_area_icon_collections_param . '_container,';
					}
				}

				//remove remaining ',' character
				$side_area_icon_pack_hide_array[$dep_collection_key] = rtrim($side_area_icon_pack_hide_array[$dep_collection_key], ',');
			}

		}

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_panel,
				'type' => 'select',
				'name' => 'side_area_button_icon_pack',
				'default_value' => 'font_awesome',
				'label' => esc_html__('Side Area Button Icon Pack','cozy'),
				'description' => esc_html__('Choose icon pack for side area button','cozy'),
				'options' => cozy_edge_icon_collections()->getIconCollections(),
				'args' => array(
					'dependence' => true,
					'hide' => $side_area_icon_pack_hide_array,
					'show' => $side_area_icon_pack_show_array
				)
			)
		);

		if (is_array(cozy_edge_icon_collections()->iconCollections) && count(cozy_edge_icon_collections()->iconCollections)) {
			//foreach icon collection we need to generate separate container that will have dependency set
			//it will have one field inside with icons dropdown
			foreach (cozy_edge_icon_collections()->iconCollections as $collection_key => $collection_object) {
				$icons_array = $collection_object->getIconsArray();

				//get icon collection keys (keys from collections array, e.g 'font_awesome', 'font_elegant' etc.)
				$icon_collections_keys = cozy_edge_icon_collections()->getIconCollectionsKeys();

				//unset current one, because it doesn't have to be included in dependency that hides icon container
				unset($icon_collections_keys[array_search($collection_key, $icon_collections_keys)]);

				$side_area_icon_hide_values = $icon_collections_keys;

				$side_area_icon_container = cozy_edge_add_admin_container(
					array(
						'parent' => $side_area_panel,
						'name' => 'side_area_icon_' . $collection_object->param . '_container',
						'hidden_property' => 'side_area_button_icon_pack',
						'hidden_value' => '',
						'hidden_values' => $side_area_icon_hide_values
					)
				);

				cozy_edge_add_admin_field(
					array(
						'parent' => $side_area_icon_container,
						'type' => 'select',
						'name' => 'side_area_icon_' . $collection_object->param,
						'default_value' => 'fa-bars',
						'label' => esc_html__('Side Area Icon','cozy'),
						'description' => esc_html__('Choose Side Area Icon','cozy'),
						'options' => $icons_array,
					)
				);

			}

		}

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_panel,
				'type' => 'text',
				'name' => 'side_area_icon_font_size',
				'default_value' => '',
				'label' => esc_html__('Side Area Icon Size','cozy'),
				'description' => esc_html__('Choose a size for Side Area (px)','cozy'),
				'args' => array(
					'col_width' => 3,
					'suffix' => 'px'
				),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_panel,
				'type' => 'select',
				'name' => 'side_area_predefined_icon_size',
				'default_value' => 'normal',
				'label' => esc_html__('Predefined Side Area Icon Size','cozy'),
				'description' => esc_html__('Choose predefined size for Side Area icons','cozy'),
				'options' => array(
					'normal' => esc_html__('Normal','cozy'),
					'medium' => esc_html__('Medium','cozy'),
					'large' => esc_html__('Large','cozy'),
				),
			)
		);

		$side_area_icon_style_group = cozy_edge_add_admin_group(
			array(
				'parent' => $side_area_panel,
				'name' => 'side_area_icon_style_group',
				'title' => esc_html__('Side Area Icon Style','cozy'),
				'description' => esc_html__('Define styles for Side Area icon','cozy'),
			)
		);

		$side_area_icon_style_row1 = cozy_edge_add_admin_row(
			array(
				'parent'		=> $side_area_icon_style_group,
				'name'			=> 'side_area_icon_style_row1'
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row1,
				'type' => 'colorsimple',
				'name' => 'side_area_icon_color',
				'default_value' => '',
				'label' => esc_html__('Color','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row1,
				'type' => 'colorsimple',
				'name' => 'side_area_icon_hover_color',
				'default_value' => '',
				'label' => esc_html__('Hover Color','cozy'),
			)
		);

		$side_area_icon_style_row2 = cozy_edge_add_admin_row(
			array(
				'parent'		=> $side_area_icon_style_group,
				'name'			=> 'side_area_icon_style_row2',
				'next'			=> true
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row2,
				'type' => 'colorsimple',
				'name' => 'side_area_light_icon_color',
				'default_value' => '',
				'label' => esc_html__('Light Menu Icon Color','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row2,
				'type' => 'colorsimple',
				'name' => 'side_area_light_icon_hover_color',
				'default_value' => '',
				'label' => esc_html__('Light Menu Icon Hover Color','cozy'),
			)
		);

		$side_area_icon_style_row3 = cozy_edge_add_admin_row(
			array(
				'parent'		=> $side_area_icon_style_group,
				'name'			=> 'side_area_icon_style_row3',
				'next'			=> true
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row3,
				'type' => 'colorsimple',
				'name' => 'side_area_dark_icon_color',
				'default_value' => '',
				'label' => esc_html__('Dark Menu Icon Color','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row3,
				'type' => 'colorsimple',
				'name' => 'side_area_dark_icon_hover_color',
				'default_value' => '',
				'label' => esc_html__('Dark Menu Icon Hover Color','cozy'),
			)
		);

		$icon_spacing_group = cozy_edge_add_admin_group(
			array(
				'parent' => $side_area_panel,
				'name' => 'icon_spacing_group',
				'title' => esc_html__('Side Area Icon Spacing','cozy'),
				'description' => esc_html__('Define padding and margin for side area icon','cozy'),
			)
		);

		$icon_spacing_row = cozy_edge_add_admin_row(
			array(
				'parent'		=> $icon_spacing_group,
				'name'			=> 'icon_spancing_row',
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $icon_spacing_row,
				'type' => 'textsimple',
				'name' => 'side_area_icon_padding_left',
				'default_value' => '',
				'label' => esc_html__('Padding Left','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $icon_spacing_row,
				'type' => 'textsimple',
				'name' => 'side_area_icon_padding_right',
				'default_value' => '',
				'label' => esc_html__('Padding Right','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $icon_spacing_row,
				'type' => 'textsimple',
				'name' => 'side_area_icon_margin_left',
				'default_value' => '',
				'label' => esc_html__('Margin Left','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $icon_spacing_row,
				'type' => 'textsimple',
				'name' => 'side_area_icon_margin_right',
				'default_value' => '',
				'label' => esc_html__('Margin Right','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_panel,
				'type' => 'yesno',
				'name' => 'side_area_icon_border_yesno',
				'default_value' => 'no',
				'label' => esc_html__('Icon Border','cozy'),
				'descritption' => esc_html__('Enable border around icon','cozy'),
				'args' => array(
					'dependence' => true,
					'dependence_hide_on_yes' => '',
					'dependence_show_on_yes' => '#edgtf_side_area_icon_border_container'
				)
			)
		);

		$side_area_icon_border_container = cozy_edge_add_admin_container(
			array(
				'parent' => $side_area_panel,
				'name' => 'side_area_icon_border_container',
				'hidden_property' => 'side_area_icon_border_yesno',
				'hidden_value' => 'no'
			)
		);

		$border_style_group = cozy_edge_add_admin_group(
			array(
				'parent' => $side_area_icon_border_container,
				'name' => 'border_style_group',
				'title' => esc_html__('Border Style','cozy'),
				'description' => esc_html__('Define styling for border around icon','cozy'),
			)
		);

		$border_style_row_1 = cozy_edge_add_admin_row(
			array(
				'parent'		=> $border_style_group,
				'name'			=> 'border_style_row_1',
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $border_style_row_1,
				'type' => 'colorsimple',
				'name' => 'side_area_icon_border_color',
				'default_value' => '',
				'label' => esc_html__('Color','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $border_style_row_1,
				'type' => 'colorsimple',
				'name' => 'side_area_icon_border_hover_color',
				'default_value' => '',
				'label' => esc_html__('Hover Color','cozy'),
			)
		);

		$border_style_row_2 = cozy_edge_add_admin_row(
			array(
				'parent'		=> $border_style_group,
				'name'			=> 'border_style_row_2',
				'next'			=> true
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $border_style_row_2,
				'type' => 'textsimple',
				'name' => 'side_area_icon_border_width',
				'default_value' => '',
				'label' => esc_html__('Width','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $border_style_row_2,
				'type' => 'textsimple',
				'name' => 'side_area_icon_border_radius',
				'default_value' => '',
				'label' => esc_html__('Radius','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $border_style_row_2,
				'type' => 'selectsimple',
				'name' => 'side_area_icon_border_style',
				'default_value' => '',
				'label' => esc_html__('Style','cozy'),
				'options' => array(
					'solid' => esc_html__('Solid','cozy'),
					'dashed' => esc_html__('Dashed','cozy'),
					'dotted' => esc_html__('Dotted','cozy'),
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_panel,
				'type' => 'selectblank',
				'name' => 'side_area_aligment',
				'default_value' => '',
				'label' => esc_html__('Text Aligment','cozy'),
				'description' => esc_html__('Choose text aligment for side area','cozy'),
				'options' => array(
					'center' => esc_html__('Center','cozy'),
					'left' => esc_html__('Left','cozy'),
					'right' => esc_html__('Right','cozy'),
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_panel,
				'type' => 'text',
				'name' => 'side_area_title',
				'default_value' => '',
				'label' => esc_html__('Side Area Title','cozy'),
				'description' => esc_html__('Enter a title to appear in Side Area','cozy'),
				'args' => array(
					'col_width' => 3,
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_panel,
				'type' => 'color',
				'name' => 'side_area_background_color',
				'default_value' => '',
				'label' => esc_html__('Background Color','cozy'),
				'description' => esc_html__('Choose a background color for Side Area','cozy'),
			)
		);

		$padding_group = cozy_edge_add_admin_group(
			array(
				'parent' => $side_area_panel,
				'name' => 'padding_group',
				'title' => esc_html__('Padding','cozy'),
				'description' => esc_html__('Define padding for Side Area','cozy'),
			)
		);

		$padding_row = cozy_edge_add_admin_row(
			array(
				'parent' => $padding_group,
				'name' => 'padding_row',
				'next' => true
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $padding_row,
				'type' => 'textsimple',
				'name' => 'side_area_padding_top',
				'default_value' => '',
				'label' => esc_html__('Top Padding','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $padding_row,
				'type' => 'textsimple',
				'name' => 'side_area_padding_right',
				'default_value' => '',
				'label' => esc_html__('Right Padding','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $padding_row,
				'type' => 'textsimple',
				'name' => 'side_area_padding_bottom',
				'default_value' => '',
				'label' => esc_html__('Bottom Padding','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $padding_row,
				'type' => 'textsimple',
				'name' => 'side_area_padding_left',
				'default_value' => '',
				'label' => esc_html__('Left Padding','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_panel,
				'type' => 'select',
				'name' => 'side_area_close_icon',
				'default_value' => 'light',
				'label' => esc_html__('Close Icon Style','cozy'),
				'description' => esc_html__('Choose a type of close icon','cozy'),
				'options' => array(
					'light' => esc_html__('Light','cozy'),
					'dark' => esc_html__('Dark','cozy'),
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_panel,
				'type' => 'text',
				'name' => 'side_area_close_icon_size',
				'default_value' => '',
				'label' => esc_html__('Close Icon Size','cozy'),
				'description' => esc_html__('Define close icon size','cozy'),
				'args' => array(
					'col_width' => 3,
					'suffix' => 'px'
				)
			)
		);

		$title_group = cozy_edge_add_admin_group(
			array(
				'parent' => $side_area_panel,
				'name' => 'title_group',
				'title' => esc_html__('Title','cozy'),
				'description' => esc_html__('Define Style for Side Area title','cozy'),
			)
		);

		$title_row_1 = cozy_edge_add_admin_row(
			array(
				'parent' => $title_group,
				'name' => 'title_row_1',
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $title_row_1,
				'type' => 'colorsimple',
				'name' => 'side_area_title_color',
				'default_value' => '',
				'label' => esc_html__('Text Color','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $title_row_1,
				'type' => 'textsimple',
				'name' => 'side_area_title_fontsize',
				'default_value' => '',
				'label' => esc_html__('Font Size','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $title_row_1,
				'type' => 'textsimple',
				'name' => 'side_area_title_lineheight',
				'default_value' => '',
				'label' => esc_html__('Line Height','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $title_row_1,
				'type' => 'selectblanksimple',
				'name' => 'side_area_title_texttransform',
				'default_value' => '',
				'label' => esc_html__('Text Transform','cozy'),
				'options' => cozy_edge_get_text_transform_array()
			)
		);

		$title_row_2 = cozy_edge_add_admin_row(
			array(
				'parent' => $title_group,
				'name' => 'title_row_2',
				'next' => true
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $title_row_2,
				'type' => 'fontsimple',
				'name' => 'side_area_title_google_fonts',
				'default_value' => '-1',
				'label' => esc_html__('Font Family','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $title_row_2,
				'type' => 'selectblanksimple',
				'name' => 'side_area_title_fontstyle',
				'default_value' => '',
				'label' => esc_html__('Font Style','cozy'),
				'options' => cozy_edge_get_font_style_array()
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $title_row_2,
				'type' => 'selectblanksimple',
				'name' => 'side_area_title_fontweight',
				'default_value' => '',
				'label' => esc_html__('Font Weight','cozy'),
				'options' => cozy_edge_get_font_weight_array()
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $title_row_2,
				'type' => 'textsimple',
				'name' => 'side_area_title_letterspacing',
				'default_value' => '',
				'label' => esc_html__('Letter Spacing','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);


		$text_group = cozy_edge_add_admin_group(
			array(
				'parent' => $side_area_panel,
				'name' => 'text_group',
				'title' => esc_html__('Text','cozy'),
				'description' => esc_html__('Define Style for Side Area text', 'cozy')
			)
		);

		$text_row_1 = cozy_edge_add_admin_row(
			array(
				'parent' => $text_group,
				'name' => 'text_row_1',
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $text_row_1,
				'type' => 'colorsimple',
				'name' => 'side_area_text_color',
				'default_value' => '',
				'label' => esc_html__('Text Color','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $text_row_1,
				'type' => 'textsimple',
				'name' => 'side_area_text_fontsize',
				'default_value' => '',
				'label' => esc_html__('Font Size','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $text_row_1,
				'type' => 'textsimple',
				'name' => 'side_area_text_lineheight',
				'default_value' => '',
				'label' => esc_html__('Line Height','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $text_row_1,
				'type' => 'selectblanksimple',
				'name' => 'side_area_text_texttransform',
				'default_value' => '',
				'label' => esc_html__('Text Transform','cozy'),
				'options' => cozy_edge_get_text_transform_array()
			)
		);

		$text_row_2 = cozy_edge_add_admin_row(
			array(
				'parent' => $text_group,
				'name' => 'text_row_2',
				'next' => true
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $text_row_2,
				'type' => 'fontsimple',
				'name' => 'side_area_text_google_fonts',
				'default_value' => '-1',
				'label' => esc_html__('Font Family','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $text_row_2,
				'type' => 'fontsimple',
				'name' => 'side_area_text_google_fonts',
				'default_value' => '-1',
				'label' => esc_html__('Font Family','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $text_row_2,
				'type' => 'selectblanksimple',
				'name' => 'side_area_text_fontstyle',
				'default_value' => '',
				'label' => esc_html__('Font Style','cozy'),
				'options' => cozy_edge_get_font_style_array()
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $text_row_2,
				'type' => 'selectblanksimple',
				'name' => 'side_area_text_fontweight',
				'default_value' => '',
				'label' => esc_html__('Font Weight','cozy'),
				'options' => cozy_edge_get_font_weight_array()
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $text_row_2,
				'type' => 'textsimple',
				'name' => 'side_area_text_letterspacing',
				'default_value' => '',
				'label' => esc_html__('Letter Spacing','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		$widget_links_group = cozy_edge_add_admin_group(
			array(
				'parent' => $side_area_panel,
				'name' => 'widget_links_group',
				'title' => esc_html__('Link Style','cozy'),
				'description' => esc_html__('Define styles for Side Area widget links','cozy'),
			)
		);

		$widget_links_row_1 = cozy_edge_add_admin_row(
			array(
				'parent' => $widget_links_group,
				'name' => 'widget_links_row_1',
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $widget_links_row_1,
				'type' => 'colorsimple',
				'name' => 'sidearea_link_color',
				'default_value' => '',
				'label' => esc_html__('Text Color','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $widget_links_row_1,
				'type' => 'textsimple',
				'name' => 'sidearea_link_font_size',
				'default_value' => '',
				'label' => esc_html__('Font Size','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $widget_links_row_1,
				'type' => 'textsimple',
				'name' => 'sidearea_link_line_height',
				'default_value' => '',
				'label' => esc_html__('Line Height','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $widget_links_row_1,
				'type' => 'selectblanksimple',
				'name' => 'sidearea_link_text_transform',
				'default_value' => '',
				'label' => esc_html__('Text Transform','cozy'),
				'options' => cozy_edge_get_text_transform_array()
			)
		);

		$widget_links_row_2 = cozy_edge_add_admin_row(
			array(
				'parent' => $widget_links_group,
				'name' => 'widget_links_row_2',
				'next' => true
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $widget_links_row_2,
				'type' => 'fontsimple',
				'name' => 'sidearea_link_font_family',
				'default_value' => '-1',
				'label' => esc_html__('Font Family','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $widget_links_row_2,
				'type' => 'selectblanksimple',
				'name' => 'sidearea_link_font_style',
				'default_value' => '',
				'label' => esc_html__('Font Style','cozy'),
				'options' => cozy_edge_get_font_style_array()
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $widget_links_row_2,
				'type' => 'selectblanksimple',
				'name' => 'sidearea_link_font_weight',
				'default_value' => '',
				'label' => esc_html__('Font Weight','cozy'),
				'options' => cozy_edge_get_font_weight_array()
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $widget_links_row_2,
				'type' => 'textsimple',
				'name' => 'sidearea_link_letter_spacing',
				'default_value' => '',
				'label' => esc_html__('Letter Spacing','cozy'),
				'args' => array(
					'suffix' => 'px'
				)
			)
		);

		$widget_links_row_3 = cozy_edge_add_admin_row(
			array(
				'parent' => $widget_links_group,
				'name' => 'widget_links_row_3',
				'next' => true
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $widget_links_row_3,
				'type' => 'colorsimple',
				'name' => 'sidearea_link_hover_color',
				'default_value' => '',
				'label' => esc_html__('Hover Color','cozy'),
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_panel,
				'type' => 'yesno',
				'name' => 'side_area_enable_bottom_border',
				'default_value' => 'no',
				'label' => esc_html__('Border Bottom on Elements','cozy'),
				'description' => esc_html__('Enable border bottom on elements in side area','cozy'),
				'args' => array(
					'dependence' => true,
					'dependence_hide_on_yes' => '',
					'dependence_show_on_yes' => '#edgtf_side_area_bottom_border_container'
				)
			)
		);

		$side_area_bottom_border_container = cozy_edge_add_admin_container(
			array(
				'parent' => $side_area_panel,
				'name' => 'side_area_bottom_border_container',
				'hidden_property' => 'side_area_enable_bottom_border',
				'hidden_value' => 'no'
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $side_area_bottom_border_container,
				'type' => 'color',
				'name' => 'side_area_bottom_border_color',
				'default_value' => '',
				'label' => esc_html__('Border Bottom Color','cozy'),
				'description' => esc_html__('Choose color for border bottom on elements in sidearea','cozy'),
			)
		);

	}

	add_action('cozy_edge_options_map', 'cozy_edge_sidearea_options_map', 14);

}