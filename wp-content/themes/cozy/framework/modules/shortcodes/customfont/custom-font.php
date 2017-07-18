<?php
namespace CozyEdge\Modules\Shortcodes\CustomFont;

use CozyEdge\Modules\Shortcodes\Lib\ShortcodeInterface;
/**
 * Class CustomFont
 */
class CustomFont implements ShortcodeInterface {

	/**
	 * @var string
	 */
	private $base;

	public function __construct() {
		$this->base = 'edgtf_custom_font';

		add_action('vc_before_init', array($this, 'vcMap'));
	}

	/**
	 * Returns base for shortcode
	 * @return string
	 */
	public function getBase() {
		return $this->base;
	}

	/**
	 * Maps shortcode to Visual Composer. Hooked on vc_before_init
	 *
	 * @see edgt_core_get_carousel_slider_array_vc()
	 */
	public function vcMap() {

		vc_map( array(
				'name' => esc_html__('Edge Custom Font', 'cozy'),
				'base' => $this->getBase(),
                'category' => esc_html__('by EDGE', 'cozy'),
				'icon' => 'icon-wpb-custom-font extended-custom-icon',
				'allowed_container_element' => 'vc_row',
				'params' => array(
					array(
						"type" => "textfield",
						"heading" => esc_html__('Font family', 'cozy'),
						"param_name" => "font_family",
						"value" => ""
					),
					array(
						"type" => "textfield",
						"heading" => esc_html__('Font size (px)', 'cozy'),
						"param_name" => "font_size",
						"value" => ""
					),
					array(
						"type" => "textfield",
						"heading" => esc_html__('Line height (px)', 'cozy'),
						"param_name" => "line_height",
						"value" => ""
					),
					array(
						"type" => "dropdown",
						"heading" => esc_html__('Font Style', 'cozy'),
						"param_name" => "font_style",
						"value" => cozy_edge_get_font_style_array(),
						"description" => ""
					),
					array(
						"type" => "dropdown",
						"heading" => esc_html__('Font weight', 'cozy'),
						"param_name" => "font_weight",
						"value" => cozy_edge_get_font_weight_array(),
						"save_always" => true
					),
					array(
						"type" => "textfield",
						"heading" => esc_html__('Letter Spacing (px)', 'cozy'),
						"param_name" => "letter_spacing",
						"value" => ""
					),
					array(
						"type" => "dropdown",
						"heading" => esc_html__('Text transform', 'cozy'),
						"param_name" => "text_transform",
						"value" => cozy_edge_get_text_transform_array(),
						"description" => ""
					),
					array(
						"type" => "dropdown",
						"heading" => esc_html__('Text decoration', 'cozy'),
						"param_name" => "text_decoration",
						"value" => array(
							esc_html__('None', 'cozy') => "",
							esc_html__('Underline', 'cozy') => "underline",
							esc_html__('Overline', 'cozy') => "overline",
							esc_html__('Line Through', 'cozy') => "line-through"
						),
						"description" => ""
					),
					array(
						"type" => "colorpicker",
						"heading" => esc_html__('Color', 'cozy'),
						"param_name" => "color",
						"description" => ""
					),
					array(
						"type" => "dropdown",
						"heading" => esc_html__('Text Align', 'cozy'),
						"param_name" => "text_align",
						"value" => array(
							"" => "",
							esc_html__('Left', 'cozy') => "left",
							esc_html__('Center', 'cozy') => "center",
							esc_html__('Right', 'cozy') => "right",
							esc_html__('Justify', 'cozy') => "justify"
						),
						"description" => ""
					),
					array(
						"type" => "textarea_html",
						"heading" => esc_html__('Content', 'cozy'),
						"param_name" => "content",
						"value" => esc_html__('Custom Font Content', 'cozy'),
						"description" => "",
						"save_always" => true
					),
					array(
						"type" => "dropdown",
						"heading" => esc_html__('Enable Type Out Effect', 'cozy'),
						"param_name" => "type_out_effect",
						"value" => array(
							esc_html__('No', 'cozy') => "no",
							esc_html__('Yes', 'cozy') => "yes",
						),
						"description" => esc_html__('Adds a type out effect at the end of the custom font content.', 'cozy')
					),
					array(
						"type" => "textarea",
						"heading" => esc_html__('Typed ending number 1', 'cozy'),
						"param_name" => "typed_ending_1",
						"value" => "",
						"description" => "",
						'dependency' => Array('element' => 'type_out_effect', 'value' => array('yes'))
					),
					array(
						"type" => "textarea",
						"heading" => esc_html__('Typed ending number 2', 'cozy'),
						"param_name" => "typed_ending_2",
						"value" => "",
						"description" => "",
						'dependency' => array('element' => 'typed_ending_1', 'not_empty' => true)
					),
					array(
						"type" => "textarea",
						"heading" => esc_html__('Typed ending number 3', 'cozy'),
						"param_name" => "typed_ending_3",
						"value" => "",
						"description" => "",
						'dependency' => array('element' => 'typed_ending_2', 'not_empty' => true)
					)
				)
		) );
	}

