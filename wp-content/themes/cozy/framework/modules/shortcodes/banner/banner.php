<?php
namespace CozyEdge\Modules\Shortcodes\Banner;

use CozyEdge\Modules\Shortcodes\Lib\ShortcodeInterface;

class Banner implements ShortcodeInterface{
	private $base;

	function __construct() {
		$this->base = 'edgtf_banner';
		add_action('vc_before_init', array($this, 'vcMap'));
	}
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		if(function_exists('vc_map')){
			vc_map( 
				array(
					'name' => esc_html__('Edge Banner', 'cozy'),
					'base' => $this->base,
					'category' => esc_html__('by EDGE', 'cozy'),
					'icon' => 'icon-wpb-banner extended-custom-icon',
					'params' => array(
						array(
							'type' => 'attach_image',
							'class' => '',
							'heading' => esc_html__('Image', 'cozy'),
							'param_name' => 'image',
							'value' => '',
						),
						array(
							'type' => 'textfield',
							'admin_label' => true,
							'heading' => esc_html__('Title', 'cozy'),
							'param_name' => 'title',
							'value' => '',
						),
						array(
							'type'        => 'dropdown',
							'admin_label' => true,
							'heading' => esc_html__('Title Tag', 'cozy'),
							'param_name' => 'title_tag',
							'value'       => array(
								esc_html__('Default', 'cozy')  => '',
								esc_html__('Heading 1', 'cozy')  => 'h1',
								esc_html__('Heading 2', 'cozy')  => 'h2',
								esc_html__('Heading 3', 'cozy')  => 'h3',
								esc_html__('Heading 4', 'cozy')  => 'h4',
								esc_html__('Heading 5', 'cozy')  => 'h5',
								esc_html__('Heading 6', 'cozy') => 'h6'
							)
						),
						array(
							'type' => 'colorpicker',
							'heading' => esc_html__('Title Color', 'cozy'),
							'param_name' => 'title_color',
							'admin_label' => true
						),
						array(
							'type' => 'textfield',
							'admin_label' => true,
							'heading' => esc_html__('Subtitle', 'cozy'),
							'param_name' => 'subtitle',
							'value' => '',
							'description' => ''
						),
						array(
							'type' => 'colorpicker',
							'heading' => esc_html__('Subtitle Color', 'cozy'),
							'param_name' => 'subtitle_color',
							'admin_label' => true
						),
						array(
							'type' => 'textfield',
							'heading' => esc_html__('Link', 'cozy'),
							'param_name' => 'link',
							'value' => '',
							'description' => ''
						),
						array(
							'type'        => 'dropdown',
							'heading'     => esc_html__('Link Target', 'cozy'),
							'param_name'  => 'target',
							'value'       => array(
								esc_html__('Self', 'cozy')  => '_self',
								esc_html__('Blank', 'cozy') => '_blank'
							),
							'dependency'  => array('element' => 'link', 'not_empty' => true)
						),
					)
				)
			);			
		}
	}

	public function render($atts, $content = null) {
		$args = array(
			'image'     		=> '',
			'title'     		=> '',
			'title_tag' 		=> 'h3',
			'subtitle'  		=> '',
			'title_color'  		=> '',
			'subtitle_color'	=> '',
			'link'     			=> '',
			'target'    		=> '_self'
		);
		
		$params = 	shortcode_atts($args, $atts);
		extract($params);

		$params['image']= wp_get_attachment_url($params['image']);
		$params['font_style'] =  $this->getFontStyle($params);

		$html = cozy_edge_get_shortcode_module_template_part('templates/banner-template', 'banner', '', $params);

		return $html;
	}

	private function getFontStyle($params){
		$titleStylesArray = array();
		if(!empty($params['title_color'])) {
			$titleStylesArray[] = 'color:' . $params['title_color'];
		}
		if(!empty($params['subtitle_color'])) {
			$titleStylesArray[] = 'color:' . $params['title_color'];
		}

		return implode(';', $titleStylesArray);
	}

}
