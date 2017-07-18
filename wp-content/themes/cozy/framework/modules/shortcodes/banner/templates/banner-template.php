<div class="edgtf-banner">
	<?php if($link) : ?>
		<a class="edgtf-banner-link" href="<?php echo esc_url($link); ?>" <?php cozy_edge_inline_attr($target, 'target'); ?>></a>
	<?php endif; ?>
	<div class="edgtf-banner-image">
			<img src="<?php echo esc_url($image); ?>" alt="" />
	</div>
	<div class="edgtf-banner-text-holder">
		<div class="edgtf-banner-text-table">
			<div class="edgtf-banner-text-cell">
				<span class="edgtf-banner-subtitle" <?php cozy_edge_inline_style($font_style); ?>>
					<?php if ($subtitle != '') { ?>
						<?php echo esc_attr($subtitle) ?>
					<?php } ?>
				</span>
				<?php if ($title != '') { ?>
					<<?php echo esc_attr($title_tag); ?> class="edgtf-banner-title" <?php cozy_edge_inline_style($font_style); ?>>
						<?php echo esc_attr($title); ?>
					</<?php echo esc_attr($title_tag); ?>>
				<?php } ?>
			</div>
		</div>
	</div>
</div>