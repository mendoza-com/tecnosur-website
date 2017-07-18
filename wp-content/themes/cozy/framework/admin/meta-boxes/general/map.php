<?php

if(!function_exists('cozy_edge_map_general')) {
    function cozy_edge_map_general()
    {
        $general_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('page', 'portfolio-item', 'post'),
                'title' => esc_html__('General', 'cozy'),
                'name' => 'general_meta'
            )
        );
        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_predefined_h_tags_style',
                'type' => 'selectblank',
                'label' => esc_html__('Predefined H tags styles', 'cozy'),
                'description' => esc_html__('Choose predefined style', 'cozy'),
                'parent' => $general_meta_box,
                'default_value' => '',
                'options' => array(
                    'edgtf-h-style-1' => esc_html__('Enable', 'cozy')
                )
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_page_background_color_meta',
                'type' => 'color',
                'default_value' => '',
                'label' => esc_html__('Page Background Color', 'cozy'),
                'description' => esc_html__('Choose background color for page content', 'cozy'),
                'parent' => $general_meta_box
            )
        );

        $edgtf_content_padding_group = cozy_edge_add_admin_group(array(
            'name' => 'content_padding_group',
            'title' => esc_html__('Content Style', 'cozy'),
            'description' => esc_html__('Define styles for Content area', 'cozy'),
            'parent' => $general_meta_box
        ));

        $edgtf_content_padding_row = cozy_edge_add_admin_row(array(
            'name' => 'edgtf_content_padding_row',
            'next' => true,
            'parent' => $edgtf_content_padding_group
        ));

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_page_content_top_padding',
                'type' => 'textsimple',
                'default_value' => '',
                'label' => esc_html__('Content Top Padding', 'cozy'),
                'parent' => $edgtf_content_padding_row,
                'args' => array(
                    'suffix' => 'px'
                )
            )
        );
        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_page_content_right_padding',
                'type' => 'textsimple',
                'default_value' => '',
                'label' => esc_html__('Content Right Padding', 'cozy'),
                'parent' => $edgtf_content_padding_row,
                'args' => array(
                    'suffix' => 'px'
                )
            )
        );
        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_page_content_bottom_padding',
                'type' => 'textsimple',
                'default_value' => '',
                'label' => esc_html__('Content Bottom Padding', 'cozy'),
                'parent' => $edgtf_content_padding_row,
                'args' => array(
                    'suffix' => 'px'
                )
            )
        );
        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_page_content_left_padding',
                'type' => 'textsimple',
                'default_value' => '',
                'label' => esc_html__('Content Left Padding', 'cozy'),
                'parent' => $edgtf_content_padding_row,
                'args' => array(
                    'suffix' => 'px'
                )
            )
        );

        $edgtf_content_padding_row2 = cozy_edge_add_admin_row(array(
            'name' => 'edgtf_content_padding_row2',
            'next' => true,
            'parent' => $edgtf_content_padding_group
        ));

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_page_content_top_padding_mobile',
                'type' => 'selectblanksimple',
                'label' => esc_html__('Set this top padding for mobile header', 'cozy'),
                'parent' => $edgtf_content_padding_row2,
                'options' => array(
                    'yes' => esc_html__('Yes', 'cozy'),
                    'no' => esc_html__('No', 'cozy')
                )
            )
        );

        cozy_edge_add_meta_box_field(array(
            'name' => 'edgtf_overlapping_content_enable_meta',
            'type' => 'yesno',
            'default_value' => 'no',
            'label' => esc_html__('Enable Overlapping Content', 'cozy'),
            'description' => esc_html__('Enabling this option will make content overlap title area', 'cozy'),
            'parent' => $general_meta_box
        ));

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_page_slider_meta',
                'type' => 'text',
                'default_value' => '',
                'label' => esc_html__('Slider Shortcode', 'cozy'),
                'description' => esc_html__('Paste your slider shortcode here', 'cozy'),
                'parent' => $general_meta_box
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_page_transition_type',
                'type' => 'selectblank',
                'label' => esc_html__('Page Transition', 'cozy'),
                'description' => esc_html__('Choose the type of transition to this page', 'cozy'),
                'parent' => $general_meta_box,
                'default_value' => '',
                'options' => array(
                    'no-animation' => esc_html__('No animation', 'cozy'),
                    'fade' => esc_html__('Fade', 'cozy')
                )
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_page_comments_meta',
                'type' => 'selectblank',
                'label' => esc_html__('Show Comments', 'cozy'),
                'description' => esc_html__('Enabling this option will show comments on your page', 'cozy'),
                'parent' => $general_meta_box,
                'options' => array(
                    'yes' => esc_html__('Yes', 'cozy'),
                    'no' => esc_html__('No', 'cozy')
                )
            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_general');
}