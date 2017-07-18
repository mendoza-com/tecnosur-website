<?php

if(!function_exists('cozy_edge_boxed_class')) {
    /**
     * Function that adds classes on body for boxed layout
     */
    function cozy_edge_boxed_class($classes) {

        //is boxed layout turned on?
        if(cozy_edge_options()->getOptionValue('boxed') == 'yes' && cozy_edge_get_meta_field_intersect('header_type') !== 'header-vertical') {
            $classes[] = 'edgtf-boxed';
        }
	    $h_style = get_post_meta(get_the_ID(),'edgtf_predefined_h_tags_style',true);
	    if($h_style !== ''){
		    $classes[] = $h_style;
	    }

        return $classes;
    }

    add_filter('body_class', 'cozy_edge_boxed_class');
}

if(!function_exists('cozy_edge_theme_version_class')) {
    /**
     * Function that adds classes on body for version of theme
     */
    function cozy_edge_theme_version_class($classes) {
        $current_theme = wp_get_theme();

        //is child theme activated?
        if($current_theme->parent()) {
            //add child theme version
            $classes[] = strtolower($current_theme->get('Name')).'-child-ver-'.$current_theme->get('Version');

            //get parent theme
            $current_theme = $current_theme->parent();
        }

        if($current_theme->exists() && $current_theme->get('Version') != '') {
            $classes[] = strtolower($current_theme->get('Name')).'-ver-'.$current_theme->get('Version');
        }

        return $classes;
    }

    add_filter('body_class', 'cozy_edge_theme_version_class');
}

if(!function_exists('cozy_edge_smooth_scroll_class')) {
    /**
     * Function that adds classes on body for smooth scroll
     */
    function cozy_edge_smooth_scroll_class($classes) {

        //is smooth scroll enabled enabled?
        if(cozy_edge_options()->getOptionValue('smooth_scroll') == 'yes') {
            $classes[] = 'edgtf-smooth-scroll';
        } else {
            $classes[] = '';
        }

        return $classes;
    }

    add_filter('body_class', 'cozy_edge_smooth_scroll_class');
}

if(!function_exists('cozy_edge_smooth_page_transitions_class')) {
    /**
     * Function that adds classes on body for smooth page transitions
     */
    function cozy_edge_smooth_page_transitions_class($classes) {

        if(cozy_edge_options()->getOptionValue('smooth_page_transitions') == 'yes') {
            $classes[] = 'edgtf-smooth-page-transitions';
			$classes[] = 'edgtf-mimic-ajax';
        } else {
            $classes[] = '';
        }

        return $classes;
    }

    add_filter('body_class', 'cozy_edge_smooth_page_transitions_class');
}

if(!function_exists('cozy_edge_content_initial_width_body_class')) {
    /**
     * Function that adds transparent content class to body.
     *
     * @param $classes array of body classes
     *
     * @return array with transparent content body class added
     */
    function cozy_edge_content_initial_width_body_class($classes) {

        if(cozy_edge_options()->getOptionValue('initial_content_width')) {
            $classes[] = 'edgtf-'.cozy_edge_options()->getOptionValue('initial_content_width');
        }

        return $classes;
    }

    add_filter('body_class', 'cozy_edge_content_initial_width_body_class');
}

if(!function_exists('cozy_edge_set_blog_body_class')) {
    /**
     * Function that adds blog class to body if blog template, shortcodes or widgets are used on site.
     *
     * @param $classes array of body classes
     *
     * @return array with blog body class added
     */
    function cozy_edge_set_blog_body_class($classes) {

        if(cozy_edge_load_blog_assets()) {
            $classes[] = 'edgtf-blog-installed';
        }

        return $classes;
    }

    add_filter('body_class', 'cozy_edge_set_blog_body_class');
}


if(!function_exists('cozy_edge_set_portfolio_single_info_follow_body_class')) {
    /**
     * Function that adds follow portfolio info class to body if sticky sidebar is enabled on portfolio single small images or small slider
     *
     * @param $classes array of body classes
     *
     * @return array with follow portfolio info class body class added
     */

    function cozy_edge_set_portfolio_single_info_follow_body_class($classes) {

        if(is_singular('portfolio-item')){
            if(cozy_edge_options()->getOptionValue('portfolio_single_sticky_sidebar') == 'yes'){
                $classes[] = 'edgtf-follow-portfolio-info';
            }
        }


        return $classes;
    }

    add_filter('body_class', 'cozy_edge_set_portfolio_single_info_follow_body_class');
}