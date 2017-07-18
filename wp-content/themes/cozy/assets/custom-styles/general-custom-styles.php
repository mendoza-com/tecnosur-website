<?php
if(!function_exists('cozy_edge_design_styles')) {
    /**
     * Generates general custom styles
     */
    function cozy_edge_design_styles() {

        $preload_background_styles = array();

        if(cozy_edge_options()->getOptionValue('preload_pattern_image') !== ""){
            $preload_background_styles['background-image'] = 'url('.cozy_edge_options()->getOptionValue('preload_pattern_image').') !important';
        }else{
            $preload_background_styles['background-image'] = 'url('.esc_url(EDGE_ASSETS_ROOT."/img/preload_pattern.png").') !important';
        }

        echo cozy_edge_dynamic_css('.edgtf-preload-background', $preload_background_styles);

		if (cozy_edge_options()->getOptionValue('google_fonts')){
			$font_family = cozy_edge_options()->getOptionValue('google_fonts');
			if(cozy_edge_is_font_option_valid($font_family)) {
				echo cozy_edge_dynamic_css('body', array('font-family' => cozy_edge_get_font_option_val($font_family)));
			}
		}

	    if (cozy_edge_options()->getOptionValue('google_fonts_second')){
		    $font_family_second = cozy_edge_options()->getOptionValue('google_fonts_second');
		    if(cozy_edge_is_font_option_valid($font_family_second)) {

			    $font_family_second_selector = array(
					'h1',
				    'h2',
				    'h3',
				    'h4',
				    'h5',
				    'h6',
				    '.edgtf-comment-holder .edgtf-comment-text .replay',
					'.edgtf-comment-holder .edgtf-comment-text .comment-reply-link',
					'.edgtf-comment-holder .edgtf-comment-text .comment-edit-link',
				    '.edgtf-comment-holder .edgtf-comment-text .edgtf-comment-date',
					'.edgtf-main-menu ul li a',
				    '.edgtf-header-vertical .edgtf-vertical-menu ul li',
				    'footer .widget.widget_recent_entries .post-date',
				    '.edgtf-side-menu .widget ul li',
				    '.edgtf-side-menu .widget .edgtf-search-wrapper input[type="text"]',
				    '.edgtf-side-menu .widget .tagcloud a',
				    'nav.edgtf-fullscreen-menu ul li a',
				    '.edgtf-search-cover input',
					'.edgtf-search-cover input:focus',
				    '.edgtf-fullscreen-search-holder .edgtf-search-label',
				    '.edgtf-fullscreen-search-opened .edgtf-form-holder .edgtf-search-field',
				    '.edgtf-portfolio-single-holder .edgtf-portfolio-info-item:not(.edgtf-content-item) .edgtf-portfolio-info-item-title',
				    '.edgtf-portfolio-single-holder .edgtf-portfolio-info-item:not(.edgtf-content-item) p',
				    '.edgtf-portfolio-single-holder .edgtf-portfolio-single-nav .edgtf-portfolio-next',
				    '.edgtf-portfolio-single-holder .edgtf-portfolio-single-nav .edgtf-portfolio-prev',
				    '.edgtf-team.main-info-on-hover .edgtf-team-position',
				    '.edgtf-team.main-info-on-hover .edgtf-team-description',
				    '.edgtf-team.main-info-below-image .edgtf-team-info .edgtf-team-position',
				    '.edgtf-call-to-action .edgtf-call-to-action-text',
				    '.countdown-period',
				    '.edgtf-testimonials.edgtf-testimonials-type-simple .edgtf-testimonial-text',
				    '.edgtf-price-table .edgtf-price-table-inner ul li.edgtf-table-prices .edgtf-value',
				    '.edgtf-price-table .edgtf-price-table-inner ul li.edgtf-table-prices .edgtf-mark',
				    '.edgtf-price-table.edgtf-active .edgtf-active-text',
				    '.edgtf-tabs .edgtf-tabs-nav li a ',
				    '.edgtf-blog-list-holder .edgtf-item-info-section',
				    '.edgtf-blog-list-holder.edgtf-boxes .edgtf-blog-list-read-more',
				    '.edgtf-blog-slider .edgtf-blog-slide-post-info',
				    '.edgtf-blog-slider .edgtf-blog-slide-read-more',
				    '.edgtf-btn',
				    '.edgtf-portfolio-list-holder .edgtf-ptf-category-holder',
				    '.edgtf-portfolio-list-holder-outer .edgtf-ptf-list-paging a',
				    '.edgtf-portfolio-filter-holder .edgtf-portfolio-filter-holder-inner ul li span',
				    '.edgtf-social-share-holder.edgtf-list .edgtf-social-share-title',
				    '.carousel .carousel-inner .item .edgtf-slider-elements-container .edgtf-slide-element.edgtf-slide-element-text-normal',
				    '.carousel .carousel-inner .item .edgtf-slider-elements-container .edgtf-slide-element.edgtf-slide-element-text-large',
				    '.carousel .carousel-inner .item .edgtf-slider-elements-container .edgtf-slide-element.edgtf-slide-element-text-extra-large',
				    '.edgtf-shop-masonry .edgtf-product-badge',
				    '.edgtf-shop-masonry .amount',
				    '.edgtf-sidebar .widget ul li',
				    '.edgtf-sidebar .widget .edgtf-search-wrapper input[type="text"]',
				    '.edgtf-sidebar .widget .tagcloud a',
				    '.edgtf-blog-holder article .edgtf-post-info',
				    '.edgtf-blog-holder article .edgtf-post-info-bottom .edgtf-post-info-bottom-left a',
				    '.edgtf-blog-holder article .edgtf-quote-author',
				    '.woocommerce:not(.edgtf-shop-masonry) .amount',
				    '.edgtf-woocommerce-page .amount',
				    '.woocommerce:not(.edgtf-shop-masonry) .woocommerce-result-count',
					'.woocommerce:not(.edgtf-shop-masonry) .woocommerce-ordering',
					'.edgtf-woocommerce-page .woocommerce-result-count',
					'.edgtf-woocommerce-page .woocommerce-ordering',
				    '.woocommerce:not(.edgtf-shop-masonry) .product .edgtf-product-badge',
				    '.edgtf-woocommerce-page .product .edgtf-product-badge',
				    '.woocommerce-pagination .page-numbers',
				    '.edgtf-single-product-wrapper-top .woocommerce-review-link',
				    '.edgtf-woocommerce-page .edgtf-product-single-navigation a',
				    '.edgtf-woocommerce-page .edgtf-quantity-buttons .edgtf-quantity-input',
				    '.edgtf-shopping-cart-outer .edgtf-cart-amount',
				    '.woocommerce input[type="button"]:not(.edgtf-btn)',
			        '.woocommerce-page input[type="button"]:not(.edgtf-btn)',
				    '.woocommerce input[type="submit"]:not(.edgtf-btn)',
				    '.woocommerce-page input[type="submit"]:not(.edgtf-btn)',
				    '.woocommerce.widget',
				    '.woocommerce.widget input[type=search]',
				    '.woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a',
               		 '.woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover'
			    );

			    echo cozy_edge_dynamic_css($font_family_second_selector, array('font-family' => cozy_edge_get_font_option_val($font_family_second)));
		    }
	    }

        if(cozy_edge_options()->getOptionValue('first_color') !== "") {
	        $color_selector = array(
				'h6',
				'a',
				'h1 a:hover',
				'h2 a:hover',
				'h3 a:hover',
				'h4 a:hover',
				'h5 a:hover',
				'h6 a:hover',
				'p a',
				'.edgtf-comment-holder .edgtf-comment-text .comment-edit-link',
				'.edgtf-comment-holder .edgtf-comment-text .comment-reply-link',
				'.edgtf-comment-holder .edgtf-comment-text .replay',
				'.edgtf-main-menu ul li.edgtf-active-item a',
				'.edgtf-main-menu ul li:hover a',
				'.edgtf-main-menu>ul>li.edgtf-active-item>a',
				'body:not(.edgtf-menu-item-first-level-bg-color) .edgtf-main-menu>ul>li:hover>a',
				'.edgtf-main-menu>ul>li.edgtf-has-sub>a span.plus',
				'.edgtf-drop-down .edgtf-menu-second .edgtf-menu-inner ul li.edgtf-sub ul li:hover>a',
				'.edgtf-drop-down .edgtf-menu-second .edgtf-menu-inner>ul>li:hover>a',
				'.edgtf-header-standard .edgtf-fullscreen-menu-opener:hover',
				'.edgtf-header-standard .edgtf-search-opener:hover',
				'.edgtf-header-vertical .edgtf-vertical-dropdown-float .edgtf-menu-second .edgtf-menu-inner ul li a:hover',
				'.edgtf-header-vertical .edgtf-vertical-menu>ul>li>a:hover',
				'.edgtf-header-vertical .edgtf-vertical-menu ul>li.menu-item-has-children>a .plus',
				'.edgtf-mobile-header .edgtf-mobile-nav a:hover',
				'.edgtf-mobile-header .edgtf-mobile-nav h4:hover',
				'.edgtf-mobile-header .edgtf-mobile-menu-opener a:hover',
				'footer a:hover',
				'footer .widget ul li a:hover',
				'footer .widget.widget_recent_entries .post-date',
				'.edgtf-side-menu-button-opener:hover',
				'.edgtf-side-menu .widget ul li:hover>a',
				'.edgtf-side-menu .widget .recentcomments:hover a',
				'.edgtf-side-menu .widget.widget_archive li:hover',
				'.edgtf-side-menu .widget.widget_calendar #next a',
				'.edgtf-side-menu .widget.widget_calendar #prev a',
				'nav.edgtf-fullscreen-menu ul li a:hover',
				'nav.edgtf-fullscreen-menu ul li.edgtf-active-item>a',
				'nav.edgtf-fullscreen-menu ul li.open_sub>a',
				'nav.edgtf-fullscreen-menu ul li ul li a:hover',
				'.edgtf-search-cover .edgtf-search-close a:hover',
				'.edgtf-portfolio-single-holder .edgtf-portfolio-single-nav .edgtf-portfolio-next span',
				'.edgtf-portfolio-single-holder .edgtf-portfolio-single-nav .edgtf-portfolio-prev span',
				'.edgtf-team.main-info-on-hover .edgtf-team-position',
				'.edgtf-team.main-info-on-hover .edgtf-team-social-wrapp a:hover',
				'.edgtf-team.main-info-below-image .edgtf-icon-element:hover',
				'.edgtf-team.main-info-below-image .edgtf-team-info .edgtf-team-position',
				'.edgtf-call-to-action .edgtf-text-wrapper .edgtf-call-to-action-icon',
				'.edgtf-counter-holder:hover .edgtf-counter-title',
				'.edgtf-ordered-list ol>li:before',
				'.edgtf-icon-list-item .edgtf-icon-list-icon-holder-inner i',
				'.edgtf-icon-list-item .edgtf-icon-list-icon-holder-inner span',
				'.edgtf-testimonials.edgtf-testimonials-type-carousel .edgtf-testimonial-author .edgtf-testimonials-job',
				'.edgtf-price-table.edgtf-active .edgtf-active-text',
				'.edgtf-process-holder .edgtf-process-item-holder .edgtf-pi-number-holder .edgtf-pi-arrow',
				'.edgtf-tabs.edgtf-horizontal-tab .edgtf-tabs-nav li.ui-state-active a',
				'.edgtf-tabs.edgtf-horizontal-tab .edgtf-tabs-nav li.ui-state-hover a',
				'.edgtf-tabs.edgtf-vertical-tab .edgtf-tabs-nav li.ui-state-active a',
				'.edgtf-tabs.edgtf-vertical-tab .edgtf-tabs-nav li.ui-state-hover a',
				'.edgtf-accordion-holder .edgtf-title-holder .edgtf-accordion-mark',
				'.edgtf-blog-list-holder .edgtf-item-info-section>div a:hover',
				'.edgtf-blog-list-holder.edgtf-boxes .edgtf-blog-list-read-more',
				'.edgtf-blog-list-holder.edgtf-boxes .edgtf-blog-list-read-more i',
				'.edgtf-blog-list-holder.edgtf-standard .edgtf-blog-list-read-more',
				'.edgtf-blog-slider .edgtf-blog-slide-read-more i',
				'.edgtf-btn.edgtf-btn-transparent',
				'.edgtf-btn.edgtf-btn-transparent i',
				'.edgtf-image-with-text:hover a',
				'.edgtf-dropcaps',
				'.edgtf-portfolio-list-holder-outer.edgtf-ptf-standard article:hover .edgtf-item-text-holder .edgtf-item-title a',
				'.edgtf-portfolio-filter-holder .edgtf-portfolio-filter-holder-inner ul li.active span',
				'.edgtf-portfolio-filter-holder .edgtf-portfolio-filter-holder-inner ul li.current span',
				'.edgtf-portfolio-filter-holder .edgtf-portfolio-filter-holder-inner ul li:hover span',
				'.edgtf-social-share-holder.edgtf-list li a:hover',
				'.edgtf-social-share-holder.edgtf-list .edgtf-social-share-title',
				'.edgtf-sidebar .widget ul li:before',
				'.edgtf-sidebar .widget ul li:hover>a',
				'.edgtf-sidebar .widget .recentcomments:hover a',
				'.edgtf-sidebar .widget.widget_archive li:hover',
				'.edgtf-sidebar .widget.widget_calendar #next a',
				'.edgtf-sidebar .widget.widget_calendar #prev a',
				'.edgtf-blog-holder article.sticky .edgtf-post-title a',
				'.edgtf-blog-holder article .edgtf-post-info>div a:hover',
				'.edgtf-blog-holder article .edgtf-post-info-bottom .edgtf-post-info-bottom-left',
				'.edgtf-blog-holder article .edgtf-post-info-bottom .edgtf-post-info-bottom-left a',
				'.edgtf-filter-blog-holder li.edgtf-active',
				'.edgtf-woocommerce-page .price>.amount',
				'.edgtf-woocommerce-page ins',
				'.woocommerce:not(.edgtf-shop-masonry) .price>.amount',
				'.woocommerce:not(.edgtf-shop-masonry) ins',
				'.woocommerce-pagination .page-numbers.current',
				'.woocommerce-pagination .page-numbers.current:hover',
				'.woocommerce-pagination .page-numbers:hover',
				'.edgtf-single-product-wrapper-top .edgtf-social-share-holder.edgtf-list li a:hover',
				'.edgtf-single-product-wrapper-top .edgtf-tabs.edgtf-horizontal-tab .edgtf-tabs-nav li.ui-state-active a',
				'.edgtf-single-product-wrapper-top .edgtf-tabs.edgtf-horizontal-tab .edgtf-tabs-nav li.ui-state-hover a',
				'.woocommerce .edgtf-single-product-summary .price>.amount',
				'.woocommerce .edgtf-single-product-summary ins .amount',
				'.edgtf-woocommerce-page .edgtf-quantity-buttons .edgtf-quantity-minus:hover',
				'.edgtf-woocommerce-page .edgtf-quantity-buttons .edgtf-quantity-plus:hover',
				'.edgtf-shopping-cart-outer .edgtf-shopping-cart-header .edgtf-header-cart:hover i',
				'.edgtf-shopping-cart-dropdown ul li a:hover',
				'.edgtf-shopping-cart-dropdown .edgtf-item-info-holder .edgtf-item-left a:hover',
				'.edgtf-shopping-cart-dropdown .edgtf-item-info-holder .edgtf-item-left .amount',
				'.edgtf-shopping-cart-dropdown .edgtf-cart-bottom .edgtf-total-amount',
				'.edgtf-woocommerce-page .select2-container .select2-choice .select2-arrow',
				'.woocommerce-cart .remove:hover',
				'.woocommerce-page .woocommerce.widget span.amount',
				'.woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a',
				'.woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover'
			);

	        $color_important_selector = array(
				'.edgtf-item-showcase .edgtf-item .edgtf-item-icon:hover i'
			);

	        $background_color_selector = array (
				'.edgtf-3d-cube-holder .edgtf-3d-cube>div:nth-child(5)',
				'.edgtf-3d-cube-holder .edgtf-3d-cube>div:nth-child(6)',
				'.edgtf-st-loader .pulse',
				'.edgtf-st-loader .double_pulse .double-bounce1',
				'.edgtf-st-loader .double_pulse .double-bounce2',
				'.edgtf-st-loader .cube',
				'.edgtf-st-loader .rotating_cubes .cube1',
				'.edgtf-st-loader .rotating_cubes .cube2',
				'.edgtf-st-loader .stripes>div',
				'.edgtf-st-loader .wave>div',
				'.edgtf-st-loader .two_rotating_circles .dot1',
				'.edgtf-st-loader .two_rotating_circles .dot2',
				'.edgtf-st-loader .five_rotating_circles .container1>div',
				'.edgtf-st-loader .five_rotating_circles .container2>div',
				'.edgtf-st-loader .five_rotating_circles .container3>div',
				'.edgtf-st-loader .atom .ball-1:before',
				'.edgtf-st-loader .atom .ball-2:before',
				'.edgtf-st-loader .atom .ball-3:before',
				'.edgtf-st-loader .atom .ball-4:before',
				'.edgtf-st-loader .clock .ball:before',
				'.edgtf-st-loader .mitosis .ball',
				'.edgtf-st-loader .lines .line1',
				'.edgtf-st-loader .lines .line2',
				'.edgtf-st-loader .lines .line3',
				'.edgtf-st-loader .lines .line4',
				'.edgtf-st-loader .fussion .ball',
				'.edgtf-st-loader .fussion .ball-1',
				'.edgtf-st-loader .fussion .ball-2',
				'.edgtf-st-loader .fussion .ball-3',
				'.edgtf-st-loader .fussion .ball-4',
				'.edgtf-st-loader .wave_circles .ball',
				'.edgtf-st-loader .pulse_circles .ball',
				'#submit_comment',
				'.post-password-form input[type=submit]',
				'input.wpcf7-form-control.wpcf7-submit',
				'.edgtf-slick-slider-navigation-style .edgtf-slick-dots li .edgtf-slick-dot-inner',
				'.edgtf-front-side',
				'.edgtf-header-vertical .edgtf-vertical-menu>ul>li>a:after',
				'footer .widget .edgtf-subscription-form input.wpcf7-form-control.wpcf7-submit:hover',
				'.edgtf-icon-shortcode.circle',
				'.edgtf-icon-shortcode.square',
				'.edgtf-unordered-list.edgtf-circle ul>li:before',
				'.edgtf-unordered-list.edgtf-dropcaps.edgtf-circle ul>li:before',
				'.edgtf-unordered-list.edgtf-square ul>li:before',
				'.edgtf-progress-bar .edgtf-progress-content-outer .edgtf-progress-content',
				'.edgtf-pie-chart-doughnut-holder .edgtf-pie-legend ul li .edgtf-pie-color-holder',
				'.edgtf-pie-chart-pie-holder .edgtf-pie-legend ul li .edgtf-pie-color-holder',
				'.edgtf-process-holder .edgtf-process-item-holder .edgtf-pi-number-holder',
				'.edgtf-btn.edgtf-btn-solid',
				'.edgtf-carousel-holder .edgtf-carousel-item-holder .edgtf-carousel-first-image-holder.edgtf-image-zoom:after',
				'.edgtf-image-gallery .edgtf-slick-dots li .edgtf-slick-dot-inner',
				'.edgtf-image-gallery-carousel .edgtf-slick-dots li .edgtf-slick-dot-inner',
				'.edgtf-dropcaps.edgtf-circle',
				'.edgtf-dropcaps.edgtf-square',
				'.edgtf-portfolio-list-holder-outer .edgtf-ptf-list-paging a',
				'.edgtf-portfolio-slider-holder .edgtf-portfolio-list-holder .edgtf-slick-dots li .edgtf-slick-dot-inner',
				'.edgtf-project-presentation .edgtf-slick-dots li .edgtf-slick-dot-inner',
				'.edgtf-sidebar .widget .edgtf-search-wrapper input[type=submit]',
				'.edgtf-blog-audio-holder .mejs-container',
				'.edgtf-woocommerce-page .product .edgtf-product-badge',
				'.woocommerce:not(.edgtf-shop-masonry) .product .edgtf-product-badge',
				'.edgtf-single-product-images .edgtf-product-badge.edgtf-onsale',
				'.edgtf-shopping-cart-dropdown .edgtf-cart-bottom .checkout',
				'.edgtf-shopping-cart-dropdown .edgtf-cart-bottom .view-cart',
				'.edgtf-woocommerce-page .woocommerce input[type=button]:not(.edgtf-btn)',
				'.edgtf-woocommerce-page .woocommerce input[type=submit]:not(.edgtf-btn)',
				'.edgtf-woocommerce-page .woocommerce-page input[type=button]:not(.edgtf-btn)',
				'.edgtf-woocommerce-page .woocommerce-page input[type=submit]:not(.edgtf-btn)',
				'.woocommerce-page .woocommerce.widget.widget_product_search .edgtf-product-search-form',
				'.widget_price_filter .ui-slider-horizontal .ui-slider-range'
			);

	        $background_color_important_selector = array(
				'.edgtf-btn.edgtf-btn-solid-dark:not(.edgtf-btn-custom-hover-bg):hover'
			);

	        $border_color_selector = array (
				'.edgtf-st-loader .pulse_circles .ball',
				'#submit_comment',
				'.post-password-form input[type=submit]',
				'input.wpcf7-form-control.wpcf7-submit',
				'footer .widget .edgtf-subscription-form input.wpcf7-form-control.wpcf7-submit:hover',
				'.edgtf-accordion-holder.edgtf-boxed .edgtf-title-holder.ui-state-active',
				'.edgtf-accordion-holder.edgtf-boxed .edgtf-title-holder.ui-state-hover',
				'.edgtf-btn.edgtf-btn-solid',
				'.edgtf-woocommerce-page .woocommerce input[type=button]:not(.edgtf-btn)',
				'.edgtf-woocommerce-page .woocommerce input[type=submit]:not(.edgtf-btn)',
				'.edgtf-woocommerce-page .woocommerce-page input[type=button]:not(.edgtf-btn)',
				'.edgtf-woocommerce-page .woocommerce-page input[type=submit]:not(.edgtf-btn)',
				'.pp_loaderIcon:after',
				'.edgtf-iwt-title > a:after'
			);

	        $border_color_important_selector = array(
				'.edgtf-btn.edgtf-btn-solid-dark:not(.edgtf-btn-custom-border-hover):hover'
			);

	        $border_bottom_color_selector = array(
				'.edgtf-main-menu>ul>li>a span.edgtf-item-text:after',
				'.edgtf-drop-down .edgtf-menu-second .edgtf-menu-inner span.edgtf-item-text:after',
				'nav.edgtf-fullscreen-menu ul>li>a>span:after',
				'nav.edgtf-fullscreen-menu ul>li>ul>li>a>span:after',
				'.edgtf-tabs.edgtf-horizontal-tab .edgtf-tabs-nav li.ui-state-active a,.edgtf-tabs.edgtf-horizontal-tab .edgtf-tabs-nav li.ui-state-hover a',
				'.edgtf-tabs.edgtf-vertical-tab .edgtf-tabs-nav li.ui-state-active a,.edgtf-tabs.edgtf-vertical-tab .edgtf-tabs-nav li.ui-state-hover a',
				'.edgtf-blog-list-holder.edgtf-standard .edgtf-blog-list-read-more:after',
				'.edgtf-blog-slider .edgtf-blog-slide-post-info>div',
				'.edgtf-btn.edgtf-btn-transparent .edgtf-btn-text:after',
				'.edgtf-portfolio-list-holder article .edgtf-separator',
				'.edgtf-portfolio-list-holder-outer.edgtf-ptf-standard article .edgtf-item-text-holder .edgtf-item-title span.edgtf-item-title-inner:after',
				'.edgtf-shop-masonry .edgtf-separator',
				'.edgtf-single-product-wrapper-top .edgtf-tabs.edgtf-horizontal-tab .edgtf-tabs-nav li.ui-state-active a,.edgtf-single-product-wrapper-top .edgtf-tabs.edgtf-horizontal-tab .edgtf-tabs-nav li.ui-state-hover a'
			);

	        $border_right_selector = array(
				'.edgtf-blog-list-holder .edgtf-item-info-section>div',
				'.edgtf-blog-holder article .edgtf-post-info>div'
			);

	        $border_top_selector = array(
				'.edgtf-testimonials.edgtf-testimonials-type-carousel .edgtf-testimonial-text-holder .edgtf-testimonial-arrow'
			);

	        echo cozy_edge_dynamic_css($color_selector, array('color' => cozy_edge_options()->getOptionValue('first_color')));
            echo cozy_edge_dynamic_css($color_important_selector, array('color' => cozy_edge_options()->getOptionValue('first_color').'!important'));
            echo cozy_edge_dynamic_css('::selection', array('background' => cozy_edge_options()->getOptionValue('first_color')));
            echo cozy_edge_dynamic_css('::-moz-selection', array('background' => cozy_edge_options()->getOptionValue('first_color')));
            echo cozy_edge_dynamic_css($background_color_selector, array('background-color' => cozy_edge_options()->getOptionValue('first_color')));
            echo cozy_edge_dynamic_css($background_color_important_selector, array('background-color' => cozy_edge_options()->getOptionValue('first_color').'!important'));
            echo cozy_edge_dynamic_css($border_color_selector, array('border-color' => cozy_edge_options()->getOptionValue('first_color')));
            echo cozy_edge_dynamic_css($border_color_important_selector, array('border-color' => cozy_edge_options()->getOptionValue('first_color').'!important'));
	        echo cozy_edge_dynamic_css($border_bottom_color_selector, array('border-bottom-color' => cozy_edge_options()->getOptionValue('first_color')));
	        echo cozy_edge_dynamic_css($border_right_selector, array('border-right-color' => cozy_edge_options()->getOptionValue('first_color')));
	        echo cozy_edge_dynamic_css($border_top_selector, array('border-top-color' => cozy_edge_options()->getOptionValue('first_color')));
        }

		if(cozy_edge_options()->getOptionValue('second_color') !== "") {
			$color_selector = array(
				'.edgtf-drop-down .edgtf-menu-second .edgtf-menu-inner ul li.edgtf-sub a i.edgtf-menu-arrow',
				'.edgtf-title-with-number .edgtf-twn-number',
				'.star-rating span'
			);

			$color_important_selector = "";

			$background_color_selector = array(
				'.edgtf-3d-cube-holder .edgtf-3d-cube>div:nth-child(1)',
				'.edgtf-3d-cube-holder .edgtf-3d-cube>div:nth-child(3)',
				'.edgtf-price-table.edgtf-active .edgtf-table-title',
				'.edgtf-shop-masonry .edgtf-product-badge'
			);

			$background_color_important_selector = "";

			$border_color_selector = array(
				'.edgtf-page-not-found .edgtf-separator'
			);

			$border_color_important_selector = "";

			$border_bottom_color_selector = array(
				'.edgtf-title .edgtf-separator',
				'.edgtf-accordion-holder .edgtf-title-holder.ui-state-active',
				'.edgtf-sidebar .edgtf-separator-holder .edgtf-separator'
			);

			$border_top_selector = array(
				'.edgtf-drop-down .edgtf-menu-second',
				'.edgtf-drop-down .edgtf-menu-narrow .edgtf-menu-second .edgtf-menu-inner ul li ul',
				'.edgtf-shopping-cart-dropdown'
			);

			$border_left_selector = array(
				'blockquote'
			);

			echo cozy_edge_dynamic_css($color_selector, array('color' => cozy_edge_options()->getOptionValue('second_color')));
			echo cozy_edge_dynamic_css($color_important_selector, array('color' => cozy_edge_options()->getOptionValue('second_color').'!important'));
			echo cozy_edge_dynamic_css('::selection', array('background' => cozy_edge_options()->getOptionValue('second_color')));
			echo cozy_edge_dynamic_css('::-moz-selection', array('background' => cozy_edge_options()->getOptionValue('second_color')));
			echo cozy_edge_dynamic_css($background_color_selector, array('background-color' => cozy_edge_options()->getOptionValue('second_color')));
			echo cozy_edge_dynamic_css($background_color_important_selector, array('background-color' => cozy_edge_options()->getOptionValue('second_color').'!important'));
			echo cozy_edge_dynamic_css($border_color_selector, array('border-color' => cozy_edge_options()->getOptionValue('second_color')));
			echo cozy_edge_dynamic_css($border_color_important_selector, array('border-color' => cozy_edge_options()->getOptionValue('second_color').'!important'));
			echo cozy_edge_dynamic_css($border_bottom_color_selector, array('border-bottom-color' => cozy_edge_options()->getOptionValue('second_color')));
			echo cozy_edge_dynamic_css($border_top_selector, array('border-top-color' => cozy_edge_options()->getOptionValue('second_color')));
			echo cozy_edge_dynamic_css($border_left_selector, array('border-left-color' => cozy_edge_options()->getOptionValue('second_color')));
		}

		if (cozy_edge_options()->getOptionValue('page_background_color')) {
			$background_color_selector = array(
                '.edgtf-content .edgtf-content-inner > .edgtf-container',
                '.edgtf-content .edgtf-content-inner > .edgtf-full-width'
			);
			echo cozy_edge_dynamic_css($background_color_selector, array('background-color' => cozy_edge_options()->getOptionValue('page_background_color')));
		}

		if (cozy_edge_options()->getOptionValue('selection_color')) {
			echo cozy_edge_dynamic_css('::selection', array('background' => cozy_edge_options()->getOptionValue('selection_color')));
			echo cozy_edge_dynamic_css('::-moz-selection', array('background' => cozy_edge_options()->getOptionValue('selection_color')));
		}

		$boxed_background_style = array();
		if (cozy_edge_options()->getOptionValue('page_background_color_in_box')) {
			$boxed_background_style['background-color'] = cozy_edge_options()->getOptionValue('page_background_color_in_box');
		}

		if (cozy_edge_options()->getOptionValue('boxed_background_image')) {
			$boxed_background_style['background-image'] = 'url('.esc_url(cozy_edge_options()->getOptionValue('boxed_background_image')).')';
			$boxed_background_style['background-position'] = 'center 0px';
			$boxed_background_style['background-repeat'] = 'no-repeat';
		}

		if (cozy_edge_options()->getOptionValue('boxed_pattern_background_image')) {
			$boxed_background_style['background-image'] = 'url('.esc_url(cozy_edge_options()->getOptionValue('boxed_pattern_background_image')).')';
			$boxed_background_style['background-position'] = '0px 0px';
			$boxed_background_style['background-repeat'] = 'repeat';
		}

		if (cozy_edge_options()->getOptionValue('boxed_background_image_attachment')) {
			$boxed_background_style['background-attachment'] = (cozy_edge_options()->getOptionValue('boxed_background_image_attachment'));
		}

		echo cozy_edge_dynamic_css('.edgtf-boxed .edgtf-wrapper', $boxed_background_style);
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_design_styles');
}

if (!function_exists('cozy_edge_h1_styles')) {

    function cozy_edge_h1_styles() {

        $h1_styles = array();

        if(cozy_edge_options()->getOptionValue('h1_color') !== '') {
            $h1_styles['color'] = cozy_edge_options()->getOptionValue('h1_color');
        }
        if(cozy_edge_options()->getOptionValue('h1_google_fonts') !== '-1') {
            $h1_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('h1_google_fonts'));
        }
        if(cozy_edge_options()->getOptionValue('h1_fontsize') !== '') {
            $h1_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h1_fontsize')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h1_lineheight') !== '') {
            $h1_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h1_lineheight')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h1_texttransform') !== '') {
            $h1_styles['text-transform'] = cozy_edge_options()->getOptionValue('h1_texttransform');
        }
        if(cozy_edge_options()->getOptionValue('h1_fontstyle') !== '') {
            $h1_styles['font-style'] = cozy_edge_options()->getOptionValue('h1_fontstyle');
        }
        if(cozy_edge_options()->getOptionValue('h1_fontweight') !== '') {
            $h1_styles['font-weight'] = cozy_edge_options()->getOptionValue('h1_fontweight');
        }
        if(cozy_edge_options()->getOptionValue('h1_letterspacing') !== '') {
            $h1_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h1_letterspacing')).'px';
        }

        $h1_selector = array(
            'h1'
        );

        if (!empty($h1_styles)) {
            echo cozy_edge_dynamic_css($h1_selector, $h1_styles);
        }
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_h1_styles');
}

