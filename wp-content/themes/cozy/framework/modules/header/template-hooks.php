<?php

//top header bar
add_action('cozy_edge_before_page_header', 'cozy_edge_get_header_top');

//mobile header
add_action('cozy_edge_after_page_header', 'cozy_edge_get_mobile_header');