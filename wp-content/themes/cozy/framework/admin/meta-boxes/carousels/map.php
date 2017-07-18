<?php

//Carousels
if(!function_exists('cozy_edge_map_carousel')) {
    function cozy_edge_map_carousel()
    {

        $carousel_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('carousels'),
                'title' => esc_html__('Carousel', 'cozy'),
                'name' => 'carousel_meta'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_carousel_image',
                'type' => 'image',
                'label' => esc_html__('Carousel Image', 'cozy'),
                'description' => esc_html__('Choose carousel image (min width needs to be 215px)', 'cozy'),
                'parent' => $carousel_meta_box
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_carousel_hover_image',
                'type' => 'image',
                'label' => esc_html__('Carousel Hover Image', 'cozy'),
                'description' => esc_html__('Choose carousel hover image (min width needs to be 215px)', 'cozy'),
                'parent' => $carousel_meta_box
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_carousel_item_link',
                'type' => 'text',
                'label' => esc_html__('Link', 'cozy'),
                'description' => esc_html__('Enter the URL to which you want the image to link to (e.g. http://www.example.com)', 'cozy'),
                'parent' => $carousel_meta_box
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_carousel_item_target',
                'type' => 'selectblank',
                'label' => esc_html__('Target', 'cozy'),
                'description' => esc_html__('Specify where to open the linked document', 'cozy'),
                'parent' => $carousel_meta_box,
                'options' => array(
                    '_self' => esc_html__('Self', 'cozy'),
                    '_blank' => esc_html__('Blank', 'cozy')
                )
            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_carousel');
}