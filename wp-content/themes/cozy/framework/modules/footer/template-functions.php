<?php

if (!function_exists('cozy_edge_register_footer_sidebar')) {

	function cozy_edge_register_footer_sidebar() {

		register_sidebar(array(
			'name' => esc_html__('Footer Column 1', 'cozy'),
			'id' => 'footer_column_1',
			'description' => esc_html__('Footer Column 1', 'cozy'),
			'before_widget' => '<div id="%1$s" class="widget edgtf-footer-column-1 %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="edgtf-footer-widget-title">',
			'after_title' => '</h4>'
		));

		register_sidebar(array(
			'name' => esc_html__('Footer Column 2', 'cozy'),
			'id' => 'footer_column_2',
			'description' => esc_html__('Footer Column 2', 'cozy'),
			'before_widget' => '<div id="%1$s" class="widget edgtf-footer-column-2 %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="edgtf-footer-widget-title">',
			'after_title' => '</h4>'
		));

		register_sidebar(array(
			'name' => esc_html__('Footer Column 3', 'cozy'),
			'id' => 'footer_column_3',
			'description' => esc_html__('Footer Column 3', 'cozy'),
			'before_widget' => '<div id="%1$s" class="widget edgtf-footer-column-3 %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="edgtf-footer-widget-title">',
			'after_title' => '</h4>'
		));

		register_sidebar(array(
			'name' => esc_html__('Footer Column 4', 'cozy'),
			'id' => 'footer_column_4',
			'description' => esc_html__('Footer Column 4', 'cozy'),
			'before_widget' => '<div id="%1$s" class="widget edgtf-footer-column-4 %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="edgtf-footer-widget-title">',
			'after_title' => '</h4>'
		));

		register_sidebar(array(
			'name' => esc_html__('Footer Bottom', 'cozy'),
			'id' => 'footer_text',
			'description' => esc_html__('Footer Bottom', 'cozy'),
			'before_widget' => '<div id="%1$s" class="widget edgtf-footer-text %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="edgtf-footer-widget-title">',
			'after_title' => '</h4>'
		));

		register_sidebar(array(
			'name' => esc_html__('Footer Bottom Left', 'cozy'),
			'id' => 'footer_bottom_left',
			'description' => esc_html__('Footer Bottom Left', 'cozy'),
			'before_widget' => '<div id="%1$s" class="widget edgtf-footer-bottom-left %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="edgtf-footer-widget-title">',
			'after_title' => '</h4>'
		));

		register_sidebar(array(
			'name' => esc_html__('Footer Bottom Right', 'cozy'),
			'id' => 'footer_bottom_right',
			'description' => esc_html__('Footer Bottom Right', 'cozy'),
			'before_widget' => '<div id="%1$s" class="widget edgtf-footer-bottom-left %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="edgtf-footer-widget-title">',
			'after_title' => '</h4>'
		));

	}

	add_action('widgets_init', 'cozy_edge_register_footer_sidebar');

}

if (!function_exists('cozy_edge_get_footer')) {
	/**
	 * Loads footer HTML
	 */
	function cozy_edge_get_footer() {

		$parameters = array();
		$id = cozy_edge_get_page_id();
		$parameters['footer_classes'] = cozy_edge_get_footer_classes($id);
		$parameters['display_footer_top'] = (cozy_edge_options()->getOptionValue('show_footer_top') == 'yes') ? true : false;
		$parameters['display_footer_bottom'] = (cozy_edge_options()->getOptionValue('show_footer_bottom') == 'yes') ? true : false;

        if(!is_active_sidebar('footer_column_1') && !is_active_sidebar('footer_column_2') && !is_active_sidebar('footer_column_3') && !is_active_sidebar('footer_column_4')) {
            $parameters['display_footer_top'] = false;
        }

        if(!is_active_sidebar('footer_bottom_left') && !is_active_sidebar('footer_text') && !is_active_sidebar('footer_bottom_right')) {
            $parameters['display_footer_bottom'] = false;
        }

		cozy_edge_get_module_template_part('templates/footer', 'footer', '', $parameters);

	}

    add_action('cozy_edge_get_footer_template', 'cozy_edge_get_footer');

}

if (!function_exists('cozy_edge_get_content_bottom_area')) {
	/**
	 * Loads content bottom area HTML with all needed parameters
	 */
	function cozy_edge_get_content_bottom_area() {

		$parameters = array();

		//Current page id
		$id = cozy_edge_get_page_id();

		//is content bottom area enabled for current page?
		$parameters['content_bottom_area'] = cozy_edge_get_meta_field_intersect('enable_content_bottom_area');
		if ($parameters['content_bottom_area'] == 'yes') {
			//Sidebar for content bottom area
			$parameters['content_bottom_area_sidebar'] = cozy_edge_get_meta_field_intersect('content_bottom_sidebar_custom_display');
			//Content bottom area in grid
			$parameters['content_bottom_area_in_grid'] = cozy_edge_get_meta_field_intersect('content_bottom_in_grid');
			//Content bottom area background color
			$parameters['content_bottom_background_color'] = 'background-color: '.cozy_edge_get_meta_field_intersect('content_bottom_background_color');
		}

		cozy_edge_get_module_template_part('templates/parts/content-bottom-area', 'footer', '', $parameters);

	}

}

