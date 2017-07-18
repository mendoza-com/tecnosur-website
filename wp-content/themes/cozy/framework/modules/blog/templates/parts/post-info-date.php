<div itemprop="dateCreated" class="edgtf-post-info-date entry-date updated">
	<?php if(!cozy_edge_post_has_title()) { ?><a itemprop="url" href="<?php the_permalink() ?>"><?php } ?>
		<?php the_time(get_option('date_format')); ?>
	<?php if(!cozy_edge_post_has_title()) { ?></a><?php } ?>
    <meta itemprop="interactionCount" content="UserComments: <?php echo get_comments_number(cozy_edge_get_page_id()); ?>"/>
</div>