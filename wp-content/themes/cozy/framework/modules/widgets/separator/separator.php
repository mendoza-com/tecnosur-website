<?php

/**
 * Widget that adds separator boxes type
 *
 * Class Separator_Widget
 */
class CozyEdgeSeparatorWidget extends CozyEdgeWidget {
    /**
     * Set basic widget options and call parent class construct
     */
    public function __construct() {
        parent::__construct(
            'edgt_separator_widget', // Base ID
            'Edge Separator Widget' // Name
        );

        $this->setParams();
    }

    /**
     * Sets widget options
     */
    protected function setParams() {
        $this->params = array(
            array(
                'type' => 'dropdown',
                'title' => esc_html__('Type','cozy'),
                'name' => 'type',
                'options' => array(
                    'normal' => esc_html__('Normal','cozy'),
                    'full-width' => esc_html__('Full Width','cozy'),
                )
            ),
            array(
                'type' => 'dropdown',
                'title' => esc_html__('Position','cozy'),
                'name' => 'position',
                'options' => array(
                    'center' => esc_html__('Center','cozy'),
                    'left' => esc_html__('Left','cozy'),
                    'right' => esc_html__('Right','cozy'),
                )
            ),
            array(
                'type' => 'dropdown',
                'title' => esc_html__('Style','cozy'),
                'name' => 'border_style',
                'options' => array(
                    'solid' => esc_html__('Solid','cozy'),
                    'dashed' => esc_html__('Dashed','cozy'),
                    'dotted' => esc_html__('Dotted','cozy'),
                )
            ),
            array(
                'type' => 'textfield',
                'title' => esc_html__('Color','cozy'),
                'name' => 'color'
            ),
            array(
                'type' => 'textfield',
                'title' => esc_html__('Width','cozy'),
                'name' => 'width',
                'description' => ''
            ),
            array(
                'type' => 'textfield',
                'title' => esc_html__('Thickness (px)','cozy'),
                'name' => 'thickness',
                'description' => ''
            ),
            array(
                'type' => 'textfield',
                'title' => esc_html__('Top Margin','cozy'),
                'name' => 'top_margin',
                'description' => ''
            ),
            array(
                'type' => 'textfield',
                'title' => esc_html__('Bottom Margin','cozy'),
                'name' => 'bottom_margin',
                'description' => ''
            )
        );
    }

    /**
     * Generates widget's HTML
     *
     * @param array $args args from widget area
     * @param array $instance widget's options
     */
    public function widget($args, $instance) {

        extract($args);

        //prepare variables
        $params = '';

        //is instance empty?
        if(is_array($instance) && count($instance)) {
            //generate shortcode params
            foreach($instance as $key => $value) {
                $params .= " $key='$value' ";
            }
        }

        echo '<div class="widget edgtf-separator-widget">';

        //finally call the shortcode
        echo do_shortcode("[edgtf_separator $params]"); // XSS OK

        echo '</div>'; //close div.edgtf-separator-widget
    }
}