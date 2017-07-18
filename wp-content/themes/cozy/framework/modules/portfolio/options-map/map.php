<?php

if ( ! function_exists('cozy_edge_portfolio_options_map') ) {

	function cozy_edge_portfolio_options_map() {

		cozy_edge_add_admin_page(array(
			'slug'  => '_portfolio',
			'title' => esc_html__('Portfolio','cozy'),
			'icon'  => 'fa fa-camera-retro'
		));

		$panel = cozy_edge_add_admin_panel(array(
			'title' => esc_html__('Portfolio Single','cozy'),
			'name'  => 'panel_portfolio_single',
			'page'  => '_portfolio'
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'portfolio_single_template',
			'type'        => 'select',
			'label'       => esc_html__('Portfolio Type','cozy'),
			'default_value'	=> 'small-images',
			'description' => esc_html__('Choose a default type for Single Project pages','cozy'),
			'parent'      => $panel,
			'options'     => array(
				'small-images' => esc_html__('Portfolio small images','cozy'),
				'small-slider' => esc_html__('Portfolio small slider','cozy'),
				'big-images' => esc_html__('Portfolio big images','cozy'),
				'big-slider' => esc_html__('Portfolio big slider','cozy'),
				'small-masonry' => esc_html__('Portfolio small masonry','cozy'),
				'big-masonry' => esc_html__('Portfolio big masonry','cozy'),
				'gallery' => esc_html__('Portfolio gallery','cozy'),
				'custom' => esc_html__('Portfolio custom','cozy'),
				'full-width-custom' => esc_html__('Portfolio full width custom','cozy'),
			)
		));

		cozy_edge_add_admin_field(array(
			'name'          => 'portfolio_single_lightbox_images',
			'type'          => 'yesno',
			'label'         => esc_html__('Lightbox for Images','cozy'),
			'description'   => esc_html__('Enabling this option will turn on lightbox functionality for projects with images.','cozy'),
			'parent'        => $panel,
			'default_value' => 'yes'
		));

		cozy_edge_add_admin_field(array(
			'name'          => 'portfolio_single_lightbox_videos',
			'type'          => 'yesno',
			'label'         => esc_html__('Lightbox for Videos','cozy'),
			'description'   => esc_html__('Enabling this option will turn on lightbox functionality for YouTube/Vimeo projects.','cozy'),
			'parent'        => $panel,
			'default_value' => 'no'
		));

		cozy_edge_add_admin_field(array(
			'name'          => 'portfolio_single_hide_title',
			'type'          => 'yesno',
			'label'         => esc_html__('Hide Portfolio Title','cozy'),
			'description'   => esc_html__('Enabling this option will disable title on Single Projects.','cozy'),
			'parent'        => $panel,
			'default_value' => 'no'
		));

		cozy_edge_add_admin_field(array(
			'name'          => 'portfolio_single_hide_categories',
			'type'          => 'yesno',
			'label'         => esc_html__('Hide Categories','cozy'),
			'description'   => esc_html__('Enabling this option will disable category meta description on Single Projects.','cozy'),
			'parent'        => $panel,
			'default_value' => 'no'
		));

		cozy_edge_add_admin_field(array(
			'name'          => 'portfolio_single_hide_date',
			'type'          => 'yesno',
			'label'         => esc_html__('Hide Date','cozy'),
			'description'   => esc_html__('Enabling this option will disable date meta on Single Projects.','cozy'),
			'parent'        => $panel,
			'default_value' => 'no'
		));

		cozy_edge_add_admin_field(array(
			'name'          => 'portfolio_single_comments',
			'type'          => 'yesno',
			'label'         => esc_html__('Show Comments','cozy'),
			'description'   => esc_html__('Enabling this option will show comments on your page.','cozy'),
			'parent'        => $panel,
			'default_value' => 'no'
		));

		cozy_edge_add_admin_field(array(
			'name'          => 'portfolio_single_sticky_sidebar',
			'type'          => 'yesno',
			'label'         => esc_html__('Sticky Side Text','cozy'),
			'description'   => esc_html__('Enabling this option will make side text sticky on Single Project pages','cozy'),
			'parent'        => $panel,
			'default_value' => 'yes'
		));

		cozy_edge_add_admin_field(array(
			'name'          => 'portfolio_single_hide_pagination',
			'type'          => 'yesno',
			'label'         => esc_html__('Hide Pagination','cozy'),
			'description'   => esc_html__('Enabling this option will turn off portfolio pagination functionality.','cozy'),
			'parent'        => $panel,
			'default_value' => 'no',
			'args' => array(
				'dependence' => true,
				'dependence_hide_on_yes' => '#edgtf_navigate_same_category_container'
			)
		));

		$container_navigate_category = cozy_edge_add_admin_container(array(
			'name'            => 'navigate_same_category_container',
			'parent'          => $panel,
			'hidden_property' => 'portfolio_single_hide_pagination',
			'hidden_value'    => 'yes'
		));

		cozy_edge_add_admin_field(array(
			'name'            => 'portfolio_single_nav_same_category',
			'type'            => 'yesno',
			'label'           => esc_html__('Enable Pagination Through Same Category','cozy'),
			'description'     => esc_html__('Enabling this option will make portfolio pagination sort through current category.','cozy'),
			'parent'          => $container_navigate_category,
			'default_value'   => 'no'
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'portfolio_single_numb_columns',
			'type'        => 'select',
			'label'       => esc_html__('Number of Columns','cozy'),
			'default_value' => 'three-columns',
			'description' => esc_html__('Enter the number of columns for Portfolio Gallery type','cozy'),
			'parent'      => $panel,
			'options'     => array(
				'two-columns' => esc_html__('2 columns','cozy'),
				'three-columns' => esc_html__('3 columns','cozy'),
				'four-columns' => esc_html__('4 columns','cozy'),
			)
		));

		cozy_edge_add_admin_field(array(
			'name'        => 'portfolio_single_slug',
			'type'        => 'text',
			'label'       => esc_html__('Portfolio Single Slug','cozy'),
			'description' => esc_html__('Enter if you wish to use a different Single Project slug (Note: After entering slug, navigate to Settings -> Permalinks and click "Save" in order for changes to take effect)','cozy'),
			'parent'      => $panel,
			'args'        => array(
				'col_width' => 3
			)
		));

	}

	add_action( 'cozy_edge_options_map', 'cozy_edge_portfolio_options_map', 13);

}