<?php
	if(!function_exists('cozy_edge_layerslider_overrides')) {
		/**
		 * Disables Layer Slider auto update box
		 */
		function cozy_edge_layerslider_overrides() {
			$GLOBALS['lsAutoUpdateBox'] = false;
		}

		add_action('layerslider_ready', 'cozy_edge_layerslider_overrides');
	}
?>