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
                            <a href="/">{{ cachedTranslate('Home', \App::getLocale()) }}</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-2876 current_page_item menu-item-2886 kleanity-normal-menu {{ request()->routeIs('user.about-us') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('user.about-us') }}">
                                {{ cachedTranslate('About Us', \App::getLocale()) }}</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4036 kleanity-normal-menu {{ request()->routeIs('user.portfolio') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('user.portfolio') }}">
                                {{ cachedTranslate('Our Works', \App::getLocale()) }}</a>
                        </li>
                        <li class="kleanity-center-nav-menu-item ">
                            <div class="kleanity-logo kleanity-item-pdlr">
                                <div class="kleanity-logo-inner">
                                    <a href="">
                                        <noscript>
                                            <img src="{{ showImage($configWebsite->logo) }}" alt="" />
                                        </noscript>
                                        <img class="lazyload"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                            data-src="{{ showImage($configWebsite->logo) }}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2748 kleanity-normal-menu {{ request()->routeIs('user.work-for-us') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('user.work-for-us') }}"> {{ cachedTranslate('Work for Us', \App::getLocale()) }}</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2007 kleanity-normal-menu {{ request()->routeIs('user.contact-us') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('user.contact-us') }}"> {{ cachedTranslate('Contact', \App::getLocale()) }}</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2007 kleanity-normal-menu">
                            <a href="#"> {{ cachedTranslate('Language', \App::getLocale()) }}</a>
                            <ul class="dropdown-menu">
                                <li><a class="changeLanguage" data-lang="vi"> {{ cachedTranslate('Tiếng Việt', \App::getLocale()) }}</a></li>
                                <li><a class="changeLanguage" data-lang="en"> {{ cachedTranslate('Tiếng Anh', \App::getLocale()) }}</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

@push('scripts')
    <script>
        // $('.changeLanguage').change(function(event) {
        //     var url = "{{ route('google.translate.change') }}";
        //     window.location.href = url + "?lang=" + $(this).val()
        // })

        jQuery('.changeLanguage').click(function(event) {
            var url = "{{ route('google.translate.change') }}";
            window.location.href = url + "?lang=" + jQuery(this).data('lang')
        })
    </script>
@endpush
