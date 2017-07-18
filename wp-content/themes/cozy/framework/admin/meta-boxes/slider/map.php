<?php

//Slider

if(!function_exists('cozy_edge_map_slider')) {
    function cozy_edge_map_slider()
    {

        $slider_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('slides'),
                'title' => esc_html__('Slide Background', 'cozy'),
                'name' => 'slides_type'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_background_type',
                'type' => 'select',
                'default_value' => 'image',
                'label' => esc_html__('Slide Background Type', 'cozy'),
                'description' => esc_html__('Do you want to upload an image or video?', 'cozy'),
                'parent' => $slider_meta_box,
                'options' => array(
                    "image" => esc_html__("Image", 'cozy'),
                    "video" => esc_html__("Video", 'cozy')
                ),
                'args' => array(
                    "dependence" => true,
                    "hide" => array(
                        "image" => "#edgtf_edgtf_slides_video_settings",
                        "video" => "#edgtf_edgtf_slides_image_settings"
                    ),
                    "show" => array(
                        "image" => "#edgtf_edgtf_slides_image_settings",
                        "video" => "#edgtf_edgtf_slides_video_settings"
                    )
                )
            )
        );


//Slide Image

        $image_meta_container = cozy_edge_add_admin_container(
            array(
                'name' => 'edgtf_slides_image_settings',
                'parent' => $slider_meta_box,
                'hidden_property' => 'edgtf_slide_background_type',
                'hidden_values' => array('video')
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_image',
                'type' => 'image',
                'label' => esc_html__('Slide Image', 'cozy'),
                'description' => esc_html__('Choose background image', 'cozy'),
                'parent' => $image_meta_container
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_overlay_image',
                'type' => 'image',
                'label' => esc_html__('Overlay Image', 'cozy'),
                'description' => esc_html__('Choose overlay image (pattern) for background image', 'cozy'),
                'parent' => $image_meta_container
            )
        );


//Slide Video

        $video_meta_container = cozy_edge_add_admin_container(
            array(
                'name' => 'edgtf_slides_video_settings',
                'parent' => $slider_meta_box,
                'hidden_property' => 'edgtf_slide_background_type',
                'hidden_values' => array('image')
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_video_webm',
                'type' => 'text',
                'label' => esc_html__('Video - webm', 'cozy'),
                'description' => esc_html__('Path to the webm file that you have previously uploaded in Media Section', 'cozy'),
                'parent' => $video_meta_container
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_video_mp4',
                'type' => 'text',
                'label' => esc_html__('Video - mp4', 'cozy'),
                'description' => esc_html__('Path to the mp4 file that you have previously uploaded in Media Section', 'cozy'),
                'parent' => $video_meta_container
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_video_ogv',
                'type' => 'text',
                'label' => esc_html__('Video - ogv', 'cozy'),
                'description' => esc_html__('Path to the ogv file that you have previously uploaded in Media Section', 'cozy'),
                'parent' => $video_meta_container
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_video_image',
                'type' => 'image',
                'label' => esc_html__('Video Preview Image', 'cozy'),
                'description' => esc_html__('Choose background image that will be visible until video is loaded. This image will be shown on touch devices too.', 'cozy'),
                'parent' => $video_meta_container
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_video_overlay',
                'type' => 'yesempty',
                'default_value' => '',
                'label' => esc_html__('Video Overlay Image', 'cozy'),
                'description' => esc_html__('Do you want to have a overlay image on video?', 'cozy'),
                'parent' => $video_meta_container,
                'args' => array(
                    "dependence" => true,
                    "dependence_hide_on_yes" => "",
                    "dependence_show_on_yes" => "#edgtf_edgtf_slide_video_overlay_container"
                )
            )
        );

        $slide_video_overlay_container = cozy_edge_add_admin_container(array(
            'name' => 'edgtf_slide_video_overlay_container',
            'parent' => $video_meta_container,
            'hidden_property' => 'edgtf_slide_video_overlay',
            'hidden_values' => array('', 'no')
        ));

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_video_overlay_image',
                'type' => 'image',
                'label' => esc_html__('Overlay Image', 'cozy'),
                'description' => esc_html__('Choose overlay image (pattern) for background video.', 'cozy'),
                'parent' => $slide_video_overlay_container
            )
        );


