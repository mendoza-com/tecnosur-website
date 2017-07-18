<?php

if(!function_exists('cozy_edge_tabs_map')) {
    function cozy_edge_tabs_map() {
		
        $panel = cozy_edge_add_admin_panel(array(
            'title' => esc_html__('Tabs', 'cozy'),
            'name'  => 'panel_tabs',
            'page'  => '_elements_page'
        ));

        //Typography options
        cozy_edge_add_admin_section_title(array(
            'name' => 'typography_section_title',
            'title' => esc_html__('Tabs Navigation Typography', 'cozy'),
            'parent' => $panel
        ));

        $typography_group = cozy_edge_add_admin_group(array(
            'name' => 'typography_group',
            'title' => esc_html__('Tabs Navigation Typography', 'cozy'),
			'description' => esc_html__('Setup typography for tabs navigation', 'cozy'),
            'parent' => $panel
        ));

        $typography_row = cozy_edge_add_admin_row(array(
            'name' => 'typography_row',
            'next' => true,
            'parent' => $typography_group
        ));

        cozy_edge_add_admin_field(array(
            'parent'        => $typography_row,
            'type'          => 'fontsimple',
            'name'          => 'tabs_font_family',
            'default_value' => '',
            'label'         => esc_html__('Font Family', 'cozy'),
        ));

        cozy_edge_add_admin_field(array(
            'parent'        => $typography_row,
            'type'          => 'selectsimple',
            'name'          => 'tabs_text_transform',
            'default_value' => '',
            'label'         => esc_html__('Text Transform', 'cozy'),
            'options'       => cozy_edge_get_text_transform_array()
        ));

        cozy_edge_add_admin_field(array(
            'parent'        => $typography_row,
            'type'          => 'selectsimple',
            'name'          => 'tabs_font_style',
            'default_value' => '',
            'label'         => esc_html__('Font Style', 'cozy'),
            'options'       => cozy_edge_get_font_style_array()
        ));

        cozy_edge_add_admin_field(array(
            'parent'        => $typography_row,
            'type'          => 'textsimple',
            'name'          => 'tabs_letter_spacing',
            'default_value' => '',
            'label'         => esc_html__('Letter Spacing', 'cozy'),
            'args'          => array(
                'suffix' => 'px'
            )
        ));

        $typography_row2 = cozy_edge_add_admin_row(array(
            'name' => 'typography_row2',
            'next' => true,
            'parent' => $typography_group
        ));		
		
        cozy_edge_add_admin_field(array(
            'parent'        => $typography_row2,
            'type'          => 'selectsimple',
            'name'          => 'tabs_font_weight',
            'default_value' => '',
            'label'         => esc_html__('Font Weight', 'cozy'),
            'options'       => cozy_edge_get_font_weight_array()
        ));
		
		//Initial Tab Color Styles
		
		cozy_edge_add_admin_section_title(array(
            'name' => 'tab_color_section_title',
            'title' => esc_html__('Tab Navigation Color Styles', 'cozy'),
            'parent' => $panel
        ));
		$tabs_color_group = cozy_edge_add_admin_group(array(
            'name' => 'tabs_color_group',
            'title' => esc_html__('Tab Navigation Color Styles', 'cozy'),
			'description' => esc_html__('Set color styles for tab navigation', 'cozy'),
            'parent' => $panel
        ));
		$tabs_color_row = cozy_edge_add_admin_row(array(
            'name' => 'tabs_color_row',
            'next' => true,
            'parent' => $tabs_color_group
        ));

        cozy_edge_add_admin_field(array(
            'parent'        => $tabs_color_row,
            'type'          => 'colorsimple',
            'name'          => 'tabs_color',
            'default_value' => '',
            'label'         => esc_html__('Color', 'cozy')
        ));
		cozy_edge_add_admin_field(array(
            'parent'        => $tabs_color_row,
            'type'          => 'colorsimple',
            'name'          => 'tabs_back_color',
            'default_value' => '',
            'label'         => esc_html__('Background Color', 'cozy')
        ));
		cozy_edge_add_admin_field(array(
            'parent'        => $tabs_color_row,
            'type'          => 'colorsimple',
            'name'          => 'tabs_border_color',
            'default_value' => '',
            'label'         => esc_html__('Border Color', 'cozy')
        ));
		
		//Active Tab Color Styles
		
		$active_tabs_color_group = cozy_edge_add_admin_group(array(
            'name' => 'active_tabs_color_group',
            'title' => esc_html__('Active and Hover Navigation Color Styles', 'cozy'),
			'description' => esc_html__('Set color styles for active and hover tabs', 'cozy'),
            'parent' => $panel
        ));
		$active_tabs_color_row = cozy_edge_add_admin_row(array(
            'name' => 'active_tabs_color_row',
            'next' => true,
            'parent' => $active_tabs_color_group
        ));

        cozy_edge_add_admin_field(array(
            'parent'        => $active_tabs_color_row,
            'type'          => 'colorsimple',
            'name'          => 'tabs_color_active',
            'default_value' => '',
            'label'         => esc_html__('Color', 'cozy')
        ));
		cozy_edge_add_admin_field(array(
            'parent'        => $active_tabs_color_row,
            'type'          => 'colorsimple',
            'name'          => 'tabs_back_color_active',
            'default_value' => '',
            'label'         => esc_html__('Background Color', 'cozy')
        ));
		cozy_edge_add_admin_field(array(
            'parent'        => $active_tabs_color_row,
            'type'          => 'colorsimple',
            'name'          => 'tabs_border_color_active',
            'default_value' => '',
            'label'         => esc_html__('Border Color', 'cozy')
        ));
        
    }

    add_action('cozy_edge_options_elements_map', 'cozy_edge_tabs_map');
}