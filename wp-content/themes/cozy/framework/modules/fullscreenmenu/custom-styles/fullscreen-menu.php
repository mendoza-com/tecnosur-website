<?php

if (!function_exists('cozy_edge_fullscreen_menu_general_styles')) {

	function cozy_edge_fullscreen_menu_general_styles()
	{
		$fullscreen_menu_background_color = '';
		if (cozy_edge_options()->getOptionValue('fullscreen_alignment') !== '') {
			echo cozy_edge_dynamic_css('nav.edgtf-fullscreen-menu ul li, .edgtf-fullscreen-above-menu-widget-holder, .edgtf-fullscreen-below-menu-widget-holder', array(
				'text-align' => cozy_edge_options()->getOptionValue('fullscreen_alignment')
			));
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_background_color') !== '') {
			$fullscreen_menu_background_color = cozy_edge_hex2rgb(cozy_edge_options()->getOptionValue('fullscreen_menu_background_color'));
			if (cozy_edge_options()->getOptionValue('fullscreen_menu_background_transparency') !== '') {
				$fullscreen_menu_background_transparency = cozy_edge_options()->getOptionValue('fullscreen_menu_background_transparency');
			} else {
				$fullscreen_menu_background_transparency = 0.9;
			}
		}

		if ($fullscreen_menu_background_color !== '') {
			echo cozy_edge_dynamic_css('.edgtf-fullscreen-menu-holder', array(
				'background-color' => 'rgba(' . $fullscreen_menu_background_color[0] . ',' . $fullscreen_menu_background_color[1] . ',' . $fullscreen_menu_background_color[2] . ',' . $fullscreen_menu_background_transparency . ')'
			));
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_background_image') !== '') {
			echo cozy_edge_dynamic_css('.edgtf-fullscreen-menu-holder', array(
				'background-image' => 'url(' . cozy_edge_options()->getOptionValue('fullscreen_menu_background_image') . ')',
				'background-position' => 'center 0',
				'background-repeat' => 'no-repeat'
			));
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_pattern_image') !== '') {
			echo cozy_edge_dynamic_css('.edgtf-fullscreen-menu-holder', array(
				'background-image' => 'url(' . cozy_edge_options()->getOptionValue('fullscreen_menu_pattern_image') . ')',
				'background-repeat' => 'repeat',
				'background-position' => '0 0'
			));
		}

	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_fullscreen_menu_general_styles');

}

if (!function_exists('cozy_edge_fullscreen_menu_first_level_style')) {

	function cozy_edge_fullscreen_menu_first_level_style()
	{

		$first_menu_style = array();

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_color') !== '') {
			$first_menu_style['color'] = cozy_edge_options()->getOptionValue('fullscreen_menu_color');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_google_fonts') !== '-1') {
			$first_menu_style['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('fullscreen_menu_google_fonts')) . ',sans-serif';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_fontsize') !== '') {
			$first_menu_style['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_fontsize')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_lineheight') !== '') {
			$first_menu_style['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_lineheight')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_fontstyle') !== '') {
			$first_menu_style['font-style'] = cozy_edge_options()->getOptionValue('fullscreen_menu_fontstyle');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_fontweight') !== '') {
			$first_menu_style['font-weight'] = cozy_edge_options()->getOptionValue('fullscreen_menu_fontweight');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_letterspacing') !== '') {
			$first_menu_style['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_letterspacing')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_texttransform') !== '') {
			$first_menu_style['text-transform'] = cozy_edge_options()->getOptionValue('fullscreen_menu_texttransform');
		}

		if (!empty($first_menu_style)) {
			echo cozy_edge_dynamic_css('nav.edgtf-fullscreen-menu > ul > li > a, nav.edgtf-fullscreen-menu > ul > li > h6', $first_menu_style);
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_color') !== '') {
			echo cozy_edge_dynamic_css('.edgtf-fullscreen-menu-opener.opened .edgtf-line:after, .edgtf-fullscreen-menu-opener.opened .edgtf-line:before', array(
				'background-color' => cozy_edge_options()->getOptionValue('fullscreen_menu_color')
			));
		}

		$first_menu_hover_style = array();

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_hover_color') !== '') {
			$first_menu_hover_style['color'] = cozy_edge_options()->getOptionValue('fullscreen_menu_hover_color');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_hover_background_color') !== '') {
			$first_menu_hover_style['background-color'] = cozy_edge_options()->getOptionValue('fullscreen_menu_hover_background_color');
		}

		if (!empty($first_menu_hover_style)) {
			echo cozy_edge_dynamic_css('nav.edgtf-fullscreen-menu > ul > li > a:hover, nav.edgtf-fullscreen-menu > ul > li > h6:hover', $first_menu_hover_style);
		}

		$first_menu_active_style = array();

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_active_color') !== '') {
			$first_menu_active_style['color'] = cozy_edge_options()->getOptionValue('fullscreen_menu_active_color');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_active_background_color') !== '') {
			$first_menu_active_style['background-color'] = cozy_edge_options()->getOptionValue('fullscreen_menu_active_background_color');
		}

		if (!empty($first_menu_active_style)) {
			echo cozy_edge_dynamic_css('nav.edgtf-fullscreen-menu > ul > li > a.current', $first_menu_active_style);
		}

	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_fullscreen_menu_first_level_style');

}

