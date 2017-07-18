<?php
if(!defined('ABSPATH')) exit;

class CozyEdgeInstagramWidget extends CozyEdgeWidget {
    protected $params;
    public function __construct() {
        parent::__construct(
            'edgtf_instagram_widget',
            'Edge Instagram Widget',
            array( 'description' => esc_html__( 'Display instagram images', 'cozy' ) )
        );

        $this->setParams();
    }

    protected function setParams() {
        $this->params = array(
            array(
                'name' => 'title',
                'type' => 'textfield',
                'title' => esc_html__('Title','cozy'),
            ),
            array(
                'name' => 'tag',
                'type' => 'textfield',
                'title' => esc_html__('Tag','cozy'),
            ),
            array(
                'name' => 'number_of_photos',
                'type' => 'textfield',
                'title' => esc_html__('Number of photos','cozy'),
            ),
            array(
                'name' => 'number_of_cols',
                'type' => 'dropdown',
                'title' => esc_html__('Number of columns','cozy'),
                'options' => array(
                    '2' => esc_html__('Two','cozy'),
                    '3' => esc_html__('Three','cozy'),
                    '4' => esc_html__('Four','cozy'),
                    '6' => esc_html__('Six','cozy'),
                    '9' => esc_html__('Nine','cozy'),
                )
            ),
            array(
                'name' => 'image_size',
                'type' => 'dropdown',
                'title' => esc_html__('Image Size','cozy'),
                'options' => array(
                    'thumbnail' => esc_html__('Small','cozy'),
                    'low_resolution' => esc_html__('Medium','cozy'),
                    'standard_resolution' => esc_html__('Large','cozy'),
                )
            ),
            array(
                'name' => 'transient_time',
                'type' => 'textfield',
                'title' => esc_html__('Images Cache Time','cozy'),
            ),
        );
    }
	public function getParams() {
		return $this->params;
	}

    public function widget($args, $instance) {
        extract($instance);

        print $args['before_widget'];
        print $args['before_title'].$title.$args['after_title'];

        $instagram_api = EdgeInstagramApi::getInstance();
        $images_array = $instagram_api->getImages($number_of_photos, $tag, array(
            'use_transients' => true,
            'transient_name' => $args['widget_id'],
            'transient_time' => $transient_time
        ));

        $number_of_cols = $number_of_cols == '' ? 3 : $number_of_cols;

        if(is_array($images_array) && count($images_array)) { ?>
            <ul class="edgtf-instagram-feed clearfix edgtf-col-<?php echo esc_attr($number_of_cols); ?>">
            <?php
            foreach ($images_array as $image) { ?>
                <li>
                    <a itemprop="url" href="<?php echo esc_url($instagram_api->getHelper()->getImageLink($image)); ?>" target="_blank">
                        <?php echo cozy_edge_kses_img($instagram_api->getHelper()->getImageHTML($image, $image_size)); ?>
                    </a>
                </li>
            <?php } ?>
            </ul>
        <?php }

        print $args['after_widget'];
    }

    public function form($instance) {
        foreach ($this->params as $param_array) {
            $param_name = $param_array['name'];
            ${$param_name} = isset( $instance[$param_name] ) ? esc_attr( $instance[$param_name] ) : '';
        }

        //if code wasn't saved to database
        if(!get_option('edgt_instagram_code')) {
            $instagram_api = EdgeInstagramApi::getInstance();
            //check if code parameter is set in URL. That means that user has connected with Instagram
            if(!empty($_GET['code'])) {
                //update code option so we can use it later
                $instagram_api->storeCode();


            } else {
                $instagram_api->storeCodeRequestURI();

                //user needs to connect with instagram
                echo '<p><a class="button" href="'.esc_url($instagram_api->getAuthorizeUrl()).'">Connect with Instagram</a></p>';
            }
        }

        //user has connected with instagram. Show form
        if(get_option('edgt_instagram_code')) {
            foreach ($this->params as $param) {
                switch($param['type']) {
                    case 'textfield':
                        ?>
                        <p>
                            <label for="<?php echo esc_attr($this->get_field_id( $param['name'] )); ?>"><?php echo
                                esc_html($param['title']); ?></label>
                            <input class="widefat" id="<?php echo esc_attr($this->get_field_id( $param['name'] )); ?>" name="<?php echo esc_attr($this->get_field_name( $param['name'] )); ?>" type="text" value="<?php echo esc_attr( ${$param['name']} ); ?>" />
                        </p>
                        <?php
                        break;
                    case 'dropdown':
                        ?>
                        <p>
                            <label for="<?php echo esc_attr($this->get_field_id( $param['name'] )); ?>"><?php echo
                                esc_html($param['title']); ?></label>
                            <?php if(isset($param['options']) && is_array($param['options']) && count($param['options'])) { ?>
                                <select class="widefat" name="<?php echo esc_attr($this->get_field_name( $param['name'] )); ?>" id="<?php echo esc_attr($this->get_field_id( $param['name'] )); ?>">
                                    <?php foreach ($param['options'] as $param_option_key => $param_option_val) {
                                        $option_selected = '';
                                        if(${$param['name']} == $param_option_key) {
                                            $option_selected = 'selected';
                                        }
                                        ?>
                                        <option <?php echo esc_attr($option_selected); ?> value="<?php echo esc_attr($param_option_key); ?>"><?php echo esc_attr($param_option_val); ?></option>
                                    <?php } ?>
                                </select>
                            <?php } ?>
                        </p>

                        <?php
                        break;
                }
            }
        }
    }
}