<?php

/*** Quote Post Format ***/
if(!function_exists('cozy_edge_map_post_format_quote')) {
    function cozy_edge_map_post_format_quote()
    {

        $quote_post_format_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('post'),
                'title' => esc_html__('Quote Post Format', 'cozy'),
                'name' => 'post_format_quote_meta'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_post_quote_text_meta',
                'type' => 'text',
                'label' => esc_html__('Quote Text', 'cozy'),
                'description' => esc_html__('Enter Quote text', 'cozy'),
                'parent' => $quote_post_format_meta_box,

            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_post_format_quote');
}