//Slide Elements

        $elements_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('slides'),
                'title' => esc_html__('Slide Elements', 'cozy'),
                'name' => 'edgtf_slides_elements'
            )
        );

        cozy_edge_add_admin_section_title(
            array(
                'parent' => $elements_meta_box,
                'name' => 'edgtf_slides_elements_frame',
                'title' => esc_html__('Elements Holder Frame', 'cozy')
            )
        );

        cozy_edge_add_slide_holder_frame_scheme(
            array(
                'parent' => $elements_meta_box
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_holder_elements_alignment',
                'type' => 'select',
                'label' => esc_html__('Elements Alignment', 'cozy'),
                'description' => esc_html__('How elements are aligned with respect to the Holder Frame', 'cozy'),
                'parent' => $elements_meta_box,
                'default_value' => 'center',
                'options' => array(
                    "center" => esc_html__("Center", 'cozy'),
                    "left" => esc_html__("Left", 'cozy'),
                    "right" => esc_html__("Right", 'cozy'),
                    "custom" => esc_html__("Custom", 'cozy')
                ),
                'args' => array(
                    "dependence" => true,
                    "hide" => array(
                        "center" => "#edgtf_edgtf_slide_holder_frame_height",
                        "left" => "#edgtf_edgtf_slide_holder_frame_height",
                        "right" => "#edgtf_edgtf_slide_holder_frame_height",
                        "custom" => ""
                    ),
                    "show" => array(
                        "center" => "",
                        "left" => "",
                        "right" => "",
                        "custom" => "#edgtf_edgtf_slide_holder_frame_height"
                    )
                )
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_holder_frame_in_grid',
                'type' => 'select',
                'label' => esc_html__('Holder Frame in Grid?', 'cozy'),
                'description' => esc_html__('Whether to keep the holder frame width the same as that of the grid.', 'cozy'),
                'parent' => $elements_meta_box,
                'default_value' => 'no',
                'options' => array(
                    "yes" => esc_html__("Yes", 'cozy'),
                    "no" => esc_html__("No", 'cozy')
                ),
                'args' => array(
                    "dependence" => true,
                    "hide" => array(
                        "yes" => "#edgtf_edgtf_slide_holder_frame_width, #edgtf_edgtf_holder_frame_responsive_container",
                        "no" => ""
                    ),
                    "show" => array(
                        "yes" => "",
                        "no" => "#edgtf_edgtf_slide_holder_frame_width, #edgtf_edgtf_holder_frame_responsive_container"
                    )
                )
            )
        );

        $holder_frame = cozy_edge_add_admin_group(array(
            'title' => esc_html__('Holder Frame Properties', 'cozy'),
            'description' => esc_html__('The frame is always positioned centrally on the slide. All elements are positioned and sized relatively to the holder frame. Refer to the scheme above.', 'cozy'),
            'name' => 'edgtf_holder_frame',
            'parent' => $elements_meta_box
        ));

        $row1 = cozy_edge_add_admin_row(array(
            'name' => 'row1',
            'parent' => $holder_frame
        ));

        $holder_frame_width = cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_holder_frame_width',
                'type' => 'textsimple',
                'label' => esc_html__('Relative width (C/A*100)', 'cozy'),
                'parent' => $row1,
                'hidden_property' => 'edgtf_slide_holder_frame_in_grid',
                'hidden_values' => array('yes')
            )
        );

        $holder_frame_height = cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_holder_frame_height',
                'type' => 'textsimple',
                'label' => esc_html__('Height to width ratio (D/C*100)', 'cozy'),
                'parent' => $row1,
                'hidden_property' => 'edgtf_slide_holder_elements_alignment',
                'hidden_values' => array('center', 'left', 'right')
            )
        );

        $holder_frame_responsive_container = cozy_edge_add_admin_container(array(
            'name' => 'edgtf_holder_frame_responsive_container',
            'parent' => $elements_meta_box,
            'hidden_property' => 'edgtf_slide_holder_frame_in_grid',
            'hidden_values' => array('yes')
        ));

        $holder_frame_responsive = cozy_edge_add_admin_group(array(
            'title' => esc_html__('Responsive Relative Width', 'cozy'),
            'description' => esc_html__('Enter different relative widths of the holder frame for each responsive stage. Leave blank to have the frame width scale proportionally to the screen size.', 'cozy'),
            'name' => 'edgtf_holder_frame_responsive',
            'parent' => $holder_frame_responsive_container
        ));

        $screen_widths_holder_frame = array(
            // These values must match those in edgt.layout.inc, slider.php and shortcodes.js
            "mobile" => 600,
            "tabletp" => 800,
            "tabletl" => 1024,
            "laptop" => 1440
        );

        $row2 = cozy_edge_add_admin_row(array(
            'name' => 'row2',
            'parent' => $holder_frame_responsive
        ));

        $holder_frame_width = cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_holder_frame_width_mobile',
                'type' => 'textsimple',
                'label' => sprintf( esc_html__( 'Mobile (up to %s px)', 'cozy' ), $screen_widths_holder_frame["mobile"] ),
                'parent' => $row2
            )
        );

        $holder_frame_height = cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_holder_frame_width_tablet_p',
                'type' => 'textsimple',
                'label' => sprintf( esc_html__( 'Tablet - Portrait (%s - %s px)', 'cozy' ), $screen_widths_holder_frame["mobile"] + 1,  $screen_widths_holder_frame["tabletp"]),
                'parent' => $row2
            )
        );

        $holder_frame_height = cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_holder_frame_width_tablet_l',
                'type' => 'textsimple',
                'label' => sprintf( esc_html__( 'Tablet - Landscape (%s - %s px)', 'cozy' ), $screen_widths_holder_frame["tabletp"] + 1,  $screen_widths_holder_frame["tabletl"]),
                'parent' => $row2
            )
        );

        $row3 = cozy_edge_add_admin_row(array(
            'name' => 'row3',
            'parent' => $holder_frame_responsive
        ));

        $holder_frame_width = cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_holder_frame_width_laptop',
                'type' => 'textsimple',
                'label' => sprintf( esc_html__( 'Laptop (%s - %s px)', 'cozy' ), $screen_widths_holder_frame["tabletl"] + 1,  $screen_widths_holder_frame["laptop"]),
                'parent' => $row3
            )
        );

        $holder_frame_height = cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_slide_holder_frame_width_desktop',
                'type' => 'textsimple',
                'label' => sprintf( esc_html__( 'Desktop (above %s px)', 'cozy' ), $screen_widths_holder_frame["laptop"] ),
                'parent' => $row3
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'parent' => $elements_meta_box,
                'type' => 'text',
                'name' => 'edgtf_slide_elements_default_width',
                'label' => esc_html__('Default Screen Width in px (A)', 'cozy'),
                'description' => esc_html__('All elements marked as responsive scale at the ratio of the actual screen width to this screen width. Default is 1920px.', 'cozy')
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'parent' => $elements_meta_box,
                'type' => 'select',
                'name' => 'edgtf_slide_elements_default_animation',
                'default_value' => 'none',
                'label' => esc_html__('Default Elements Animation', 'cozy'),
                'description' => esc_html__('This animation will be applied to all elements except those with their own animation settings.', 'cozy'),
                'options' => array(
                    "none" => esc_html__("No Animation", 'cozy'),
                    "flip" => esc_html__("Flip", 'cozy'),
                    "spin" => esc_html__("Spin", 'cozy'),
                    "fade" => esc_html__("Fade In", 'cozy'),
                    "from_bottom" => esc_html__("Fly In From Bottom", 'cozy'),
                    "from_top" => esc_html__("Fly In From Top", 'cozy'),
                    "from_left" => esc_html__("Fly In From Left", 'cozy'),
                    "from_right" => esc_html__("Fly In From Right", 'cozy')
                )
            )
        );

        cozy_edge_add_admin_section_title(
            array(
                'parent' => $elements_meta_box,
                'name' => 'edgtf_slides_elements_list',
                'title' => esc_html__('Elements', 'cozy')
            )
        );

        $slide_elements = cozy_edge_add_slide_elements_framework(
            array(
                'parent' => $elements_meta_box,
                'name' => 'edgtf_slides_elements_holder'
            )
        );

