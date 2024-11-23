<div class="kleanity-mobile-header-wrap">

    <div class="kleanity-mobile-header kleanity-header-background kleanity-style-slide" id="kleanity-mobile-header">
        <div class="header-language">
            <a href="#" class="changeLanguage" data-lang="vi">
                <img style="max-width: 30px" src="{{ asset('frontend/assets/image/Flag_of_Vietnam.svg.png') }}" alt="Vietnamese Flag">
            </a>
            <a href="#" class="changeLanguage" data-lang="en">
                <img style="max-width: 30px" src="{{ asset('frontend/assets/image/Flag_of_the_United_Kingdom_(3-5).svg.png') }}" alt="UK Flag">
            </a>
        </div>
        <div class="kleanity-mobile-header-container kleanity-container">

            <div class="kleanity-logo kleanity-item-pdlr">
                <div class="kleanity-logo-inner">
                    <a href="/">
                       
                        <img class="lazyload" src="{{ showImage($configWebsite->logo) }}"
                            data-src="{{ showImage($configWebsite->logo) }}" alt="" width="2364"
                            height="2065" title="Ri Logo Colors-03" />
                    </a>
                </div>
            </div>
            <div class="kleanity-mobile-menu-right">
                <div class="kleanity-overlay-menu kleanity-mobile-menu" id="kleanity-mobile-menu">
                    <a class="kleanity-overlay-menu-icon kleanity-mobile-menu-button kleanity-mobile-button-hamburger"
                        href="#">
                        <span></span>
                    </a>
                    <div class="kleanity-overlay-menu-content kleanity-navigation-font">
                        <div class="kleanity-overlay-menu-close"></div>
                        <div class="kleanity-overlay-menu-row">
                            <div class="kleanity-overlay-menu-cell">
                                <ul id="menu-en_main-navigation" class="menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2043">
                                        <a href="/">@lang('lang.home')</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2876 current_page_item menu-item-2886">
                                        <a href="{{ route('user.about-us') }}" aria-current="page">@lang('lang.about')</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4036">
                                        <a href="{{ route('user.portfolio') }}">@lang('lang.service')</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2748">
                                        <a href="{{ route('user.work-for-us') }}">@lang('lang.blog')</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2007">
                                        <a href="{{ route('user.contact-us') }}">@lang('lang.contact')</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
