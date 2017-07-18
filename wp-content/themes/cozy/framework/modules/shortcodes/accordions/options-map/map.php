<?php 
if(!function_exists('cozy_edge_accordions_map')) {
    /**
     * Add Accordion options to elements panel
     */
   function cozy_edge_accordions_map() {
		
       $panel = cozy_edge_add_admin_panel(array(
           'title' => esc_html__('Accordions', 'cozy'),
           'name'  => 'panel_accordions',
           'page'  => '_elements_page'
       ));

       //Typography options
       cozy_edge_add_admin_section_title(array(
           'name' => 'typography_section_title',
           'title' => esc_html__('Typography', 'cozy'),
           'parent' => $panel
       ));

       $typography_group = cozy_edge_add_admin_group(array(
           'name' => 'typography_group',
           'title' => esc_html__('Typography', 'cozy'),
			'description' => esc_html__('Setup typography for accordions navigation', 'cozy'),
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
           'name'          => 'accordions_font_family',
           'default_value' => '',
           'label'         => esc_html__('Font Family', 'cozy'),
       ));

       cozy_edge_add_admin_field(array(
           'parent'        => $typography_row,
           'type'          => 'selectsimple',
           'name'          => 'accordions_text_transform',
           'default_value' => '',
           'label'         => esc_html__('Text Transform', 'cozy'),
           'options'       => cozy_edge_get_text_transform_array()
       ));

       cozy_edge_add_admin_field(array(
           'parent'        => $typography_row,
           'type'          => 'selectsimple',
           'name'          => 'accordions_font_style',
           'default_value' => '',
           'label'         => esc_html__('Font Style', 'cozy'),
           'options'       => cozy_edge_get_font_style_array()
       ));

       cozy_edge_add_admin_field(array(
           'parent'        => $typography_row,
           'type'          => 'textsimple',
           'name'          => 'accordions_letter_spacing',
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
           'name'          => 'accordions_font_weight',
           'default_value' => '',
           'label'         => esc_html__('Font Weight', 'cozy'),
           'options'       => cozy_edge_get_font_weight_array()
       ));
		
		//Initial Accordion Color Styles
		
		cozy_edge_add_admin_section_title(array(
           'name' => 'accordion_color_section_title',
           'title' => esc_html__('Basic Accordions Color Styles', 'cozy'),
           'parent' => $panel
       ));
		
		$accordions_color_group = cozy_edge_add_admin_group(array(
           'name' => 'accordions_color_group',
           'title' => esc_html__('Accordion Color Styles', 'cozy'),
			'description' => esc_html__('Set color styles for accordion title', 'cozy'),
           'parent' => $panel
       ));
		$accordions_color_row = cozy_edge_add_admin_row(array(
           'name' => 'accordions_color_row',
           'next' => true,
           'parent' => $accordions_color_group
       ));
		cozy_edge_add_admin_field(array(
           'parent'        => $accordions_color_row,
           'type'          => 'colorsimple',
           'name'          => 'accordions_title_color',
           'default_value' => '',
           'label'         => esc_html__('Title Color', 'cozy')
       ));
		cozy_edge_add_admin_field(array(
           'parent'        => $accordions_color_row,
           'type'          => 'colorsimple',
           'name'          => 'accordions_icon_color',
           'default_value' => '',
           'label'         => esc_html__('Icon Color', 'cozy')
       ));
		
		$active_accordions_color_group = cozy_edge_add_admin_group(array(
           'name' => 'active_accordions_color_group',
           'title' => esc_html__('Active and Hover Accordion Color Styles', 'cozy'),
			'description' => esc_html__('Set color styles for active and hover accordions', 'cozy'),
           'parent' => $panel
       ));
		$active_accordions_color_row = cozy_edge_add_admin_row(array(
           'name' => 'active_accordions_color_row',
           'next' => true,
           'parent' => $active_accordions_color_group
       ));
		cozy_edge_add_admin_field(array(
           'parent'        => $active_accordions_color_row,
           'type'          => 'colorsimple',
           'name'          => 'accordions_title_color_active',
           'default_value' => '',
           'label'         => esc_html__('Title Color', 'cozy')
       ));
		cozy_edge_add_admin_field(array(
           'parent'        => $active_accordions_color_row,
           'type'          => 'colorsimple',
           'name'          => 'accordions_icon_color_active',
           'default_value' => '',
           'label'         => esc_html__('Icon Color', 'cozy')
       ));
   }
   add_action('cozy_edge_options_elements_map', 'cozy_edge_accordions_map');
}