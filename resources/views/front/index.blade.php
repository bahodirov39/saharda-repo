@extends('layouts.app')
@section('content')
<style>
	.button_all{
		border: 2px solid #DAF400;
		padding: 5px 10px;
		border-radius: 16px;
		background-color: #DAF400;
		color: black;
		font-size: 15px;
		font-weight: bold;
	}
</style>
<main id="main" class="cs-site-primary">


	<div class="cs-site-content cs-sidebar-disabled cs-metabar-disabled section-heading-default-style-1">


		<div class="cs-container">


			<div id="content" class="cs-main-content">

				<div id="canvas-content" class="canvas-content entry-content">
					<div
						class="cnvs-block-section cnvs-block-section-1584016788967 cnvs-block-section-layout-full cnvs-block-section-fullwidth">
						<div class="cnvs-block-section-outer" style="">
							<div class="cnvs-block-section-inner">


								<div class="cnvs-block-section-content cnvs-block-section-content-1584016790211">
									<div class="cnvs-block-section-content-inner">


										<div class="wp-block-group">
											<div class="wp-block-group__inner-container">
												<div
													class="cnvs-block-row cnvs-block-row-1584016607615 cnvs-block-row-columns-2">
													<div class="cnvs-block-row-inner">


														<div class="cnvs-block-column cnvs-block-column-1584016607683">
															<div class="cnvs-block-column-inner">
																<div>

																	<div class="cnvs-block-posts cnvs-block-posts-1584016696132 cnvs-block-posts-layout-tile-type-1"
																		data-layout="tile-type-1"
																		data-min-height="100%">
																		<div class="cs-posts-area" data-posts-area="">
																			<div class="cs-posts-area__outer">
																				<div
																					class="cs-posts-area__main cs-block-posts-layout-tile-type-1 cs-display-column">
																					@forelse ($one as $value)
																					<article
																						class=" cs-overlay-gradient post-279 post type-post status-publish format-video has-post-thumbnail category-books post_format-post-format-video cs-entry cs-video-wrap">
																						<div class="cs-entry__outer cs-entry__overlay cs-overlay-ratio cs-ratio-stretch"
																							data-scheme="inverse">
																							<div
																								class="cs-entry__inner cs-entry__thumbnail">
																								<div
																									class="cs-overlay-background">
																									<img width="800"
																										height="533"
																										src="{{ asset('images/'.$value->post_image) }}"
																										class="attachment-csco-medium-uncropped size-csco-medium-uncropped pk-lqip pk-lazyload wp-post-image"
																										alt=""
																										loading="lazy"
																										data-pk-sizes="auto"
																										data-ls-sizes="(max-width: 800px) 100vw, 800px"
																										data-pk-src="{{ asset('images/'.$value->post_image) }}"></div>
																							</div>

																							<div
																								class="cs-entry__inner cs-overlay-content cs-entry__content">
																								<div
																									class="cs-entry__category">
																									<ul
																										class="post-categories">
																										<li><a href="{{ route('category', ['category'=>$value->ciid]) }}"
																												rel="category tag">{{ $value->category_name }}</a>
																										</li>
																									</ul>
																								</div>
																								<h2
																									class="cs-entry__title cs-entry__title-line">
																									<a
																										href="{{ route('post.show', ['post'=>$value->slug]) }}">{{ $value->title }}</a>
																								</h2>


																								<div
																									class="cs-entry__post-meta">
																									<div
																										class="cs-meta-author">
																										<a class="cs-meta-author-inner url fn n"
																											href="{{ route('author', ['author_id'=>$value->uid]) }}"
																											title="{{ $value->user_name }}ning shaxsiy sahifasini ko'rish"><span
																												class="cs-by"></span><span
																												class="cs-author">{{ $value->user_name }}</span></a>
																									</div>
																									<div
																										class="cs-meta-date">{{ date('d.m.Y H:i', strtotime($value->p_created_at)) }}</div>
																									<div
																										class="cs-meta-views">
																										<span
																											class="cs-meta-icon"><i
																												class="cs-icon cs-icon-eye"></i></span>{{ $value->view }}</div>
																									
																								</div>
																							</div>

																							<a href="{{ route('post.show', ['post'=>$value->slug]) }}"
																								class="cs-overlay-link"></a>
																						</div>
																					</article>
																					@empty
																						<p>Maqola mavjud emas</p>
																					@endforelse
																				</div>
																			</div>

																		</div>
																	</div>

																</div>
															</div>
														</div>



														<div class="cnvs-block-column cnvs-block-column-1584016607705">
															<div class="cnvs-block-column-inner">
																<div>


																	<div
																		class="cnvs-block-row cnvs-block-row-1584087982350 cnvs-block-row-columns-2">
																		<div class="cnvs-block-row-inner">


																			<div
																				class="cnvs-block-column cnvs-block-column-1584087982502">
																				<div class="cnvs-block-column-inner">
																					<div>


																						<h2 id="the-latest"
																							class="cnvs-block-section-heading cnvs-block-section-heading-1584022007514 is-style-cnvs-block-section-heading-18 is-style-cnvs-block-section-heading-decorative halignleft">
																							<span
																								class="cnvs-section-title">
																								<span>Bugun</span>
																							</span>
																						</h2>

																					</div>
																				</div>
																			</div>



																			<div
																				class="cnvs-block-column cnvs-block-column-1584087982557">
																				<div class="cnvs-block-column-inner">
																					<div>

																						<div
																							class="cnvs-block-current-date cnvs-block-current-date-1584713435521">
																							{{ date('d.m.Y') }}</div>

																					</div>
																				</div>
																			</div>

																		</div>
																	</div>


																	<div class="cnvs-block-posts cnvs-block-posts-1584016703955 cnvs-block-posts-layout-horizontal-type-3"
																		data-layout="horizontal-type-3"
																		data-min-height="">
																		<div class="cs-posts-area" data-posts-area="">
																			<div class="cs-posts-area__outer">
																				<div
																					class="cs-posts-area__main cs-block-posts-layout-horizontal-type-3 cs-display-column">
																				@forelse ($today as $value)
																					<article
																						class="post-261 post type-post status-publish format-standard has-post-thumbnail category-sports tag-art tag-fashion tag-lifestyle tag-music tag-style cs-entry cs-video-wrap">
																						<div class="cs-entry__outer">
																							<div
																								class="cs-entry__wrapper">
																								<div
																									class="cs-entry__inner cs-entry__content ">
																									<div
																										class="cs-entry__post-meta">
																										<div
																											class="cs-meta-category">
																											<ul
																												class="post-categories">
																												<li><a href="{{ route('category', ['category'=>$value->ciid]) }}"
																														rel="category tag">{{ $value->name }}</a>
																												</li>
																											</ul>
																										</div>
																									</div>
																									<h2
																										class="cs-entry__title ">
																										<a
																											href="{{ route('post.show', ['post'=>$value->slug]) }}">{{ $value->title }}</a>
																									</h2>
																								</div>

																								<div
																									class="cs-entry__inner cs-entry__thumbnail cs-entry__overlay cs-overlay-ratio cs-ratio-square">
																									<div
																										class="cs-overlay-background cs-overlay-transparent">
																										<img width="80"
																											height="80"
																											src="{{ asset('images/'.$value->image_path) }}"
																											class="attachment-csco-smaller size-csco-smaller pk-lqip pk-lazyload wp-post-image"
																											alt=""
																											loading="lazy"
																											data-pk-sizes="auto"
																											data-ls-sizes="(max-width: 80px) 100vw, 80px"
																											data-pk-src="{{ asset('images/'.$value->image_path) }}">
																									</div>
																									<a class="cs-overlay-link"
																										href="{{ route('post.show', ['post'=>$value->slug]) }}"></a>
																								</div>
																							</div>

																							<div
																								class="cs-entry__excerpt">
																								{{ App\Models\Post::substrText($value->article) }}&hellip; </div>

																						</div>
																					</article>
																				@empty
																					<p>Bugun maqolalar yozilmadi. <br> <a href="{{ route('post.create') }}">Maqola yozish</a></p>
																				@endforelse
																				</div>
																			</div>

																		</div>
																	</div>

																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>



					<div
						class="cnvs-block-section cnvs-block-section-1584091215786 cnvs-block-section-layout-full cnvs-block-section-fullwidth cnvs-block-section-with-background-color">
						<div class="cnvs-block-section-outer" style="">
							<div class="cnvs-block-section-inner">


								<div class="cnvs-block-section-content cnvs-block-section-content-1584091221798">
									<div class="cnvs-block-section-content-inner">


										<div
											class="cnvs-block-row cnvs-block-row-1584091255492 cnvs-block-row-columns-2">
											<div class="cnvs-block-row-inner">


												<div class="cnvs-block-column cnvs-block-column-1584091255599">
													<div class="cnvs-block-column-inner">
														<div>


															<h2 id="trending-now"
																class="cnvs-block-section-heading cnvs-block-section-heading-1584091336388 is-style-cnvs-block-section-heading-18 is-style-cnvs-block-section-heading-decorative halignleft">
																<span class="cnvs-section-title">
																	<span>Trendda</span>
																</span>
															</h2>



															<div
																class="wp-block-image cnvs-block-core-image-1584091843213">
																<figure class="alignright size-large is-resized"><img
																		loading="lazy"
																		src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAP+KeNJXAAAAAXRSTlMAQObYZgAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII="
																		alt="" class="wp-image-2505 pk-lazyload"
																		width="91" height="31" data-pk-sizes="auto"
																		data-pk-src="wp-content/uploads/sites/2/2020/03/decorative-arrow.png">
																</figure>
															</div>

														</div>
													</div>
												</div>



												<div class="cnvs-block-column cnvs-block-column-1584091255651">
													<div class="cnvs-block-column-inner">
														<div>


															<div class="wp-block-group">
																<div class="wp-block-group__inner-container">
																	<div
																		class="cnvs-block-row cnvs-block-row-1584091439977 cnvs-block-row-columns-3">
																		<div class="cnvs-block-row-inner">

																			@forelse ($trending as $value)
																			<div
																				class="cnvs-block-column cnvs-block-column-1584091440093">
																				<div class="cnvs-block-column-inner">
																					<div>

																						<div class="cnvs-block-posts cnvs-block-posts-1584091471384 cnvs-block-posts-layout-horizontal-type-2"
																							data-layout="horizontal-type-2"
																							data-min-height="">
																							<div class="cs-posts-area"
																								data-posts-area="">
																								<div
																									class="cs-posts-area__outer">
																									<div
																										class="cs-posts-area__main cs-block-posts-layout-horizontal-type-2 cs-display-column">

																										<article
																											class="post-259 post type-post status-publish format-standard has-post-thumbnail category-cars cs-entry cs-video-wrap">
																											<div
																												class="cs-entry__outer">
																												<div
																													class="cs-entry__inner cs-entry__thumbnail cs-entry__overlay cs-overlay-ratio cs-ratio-square">
																													<div
																														class="cs-overlay-background cs-overlay-transparent">
																														<img width="80"
																															height="80"
																															src="{{ asset('images/'.$value->image_path) }}"
																															class="attachment-cnvs-small size-cnvs-small pk-lqip pk-lazyload wp-post-image"
																															alt=""
																															loading="lazy"
																															data-pk-sizes="auto"
																															data-ls-sizes="(max-width: 80px) 100vw, 80px"
																															data-pk-src="{{ asset('images/'.$value->image_path) }}">
																													</div>
																													<a class="cs-overlay-link"
																														href="{{ route('post.show', ['post'=>$value->slug]) }}"></a>
																												</div>

																												<div
																													class="cs-entry__inner cs-entry__content ">
																													<h2
																														class="cs-entry__title ">
																														<a
																															href="{{ route('post.show', ['post'=>$value->slug]) }}">{{ $value->title }}</a>
																													</h2>


																													<div
																														class="cs-entry__post-meta">
																														<div
																															class="cs-meta-views">
																															<span
																																class="cs-meta-icon"><i
																																	class="cs-icon cs-icon-eye"></i></span>{{ $value->view }}
																														</div>
																													</div>
																												</div>
																											</div>
																										</article>
																									</div>
																								</div>

																							</div>
																						</div>

																					</div>
																				</div>
																			</div>
																			@empty
																			<p style="margin-left: 7%;">Bu turdagi maqolalar hozircha yo'q.</p>
																			@endforelse
																		</div>
																	</div>
																</div>
															</div>

														</div>
													</div>
												</div>

											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>



					








					<div
						class="cnvs-block-section cnvs-block-section-1584032927041 cnvs-block-section-layout-with-sidebar cnvs-block-section-sidebar-sticky-bottom cnvs-block-section-sidebar-position-right">
						<div class="cnvs-block-section-outer" style="">
							<div class="cnvs-block-section-inner">


								<div class="cnvs-block-section-content cnvs-block-section-content-1584032929039">
									<div class="cnvs-block-section-content-inner">


										<h2 id="entertainment"
											class="cnvs-block-section-heading cnvs-block-section-heading-1586332104612 is-style-cnvs-block-section-heading-default halignleft">
											<span class="cnvs-section-title">
												<span>Maqolalar</span>
											</span>
										</h2>


										<div class="cnvs-block-posts cnvs-block-posts-1584032932532 cnvs-block-posts-layout-standard-type-1"
											data-layout="standard-type-1" data-min-height="">
											<div class="cs-posts-area" data-posts-area="">
												<div class="cs-posts-area__outer">
													<div
														class="cs-posts-area__main cs-block-posts-layout-standard-type-1 cs-display-borders-between-posts">

														@forelse ($all_posts as $value)
															<article
																class="post-278 post type-post status-publish format-standard has-post-thumbnail category-books cs-entry cs-video-wrap">
																<div class="cs-entry__outer">
																	<div class="cs-entry__inner cs-entry__thumbnail cs-entry__overlay cs-overlay-ratio cs-ratio-landscape"
																		data-scheme="inverse">
																		<div class="cs-overlay-background">
																			<img width="380" height="280"
																				src="{{ asset('images/'.$value->image_path) }}"
																				class="attachment-csco-thumbnail size-csco-thumbnail pk-lqip pk-lazyload wp-post-image"
																				alt="" loading="lazy" data-pk-sizes="auto"
																				data-ls-sizes="(max-width: 380px) 100vw, 380px"
																				data-pk-src="{{ asset('images/'.$value->image_path) }}">
																			</div>

																		<div class="cs-overlay-content">
																			<span class="cs-entry__read-more">
																				Oxirigacha o'qish </span>

																		</div>

																		<a class="cs-overlay-link"
																			href="{{ route('post.show', ['post'=>$value->slug]) }}"></a>
																	</div>

																	<div class="cs-entry__inner cs-entry__content">
																		<div class="cs-entry__post-meta">
																			<div class="cs-meta-category">
																				<ul class="post-categories">
																					<li><a href="{{ route('category', ['category'=>$value->ciid]) }}"
																							rel="category tag">{{ $value->name }}</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																		<h2 class="cs-entry__title ">
																			<a
																				href="{{ route('post.show', ['post'=>$value->slug]) }}">{{ $value->title }}</a>
																		</h2>

																		<div class="cs-entry__excerpt">{{  App\Models\Post::substrText($value->article) }}&hellip; </div>

																		<div class="cs-entry__post-meta">
																			<div class="cs-meta-date">{{ date('d.m.Y H:i', strtotime($value->p_created_at)) }}</div>
																			<div class="cs-meta-views"><span
																					class="cs-meta-icon"><i
																						class="cs-icon cs-icon-eye"></i></span>{{ $value->view }}</div>
																		</div>
																	</div>
																</div>
															</article>
														@empty
															<p>Maqolalar mavjud emas.</p>
														@endforelse
													</div>
													<div style="margin-top: 30px; display: flex; justify-content: center;">
														<a href="{{ route('all_posts') }}" class="button_all">Barchasi</a>
													</div>
												</div>

											</div>
										</div>

									</div>
								</div>



								@include('layouts.aside')

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


