<?php if ( cozy_edge_options()->getOptionValue( 'portfolio_single_hide_pagination' ) !== 'yes' ) : ?>

	<?php
	$back_to_link      = get_post_meta( get_the_ID(), 'portfolio_single_back_to_link', true );
	$nav_same_category = cozy_edge_options()->getOptionValue( 'portfolio_single_nav_same_category' ) == 'yes';
	?>

	<div class="edgtf-portfolio-single-nav">
		<div class="edgtf-portfolio-single-nav-inner">
			<?php if ( get_previous_post() !== '' ) : ?>
				<div class="edgtf-portfolio-prev">
					<?php if ( $nav_same_category ) {
						previous_post_link( '%link', '<span class="arrow_carrot-left"></span>'.esc_html__( 'Previous Project', 'cozy' ), true, '', 'portfolio-category' );
					} else {
						previous_post_link( '%link', '<span class="arrow_carrot-left"></span>'.esc_html__( 'Previous Project', 'cozy' ) );
					} ?>
				</div>
			<?php endif; ?>

			<?php if ( $back_to_link !== '' ) : ?>
				<div class="edgtf-portfolio-back-btn">
					<a itemprop="url" href="<?php echo esc_url( get_permalink( $back_to_link ) ); ?>">
						<div class="edgtf-ptf-back-to-inner">
							<span class="edgtf-ptf-back-to-1"></span>
							<span class="edgtf-ptf-back-to-2"></span>
							<span class="edgtf-ptf-back-to-3"></span>
							<span class="edgtf-ptf-back-to-4"></span>
							<span class="edgtf-ptf-back-to-5"></span>
							<span class="edgtf-ptf-back-to-6"></span>
							<span class="edgtf-ptf-back-to-7"></span>
							<span class="edgtf-ptf-back-to-8"></span>
							<span class="edgtf-ptf-back-to-9"></span>
							<span class="edgtf-ptf-back-to-10"></span>
							<span class="edgtf-ptf-back-to-11"></span>
							<span class="edgtf-ptf-back-to-12"></span>
							<span class="edgtf-ptf-back-to-13"></span>
							<span class="edgtf-ptf-back-to-14"></span>
							<span class="edgtf-ptf-back-to-15"></span>
							<span class="edgtf-ptf-back-to-16"></span>
						</div>
					</a>
				</div>
			<?php endif; ?>

			<?php if ( get_next_post() !== '' ) : ?>
				<div class="edgtf-portfolio-next">
					<?php if ( $nav_same_category ) {
						next_post_link( '%link', esc_html__( 'Next Project', 'cozy' ).'<span class="arrow_carrot-right"></span>', true, '', 'portfolio-category' );
					} else {
						next_post_link( '%link', esc_html__( 'Next Project', 'cozy' ).'<span class="arrow_carrot-right"></span>');
					} ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

<?php endif; ?>