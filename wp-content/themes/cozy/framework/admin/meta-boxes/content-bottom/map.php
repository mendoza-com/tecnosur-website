<?php

if(!function_exists('cozy_edge_map_content_bottom')) {
    function cozy_edge_map_content_bottom()
    {

        $content_bottom_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('page', 'portfolio-item', 'post'),
                'title' => esc_html__('Content Bottom', 'cozy'),
                'name' => 'content_bottom_meta'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_enable_content_bottom_area_meta',
                'type' => 'selectblank',
                'default_value' => '',
                'label' => esc_html__('Enable Content Bottom Area', 'cozy'),
                'description' => esc_html__('This option will enable Content Bottom area on pages', 'cozy'),
                'parent' => $content_bottom_meta_box,
                'options' => array(
                    'no' => esc_html__('No', 'cozy'),
                    'yes' => esc_html__('Yes', 'cozy')
                ),
                'args' => array(
                    'dependence' => true,
                    'hide' => array(
                        '' => '#edgtf_edgtf_show_content_bottom_meta_container',
                        'no' => '#edgtf_edgtf_show_content_bottom_meta_container'
                    ),
                    'show' => array(
                        'yes' => '#edgtf_edgtf_show_content_bottom_meta_container'
                    )
                )
            )
        );

        $show_content_bottom_meta_container = cozy_edge_add_admin_container(
            array(
                'parent' => $content_bottom_meta_box,
                'name' => 'edgtf_show_content_bottom_meta_container',
                'hidden_property' => 'edgtf_enable_content_bottom_area_meta',
                'hidden_value' => '',
                'hidden_values' => array('', 'no')
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_content_bottom_sidebar_custom_display_meta',
                'type' => 'selectblank',
                'default_value' => '',
                'label' => esc_html__('Sidebar to Display', 'cozy'),
                'description' => esc_html__('Choose a Content Bottom sidebar to display', 'cozy'),
                'options' => cozy_edge_get_custom_sidebars(),
                'parent' => $show_content_bottom_meta_container
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'type' => 'selectblank',
                'name' => 'edgtf_content_bottom_in_grid_meta',
                'default_value' => '',
                'label' => esc_html__('Display in Grid', 'cozy'),
                'description' => esc_html__('Enabling this option will place Content Bottom in grid', 'cozy'),
                'options' => array(
                    'no' => esc_html__('No', 'cozy'),
                    'yes' => esc_html__('Yes', 'cozy')
                ),
                'parent' => $show_content_bottom_meta_container
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'type' => 'color',
                'name' => 'edgtf_content_bottom_background_color_meta',
                'default_value' => '',
                'label' => esc_html__('Background Color', 'cozy'),
                'description' => esc_html__('Choose a background color for Content Bottom area', 'cozy'),
                'parent' => $show_content_bottom_meta_container
            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_content_bottom');
}