if (!function_exists('cozy_edge_h2_styles')) {

    function cozy_edge_h2_styles() {

        $h2_styles = array();

        if(cozy_edge_options()->getOptionValue('h2_color') !== '') {
            $h2_styles['color'] = cozy_edge_options()->getOptionValue('h2_color');
        }
        if(cozy_edge_options()->getOptionValue('h2_google_fonts') !== '-1') {
            $h2_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('h2_google_fonts'));
        }
        if(cozy_edge_options()->getOptionValue('h2_fontsize') !== '') {
            $h2_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h2_fontsize')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h2_lineheight') !== '') {
            $h2_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h2_lineheight')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h2_texttransform') !== '') {
            $h2_styles['text-transform'] = cozy_edge_options()->getOptionValue('h2_texttransform');
        }
        if(cozy_edge_options()->getOptionValue('h2_fontstyle') !== '') {
            $h2_styles['font-style'] = cozy_edge_options()->getOptionValue('h2_fontstyle');
        }
        if(cozy_edge_options()->getOptionValue('h2_fontweight') !== '') {
            $h2_styles['font-weight'] = cozy_edge_options()->getOptionValue('h2_fontweight');
        }
        if(cozy_edge_options()->getOptionValue('h2_letterspacing') !== '') {
            $h2_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h2_letterspacing')).'px';
        }

        $h2_selector = array(
            'h2'
        );

        if (!empty($h2_styles)) {
            echo cozy_edge_dynamic_css($h2_selector, $h2_styles);
        }
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_h2_styles');
}

