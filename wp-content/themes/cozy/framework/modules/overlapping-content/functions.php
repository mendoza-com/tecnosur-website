<?php

if(!function_exists('cozy_edge_overlapping_content_enabled')) {
    /**
     * Checks if overlapping content is enabled
     *
     * @return bool
     */
    function cozy_edge_overlapping_content_enabled() {
        $id = cozy_edge_get_page_id();

        return get_post_meta($id, 'edgtf_overlapping_content_enable_meta', true) === 'yes';
    }
}

if(!function_exists('cozy_edge_overlapping_content_class')) {
    /**
     * Adds overlapping content class to body tag
     * if overlapping content is enabled
     * @param $classes
     *
     * @return array
     */
    function cozy_edge_overlapping_content_class($classes) {
        if(cozy_edge_overlapping_content_enabled()) {
            $classes[] = 'edgtf-overlapping-content-enabled';
        }

        return $classes;
    }

    add_filter('body_class', 'cozy_edge_overlapping_content_class');
}

if(!function_exists('cozy_edge_overlapping_content_amount')) {
    /**
     * Returns amount of overlapping content
     *
     * @return int
     */
    function cozy_edge_overlapping_content_amount() {
        return 75;
    }
}

if(!function_exists('cozy_edge_oc_content_top_padding')) {
    function cozy_edge_oc_content_top_padding($style) {
	    $id = cozy_edge_get_page_id();

	    $class_prefix = cozy_edge_get_unique_page_class();

	    $content_selector = array(
		    $class_prefix.' .edgtf-content .edgtf-content-inner > .edgtf-container .edgtf-overlapping-content'
	    );

	    $content_class = array();

	    $page_padding_top = get_post_meta($id, 'edgtf_page_content_top_padding', true);
		$page_padding_right = get_post_meta($id, "edgtf_page_content_right_padding", true);
		$page_padding_bottom = get_post_meta($id, "edgtf_page_content_bottom_padding", true);
		$page_padding_left = get_post_meta($id, "edgtf_page_content_left_padding", true);

	    if($page_padding_top !== '') {
		    if(get_post_meta($id, 'edgtf_page_content_top_padding_mobile', true) == 'yes') {
			    $content_class['padding-top'] = cozy_edge_filter_px($page_padding_top).'px!important';
		    } else {
			    $content_class['padding-top'] = cozy_edge_filter_px($page_padding_top).'px';
		    }

	    }

		if($page_padding_bottom !== '') {
			$content_class['padding-bottom'] = cozy_edge_filter_px($page_padding_bottom).'px';
		}
		if($page_padding_left !== '') {
			$content_class['padding-left'] = cozy_edge_filter_px($page_padding_left).'px';
		}
		if($page_padding_right !== '') {
			$content_class['padding-right'] = cozy_edge_filter_px($page_padding_right).'px';
		}
		$current_style = $style;
		if(!empty ($content_class)) {
			$current_style =  cozy_edge_dynamic_css($content_selector, $content_class);
			$current_style = $current_style . $style;
		}

	    return $current_style;
    }

	add_filter('cozy_edge_add_page_custom_style', 'cozy_edge_oc_content_top_padding');
}