<?php
namespace CozyEdge\Modules\Shortcodes\Tab;

use CozyEdge\Modules\Shortcodes\Lib\ShortcodeInterface;
/**
 * Class Tab
 */

class Tab implements ShortcodeInterface {
	/**
	 * @var string
	 */
	private $base;
	function __construct() {
		$this->base = 'edgtf_tab';
		add_action('vc_before_init', array($this, 'vcMap'));
	}
	/**
	 * Returns base for shortcode
	 * @return string
	 */
	public function getBase() {
		return $this->base;
	}
	public function vcMap() {

		vc_map( array(
			'name' => esc_html__('Edge Tab', 'cozy'),
			'base' => $this->getBase(),
			'as_parent' => array('except' => 'vc_row, edgtf_accordion, edgtf_accordion_tab'),
			'as_child' => array('only' => 'edgtf_tabs'),
			'is_container' => true,
            'category' => esc_html__('by EDGE', 'cozy'),
			'icon' => 'icon-wpb-call-to-action extended-custom-icon',
			'show_settings_on_create' => true,
			'js_view' => 'VcColumnView',
			'params' => array_merge(
				 \CozyEdgeIconCollections::get_instance()->getVCParamsArray(),
				array(
					array(
						'type' => 'textfield',
						'admin_label' => true,
						'heading' => esc_html__('Title','cozy'),
						'param_name' => 'title'
					)
				)
			)
		));

	}

	public function render($atts, $content = null) {
		
		$default_atts = array(
			'title' => 'Tab',
			'tab_id' => ''
		);
		
		$default_atts = array_merge($default_atts, cozy_edge_icon_collections()->getShortcodeParams());
		$params       = shortcode_atts($default_atts, $atts);
		extract($params);
		
		$iconPackName = cozy_edge_icon_collections()->getIconCollectionParamNameByKey($params['icon_pack']);
		$params['icon'] = $params[$iconPackName];

		$rand_number = rand(0, 1000);
		$params['title'] = $params['title'].'-'.$rand_number;

		$params['content'] = $content;
		
		$output = '';
		$output .= cozy_edge_get_shortcode_module_template_part('templates/tab-content','tabs', '', $params);
		return $output;
	}
}