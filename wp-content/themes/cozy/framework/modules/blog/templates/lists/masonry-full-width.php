<?php cozy_edge_get_module_template_part('templates/lists/parts/filter', 'blog'); ?>
<div class="edgtf-blog-holder edgtf-blog-type-masonry edgtf-masonry-full-width edgtf-masonry-pagination-<?php echo cozy_edge_options()->getOptionValue('masonry_pagination'); ?>">
	<div class="edgtf-blog-masonry-grid-sizer"></div>
	<div class="edgtf-blog-masonry-grid-gutter"></div>
	<?php
	if($blog_query->have_posts()) : while ( $blog_query->have_posts() ) : $blog_query->the_post();
		cozy_edge_get_post_format_html($blog_type);
	endwhile;
	else:
		cozy_edge_get_module_template_part('templates/parts/no-posts', 'blog');
	endif;
	?>
</div>