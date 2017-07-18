<?php

get_header();
cozy_edge_get_title();
get_template_part('slider');
cozy_edge_single_portfolio();
do_action('cozy_edge_after_container_close');
get_footer();

?>