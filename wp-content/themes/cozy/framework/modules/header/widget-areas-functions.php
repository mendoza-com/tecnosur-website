<?php

if(!function_exists('cozy_edge_register_top_header_areas')) {
    /**
     * Registers widget areas for top header bar when it is enabled
     */
    function cozy_edge_register_top_header_areas() {
        $top_bar_layout  = cozy_edge_options()->getOptionValue('top_bar_layout');
        $top_bar_enabled = cozy_edge_options()->getOptionValue('top_bar');

            register_sidebar(array(
                'name'          => esc_html__('Top Bar Left', 'cozy'),
                'id'            => 'edgtf-top-bar-left',
                'before_widget' => '<div id="%1$s" class="widget %2$s edgtf-top-bar-widget">',
                'after_widget'  => '</div>'
            ));

            //register this widget area only if top bar layout is three columns
            if($top_bar_layout === 'three-columns') {
                register_sidebar(array(
                    'name'          => esc_html__('Top Bar Center', 'cozy'),
                    'id'            => 'edgtf-top-bar-center',
                    'before_widget' => '<div id="%1$s" class="widget %2$s edgtf-top-bar-widget">',
                    'after_widget'  => '</div>'
                ));
            }

            register_sidebar(array(
                'name'          => esc_html__('Top Bar Right', 'cozy'),
                'id'            => 'edgtf-top-bar-right',
                'before_widget' => '<div id="%1$s" class="widget %2$s edgtf-top-bar-widget">',
                'after_widget'  => '</div>'
            ));
    }

    add_action('widgets_init', 'cozy_edge_register_top_header_areas');
}

if(!function_exists('cozy_edge_header_standard_widget_areas')) {
    /**
     * Registers widget areas for standard header type
     */
    function cozy_edge_header_standard_widget_areas() {
            register_sidebar(array(
                'name'          => esc_html__('Right From Main Menu', 'cozy'),
                'id'            => 'edgtf-right-from-main-menu',
                'before_widget' => '<div id="%1$s" class="widget %2$s edgtf-right-from-main-menu-widget">',
                'after_widget'  => '</div>',
                'description'   => esc_html__('Widgets added here will appear on the right hand side from the main menu', 'cozy')
            ));

    }

    add_action('widgets_init', 'cozy_edge_header_standard_widget_areas');
}

if(!function_exists('cozy_edge_header_vertical_widget_areas')) {
    /**
     * Registers widget areas for vertical header
     */
    function cozy_edge_header_vertical_widget_areas() {
            register_sidebar(array(
                'name'          => esc_html__('Vertical Area', 'cozy'),
                'id'            => 'edgtf-vertical-area',
                'before_widget' => '<div id="%1$s" class="widget %2$s edgtf-vertical-area-widget">',
                'after_widget'  => '</div>',
                'description'   => esc_html__('Widgets added here will appear on the bottom of vertical menu', 'cozy')
            ));
    }

    add_action('widgets_init', 'cozy_edge_header_vertical_widget_areas');
}

if(!function_exists('cozy_edge_register_mobile_header_areas')) {
    /**
     * Registers widget areas for mobile header
     */
    function cozy_edge_register_mobile_header_areas() {
        if(cozy_edge_is_responsive_on()) {
            register_sidebar(array(
                'name'          => esc_html__('Right From Mobile Logo', 'cozy'),
                'id'            => 'edgtf-right-from-mobile-logo',
                'before_widget' => '<div id="%1$s" class="widget %2$s edgtf-right-from-mobile-logo">',
                'after_widget'  => '</div>',
                'description'   => esc_html__('Widgets added here will appear on the right hand side from the mobile logo', 'cozy')
            ));
        }
    }

    add_action('widgets_init', 'cozy_edge_register_mobile_header_areas');
}

if(!function_exists('cozy_edge_register_sticky_header_areas')) {
    /**
     * Registers widget area for sticky header
     */
    function cozy_edge_register_sticky_header_areas() {
        if(in_array(cozy_edge_options()->getOptionValue('header_behaviour'), array('sticky-header-on-scroll-up','sticky-header-on-scroll-down-up'))) {
            register_sidebar(array(
                'name'          => esc_html__('Sticky Right', 'cozy'),
                'id'            => 'edgtf-sticky-right',
                'before_widget' => '<div id="%1$s" class="widget %2$s edgtf-sticky-right">',
                'after_widget'  => '</div>',
                'description'   => esc_html__('Widgets added here will appear on the right hand side in sticky menu', 'cozy')
            ));
        }
    }

    add_action('widgets_init', 'cozy_edge_register_sticky_header_areas');
}