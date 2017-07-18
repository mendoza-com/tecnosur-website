<?php

class CozyEdgeWoocommerceDropdownCart extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'edgtf_woocommerce_dropdown_cart', // Base ID
			'Edge Woocommerce Dropdown Cart', // Name
			array( 'description' => esc_html__( 'Edge Woocommerce Dropdown Cart', 'cozy' ), ) // Args
		);
	}

	public function widget( $args, $instance ) {
		global $post;
		extract( $args );

		global $woocommerce;
		global $cozy_edge_options;

		$cart_style = 'edgtf-with-icon';

		?>
		<div class="edgtf-shopping-cart-outer">
			<div class="edgtf-shopping-cart-inner">
				<div class="edgtf-shopping-cart-header">
					<a itemprop="url" class="edgtf-header-cart" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>">
						<i class="icon_cart_alt"></i>
						<span class="edgtf-cart-amount"><?php echo esc_html($woocommerce->cart->get_cart_contents_count()); ?></span>
					</a>

					<div class="edgtf-shopping-cart-dropdown">
						<?php
						$cart_is_empty = sizeof( $woocommerce->cart->get_cart() ) <= 0;
						$list_class    = array( 'edgtf-cart-list', 'product_list_widget' );
						?>
						<ul>

							<?php if ( ! $cart_is_empty ) : ?>

								<?php foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) :

									$_product      = $cart_item['data'];

									// Only display if allowed
									if ( ! $_product->exists() || $cart_item['quantity'] == 0 ) {
										continue;
									}

									// Get price
									$product_price = get_option('woocommerce_tax_display_cart') == 'excl' ? wc_get_price_including_tax($_product) : wc_get_price_including_tax($_product);
									?>


									<li>
										<div class="edgtf-item-image-holder">
											<a itemprop="url" href="<?php echo esc_url( get_permalink( $cart_item['product_id'] ) ); ?>">
												<?php echo wp_kses( $_product->get_image(), array(
													'img' => array(
														'src'    => true,
														'width'  => true,
														'height' => true,
														'class'  => true,
														'alt'    => true,
														'title'  => true,
														'id'     => true
													)
												) ); ?>
											</a>
										</div>
										<div class="edgtf-item-info-holder">
											<div class="edgtf-item-left">
												<a itemprop="url" href="<?php echo esc_url( get_permalink( $cart_item['product_id'] ) ); ?>">
													<?php echo apply_filters( 'woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?>
												</a>
												<span class="edgtf-quantity"><?php esc_html_e( 'Quantity: ', 'cozy' ); ?><?php echo esc_html( $cart_item['quantity'] ); ?></span>
												<?php echo apply_filters( 'woocommerce_cart_item_price_html', wc_price( $product_price ), $cart_item, $cart_item_key ); ?>
												<?php echo apply_filters('woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s"><span class="icon_close"></span></a>', esc_url($woocommerce->cart->get_remove_url($cart_item_key)), esc_html__('Remove this item', 'cozy')), $cart_item_key); ?>
											</div>
										</div>
									</li>

								<?php endforeach; ?>
								<div class="edgtf-cart-bottom">
									<div class="edgtf-subtotal-holder clearfix">
										<span class="edgtf-total"><?php esc_html_e( 'Total', 'cozy' ); ?>:</span>
										<span class="edgtf-total-amount">
											<?php echo wp_kses( $woocommerce->cart->get_cart_subtotal(), array(
												'span' => array(
													'class' => true,
													'id'    => true
												)
											) ); ?>
										</span>
									</div>
									<div class="edgtf-btns-holder clearfix">
										<a itemprop="url" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>"
										   class="edgtf-btn-small view-cart">
											<?php esc_html_e( 'View Cart', 'cozy' ); ?>
										</a>
										<a itemprop="url" href="<?php echo esc_url( $woocommerce->cart->get_checkout_url() ); ?>"
										   class="edgtf-btn-small checkout">
											<?php esc_html_e( 'Checkout', 'cozy' ); ?>
										</a>
									</div>
								</div>
							<?php else : ?>

								<li class="edgtf-empty-cart"><?php esc_html_e( 'No products in the cart.', 'cozy' ); ?></li>

							<?php endif; ?>

						</ul>
						<?php if ( sizeof( $woocommerce->cart->get_cart() ) <= 0 ) : ?>

						<?php endif; ?>


						<?php if ( sizeof( $woocommerce->cart->get_cart() ) <= 0 ) : ?>

						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

}