<div class="adp-popup adp-popup-type-notification-bar adp-popup-location-bottom adp-preview-image-left adp-preview-image-no"
	data-limit-display="1" data-limit-lifetime="30" data-open-trigger="viewed" data-open-delay-number="1"
	data-open-scroll-position="10" data-open-scroll-type="%" data-open-manual-selector="" data-close-trigger="scroll"
	data-close-delay-number="30" data-close-scroll-position="50" data-close-scroll-type="%"
	data-open-animation="popupOpenSlideFade" data-exit-animation="popupExitSlideFade" data-light-close="false"
	data-overlay="false" data-mobile-disable="false" data-body-scroll-disable="false" data-overlay-close="false"
	data-esc-close="false" data-f4-close="false" data-id="1915" style="width:100%;">

	<div class="adp-popup-wrap">

		<div class="adp-popup-container">

			<!-- Content -->

			<!-- Info -->
			<div class="adp-popup-outer" style="max-width:1024px;">
				<div class="adp-popup-text">
					Saytimiz brauzeringiz cookielaridan foydalanadi. </div>

				<button class="adp-button adp-popup-button adp-popup-accept">
					Roziman </button>


				<button type="button" class="adp-popup-close"></button>
			</div>
		</div>
	</div>
</div>


<div class="adp-popup adp-popup-type-content adp-popup-location-center adp-preview-image-left adp-preview-image-yes"
	data-limit-display="1" data-limit-lifetime="30" data-open-trigger="scroll" data-open-delay-number="1"
	data-open-scroll-position="60" data-open-scroll-type="%" data-open-manual-selector="" data-close-trigger="none"
	data-close-delay-number="30" data-close-scroll-position="10" data-close-scroll-type="%"
	data-open-animation="popupOpenFade" data-exit-animation="popupExitFade" data-light-close="false" data-overlay="true"
	data-mobile-disable="false" data-body-scroll-disable="false" data-overlay-close="false" data-esc-close="false"
	data-f4-close="false" data-id="2307" style="width:1000px;">

	<div class="adp-popup-wrap">

		<div class="adp-popup-container">

			<!-- Content -->
			<div class="adp-popup-outer" style="max-width:100%;">
				<div class="adp-popup-thumbnail">
					<img width="1024" height="683" src="wp-content/uploads/sites/2/demo-image-00035-80x53.jpg"
						class="adp-lazyload-disabled pk-lqip pk-lazyload wp-post-image" alt="" loading="lazy"
						data-pk-sizes="auto" data-ls-sizes="(max-width: 1024px) 100vw, 1024px"
						data-pk-src="https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-1024x683.jpg"
						data-pk-srcset="https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-1024x683.jpg 1024w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-300x200.jpg 300w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-768x512.jpg 768w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-1536x1024.jpg 1536w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-2048x1365.jpg 2048w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-1340x893.jpg 1340w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-380x253.jpg 380w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-800x533.jpg 800w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-1160x773.jpg 1160w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-80x53.jpg 80w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-600x400.jpg 600w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-3072x2048.jpg 3072w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-2680x1787.jpg 2680w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-760x507.jpg 760w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-1600x1067.jpg 1600w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-2320x1547.jpg 2320w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035-1200x800.jpg 1200w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00035.jpg 3840w" />
				</div>

				<div class="adp-popup-content">
					<div class="adp-popup-inner">

						<h2> Obuna bo'ling </h2>



						<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>


						<div class="cnvs-block-opt-in-form cnvs-block-opt-in-form-1565620171150">
							<div class="pk-subscribe-form-wrap pk-subscribe-form-block">

								<div class="pk-subscribe-container ">
									<div class="pk-subscribe-data">


										<form method="post" class="subscription">

											<input type="hidden" name="list_id" value="b5a5e9c757">

											<div class="pk-input-group">

												<input type="text" name="EMAIL" class="email form-control"
													placeholder="Enter your email">

												<button class="pk-subscribe-submit" type="submit">Subscribe</button>
											</div>

											<input type="hidden" name="_wp_http_referer" value="/mix/" />
										</form>

										<div class="pk-privacy pk-color-secondary">
											<label><input name="pk-privacy" type="checkbox">By checking this box, you
												confirm that you have read and are agreeing to our terms of use
												regarding the storage of the data submitted through this form.</label>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>


						<div class="cnvs-block-social-links cnvs-block-social-links-1565620705152">
							<div
								class="pk-social-links-wrap  pk-social-links-template-inline pk-social-links-align-default pk-social-links-scheme-gutenberg-block pk-social-links-titles-disabled pk-social-links-counts-disabled pk-social-links-labels-disabled">
								<div class="pk-social-links-items">
									<div class="pk-social-links-item pk-social-links-facebook  pk-social-links-no-count"
										data-id="facebook">
										<a href="https://facebook.com/codesupplyco" class="pk-social-links-link"
											target="_blank" rel="nofollow">
											<i class="pk-social-links-icon pk-icon pk-icon-facebook"></i>



										</a>
									</div>
									<div class="pk-social-links-item pk-social-links-twitter  pk-social-links-no-count"
										data-id="twitter">
										<a href="https://twitter.com/envato" class="pk-social-links-link"
											target="_blank" rel="nofollow">
											<i class="pk-social-links-icon pk-icon pk-icon-twitter"></i>



										</a>
									</div>
									<div class="pk-social-links-item pk-social-links-instagram  pk-social-links-no-count"
										data-id="instagram">
										<a href="https://www.instagram.com/codesupply.co" class="pk-social-links-link"
											target="_blank" rel="nofollow">
											<i class="pk-social-links-icon pk-icon pk-icon-instagram"></i>



										</a>
									</div>
									<div class="pk-social-links-item pk-social-links-pinterest  pk-social-links-no-count"
										data-id="pinterest">
										<a href="https://pinterest.com/envato" class="pk-social-links-link"
											target="_blank" rel="nofollow">
											<i class="pk-social-links-icon pk-icon pk-icon-pinterest"></i>



										</a>
									</div>
									<div class="pk-social-links-item pk-social-links-youtube  pk-social-links-no-count"
										data-id="youtube">
										<a href="https://www.youtube.com/user/envato" class="pk-social-links-link"
											target="_blank" rel="nofollow">
											<i class="pk-social-links-icon pk-icon pk-icon-youtube"></i>



										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<button type="button" class="adp-popup-close"></button>
				</div>
			</div>

			<!-- Info -->
		</div>
	</div>
</div>

<div class="adp-popup-overlay"></div>

<a href="#top" class="pk-scroll-to-top">
	<i class="pk-icon pk-icon-up"></i>
</a>




























<script id='powerkit-typekit-js-extra'>
	var powerkit_typekit = { "kit": "qum7tnt" };
</script>
<script src='wp-content/plugins/powerkit/modules/typekit-fonts/public/js/public-powerkit-typekit6259.js?ver=2.3.9'
	id='powerkit-typekit-js'></script>















<script defer src="wp-content/cache/autoptimize/2/js/autoptimize_106d8991357cdc40c0e6b91073edcd2f.js"></script>
</body>

<!-- Mirrored from newsblocktheme.com/mix/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Dec 2020 20:18:52 GMT -->

</html>
@endsection