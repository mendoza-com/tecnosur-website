<?php

if ( ! function_exists('cozy_edge_logo_options_map') ) {

	function cozy_edge_logo_options_map() {

		cozy_edge_add_admin_page(
			array(
				'slug' => '_logo_page',
				'title' => esc_html__('Logo', 'cozy'),
				'icon' => 'fa fa-coffee'
			)
		);

		$panel_logo = cozy_edge_add_admin_panel(
			array(
				'page' => '_logo_page',
				'name' => 'panel_logo',
				'title' => esc_html__('Logo', 'cozy')
			)
		);

		cozy_edge_add_admin_field(
			array(
				'parent' => $panel_logo,
				'type' => 'yesno',
				'name' => 'hide_logo',
				'default_value' => 'no',
				'label' => esc_html__('Hide Logo', 'cozy'),
				'description' => esc_html__('Enabling this option will hide logo image', 'cozy'),
				'args' => array(
					"dependence" => true,
					"dependence_hide_on_yes" => "#edgtf_hide_logo_container",
					"dependence_show_on_yes" => ""
				)
			)
		);

		$hide_logo_container = cozy_edge_add_admin_container(
			array(
				'parent' => $panel_logo,
				'name' => 'hide_logo_container',
				'hidden_property' => 'hide_logo',
				'hidden_value' => 'yes'
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'logo_image',
				'type' => 'image',
				'default_value' => EDGE_ASSETS_ROOT."/img/logo.png",
				'label' =>  esc_html__('Logo Image - Default', 'cozy'),
				'description' =>  esc_html__('Choose a default logo image to display ', 'cozy'),
				'parent' => $hide_logo_container
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'logo_image_dark',
				'type' => 'image',
				'default_value' => EDGE_ASSETS_ROOT."/img/logo.png",
				'label' =>  esc_html__('Logo Image - Dark', 'cozy'),
				'description' =>  esc_html__('Choose a default logo image to display ', 'cozy'),
				'parent' => $hide_logo_container
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'logo_image_light',
				'type' => 'image',
				'default_value' => EDGE_ASSETS_ROOT."/img/logo.png",
				'label' =>  esc_html__('Logo Image - Light', 'cozy'),
				'description' =>  esc_html__('Choose a default logo image to display ', 'cozy'),
				'parent' => $hide_logo_container
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'logo_image_sticky',
				'type' => 'image',
				'default_value' => EDGE_ASSETS_ROOT."/img/logo.png",
				'label' =>  esc_html__('Logo Image - Sticky', 'cozy'),
				'description' =>  esc_html__('Choose a default logo image to display ', 'cozy'),
				'parent' => $hide_logo_container
			)
		);

		cozy_edge_add_admin_field(
			array(
				'name' => 'logo_image_mobile',
				'type' => 'image',
				'default_value' => EDGE_ASSETS_ROOT."/img/logo.png",
				'label' =>  esc_html__('Logo Image - Mobile', 'cozy'),
				'description' =>  esc_html__('Choose a default logo image to display ', 'cozy'),
				'parent' => $hide_logo_container
			)
		);

	}

	add_action( 'cozy_edge_options_map', 'cozy_edge_logo_options_map', 2);

}