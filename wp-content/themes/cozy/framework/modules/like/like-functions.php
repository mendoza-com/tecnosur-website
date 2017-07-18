<?php

if ( ! function_exists('cozy_edge_like') ) {
	/**
	 * Returns CozyEdgeLike instance
	 *
	 * @return CozyEdgeLike
	 */
	function cozy_edge_like() {
		return CozyEdgeLike::get_instance();
	}

}

function cozy_edge_get_like() {

	echo wp_kses(cozy_edge_like()->add_like(), array(
		'span' => array(
			'class' => true,
			'aria-hidden' => true,
			'style' => true,
			'id' => true
		),
		'i' => array(
			'class' => true,
			'style' => true,
			'id' => true
		),
		'a' => array(
			'href' => true,
			'class' => true,
			'id' => true,
			'title' => true,
			'style' => true
		)
	));
}

if ( ! function_exists('cozy_edge_like_latest_posts') ) {
	/**
	 * Add like to latest post
	 *
	 * @return string
	 */
	function cozy_edge_like_latest_posts() {
		return cozy_edge_like()->add_like();
	}

}

/*if ( ! function_exists('cozy_edge_like_portfolio_list') ) {
	/**
	 * Add like to portfolio project
	 *
	 * @param $portfolio_project_id
	 * @return string
	 */
	/*function cozy_edge_like_portfolio_list($portfolio_project_id) {
		return cozy_edge_like()->add_like_portfolio_list($portfolio_project_id);
	}

}*/