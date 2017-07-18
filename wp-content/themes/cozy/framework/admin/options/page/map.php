<?php

if ( ! function_exists('cozy_edge_page_options_map') ) {

    function cozy_edge_page_options_map() {

        cozy_edge_add_admin_page(
            array(
                'slug'  => '_page_page',
                'title' => esc_html__('Page', 'cozy'),
                'icon'  => 'fa fa-file-o'
            )
        );

        $custom_sidebars = cozy_edge_get_custom_sidebars();

        $panel_sidebar = cozy_edge_add_admin_panel(
            array(
                'page'  => '_page_page',
                'name'  => 'panel_sidebar',
                'title' => esc_html__('Design Style', 'cozy')
            )
        );

        cozy_edge_add_admin_field(array(
            'name'        => 'page_sidebar_layout',
            'type'        => 'select',
            'label'       => esc_html__('Sidebar Layout', 'cozy'),
            'description' => esc_html__('Choose a sidebar layout for pages', 'cozy'),
            'default_value' => 'default',
            'parent'      => $panel_sidebar,
            'options'     => array(
                'default'			=> esc_html__('No Sidebar', 'cozy'),
                'sidebar-33-right'	=> esc_html__('Sidebar 1/3 Right', 'cozy'),
                'sidebar-25-right' 	=> esc_html__('Sidebar 1/4 Right', 'cozy'),
                'sidebar-33-left' 	=> esc_html__('Sidebar 1/3 Left', 'cozy'),
                'sidebar-25-left' 	=> esc_html__('Sidebar 1/4 Left', 'cozy')
            )
        ));


        if(count($custom_sidebars) > 0) {
            cozy_edge_add_admin_field(array(
                'name' => 'page_custom_sidebar',
                'type' => 'selectblank',
                'label' => esc_html__('Sidebar to Display', 'cozy'),
                'description' => esc_html__('Choose a sidebar to display on pages. Default sidebar is "Sidebar"', 'cozy'),
                'parent' => $panel_sidebar,
                'options' => $custom_sidebars
            ));
        }

        cozy_edge_add_admin_field(array(
            'name'        => 'page_show_comments',
            'type'        => 'yesno',
            'label'       => esc_html__('Show Comments', 'cozy'),
            'description' => esc_html__('Enabling this option will show comments on your page', 'cozy'),
            'default_value' => 'no',
            'parent'      => $panel_sidebar
        ));

    }

    add_action( 'cozy_edge_options_map', 'cozy_edge_page_options_map', 8);

}