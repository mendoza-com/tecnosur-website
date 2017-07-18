<?php

if(!function_exists('cozy_edge_map_sidebar')) {
    function cozy_edge_map_sidebar()
    {

        $custom_sidebars = cozy_edge_get_custom_sidebars();

        $sidebar_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('page', 'portfolio-item', 'post'),
                'title' => esc_html__('Sidebar', 'cozy'),
                'name' => 'sidebar_meta'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_sidebar_meta',
                'type' => 'select',
                'label' => esc_html__('Layout', 'cozy'),
                'description' => esc_html__('Choose the sidebar layout', 'cozy'),
                'parent' => $sidebar_meta_box,
                'options' => array(
                    '' => esc_html__('Default', 'cozy'),
                    'no-sidebar' => esc_html__('No Sidebar', 'cozy'),
                    'sidebar-33-right' => esc_html__('Sidebar 1/3 Right', 'cozy'),
                    'sidebar-25-right' => esc_html__('Sidebar 1/4 Right', 'cozy'),
                    'sidebar-33-left' => esc_html__('Sidebar 1/3 Left', 'cozy'),
                    'sidebar-25-left' => esc_html__('Sidebar 1/4 Left', 'cozy'),
                )
            )
        );

        if (count($custom_sidebars) > 0) {
            cozy_edge_add_meta_box_field(array(
                'name' => 'edgtf_custom_sidebar_meta',
                'type' => 'selectblank',
                'label' => esc_html__('Choose Widget Area in Sidebar', 'cozy'),
                'description' => esc_html__('Choose Custom Widget area to display in Sidebar"', 'cozy'),
                'parent' => $sidebar_meta_box,
                'options' => $custom_sidebars
            ));
        }
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_sidebar');
}
