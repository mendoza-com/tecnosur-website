<?php do_action('cozy_edge_before_mobile_navigation'); ?>

<nav class="edgtf-mobile-nav">
    <div class="edgtf-grid">
        <?php wp_nav_menu(array(
            'theme_location' => 'mobile-navigation' ,
            'container'  => '',
            'container_class' => '',
            'menu_class' => '',
            'menu_id' => '',
            'fallback_cb' => 'main-navigation',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'walker' => new CozyEdgeMobileNavigationWalker()
        )); ?>
    </div>
</nav>

<?php do_action('cozy_edge_after_mobile_navigation'); ?>