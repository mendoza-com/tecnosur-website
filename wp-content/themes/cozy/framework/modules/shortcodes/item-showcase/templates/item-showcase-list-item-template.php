<?php
$icon_html = cozy_edge_icon_collections()->renderIcon($icon, $icon_pack, $params);
?>
<div class="edgtf-item <?php echo esc_attr($item_showcase_list_item_class); ?>">
	<?php if ( $item_position == 'right' && !empty($icon)) { ?>
		<div class="edgtf-item-icon">
			<?php
			print $icon_html;
			?>
		</div>
	<?php } ?>
	<div class="edgtf-item-content">
		<?php if ($item_title != '') { ?>
		<div class="edgtf-showcase-title-holder">
			<?php if ($item_link != '' ) { ?>
				<a href="<?php esc_url($item_link) ?>">
			<?php } ?>
				<h4 class="edgtf-showcase-title"><?php echo esc_attr($item_title) ?></h4>
			<?php if ($item_link != '' ) { ?>
				</a>
			<?php } ?>
		</div>
		<?php } if ($item_text != '') { ?>
		<div class="edgtf-showcase-text-holder">
			<p class="edgtf-showcase-text"><?php echo esc_attr($item_text) ?></p>
		</div>
		<?php } ?>
	</div>
	<?php if($item_position == 'left' && !empty($icon)) { ?>
		<div class="edgtf-item-icon">
			<?php
			print $icon_html;
			?>
		</div>
	<?php } ?>
</div>