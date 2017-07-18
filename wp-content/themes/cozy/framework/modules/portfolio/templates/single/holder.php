<div <?php cozy_edge_class_attribute($holder_class); ?>>
<?php if($fullwidth) : ?>
	<div class="edgtf-full-width">
	    <div class="edgtf-full-width-inner">
	<?php else: ?>
	<div class="edgtf-container">
	    <div class="edgtf-container-inner clearfix">
	<?php endif; ?>
            <?php if(post_password_required()) {
                echo get_the_password_form();
            } else {
                //load proper portfolio template
                cozy_edge_get_module_template_part('templates/single/single', 'portfolio', $portfolio_template);
            } ?>
        </div>
    </div>
	<?php
		//load portfolio navigation
		cozy_edge_get_module_template_part('templates/single/parts/navigation', 'portfolio');

		//load portfolio comments
		cozy_edge_get_module_template_part('templates/single/parts/comments', 'portfolio');
	?>
</div>