if (!function_exists('cozy_edge_fullscreen_menu_second_level_style')) {

	function cozy_edge_fullscreen_menu_second_level_style()
	{
		$second_menu_style = array();
		if (cozy_edge_options()->getOptionValue('fullscreen_menu_color_2nd') !== '') {
			$second_menu_style['color'] = cozy_edge_options()->getOptionValue('fullscreen_menu_color_2nd');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_google_fonts_2nd') !== '-1') {
			$second_menu_style['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('fullscreen_menu_google_fonts_2nd')) . ',sans-serif';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_fontsize_2nd') !== '') {
			$second_menu_style['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_fontsize_2nd')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_lineheight_2nd') !== '') {
			$second_menu_style['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_lineheight_2nd')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_fontstyle_2nd') !== '') {
			$second_menu_style['font-style'] = cozy_edge_options()->getOptionValue('fullscreen_menu_fontstyle_2nd');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_fontweight_2nd') !== '') {
			$second_menu_style['font-weight'] = cozy_edge_options()->getOptionValue('fullscreen_menu_fontweight_2nd');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_letterspacing_2nd') !== '') {
			$second_menu_style['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_letterspacing_2nd')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_texttransform_2nd') !== '') {
			$second_menu_style['text-transform'] = cozy_edge_options()->getOptionValue('fullscreen_menu_texttransform_2nd');
		}

		if (!empty($second_menu_style)) {
			echo cozy_edge_dynamic_css('nav.edgtf-fullscreen-menu ul li ul li a, nav.edgtf-fullscreen-menu ul li ul li h6', $second_menu_style);
		}

		$second_menu_hover_style = array();

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_hover_color_2nd') !== '') {
			$second_menu_hover_style['color'] = cozy_edge_options()->getOptionValue('fullscreen_menu_hover_color_2nd');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_hover_background_color_2nd') !== '') {
			$second_menu_hover_style['background-color'] = cozy_edge_options()->getOptionValue('fullscreen_menu_hover_background_color_2nd');
		}

		if (!empty($second_menu_hover_style)) {
			echo cozy_edge_dynamic_css('nav.edgtf-fullscreen-menu ul li ul li a:hover, nav.edgtf-fullscreen-menu ul li ul li h6:hover', $second_menu_hover_style);
		}
	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_fullscreen_menu_second_level_style');

}

