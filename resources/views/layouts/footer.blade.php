<footer class="cs-footer cs-footer-one" data-scheme="dark">
<!--
    <div class="cs-site-subscribe">
        <div class="cs-container">
            <div class="cs-site-subscribe__item">
                <div class="cs-site-subscribe__text">
                    <span class="cs-subscribe-text">Newsletter</span>
                    <span class="cs-subscribe-arrow">
                        <img src="../wp-content/themes/newsblock/assets/static/images/subscribe-arrow.svg"
                            alt="subscribe">
                    </span>
                </div>

                <div class="cs-site-subscribe__form">
                    <div class="cs-site-subscribe__info">
                        <h4 class="cs-site-subscribe__title">Sign Up for Our Newsletters</h4>

                        <span class="cs-site-subscribe__info-text">Get notified of the best deals on our WordPress
                            themes.</span>
                    </div>

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

                                    <input type="hidden" name="_wp_http_referer" value="/mix/my-account/" />
                                </form>

                                <div class="pk-privacy pk-color-secondary">
                                    <label><input name="pk-privacy" type="checkbox">By checking this box, you confirm
                                        that you have read and are agreeing to our terms of use regarding the storage of
                                        the data submitted through this form.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->

    <div class="cs-container">
        <div class="cs-footer__item">
            <div class="cs-footer__col cs-col-left">
                <div class="cs-footer__inner">
                    <div class="cs-logo">
                        <a href="/">
                            &copy; Sahar ilmiy birlashmasi
                        </a>
                    </div>

                    <div class="cs-footer__desc">
                        <a href="https://t.me/bahodirovmuhammad">Sayt tayyorlash</a> </div>
                </div>
            </div>
            <div class="cs-footer__col cs-col-center">
                <div class="footer-nav-menu">
                    <ul id="menu-footer" class="cs-footer__nav ">
                        <li id="menu-item-2433"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2433"><a
                                href="{{ route('all_posts') }}">Barcha maqolalar</a></li>
                        <li id="menu-item-875"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-875"><a
                                href="{{ route('about') }}">Haqida</a></li>
                        <li id="menu-item-876"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-876"><a
                                href="{{ route('contact') }}">Aloqa</a></li>
                        <li id="menu-item-2434"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2434"><a
                                href="/post/create">Maqola yozish</a></li>
                        @if (isset(Auth::user()->id))
                        <li id="menu-item-877"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-877"><a
                                href="{{ route('home') }}">Shaxsiy sahifa</a></li>
                        @else
                            <li id="menu-item-877"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-877"><a
                                href="{{ route('register') }}">Ro'yxatdan o'tish</a></li>
                                <li id="menu-item-877"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-877"><a
                                href="{{ route('login') }}">Kirish</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="cs-footer__col cs-col-right">
                <div class="cs-footer-social-links">
                    <div
                        class="pk-social-links-wrap  pk-social-links-template-nav pk-social-links-align-default pk-social-links-scheme-default pk-social-links-titles-disabled pk-social-links-counts-enabled pk-social-links-labels-disabled pk-social-links-mode-php pk-social-links-mode-rest">
                        <div class="pk-social-links-items">
                            <div class="pk-social-links-item pk-social-links-facebook " data-id="facebook">
                                <a href="https://facebook.com/codesupplyco" class="pk-social-links-link" target="_blank"
                                    rel="nofollow">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>