if (!function_exists('cozy_edge_h3_styles')) {

    function cozy_edge_h3_styles() {

        $h3_styles = array();

        if(cozy_edge_options()->getOptionValue('h3_color') !== '') {
            $h3_styles['color'] = cozy_edge_options()->getOptionValue('h3_color');
        }
        if(cozy_edge_options()->getOptionValue('h3_google_fonts') !== '-1') {
            $h3_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('h3_google_fonts'));
        }
        if(cozy_edge_options()->getOptionValue('h3_fontsize') !== '') {
            $h3_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h3_fontsize')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h3_lineheight') !== '') {
            $h3_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h3_lineheight')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h3_texttransform') !== '') {
            $h3_styles['text-transform'] = cozy_edge_options()->getOptionValue('h3_texttransform');
        }
        if(cozy_edge_options()->getOptionValue('h3_fontstyle') !== '') {
            $h3_styles['font-style'] = cozy_edge_options()->getOptionValue('h3_fontstyle');
        }
        if(cozy_edge_options()->getOptionValue('h3_fontweight') !== '') {
            $h3_styles['font-weight'] = cozy_edge_options()->getOptionValue('h3_fontweight');
        }
        if(cozy_edge_options()->getOptionValue('h3_letterspacing') !== '') {
            $h3_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h3_letterspacing')).'px';
        }

        $h3_selector = array(
            'h3'
        );

        if (!empty($h3_styles)) {
            echo cozy_edge_dynamic_css($h3_selector, $h3_styles);
        }
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_h3_styles');
}

