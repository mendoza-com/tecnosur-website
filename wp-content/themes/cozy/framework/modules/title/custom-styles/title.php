<?php

if (!function_exists('cozy_edge_title_area_typography_style')) {

    function cozy_edge_title_area_typography_style(){

        $title_styles = array();

        if(cozy_edge_options()->getOptionValue('page_title_color') !== '') {
            $title_styles['color'] = cozy_edge_options()->getOptionValue('page_title_color');
        }
        if(cozy_edge_options()->getOptionValue('page_title_google_fonts') !== '-1') {
            $title_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('page_title_google_fonts'));
        }
        if(cozy_edge_options()->getOptionValue('page_title_fontsize') !== '') {
            $title_styles['font-size'] = cozy_edge_options()->getOptionValue('page_title_fontsize').'px';
        }
        if(cozy_edge_options()->getOptionValue('page_title_lineheight') !== '') {
            $title_styles['line-height'] = cozy_edge_options()->getOptionValue('page_title_lineheight').'px';
        }
        if(cozy_edge_options()->getOptionValue('page_title_texttransform') !== '') {
            $title_styles['text-transform'] = cozy_edge_options()->getOptionValue('page_title_texttransform');
        }
        if(cozy_edge_options()->getOptionValue('page_title_fontstyle') !== '') {
            $title_styles['font-style'] = cozy_edge_options()->getOptionValue('page_title_fontstyle');
        }
        if(cozy_edge_options()->getOptionValue('page_title_fontweight') !== '') {
            $title_styles['font-weight'] = cozy_edge_options()->getOptionValue('page_title_fontweight');
        }
        if(cozy_edge_options()->getOptionValue('page_title_letter_spacing') !== '') {
            $title_styles['letter-spacing'] = cozy_edge_options()->getOptionValue('page_title_letter_spacing').'px';
        }

        $title_selector = array(
            '.edgtf-title .edgtf-title-holder h1'
        );

        echo cozy_edge_dynamic_css($title_selector, $title_styles);


        $subtitle_styles = array();

        if(cozy_edge_options()->getOptionValue('page_subtitle_color') !== '') {
            $subtitle_styles['color'] = cozy_edge_options()->getOptionValue('page_subtitle_color');
        }
        if(cozy_edge_options()->getOptionValue('page_subtitle_google_fonts') !== '-1') {
            $subtitle_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('page_subtitle_google_fonts'));
        }
        if(cozy_edge_options()->getOptionValue('page_subtitle_fontsize') !== '') {
            $subtitle_styles['font-size'] = cozy_edge_options()->getOptionValue('page_subtitle_fontsize').'px';
        }
        if(cozy_edge_options()->getOptionValue('page_subtitle_lineheight') !== '') {
            $subtitle_styles['line-height'] = cozy_edge_options()->getOptionValue('page_subtitle_lineheight').'px';
        }
        if(cozy_edge_options()->getOptionValue('page_subtitle_texttransform') !== '') {
            $subtitle_styles['text-transform'] = cozy_edge_options()->getOptionValue('page_subtitle_texttransform');
        }
        if(cozy_edge_options()->getOptionValue('page_subtitle_fontstyle') !== '') {
            $subtitle_styles['font-style'] = cozy_edge_options()->getOptionValue('page_subtitle_fontstyle');
        }
        if(cozy_edge_options()->getOptionValue('page_subtitle_fontweight') !== '') {
            $subtitle_styles['font-weight'] = cozy_edge_options()->getOptionValue('page_subtitle_fontweight');
        }
        if(cozy_edge_options()->getOptionValue('page_subtitle_letter_spacing') !== '') {
            $subtitle_styles['letter-spacing'] = cozy_edge_options()->getOptionValue('page_subtitle_letter_spacing').'px';
        }

        $subtitle_selector = array(
            '.edgtf-title .edgtf-title-holder .edgtf-subtitle'
        );

        echo cozy_edge_dynamic_css($subtitle_selector, $subtitle_styles);


        $breadcrumb_styles = array();

        if(cozy_edge_options()->getOptionValue('page_breadcrumb_color') !== '') {
            $breadcrumb_styles['color'] = cozy_edge_options()->getOptionValue('page_breadcrumb_color');
        }
        if(cozy_edge_options()->getOptionValue('page_breadcrumb_google_fonts') !== '-1') {
            $breadcrumb_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('page_breadcrumb_google_fonts'));
        }
        if(cozy_edge_options()->getOptionValue('page_breadcrumb_fontsize') !== '') {
            $breadcrumb_styles['font-size'] = cozy_edge_options()->getOptionValue('page_breadcrumb_fontsize').'px';
        }
        if(cozy_edge_options()->getOptionValue('page_breadcrumb_lineheight') !== '') {
            $breadcrumb_styles['line-height'] = cozy_edge_options()->getOptionValue('page_breadcrumb_lineheight').'px';
        }
        if(cozy_edge_options()->getOptionValue('page_breadcrumb_texttransform') !== '') {
            $breadcrumb_styles['text-transform'] = cozy_edge_options()->getOptionValue('page_breadcrumb_texttransform');
        }
        if(cozy_edge_options()->getOptionValue('page_breadcrumb_fontstyle') !== '') {
            $breadcrumb_styles['font-style'] = cozy_edge_options()->getOptionValue('page_breadcrumb_fontstyle');
        }
        if(cozy_edge_options()->getOptionValue('page_breadcrumb_fontweight') !== '') {
            $breadcrumb_styles['font-weight'] = cozy_edge_options()->getOptionValue('page_breadcrumb_fontweight');
        }
        if(cozy_edge_options()->getOptionValue('page_breadcrumb_letter_spacing') !== '') {
            $breadcrumb_styles['letter-spacing'] = cozy_edge_options()->getOptionValue('page_breadcrumb_letter_spacing').'px';
        }

        $breadcrumb_selector = array(
            '.edgtf-title .edgtf-title-holder .edgtf-breadcrumbs a, .edgtf-title .edgtf-title-holder .edgtf-breadcrumbs span'
        );

        echo cozy_edge_dynamic_css($breadcrumb_selector, $breadcrumb_styles);

        $breadcrumb_selector_styles = array();
        if(cozy_edge_options()->getOptionValue('page_breadcrumb_hovercolor') !== '') {
            $breadcrumb_selector_styles['color'] = cozy_edge_options()->getOptionValue('page_breadcrumb_hovercolor');
        }

        $breadcrumb_hover_selector = array(
            '.edgtf-title .edgtf-title-holder .edgtf-breadcrumbs a:hover'
        );

        echo cozy_edge_dynamic_css($breadcrumb_hover_selector, $breadcrumb_selector_styles);

    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_title_area_typography_style');

}


