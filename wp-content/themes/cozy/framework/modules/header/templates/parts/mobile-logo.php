<?php do_action('cozy_edge_before_mobile_logo'); ?>

<div class="edgtf-mobile-logo-wrapper">
    <a itemprop="url" href="<?php echo esc_url(home_url('/')); ?>" <?php cozy_edge_inline_style($logo_styles); ?>>
        <img itemprop="image" src="<?php echo esc_url($logo_image); ?>" alt="<?php esc_html_e('mobile logo','cozy'); ?>"/>
    </a>
</div>

<?php do_action('cozy_edge_after_mobile_logo'); ?>