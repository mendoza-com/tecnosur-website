<?php 
/*
Template Name: Full Width
*/ 
?>
<?php
$cozy_edge_variable_sidebar = cozy_edge_sidebar_layout(); ?>

<?php get_header(); ?>
<?php cozy_edge_get_title(); ?>
<?php get_template_part('slider'); ?>

<div class="edgtf-full-width">
<div class="edgtf-full-width-inner">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if(($cozy_edge_variable_sidebar == 'default')||($cozy_edge_variable_sidebar == '')) : ?>
			<?php the_content(); ?>
			<?php do_action('cozy_edge_page_after_content'); ?>
		<?php elseif($cozy_edge_variable_sidebar == 'sidebar-33-right' || $cozy_edge_variable_sidebar == 'sidebar-25-right'): ?>
			<div <?php echo cozy_edge_sidebar_columns_class(); ?>>
				<div class="edgtf-column1 edgtf-content-left-from-sidebar">
					<div class="edgtf-column-inner">
						<?php the_content(); ?>
						<?php do_action('cozy_edge_page_after_content'); ?>
					</div>
				</div>
				<div class="edgtf-column2">
					<?php get_sidebar(); ?>
				</div>
			</div>
		<?php elseif($cozy_edge_variable_sidebar == 'sidebar-33-left' || $cozy_edge_variable_sidebar == 'sidebar-25-left'): ?>
			<div <?php echo cozy_edge_sidebar_columns_class(); ?>>
				<div class="edgtf-column1">
					<?php get_sidebar(); ?>
				</div>
				<div class="edgtf-column2 edgtf-content-right-from-sidebar">
					<div class="edgtf-column-inner">
						<?php the_content(); ?>
						<?php do_action('cozy_edge_page_after_content'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>