add_action( 'widgets_init', create_function( '', 'register_widget( "CozyEdgeWoocommerceDropdownCart" );' ) );
?>
<?php
add_filter( 'add_to_cart_fragments', 'cozy_edge_woocommerce_header_add_to_cart_fragment' );
function cozy_edge_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();
	?>
	<div class="edgtf-shopping-cart-header">
		<a itemprop="url" class="edgtf-header-cart" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>">
			<i class="icon_cart_alt"></i>
			<span class="edgtf-cart-amount"><?php echo esc_html($woocommerce->cart->get_cart_contents_count()); ?></span>
		</a>

		<div class="edgtf-shopping-cart-dropdown">
			<?php
			$cart_is_empty = sizeof( $woocommerce->cart->get_cart() ) <= 0;
			//$list_class = array( 'edgtf-cart-list', 'product_list_widget' );
			?>
			<ul>

				<?php if ( ! $cart_is_empty ) : ?>

					<?php foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) :

						$_product      = $cart_item['data'];

						// Only display if allowed
						if ( ! $_product->exists() || $cart_item['quantity'] == 0 ) {
							continue;
						}

						// Get price
						$product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? $_product->get_price_excluding_tax() : $_product->get_price_including_tax();
						?>

						<li>
							<div class="edgtf-item-image-holder">
								<a itemprop="url" href="<?php echo esc_url( get_permalink( $cart_item['product_id'] ) ); ?>">
									<?php echo wp_kses( $_product->get_image(), array(
										'img' => array(
											'src'    => true,
											'width'  => true,
											'height' => true,
											'class'  => true,
											'alt'    => true,
											'title'  => true,
											'id'     => true
										)
									) ); ?>
								</a>
							</div>
							<div class="edgtf-item-info-holder">
								<div class="edgtf-item-left">
									<a itemprop="url" href="<?php echo esc_url( get_permalink( $cart_item['product_id'] ) ); ?>">
										<?php echo apply_filters( 'woocommerce_widget_cart_product_title', $_product->get_title(), $_product ); ?>
									</a>
									<span class="edgtf-quantity"><?php esc_html_e( 'Quantity: ', 'cozy' ); ?><?php echo esc_html( $cart_item['quantity'] ); ?></span>
									<?php echo apply_filters( 'woocommerce_cart_item_price_html', wc_price( $product_price ), $cart_item, $cart_item_key ); ?>
									<?php echo apply_filters('woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s"><span class="icon_close"></span></a>', esc_url($woocommerce->cart->get_remove_url($cart_item_key)), esc_html__('Remove this item', 'cozy')), $cart_item_key); ?>
								</div>
							</div>
						</li>

					<?php endforeach; ?>
					<div class="edgtf-cart-bottom">
						<div class="edgtf-subtotal-holder clearfix">
							<span class="edgtf-total"><?php esc_html_e( 'Total', 'cozy' ); ?>:</span>
								<span class="edgtf-total-amount">
									<?php echo wp_kses( $woocommerce->cart->get_cart_subtotal(), array(
										'span' => array(
											'class' => true,
											'id'    => true
										)
									) ); ?>
								</span>
						</div>
						<div class="edgtf-btns-holder clearfix">
							<a itemprop="url" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>"
							   class="edgtf-btn-small view-cart">
								<?php esc_html_e( 'View Cart', 'cozy' ); ?>
							</a>
							<a itemprop="url" href="<?php echo esc_url( $woocommerce->cart->get_checkout_url() ); ?>"
							   class="edgtf-btn-small checkout">
								<?php esc_html_e( 'Checkout', 'cozy' ); ?>
							</a>
						</div>
					</div>
				<?php else : ?>

					<li class="edgtf-empty-cart"><?php esc_html_e( 'No products in the cart.', 'cozy' ); ?></li>

				<?php endif; ?>

			</ul>
			<?php if ( sizeof( $woocommerce->cart->get_cart() ) <= 0 ) : ?>

			<?php endif; ?>


			<?php if ( sizeof( $woocommerce->cart->get_cart() ) <= 0 ) : ?>

			<?php endif; ?>
		</div>
	</div>

	<?php
	$fragments['div.edgtf-shopping-cart-header'] = ob_get_clean();

	return $fragments;
}

?>