<?php

class CozyEdgeSideAreaOpener extends CozyEdgeWidget {
    public function __construct() {
        parent::__construct(
            'edgtf_side_area_opener', // Base ID
            'Edge Side Area Opener' // Name
        );

        $this->setParams();
    }

    protected function setParams() {

		$this->params = array(
			array(
				'name'			=> 'side_area_opener_icon_color',
				'type'			=> 'textfield',
				'title'			=> esc_html__('Icon Color','cozy'),
				'description'	=> esc_html__('Define color for Side Area opener icon','cozy')
			)
		);

    }


    public function widget($args, $instance) {
		
		$sidearea_icon_styles = array();

		if ( !empty($instance['side_area_opener_icon_color']) ) {
			$sidearea_icon_styles[] = 'color: ' . $instance['side_area_opener_icon_color'];
		}
		
		$icon_size = '';
		if ( cozy_edge_options()->getOptionValue('side_area_predefined_icon_size') ) {
			$icon_size = cozy_edge_options()->getOptionValue('side_area_predefined_icon_size');
		}
		?>
        <a class="edgtf-side-menu-button-opener <?php echo esc_attr( $icon_size ); ?>" <?php cozy_edge_inline_style($sidearea_icon_styles) ?> href="javascript:void(0)">
            <?php echo cozy_edge_get_side_menu_icon_html(); ?>
        </a>

    <?php }

}