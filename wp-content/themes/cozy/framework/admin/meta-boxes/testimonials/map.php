<?php

//Testimonials

if(!function_exists('cozy_edge_map_testimonials')) {
    function cozy_edge_map_testimonials()
    {

        $testimonial_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('testimonials'),
                'title' => esc_html__('Testimonial', 'cozy'),
                'name' => 'testimonial_meta'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_testimonial_title',
                'type' => 'text',
                'label' => esc_html__('Title', 'cozy'),
                'description' => esc_html__('Enter testimonial title', 'cozy'),
                'parent' => $testimonial_meta_box,
            )
        );


        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_testimonial_author',
                'type' => 'text',
                'label' => esc_html__('Author', 'cozy'),
                'description' => esc_html__('Enter author name', 'cozy'),
                'parent' => $testimonial_meta_box,
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_testimonial_author_position',
                'type' => 'text',
                'label' => esc_html__('Job Position', 'cozy'),
                'description' => esc_html__('Enter job position', 'cozy'),
                'parent' => $testimonial_meta_box,
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_testimonial_text',
                'type' => 'text',
                'label' => esc_html__('Text', 'cozy'),
                'description' => esc_html__('Enter testimonial text', 'cozy'),
                'parent' => $testimonial_meta_box,
            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_testimonials');
}