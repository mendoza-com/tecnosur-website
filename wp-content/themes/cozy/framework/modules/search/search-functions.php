<?php

if( !function_exists('cozy_edge_search_body_class') ) {
	/**
	 * Function that adds body classes for different search types
	 *
	 * @param $classes array original array of body classes
	 *
	 * @return array modified array of classes
	 */
	function cozy_edge_search_body_class($classes) {

		if ( is_active_widget( false, false, 'edgt_search_opener' ) ) {

			$classes[] = 'edgtf-' . cozy_edge_options()->getOptionValue('search_type');

			if ( cozy_edge_options()->getOptionValue('search_type') == 'fullscreen-search' ) {

				$classes[] = 'edgtf-' . cozy_edge_options()->getOptionValue('search_animation');

			}

		}
		return $classes;

	}

	add_filter('body_class', 'cozy_edge_search_body_class');
}

if ( ! function_exists('cozy_edge_get_search') ) {
	/**
	 * Loads search HTML based on search type option.
	 */
	function cozy_edge_get_search() {

		if ( cozy_edge_active_widget( false, false, 'edgt_search_opener' ) ) {

			$search_type = cozy_edge_options()->getOptionValue('search_type');

			if ($search_type == 'search-covers-header') {
				cozy_edge_set_position_for_covering_search();
				return;
			}

			cozy_edge_load_search_template();

		}
	}

}

if ( ! function_exists('cozy_edge_set_position_for_covering_search') ) {
	/**
	 * Finds part of header where search template will be loaded
	 */
	function cozy_edge_set_position_for_covering_search() {

		$containing_sidebar = cozy_edge_active_widget( false, false, 'edgt_search_opener' );

		foreach ($containing_sidebar as $sidebar) {

			if ( strpos( $sidebar, 'top-bar' ) !== false ) {
				add_action( 'cozy_edge_after_header_top_html_open', 'cozy_edge_load_search_template');
			} else if ( strpos( $sidebar, 'main-menu' ) !== false ) {
				add_action( 'cozy_edge_after_header_menu_area_html_open', 'cozy_edge_load_search_template');
			} else if ( strpos( $sidebar, 'mobile-logo' ) !== false ) {
				add_action( 'cozy_edge_after_mobile_header_html_open', 'cozy_edge_load_search_template');
			} else if ( strpos( $sidebar, 'logo' ) !== false ) {
				add_action( 'cozy_edge_after_header_logo_area_html_open', 'cozy_edge_load_search_template');
			} else if ( strpos( $sidebar, 'sticky' ) !== false ) {
				add_action( 'cozy_edge_after_sticky_menu_html_open', 'cozy_edge_load_search_template');
			}

		}

	}

}

if ( ! function_exists('cozy_edge_load_search_template') ) {
	/**
	 * Loads HTML template with parameters
	 */
	function cozy_edge_load_search_template() {
		global $cozy_edge_IconCollections;

		$search_type = cozy_edge_options()->getOptionValue('search_type');

		$search_icon = '';
		if ( cozy_edge_options()->getOptionValue('search_icon_pack') !== '' ) {
			$search_icon = $cozy_edge_IconCollections->getSearchIcon( cozy_edge_options()->getOptionValue('search_icon_pack'), true );
		}

		$parameters = array(
			'search_in_grid'		=> cozy_edge_options()->getOptionValue('search_in_grid') == 'yes' ? true : false,
			'search_icon'			=> $search_icon
		);

		cozy_edge_get_module_template_part( 'templates/types/'.$search_type, 'search', '', $parameters );

	}

}