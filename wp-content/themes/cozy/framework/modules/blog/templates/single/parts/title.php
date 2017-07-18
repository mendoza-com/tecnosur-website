<?php $title_tag = isset($title_tag) ? $title_tag : 'h3' ?>
<<?php echo esc_attr($title_tag);?> itemprop="name" class="edgtf-post-title entry-title">
	<?php the_title(); ?>
</<?php echo esc_attr($title_tag);?>>