//Slide Behaviour

        $behaviours_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('slides'),
                'title' => esc_html__('Slide Behaviours', 'cozy'),
                'name' => 'edgtf_slides_behaviour_settings'
            )
        );

        cozy_edge_add_admin_section_title(
            array(
                'parent' => $behaviours_meta_box,
                'name' => 'edgtf_header_styling_title',
                'title' => esc_html__('Header', 'cozy')
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'parent' => $behaviours_meta_box,
                'type' => 'selectblank',
                'name' => 'edgtf_slide_header_style',
                'default_value' => '',
                'label' => esc_html__('Header Style', 'cozy'),
                'description' => esc_html__('Header style will be applied when this slide is in focus', 'cozy'),
                'options' => array(
                    "light" => esc_html__("Light", 'cozy'),
                    "dark" => esc_html__("Dark", 'cozy')
                )
            )
        );

        cozy_edge_add_admin_section_title(
            array(
                'parent' => $behaviours_meta_box,
                'name' => 'edgtf_image_animation_title',
                'title' => esc_html__('Slide Image Animation', 'cozy')
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_enable_image_animation',
                'type' => 'yesno',
                'default_value' => 'no',
                'label' => esc_html__('Enable Image Animation', 'cozy'),
                'description' => esc_html__('Enabling this option will turn on a motion animation on the slide image', 'cozy'),
                'parent' => $behaviours_meta_box,
                'args' => array(
                    "dependence" => true,
                    "dependence_hide_on_yes" => "",
                    "dependence_show_on_yes" => "#edgtf_edgtf_enable_image_animation_container"
                )
            )
        );

        $enable_image_animation_container = cozy_edge_add_admin_container(array(
            'name' => 'edgtf_enable_image_animation_container',
            'parent' => $behaviours_meta_box,
            'hidden_property' => 'edgtf_enable_image_animation',
            'hidden_value' => 'no'
        ));

        cozy_edge_add_meta_box_field(
            array(
                'parent' => $enable_image_animation_container,
                'type' => 'select',
                'name' => 'edgtf_enable_image_animation_type',
                'default_value' => 'zoom_center',
                'label' => esc_html__('Animation Type', 'cozy'),
                'options' => array(
                    "zoom_center" => esc_html__("Zoom In Center", 'cozy'),
                    "zoom_top_left" => esc_html__("Zoom In to Top Left", 'cozy'),
                    "zoom_top_right" => esc_html__("Zoom In to Top Right", 'cozy'),
                    "zoom_bottom_left" => esc_html__("Zoom In to Bottom Left", 'cozy'),
                    "zoom_bottom_right" => esc_html__("Zoom In to Bottom Right", 'cozy')
                )
            )
        );
    }
    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_slider');
}