<?php

/*** Gallery Post Format ***/

if(!function_exists('cozy_edge_map_post_format_gallery')) {
    function cozy_edge_map_post_format_gallery()
    {

        $gallery_post_format_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('post'),
                'title' => esc_html__('Gallery Post Format', 'cozy'),
                'name' => 'post_format_gallery_meta'
            )
        );

        cozy_edge_add_multiple_images_field(
            array(
                'name' => 'edgtf_post_gallery_images_meta',
                'label' => esc_html__('Gallery Images', 'cozy'),
                'description' => esc_html__('Choose your gallery images', 'cozy'),
                'parent' => $gallery_post_format_meta_box,
            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_post_format_gallery');
}
