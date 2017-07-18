<?php

if(!function_exists('cozy_edge_get_button_html')) {
    /**
     * Calls button shortcode with given parameters and returns it's output
     * @param $params
     *
     * @return mixed|string
     */
    function cozy_edge_get_button_html($params) {
        if(cozy_edge_core_installed()) {
            $button_html = cozy_edge_execute_shortcode('edgtf_button', $params);
            $button_html = str_replace("\n", '', $button_html);
            return $button_html;
        }
        else {
            return "";
        }
    }
}