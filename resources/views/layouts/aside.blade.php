<aside id="secondary" class="cs-sidebar__area cs-widget-area">
    <div class="cs-sidebar__inner">
    <!--
        <div class="widget powerkit_social_links_widget-2 powerkit_social_links_widget">
            <div class="widget-body">
                <h5
                    class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
                    <span class="cnvs-section-title"><span>Follow Us</span></span></h5>
                <div
                    class="pk-social-links-wrap  pk-social-links-template-columns pk-social-links-template-col-5 pk-social-links-align-default pk-social-links-scheme-light pk-social-links-titles-disabled pk-social-links-counts-enabled pk-social-links-labels-disabled pk-social-links-mode-php pk-social-links-mode-rest">
                    <div class="pk-social-links-items">
                        <div class="pk-social-links-item pk-social-links-facebook "
                            data-id="facebook"> <a href="https://facebook.com/codesupplyco"
                                class="pk-social-links-link" target="_blank" rel="nofollow">
                                <i
                                    class="pk-social-links-icon pk-icon pk-icon-facebook"></i>
                                <span
                                    class="pk-social-links-count pk-font-secondary">13</span>
                            </a></div>
                        <div class="pk-social-links-item pk-social-links-twitter "
                            data-id="twitter"> <a href="https://twitter.com/envato"
                                class="pk-social-links-link" target="_blank" rel="nofollow">
                                <i class="pk-social-links-icon pk-icon pk-icon-twitter"></i>
                                <span
                                    class="pk-social-links-count pk-font-secondary">69K</span>
                            </a></div>
                        <div class="pk-social-links-item pk-social-links-instagram "
                            data-id="instagram"> <a
                                href="https://www.instagram.com/codesupply.co"
                                class="pk-social-links-link" target="_blank" rel="nofollow">
                                <i
                                    class="pk-social-links-icon pk-icon pk-icon-instagram"></i>
                                <span
                                    class="pk-social-links-count pk-font-secondary">15</span>
                            </a></div>
                        <div class="pk-social-links-item pk-social-links-pinterest "
                            data-id="pinterest"> <a href="https://pinterest.com/envato"
                                class="pk-social-links-link" target="_blank" rel="nofollow">
                                <i
                                    class="pk-social-links-icon pk-icon pk-icon-pinterest"></i>
                                <span
                                    class="pk-social-links-count pk-font-secondary">10K</span>
                            </a></div>
                        <div class="pk-social-links-item pk-social-links-youtube "
                            data-id="youtube"> <a href="https://www.youtube.com/user/envato"
                                class="pk-social-links-link" target="_blank" rel="nofollow">
                                <i class="pk-social-links-icon pk-icon pk-icon-youtube"></i>
                                <span
                                    class="pk-social-links-count pk-font-secondary">84K</span>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    -->
        
        <div class="widget powerkit_widget_posts-3 powerkit_widget_posts">
            <h5
                class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
                <span class="cnvs-section-title"><span>Tasodifiy maqolalar</span></span></h5>
            <div
                class="widget-body pk-widget-posts pk-widget-posts-template-default pk-widget-posts-template-numbered posts-per-page-4">
                <ul>
                    @forelse ($aside_data as $value)
                        <li class="pk-post-item">
                            <article
                                class="post-261 post type-post status-publish format-standard has-post-thumbnail category-sports tag-art tag-fashion tag-lifestyle tag-music tag-style cs-entry cs-video-wrap"
                                style="--cs-image-border-radius: 50%;">
                                <div class="cs-entry__outer">
                                    <div
                                        class="cs-entry__inner cs-entry__thumbnail cs-overlay-ratio cs-ratio-square">
                                        <div class="cs-overlay-background"> <img width="80"
                                                height="80"
                                                src="{{ asset('images/'.$value->post_image) }}"
                                                class="attachment-csco-smaller size-csco-smaller pk-lqip pk-lazyload wp-post-image"
                                                alt="" loading="lazy" data-pk-sizes="auto"
                                                data-ls-sizes="(max-width: 80px) 100vw, 80px"
                                                data-pk-src="{{ asset('images/'.$value->post_image) }}">
                                        </div> <a class="cs-overlay-link"
                                            href="{{ route('post.show', ['post'=>$value->slug]) }}"></a>
                                    </div>
                                    <div class="cs-entry__inner cs-entry__content">
                                        <div class="cs-entry__post-meta">
                                            <div class="cs-meta-category">
                                                <ul class="post-categories">
                                                    <li><a href="{{ route('category', ['category'=>$value->ciid]) }}"
                                                            rel="category tag">{{ $value->category_name }}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h3 class="cs-entry__title"> <a
                                                href="{{ route('post.show', ['post'=>$value->slug]) }}">{{ $value->title }}</a></h3>
                                        <div class="cs-entry__post-meta">
                                            <div class="cs-meta-date">{{ date('d.m.Y', strtotime($value->p_created_at)) }}</div>
                                            <div class="cs-meta-views"><span
                                                    class="cs-meta-icon"><i
                                                        class="cs-icon cs-icon-eye"></i></span>{{ $value->view }}</div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                    @empty
                        <li class="pk-post-item">
                            <p>Maqolalar hozircha mavjud emas.</p>
                        </li>
                    @endforelse
                </ul>
            </div>
        </div>
    <!--
        <div
            class="widget powerkit_opt_in_subscription_widget-2 powerkit_opt_in_subscription_widget">
            <div class="widget-body">
                <div class="pk-subscribe-form-wrap pk-subscribe-form-widget">
                    <div class="pk-subscribe-container ">
                        <div class="pk-subscribe-data">
                            <h5
                                class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
                                <span class="cnvs-section-title"><span>Sign Up to
                                        Updates</span></span></h5>
                            <p class="pk-subscribe-message pk-font-heading">Get notified of
                                the best deals on our WordPress themes.</p>
                            <form method="post" class="subscription"> <input type="hidden"
                                    name="list_id" value="b5a5e9c757">
                                <div class="pk-input-group"> <input type="text" name="EMAIL"
                                        class="email form-control"
                                        placeholder="Enter your email"> <button
                                        class="pk-subscribe-submit"
                                        type="submit">Subscribe</button></div> <input
                                    type="hidden" name="_wp_http_referer"
                                    value="/mix/meet-the-team/" />
                            </form>
                            <div class="pk-privacy pk-color-secondary"> <label><input
                                        name="pk-privacy" type="checkbox">By checking this
                                    box, you confirm that you have read and are agreeing to
                                    our terms of use regarding the storage of the data
                                    submitted through this form.</label></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    -->
        <div
            class="widget powerkit_widget_featured_categories-3 powerkit_widget_featured_categories">
            <h5
                class="cs-section-heading cnvs-block-section-heading is-style-cnvs-block-section-heading-default halignleft  ">
                <span class="cnvs-section-title"><span>Bo'limlar</span></span></h5>
            <div class="widget-body">
                <div class="pk-featured-categories pk-featured-categories-vertical-list">
                    @forelse ($aside_category as $value)
                    <div class="pk-featured-item">
                        <div class="pk-featured-image"> 
                        
                        </div>
                        <div class="pk-featured-content">
                            <div class="pk-featured-inner">
                                <div class="pk-featured-name" style="color: #868686"> {{ $value->name }}</div>
                                <div class="pk-featured-count" style="background-color: white!important; color:gray; box-shadow: 0 3px 10px rgb(0 0 0 / 0.2)"> 
                                    <span class="pk-featured-number"><i class="bi bi-eye"></i></span> <span class="pk-featured-label"> Posts</span>
                                </div>
                            </div>
                        </div> 
                            <a class="pk-featured-link"
                            href="{{ route('category', ['category'=>$value->id]) }}"> <span>Postlarni ko'rish</span> </a>
                    </div>
                    @empty
                        
                    @endforelse
                </div>
            </div>
        </div>
    <!-- 
        Advertasiment
        <div class="widget text-4 widget_text">
            <div class="textwidget">
                <p><a href="https://1.envato.market/nb"><img loading="lazy"
                            style="display: block; margin: 0 auto;"
                            alt="banner-half-page-sale"
                            src="../../../cloud.codesupply.co/demo-content/newsblock/banner-half-page.jpg"
                            srcset="https://cloud.codesupply.co/demo-content/newsblock/banner-half-page.jpg 1x, https://cloud.codesupply.co/demo-content/newsblock/banner-half-page-2x.jpg 2x"
                            width="300" height="600" /></a></p>
            </div>
        </div>
    -->
    </div>
</aside>