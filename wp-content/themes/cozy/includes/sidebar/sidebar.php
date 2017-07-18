<?php

if(!function_exists('cozy_edge_register_sidebars')) {
    /**
     * Function that registers theme's sidebars
     */
    function cozy_edge_register_sidebars() {

        register_sidebar(array(
            'name' => esc_html__('Sidebar', 'cozy'),
            'id' => 'sidebar',
            'description' => esc_html__('Default Sidebar', 'cozy'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="edgtf-widget-title">',
            'after_title' => '</h4>' . cozy_edge_get_separator_html(array('position' => 'left', 'class_name' => 'edgtf-sidebar-title-separator'))
        ));

    }

    add_action('widgets_init', 'cozy_edge_register_sidebars');
}

if(!function_exists('cozy_edge_add_support_custom_sidebar')) {
    /**
     * Function that adds theme support for custom sidebars. It also creates CozyEdgeSidebar object
     */
    function cozy_edge_add_support_custom_sidebar() {
        add_theme_support('CozyEdgeSidebar');
        if (get_theme_support('CozyEdgeSidebar')) new CozyEdgeSidebar();
    }

    add_action('after_setup_theme', 'cozy_edge_add_support_custom_sidebar');
}
