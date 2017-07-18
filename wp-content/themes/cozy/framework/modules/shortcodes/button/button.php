<?php
namespace CozyEdge\Modules\Shortcodes\Button;

use CozyEdge\Modules\Shortcodes\Lib\ShortcodeInterface;


/**
 * Class Button that represents button shortcode
 * @package CozyEdge\Modules\Shortcodes\Button
 */
class Button implements ShortcodeInterface {
    /**
     * @var string
     */
    private $base;

    /**
     * Sets base attribute and registers shortcode with Visual Composer
     */
    public function __construct() {
        $this->base = 'edgtf_button';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    /**
     * Returns base attribute
     * @return string
     */
    public function getBase() {
        return $this->base;
    }

    /**
     * Maps shortcode to Visual Composer
     */
    public function vcMap() {
        vc_map(array(
            'name'                      => esc_html__('Edge Button', 'cozy'),
            'base'                      => $this->base,
            'category'                  => 'by EDGE',
            'icon'                      => 'icon-wpb-button extended-custom-icon',
            'allowed_container_element' => 'vc_row',
            'params'                    => array_merge(
                array(
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Size', 'cozy'),
                        'param_name'  => 'size',
                        'value'       => array(
                            esc_html__('Default', 'cozy')                => '',
                            esc_html__('Small', 'cozy')                  => 'small',
                            esc_html__('Medium', 'cozy')                 => 'medium',
                            esc_html__('Large', 'cozy')                  => 'large',
                            esc_html__('Extra Large', 'cozy')            => 'huge',
                            esc_html__('Extra Large Full Width', 'cozy') => 'huge-full-width'
                        ),
                        'save_always' => true,
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Type', 'cozy'),
                        'param_name'  => 'type',
                        'value'       => array(
                            esc_html__('Default', 'cozy') => '',
                            esc_html__('Outline', 'cozy') => 'outline',
                            esc_html__('Outline Light', 'cozy') => 'outline-light',
                            esc_html__('Solid', 'cozy')   => 'solid',
                            esc_html__('Solid Light', 'cozy')   => 'solid-dark',
	                        esc_html__('Transparent', 'cozy') => 'transparent'
                        ),
                        'save_always' => true,
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Text', 'cozy'),
                        'param_name'  => 'text',
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Link', 'cozy'),
                        'param_name'  => 'link',
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Link Target', 'cozy'),
                        'param_name'  => 'target',
                        'value'       => array(
                            esc_html__('Self', 'cozy')  => '_self',
                            esc_html__('Blank', 'cozy') => '_blank'
                        ),
                        'save_always' => true,
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Custom CSS class', 'cozy'),
                        'param_name'  => 'custom_class',
                        'admin_label' => true
                    )
                ),
                cozy_edge_icon_collections()->getVCParamsArray(array(), '', true),
                array(
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Color', 'cozy'),
                        'param_name'  => 'color',
                        'group'       => esc_html__('Design Options', 'cozy'),
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Hover Color', 'cozy'),
                        'param_name'  => 'hover_color',
                        'group'       => esc_html__('Design Options', 'cozy'),
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Background Color', 'cozy'),
                        'param_name'  => 'background_color',
                        'admin_label' => true,
                        'dependency'  => array('element' => 'type', 'value' => array('solid', 'solid-dark', 'outline','outline-light', '')),
                        'group'       => esc_html__('Design Options','cozy')
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Hover Background Color', 'cozy'),
                        'param_name'  => 'hover_background_color',
                        'admin_label' => true,
                        'group'       => esc_html__('Design Options','cozy'),
                        'dependency'  => array('element' => 'type', 'value' => array('solid', 'solid-dark', 'outline','outline-light', '')),
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Border Color', 'cozy'),
                        'param_name'  => 'border_color',
                        'admin_label' => true,
                        'dependency'  => array('element' => 'type', 'value' => array('solid', 'solid-dark', 'outline','outline-light', '')),
                        'group'       => esc_html__('Design Options','cozy')
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Hover Border Color', 'cozy'),
                        'param_name'  => 'hover_border_color',
                        'admin_label' => true,
                        'group'       => esc_html__('Design Options','cozy'),
                        'dependency'  => array('element' => 'type', 'value' => array('solid', 'solid-dark', 'outline','outline-light', '')),
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Font Size (px)', 'cozy'),
                        'param_name'  => 'font_size',
                        'admin_label' => true,
                        'group'       => esc_html__('Design Options','cozy')
                    ),
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Font Weight', 'cozy'),
                        'param_name'  => 'font_weight',
                        'value'       => cozy_edge_get_font_weight_array(true),
                        'admin_label' => true,
                        'group'       => esc_html__('Design Options', 'cozy')
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Margin', 'cozy'),
                        'param_name'  => 'margin',
                        'description' => esc_html__('Insert margin in format: 0px 0px 1px 0px', 'cozy'),
                        'admin_label' => true,
                        'group'       => esc_html__('Design Options','cozy')
                    )
                )
            ) //close array_merge
        ));
    }

    /**
     * Renders HTML for button shortcode
     *
     * @param array $atts
     * @param null $content
     *
     * @return string
     */
    public function render($atts, $content = null) {
        $default_atts = array(
            'size'                   => '',
            'type'                   => '',
            'text'                   => '',
            'link'                   => '',
            'target'                 => '',
            'color'                  => '',
            'hover_color'            => '',
            'background_color'       => '',
            'hover_background_color' => '',
            'border_color'           => '',
            'hover_border_color'     => '',
            'font_size'              => '',
            'font_weight'            => '',
            'margin'                 => '',
            'custom_class'           => '',
            'html_type'              => 'anchor',
            'input_name'             => '',
            'hover_animation'        => '',
            'custom_attrs'           => array()
        );

        $default_atts = array_merge($default_atts, cozy_edge_icon_collections()->getShortcodeParams());
        $params       = shortcode_atts($default_atts, $atts);

        if($params['html_type'] !== 'input') {
            $iconPackName   = cozy_edge_icon_collections()->getIconCollectionParamNameByKey($params['icon_pack']);
            $params['icon'] = $iconPackName ? $params[$iconPackName] : '';
        }

        $params['size'] = !empty($params['size']) ? $params['size'] : 'medium';
        $params['type'] = !empty($params['type']) ? $params['type'] : 'solid';


        $params['link']   = !empty($params['link']) ? $params['link'] : '#';
        $params['target'] = !empty($params['target']) ? $params['target'] : '_self';

        //prepare params for template
        $params['button_classes']      = $this->getButtonClasses($params);
        $params['button_custom_attrs'] = !empty($params['custom_attrs']) ? $params['custom_attrs'] : array();
        $params['button_styles']       = $this->getButtonStyles($params);
        $params['button_data']         = $this->getButtonDataAttr($params);

        return cozy_edge_get_shortcode_module_template_part('templates/'.$params['html_type'], 'button', $params['hover_animation'], $params);
    }

    /**
     * Returns array of button styles
     *
     * @param $params
     *
     * @return array
     */
    private function getButtonStyles($params) {
        $styles = array();

        if(!empty($params['color'])) {
            $styles[] = 'color: '.$params['color'];
        }

        if(!empty($params['background_color'])) {
            $styles[] = 'background-color: '.$params['background_color'];
        }

        if(!empty($params['border_color'])) {
            $styles[] = 'border-color: '.$params['border_color'];
        }

        if(!empty($params['font_size'])) {
            $styles[] = 'font-size: '.cozy_edge_filter_px($params['font_size']).'px';
        }

        if(!empty($params['font_weight'])) {
            $styles[] = 'font-weight: '.$params['font_weight'];
        }

        if(!empty($params['margin'])) {
            $styles[] = 'margin: '.$params['margin'];
        }

        return $styles;
    }

    /**
     *
     * Returns array of button data attr
     *
     * @param $params
     *
     * @return array
     */
    private function getButtonDataAttr($params) {
        $data = array();

        if(!empty($params['hover_background_color'])) {
            $data['data-hover-bg-color'] = $params['hover_background_color'];
        }

        if(!empty($params['hover_color'])) {
            $data['data-hover-color'] = $params['hover_color'];
        }

        if(!empty($params['hover_border_color'])) {
            $data['data-hover-border-color'] = $params['hover_border_color'];
        }

        return $data;
    }

    /**
     * Returns array of HTML classes for button
     *
     * @param $params
     *
     * @return array
     */
    private function getButtonClasses($params) {
        $buttonClasses = array(
            'edgtf-btn',
            'edgtf-btn-'.$params['size'],
            'edgtf-btn-'.$params['type']
        );

        if(!empty($params['hover_background_color'])) {
            $buttonClasses[] = 'edgtf-btn-custom-hover-bg';
        }

        if(!empty($params['hover_border_color'])) {
            $buttonClasses[] = 'edgtf-btn-custom-border-hover';
        }

        if(!empty($params['hover_color'])) {
            $buttonClasses[] = 'edgtf-btn-custom-hover-color';
        }

        if(!empty($params['icon'])) {
            $buttonClasses[] = 'edgtf-btn-icon';
        }

        if(!empty($params['custom_class'])) {
            $buttonClasses[] = $params['custom_class'];
        }

        return $buttonClasses;
    }
}