<?php

/*** Link Post Format ***/

if(!function_exists('cozy_edge_map_post_format_link')) {
    function cozy_edge_map_post_format_link()
    {

        $link_post_format_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('post'),
                'title' => esc_html__('Link Post Format', 'cozy'),
                'name' => 'post_format_link_meta'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_post_link_link_meta',
                'type' => 'text',
                'label' => esc_html__('Link', 'cozy'),
                'description' => esc_html__('Enter link', 'cozy'),
                'parent' => $link_post_format_meta_box,

            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_post_format_link');
}