if (!function_exists('cozy_edge_h4_styles')) {

    function cozy_edge_h4_styles() {

        $h4_styles = array();

        if(cozy_edge_options()->getOptionValue('h4_color') !== '') {
            $h4_styles['color'] = cozy_edge_options()->getOptionValue('h4_color');
        }
        if(cozy_edge_options()->getOptionValue('h4_google_fonts') !== '-1') {
            $h4_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('h4_google_fonts'));
        }
        if(cozy_edge_options()->getOptionValue('h4_fontsize') !== '') {
            $h4_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h4_fontsize')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h4_lineheight') !== '') {
            $h4_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h4_lineheight')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h4_texttransform') !== '') {
            $h4_styles['text-transform'] = cozy_edge_options()->getOptionValue('h4_texttransform');
        }
        if(cozy_edge_options()->getOptionValue('h4_fontstyle') !== '') {
            $h4_styles['font-style'] = cozy_edge_options()->getOptionValue('h4_fontstyle');
        }
        if(cozy_edge_options()->getOptionValue('h4_fontweight') !== '') {
            $h4_styles['font-weight'] = cozy_edge_options()->getOptionValue('h4_fontweight');
        }
        if(cozy_edge_options()->getOptionValue('h4_letterspacing') !== '') {
            $h4_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h4_letterspacing')).'px';
        }

        $h4_selector = array(
            'h4',
	        'h4.ui-helper-reset'
        );

        if (!empty($h4_styles)) {
            echo cozy_edge_dynamic_css($h4_selector, $h4_styles);
        }
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_h4_styles');
}

