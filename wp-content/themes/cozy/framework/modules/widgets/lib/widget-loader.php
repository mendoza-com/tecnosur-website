<?php

if (!function_exists('cozy_edge_register_widgets')) {

	function cozy_edge_register_widgets() {

		$widgets = array(
			'CozyEdgeLatestPosts',
			'CozyEdgeSearchOpener',
			'CozyEdgeSideAreaOpener',
			'CozyEdgeStickySidebar',
			'CozyEdgeSocialIconWidget',
			'CozyEdgeSeparatorWidget'
		);

		foreach ($widgets as $widget) {
			register_widget($widget);
		}
	}
}

add_action('widgets_init', 'cozy_edge_register_widgets');