<?php

if ( ! function_exists('cozy_edge_general_options_map') ) {
    /**
     * General options page
     */
    function cozy_edge_general_options_map() {

        cozy_edge_add_admin_page(
            array(
                'slug'  => '',
                'title' => esc_html__('General', 'cozy'),
                'icon'  => 'fa fa-institution'
            )
        );

        $panel_design_style = cozy_edge_add_admin_panel(
            array(
                'page'  => '',
                'name'  => 'panel_design_style',
                'title' => esc_html__('Design Style', 'cozy')
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'google_fonts',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'cozy'),
                'description'   => esc_html__('Choose a default Google font for your site (default is Montserrat)', 'cozy'),
                'parent' => $panel_design_style
            )
        );

	    cozy_edge_add_admin_field(
		    array(
			    'name'          => 'google_fonts_second',
			    'type'          => 'font',
			    'default_value' => '-1',
			    'label'         => esc_html__('Second Font Family', 'cozy'),
			    'description'   => esc_html__('Choose a default Google font for your site (default is Open Sans)', 'cozy'),
			    'parent' => $panel_design_style
		    )
	    );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'additional_google_fonts',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__('Additional Google Fonts', 'cozy'),
                'description'   => esc_html__('Choose additional Google font for your site (default is Open Sans)', 'cozy'),
                'parent'        => $panel_design_style,
                'args'          => array(
                    "dependence" => true,
                    "dependence_hide_on_yes" => "",
                    "dependence_show_on_yes" => "#edgtf_additional_google_fonts_container"
                )
            )
        );

        $additional_google_fonts_container = cozy_edge_add_admin_container(
            array(
                'parent'            => $panel_design_style,
                'name'              => 'additional_google_fonts_container',
                'hidden_property'   => 'additional_google_fonts',
                'hidden_value'      => 'no'
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'additional_google_font1',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'cozy'),
                'description'   => esc_html__('Choose additional Google font for your site', 'cozy'),
                'parent'        => $additional_google_fonts_container
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'additional_google_font2',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'cozy'),
                'description'   => esc_html__('Choose additional Google font for your site', 'cozy'),
                'parent'        => $additional_google_fonts_container
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'additional_google_font3',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'cozy'),
                'description'   => esc_html__('Choose additional Google font for your site', 'cozy'),
                'parent'        => $additional_google_fonts_container
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'additional_google_font4',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'cozy'),
                'description'   => esc_html__('Choose additional Google font for your site', 'cozy'),
                'parent'        => $additional_google_fonts_container
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'additional_google_font5',
                'type'          => 'font',
                'default_value' => '-1',
                'label'         => esc_html__('Font Family', 'cozy'),
                'description'   => esc_html__('Choose additional Google font for your site', 'cozy'),
                'parent'        => $additional_google_fonts_container
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'first_color',
                'type'          => 'color',
                'label'         => esc_html__('First Main Color', 'cozy'),
                'description'   => esc_html__('Choose the most dominant theme color. Default color is #69c5d3', 'cozy'),
                'parent'        => $panel_design_style
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'second_color',
                'type'          => 'color',
                'label'         => esc_html__('Second Main Color', 'cozy'),
                'description'   => esc_html__('Choose the most dominant theme color. Default color is #cde422', 'cozy'),
                'parent'        => $panel_design_style
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'page_background_color',
                'type'          => 'color',
                'label'         => esc_html__('Page Background Color', 'cozy'),
                'description'   => esc_html__('Choose the background color for page content. Default color is #ffffff', 'cozy'),
                'parent'        => $panel_design_style
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'selection_color',
                'type'          => 'color',
                'label'         => esc_html__('Text Selection Color', 'cozy'),
                'description'   => esc_html__('Choose the color users see when selecting text', 'cozy'),
                'parent'        => $panel_design_style
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'boxed',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__('Boxed Layout', 'cozy'),
                'parent'        => $panel_design_style,
                'args'          => array(
                    "dependence" => true,
                    "dependence_hide_on_yes" => "",
                    "dependence_show_on_yes" => "#edgtf_boxed_container"
                )
            )
        );

        $boxed_container = cozy_edge_add_admin_container(
            array(
                'parent'            => $panel_design_style,
                'name'              => 'boxed_container',
                'hidden_property'   => 'boxed',
                'hidden_value'      => 'no'
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'page_background_color_in_box',
                'type'          => 'color',
                'label'         => esc_html__('Page Background Color', 'cozy'),
                'description'   => esc_html__('Choose the page background color outside box.', 'cozy'),
                'parent'        => $boxed_container
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'boxed_background_image',
                'type'          => 'image',
                'label'         => esc_html__('Background Image', 'cozy'),
                'description'   => esc_html__('Choose an image to be displayed in background', 'cozy'),
                'parent'        => $boxed_container
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'boxed_pattern_background_image',
                'type'          => 'image',
                'label'         => esc_html__('Background Pattern', 'cozy'),
                'description'   => esc_html__('Choose an image to be used as background pattern', 'cozy'),
                'parent'        => $boxed_container
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'boxed_background_image_attachment',
                'type'          => 'select',
                'default_value' => 'fixed',
                'label'         => esc_html__('Background Image Attachment', 'cozy'),
                'description'   => esc_html__('Choose background image attachment', 'cozy'),
                'parent'        => $boxed_container,
                'options'       => array(
                    'fixed'     => 'Fixed',
                    'scroll'    => 'Scroll'
                )
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'initial_content_width',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__('Initial Width of Content', 'cozy'),
                'description'   => esc_html__('Choose the initial width of content which is in grid (Applies to pages set to Default Template and rows set to In Grid)', 'cozy'),
                'parent'        => $panel_design_style,
                'options'       => array(
                    ""          => esc_html__('1300px - default', 'cozy'),
                    "grid-1300" => esc_html__('1300px', 'cozy'),
                    "grid-1200" => esc_html__('1200px', 'cozy'),
                    "grid-1000" => esc_html__('1000px', 'cozy'),
                    "grid-800"  => esc_html__('800px', 'cozy')
                )
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'preload_pattern_image',
                'type'          => 'image',
                'label'         => esc_html__('Preload Pattern Image', 'cozy'),
                'description'   => esc_html__('Choose preload pattern image to be displayed until images are loaded ', 'cozy'),
                'parent'        => $panel_design_style
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name' => 'element_appear_amount',
                'type' => 'text',
                'label' => esc_html__('Element Appearance', 'cozy'),
                'description' => esc_html__('For animated elements, set distance (related to browser bottom) to start the animation', 'cozy'),
                'parent' => $panel_design_style,
                'args' => array(
                    'col_width' => 2,
                    'suffix' => 'px'
                )
            )
        );

        $panel_settings = cozy_edge_add_admin_panel(
            array(
                'page'  => '',
                'name'  => 'panel_settings',
                'title' => esc_html__('Settings', 'cozy')
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'smooth_scroll',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__('Smooth Scroll', 'cozy'),
                'description'   => esc_html__('Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)', 'cozy'),
                'parent'        => $panel_settings
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'smooth_page_transitions',
                'type'          => 'yesno',
                'default_value' => 'no',
                'label'         => esc_html__('Smooth Page Transitions', 'cozy'),
                'description'   => esc_html__('Enabling this option will perform a smooth transition between pages when clicking on links.', 'cozy'),
                'parent'        => $panel_settings,
                'args'          => array(
                    "dependence" => true,
                    "dependence_hide_on_yes" => "",
                    "dependence_show_on_yes" => "#edgtf_page_transitions_container"
                )
            )
        );

        $page_transitions_container = cozy_edge_add_admin_container(
            array(
                'parent'            => $panel_settings,
                'name'              => 'page_transitions_container',
                'hidden_property'   => 'smooth_page_transitions',
                'hidden_value'      => 'no'
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'smooth_pt_bgnd_color',
                'type'          => 'color',
                'label'         => esc_html__('Page Loader Background Color', 'cozy'),
                'parent'        => $page_transitions_container
            )
        );

        $group_pt_spinner_animation = cozy_edge_add_admin_group(array(
            'name'          => 'group_pt_spinner_animation',
            'title'         => esc_html__('Loader Style', 'cozy'),
            'description'   => esc_html__('Define styles for loader spinner animation', 'cozy'),
            'parent'        => $page_transitions_container
        ));

        $row_pt_spinner_animation = cozy_edge_add_admin_row(array(
            'name'      => 'row_pt_spinner_animation',
            'parent'    => $group_pt_spinner_animation
        ));

        cozy_edge_add_admin_field(array(
            'type'          => 'selectsimple',
            'name'          => 'smooth_pt_spinner_type',
            'default_value' => '3d_cube',
            'label'         => esc_html__('Spinner Type', 'cozy'),
            'parent'        => $row_pt_spinner_animation,
            'options'       => array(
                "3d_cube" => esc_html__("3D Cube", 'cozy'),
                "nodes" => esc_html__("Nodes", 'cozy'),
                "pulse" => esc_html__("Pulse", 'cozy'),
                "double_pulse" => esc_html__("Double Pulse", 'cozy'),
                "cube" => esc_html__("Cube", 'cozy'),
                "rotating_cubes" => esc_html__("Rotating Cubes", 'cozy'),
                "stripes" => esc_html__("Stripes", 'cozy'),
                "wave" => esc_html__("Wave", 'cozy'),
                "two_rotating_circles" => esc_html__("2 Rotating Circles", 'cozy'),
                "five_rotating_circles" => esc_html__("5 Rotating Circles", 'cozy'),
                "atom" => esc_html__("Atom", 'cozy'),
                "clock" => esc_html__("Clock", 'cozy'),
                "mitosis" => esc_html__("Mitosis", 'cozy'),
                "lines" => esc_html__("Lines", 'cozy'),
                "fussion" => esc_html__("Fussion", 'cozy'),
                "wave_circles" => esc_html__("Wave Circles", 'cozy'),
                "pulse_circles" => esc_html__("Pulse Circles", 'cozy')
            ),
            'args'          => array(
                "dependence"             => true,
                'show'        => array(
                    "3d_cube"         => '#edgtf_color_spinner_container',
                    "nodes"                 => "",
                    "pulse"                 => "",
                    "double_pulse"          => "",
                    "cube"                  => "",
                    "rotating_cubes"        => "",
                    "stripes"               => "",
                    "wave"                  => "",
                    "two_rotating_circles"  => "",
                    "five_rotating_circles" => "",
                    "atom"                  => "",
                    "clock"                 => "",
                    "mitosis"               => "",
                    "lines"                 => "",
                    "fussion"               => "",
                    "wave_circles"          => "",
                    "pulse_circles"         => ""
                ),
                'hide'        => array(
                    "3d_cube"         => '',
                    "nodes"                 => "#edgtf_color_spinner_container",
                    "pulse"                 => "#edgtf_color_spinner_container",
                    "double_pulse"          => "#edgtf_color_spinner_container",
                    "cube"                  => "#edgtf_color_spinner_container",
                    "rotating_cubes"        => "#edgtf_color_spinner_container",
                    "stripes"               => "#edgtf_color_spinner_container",
                    "wave"                  => "#edgtf_color_spinner_container",
                    "two_rotating_circles"  => "#edgtf_color_spinner_container",
                    "five_rotating_circles" => "#edgtf_color_spinner_container",
                    "atom"                  => "#edgtf_color_spinner_container",
                    "clock"                 => "#edgtf_color_spinner_container",
                    "mitosis"               => "#edgtf_color_spinner_container",
                    "lines"                 => "#edgtf_color_spinner_container",
                    "fussion"               => "#edgtf_color_spinner_container",
                    "wave_circles"          => "#edgtf_color_spinner_container",
                    "pulse_circles"         => "#edgtf_color_spinner_container"
                )
            )
        ));

        cozy_edge_add_admin_field(array(
            'type'          => 'colorsimple',
            'name'          => 'smooth_pt_spinner_color',
            'default_value' => '',
            'label'         => esc_html__('Spinner Color', 'cozy'),
            'parent'        => $row_pt_spinner_animation
        ));

        $color_spinner_container = cozy_edge_add_admin_container(
            array(
                'parent'          => $panel_settings,
                'name'            => 'color_spinner_container',
                'hidden_property' => 'smooth_pt_spinner_type',
                'hidden_value'    => '',
                'hidden_values'   =>array(
                    "nodes",
                    "pulse",
                    "double_pulse",
                    "cube",
                    "rotating_cubes",
                    "stripes",
                    "wave",
                    "two_rotating_circles",
                    "five_rotating_circles",
                    "atom",
                    "clock",
                    "mitosis",
                    "lines",
                    "fussion",
                    "wave_circles",
                    "pulse_circles"
                )
            )
        );

        $group_pt_spinner_additional_colors = cozy_edge_add_admin_group(array(
            'name'          => 'group_pt_spinner_additional_colors',
            'title'         => esc_html__('Additional Colors', 'cozy'),
            'description'   => esc_html__('Define additional colors for 3D Cube', 'cozy'),
            'parent'        => $color_spinner_container
        ));

        $row_pt_spinner_additional_colors = cozy_edge_add_admin_row(array(
            'name'      => 'row_pt_spinner_additional_colors',
            'parent'    => $group_pt_spinner_additional_colors
        ));

        cozy_edge_add_admin_field(
            array(
                'type'          => 'colorsimple',
                'name'          => 'additional_color_1',
                'default_value' => '',
                'label'         => esc_html__('First Additional Color', 'cozy'),
                'parent'        => $row_pt_spinner_additional_colors
            )
        );

        cozy_edge_add_admin_field(
            array(
                'type'          => 'colorsimple',
                'name'          => 'additional_color_2',
                'default_value' => '',
                'label'         => esc_html__('Second Additional Color', 'cozy'),
                'parent'        => $row_pt_spinner_additional_colors
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'show_back_button',
                'type'          => 'yesno',
                'default_value' => 'yes',
                'label'         => esc_html__('Show "Back To Top Button"', 'cozy'),
                'description'   => esc_html__('Enabling this option will display a Back to Top button on every page', 'cozy'),
                'parent'        => $panel_settings
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'responsiveness',
                'type'          => 'yesno',
                'default_value' => 'yes',
                'label'         => esc_html__('Responsiveness', 'cozy'),
                'description'   => esc_html__('Enabling this option will make all pages responsive', 'cozy'),
                'parent'        => $panel_settings
            )
        );

        $panel_custom_code = cozy_edge_add_admin_panel(
            array(
                'page'  => '',
                'name'  => 'panel_custom_code',
                'title' => esc_html__('Custom Code', 'cozy')
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'custom_css',
                'type'          => 'textarea',
                'label'         => esc_html__('Custom CSS', 'cozy'),
                'description'   => esc_html__('Enter your custom CSS here', 'cozy'),
                'parent'        => $panel_custom_code
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'custom_js',
                'type'          => 'textarea',
                'label'         => esc_html__('Custom JS', 'cozy'),
                'description'   => esc_html__('Enter your custom Javascript here', 'cozy'),
                'parent'        => $panel_custom_code
            )
        );

        $panel_google_maps_api_key = cozy_edge_add_admin_panel(
            array(
                'page'  => '',
                'name'  => 'google_maps_api_key',
                'title' => esc_html__('Google Maps API key', 'cozy')
            )
        );

        cozy_edge_add_admin_field(
            array(
                'name'          => 'google_maps_api_key',
                'type'          => 'text',
                'label'         => esc_html__('Google Maps API key', 'cozy'),
                'description'   => esc_html__('Enter your Google Maps API key here', 'cozy'),
                'parent'        => $panel_google_maps_api_key
            )
        );

    }

    add_action( 'cozy_edge_options_map', 'cozy_edge_general_options_map', 1);

}