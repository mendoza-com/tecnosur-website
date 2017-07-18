<?php
namespace CozyEdge\Modules\Shortcodes\ElementsHolder;

use CozyEdge\Modules\Shortcodes\Lib\ShortcodeInterface;

class ElementsHolder implements ShortcodeInterface{
	private $base;
	function __construct() {
		$this->base = 'edgtf_elements_holder';
		add_action('vc_before_init', array($this, 'vcMap'));
	}
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		vc_map( array(
			'name' => esc_html__('Edge Elements Holder', 'cozy'),
			'base' => $this->base,
			'icon' => 'icon-wpb-elements-holder extended-custom-icon',
			'category' => esc_html__('by EDGE', 'cozy'),
			'as_parent' => array('only' => 'edgtf_elements_holder_item'),
			'js_view' => 'VcColumnView',
			'params' => array(
				array(
					'type' => 'colorpicker',
					'class' => '',
					'heading' => esc_html__('Background Color', 'cozy'),
					'param_name' => 'background_color',
					'value' => ''
				),
				array(
					'type' => 'dropdown',
					'class' => '',
					'heading' => esc_html__('Columns', 'cozy'),
					'admin_label' => true,
					'param_name' => 'number_of_columns',
					'value' => array(
						esc_html__('1 Column', 'cozy')      => 'one-column',
						esc_html__('2 Columns', 'cozy')    	=> 'two-columns',
						esc_html__('3 Columns', 'cozy')     => 'three-columns',
						esc_html__('4 Columns', 'cozy')     => 'four-columns',
						esc_html__('5 Columns', 'cozy')     => 'five-columns',
						esc_html__('6 Columns', 'cozy')     => 'six-columns'
					)
				),
				array(
					'type' => 'checkbox',
					'class' => '',
					'heading' => esc_html__('Items Float Left', 'cozy'),
					'param_name' => 'items_float_left',
					'value' => array(esc_html__('Make Items Float Left?', 'cozy') => 'yes'),
					'description' => ''
				),
				array(
					'type' => 'dropdown',
					'class' => '',
					'group' => esc_html__('Width & Responsiveness', 'cozy'),
					'heading' => esc_html__('Switch to One Column', 'cozy'),
					'param_name' => 'switch_to_one_column',
					'value' => array(
						esc_html__('Default', 'cozy')    		=> '',
						esc_html__('Below 1280px', 'cozy') 		=> '1280',
						esc_html__('Below 1024px', 'cozy')    	=> '1024',
						esc_html__('Below 768px', 'cozy')     	=> '768',
						esc_html__('Below 600px', 'cozy')    	=> '600',
						esc_html__('Below 480px', 'cozy')    	=> '480',
						esc_html__('Never', 'cozy')    			=> 'never'
					),
					'description' => esc_html__('Choose on which stage item will be in one column', 'cozy')
				),
				array(
					'type' => 'dropdown',
					'class' => '',
					'group' => esc_html__('Width & Responsiveness', 'cozy'),
					'heading' => esc_html__('Choose Alignment In Responsive Mode', 'cozy'),
					'param_name' => 'alignment_one_column',
					'value' => array(
						esc_html__('Default', 'cozy')    	=> '',
						esc_html__('Left', 'cozy') 			=> 'left',
						esc_html__('Center', 'cozy')    	=> 'center',
						esc_html__('Right', 'cozy')     	=> 'right'
					),
					'description' => esc_html__('Alignment When Items are in One Column', 'cozy')
				)
			)
		));
	}

	public function render($atts, $content = null) {
	
		$args = array(
			'number_of_columns' 		=> '',
			'switch_to_one_column'		=> '',
			'alignment_one_column' 		=> '',
			'items_float_left' 			=> '',
			'background_color' 			=> ''
		);
		$params = shortcode_atts($args, $atts);
		extract($params);

		$html						= '';

		$elements_holder_classes = array();
		$elements_holder_classes[] = 'edgtf-elements-holder';
		$elements_holder_style = '';

		if($number_of_columns != ''){
			$elements_holder_classes[] .= 'edgtf-'.$number_of_columns ;
		}

		if($switch_to_one_column != ''){
			$elements_holder_classes[] = 'edgtf-responsive-mode-' . $switch_to_one_column ;
		} else {
			$elements_holder_classes[] = 'edgtf-responsive-mode-768' ;
		}

		if($alignment_one_column != ''){
			$elements_holder_classes[] = 'edgtf-one-column-alignment-' . $alignment_one_column ;
		}

		if($items_float_left !== ''){
			$elements_holder_classes[] = 'edgtf-elements-items-float';
		}

		if($background_color != ''){
			$elements_holder_style .= 'background-color:'. $background_color . ';';
		}

		$elements_holder_class = implode(' ', $elements_holder_classes);

		$html .= '<div ' . cozy_edge_get_class_attribute($elements_holder_class) . ' ' . cozy_edge_get_inline_attr($elements_holder_style, 'style'). '>';
			$html .= do_shortcode($content);
		$html .= '</div>';

		return $html;

	}
}