	/**
	 * Renders shortcodes HTML
	 *
	 * @param $atts array of shortcode params
	 * @return string
	 */
	public function render($atts, $content = null) {

		$args = array(
			'font_family' => '',
			'font_size' => '',
			'line_height' => '',
			'font_style' => '',
			'font_weight' => '',
			'letter_spacing' => '',
			'text_transform' => '',
			'text_decoration' => '',
			'text_align' => '',
			'color' => '',
			'type_out_effect' => '',
			'typed_ending_1' => '',
			'typed_ending_2' => '',
			'typed_ending_3' => '',
			'type_out_color' => '',
			'type_out_background_color' => ''
		);

		$params = shortcode_atts($args, $atts);

		$params['custom_font_style'] = $this->getCustomFontStyle($params);
		$params['custom_font_data'] = $this->getCustomFontData($params,$args);
		$params['type_out_style'] = $this->getTypeOutStyle($params,$args);
		$content = preg_replace('#^<\/p>|<p>$#', '', $content);
		$params['content'] = $content;
		//Get HTML from template
		$html = cozy_edge_get_shortcode_module_template_part('templates/custom-font-template', 'customfont', '', $params);

		return $html;

	}

	/**
	 * Return Style for Custom Font
	 *
	 * @param $params
	 * @return string
	 */
	private function getCustomFontStyle($params) {
		$custom_font_style = array();

		if ($params['font_family'] !== '') {
			$custom_font_style[] = 'font-family: '.$params['font_family'];
		}

		if ($params['font_size'] !== '') {
			$font_size = strstr($params['font_size'], 'px') ? $params['font_size'] : $params['font_size'].'px';
			$custom_font_style[] = 'font-size: '.$font_size;
		}

		if ($params['line_height'] !== '') {
			$line_height = strstr($params['line_height'], 'px') ? $params['line_height'] : $params['line_height'].'px';
			$custom_font_style[] = 'line-height: '.$line_height;
		}

		if ($params['font_style'] !== '') {
			$custom_font_style[] = 'font-style: '.$params['font_style'];
		}

		if ($params['font_weight'] !== '') {
			$custom_font_style[] = 'font-weight: '.$params['font_weight'];
		}

		if ($params['letter_spacing'] !== '') {
			$letter_spacing = strstr($params['letter_spacing'], 'px') ? $params['letter_spacing'] : $params['letter_spacing'].'px';
			$custom_font_style[] = 'letter-spacing: '.$letter_spacing;
		}

		if ($params['text_transform'] !== '') {
			$custom_font_style[] = 'text-transform: '.$params['text_transform'];
		}

		if ($params['text_decoration'] !== '') {
			$custom_font_style[] = 'text-decoration: '.$params['text_decoration'];
		}

		if ($params['text_align'] !== '') {
			$custom_font_style[] = 'text-align: '.$params['text_align'];
		}

		if ($params['color'] !== '') {
			$custom_font_style[] = 'color: '.$params['color'];
		}

		return implode(';', $custom_font_style);
	}


	/**
	 * Return Custom Font Data Attr
	 *
	 * @param $params
	 * @return string
	 */
	private function getCustomFontData($params) {
		$data_array = array();

		if ($params['font_size'] !== '') {
			$data_array[] = 'data-font-size= '.$params['font_size'];
		}

		if ($params['line_height'] !== '') {
			$data_array[] = 'data-line-height= '.$params['line_height'];
		}
		return implode(' ', $data_array);
	}

	private function getTypeOutStyle($params) {
		$type_out_style = array();

		if ($params['type_out_background_color'] !== '') {
			$type_out_style[] = 'background-color: '.$params['type_out_background_color'];
		}

		if ($params['type_out_color'] !== '') {
			$type_out_style[] = 'color: '.$params['type_out_color'];
		}

		return implode(';', $type_out_style);
	}
}