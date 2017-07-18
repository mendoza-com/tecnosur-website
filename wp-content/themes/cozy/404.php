<?php get_header(); ?>

	<?php cozy_edge_get_title(); ?>

	<div class="edgtf-container">
	<?php do_action('cozy_edge_after_container_open'); ?>
		<div class="edgtf-container-inner edgtf-404-page">
			<div class="edgtf-page-not-found">
				<span class="edgtf-page-not-found-top">
					<?php esc_html_e('404', 'cozy'); ?>
				</span>
				<?php
					echo cozy_edge_get_separator_html(array('position'=>'center'));
				?>
				<h3>
					<?php if(cozy_edge_options()->getOptionValue('404_title')){
						echo esc_html(cozy_edge_options()->getOptionValue('404_title'));
					}
					else{
						esc_html_e('Page you are looking is not found', 'cozy');
					} ?>
				</h3>
				<p>
					<?php if(cozy_edge_options()->getOptionValue('404_text')){
						echo esc_html(cozy_edge_options()->getOptionValue('404_text'));
					}
					else{
						esc_html_e('The page you are looking for does not exist. It may have been moved, or removed altogether. Perhaps you can return back to the site\'s homepage and see if you can find what you are looking for.', 'cozy');
					} ?>
				</p>
				<?php
					$params = array();
					if (cozy_edge_options()->getOptionValue('404_back_to_home')){
						$params['text'] = cozy_edge_options()->getOptionValue('404_back_to_home');
					}
					else{
						$params['text'] = esc_html__('Homepage', 'cozy');
					}
				$params['link'] = esc_url(home_url('/'));
				$params['target'] = '_self';
				echo cozy_edge_execute_shortcode('edgtf_button',$params);?>
			</div>
		</div>
		<?php do_action('cozy_edge_before_container_close'); ?>
	</div>
<?php get_footer(); ?>