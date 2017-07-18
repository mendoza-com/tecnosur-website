<?php 

if(!function_exists('cozy_edge_accordions_typography_styles')){
	function cozy_edge_accordions_typography_styles(){
		$selector = '.edgtf-accordion-holder .edgtf-title-holder';
		$styles = array();
		
		$font_family = cozy_edge_options()->getOptionValue('accordions_font_family');
		if(cozy_edge_is_font_option_valid($font_family)){
			$styles['font-family'] = cozy_edge_get_font_option_val($font_family);
		}
		
		$text_transform = cozy_edge_options()->getOptionValue('accordions_text_transform');
       if(!empty($text_transform)) {
           $styles['text-transform'] = $text_transform;
       }

       $font_style = cozy_edge_options()->getOptionValue('accordions_font_style');
       if(!empty($font_style)) {
           $styles['font-style'] = $font_style;
       }

       $letter_spacing = cozy_edge_options()->getOptionValue('accordions_letter_spacing');
       if($letter_spacing !== '') {
           $styles['letter-spacing'] = cozy_edge_filter_px($letter_spacing).'px';
       }

       $font_weight = cozy_edge_options()->getOptionValue('accordions_font_weight');
       if(!empty($font_weight)) {
           $styles['font-weight'] = $font_weight;
       }

       echo cozy_edge_dynamic_css($selector, $styles);
	}
	add_action('cozy_edge_style_dynamic', 'cozy_edge_accordions_typography_styles');
}

if(!function_exists('cozy_edge_accordions_inital_title_color_styles')){
	function cozy_edge_accordions_inital_title_color_styles(){
		$selector = '.edgtf-accordion-holder.edgtf-initial .edgtf-title-holder';
		$styles = array();
		
		if(cozy_edge_options()->getOptionValue('accordions_title_color')) {
           $styles['color'] = cozy_edge_options()->getOptionValue('accordions_title_color');
       }
		echo cozy_edge_dynamic_css($selector, $styles);
	}
	add_action('cozy_edge_style_dynamic', 'cozy_edge_accordions_inital_title_color_styles');
}

if(!function_exists('cozy_edge_accordions_active_title_color_styles')){
	
	function cozy_edge_accordions_active_title_color_styles(){
		$selector = array(
			'.edgtf-accordion-holder.edgtf-initial .edgtf-title-holder.ui-state-active',
			'.edgtf-accordion-holder.edgtf-initial .edgtf-title-holder.ui-state-hover'
		);
		$styles = array();
		
		if(cozy_edge_options()->getOptionValue('accordions_title_color_active')) {
           $styles['color'] = cozy_edge_options()->getOptionValue('accordions_title_color_active');
       }
		
		echo cozy_edge_dynamic_css($selector, $styles);
	}
	add_action('cozy_edge_style_dynamic', 'cozy_edge_accordions_active_title_color_styles');
}
if(!function_exists('cozy_edge_accordions_inital_icon_color_styles')){
	
	function cozy_edge_accordions_inital_icon_color_styles(){
		$selector = '.edgtf-accordion-holder.edgtf-initial .edgtf-title-holder .edgtf-accordion-mark';
		$styles = array();
		
		if(cozy_edge_options()->getOptionValue('accordions_icon_color')) {
           $styles['color'] = cozy_edge_options()->getOptionValue('accordions_icon_color');
       }
		echo cozy_edge_dynamic_css($selector, $styles);
	}
	add_action('cozy_edge_style_dynamic', 'cozy_edge_accordions_inital_icon_color_styles');
}
if(!function_exists('cozy_edge_accordions_active_icon_color_styles')){
	
	function cozy_edge_accordions_active_icon_color_styles(){
		$selector = array(
			'.edgtf-accordion-holder.edgtf-initial .edgtf-title-holder.ui-state-active  .edgtf-accordion-mark',
			'.edgtf-accordion-holder.edgtf-initial .edgtf-title-holder.ui-state-hover  .edgtf-accordion-mark'
		);
		$styles = array();
		
		if(cozy_edge_options()->getOptionValue('accordions_icon_color_active')) {
           $styles['color'] = cozy_edge_options()->getOptionValue('accordions_icon_color_active');
       }
		echo cozy_edge_dynamic_css($selector, $styles);
	}
	add_action('cozy_edge_style_dynamic', 'cozy_edge_accordions_active_icon_color_styles');
}