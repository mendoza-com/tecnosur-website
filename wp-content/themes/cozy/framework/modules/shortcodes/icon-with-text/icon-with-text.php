<?php
namespace CozyEdge\Modules\Shortcodes\IconWithText;

use CozyEdge\Modules\Shortcodes\Lib\ShortcodeInterface;

/**
 * Class IconWithText
 * @package CozyEdge\Modules\Shortcodes\IconWithText
 */
class IconWithText implements ShortcodeInterface {
    /**
     * @var string
     */
    private $base;

    /**
     *
     */
    public function __construct() {
        $this->base = 'edgtf_icon_with_text';

        add_action('vc_before_init', array($this, 'vcMap'));
    }

    /**
     * @return string
     */
    public function getBase() {
        return $this->base;
    }

    /**
     *
     */
    public function vcMap() {
        vc_map(array(
            'name'                      => esc_html__('Edge Icon With Text', 'cozy'),
            'base'                      => $this->base,
            'icon'                      => 'icon-wpb-icon-with-text extended-custom-icon',
            'category' => esc_html__('by EDGE', 'cozy'),
            'allowed_container_element' => 'vc_row',
            'params'                    => array_merge(
                cozy_edge_icon_collections()->getVCParamsArray(),
                array(
                    array(
                        'type'       => 'attach_image',
                        'heading'    => esc_html__('Custom Icon','cozy'),
                        'param_name' => 'custom_icon'
                    ),
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Icon Position','cozy'),
                        'param_name'  => 'icon_position',
                        'value'       => array(
                            esc_html__('Top', 'cozy')             => 'top',
                            esc_html__('Left', 'cozy')            => 'left',
                            esc_html__('Left From Title', 'cozy') => 'left-from-title',
                            esc_html__('Right', 'cozy')           => 'right'
                        ),
                        'description' => esc_html__('Icon Position','cozy'),
                        'save_always' => true,
                        'admin_label' => true
                    ),
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Icon Type','cozy'),
                        'param_name'  => 'icon_type',
                        'value'       => array(
                            esc_html__('Normal', 'cozy') => 'normal',
                            esc_html__('Circle', 'cozy') => 'circle',
                            esc_html__('Square', 'cozy') => 'square'
                        ),
                        'save_always' => true,
                        'admin_label' => true,
                        'group'       => esc_html__('Icon Settings','cozy'),
                        'description' => esc_html__('This attribute doesn\'t work when Icon Position is Top. In This case Icon Type is Normal', 'cozy'),
                    ),
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Icon Size','cozy'),
                        'param_name'  => 'icon_size',
                        'value'       => array(
                            esc_html__('Tiny', 'cozy')       => 'edgtf-icon-tiny',
                            esc_html__('Small', 'cozy')      => 'edgtf-icon-small',
                            esc_html__('Medium', 'cozy')     => 'edgtf-icon-medium',
                            esc_html__('Large', 'cozy')      => 'edgtf-icon-large',
                            esc_html__('Very Large', 'cozy') => 'edgtf-icon-huge'
                        ),
                        'admin_label' => true,
                        'save_always' => true,
                        'group'       => esc_html__('Icon Settings','cozy'),
                        'description' => esc_html__('This attribute doesn\'t work when Icon Position is Top','cozy')
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => esc_html__('Custom Icon Size (px)','cozy'),
                        'param_name' => 'custom_icon_size',
                        'group'      => esc_html__('Icon Settings','cozy')
                    ),
                    array(
                        'type'        => 'dropdown',
                        'heading'     => esc_html__('Icon Animation','cozy'),
                        'param_name'  => 'icon_animation',
                        'value'       => array(
                            esc_html__('No', 'cozy')  => '',
                            esc_html__('Yes', 'cozy') => 'yes'
                        ),
                        'group'       => esc_html__('Icon Settings','cozy'),
                        'save_always' => true,
                        'admin_label' => true
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => esc_html__('Icon Animation Delay (ms)','cozy'),
                        'param_name' => 'icon_animation_delay',
                        'group'      => esc_html__('Icon Settings', 'cozy'),
                        'dependency' => array('element' => 'icon_animation', 'value' => array('yes'))
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Icon Margin','cozy'),
                        'param_name'  => 'icon_margin',
                        'value'       => '',
                        'description' => esc_html__('Margin should be set in a top right bottom left format','cozy'),
                        'admin_label' => true,
                        'group'       => esc_html__('Icon Settings', 'cozy'),
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Shape Size (px)','cozy'),
                        'param_name'  => 'shape_size',
                        'admin_label' => true,
                        'group'       => esc_html__('Icon Settings','cozy')
                    ),
                    array(
                        'type'       => 'colorpicker',
                        'heading'    => esc_html__('Icon Color','cozy'),
                        'param_name' => 'icon_color',
                        'group'      => esc_html__('Icon Settings','cozy')
                    ),
                    array(
                        'type'       => 'colorpicker',
                        'heading'    => esc_html__('Icon Hover Color','cozy'),
                        'param_name' => 'icon_hover_color',
                        'group'      => esc_html__('Icon Settings','cozy')
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Icon Background Color','cozy'),
                        'param_name'  => 'icon_background_color',
                        'description' => esc_html__('Icon Background Color (only for square and circle icon type)','cozy'),
                        'dependency'  => array('element' => 'icon_type', 'value' => array('square', 'circle')),
                        'group'       => esc_html__('Icon Settings','cozy')
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Icon Hover Background Color','cozy'),
                        'param_name'  => 'icon_hover_background_color',
                        'description' => esc_html__('Icon Hover Background Color (only for square and circle icon type)','cozy'),
                        'dependency'  => array('element' => 'icon_type', 'value' => array('square', 'circle')),
                        'group'       => esc_html__('Icon Settings','cozy')
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Icon Border Color','cozy'),
                        'param_name'  => 'icon_border_color',
                        'description' => esc_html__('Only for Square and Circle Icon type','cozy'),
                        'dependency'  => array('element' => 'icon_type', 'value' => array('square', 'circle')),
                        'group'       => esc_html__('Icon Settings','cozy')
                    ),
                    array(
                        'type'        => 'colorpicker',
                        'heading'     => esc_html__('Icon Border Hover Color','cozy'),
                        'param_name'  => 'icon_border_hover_color',
                        'description' => esc_html__('Only for Square and Circle Icon type','cozy'),
                        'dependency'  => array('element' => 'icon_type', 'value' => array('square', 'circle')),
                        'group'       => esc_html__('Icon Settings','cozy')
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Border Width','cozy'),
                        'param_name'  => 'icon_border_width',
                        'description' => esc_html__('Only for Square and Circle Icon type','cozy'),
                        'dependency'  => array('element' => 'icon_type', 'value' => array('square', 'circle')),
                        'group'       => esc_html__('Icon Settings','cozy')
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Title','cozy'),
                        'param_name'  => 'title',
                        'value'       => '',
                        'admin_label' => true
                    ),
                    array(
                        'type'       => 'dropdown',
                        'heading'    => esc_html__('Title Tag','cozy'),
                        'param_name' => 'title_tag',
                        'value'      => array(
                            ''   => '',
                            'h2' => 'h2',
                            'h3' => 'h3',
                            'h4' => 'h4',
                            'h5' => 'h5',
                            'h6' => 'h6',
                        ),
                        'dependency' => array('element' => 'title', 'not_empty' => true),
                        'group'      => esc_html__('Text Settings','cozy')
                    ),
                    array(
                        'type'       => 'colorpicker',
                        'heading'    => esc_html__('Title Color','cozy'),
                        'param_name' => 'title_color',
                        'dependency' => array('element' => 'title', 'not_empty' => true),
                        'group'      => esc_html__('Text Settings','cozy')
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => esc_html__('Text','cozy'),
                        'param_name' => 'text'
                    ),
                    array(
                        'type'       => 'colorpicker',
                        'heading'    => esc_html__('Text Color','cozy'),
                        'param_name' => 'text_color',
                        'dependency' => array('element' => 'text', 'not_empty' => true),
                        'group'      => esc_html__('Text Settings','cozy')
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => esc_html__('Link','cozy'),
                        'param_name'  => 'link',
                        'value'       => '',
                        'admin_label' => true
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => esc_html__('Link Text','cozy'),
                        'param_name' => 'link_text',
                        'dependency' => array('element' => 'link', 'not_empty' => true)
                    ),
                    array(
                        'type'       => 'dropdown',
                        'heading'    => esc_html__('Target','cozy'),
                        'param_name' => 'target',
                        'value'      => array(
                            ''     => '',
                            esc_html__('Self', 'cozy')  => '_self',
                            esc_html__('Blank', 'cozy') => '_blank'
                        ),
                        'dependency' => array('element' => 'link', 'not_empty' => true),
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => esc_html__('Text Left Padding (px)','cozy'),
                        'param_name' => 'text_left_padding',
                        'dependency' => array('element' => 'icon_position', 'value' => array('left')),
                        'group'      => esc_html__('Text Settings','cozy')
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => esc_html__('Text Right Padding (px)','cozy'),
                        'param_name' => 'text_right_padding',
                        'dependency' => array('element' => 'icon_position', 'value' => array('right')),
                        'group'      => esc_html__('Text Settings','cozy')
                    )
                )
            )
        ));
    }

    /**
     * @param array $atts
     * @param null $content
     *
     * @return string
     */
    public function render($atts, $content = null) {
        $default_atts = array(
            'custom_icon'                 => '',
            'icon_position'               => '',
            'icon_type'                   => '',
            'icon_size'                   => '',
            'custom_icon_size'            => '',
            'icon_animation'              => '',
            'icon_animation_delay'        => '',
            'icon_margin'                 => '',
            'shape_size'                  => '',
            'icon_color'                  => '',
            'icon_hover_color'            => '',
            'icon_background_color'       => '',
            'icon_hover_background_color' => '',
            'icon_border_color'           => '',
            'icon_border_hover_color'     => '',
            'icon_border_width'           => '',
            'title'                       => '',
            'title_tag'                   => 'h4',
            'title_color'                 => '',
            'text'                        => '',
            'text_color'                  => '',
            'link'                        => '',
            'link_text'                   => '',
            'target'                      => '_self',
            'text_left_padding'           => '',
            'text_right_padding'          => ''
        );

        $default_atts = array_merge($default_atts, cozy_edge_icon_collections()->getShortcodeParams());
        $params       = shortcode_atts($default_atts, $atts);

        $params['icon_parameters'] = $this->getIconParameters($params);
        $params['holder_classes']  = $this->getHolderClasses($params);
        $params['title_styles']    = $this->getTitleStyles($params);
        $params['content_styles']  = $this->getContentStyles($params);
        $params['text_styles']     = $this->getTextStyles($params);

        return cozy_edge_get_shortcode_module_template_part('templates/iwt', 'icon-with-text', $params['icon_position'], $params);
    }

    /**
     * Returns parameters for icon shortcode as a string
     *
     * @param $params
     *
     * @return array
     */
    private function getIconParameters($params) {
        $params_array = array();

        if(empty($params['custom_icon'])) {
            $iconPackName = cozy_edge_icon_collections()->getIconCollectionParamNameByKey($params['icon_pack']);

            $params_array['icon_pack']   = $params['icon_pack'];
            $params_array[$iconPackName] = $params[$iconPackName];

            if(!empty($params['icon_size'])) {
                $params_array['size'] = $params['icon_size'];
            }

            if(!empty($params['custom_icon_size'])) {
                $params_array['custom_size'] = $params['custom_icon_size'];
            }

            if(!empty($params['icon_type'])) {
                $params_array['type'] = $params['icon_type'];
            }

            $params_array['shape_size'] = $params['shape_size'];

            if(!empty($params['icon_border_color'])) {
                $params_array['border_color'] = $params['icon_border_color'];
            }

            if(!empty($params['icon_border_hover_color'])) {
                $params_array['hover_border_color'] = $params['icon_border_hover_color'];
            }

            if(!empty($params['icon_border_width'])) {
                $params_array['border_width'] = $params['icon_border_width'];
            }

            if(!empty($params['icon_background_color'])) {
                $params_array['background_color'] = $params['icon_background_color'];
            }

            if(!empty($params['icon_hover_background_color'])) {
                $params_array['hover_background_color'] = $params['icon_hover_background_color'];
            }

            $params_array['icon_color'] = $params['icon_color'];

            if(!empty($params['icon_hover_color'])) {
                $params_array['hover_icon_color'] = $params['icon_hover_color'];
            }

            $params_array['icon_animation']       = $params['icon_animation'];
            $params_array['icon_animation_delay'] = $params['icon_animation_delay'];
            $params_array['margin']               = $params['icon_margin'];
        }

        return $params_array;
    }

    /**
     * Returns array of holder classes
     *
     * @param $params
     *
     * @return array
     */
    private function getHolderClasses($params) {
        $classes = array('edgtf-iwt', 'clearfix');

        if(!empty($params['icon_position'])) {
            switch($params['icon_position']) {
                case 'top':
                    $classes[] = 'edgtf-iwt-icon-top';
                    break;
                case 'left':
                    $classes[] = 'edgtf-iwt-icon-left';
                    break;
                case 'right':
                    $classes[] = 'edgtf-iwt-icon-right';
                    break;
                case 'left-from-title':
                    $classes[] = 'edgtf-iwt-left-from-title';
                    break;
                default:
                    break;
            }
        }

        if(!empty($params['icon_size'])) {
            $classes[] = 'edgtf-iwt-'.str_replace('edgtf-', '', $params['icon_size']);
        }

        return $classes;
    }

    private function getTitleStyles($params) {
        $styles = array();

        if(!empty($params['title_color'])) {
            $styles[] = 'color: '.$params['title_color'];
        }

        return $styles;
    }

    private function getTextStyles($params) {
        $styles = array();

        if(!empty($params['text_color'])) {
            $styles[] = 'color: '.$params['text_color'];
        }

        return $styles;
    }

    private function getContentStyles($params) {
        $styles = array();

        if($params['icon_position'] == 'left' && !empty($params['text_left_padding'])) {
            $styles[] = 'padding-left: '.cozy_edge_filter_px($params['text_left_padding']).'px';
        }

        if($params['icon_position'] == 'right' && !empty($params['text_right_padding'])) {
            $styles[] = 'padding-right: '.cozy_edge_filter_px($params['text_right_padding']).'px';
        }

        return $styles;
    }
}