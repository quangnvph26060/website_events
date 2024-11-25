<header
    class="kleanity-header-wrap kleanity-header-style-plain kleanity-style-splitted-menu kleanity-sticky-navigation kleanity-style-slide">
    <div class="kleanity-header-background"></div>
    <div class="kleanity-header-container kleanity-header-full">
        <div class="kleanity-header-container-inner clearfix">
            <div class="kleanity-navigation kleanity-item-pdlr clearfix">
                <div class="kleanity-main-menu" id="kleanity-main-menu">
                    <ul id="menu-en_main-navigation-1" class="sf-menu">
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2043 kleanity-normal-menu {{ request()->routeIs('user.home') ? 'current-menu-item' : '' }}">
                            <a href="/">{{ __('lang.home') }}</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-2876 current_page_item menu-item-2886 kleanity-normal-menu {{ request()->routeIs('user.about-us') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('user.about-us') }}">@lang('lang.about')</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4036 kleanity-normal-menu {{ request()->routeIs('user.portfolio') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('user.portfolio') }}">
                                @lang('lang.service') <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="">1</a></li>
                                <li><a href="">1</a></li>
                                <li><a href="">1</a></li>
                            </ul>
                        </li>
                        <li class="kleanity-center-nav-menu-item">
                            <div class="kleanity-logo kleanity-item-pdlr">
                                <div class="kleanity-logo-inner">
                                    <a href="{{ route('user.home') }}">
                                        <img class="lazyload" src="{{ showImage($configWebsite->logo) }}"
                                            data-src="{{ showImage($configWebsite->logo) }}" alt=""
                                            style="padding-left: 0px" />
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2748 kleanity-normal-menu {{ request()->routeIs('user.work-for-us') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('user.work-for-us') }}">@lang('lang.blog')</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2007 kleanity-normal-menu {{ request()->routeIs('user.contact-us') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('user.contact-us') }}">@lang('lang.contact')</a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2007 kleanity-normal-menu"
                            style="display: flex; align-items: center; gap: 10px">
                            <a href="#" class="changeLanguage" data-lang="vi" style="padding-bottom: 20px">
                                <img style="max-width: 40px"
                                    src="{{ asset('frontend/assets/image/Flag_of_Vietnam.svg.png') }}"
                                    alt="Vietnamese Flag">
                            </a>
                            <a href="#" class="changeLanguage" data-lang="en" style="padding-bottom: 20px">
                                <img style="max-width: 40px"
                                    src="{{ asset('frontend/assets/image/Flag_of_the_United_Kingdom_(3-5).svg.png') }}"
                                    alt="UK Flag">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

@push('scripts')
    <script>
        jQuery('.changeLanguage').click(function(event) {
            var url = "{{ route('google.translate.change') }}";
            window.location.href = url + "?lang=" + jQuery(this).data('lang')
        })
    </script>
@endpush
