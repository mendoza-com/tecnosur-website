<?php

if(!function_exists('cozy_edge_vc_grid_elements_enabled')) {

	/**
	 * Function that checks if Visual Composer Grid Elements are enabled
	 *
	 * @return bool
	 */
	function cozy_edge_vc_grid_elements_enabled() {

		return (cozy_edge_options()->getOptionValue('enable_grid_elements') == 'yes') ? true : false;

	}
}

if(!function_exists('cozy_edge_visual_composer_grid_elements')) {

	/**
	 * Removes Visual Composer Grid Elements post type if VC Grid option disabled
	 * and enables Visual Composer Grid Elements post type
	 * if VC Grid option enabled
	 */
	function cozy_edge_visual_composer_grid_elements() {

		if(!cozy_edge_vc_grid_elements_enabled()) {
			remove_action('init', 'vc_grid_item_editor_create_post_type');
		}
	}

	add_action('vc_after_init', 'cozy_edge_visual_composer_grid_elements', 12);
}

if(!function_exists('cozy_edge_grid_elements_ajax_disable')) {
	/**
	 * Function that disables ajax transitions if grid elements are enabled in theme options
	 */
	function cozy_edge_grid_elements_ajax_disable() {
		global $cozy_edge_options;

		if(cozy_edge_vc_grid_elements_enabled()) {
			$cozy_edge_options['page_transitions'] = '0';
		}
	}

	add_action('wp', 'cozy_edge_grid_elements_ajax_disable');
}


if(!function_exists('cozy_edge_get_vc_version')) {
	/**
	 * Return Visual Composer version string
	 *
	 * @return bool|string
	 */
	function cozy_edge_get_vc_version() {
		if(cozy_edge_visual_composer_installed()) {
			return WPB_VC_VERSION;
		}

		return false;
	}
}