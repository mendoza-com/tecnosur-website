<div class="edgtf-image-with-text <?php echo esc_attr($image_classes)?>">
	<?php if($link) : ?>
		<a class="edgtf-iwt-link" href="<?php echo esc_url($link); ?>" <?php cozy_edge_inline_attr($target, 'target'); ?>></a>
	<?php endif; ?>
	<div class="edgtf-iwt-image-holder">
		<div class="edgtf-iwt-image">
				<img src="<?php echo esc_url($image); ?>" alt="" />
		</div>
		<?php if($text): ?>
		<div class="edgtf-iwt-text-holder">
			<div class="edgtf-iwt-text-table">
				<div class="edgtf-iwt-text-cell">
						<h4 class="edgtf-iwt-text">
							<?php echo esc_attr($text); ?>
						</h4>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>

	<?php if($title): ?>
	<div class="edgtf-iwt-title-holder">
		<<?php echo esc_attr($title_tag); ?> class="edgtf-iwt-title">
			<?php if($link) : ?>
				<a href="<?php echo esc_url($link); ?>" <?php cozy_edge_inline_attr($target, 'target'); ?>>
					<?php echo esc_attr($title); ?>
				</a>
			<?php else: ?>
				<?php echo esc_attr($title); ?>
			<?php endif; ?>
		</<?php echo esc_attr($title_tag); ?>>
	</div>
	<?php endif; ?>

</div>