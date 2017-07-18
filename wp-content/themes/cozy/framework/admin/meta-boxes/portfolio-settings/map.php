<?php

if(!function_exists('cozy_edge_map_portfolio_settings')) {
    function cozy_edge_map_portfolio_settings() {
        $meta_box = cozy_edge_add_meta_box(array(
            'scope' => 'portfolio-item',
            'title' => esc_html__('Portfolio Settings', 'cozy'),
            'name'  => 'portfolio_settings_meta_box'
        ));

        cozy_edge_add_meta_box_field(array(
            'name'        => 'edgtf_portfolio_single_template_meta',
            'type'        => 'select',
            'label'       => esc_html__('Portfolio Type', 'cozy'),
            'description' => esc_html__('Choose a default type for Single Project pages', 'cozy'),
            'parent'      => $meta_box,
            'options'     => array(
                ''                  => esc_html__('Default', 'cozy'),
                'small-images'      => esc_html__('Portfolio small images', 'cozy'),
                'small-slider'      => esc_html__('Portfolio small slider', 'cozy'),
                'big-images'        => esc_html__('Portfolio big images', 'cozy'),
                'big-slider'        => esc_html__('Portfolio big slider', 'cozy'),
                'gallery'           => esc_html__('Portfolio gallery', 'cozy'),
                'small-masonry'     => esc_html__('Portfolio small masonry', 'cozy'),
                'big-masonry'       => esc_html__('Portfolio big masonry', 'cozy'),
                'custom'            => esc_html__('Portfolio custom', 'cozy'),
                'full-width-custom' => esc_html__('Portfolio full width custom', 'cozy')
            )
        ));

        $all_pages = array();
        $pages     = get_pages();
        foreach($pages as $page) {
            $all_pages[$page->ID] = $page->post_title;
        }

        cozy_edge_add_meta_box_field(array(
            'name'        => 'portfolio_single_back_to_link',
            'type'        => 'selectblank',
            'label'       => esc_html__('"Back To" Link', 'cozy'),
            'description' => esc_html__('Choose "Back To" page to link from portfolio Single Project page', 'cozy'),
            'parent'      => $meta_box,
            'options'     => $all_pages
        ));

        cozy_edge_add_meta_box_field(array(
            'name'        => 'portfolio_external_link',
            'type'        => 'text',
            'label'       => esc_html__('Portfolio External Link', 'cozy'),
            'description' => esc_html__('Enter URL to link from Portfolio List page', 'cozy'),
            'parent'      => $meta_box,
            'args'        => array(
                'col_width' => 3
            )
        ));

        cozy_edge_add_meta_box_field(array(
            'name'        => 'portfolio_masonry_dimenisions',
            'type'        => 'select',
            'label'       => esc_html__('Dimensions for Masonry', 'cozy'),
            'description' => esc_html__('Choose image layout when it appears in Masonry type portfolio lists', 'cozy'),
            'parent'      => $meta_box,
            'options'     => array(
                'default'            => esc_html__('Default', 'cozy'),
                'large_width'        => esc_html__('Large width', 'cozy'),
                'large_height'       => esc_html__('Large height', 'cozy'),
                'large_width_height' => esc_html__('Large width/height', 'cozy')
            )
        ));
    }

    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_portfolio_settings');
}