<?php
/**
 * Blockquote shortcode template
 */
?>

<blockquote class="edgtf-blockquote-shortcode" <?php cozy_edge_inline_style($blockquote_style); ?> >
	<<?php echo esc_attr($blockquote_title_tag); ?> class="edgtf-blockquote-text">
	<span><?php echo esc_attr($text); ?></span>
	</<?php echo esc_attr($blockquote_title_tag);?>>
</blockquote>