<?php

/*** Audio Post Format ***/

if(!function_exists('cozy_edge_map_post_format_audio')) {
    function cozy_edge_map_post_format_audio()
    {

        $audio_post_format_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('post'),
                'title' => esc_html__('Audio Post Format', 'cozy'),
                'name' => 'post_format_audio_meta'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_post_audio_link_meta',
                'type' => 'text',
                'label' => esc_html__('Link', 'cozy'),
                'description' => esc_html__('Enter audion link', 'cozy'),
                'parent' => $audio_post_format_meta_box,

            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_post_format_audio');
}
