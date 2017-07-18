<?php // This line is needed for mixItUp gutter ?>

<article class="edgtf-portfolio-item mix <?php echo esc_attr($categories)?>" >
	<a class ="edgtf-portfolio-link" href="<?php echo esc_url($item_link); ?>"></a>
	<div class = "edgtf-item-image-holder">
	<?php
		echo get_the_post_thumbnail(get_the_ID(),$thumb_size);
	?>
	</div>
	<div class="edgtf-item-text-overlay">
		<div class="edgtf-item-text-overlay-inner">
			<div class="edgtf-item-text-holder">
				<<?php echo esc_attr($title_tag)?> class="edgtf-item-title">
				<span class="edgtf-item-title-inner"><?php echo esc_attr(get_the_title()); ?></span>
				</<?php echo esc_attr($title_tag)?>>
				<?php
				print $category_html;
				print $icon_html;
				?>
			</div>
		</div>
	</div>
</article>

<?php // This line is needed for mixItUp gutter ?>