<?php

if(!function_exists('cozy_edge_is_responsive_on')) {
    /**
     * Checks whether responsive mode is enabled in theme options
     * @return bool
     */
    function cozy_edge_is_responsive_on() {
        return cozy_edge_options()->getOptionValue('responsiveness') !== 'no';
    }
}