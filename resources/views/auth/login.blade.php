@extends('layouts.app')

@section('content')

<body
	class="page-template-default page page-id-737 wp-embed-responsive theme-newsblock woocommerce-account woocommerce-page woocommerce-no-js cs-page-layout-disabled cs-navbar-sticky-enabled cs-navbar-smart-enabled cs-sticky-sidebar-enabled cs-stick-to-bottom"
	data-scheme='default' site-data-scheme='default'>



	<main id="main" class="cs-site-primary">


		<div class="cs-site-content cs-sidebar-disabled cs-metabar-disabled section-heading-default-style-1">


			<div class="cs-container">


				<div id="content" class="cs-main-content">


					<div id="primary" class="cs-content-area" style="margin-left: 10%; margin-right: 10%;">

						<div class="cs-entry__wrap">


							<div class="cs-entry__container">


								<div class="cs-entry__content-wrap">

									<div class="entry-content">
										<div class="woocommerce">
											<div class="woocommerce-notices-wrapper"></div>

											<h2 id="login">Kirish</h2>

											<form class="woocommerce-form woocommerce-form-login login" method="POST"
												action="{{ route('login') }}">
												@csrf
												@error('email')
												<div
													class="cnvs-block-alert cnvs-block-alert-1564564702831 is-style-cnvs-block-alert-danger cnvs-block-alert-dismissible">
													<div class="cnvs-block-alert-inner">
														<p>{{ $message }}</p>
													</div> <button class="cnvs-close" type="button" data-dismiss="alert"
														aria-label="Close"> <i class="cnvs-icon-x"></i> </button>
												</div>
												@enderror

												@error('password')
												<div
													class="cnvs-block-alert cnvs-block-alert-1564564702831 is-style-cnvs-block-alert-danger cnvs-block-alert-dismissible">
													<div class="cnvs-block-alert-inner">
														<p>{{ $message }}</p>
													</div> <button class="cnvs-close" type="button" data-dismiss="alert"
														aria-label="Close"> <i class="cnvs-icon-x"></i> </button>
												</div>
												@enderror

												<p
													class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="username">Email&nbsp;<span
															class="required">*</span></label>
													<input type="email"
														class="woocommerce-Input woocommerce-Input--text input-text"
														name="email" id="username" autocomplete="Email"
														placeholder="Email manzilini kiriting"
														value="{{ old('email') }}" />
												</p>
												<p
													class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
													<label for="password">Parol&nbsp;<span
															class="required">*</span></label>
													<input class="woocommerce-Input woocommerce-Input--text input-text"
														type="password" name="password" id="password"
														placeholder="Parolni kiriting" autocomplete="current-password"
														value="{{ old('password') }}" />
												</p>


												<p class="form-row">
													<button type="submit"
														class="woocommerce-button button woocommerce-form-login__submit"
														name="login" value="Log in">Kirish</button>
												</p>
												<p class="woocommerce-LostPassword lost_password">
													<a href="{{ route('register') }}">Yangimisiz? Ro'yxatdan o'ting!</a>
												</p>


											</form>


										</div>
									</div>

								</div>


							</div>

						</div>




					</div>



				</div>


			</div>


		</div>


	</main>



	@include('layouts.footer')


	</div>


	</div>


	<a href="#top" class="pk-scroll-to-top">
		<i class="pk-icon pk-icon-up"></i>
	</a>
	<div id="fb-root"></div>
	<script>(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "../../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=305449883698649";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
	<script>
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})()
	</script>
	<script src='../wp-content/plugins/canvas/components/basic-elements/block-alert/public-block-alert3c94.js?ver=2.1.0'
		id='canvas-block-alert-script-js'></script>
	<script
		src='../wp-content/plugins/canvas/components/basic-elements/block-collapsibles/public-block-collapsibles3c94.js?ver=2.1.0'
		id='canvas-block-collapsibles-script-js'></script>
	<script src='../wp-content/plugins/canvas/components/basic-elements/block-tabs/public-block-tabs3c94.js?ver=2.1.0'
		id='canvas-block-tabs-script-js'></script>
	<script
		src='../wp-content/plugins/canvas/components/justified-gallery/block/jquery.justifiedGallery.min3c94.js?ver=2.1.0'
		id='justifiedgallery-js'></script>
	<script id='canvas-justified-gallery-js-extra'>
		var canvasJG = { "rtl": "" };
	</script>
	<script
		src='../wp-content/plugins/canvas/components/justified-gallery/block/public-block-justified-gallery3c94.js?ver=2.1.0'
		id='canvas-justified-gallery-js'></script>
	<script src='../wp-includes/js/imagesloaded.mineda1.js?ver=4.1.4' id='imagesloaded-js'></script>
	<script src='../wp-content/plugins/canvas/components/slider-gallery/block/flickity.pkgd.min3c94.js?ver=2.1.0'
		id='flickity-js'></script>
	<script id='canvas-slider-gallery-js-extra'>
		var canvas_sg_flickity = { "page_info_sep": " of " };
	</script>
	<script
		src='../wp-content/plugins/canvas/components/slider-gallery/block/public-block-slider-gallery3c94.js?ver=2.1.0'
		id='canvas-slider-gallery-js'></script>
	<script id='contact-form-7-js-extra'>
		var wpcf7 = { "apiSettings": { "root": "https:\/\/newsblocktheme.com\/mix\/wp-json\/contact-form-7\/v1", "namespace": "contact-form-7\/v1" }, "cached": "1" };
	</script>
	<script src='../wp-content/plugins/contact-form-7/includes/js/scriptsde54.js?ver=5.3'
		id='contact-form-7-js'></script>
	<script
		src='../wp-content/plugins/powerkit/modules/basic-elements/public/js/public-powerkit-basic-elementscce7.js?ver=4.0.0'
		id='powerkit-basic-elements-js'></script>
	<script id='powerkit-justified-gallery-js-extra'>
		var powerkitJG = { "rtl": "" };
	</script>
	<script
		src='../wp-content/plugins/powerkit/modules/justified-gallery/public/js/public-powerkit-justified-gallery6259.js?ver=2.3.9'
		id='powerkit-justified-gallery-js'></script>
	<script src='../wp-content/plugins/powerkit/modules/lazyload/public/js/lazysizes.config5697.js?ver=5.5.3'
		id='lazysizes.config-js'></script>
	<script src='../wp-content/plugins/powerkit/modules/lazyload/public/js/lazysizes.min5697.js?ver=5.5.3'
		id='lazysizes-js'></script>
	<script src='../wp-content/plugins/powerkit/modules/lightbox/public/js/jquery.magnific-popup.min6259.js?ver=2.3.9'
		id='magnific-popup-js'></script>
	<script id='powerkit-lightbox-js-extra'>
		var powerkit_lightbox_localize = { "text_previous": "Previous", "text_next": "Next", "text_close": "Close", "text_loading": "Loading", "text_counter": "of", "single_image_selectors": ".entry-content img", "gallery_selectors": ".wp-block-gallery, .gallery", "exclude_selectors": "", "zoom_icon": "true" };
	</script>
	<script src='../wp-content/plugins/powerkit/modules/lightbox/public/js/public-powerkit-lightbox6259.js?ver=2.3.9'
		id='powerkit-lightbox-js'></script>
	<script id='powerkit-opt-in-forms-js-extra'>
		var opt_in = { "ajax_url": "https:\/\/newsblocktheme.com\/mix\/wp-admin\/admin-ajax.php", "warning_privacy": "Please confirm that you agree with our policies." };
	</script>
	<script
		src='../wp-content/plugins/powerkit/modules/opt-in-forms/public/js/public-powerkit-opt-in-forms6259.js?ver=2.3.9'
		id='powerkit-opt-in-forms-js'></script>
	<script async="async" defer="defer" src='../../../assets.pinterest.com/js/pinit5697.js?ver=5.5.3'
		id='powerkit-pinterest-js'></script>
	<script id='powerkit-pin-it-js-extra'>
		var powerkit_pinit_localize = { "image_selectors": ".entry-content img", "exclude_selectors": ".cnvs-block-row,.cnvs-block-section,.cnvs-block-posts .entry-thumbnail,.cnvs-post-thumbnail,.pk-block-author,.pk-featured-categories img,.pk-inline-posts-container img,.pk-instagram-image,.pk-subscribe-image,.pk-block-posts,.cs-posts-area__main,.cs-entry,.woocommerce .products img,.woocommerce-product-gallery img,.woocommerce-cart-form .product-thumbnail img,.wc-block-featured-category,.wc-block-featured-product,.wp-block-handpicked-products,.wc-block-grid", "only_hover": "true" };
	</script>
	<script src='../wp-content/plugins/powerkit/modules/pinterest/public/js/public-powerkit-pin-it6259.js?ver=2.3.9'
		id='powerkit-pin-it-js'></script>
	<script
		src='../wp-content/plugins/powerkit/modules/scroll-to-top/public/js/public-powerkit-scroll-to-top6259.js?ver=2.3.9'
		id='powerkit-scroll-to-top-js'></script>
	<script
		src='../wp-content/plugins/powerkit/modules/share-buttons/public/js/public-powerkit-share-buttons6259.js?ver=2.3.9'
		id='powerkit-share-buttons-js'></script>
	<script id='powerkit-slider-gallery-js-extra'>
		var powerkit_sg_flickity = { "page_info_sep": " of " };
	</script>
	<script
		src='../wp-content/plugins/powerkit/modules/slider-gallery/public/js/public-powerkit-slider-gallery6259.js?ver=2.3.9'
		id='powerkit-slider-gallery-js'></script>
	<script
		src='../wp-content/plugins/powerkit/modules/table-of-contents/public/js/public-powerkit-table-of-contents6259.js?ver=2.3.9'
		id='powerkit-table-of-contents-js'></script>
	<script id='powerkit-typekit-js-extra'>
		var powerkit_typekit = { "kit": "qum7tnt" };
	</script>
	<script
		src='../wp-content/plugins/powerkit/modules/typekit-fonts/public/js/public-powerkit-typekit6259.js?ver=2.3.9'
		id='powerkit-typekit-js'></script>
	<script src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'
		id='jquery-blockui-js'></script>
	<script id='wc-add-to-cart-js-extra'>
		var wc_add_to_cart_params = { "ajax_url": "\/mix\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/mix\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/newsblocktheme.com\/mix\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
	</script>
	<script src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min83b6.js?ver=4.6.2'
		id='wc-add-to-cart-js'></script>
	<script src='../wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'
		id='js-cookie-js'></script>
	<script id='woocommerce-js-extra'>
		var woocommerce_params = { "ajax_url": "\/mix\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/mix\/?wc-ajax=%%endpoint%%" };
	</script>
	<script src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min83b6.js?ver=4.6.2'
		id='woocommerce-js'></script>
	<script id='wc-cart-fragments-js-extra'>
		var wc_cart_fragments_params = { "ajax_url": "\/mix\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/mix\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_a33919f7277528d6e9869ccd32c4fc10", "fragment_name": "wc_fragments_a33919f7277528d6e9869ccd32c4fc10", "request_timeout": "5000" };
	</script>
	<script src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min83b6.js?ver=4.6.2'
		id='wc-cart-fragments-js'></script>
	<script id='csco-scripts-js-extra'>
		var csLocalize = { "darkMode": "true" };
		var csco_mega_menu = { "rest_url": "https:\/\/newsblocktheme.com\/mix\/wp-json\/csco\/v1\/menu-posts" };
	</script>
	<script src='../wp-content/themes/newsblock/assets/js/scriptscb18.js?ver=1.0.9' id='csco-scripts-js'></script>
	<script id='swp-live-search-client-js-extra'>
		var searchwp_live_search_params = [];
		searchwp_live_search_params = { "ajaxurl": "https:\/\/newsblocktheme.com\/mix\/wp-admin\/admin-ajax.php", "origin_id": 737, "config": { "default": { "engine": "default", "input": { "delay": 300, "min_chars": 3 }, "results": { "position": "bottom", "width": "auto", "offset": { "x": 0, "y": 5 } }, "spinner": { "lines": 12, "length": 8, "width": 3, "radius": 8, "scale": 1, "corners": 1, "color": "#424242", "fadeColor": "transparent", "speed": 1, "rotate": 0, "animation": "searchwp-spinner-line-fade-quick", "direction": 1, "zIndex": 2000000000, "className": "spinner", "top": "50%", "left": "50%", "shadow": "0 0 1px transparent", "position": "absolute" } } }, "msg_no_config_found": "No valid SearchWP Live Search configuration found!", "aria_instructions": "When autocomplete results are available use up and down arrows to review and enter to go to the desired page. Touch device users, explore by touch or with swipe gestures." };;
	</script>
	<script src='../wp-content/plugins/searchwp-live-ajax-search/assets/javascript/dist/bundle.min5f04.js?ver=1.4.6'
		id='swp-live-search-client-js'></script>
	<script src='../wp-includes/js/wp-embed.min5697.js?ver=5.5.3' id='wp-embed-js'></script>
	<script>
		"use strict";

		(function ($) {

			$(window).on('load', function () {

				// Get all links.
				var powerkitSLinksIds = [];

				var powerkitSLinksRestBox = $('.pk-social-links-mode-rest');

				// Generate links Ids.
				$(powerkitSLinksRestBox).each(function (index, wrap) {

					if (!$(wrap).hasClass('pk-social-links-counts-disabled')) {

						$(wrap).find('.pk-social-links-item').each(function () {
							if ($(this).attr('data-id').length > 0) {
								powerkitSLinksIds.push($(this).attr('data-id'));
							}
						});
					}
				});

				// Generate links data.
				var powerkitSLinksData = {};

				if (powerkitSLinksIds.length > 0) {
					powerkitSLinksData = { 'ids': powerkitSLinksIds.join() };
				}

				// Check data.
				if (!Object.entries(powerkitSLinksData).length) {
					return;
				}

				// Get results by REST API.
				$.ajax({
					type: 'GET',
					url: 'https://newsblocktheme.com/mix/wp-json/social-counts/v1/get-counts',
					data: powerkitSLinksData,
					beforeSend: function () {

						// Add Loading Class.
						powerkitSLinksRestBox.addClass('pk-social-links-loading');
					},
					success: function (response) {

						if (!$.isEmptyObject(response) && !response.hasOwnProperty('code')) {

							// SLinks loop.
							$.each(response, function (index, data) {

								// Find Bsa Item.
								var powerkitSLinksItem = powerkitSLinksRestBox.find('.pk-social-links-item[data-id="' + index + '"]');

								// Set Class.
								if (data.hasOwnProperty('class')) {
									powerkitSLinksItem.addClass(data.class);
								}

								// Set Count.
								if (data.hasOwnProperty('result') && data.result !== null && data.result.hasOwnProperty('count')) {

									if (data.result.count) {
										// Class Item.
										powerkitSLinksItem.removeClass('pk-social-links-no-count').addClass('pk-social-links-item-count');

										// Count item.
										powerkitSLinksItem.find('.pk-social-links-count').not('.pk-tippy').html(data.result.count);
									}
								} else {
									powerkitSLinksItem.addClass('pk-social-links-no-count');
								}

							});
						}

						// Remove Loading Class.
						powerkitSLinksRestBox.removeClass('pk-social-links-loading');
					},
					error: function () {

						// Remove Loading Class.
						powerkitSLinksRestBox.removeClass('pk-social-links-loading');
					}
				});
			});

		})(jQuery);
	</script>
	<script id='powerkit-typekit-js-extra'>
		var powerkit_typekit = { "kit": "qum7tnt" };
	</script>
	<script src='wp-content/plugins/powerkit/modules/typekit-fonts/public/js/public-powerkit-typekit6259.js?ver=2.3.9'
		id='powerkit-typekit-js'></script>















	<script defer src="wp-content/cache/autoptimize/2/js/autoptimize_106d8991357cdc40c0e6b91073edcd2f.js"></script>
</body>

</body>

<!-- Mirrored from newsblocktheme.com/mix/my-account/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2020 20:25:04 GMT -->

</html>
@endsection