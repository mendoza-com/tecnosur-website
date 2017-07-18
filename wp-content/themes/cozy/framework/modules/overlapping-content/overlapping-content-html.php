<?php

if(!function_exists('cozy_edge_overlapping_content_opening_tag')) {
    /**
     * Prints opening HTML tags for overlapping content
     * Hooks to cozy_edge_after_container_open
     */
    function cozy_edge_overlapping_content_opening_tag() {
        if(cozy_edge_overlapping_content_enabled()) : ?>
            <div class="edgtf-overlapping-content-holder">
            <div class="edgtf-overlapping-content">
            <div class="edgtf-overlapping-content-inner">
    <?php endif;
    }

    add_action('cozy_edge_after_container_open', 'cozy_edge_overlapping_content_opening_tag');
}

if(!function_exists('cozy_edge_overlapping_content_closing_tag')) {
    /**
     * Prints closing HTML tags for overlapping content
     * Hooks to cozy_edge_before_container_close
     */
    function cozy_edge_overlapping_content_closing_tag() {
        if(cozy_edge_overlapping_content_enabled()) : ?>
            </div> <!-- close .edgtf-overlapping-content-inner -->
            </div> <!-- close .edgtf-overlapping-content -->
            </div> <!-- close .edgtf-overlapping-content-holder -->
    <?php endif;
    }

    add_action('cozy_edge_before_container_close', 'cozy_edge_overlapping_content_closing_tag');
}