if (!function_exists('cozy_edge_h5_styles')) {

    function cozy_edge_h5_styles() {

        $h5_styles = array();

        if(cozy_edge_options()->getOptionValue('h5_color') !== '') {
            $h5_styles['color'] = cozy_edge_options()->getOptionValue('h5_color');
        }
        if(cozy_edge_options()->getOptionValue('h5_google_fonts') !== '-1') {
            $h5_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('h5_google_fonts'));
        }
        if(cozy_edge_options()->getOptionValue('h5_fontsize') !== '') {
            $h5_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h5_fontsize')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h5_lineheight') !== '') {
            $h5_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h5_lineheight')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h5_texttransform') !== '') {
            $h5_styles['text-transform'] = cozy_edge_options()->getOptionValue('h5_texttransform');
        }
        if(cozy_edge_options()->getOptionValue('h5_fontstyle') !== '') {
            $h5_styles['font-style'] = cozy_edge_options()->getOptionValue('h5_fontstyle');
        }
        if(cozy_edge_options()->getOptionValue('h5_fontweight') !== '') {
            $h5_styles['font-weight'] = cozy_edge_options()->getOptionValue('h5_fontweight');
        }
        if(cozy_edge_options()->getOptionValue('h5_letterspacing') !== '') {
            $h5_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h5_letterspacing')).'px';
        }

        $h5_selector = array(
            'h5'
        );

        if (!empty($h5_styles)) {
            echo cozy_edge_dynamic_css($h5_selector, $h5_styles);
        }
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_h5_styles');
}