if (!function_exists('cozy_edge_fullscreen_menu_third_level_style')) {

	function cozy_edge_fullscreen_menu_third_level_style()
	{
		$third_menu_style = array();
		if (cozy_edge_options()->getOptionValue('fullscreen_menu_color_3rd') !== '') {
			$third_menu_style['color'] = cozy_edge_options()->getOptionValue('fullscreen_menu_color_3rd');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_google_fonts_3rd') !== '-1') {
			$third_menu_style['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('fullscreen_menu_google_fonts_3rd')) . ',sans-serif';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_fontsize_3rd') !== '') {
			$third_menu_style['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_fontsize_3rd')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_lineheight_3rd') !== '') {
			$third_menu_style['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_lineheight_3rd')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_fontstyle_3rd') !== '') {
			$third_menu_style['font-style'] = cozy_edge_options()->getOptionValue('fullscreen_menu_fontstyle_3rd');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_fontweight_3rd') !== '') {
			$third_menu_style['font-weight'] = cozy_edge_options()->getOptionValue('fullscreen_menu_fontweight_3rd');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_letterspacing_3rd') !== '') {
			$third_menu_style['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_letterspacing_3rd')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_texttransform_3rd') !== '') {
			$third_menu_style['text-transform'] = cozy_edge_options()->getOptionValue('fullscreen_menu_texttransform_3rd');
		}

		if (!empty($third_menu_style)) {
			echo cozy_edge_dynamic_css('nav.edgtf-fullscreen-menu ul li ul li ul li a', $third_menu_style);
		}

		$third_menu_hover_style = array();

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_hover_color_3rd') !== '') {
			$third_menu_hover_style['color'] = cozy_edge_options()->getOptionValue('fullscreen_menu_hover_color_3rd');
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_hover_background_color_3rd') !== '') {
			$third_menu_hover_style['background-color'] = cozy_edge_options()->getOptionValue('fullscreen_menu_hover_background_color_3rd');
		}

		if (!empty($third_menu_hover_style)) {
			echo cozy_edge_dynamic_css('nav.edgtf-fullscreen-menu ul li ul li ul li a:hover', $third_menu_hover_style);
		}
	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_fullscreen_menu_third_level_style');

}

