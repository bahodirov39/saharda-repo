<div class="cs-site-overlay"></div>

	<div class="cs-offcanvas">
		<div class="cs-offcanvas__header" data-scheme="default">

			<nav class="cs-offcanvas__nav">
				<div class="cs-logo ">
					<a class="cs-header__logo cs-logo-default " href="/">
						<!-- <img src="" alt="Sahar"> -->
						Sahar
					</a>

					<a class="cs-header__logo cs-logo-dark " href="/">
						<!-- <img src="" alt="Sahar"> -->
						Sahar
					</a>
				</div>

				<span class="cs-offcanvas__toggle" role="button"><i class="cs-icon cs-icon-x"></i></span>
			</nav>

		</div>
		<aside class="cs-offcanvas__sidebar">
			<div class="cs-offcanvas__inner cs-offcanvas__area cs-widget-area">
				<div class="widget widget_nav_menu cs-d-lg-none">
					<div class="menu-primary-container">
						<ul id="menu-primary" class="menu">
							<li id="menu-item-577"
								class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-577">
								<a href="#">Bo'limlar</a>
								<ul class="sub-menu">
									@forelse ($aside_category as $value)
									<li>
										<a href="{{ route('category', ['category'=>$value->id]) }}"> {{ $value->name }} <span
												class="pk-badge pk-badge-secondary"></span></a>
										</li>
									@empty
										<li>Bo'limlar mavjud emas</li>
									@endforelse
									<li>
										<a href="{{ route('all_posts') }}"> Barcha maqolalar <span
												class="pk-badge pk-badge-secondary"></span></a>
									</li>
								</ul>
							</li>
                            <li class="{{ request()->is('author_list') ? 'current-menu-ancestor' : '' }}">
								<a href="{{ route('author_list') }}">A'zolar</a>
                            </li>
                            <li class="{{ request()->is('about') ? 'current-menu-ancestor' : '' }}">
								<a href="{{ route('about') }}">Haqida</a>
                            </li>
                            <li class="{{ request()->is('contact') ? 'current-menu-ancestor' : '' }}">
								<a href="{{ route('contact') }}">Aloqa</a>
                            </li>
                            @if (isset(Auth::user()->id))
                                <li class="{{ request()->is('home') ? 'current-menu-ancestor' : '' }}">
                                    <a href="{{ route('home') }}">Shaxsiy sahifa</a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit">Logout</button>
                                    </form>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}">Kirish</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}">Ro'yxatdan o'tish</a>
                                </li>
                            @endif
                        </ul>
					</div>
				</div>
				<!--
			SOCIAL
				<div class="widget powerkit_social_links_widget-4 powerkit_social_links_widget">
					<div class="widget-body">
						<h5
							class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
							<span class="cnvs-section-title"><span>Follow Us</span></span></h5>
						<div
							class="pk-social-links-wrap  pk-social-links-template-columns pk-social-links-template-col-5 pk-social-links-align-default pk-social-links-scheme-light pk-social-links-titles-disabled pk-social-links-counts-enabled pk-social-links-labels-disabled pk-social-links-mode-php pk-social-links-mode-rest">
							<div class="pk-social-links-items">
								<div class="pk-social-links-item pk-social-links-facebook " data-id="facebook">
									<a href="https://facebook.com/codesupplyco" class="pk-social-links-link"
										target="_blank" rel="nofollow">
										<i class="pk-social-links-icon pk-icon pk-icon-facebook"></i>

										<span class="pk-social-links-count pk-font-secondary">13</span>


									</a>
								</div>
								<div class="pk-social-links-item pk-social-links-twitter " data-id="twitter">
									<a href="https://twitter.com/envato" class="pk-social-links-link" target="_blank"
										rel="nofollow">
										<i class="pk-social-links-icon pk-icon pk-icon-twitter"></i>

										<span class="pk-social-links-count pk-font-secondary">69K</span>


									</a>
								</div>
								<div class="pk-social-links-item pk-social-links-instagram " data-id="instagram">
									<a href="https://www.instagram.com/codesupply.co" class="pk-social-links-link"
										target="_blank" rel="nofollow">
										<i class="pk-social-links-icon pk-icon pk-icon-instagram"></i>

										<span class="pk-social-links-count pk-font-secondary">15</span>


									</a>
								</div>
								<div class="pk-social-links-item pk-social-links-pinterest " data-id="pinterest">
									<a href="https://pinterest.com/envato" class="pk-social-links-link" target="_blank"
										rel="nofollow">
										<i class="pk-social-links-icon pk-icon pk-icon-pinterest"></i>

										<span class="pk-social-links-count pk-font-secondary">10K</span>


									</a>
								</div>
								<div class="pk-social-links-item pk-social-links-youtube " data-id="youtube">
									<a href="https://www.youtube.com/user/envato" class="pk-social-links-link"
										target="_blank" rel="nofollow">
										<i class="pk-social-links-icon pk-icon pk-icon-youtube"></i>

										<span class="pk-social-links-count pk-font-secondary">84K</span>


									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			SUBSCRIBE 
				<div class="widget powerkit_opt_in_subscription_widget-6 powerkit_opt_in_subscription_widget">
					<div class="widget-body">
						<div class="pk-subscribe-form-wrap pk-subscribe-form-widget pk-subscribe-with-name">

							<div class="pk-subscribe-container ">
								<div class="pk-subscribe-data">
									<h5
										class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
										<span class="cnvs-section-title"><span>Sign Up to Updates</span></span></h5>
									<p class="pk-subscribe-message pk-font-heading">Get notified of the best deals on
										our WordPress themes.</p>

									<form method="post" class="subscription">

										<input type="hidden" name="list_id" value="b5a5e9c757">

										<div class="pk-input-group">
											<input type="text" name="USER" class="user form-control"
												placeholder="Enter your name">

											<input type="text" name="EMAIL" class="email form-control"
												placeholder="Enter your email">

											<button class="pk-subscribe-submit" type="submit">Subscribe</button>
										</div>

										<input type="hidden" name="_wp_http_referer" value="/mix/" />
									</form>

									<div class="pk-privacy pk-color-secondary">
										<label><input name="pk-privacy" type="checkbox">By checking this box, you
											confirm that you have read and are agreeing to our terms of use regarding
											the storage of the data submitted through this form.</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			-->
				<div class="widget powerkit_widget_posts-10 powerkit_widget_posts">
					<h5
						class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
						<span class="cnvs-section-title"><span>Trendda</span></span></h5>
					<div class="widget-body pk-widget-posts pk-widget-posts-template-large-2 posts-per-page-3">
						<ul>
							@forelse ($nav_trend_posts as $value)
								<li class="pk-post-item">
									<article
										class="post-279 post type-post status-publish format-video has-post-thumbnail category-books post_format-post-format-video cs-entry cs-video-wrap"
										style="">
										<div class="cs-entry__outer">
											<div
												class="cs-entry__inner cs-entry__thumbnail cs-overlay-ratio cs-ratio-landscape">
												<div class="cs-overlay-background cs-overlay-transparent">
													<img width="380" height="280"
														src="{{ asset('images/'.$value->post_image) }}"
														class="attachment-csco-thumbnail size-csco-thumbnail pk-lqip pk-lazyload wp-post-image"
														alt="" loading="lazy" data-pk-sizes="auto"
														data-ls-sizes="(max-width: 380px) 100vw, 380px"
														data-pk-src="{{ asset('images/'.$value->post_image) }}">
													</div>

												<a class="cs-overlay-link"
													href="{{ route('post.show', ['post'=>$value->slug]) }}"></a>
											</div>

											<div class="cs-entry__inner cs-entry__content">
												<div class="cs-entry__category">
													<ul class="post-categories">
														<li><a href="{{ route('category', ['category'=>$value->ciid]) }}" rel="category tag">{{ $value->category_name }}</a>
														</li>
													</ul>
												</div>
												<h3 class="cs-entry__title cs-entry__title-line">
													<a
														href="{{ route('post.show', ['post'=>$value->slug]) }}">{{ $value->title }}</a>
												</h3>

												<div class="cs-entry__post-meta">
													<div class="cs-meta-author"><a class="cs-meta-author-inner url fn n"
															href="{{ route('author', ['author_id'=>$value->uid]) }}"
															title="{{ $value->user_name }}ning shaxsiy sahifasini ko'rish"><span
																class="cs-by"></span><span class="cs-author">{{ $value->user_name }}</span></a></div>
													<div class="cs-meta-date">{{ date('d.m.Y H:i', strtotime($value->p_created_at)) }}</div>
												</div>
											</div>
										</div>
									</article>
								</li>
							@empty
								<li>Bu turdagi postlar hozircha mavjud emas.</li>
							@endforelse
						</ul>
					</div>

				</div>
			</div>
		</aside>
	</div>
	
	<div id="page" class="cs-site">
		<div class="cs-site-inner">
			<header class="cs-header cs-header-one" data-scheme="default">
				<div class="cs-container">
					<div class="cs-header__inner cs-header__inner-desktop">
						<div class="cs-header__col cs-col-left">
							<span class="cs-header__offcanvas-toggle " role="button">
								<i class="cs-icon cs-icon-menu"></i>
							</span>
							<div class="cs-logo ">
								<a class="cs-header__logo cs-logo-default " href="/">
									Sahar
								</a>

								<a class="cs-header__logo cs-logo-dark " href="/">
									Sahar
								</a>
							</div>
							<nav class="cs-header__nav">
								<ul id="menu-primary-1" class="cs-header__nav-inner">
									<li
										class="menu-item menu-item-type-custom menu-item-object-custom  current-menu-parent menu-item-has-children menu-item-577">
										<a href="#"><span>Bo'limlar</span></a>
										<ul class="sub-menu" data-scheme="default">
											@forelse ($aside_category as $value)
									<li>
										<a href="{{ route('category', ['category'=>$value->id]) }}"> {{ $value->name }} <span
												class="pk-badge pk-badge-secondary"></span></a>
										</li>
									@empty
										<li>Bo'limlar mavjud emas</li>
									@endforelse
									<li>
										<a href="{{ route('all_posts') }}"> Barcha maqolalar <span
												class="pk-badge pk-badge-secondary"></span></a>
										</li>
										</ul>
									</li>
                                    <li class="{{ request()->is('author_list') ? 'current-menu-ancestor' : '' }}">
                                        <a href="{{ route('author_list') }}">A'zolar</a>
                                    </li>
                                    <li class="{{ request()->is('about') ? 'current-menu-ancestor' : '' }}">
                                        <a href="{{ route('about') }}">Haqida</a>
                                    </li>
                                    <li class="{{ request()->is('contact') ? 'current-menu-ancestor' : '' }}">
                                        <a href="{{ route('contact') }}">Aloqa</a>
                                    </li>
                                    @if (isset(Auth::user()->id))
                                        <li class="{{ request()->is('home') ? 'current-menu-ancestor' : '' }}">
                                            <a href="{{ route('home') }}">Shaxsiy sahifa</a>
                                        </li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                {{ csrf_field() }}
                                                <button type="submit" style="margin-top: 10px;">Logout</button>
                                            </form>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('register') }}">Ro'yxatdan o'tish</a>
                                        </li>
                                    @endif
                                </ul>
							</nav>
							<div class="cs-header__multi-column cs-site-submenu section-heading-default-style-1">
								<span class="cs-header__multi-column-toggle">
									<i class="bi bi-award"></i>
								</span>
								<div class="cs-header__multi-column-container" data-scheme="default">
									<div class="cs-header__multi-column-row">
										<div
											class="cs-header__multi-column-col cs-header__widgets-column cs-widget-area">
											<div
												class="widget powerkit_widget_contributors-3 powerkit_widget_contributors">
												<h5
													class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
													<span class="cnvs-section-title"><span>Mualliflar</span></span>
												</h5>
												<div class="widget-body">
													<div class="pk-widget-contributors">
														@forelse ($nav_authors as $value)
															<div class="pk-author-item">
																<div class="pk-author-data">

																	<h6 class="author-name">
																		<a href="{{ route('author', ['author_id'=>$value->uid]) }}" rel="author">
																			{{ $value->name }} </a>
																	</h6>

																	<div class="author-description pk-color-secondary">
																		<i class="bi bi-gem"></i> {{ $value->status }}</div>

																	<div
																		class="pk-author-social-links pk-social-links-wrap pk-social-links-template-template-nav">
																		<div class="pk-social-links-items">
																			@if ($value->facebook == '' && $value->instagram == '' && $value->telegram == '')
																				<small>Sahifalar qo'shilmagan</small>
																			@else
																				@if ($value->facebook != '')
																					<div class="pk-social-links-item pk-social-links-facebook"> <a
																						href="{{ $value->facebook }}"
																						class="pk-social-links-link" target="_blank"> <i
																							class="pk-icon pk-icon-facebook"></i> </a></div>
																				@endif

																				@if ($value->instagram != '')
																				<div class="pk-social-links-item pk-social-links-instagram"> <a
																						href="{{ $value->instagram }}"
																						class="pk-social-links-link" target="_blank"> <i
																							class="pk-icon pk-icon-instagram"></i> </a></div>
																				@endif

																				@if ($value->telegram != '')
																				<div class="pk-social-links-item pk-social-links-telegram"> <a
																					href="{{ $value->telegram }}"
																					class="pk-social-links-link" target="_blank"> <i
																						class="pk-icon pk-icon-telegram"></i> </a></div>
																				
																				@endif
																			@endif   
																		</div>
																	</div>

																</div>
															</div>
														@empty
															<p>Mualliflar hozircha mavjud emas</p>
														@endforelse
													</div>
												</div>
											</div>
										</div>
										<div
											class="cs-header__multi-column-col cs-header__widgets-column cs-widget-area">
											<div class="widget powerkit_widget_posts-2 powerkit_widget_posts">
												<h5
													class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
													<span class="cnvs-section-title"><span>Ko'p ko'rilgan</span></span>
												</h5>
												<div
													class="widget-body pk-widget-posts pk-widget-posts-template-default pk-widget-posts-template-numbered posts-per-page-3">
													<ul>
														@forelse ($nav_posts as $value)
															<li class="pk-post-item">
																<article
																	class="post-261 post type-post status-publish format-standard has-post-thumbnail category-sports tag-art tag-fashion tag-lifestyle tag-music tag-style cs-entry cs-video-wrap"
																	style="--cs-image-border-radius: 50%;">
																	<div class="cs-entry__outer">
																		<div
																			class="cs-entry__inner cs-entry__thumbnail cs-overlay-ratio cs-ratio-square">
																			<div class="cs-overlay-background"> <img width="80"
																				height="80"
																				src="{{ asset('images/'.$value->image_path) }}"
																				class="attachment-csco-smaller size-csco-smaller pk-lqip pk-lazyload wp-post-image"
																				alt="" loading="lazy" data-pk-sizes="auto"
																				data-ls-sizes="(max-width: 80px) 100vw, 80px"
																				data-pk-src="{{ asset('images/'.$value->image_path) }}">
																		</div> <a class="cs-overlay-link"
																			href="{{ route('post.show', ['post'=>$value->slug]) }}"></a>
																		</div>

																		<div class="cs-entry__inner cs-entry__content">

																			<h3 class="cs-entry__title">
																				<a
																					href="{{ route('post.show', ['post'=>$value->slug]) }}">{{ $value->title }}</a>
																			</h3>

																			<div class="cs-entry__post-meta">
																				<div class="cs-meta-views"><span
																						class="cs-meta-icon"><i
																							class="cs-icon cs-icon-eye"></i></span>{{ $value->view }}</div>
																				<div class="cs-meta-shares">
																					<div class="cs-meta-share-total">
																						<span class="cs-meta-icon"><i
																								class="cs-icon cs-icon"></i></span>
																						<span class="cs-total-number">
																							</span>
																					</div>
																					<div class="cs-meta-share-links"
																						data-scheme="default">
																						<div class="pk-share-buttons-wrap pk-share-buttons-layout-simple pk-share-buttons-scheme-simple-light pk-share-buttons-has-counts pk-share-buttons-post-meta pk-share-buttons-mode-cached"
																							data-post-id="261"
																							data-share-url="2020/02/27/critics-agree-these-are-the-13-best-shows-on-tv-right-now/index.html">


																							<div
																								class="pk-share-buttons-items">

																								<div class="pk-share-buttons-item pk-share-buttons-facebook pk-share-buttons-item-count"
																									data-id="facebook">

																									<a href="https://www.facebook.com/sharer.php?u=https://newsblocktheme.com/mix/2020/02/27/critics-agree-these-are-the-13-best-shows-on-tv-right-now/"
																										class="pk-share-buttons-link"
																										target="_blank">

																										<i
																											class="pk-share-buttons-icon pk-icon pk-icon-facebook"></i>



																										<span
																											class="pk-share-buttons-count pk-font-secondary">582</span>
																									</a>



																								</div>
																								<div class="pk-share-buttons-item pk-share-buttons-twitter pk-share-buttons-no-count"
																									data-id="twitter">

																									<a href="https://twitter.com/share?&amp;text=Critics%20Agree%20%E2%80%93%20These%20Are%20the%2013%20Best%20Shows%20on%20TV%20Right%20Now&amp;via=envato&amp;url=https://newsblocktheme.com/mix/2020/02/27/critics-agree-these-are-the-13-best-shows-on-tv-right-now/"
																										class="pk-share-buttons-link"
																										target="_blank">

																										<i
																											class="pk-share-buttons-icon pk-icon pk-icon-twitter"></i>



																										<span
																											class="pk-share-buttons-count pk-font-secondary">0</span>
																									</a>



																								</div>
																								<div class="pk-share-buttons-item pk-share-buttons-pinterest pk-share-buttons-item-count"
																									data-id="pinterest">

																									<a href="../../pinterest.com/pin/create/bookmarklet/indexe6d7.html?url=https://newsblocktheme.com/mix/2020/02/27/critics-agree-these-are-the-13-best-shows-on-tv-right-now/&amp;media=https://newsblocktheme.com/mix/wp-content/uploads/sites/2/demo-image-00016-1024x683.jpg"
																										class="pk-share-buttons-link"
																										target="_blank">

																										<i
																											class="pk-share-buttons-icon pk-icon pk-icon-pinterest"></i>



																										<span
																											class="pk-share-buttons-count pk-font-secondary">348</span>
																									</a>



																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</article>
															</li>
														@empty
														<p>Postlar hozircha mavjud emas</p>	
														@endforelse
													</ul>
												</div>

											</div>
										</div>
										<div
											class="cs-header__multi-column-col cs-header__widgets-column cs-widget-area">
											<div class="widget woocommerce_products-4 woocommerce widget_products">
												<h5
													class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
													<span class="cnvs-section-title"><span>Eng faollar</span></span>
												</h5>
												<div class="widget-body">
													<div class="pk-widget-contributors">
														@php
															$iii = 1;
														@endphp
														@forelse ($nav_top_authors as $value)
															<div class="pk-author-item">
																<div class="pk-author-data">

																	<h6 class="author-name">
																		<span style="color: yellow">{{ $iii++ }}</span>
																		<a href="{{ route('author', ['author_id'=>$value->uid]) }}" rel="author">
																			{{ $value->user_name }} </a>
																	</h6>

																	<div class="author-description pk-color-secondary">
																		<i class="bi bi-gem"></i> {{ $value->ustatus }} - {{ $value->pnumber }} maqola</div>

																	<div
																		class="pk-author-social-links pk-social-links-wrap pk-social-links-template-template-nav">
																		<div class="pk-social-links-items">
																			@if ($value->facebook == '' && $value->instagram == '' && $value->telegram == '')
																				<small>Sahifalar qo'shilmagan</small>
																			@else
																				@if ($value->facebook != '')
																					<div class="pk-social-links-item pk-social-links-facebook"> <a
																						href="{{ $value->facebook }}"
																						class="pk-social-links-link" target="_blank"> <i
																							class="pk-icon pk-icon-facebook"></i> </a></div>
																				@endif

																				@if ($value->instagram != '')
																				<div class="pk-social-links-item pk-social-links-instagram"> <a
																						href="{{ $value->instagram }}"
																						class="pk-social-links-link" target="_blank"> <i
																							class="pk-icon pk-icon-instagram"></i> </a></div>
																				@endif

																				@if ($value->telegram != '')
																				<div class="pk-social-links-item pk-social-links-telegram"> <a
																					href="{{ $value->telegram }}"
																					class="pk-social-links-link" target="_blank"> <i
																						class="pk-icon pk-icon-telegram"></i> </a></div>
																				
																				@endif
																			@endif   
																		</div>
																	</div>

																</div>
															</div>
														@empty
															<p>Mualliflar hozircha mavjud emas</p>
														@endforelse
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="cs-header__col cs-col-right">
							<span role="button" class="cs-header__scheme-toggle cs-site-scheme-toggle">
								<i class="cs-header__scheme-toggle-icon cs-icon cs-icon-sun"></i>
								<span class="cs-header__scheme-toggle-element"></span>
								<i class="cs-header__scheme-toggle-icon cs-icon cs-icon-moon"></i>
							</span>
							<a class="cs-header__cart" href="{{ route('login') }}" title="Login">
								<i class="bi bi-person-lines-fill"></i>
							</a>
							<span class="cs-header__search-toggle" role="button">
								<i class="cs-icon cs-icon-search"></i>
							</span>
							
							<a href="{{ route('post.create') }}" class="cs-header__button" target="_blank">
								<i class="bi bi-lightning-charge"></i>Maqola yozish
							</a>
							<!--
								<div class="cs-header__single-column cs-site-submenu section-heading-default-style-1">
								<span class="cs-header__single-column-label">Follow</span>
								<div class="cs-header__widgets" data-scheme="default">
									<figure class="cs-header__widgets-img">
										<img width="1024" height="1024"
											src="wp-content/uploads/sites/2/product-45-80x80.jpg"
											class="attachment-large size-large pk-lqip pk-lazyload" alt=""
											loading="lazy" data-pk-sizes="auto"
											data-ls-sizes="(max-width: 1024px) 100vw, 1024px"
											data-pk-src="https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-1024x1024.jpg"
											data-pk-srcset="https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-1024x1024.jpg 1024w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-300x300.jpg 300w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-150x150.jpg 150w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-768x768.jpg 768w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-80x80.jpg 80w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-1340x1340.jpg 1340w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-110x110.jpg 110w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-380x380.jpg 380w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-800x800.jpg 800w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-1160x1160.jpg 1160w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-600x600.jpg 600w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-100x100.jpg 100w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-160x160.jpg 160w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-220x220.jpg 220w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-760x760.jpg 760w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-1200x1200.jpg 1200w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45-200x200.jpg 200w, https://newsblocktheme.com/mix/wp-content/uploads/sites/2/product-45.jpg 1425w" />
									</figure>
									<div class="cs-header__widgets-content cs-header__widgets-column cs-widget-area">
										<div
											class="widget powerkit_opt_in_subscription_widget-3 powerkit_opt_in_subscription_widget">
											<div class="widget-body">
												<div class="pk-subscribe-form-wrap pk-subscribe-form-widget">

													<div class="pk-subscribe-container ">
														<div class="pk-subscribe-data">
															<h5
																class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
																<span class="cnvs-section-title"><span>Sign Up to
																		Updates</span></span></h5>
															<p class="pk-subscribe-message pk-font-heading">Get notified
																of the best deals on our WordPress themes.</p>

															<form method="post" class="subscription">

																<input type="hidden" name="list_id" value="b5a5e9c757">

																<div class="pk-input-group">

																	<input type="text" name="EMAIL"
																		class="email form-control"
																		placeholder="Enter your email">

																	<button class="pk-subscribe-submit"
																		type="submit">Subscribe</button>
																</div>

																<input type="hidden" name="_wp_http_referer"
																	value="/mix/" />
															</form>

															<div class="pk-privacy pk-color-secondary">
																<label><input name="pk-privacy" type="checkbox">By
																	checking this box, you confirm that you have read
																	and are agreeing to our terms of use regarding the
																	storage of the data submitted through this
																	form.</label>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="widget powerkit_social_links_widget-3 powerkit_social_links_widget">
											<div class="widget-body">
												<div
													class="pk-social-links-wrap  pk-social-links-template-columns pk-social-links-template-col-5 pk-social-links-align-default pk-social-links-scheme-light pk-social-links-titles-disabled pk-social-links-counts-enabled pk-social-links-labels-disabled pk-social-links-mode-php pk-social-links-mode-rest">
													<div class="pk-social-links-items">
														<div class="pk-social-links-item pk-social-links-facebook "
															data-id="facebook">
															<a href="https://facebook.com/codesupplyco"
																class="pk-social-links-link" target="_blank"
																rel="nofollow">
																<i
																	class="pk-social-links-icon pk-icon pk-icon-facebook"></i>

																<span
																	class="pk-social-links-count pk-font-secondary">13</span>


															</a>
														</div>
														<div class="pk-social-links-item pk-social-links-twitter "
															data-id="twitter">
															<a href="https://twitter.com/envato"
																class="pk-social-links-link" target="_blank"
																rel="nofollow">
																<i
																	class="pk-social-links-icon pk-icon pk-icon-twitter"></i>

																<span
																	class="pk-social-links-count pk-font-secondary">69K</span>


															</a>
														</div>
														<div class="pk-social-links-item pk-social-links-instagram "
															data-id="instagram">
															<a href="https://www.instagram.com/codesupply.co"
																class="pk-social-links-link" target="_blank"
																rel="nofollow">
																<i
																	class="pk-social-links-icon pk-icon pk-icon-instagram"></i>

																<span
																	class="pk-social-links-count pk-font-secondary">15</span>


															</a>
														</div>
														<div class="pk-social-links-item pk-social-links-pinterest "
															data-id="pinterest">
															<a href="https://pinterest.com/envato"
																class="pk-social-links-link" target="_blank"
																rel="nofollow">
																<i
																	class="pk-social-links-icon pk-icon pk-icon-pinterest"></i>

																<span
																	class="pk-social-links-count pk-font-secondary">10K</span>


															</a>
														</div>
														<div class="pk-social-links-item pk-social-links-youtube "
															data-id="youtube">
															<a href="https://www.youtube.com/user/envato"
																class="pk-social-links-link" target="_blank"
																rel="nofollow">
																<i
																	class="pk-social-links-icon pk-icon pk-icon-youtube"></i>

																<span
																	class="pk-social-links-count pk-font-secondary">84K</span>


															</a>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							
							</div>
							-->
						</div>
					</div>


					<div class="cs-header__inner cs-header__inner-mobile">
						<div class="cs-header__col cs-col-left">
							<span class="cs-header__offcanvas-toggle " role="button">
								<i class="cs-icon cs-icon-menu"></i>
							</span>
						</div>
						<div class="cs-header__col cs-col-center">
							<div class="cs-logo ">
								<a class="cs-header__logo cs-logo-default " href="/">
									Sahar
								</a>

								<a class="cs-header__logo cs-logo-dark " href="/"> 
									Sahar
								</a>
							</div>
						</div>
						<div class="cs-header__col cs-col-right">
							<span role="button"
								class="cs-header__scheme-toggle cs-header__scheme-toggle-mobile cs-site-scheme-toggle">
								<i class="cs-header__scheme-toggle-icon cs-icon cs-icon-sun"></i>
								<i class="cs-header__scheme-toggle-icon cs-icon cs-icon-moon"></i>
							</span>
							<span class="cs-header__search-toggle" role="button">
								<i class="cs-icon cs-icon-search"></i>
							</span>
						</div>
					</div>
				</div>


				<div class="cs-search" data-scheme="default">
					<div class="cs-container">
						<form role="search" method="GET" class="cs-search__nav-form" action="{{ route('search') }}">
							<div class="cs-search__group">
								<button class="cs-search__submit">
									<i class="cs-icon cs-icon-search"></i>
								</button>

								<input data-swpparentel=".cs-header .cs-search-live-result" required
									class="cs-search__input" data-swplive="true" type="search" value="" name="search"
									placeholder="Kerakli so'zni kiriting va ENTER tugmasini bosing">

								<button class="cs-search__close">
									<i class="cs-icon cs-icon-x"></i>
								</button>
							</div>
						</form>

						<div class="cs-search__content">
							<div class="cs-search__posts">
								<h5
									class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
									<span class="cnvs-section-title"><span>So'nggi maqolalar</span></span></h5>
								<div class="cs-search__posts-wrapper">
									@forelse ($nav_search_bar as $value)
										<article
											class="post-261 post type-post status-publish format-standard has-post-thumbnail category-sports tag-art tag-fashion tag-lifestyle tag-music tag-style cs-entry cs-video-wrap">
											<div class="cs-entry__outer">
												<div class="cs-entry__inner cs-entry__thumbnail cs-entry__overlay cs-overlay-ratio cs-ratio-square"
													data-scheme="inverse">
													<div class="cs-overlay-background cs-overlay-transparent">
														<img width="110" height="110"
															src="{{ asset('images/'.$value->image_path) }}"
															class="attachment-csco-small size-csco-small pk-lqip pk-lazyload wp-post-image"
															alt="" loading="lazy" data-pk-sizes="auto"
															data-ls-sizes="(max-width: 110px) 100vw, 110px"
															data-pk-src="{{ asset('images/'.$value->image_path) }}">
													</div>

													<a href="{{ route('post.show', ['post'=>$value->slug]) }}"
														class="cs-overlay-link"></a>
												</div>

												<div class="cs-entry__inner cs-entry__content">
													<h6 class="cs-entry__title"><a
															href="{{ route('post.show', ['post'=>$value->slug]) }}">{{ $value->title }}</a></h6>
													<div class="cs-entry__post-meta">
														<div class="cs-meta-views"><span class="cs-meta-icon"><i
																	class="cs-icon cs-icon-eye"></i></span>{{ $value->view }}
														</div>
													</div>
												</div>
											</div>
										</article>
									@empty
										<p>Maqolalar mavjud emas</p>
									@endforelse
								</div>
							</div>

							<div class="cs-search__tags">
								<ul>
									@forelse ($aside_category as $value)
									<li>
										<a href="{{ route('category', ['category'=>$value->id]) }}" rel="tag">
											{{ $value->name }}
										</a>
									</li>
									@empty
										<li>Bo'limlar mavjud emas</li>
									@endforelse
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>