<?php
namespace CozyEdge\Modules\Shortcodes\ImageWithText;

use CozyEdge\Modules\Shortcodes\Lib\ShortcodeInterface;

class ImageWithText implements ShortcodeInterface{
	private $base;

	function __construct() {
		$this->base = 'edgtf_image_with_text';
		add_action('vc_before_init', array($this, 'vcMap'));
	}
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		if(function_exists('vc_map')){
			vc_map( 
				array(
					'name' => esc_html__('Animated Image', 'cozy'),
					'base' => $this->base,
                    'category' => esc_html__('by EDGE', 'cozy'),
					'icon' => 'icon-wpb-image-with-text extended-custom-icon',
					'params' => array(
						array(
							'type' => 'attach_image',
							'class' => '',
							'heading' => esc_html__('Image','cozy'),
							'param_name' => 'image',
							'value' => ''
						),
						array(
							'type'        => 'dropdown',
							'heading'     => esc_html__('Image Shadow','cozy'),
							'param_name'  => 'image_shadow',
							'value'       => array(
								esc_html__('Yes','cozy')  => 'yes',
								esc_html__('No','cozy') => 'no'
							)
						),
						array(
							'type' => 'textfield',
							'admin_label' => true,
							'heading' => esc_html__('Title','cozy'),
							'param_name' => 'title',
							'value' => ''
						),
						array(
							"type" => "dropdown",
							"heading" => esc_html__("Title Tag",'cozy'),
							"param_name" => "title_tag",
							"value" => array(
								"" => "",
								"h2" => "h2",
								"h3" => "h3",
								"h4" => "h4",
								"h5" => "h5",
								"h6" => "h6"
							)
						),
						array(
							'type' => 'textfield',
							'admin_label' => true,
							'heading' => esc_html__('Overlay Text','cozy'),
							'param_name' => 'text',
							'value' => '',
							'description' => ''
						),
						array(
							'type' => 'textfield',
							'heading' => esc_html__('Link','cozy'),
							'param_name' => 'link',
							'value' => ''
						),
						array(
							'type'        => 'dropdown',
							'heading'     => esc_html__('Link Target','cozy'),
							'param_name'  => 'target',
							'value'       => array(
								esc_html__('Self','cozy')  => '_self',
								esc_html__('Blank','cozy') => '_blank'
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
			'image'     => '',
			'image_shadow'  => 'yes',
			'title'     => '',
			'title_tag'     => 'h5',
			'text'     => '',
			'link'     	=> '',
			'target'    => '_self'
		);
		
		$params = 	shortcode_atts($args, $atts);
		extract($params);

		$params['image']= wp_get_attachment_url($params['image']);
		$params['image_classes'] = $this->getImageClasses($params);

		$html = cozy_edge_get_shortcode_module_template_part('templates/image-with-text-template', 'image-with-text', '', $params);

		return $html;
	}

	private function getImageClasses($params) {

		$class = array();
		if($params['image_shadow'] == 'yes'){
			$class[] = 'shadow';
		}
		return implode(' ', $class);
	}

}