if (!function_exists('cozy_edge_fullscreen_menu_icon_styles')) {

	function cozy_edge_fullscreen_menu_icon_styles()
	{

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_icon_color') !== '') {

			echo cozy_edge_dynamic_css('.edgtf-fullscreen-menu-opener .edgtf-line', array(
				'background-color' => cozy_edge_options()->getOptionValue('fullscreen_menu_icon_color')
			));

		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_icon_hover_color') !== '') {

			echo cozy_edge_dynamic_css('.edgtf-fullscreen-menu-opener:hover .edgtf-line', array(
				'background-color' => cozy_edge_options()->getOptionValue('fullscreen_menu_icon_hover_color')
			));

		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_light_icon_color') !== '') {
			echo cozy_edge_dynamic_css('.edgtf-light-header .edgtf-page-header > div:not(.edgtf-sticky-header) .edgtf-fullscreen-menu-opener:not(.opened) .edgtf-line,
			.edgtf-light-header.edgtf-header-style-on-scroll .edgtf-page-header .edgtf-fullscreen-menu-opener:not(.opened) .edgtf-line,
			.edgtf-light-header .edgtf-top-bar .edgtf-fullscreen-menu-opener:not(.opened) .edgtf-line', array(
				'background-color' => cozy_edge_options()->getOptionValue('fullscreen_menu_light_icon_color') . ' !important'
			));

		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_light_icon_hover_color') !== '') {

			echo cozy_edge_dynamic_css('.edgtf-light-header .edgtf-page-header > div:not(.edgtf-sticky-header) .edgtf-fullscreen-menu-opener:not(.opened):hover .edgtf-line,
			.edgtf-light-header.edgtf-header-style-on-scroll .edgtf-page-header .edgtf-fullscreen-menu-opener:not(.opened):hover .edgtf-line,
			.edgtf-light-header .edgtf-top-bar .edgtf-fullscreen-menu-opener:not(.opened):hover .edgtf-line', array(
				'background-color' => cozy_edge_options()->getOptionValue('fullscreen_menu_light_icon_hover_color') . ' !important'
			));

		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_dark_icon_color') !== '') {

			echo cozy_edge_dynamic_css('.edgtf-dark-header .edgtf-page-header > div:not(.edgtf-sticky-header) .edgtf-fullscreen-menu-opener:not(.opened) .edgtf-line,
			.edgtf-dark-header.edgtf-header-style-on-scroll .edgtf-page-header .edgtf-fullscreen-menu-opener:not(.opened) .edgtf-line,
			.edgtf-dark-header .edgtf-top-bar .edgtf-fullscreen-menu-opener:not(.opened) .edgtf-line', array(
				'background-color' => cozy_edge_options()->getOptionValue('fullscreen_menu_dark_icon_color') . ' !important'
			));

		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_dark_icon_hover_color') !== '') {

			echo cozy_edge_dynamic_css('.edgtf-dark-header .edgtf-page-header > div:not(.edgtf-sticky-header) .edgtf-fullscreen-menu-opener:not(.opened):hover .edgtf-line,
			.edgtf-dark-header.edgtf-header-style-on-scroll .edgtf-page-header .edgtf-fullscreen-menu-opener:not(.opened):hover .edgtf-line,
			.edgtf-dark-header .edgtf-top-bar .edgtf-fullscreen-menu-opener:not(.opened):hover .edgtf-line', array(
				'background-color' => cozy_edge_options()->getOptionValue('fullscreen_menu_dark_icon_hover_color') . ' !important'
			));

		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_icon_background_color') !== '') {

			echo cozy_edge_dynamic_css('.edgtf-fullscreen-menu-opener', array(
				'-webkit-backface-visibility' => 'hidden',
				'display' => 'inline-block'
			));
			echo cozy_edge_dynamic_css('.edgtf-fullscreen-menu-opener.normal', array(
				'padding' => '10px 15px',
			));
			echo cozy_edge_dynamic_css('.edgtf-fullscreen-menu-opener.medium', array(
				'padding' => '10px 13px',
			));
			echo cozy_edge_dynamic_css('.edgtf-fullscreen-menu-opener.large', array(
				'padding' => '15px',
			));
			echo cozy_edge_dynamic_css('.edgtf-fullscreen-menu-opener:not(.opened)', array(
				'background-color' => cozy_edge_options()->getOptionValue('fullscreen_menu_icon_background_color')
			));

		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_icon_background_hover_color') !== '') {

			cozy_edge_dynamic_css('.edgtf-fullscreen-menu-opener.normal:not(.opened):hover, .edgtf-fullscreen-menu-opener.medium:not(.opened):hover, .edgtf-fullscreen-menu-opener.large:not(.opened):hover', array(
				'background-color' => cozy_edge_options()->getOptionValue('fullscreen_menu_icon_background_hover_color')
			));

		}

	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_fullscreen_menu_icon_styles');

}

if (!function_exists('cozy_edge_fullscreen_menu_icon_spacing')) {

	function cozy_edge_fullscreen_menu_icon_spacing()
	{

		$fullscreen_menu_icon_spacing = array();

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_icon_padding_left') !== '') {
			$fullscreen_menu_icon_spacing['padding-left'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_icon_padding_left')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_icon_padding_right') !== '') {
			$fullscreen_menu_icon_spacing['padding-right'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_icon_padding_right')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_icon_margin_left') !== '') {
			$fullscreen_menu_icon_spacing['margin-left'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_icon_margin_left')) . 'px';
		}

		if (cozy_edge_options()->getOptionValue('fullscreen_menu_icon_margin_right') !== '') {
			$fullscreen_menu_icon_spacing['margin-right'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('fullscreen_menu_icon_margin_right')) . 'px';
		}

		if (!empty($fullscreen_menu_icon_spacing)) {
			echo cozy_edge_dynamic_css('a.edgtf-fullscreen-menu-opener', $fullscreen_menu_icon_spacing);
		}

	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_fullscreen_menu_icon_spacing');

}