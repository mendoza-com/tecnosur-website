<?php
namespace CozyEdge\Modules\Shortcodes\Process;

use CozyEdge\Modules\Shortcodes\Lib\ShortcodeInterface;

class ProcessItem implements ShortcodeInterface {
	private $base;

	public function __construct() {
		$this->base = 'edgtf_process_item';

		add_action('vc_before_init', array($this, 'vcMap'));
	}

	public function getBase() {
		return $this->base;
	}

	public function vcMap() {
		vc_map(array(
			'name'                    => 'Process Item',
			'base'                    => $this->getBase(),
			'as_child'                => array('only' => 'edgtf_process_holder'),
			'category'                => 'by EDGE',
			'icon'                    => 'icon-wpb-call-to-action extended-custom-icon',
			'show_settings_on_create' => true,
			'params'                  => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__('Number','cozy'),
					'param_name'  => 'number',
					'admin_label' => true
				),
				array(
					'type'        => 'attach_image',
					'heading'     => esc_html__('Image','cozy'),
					'param_name'  => 'image'
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__('Title','cozy'),
					'param_name'  => 'title',
					'admin_label' => true
				),
				array(
					'type'        => 'textarea',
					'heading'     => esc_html__('Text','cozy'),
					'param_name'  => 'text'
				),
				array(
					'type'        => 'dropdown',
					'heading'     => esc_html__('Highlight Item?','cozy'),
					'param_name'  => 'highlighted',
					'value'       => array(
						esc_html__('No','cozy')  => 'no',
						esc_html__('Yes','cozy') => 'yes'
					)
				)
			)
		));
	}

	public function render($atts, $content = null) {
		$default_atts = array(
			'number'     => '',
			'image'     => '',
			'title'     => '',
			'text'      => '',
			'highlighted' => 'no'
		);

		$params = shortcode_atts($default_atts, $atts);

		$params['item_classes'] = array(
			'edgtf-process-item-holder'
		);

		if($params['highlighted'] === 'yes') {
			$params['item_classes'][] = 'edgtf-pi-highlighted';
		}
		$params['number_holder_style'] = '';
		if($params['image'] != ''){
			$params['number_holder_style'] = 'background-image: url(' . wp_get_attachment_url($params['image']) . ')';
		}

		return cozy_edge_get_shortcode_module_template_part('templates/process-item-template', 'process', '', $params);
	}

}