<?php

if(!function_exists('cozy_edge_map_blog')) {
    function cozy_edge_map_blog()
    {

        $edgt_blog_categories = array();
        $categories = get_categories();
        foreach ($categories as $category) {
            $edgt_blog_categories[$category->term_id] = $category->name;
        }

        $blog_meta_box = cozy_edge_add_meta_box(
            array(
                'scope' => array('page'),
                'title' => esc_html__('Blog', 'cozy'),
                'name' => 'blog_meta'
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_blog_category_meta',
                'type' => 'selectblank',
                'label' => esc_html__('Blog Category', 'cozy'),
                'description' => esc_html__('Choose category of posts to display (leave empty to display all categories)', 'cozy'),
                'parent' => $blog_meta_box,
                'options' => $edgt_blog_categories
            )
        );

        cozy_edge_add_meta_box_field(
            array(
                'name' => 'edgtf_show_posts_per_page_meta',
                'type' => 'text',
                'label' => esc_html__('Number of Posts', 'cozy'),
                'description' => esc_html__('Enter the number of posts to display', 'cozy'),
                'parent' => $blog_meta_box,
                'options' => $edgt_blog_categories,
                'args' => array("col_width" => 3)
            )
        );
    }

    add_action('cozy_edge_meta_boxes_map', 'cozy_edge_map_blog');
}
	

