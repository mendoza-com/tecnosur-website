<?php
namespace CozyEdge\Modules\Shortcodes\ProgressBar;

use CozyEdge\Modules\Shortcodes\Lib\ShortcodeInterface;

class ProgressBar implements ShortcodeInterface{
	private $base;
	
	function __construct() {
		$this->base = 'edgtf_progress_bar';
		add_action('vc_before_init', array($this, 'vcMap'));
	}
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {

		vc_map( array(
			'name' => esc_html__('Edge Progress Bar', 'cozy'),
			'base' => $this->base,
			'icon' => 'icon-wpb-progress-bar extended-custom-icon',
            'category' => esc_html__('by EDGE', 'cozy'),
			'allowed_container_element' => 'vc_row',
			'params' => array(
				array(
					'type' => 'textfield',
					'admin_label' => true,
					'heading' => esc_html__('Title','cozy'),
					'param_name' => 'title'
				),
				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'heading' => esc_html__('Title Tag','cozy'),
					'param_name' => 'title_tag',
					'value' => array(
						''   => '',
						'h2' => 'h2',
						'h3' => 'h3',
						'h4' => 'h4',	
						'h5' => 'h5',	
						'h6' => 'h6',	
					)
				),
				array(
					'type' => 'textfield',
					'admin_label' => true,
					'heading' => esc_html__('Percentage','cozy'),
					'param_name' => 'percent'
				),	
				array(
					'type' => 'dropdown',
					'admin_label' => true,
					'heading' => esc_html__('Percentage Type','cozy'),
					'param_name' => 'percentage_type',
					'value' => array(
						esc_html__('Floating', 'cozy')  => 'floating',
						esc_html__('Static', 'cozy') => 'static'
					),
					'dependency' => Array('element' => 'percent', 'not_empty' => true)
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__('Active Color','cozy'),
					'param_name' => 'active_color',
					'group' => esc_html__('Design Options','cozy')
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__('Inactive Color','cozy'),
					'param_name' => 'inactive_color',
					'group' => esc_html__('Design Options','cozy')
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__('Title Color','cozy'),
					'param_name' => 'title_color',
					'group' => esc_html__('Design Options','cozy')
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__('Number Color','cozy'),
					'param_name' => 'number_color',
					'group' => esc_html__('Design Options','cozy')
				)
			)
		) );

	}

	public function render($atts, $content = null) {
		$args = array(
            'title' => '',
            'title_tag' => 'h5',
            'percent' => '100',
            'percentage_type' => 'floating',
            'active_color' => '',
            'inactive_color' => '',
            'title_color' => '',
            'number_color' => ''
        );
		$params = shortcode_atts($args, $atts);

		//Extract params for use in method
		extract($params);
		$headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

		$params['content_style'] = '';
		$params['outer_style'] = '';
		$params['title_style'] = '';
		$params['number_style'] = '';

		$params['percentage_classes'] = $this->getPercentageClasses($params);		

		if(!empty($params['active_color'])){
			$params['content_style'] = 'background-color:'.$params['active_color'];
		}
		if(!empty($params['inactive_color'])){
			$params['outer_style'] = 'background-color:'.$params['inactive_color'];
		}
		if(!empty($params['title_color'])){
			$params['title_style'] = 'color:'.$params['title_color'];
		}
		if(!empty($params['number_color'])){
			$params['number_style'] = 'color:'.$params['number_color'];
		}
        //init variables
		$html = cozy_edge_get_shortcode_module_template_part('templates/progress-bar-template', 'progress-bar', '', $params);
		
        return $html;
		
	}
	/**
    * Generates css classes for progress bar
    *
    * @param $params
    *
    * @return array
    */
	private function getPercentageClasses($params){
		
		$percentClassesArray = array();
		
		if(!empty($params['percentage_type']) !=''){

			$percentClassesArray[]= 'edgtf-'.$params['percentage_type'];
		}
		return implode(' ', $percentClassesArray);
	}
}