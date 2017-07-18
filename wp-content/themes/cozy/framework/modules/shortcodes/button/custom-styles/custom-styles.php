<?php

if(!function_exists('cozy_edge_button_typography_styles')) {
    /**
     * Typography styles for all button types
     */
    function cozy_edge_button_typography_styles() {
        $selector = '.edgtf-btn';
        $styles = array();

        $font_family = cozy_edge_options()->getOptionValue('button_font_family');
        if(cozy_edge_is_font_option_valid($font_family)) {
            $styles['font-family'] = cozy_edge_get_font_option_val($font_family);
        }

        $text_transform = cozy_edge_options()->getOptionValue('button_text_transform');
        if(!empty($text_transform)) {
            $styles['text-transform'] = $text_transform;
        }

        $font_style = cozy_edge_options()->getOptionValue('button_font_style');
        if(!empty($font_style)) {
            $styles['font-style'] = $font_style;
        }

        $letter_spacing = cozy_edge_options()->getOptionValue('button_letter_spacing');
        if($letter_spacing !== '') {
            $styles['letter-spacing'] = cozy_edge_filter_px($letter_spacing).'px';
        }

        $font_weight = cozy_edge_options()->getOptionValue('button_font_weight');
        if(!empty($font_weight)) {
            $styles['font-weight'] = $font_weight;
        }

        echo cozy_edge_dynamic_css($selector, $styles);
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_button_typography_styles');
}

if(!function_exists('cozy_edge_button_outline_styles')) {
    /**
     * Generate styles for outline button
     */
    function cozy_edge_button_outline_styles() {
        //outline styles
        $outline_styles   = array();
        $outline_selector = '.edgtf-btn.edgtf-btn-outline';

        if(cozy_edge_options()->getOptionValue('btn_outline_text_color')) {
            $outline_styles['color'] = cozy_edge_options()->getOptionValue('btn_outline_text_color');
        }

        if(cozy_edge_options()->getOptionValue('btn_outline_border_color')) {
            $outline_styles['border-color'] = cozy_edge_options()->getOptionValue('btn_outline_border_color');
        }

        echo cozy_edge_dynamic_css($outline_selector, $outline_styles);

        //outline hover styles
        if(cozy_edge_options()->getOptionValue('btn_outline_hover_text_color')) {
            echo cozy_edge_dynamic_css(
                '.edgtf-btn.edgtf-btn-outline:not(.edgtf-btn-custom-hover-color):hover',
                array('color' => cozy_edge_options()->getOptionValue('btn_outline_hover_text_color').'!important')
            );
        }

        if(cozy_edge_options()->getOptionValue('btn_outline_hover_bg_color')) {
            echo cozy_edge_dynamic_css(
                '.edgtf-btn.edgtf-btn-outline:not(.edgtf-btn-custom-hover-bg):hover',
                array('background-color' => cozy_edge_options()->getOptionValue('btn_outline_hover_bg_color').'!important')
            );
        }

        if(cozy_edge_options()->getOptionValue('btn_outline_hover_border_color')) {
            echo cozy_edge_dynamic_css(
                '.edgtf-btn.edgtf-btn-outline:not(.edgtf-btn-custom-border-hover):hover',
                array('border-color' => cozy_edge_options()->getOptionValue('btn_outline_hover_border_color').'!important')
            );
        }
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_button_outline_styles');
}

if(!function_exists('cozy_edge_button_outline_light_styles')) {
	/**
	 * Generate styles for outline light button
	 */
	function cozy_edge_button_outline_light_styles() {
		//outline light styles
		$outline_styles   = array();
		$outline_selector = '.edgtf-btn.edgtf-btn-outline-light';

		if(cozy_edge_options()->getOptionValue('btn_outline_light_text_color')) {
			$outline_styles['color'] = cozy_edge_options()->getOptionValue('btn_outline_light_text_color');
		}

		if(cozy_edge_options()->getOptionValue('btn_outline_light_border_color')) {
			$outline_styles['border-color'] = cozy_edge_options()->getOptionValue('btn_outline_light_border_color');
		}

		echo cozy_edge_dynamic_css($outline_selector, $outline_styles);

		//outline light hover styles
		if(cozy_edge_options()->getOptionValue('btn_outline_light_hover_text_color')) {
			echo cozy_edge_dynamic_css(
				'.edgtf-btn.edgtf-btn-outline-light:not(.edgtf-btn-custom-hover-color):hover',
				array('color' => cozy_edge_options()->getOptionValue('btn_outline_light_hover_text_color').'!important')
			);
		}

		if(cozy_edge_options()->getOptionValue('btn_outline_light_hover_bg_color')) {
			echo cozy_edge_dynamic_css(
				'.edgtf-btn.edgtf-btn-outline-light:not(.edgtf-btn-custom-hover-bg):hover',
				array('background-color' => cozy_edge_options()->getOptionValue('btn_outline_light_hover_bg_color').'!important')
			);
		}

		if(cozy_edge_options()->getOptionValue('btn_outline_light_hover_border_color')) {
			echo cozy_edge_dynamic_css(
				'.edgtf-btn.edgtf-btn-outline-light:not(.edgtf-btn-custom-border-hover):hover',
				array('border-color' => cozy_edge_options()->getOptionValue('btn_outline_light_hover_border_color').'!important')
			);
		}
	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_button_outline_light_styles');
}

if(!function_exists('cozy_edge_button_solid_styles')) {
    /**
     * Generate styles for solid type buttons
     */
    function cozy_edge_button_solid_styles() {
        //solid styles
        $solid_selector = '.edgtf-btn.edgtf-btn-solid';
        $solid_styles = array();

        if(cozy_edge_options()->getOptionValue('btn_solid_text_color')) {
            $solid_styles['color'] = cozy_edge_options()->getOptionValue('btn_solid_text_color');
        }

        if(cozy_edge_options()->getOptionValue('btn_solid_border_color')) {
            $solid_styles['border-color'] = cozy_edge_options()->getOptionValue('btn_solid_border_color');
        }

        if(cozy_edge_options()->getOptionValue('btn_solid_bg_color')) {
            $solid_styles['background-color'] = cozy_edge_options()->getOptionValue('btn_solid_bg_color');
        }

        echo cozy_edge_dynamic_css($solid_selector, $solid_styles);

        //solid hover styles
        if(cozy_edge_options()->getOptionValue('btn_solid_hover_text_color')) {
            echo cozy_edge_dynamic_css(
                '.edgtf-btn.edgtf-btn-solid:not(.edgtf-btn-custom-hover-color):hover',
                array('color' => cozy_edge_options()->getOptionValue('btn_solid_hover_text_color').'!important')
            );
        }

        if(cozy_edge_options()->getOptionValue('btn_solid_hover_bg_color')) {
            echo cozy_edge_dynamic_css(
                '.edgtf-btn.edgtf-btn-solid:not(.edgtf-btn-custom-hover-bg):hover',
                array('background-color' => cozy_edge_options()->getOptionValue('btn_solid_hover_bg_color').'!important')
            );
        }

        if(cozy_edge_options()->getOptionValue('btn_solid_hover_border_color')) {
            echo cozy_edge_dynamic_css(
                '.edgtf-btn.edgtf-btn-solid:not(.edgtf-btn-custom-hover-bg):hover',
                array('border-color' => cozy_edge_options()->getOptionValue('btn_solid_hover_border_color').'!important')
            );
        }
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_button_solid_styles');
}

if(!function_exists('cozy_edge_button_solid_dark_styles')) {
	/**
	 * Generate styles for solid dark type buttons
	 */
	function cozy_edge_button_solid_dark_styles() {
		//solid dark styles
		$solid_selector = '.edgtf-btn.edgtf-btn-solid-dark';
		$solid_styles = array();

		if(cozy_edge_options()->getOptionValue('btn_solid_dark_text_color')) {
			$solid_styles['color'] = cozy_edge_options()->getOptionValue('btn_solid_dark_text_color');
		}

		if(cozy_edge_options()->getOptionValue('btn_solid_dark_border_color')) {
			$solid_styles['border-color'] = cozy_edge_options()->getOptionValue('btn_solid_dark_border_color');
		}

		if(cozy_edge_options()->getOptionValue('btn_solid_dark_bg_color')) {
			$solid_styles['background-color'] = cozy_edge_options()->getOptionValue('btn_solid_dark_bg_color');
		}

		echo cozy_edge_dynamic_css($solid_selector, $solid_styles);

		//solid dark hover styles
		if(cozy_edge_options()->getOptionValue('btn_solid_dark_hover_text_color')) {
			echo cozy_edge_dynamic_css(
				'.edgtf-btn.edgtf-btn-solid-dark:not(.edgtf-btn-custom-hover-color):hover',
				array('color' => cozy_edge_options()->getOptionValue('btn_solid_dark_hover_text_color').'!important')
			);
		}

		if(cozy_edge_options()->getOptionValue('btn_solid_dark_hover_bg_color')) {
			echo cozy_edge_dynamic_css(
				'.edgtf-btn.edgtf-btn-solid-dark:not(.edgtf-btn-custom-hover-bg):hover',
				array('background-color' => cozy_edge_options()->getOptionValue('btn_solid_dark_hover_bg_color').'!important')
			);
		}

		if(cozy_edge_options()->getOptionValue('btn_solid_dark_hover_border_color')) {
			echo cozy_edge_dynamic_css(
				'.edgtf-btn.edgtf-btn-solid-dark:not(.edgtf-btn-custom-hover-bg):hover',
				array('border-color' => cozy_edge_options()->getOptionValue('btn_solid_dark_hover_border_color').'!important')
			);
		}
	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_button_solid_dark_styles');
}

if(!function_exists('cozy_edge_button_transparent_styles')) {
	/**
	 * Generate styles for transparent type buttons
	 */
	function cozy_edge_button_transparent_styles() {
		//transparent styles
		$solid_selector = '.edgtf-btn.edgtf-btn-transparent';
		$solid_styles = array();

		if(cozy_edge_options()->getOptionValue('btn_transparent_text_color')) {
			$solid_styles['color'] = cozy_edge_options()->getOptionValue('btn_transparent_text_color');
		}

		echo cozy_edge_dynamic_css($solid_selector, $solid_styles);

		//transparent hover styles
		if(cozy_edge_options()->getOptionValue('btn_transparent_hover_text_color')) {
			echo cozy_edge_dynamic_css(
				'.edgtf-btn.edgtf-btn-transparent:not(.edgtf-btn-custom-hover-color):hover',
				array('color' => cozy_edge_options()->getOptionValue('btn_transparent_hover_text_color').'!important')
			);
		}
	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_button_transparent_styles');
}