if (!function_exists('cozy_edge_get_footer_top')) {
	/**
	 * Return footer top HTML
	 */
	function cozy_edge_get_footer_top() {

		$parameters = array();

		$parameters['footer_top_border'] = cozy_edge_get_footer_top_border();
		$parameters['footer_top_border_in_grid'] = (cozy_edge_options()->getOptionValue('footer_top_border_in_grid') == 'yes') ? 'edgtf-in-grid' : '';
		$parameters['footer_in_grid'] = (cozy_edge_options()->getOptionValue('footer_in_grid') == 'yes') ? true : false;
		$parameters['footer_top_classes'] = cozy_edge_footer_top_classes();
		$parameters['footer_top_columns'] = cozy_edge_options()->getOptionValue('footer_top_columns');

		cozy_edge_get_module_template_part('templates/parts/footer-top', 'footer', '', $parameters);

	}
	
}

if (!function_exists('cozy_edge_get_footer_bottom')) {
	/**
	 * Return footer bottom HTML
	 */
	function cozy_edge_get_footer_bottom() {

		$parameters = array();

		$parameters['footer_bottom_border'] = cozy_edge_get_footer_bottom_border();
		$parameters['footer_bottom_border_in_grid'] = (cozy_edge_options()->getOptionValue('footer_bottom_border_in_grid') == 'yes') ? 'edgtf-in-grid' : '';
		$parameters['footer_in_grid'] = (cozy_edge_options()->getOptionValue('footer_in_grid') == 'yes') ? true : false;
		$parameters['footer_bottom_columns'] = cozy_edge_options()->getOptionValue('footer_bottom_columns');
		$parameters['footer_bottom_border_bottom'] = cozy_edge_get_footer_bottom_bottom_border();

		cozy_edge_get_module_template_part('templates/parts/footer-bottom', 'footer', '', $parameters);

	}

}

//Functions for loading sidebars

if (!function_exists('cozy_edge_get_footer_sidebar_25_25_50')) {

	function cozy_edge_get_footer_sidebar_25_25_50() {
		cozy_edge_get_module_template_part('templates/sidebars/sidebar-three-columns-25-25-50', 'footer');
	}

}

if (!function_exists('cozy_edge_get_footer_sidebar_50_25_25')) {

	function cozy_edge_get_footer_sidebar_50_25_25() {
		cozy_edge_get_module_template_part('templates/sidebars/sidebar-three-columns-50-25-25', 'footer');
	}

}

if (!function_exists('cozy_edge_get_footer_sidebar_four_columns')) {

	function cozy_edge_get_footer_sidebar_four_columns() {
		cozy_edge_get_module_template_part('templates/sidebars/sidebar-four-columns', 'footer');
	}

}

if (!function_exists('cozy_edge_get_footer_sidebar_three_columns')) {

	function cozy_edge_get_footer_sidebar_three_columns() {
		cozy_edge_get_module_template_part('templates/sidebars/sidebar-three-columns', 'footer');
	}

}

if (!function_exists('cozy_edge_get_footer_sidebar_two_columns')) {

	function cozy_edge_get_footer_sidebar_two_columns() {
		cozy_edge_get_module_template_part('templates/sidebars/sidebar-two-columns', 'footer');
	}

}

if (!function_exists('cozy_edge_get_footer_sidebar_one_column')) {

	function cozy_edge_get_footer_sidebar_one_column() {
		cozy_edge_get_module_template_part('templates/sidebars/sidebar-one-column', 'footer');
	}

}

if (!function_exists('cozy_edge_get_footer_bottom_sidebar_three_columns')) {

	function cozy_edge_get_footer_bottom_sidebar_three_columns() {
		cozy_edge_get_module_template_part('templates/sidebars/sidebar-bottom-three-columns', 'footer');
	}

}

if (!function_exists('cozy_edge_get_footer_bottom_sidebar_two_columns')) {

	function cozy_edge_get_footer_bottom_sidebar_two_columns() {
		cozy_edge_get_module_template_part('templates/sidebars/sidebar-bottom-two-columns', 'footer');
	}

}

if (!function_exists('cozy_edge_get_footer_bottom_sidebar_one_column')) {

	function cozy_edge_get_footer_bottom_sidebar_one_column() {
		cozy_edge_get_module_template_part('templates/sidebars/sidebar-bottom-one-column', 'footer');
	}

}

