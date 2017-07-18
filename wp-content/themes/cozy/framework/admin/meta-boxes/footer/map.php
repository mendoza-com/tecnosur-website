<?php

if(!function_exists('cozy_edge_map_footer')) {
    function cozy_edge_map_footer()
    {
        $footer_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('page', 'portfolio-item', 'post'),
                'title' => esc_html__('Footer', 'cozy'),
                'name' => 'footer_meta'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_disable_footer_meta',
                'type' => 'yesno',
                'default_value' => 'no',
                'label' => esc_html__('Disable Footer for this Page', 'cozy'),
                'description' => esc_html__('Enabling this option will hide footer on this page', 'cozy'),
                'parent' => $footer_meta_box,
            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_footer');
}