if (!function_exists('cozy_edge_h6_styles')) {

    function cozy_edge_h6_styles() {

        $h6_styles = array();

        if(cozy_edge_options()->getOptionValue('h6_color') !== '') {
            $h6_styles['color'] = cozy_edge_options()->getOptionValue('h6_color');
        }
        if(cozy_edge_options()->getOptionValue('h6_google_fonts') !== '-1') {
            $h6_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('h6_google_fonts'));
        }
        if(cozy_edge_options()->getOptionValue('h6_fontsize') !== '') {
            $h6_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h6_fontsize')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h6_lineheight') !== '') {
            $h6_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h6_lineheight')).'px';
        }
        if(cozy_edge_options()->getOptionValue('h6_texttransform') !== '') {
            $h6_styles['text-transform'] = cozy_edge_options()->getOptionValue('h6_texttransform');
        }
        if(cozy_edge_options()->getOptionValue('h6_fontstyle') !== '') {
            $h6_styles['font-style'] = cozy_edge_options()->getOptionValue('h6_fontstyle');
        }
        if(cozy_edge_options()->getOptionValue('h6_fontweight') !== '') {
            $h6_styles['font-weight'] = cozy_edge_options()->getOptionValue('h6_fontweight');
        }
        if(cozy_edge_options()->getOptionValue('h6_letterspacing') !== '') {
            $h6_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('h6_letterspacing')).'px';
        }

        $h6_selector = array(
            'h6'
        );

        if (!empty($h6_styles)) {
            echo cozy_edge_dynamic_css($h6_selector, $h6_styles);
        }
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_h6_styles');
}

if (!function_exists('cozy_edge_predefined_h1_styles')) {

	function cozy_edge_predefined_h1_styles() {

		$predefined_h1_styles = array();

		if(cozy_edge_options()->getOptionValue('predefined_h1_color') !== '') {
			$predefined_h1_styles['color'] = cozy_edge_options()->getOptionValue('predefined_h1_color');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h1_google_fonts') !== '-1') {
			$predefined_h1_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('predefined_h1_google_fonts'));
		}
		if(cozy_edge_options()->getOptionValue('predefined_h1_fontsize') !== '') {
			$predefined_h1_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h1_fontsize')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h1_lineheight') !== '') {
			$predefined_h1_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h1_lineheight')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h1_texttransform') !== '') {
			$predefined_h1_styles['text-transform'] = cozy_edge_options()->getOptionValue('predefined_h1_texttransform');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h1_fontstyle') !== '') {
			$predefined_h1_styles['font-style'] = cozy_edge_options()->getOptionValue('predefined_h1_fontstyle');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h1_fontweight') !== '') {
			$predefined_h1_styles['font-weight'] = cozy_edge_options()->getOptionValue('predefined_h1_fontweight');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h1_letterspacing') !== '') {
			$predefined_h1_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h1_letterspacing')).'px';
		}

		$predefined_h1_selector = array(
			'.edgtf-h-style-1 h1'
		);

		if (!empty($predefined_h1_styles)) {
			echo cozy_edge_dynamic_css($predefined_h1_selector, $predefined_h1_styles);
		}
	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_predefined_h1_styles');
}

if (!function_exists('cozy_edge_predefined_h2_styles')) {

	function cozy_edge_predefined_h2_styles() {

		$predefined_h2_styles = array();

		if(cozy_edge_options()->getOptionValue('predefined_h2_color') !== '') {
			$predefined_h2_styles['color'] = cozy_edge_options()->getOptionValue('predefined_h2_color');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h2_google_fonts') !== '-1') {
			$predefined_h2_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('predefined_h2_google_fonts'));
		}
		if(cozy_edge_options()->getOptionValue('predefined_h2_fontsize') !== '') {
			$predefined_h2_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h2_fontsize')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h2_lineheight') !== '') {
			$predefined_h2_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h2_lineheight')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h2_texttransform') !== '') {
			$predefined_h2_styles['text-transform'] = cozy_edge_options()->getOptionValue('predefined_h2_texttransform');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h2_fontstyle') !== '') {
			$predefined_h2_styles['font-style'] = cozy_edge_options()->getOptionValue('predefined_h2_fontstyle');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h2_fontweight') !== '') {
			$predefined_h2_styles['font-weight'] = cozy_edge_options()->getOptionValue('predefined_h2_fontweight');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h2_letterspacing') !== '') {
			$predefined_h2_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h2_letterspacing')).'px';
		}

		$predefined_h2_selector = array(
			'.edgtf-h-style-1 h2'
		);

		if (!empty($predefined_h2_styles)) {
			echo cozy_edge_dynamic_css($predefined_h2_selector, $predefined_h2_styles);
		}
	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_predefined_h2_styles');
}

if (!function_exists('cozy_edge_predefined_h3_styles')) {

	function cozy_edge_predefined_h3_styles() {

		$predefined_h3_styles = array();

		if(cozy_edge_options()->getOptionValue('predefined_h3_color') !== '') {
			$predefined_h3_styles['color'] = cozy_edge_options()->getOptionValue('predefined_h3_color');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h3_google_fonts') !== '-1') {
			$predefined_h3_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('predefined_h3_google_fonts'));
		}
		if(cozy_edge_options()->getOptionValue('predefined_h3_fontsize') !== '') {
			$predefined_h3_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h3_fontsize')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h3_lineheight') !== '') {
			$predefined_h3_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h3_lineheight')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h3_texttransform') !== '') {
			$predefined_h3_styles['text-transform'] = cozy_edge_options()->getOptionValue('predefined_h3_texttransform');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h3_fontstyle') !== '') {
			$predefined_h3_styles['font-style'] = cozy_edge_options()->getOptionValue('predefined_h3_fontstyle');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h3_fontweight') !== '') {
			$predefined_h3_styles['font-weight'] = cozy_edge_options()->getOptionValue('predefined_h3_fontweight');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h3_letterspacing') !== '') {
			$predefined_h3_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h3_letterspacing')).'px';
		}

		$predefined_h3_selector = array(
			'.edgtf-h-style-1 h3'
		);

		if (!empty($predefined_h3_styles)) {
			echo cozy_edge_dynamic_css($predefined_h3_selector, $predefined_h3_styles);
		}
	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_predefined_h3_styles');
}

