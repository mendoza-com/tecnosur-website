<?php

if(!function_exists('cozy_edge_get_separator_html')) {
    /**
     * Calls separator shortcode with given parameters and returns it's output
     * @param $params
     *
     * @return mixed|string
     */
    function cozy_edge_get_separator_html($params = array()) {
        if(cozy_edge_core_installed()) {
            $separator_html = cozy_edge_execute_shortcode('edgtf_separator', $params);
            $separator_html = str_replace("\n", '', $separator_html);
            return $separator_html;
        }
        else {
            return "";
        }
    }
}