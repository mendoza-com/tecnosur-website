<?php


if(!function_exists('cozy_edge_map_title')) {
    function cozy_edge_map_title()
    {
        $title_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('page', 'portfolio-item', 'post'),
                'title' => esc_html__('Title', 'cozy'),
                'name' => 'title_meta'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_show_title_area_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => esc_html__('Show Title Area', 'cozy'),
                'description' => esc_html__('Disabling this option will turn off page title area', 'cozy'),
                'parent' => $title_meta_box,
                'options' => array(
                    '' => '',
                    'no' => esc_html__('No', 'cozy'),
                    'yes' => esc_html__('Yes', 'cozy')
                ),
                'args' => array(
                    "dependence" => true,
                    "hide" => array(
                        "" => "",
                        "no" => "#edgtf_edgtf_show_title_area_meta_container",
                        "yes" => ""
                    ),
                    "show" => array(
                        "" => "#edgtf_edgtf_show_title_area_meta_container",
                        "no" => "",
                        "yes" => "#edgtf_edgtf_show_title_area_meta_container"
                    )
                )
            )
        );

        $show_title_area_meta_container = cozy_edge_add_admin_container(
            array(
                'parent' => $title_meta_box,
                'name' => 'edgtf_show_title_area_meta_container',
                'hidden_property' => 'edgtf_show_title_area_meta',
                'hidden_value' => 'no'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_type_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => esc_html__('Title Area Type', 'cozy'),
                'description' => esc_html__('Choose title type', 'cozy'),
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    '' => '',
                    'standard' => esc_html__('Standard', 'cozy'),
                    'breadcrumb' => esc_html__('Breadcrumb', 'cozy')
                ),
                'args' => array(
                    "dependence" => true,
                    "hide" => array(
                        "standard" => "",
                        "breadcrumb" => "#edgtf_edgtf_title_area_type_meta_container"
                    ),
                    "show" => array(
                        "" => "#edgtf_edgtf_title_area_type_meta_container",
                        "standard" => "#edgtf_edgtf_title_area_type_meta_container",
                        "breadcrumb" => ""
                    )
                )
            )
        );

        $title_area_type_meta_container = cozy_edge_add_admin_container(
            array(
                'parent' => $show_title_area_meta_container,
                'name' => 'edgtf_title_area_type_meta_container',
                'hidden_property' => 'edgtf_title_area_type_meta',
                'hidden_value' => '',
                'hidden_values' => array('breadcrumb'),
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_enable_breadcrumbs_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => esc_html__('Enable Breadcrumbs', 'cozy'),
                'description' => esc_html__('This option will display Breadcrumbs in Title Area', 'cozy'),
                'parent' => $title_area_type_meta_container,
                'options' => array(
                    '' => '',
                    'no' => esc_html__('No', 'cozy'),
                    'yes' => esc_html__('Yes', 'cozy')
                ),
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_enable_separator_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => esc_html__('Enable Separator', 'cozy'),
                'description' => esc_html__('This option will display Separator in Title Area', 'cozy'),
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    '' => '',
                    'no' => esc_html__('No', 'cozy'),
                    'yes' => esc_html__('Yes', 'cozy')
                )
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_animation_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => esc_html__('Animations', 'cozy'),
                'description' => esc_html__('Choose an animation for Title Area', 'cozy'),
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    '' => '',
                    'no' => esc_html__('No Animation', 'cozy'),
                    'right-left' => esc_html__('Text right to left', 'cozy'),
                    'left-right' => esc_html__('Text left to right', 'cozy')
                )
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_vertial_alignment_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => esc_html__('Vertical Alignment', 'cozy'),
                'description' => esc_html__('Specify title vertical alignment', 'cozy'),
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    '' => '',
                    'header_bottom' => esc_html__('From Bottom of Header', 'cozy'),
                    'window_top' => esc_html__('From Window Top', 'cozy')
                )
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_content_alignment_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => esc_html__('Horizontal Alignment', 'cozy'),
                'description' => esc_html__('Specify title horizontal alignment', 'cozy'),
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    '' => '',
                    'left' => esc_html__('Left', 'cozy'),
                    'center' => esc_html__('Center', 'cozy'),
                    'right' => esc_html__('Right', 'cozy')
                )
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_text_size_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => esc_html__('Text Size', 'cozy'),
                'description' => esc_html__('Choose a default Title size', 'cozy'),
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    '' => '',
                    'large' => esc_html__('Large', 'cozy'),
                    'medium' => esc_html__('Medium', 'cozy'),
                    'small' => esc_html__('Small', 'cozy')
                )
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_text_color_meta',
                'type' => 'color',
                'label' => esc_html__('Title Color', 'cozy'),
                'description' => esc_html__('Choose a color for title text', 'cozy'),
                'parent' => $show_title_area_meta_container
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_breadcrumb_color_meta',
                'type' => 'color',
                'label' => esc_html__('Breadcrumb Color', 'cozy'),
                'description' => esc_html__('Choose a color for breadcrumb text', 'cozy'),
                'parent' => $show_title_area_meta_container
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_background_color_meta',
                'type' => 'color',
                'label' => esc_html__('Background Color', 'cozy'),
                'description' => esc_html__('Choose a background color for Title Area', 'cozy'),
                'parent' => $show_title_area_meta_container
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_hide_background_image_meta',
                'type' => 'yesno',
                'default_value' => 'no',
                'label' => esc_html__('Hide Background Image', 'cozy'),
                'description' => esc_html__('Enable this option to hide background image in Title Area', 'cozy'),
                'parent' => $show_title_area_meta_container,
                'args' => array(
                    "dependence" => true,
                    "dependence_hide_on_yes" => "#edgtf_edgtf_hide_background_image_meta_container",
                    "dependence_show_on_yes" => ""
                )
            )
        );

        $hide_background_image_meta_container = cozy_edge_add_admin_container(
            array(
                'parent' => $show_title_area_meta_container,
                'name' => 'edgtf_hide_background_image_meta_container',
                'hidden_property' => 'edgtf_hide_background_image_meta',
                'hidden_value' => 'yes'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_background_image_meta',
                'type' => 'image',
                'label' => esc_html__('Background Image', 'cozy'),
                'description' => esc_html__('Choose an Image for Title Area', 'cozy'),
                'parent' => $hide_background_image_meta_container
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_background_image_responsive_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => esc_html__('Background Responsive Image', 'cozy'),
                'description' => esc_html__('Enabling this option will make Title background image responsive', 'cozy'),
                'parent' => $hide_background_image_meta_container,
                'options' => array(
                    '' => '',
                    'no' => esc_html__('No', 'cozy'),
                    'yes' => esc_html__('Yes', 'cozy')
                ),
                'args' => array(
                    "dependence" => true,
                    "hide" => array(
                        "" => "",
                        "no" => "",
                        "yes" => "#edgtf_edgtf_title_area_background_image_responsive_meta_container, #edgtf_edgtf_title_area_height_meta"
                    ),
                    "show" => array(
                        "" => "#edgtf_edgtf_title_area_background_image_responsive_meta_container, #edgtf_edgtf_title_area_height_meta",
                        "no" => "#edgtf_edgtf_title_area_background_image_responsive_meta_container, #edgtf_edgtf_title_area_height_meta",
                        "yes" => ""
                    )
                )
            )
        );

        $title_area_background_image_responsive_meta_container = cozy_edge_add_admin_container(
            array(
                'parent' => $hide_background_image_meta_container,
                'name' => 'edgtf_title_area_background_image_responsive_meta_container',
                'hidden_property' => 'edgtf_title_area_background_image_responsive_meta',
                'hidden_value' => 'yes'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_background_image_parallax_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => esc_html__('Background Image in Parallax', 'cozy'),
                'description' => esc_html__('Enabling this option will make Title background image parallax', 'cozy'),
                'parent' => $title_area_background_image_responsive_meta_container,
                'options' => array(
                    '' => '',
                    'no' => esc_html__('No', 'cozy'),
                    'yes' => esc_html__('Yes', 'cozy'),
                    'yes_zoom' => esc_html__('Yes, with zoom out', 'cozy')
                )
            )
        );

        cozy_edge_add_meta_box_field(array(
            'name' => 'edgtf_title_area_height_meta',
            'type' => 'text',
            'label' => esc_html__('Height', 'cozy'),
            'description' => esc_html__('Set a height for Title Area', 'cozy'),
            'parent' => $show_title_area_meta_container,
            'args' => array(
                'col_width' => 2,
                'suffix' => 'px'
            )
        ));

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_title_area_border_bottom_meta',
                'type' => 'select',
                'default_value' => '',
                'label' => esc_html__('Enable Border Bottom', 'cozy'),
                'description' => esc_html__('This option will display Border Bottom in Title Area', 'cozy'),
                'parent' => $show_title_area_meta_container,
                'options' => array(
                    '' => '',
                    'no' => esc_html__('No', 'cozy'),
                    'yes' => esc_html__('Yes', 'cozy')
                )
            )
        );

        cozy_edge_add_meta_box_field(array(
            'name' => 'edgtf_title_area_subtitle_meta',
            'type' => 'text',
            'default_value' => '',
            'label' => esc_html__('Subtitle Text', 'cozy'),
            'description' => esc_html__('Enter your subtitle text', 'cozy'),
            'parent' => $show_title_area_meta_container,
            'args' => array(
                'col_width' => 6
            )
        ));

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_subtitle_color_meta',
                'type' => 'color',
                'label' => esc_html__('Subtitle Color', 'cozy'),
                'description' => esc_html__('Choose a color for subtitle text', 'cozy'),
                'parent' => $show_title_area_meta_container
            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_title');
}