if (!function_exists('cozy_edge_predefined_h4_styles')) {

	function cozy_edge_predefined_h4_styles() {

		$predefined_h4_styles = array();

		if(cozy_edge_options()->getOptionValue('predefined_h4_color') !== '') {
			$predefined_h4_styles['color'] = cozy_edge_options()->getOptionValue('predefined_h4_color');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h4_google_fonts') !== '-1') {
			$predefined_h4_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('predefined_h4_google_fonts'));
		}
		if(cozy_edge_options()->getOptionValue('predefined_h4_fontsize') !== '') {
			$predefined_h4_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h4_fontsize')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h4_lineheight') !== '') {
			$predefined_h4_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h4_lineheight')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h4_texttransform') !== '') {
			$predefined_h4_styles['text-transform'] = cozy_edge_options()->getOptionValue('predefined_h4_texttransform');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h4_fontstyle') !== '') {
			$predefined_h4_styles['font-style'] = cozy_edge_options()->getOptionValue('predefined_h4_fontstyle');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h4_fontweight') !== '') {
			$predefined_h4_styles['font-weight'] = cozy_edge_options()->getOptionValue('predefined_h4_fontweight');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h4_letterspacing') !== '') {
			$predefined_h4_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h4_letterspacing')).'px';
		}

		$predefined_h4_selector = array(
			'.edgtf-h-style-1 h4'
		);

		if (!empty($predefined_h4_styles)) {
			echo cozy_edge_dynamic_css($predefined_h4_selector, $predefined_h4_styles);
		}
	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_predefined_h4_styles');
}

if (!function_exists('cozy_edge_predefined_h5_styles')) {

	function cozy_edge_predefined_h5_styles() {

		$predefined_h5_styles = array();

		if(cozy_edge_options()->getOptionValue('predefined_h5_color') !== '') {
			$predefined_h5_styles['color'] = cozy_edge_options()->getOptionValue('predefined_h5_color');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h5_google_fonts') !== '-1') {
			$predefined_h5_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('predefined_h5_google_fonts'));
		}
		if(cozy_edge_options()->getOptionValue('predefined_h5_fontsize') !== '') {
			$predefined_h5_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h5_fontsize')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h5_lineheight') !== '') {
			$predefined_h5_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h5_lineheight')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h5_texttransform') !== '') {
			$predefined_h5_styles['text-transform'] = cozy_edge_options()->getOptionValue('predefined_h5_texttransform');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h5_fontstyle') !== '') {
			$predefined_h5_styles['font-style'] = cozy_edge_options()->getOptionValue('predefined_h5_fontstyle');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h5_fontweight') !== '') {
			$predefined_h5_styles['font-weight'] = cozy_edge_options()->getOptionValue('predefined_h5_fontweight');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h5_letterspacing') !== '') {
			$predefined_h5_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h5_letterspacing')).'px';
		}

		$predefined_h5_selector = array(
			'.edgtf-h-style-1 h5'
		);

		if (!empty($predefined_h5_styles)) {
			echo cozy_edge_dynamic_css($predefined_h5_selector, $predefined_h5_styles);
		}
	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_predefined_h5_styles');
}

if (!function_exists('cozy_edge_predefined_h6_styles')) {

	function cozy_edge_predefined_h6_styles() {

		$predefined_h6_styles = array();

		if(cozy_edge_options()->getOptionValue('predefined_h6_color') !== '') {
			$predefined_h6_styles['color'] = cozy_edge_options()->getOptionValue('predefined_h6_color');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h6_google_fonts') !== '-1') {
			$predefined_h6_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('predefined_h6_google_fonts'));
		}
		if(cozy_edge_options()->getOptionValue('predefined_h6_fontsize') !== '') {
			$predefined_h6_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h6_fontsize')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h6_lineheight') !== '') {
			$predefined_h6_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h6_lineheight')).'px';
		}
		if(cozy_edge_options()->getOptionValue('predefined_h6_texttransform') !== '') {
			$predefined_h6_styles['text-transform'] = cozy_edge_options()->getOptionValue('predefined_h6_texttransform');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h6_fontstyle') !== '') {
			$predefined_h6_styles['font-style'] = cozy_edge_options()->getOptionValue('predefined_h6_fontstyle');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h6_fontweight') !== '') {
			$predefined_h6_styles['font-weight'] = cozy_edge_options()->getOptionValue('predefined_h6_fontweight');
		}
		if(cozy_edge_options()->getOptionValue('predefined_h6_letterspacing') !== '') {
			$predefined_h6_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('predefined_h6_letterspacing')).'px';
		}

		$predefined_h6_selector = array(
			'.edgtf-h-style-1 h6'
		);

		if (!empty($predefined_h6_styles)) {
			echo cozy_edge_dynamic_css($predefined_h6_selector, $predefined_h6_styles);
		}
	}

	add_action('cozy_edge_style_dynamic', 'cozy_edge_predefined_h6_styles');
}

