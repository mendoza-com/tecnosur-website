<?php

if ( ! function_exists('cozy_edge_social_options_map') ) {

	function cozy_edge_social_options_map() {

		cozy_edge_add_admin_page(
			array(
				'slug'  => '_social_page',
				'title' => esc_html__('Social Networks', 'cozy'),
				'icon'  => 'fa fa-share-alt'
			)
		);

		/**
		 * Enable Social Share
		 */
		$panel_social_share = cozy_edge_add_admin_panel(array(
			'page'  => '_social_page',
			'name'  => 'panel_social_share',
			'title' => esc_html__('Enable Social Share', 'cozy')
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_social_share',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Enable Social Share', 'cozy'),
			'description'	=> esc_html__('Enabling this option will allow social share on networks of your choice', 'cozy'),
			'args'			=> array(
				'dependence' => true,
				'dependence_hide_on_yes' => '',
				'dependence_show_on_yes' => '#edgtf_panel_social_networks, #edgtf_panel_show_social_share_on'
			),
			'parent'		=> $panel_social_share
		));

		$panel_show_social_share_on = cozy_edge_add_admin_panel(array(
			'page'  			=> '_social_page',
			'name'  			=> 'panel_show_social_share_on',
			'title' 			=> esc_html__('Show Social Share On', 'cozy'),
			'hidden_property'	=> 'enable_social_share',
			'hidden_value'		=> 'no'
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_social_share_on_post',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Posts', 'cozy'),
			'description'	=> esc_html__('Show Social Share on Blog Posts', 'cozy'),
			'parent'		=> $panel_show_social_share_on
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_social_share_on_page',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Pages', 'cozy'),
			'description'	=> esc_html__('Show Social Share on Pages', 'cozy'),
			'parent'		=> $panel_show_social_share_on
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_social_share_on_attachment',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Media', 'cozy'),
			'description'	=> esc_html__('Show Social Share for Images and Videos', 'cozy'),
			'parent'		=> $panel_show_social_share_on
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_social_share_on_portfolio-item',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Portfolio Item', 'cozy'),
			'description'	=> esc_html__('Show Social Share for Portfolio Items', 'cozy'),
			'parent'		=> $panel_show_social_share_on
		));

		if(cozy_edge_is_woocommerce_installed()){
			cozy_edge_add_admin_field(array(
				'type'			=> 'yesno',
				'name'			=> 'enable_social_share_on_product',
				'default_value'	=> 'no',
				'label'			=> esc_html__('Product', 'cozy'),
				'description'	=> esc_html__('Show Social Share for Product Items', 'cozy'),
				'parent'		=> $panel_show_social_share_on
			));
		}

		/**
		 * Social Share Networks
		 */
		$panel_social_networks = cozy_edge_add_admin_panel(array(
			'page'  			=> '_social_page',
			'name'				=> 'panel_social_networks',
			'title'				=> esc_html__('Social Networks', 'cozy'),
			'hidden_property'	=> 'enable_social_share',
			'hidden_value'		=> 'no'
		));

		/**
		 * Facebook
		 */
		cozy_edge_add_admin_section_title(array(
			'parent'	=> $panel_social_networks,
			'name'		=> 'facebook_title',
			'title'		=> esc_html__('Share on Facebook', 'cozy')
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_facebook_share',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Enable Share', 'cozy'),
			'description'	=> esc_html__('Enabling this option will allow sharing via Facebook', 'cozy'),
			'args'			=> array(
				'dependence' => true,
				'dependence_hide_on_yes' => '',
				'dependence_show_on_yes' => '#edgtf_enable_facebook_share_container'
			),
			'parent'		=> $panel_social_networks
		));

		$enable_facebook_share_container = cozy_edge_add_admin_container(array(
			'name'		=> 'enable_facebook_share_container',
			'hidden_property'	=> 'enable_facebook_share',
			'hidden_value'		=> 'no',
			'parent'			=> $panel_social_networks
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'image',
			'name'			=> 'facebook_icon',
			'default_value'	=> '',
			'label'			=> esc_html__('Upload Icon', 'cozy'),
			'parent'		=> $enable_facebook_share_container
		));

		/**
		 * Twitter
		 */
		cozy_edge_add_admin_section_title(array(
			'parent'	=> $panel_social_networks,
			'name'		=> 'twitter_title',
			'title'		=> esc_html__('Share on Twitter', 'cozy')
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_twitter_share',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Enable Share', 'cozy'),
			'description'	=> esc_html__('Enabling this option will allow sharing via Twitter', 'cozy'),
			'args'			=> array(
				'dependence' => true,
				'dependence_hide_on_yes' => '',
				'dependence_show_on_yes' => '#edgtf_enable_twitter_share_container'
			),
			'parent'		=> $panel_social_networks
		));

		$enable_twitter_share_container = cozy_edge_add_admin_container(array(
			'name'		=> 'enable_twitter_share_container',
			'hidden_property'	=> 'enable_twitter_share',
			'hidden_value'		=> 'no',
			'parent'			=> $panel_social_networks
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'image',
			'name'			=> 'twitter_icon',
			'default_value'	=> '',
			'label'			=> esc_html__('Upload Icon', 'cozy'),
			'parent'		=> $enable_twitter_share_container
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'text',
			'name'			=> 'twitter_via',
			'default_value'	=> '',
			'label'			=> esc_html__('Via', 'cozy'),
			'parent'		=> $enable_twitter_share_container
		));

		/**
		 * Google Plus
		 */
		cozy_edge_add_admin_section_title(array(
			'parent'	=> $panel_social_networks,
			'name'		=> 'google_plus_title',
			'title'		=> esc_html__('Share on Google Plus', 'cozy')
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_google_plus_share',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Enable Share', 'cozy'),
			'description'	=> esc_html__('Enabling this option will allow sharing via Google Plus', 'cozy'),
			'args'			=> array(
				'dependence' => true,
				'dependence_hide_on_yes' => '',
				'dependence_show_on_yes' => '#edgtf_enable_google_plus_container'
			),
			'parent'		=> $panel_social_networks
		));

		$enable_google_plus_container = cozy_edge_add_admin_container(array(
			'name'		=> 'enable_google_plus_container',
			'hidden_property'	=> 'enable_google_plus_share',
			'hidden_value'		=> 'no',
			'parent'			=> $panel_social_networks
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'image',
			'name'			=> 'google_plus_icon',
			'default_value'	=> '',
			'label'			=> esc_html__('Upload Icon', 'cozy'),
			'parent'		=> $enable_google_plus_container
		));

		/**
		 * Linked In
		 */
		cozy_edge_add_admin_section_title(array(
			'parent'	=> $panel_social_networks,
			'name'		=> 'linkedin_title',
			'title'		=> esc_html__('Share on LinkedIn', 'cozy'),
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_linkedin_share',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Enable Share', 'cozy'),
			'description'	=> esc_html__('Enabling this option will allow sharing via LinkedIn', 'cozy'),
			'args'			=> array(
				'dependence' => true,
				'dependence_hide_on_yes' => '',
				'dependence_show_on_yes' => '#edgtf_enable_linkedin_container'
			),
			'parent'		=> $panel_social_networks
		));

		$enable_linkedin_container = cozy_edge_add_admin_container(array(
			'name'		=> 'enable_linkedin_container',
			'hidden_property'	=> 'enable_linkedin_share',
			'hidden_value'		=> 'no',
			'parent'			=> $panel_social_networks
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'image',
			'name'			=> 'linkedin_icon',
			'default_value'	=> '',
			'label'			=> esc_html__('Upload Icon', 'cozy'),
			'parent'		=> $enable_linkedin_container
		));

		/**
		 * Tumblr
		 */
		cozy_edge_add_admin_section_title(array(
			'parent'	=> $panel_social_networks,
			'name'		=> 'tumblr_title',
			'title'		=> esc_html__('Share on Tumblr', 'cozy')
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_tumblr_share',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Enable Share', 'cozy'),
			'description'	=> esc_html__('Enabling this option will allow sharing via Tumblr', 'cozy'),
			'args'			=> array(
				'dependence' => true,
				'dependence_hide_on_yes' => '',
				'dependence_show_on_yes' => '#edgtf_enable_tumblr_container'
			),
			'parent'		=> $panel_social_networks
		));

		$enable_tumblr_container = cozy_edge_add_admin_container(array(
			'name'		=> 'enable_tumblr_container',
			'hidden_property'	=> 'enable_tumblr_share',
			'hidden_value'		=> 'no',
			'parent'			=> $panel_social_networks
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'image',
			'name'			=> 'tumblr_icon',
			'default_value'	=> '',
			'label'			=> esc_html__('Upload Icon', 'cozy'),
			'parent'		=> $enable_tumblr_container
		));

		/**
		 * Pinterest
		 */
		cozy_edge_add_admin_section_title(array(
			'parent'	=> $panel_social_networks,
			'name'		=> 'pinterest_title',
			'title'		=> esc_html__('Share on Pinterest', 'cozy')
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_pinterest_share',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Enable Share', 'cozy'),
			'description'	=> esc_html__('Enabling this option will allow sharing via Pinterest', 'cozy'),
			'args'			=> array(
				'dependence' => true,
				'dependence_hide_on_yes' => '',
				'dependence_show_on_yes' => '#edgtf_enable_pinterest_container'
			),
			'parent'		=> $panel_social_networks
		));

		$enable_pinterest_container = cozy_edge_add_admin_container(array(
			'name'				=> 'enable_pinterest_container',
			'hidden_property'	=> 'enable_pinterest_share',
			'hidden_value'		=> 'no',
			'parent'			=> $panel_social_networks
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'image',
			'name'			=> 'pinterest_icon',
			'default_value'	=> '',
			'label'			=> esc_html__('Upload Icon', 'cozy'),
			'parent'		=> $enable_pinterest_container
		));

		/**
		 * VK
		 */
		cozy_edge_add_admin_section_title(array(
			'parent'	=> $panel_social_networks,
			'name'		=> 'vk_title',
			'title'		=> esc_html__('Share on VK', 'cozy'),
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'yesno',
			'name'			=> 'enable_vk_share',
			'default_value'	=> 'no',
			'label'			=> esc_html__('Enable Share', 'cozy'),
			'description'	=> esc_html__('Enabling this option will allow sharing via VK', 'cozy'),
			'args'			=> array(
				'dependence' => true,
				'dependence_hide_on_yes' => '',
				'dependence_show_on_yes' => '#edgtf_enable_vk_container'
			),
			'parent'		=> $panel_social_networks
		));

		$enable_vk_container = cozy_edge_add_admin_container(array(
			'name'				=> 'enable_vk_container',
			'hidden_property'	=> 'enable_vk_share',
			'hidden_value'		=> 'no',
			'parent'			=> $panel_social_networks
		));

		cozy_edge_add_admin_field(array(
			'type'			=> 'image',
			'name'			=> 'vk_icon',
			'default_value'	=> '',
			'label'			=> esc_html__('Upload Icon', 'cozy'),
			'parent'		=> $enable_vk_container
		));

		if(defined('EDGEF_TWITTER_FEED_VERSION')) {
            $twitter_panel = cozy_edge_add_admin_panel(array(
                'title' => esc_html__('Twitter', 'cozy'),
                'name'  => 'panel_twitter',
                'page'  => '_social_page'
            ));

            cozy_edge_add_admin_twitter_button(array(
                'name'   => 'twitter_button',
                'parent' => $twitter_panel
            ));
        }

        if(defined('EDGEF_INSTAGRAM_FEED_VERSION')) {
            $instagram_panel = cozy_edge_add_admin_panel(array(
                'title' => esc_html__('Instagram', 'cozy'),
                'name'  => 'panel_instagram',
                'page'  => '_social_page'
            ));

            cozy_edge_add_admin_instagram_button(array(
                'name'   => 'instagram_button',
                'parent' => $instagram_panel
            ));
        }
	}

	add_action( 'cozy_edge_options_map', 'cozy_edge_social_options_map', 17);
}