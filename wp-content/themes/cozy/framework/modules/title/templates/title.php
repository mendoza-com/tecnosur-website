<?php do_action('cozy_edge_before_page_title'); ?>
<?php if($show_title_area) { ?>

    <div class="edgtf-title <?php echo cozy_edge_title_classes(); ?>" style="<?php echo esc_attr($title_height); echo esc_attr($title_background_color); echo esc_attr($title_background_image); ?>" data-height="<?php echo esc_attr(intval(preg_replace('/[^0-9]+/', '', $title_height), 10));?>" <?php echo esc_attr($title_background_image_width); ?>>
        <div class="edgtf-title-image"><?php if($title_background_image_src != ""){ ?><img itemprop="image" src="<?php echo esc_url($title_background_image_src); ?>" alt="&nbsp;" /> <?php } ?></div>
        <div class="edgtf-title-holder" <?php cozy_edge_inline_style($title_holder_height); ?>>
            <div class="edgtf-container clearfix">
                <div class="edgtf-container-inner">
                    <div class="edgtf-title-subtitle-holder" style="<?php echo esc_attr($title_subtitle_holder_padding); ?>">
                        <div class="edgtf-title-subtitle-holder-inner">
                        <?php switch ($type){
                            case 'standard': ?>
                                <?php if($has_subtitle){ ?>
                                    <span class="edgtf-subtitle" <?php cozy_edge_inline_style($subtitle_color); ?>><span><?php cozy_edge_subtitle_text(); ?></span></span>
                                <?php } ?>
                                <h1 <?php cozy_edge_inline_style($title_color); ?>><span><?php cozy_edge_title_text(); ?></span></h1>
								<?php if($enable_separator){
									echo cozy_edge_get_separator_html($separator_args);
								} ?>
                                <?php if($enable_breadcrumbs){ ?>
                                    <div class="edgtf-breadcrumbs-holder"> <?php cozy_edge_custom_breadcrumbs(); ?></div>
                                <?php } ?>
                            <?php break;
                            case 'breadcrumb': ?>
                                <div class="edgtf-breadcrumbs-holder"> <?php cozy_edge_custom_breadcrumbs(); ?></div>
								<?php if($enable_separator){
									echo cozy_edge_get_separator_html($separator_args);
								} ?>
                            <?php break;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>
<?php do_action('cozy_edge_after_page_title'); ?>