if (!function_exists('cozy_edge_text_styles')) {

    function cozy_edge_text_styles() {

        $text_styles = array();

        if(cozy_edge_options()->getOptionValue('text_color') !== '') {
            $text_styles['color'] = cozy_edge_options()->getOptionValue('text_color');
        }
        if(cozy_edge_options()->getOptionValue('text_google_fonts') !== '-1') {
            $text_styles['font-family'] = cozy_edge_get_formatted_font_family(cozy_edge_options()->getOptionValue('text_google_fonts'));
        }
        if(cozy_edge_options()->getOptionValue('text_fontsize') !== '') {
            $text_styles['font-size'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('text_fontsize')).'px';
        }
        if(cozy_edge_options()->getOptionValue('text_lineheight') !== '') {
            $text_styles['line-height'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('text_lineheight')).'px';
        }
        if(cozy_edge_options()->getOptionValue('text_texttransform') !== '') {
            $text_styles['text-transform'] = cozy_edge_options()->getOptionValue('text_texttransform');
        }
        if(cozy_edge_options()->getOptionValue('text_fontstyle') !== '') {
            $text_styles['font-style'] = cozy_edge_options()->getOptionValue('text_fontstyle');
        }
        if(cozy_edge_options()->getOptionValue('text_fontweight') !== '') {
            $text_styles['font-weight'] = cozy_edge_options()->getOptionValue('text_fontweight');
        }
        if(cozy_edge_options()->getOptionValue('text_letterspacing') !== '') {
            $text_styles['letter-spacing'] = cozy_edge_filter_px(cozy_edge_options()->getOptionValue('text_letterspacing')).'px';
        }

        $text_selector = array(
            'p'
        );

        if (!empty($text_styles)) {
            echo cozy_edge_dynamic_css($text_selector, $text_styles);
        }
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_text_styles');
}

if (!function_exists('cozy_edge_link_styles')) {

    function cozy_edge_link_styles() {

        $link_styles = array();

        if(cozy_edge_options()->getOptionValue('link_color') !== '') {
            $link_styles['color'] = cozy_edge_options()->getOptionValue('link_color');
        }
        if(cozy_edge_options()->getOptionValue('link_fontstyle') !== '') {
            $link_styles['font-style'] = cozy_edge_options()->getOptionValue('link_fontstyle');
        }
        if(cozy_edge_options()->getOptionValue('link_fontweight') !== '') {
            $link_styles['font-weight'] = cozy_edge_options()->getOptionValue('link_fontweight');
        }
        if(cozy_edge_options()->getOptionValue('link_fontdecoration') !== '') {
            $link_styles['text-decoration'] = cozy_edge_options()->getOptionValue('link_fontdecoration');
        }

        $link_selector = array(
            'a',
            'p a'
        );

        if (!empty($link_styles)) {
            echo cozy_edge_dynamic_css($link_selector, $link_styles);
        }
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_link_styles');
}

if (!function_exists('cozy_edge_link_hover_styles')) {

    function cozy_edge_link_hover_styles() {

        $link_hover_styles = array();

        if(cozy_edge_options()->getOptionValue('link_hovercolor') !== '') {
            $link_hover_styles['color'] = cozy_edge_options()->getOptionValue('link_hovercolor');
        }
        if(cozy_edge_options()->getOptionValue('link_hover_fontdecoration') !== '') {
            $link_hover_styles['text-decoration'] = cozy_edge_options()->getOptionValue('link_hover_fontdecoration');
        }

        $link_hover_selector = array(
            'a:hover',
            'p a:hover'
        );

        if (!empty($link_hover_styles)) {
            echo cozy_edge_dynamic_css($link_hover_selector, $link_hover_styles);
        }

        $link_heading_hover_styles = array();

        if(cozy_edge_options()->getOptionValue('link_hovercolor') !== '') {
            $link_heading_hover_styles['color'] = cozy_edge_options()->getOptionValue('link_hovercolor');
        }

        $link_heading_hover_selector = array(
            'h1 a:hover',
            'h2 a:hover',
            'h3 a:hover',
            'h4 a:hover',
            'h5 a:hover',
            'h6 a:hover'
        );

        if (!empty($link_heading_hover_styles)) {
            echo cozy_edge_dynamic_css($link_heading_hover_selector, $link_heading_hover_styles);
        }
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_link_hover_styles');
}

if (!function_exists('cozy_edge_smooth_page_transition_styles')) {

    function cozy_edge_smooth_page_transition_styles() {
        
        $loader_style = array();

        if(cozy_edge_options()->getOptionValue('smooth_pt_bgnd_color') !== '') {
            $loader_style['background-color'] = cozy_edge_options()->getOptionValue('smooth_pt_bgnd_color');
        }

        $loader_selector = array('.edgtf-smooth-transition-loader');

        if (!empty($loader_style)) {
            echo cozy_edge_dynamic_css($loader_selector, $loader_style);
        }

        $spinner_style = array();

        if(cozy_edge_options()->getOptionValue('smooth_pt_spinner_color') !== '') {
            $spinner_style['background-color'] = cozy_edge_options()->getOptionValue('smooth_pt_spinner_color');
        }

        $spinner_selectors = array(
            '.edgtf-st-loader .pulse',
            '.edgtf-st-loader .double_pulse .double-bounce1',
            '.edgtf-st-loader .double_pulse .double-bounce2',
            '.edgtf-st-loader .cube',
            '.edgtf-st-loader .rotating_cubes .cube1',
            '.edgtf-st-loader .rotating_cubes .cube2',
            '.edgtf-st-loader .stripes > div',
            '.edgtf-st-loader .wave > div',
            '.edgtf-st-loader .two_rotating_circles .dot1',
            '.edgtf-st-loader .two_rotating_circles .dot2',
            '.edgtf-st-loader .five_rotating_circles .container1 > div',
            '.edgtf-st-loader .five_rotating_circles .container2 > div',
            '.edgtf-st-loader .five_rotating_circles .container3 > div',
            '.edgtf-st-loader .atom .ball-1:before',
            '.edgtf-st-loader .atom .ball-2:before',
            '.edgtf-st-loader .atom .ball-3:before',
            '.edgtf-st-loader .atom .ball-4:before',
            '.edgtf-st-loader .clock .ball:before',
            '.edgtf-st-loader .mitosis .ball',
            '.edgtf-st-loader .lines .line1',
            '.edgtf-st-loader .lines .line2',
            '.edgtf-st-loader .lines .line3',
            '.edgtf-st-loader .lines .line4',
            '.edgtf-st-loader .fussion .ball',
            '.edgtf-st-loader .fussion .ball-1',
            '.edgtf-st-loader .fussion .ball-2',
            '.edgtf-st-loader .fussion .ball-3',
            '.edgtf-st-loader .fussion .ball-4',
            '.edgtf-st-loader .wave_circles .ball',
            '.edgtf-st-loader .pulse_circles .ball'
        );

        if (!empty($spinner_style)) {
            echo cozy_edge_dynamic_css($spinner_selectors, $spinner_style);
        }

		$spinner_color = cozy_edge_options()->getOptionValue('smooth_pt_spinner_color');
		if($spinner_color != ''){
			echo "@-webkit-keyframes edgtfNodes { 0% {  background-color: #000;  } 30% {  background-color:".$spinner_color ."} 70% {  background-color:#000} }\n";
			echo "@keyframes edgtfNodes {  0% {  background-color: #000;  } 30% {  background-color:".$spinner_color ."} 70% {  background-color:#000} }\n";
		}

		//color spinner
		if(cozy_edge_options()->getOptionValue('smooth_pt_spinner_type') == '3d_cube') {
			$first_cs_color = array();

			if(cozy_edge_options()->getOptionValue('smooth_pt_spinner_color') !== '') {
			    $first_cs_color['background-color'] = cozy_edge_options()->getOptionValue('smooth_pt_spinner_color');
			}

			$first_cs_selector = array('.edgtf-3d-cube-holder .edgtf-3d-cube > div:nth-child(5), 
										.edgtf-3d-cube-holder .edgtf-3d-cube > div:nth-child(6)');

			if (!empty($first_cs_selector)) {
			    echo cozy_edge_dynamic_css($first_cs_selector, $first_cs_color);
			}

			$first_additional_color = array();

			if(cozy_edge_options()->getOptionValue('additional_color_1') !== '') {
			    $first_additional_color['background-color'] = cozy_edge_options()->getOptionValue('additional_color_1');
			}

			$second_cs_selector = array('.edgtf-3d-cube-holder .edgtf-3d-cube > div:nth-child(1),
										.edgtf-3d-cube-holder .edgtf-3d-cube > div:nth-child(3)');

			if (!empty($second_cs_selector)) {
			    echo cozy_edge_dynamic_css($second_cs_selector, $first_additional_color);
			}

			$second_additional_color = array();

			if(cozy_edge_options()->getOptionValue('additional_color_1') !== '') {
			    $second_additional_color['background-color'] = cozy_edge_options()->getOptionValue('additional_color_2');
			}

			$third_cs_selector = array('.edgtf-3d-cube-holder .edgtf-3d-cube > div:nth-child(2),
										.edgtf-3d-cube-holder .edgtf-3d-cube > div:nth-child(4)');

			if (!empty($third_cs_selector)) {
			    echo cozy_edge_dynamic_css($third_cs_selector, $second_additional_color);
			}
		}
    }

    add_action('cozy_edge_style_dynamic', 'cozy_edge_smooth_page_transition_styles');
}