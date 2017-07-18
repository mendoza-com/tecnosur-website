<?php

class CozyEdgeLatestPosts extends CozyEdgeWidget {
	protected $params;
	public function __construct() {
		parent::__construct(
			'edgtf_latest_posts_widget', // Base ID
			'Edge Latest Post', // Name
			array( 'description' => esc_html__( 'Display posts from your blog', 'cozy' ), ) // Args
		);

		$this->setParams();
	}

	protected function setParams() {
		$this->params = array(
			array(
				'name' => 'number_of_posts',
				'type' => 'textfield',
				'title' => esc_html__('Number of posts','cozy'),
			),
			array(
				'name' => 'title',
				'type' => 'textfield',
				'title' => esc_html__('Widget Title','cozy'),
			),
			array(
				'name' => 'order_by',
				'type' => 'dropdown',
				'title' => esc_html__('Order By','cozy'),
				'options' => array(
					'title' => esc_html__('Title','cozy'),
					'date' => esc_html__('Date','cozy'),
				)
			),
			array(
				'name' => 'order',
				'type' => 'dropdown',
				'title' => esc_html__('Order','cozy'),
				'options' => array(
					'ASC' => esc_html__('ASC','cozy'),
					'DESC' => esc_html__('DESC','cozy'),
				)
			),
			array(
				'name' => 'category',
				'type' => 'textfield',
				'title' => esc_html__('Category Slug','cozy'),
			),
			array(
				'name' => 'text_length',
				'type' => 'textfield',
				'title' => esc_html__('Number of characters','cozy'),
			),
			array(
				'name' => 'title_tag',
				'type' => 'dropdown',
				'title' => esc_html__('Title Tag','cozy'),
				'options' => array(
					""   => "",
					"h2" => "h2",
					"h3" => "h3",
					"h4" => "h4",
					"h5" => "h5",
					"h6" => "h6"
				)
			)			
		);
	}

	public function widget($args, $instance) {
		extract($args);

		//prepare variables
		$content        = '';
		$params         = array();
		$params['type'] = 'image_in_box';
		//is instance empty?
		if(is_array($instance) && count($instance)) {
			//generate shortcode params
			foreach($instance as $key => $value) {
				$params[$key] = $value;
			}
		}
		if(empty($params['title_tag'])){
			$params['title_tag'] = 'h4';
		}

		echo '<div class="widget edgtf-latest-posts-widget">';
		if($params['title'] !== ''){
			print $args['before_title'].$params['title'].$args['after_title'];
		}
		//echo '<h4 class="edgtf-widget-title">'.$params['widget_title'].'</h4>';
		echo cozy_edge_execute_shortcode('edgtf_blog_list', $params);

		echo '</div>'; //close edgtf-latest-posts-widget
	}
}
