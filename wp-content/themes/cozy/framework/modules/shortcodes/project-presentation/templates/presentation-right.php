<div class="edgtf-project-presentation <?php echo esc_attr($project_classes) ?>">
    <div class="edgtf-pp-content-holder">
        <div class="edgtf-pp-content-left">
            <div class="edgtf-pp-gallery">
                <div class="edgtf-pp-gallery-slider" <?php echo cozy_edge_get_inline_attrs($slider_data); ?>>
                    <?php foreach ($images as $image) {
                        if ($pretty_photo) { ?>
                            <a itemprop="url" href="<?php echo esc_url($image['url'])?>" data-rel="prettyPhoto[single_pretty_photo]" title="<?php echo esc_attr($image['title']); ?>">
                        <?php } ?>
                        <?php if(is_array($image_size) && count($image_size)) : ?>
                            <?php echo cozy_edge_generate_thumbnail($image['image_id'], null, $image_size[0], $image_size[1]); ?>
                        <?php else: ?>
                            <?php echo wp_get_attachment_image($image['image_id'], $image_size); ?>
                        <?php endif; ?>
                        <?php if ($pretty_photo) { ?>
                            </a>
                        <?php }
                    } ?>
                </div>
            </div>
        </div>
        <div class="edgtf-pp-content-right">
            <div class="edgtf-pp-background">
                <img src="<?php echo esc_url($image_single); ?>" alt="" />
            </div>
            <div class="edgtf-pp-text-holder">
                <div class="edgtf-pp-text-table">
                    <div class="edgtf-pp-text-cell">
                        <?php if ($title != '') { ?>
                        <<?php echo esc_attr($title_tag); ?> class="edgtf-pp-title">
                            <?php echo esc_attr($title); ?>
                        </<?php echo esc_attr($title_tag); ?>>
                        <?php } ?>
                        <?php if ($subtitle != '') { ?>
                            <p class="edgtf-pp-subtitle">
                                <?php echo esc_attr($subtitle) ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php if($show_button == "yes" && $button_text !== ''){ ?>
                <div class="edgtf-pp-button">
                    <?php echo cozy_edge_get_button_html(array(
                        'type' => 'transparent',
                        'link' => $link,
                        'target' => $link_target,
                        'text' => $button_text
                    )); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>