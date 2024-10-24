<header
    class="kleanity-header-wrap kleanity-header-style-plain kleanity-style-splitted-menu kleanity-sticky-navigation kleanity-style-slide">
    <div class="kleanity-header-background"></div>
    <div class="kleanity-header-container kleanity-header-full">
        <div class="kleanity-header-container-inner clearfix">
            <div class="kleanity-navigation kleanity-item-pdlr clearfix">
                <div class="kleanity-main-menu" id="kleanity-main-menu">
                    <ul id="menu-en_main-navigation-1" class="sf-menu">
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2043 kleanity-normal-menu {{request()->routeIs('user.home') ? 'current-menu-item' : ''}}">
                            <a href="/">Home</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-2876 current_page_item menu-item-2886 kleanity-normal-menu {{request()->routeIs('user.about-us') ? 'current-menu-item' : ''}}">
                            <a href="{{route('user.about-us')}}">About Us</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4036 kleanity-normal-menu {{request()->routeIs('user.portfolio') ? 'current-menu-item' : ''}}">
                            <a href="{{route('user.portfolio')}}">Our Works</a>
                        </li>
                        <li class="kleanity-center-nav-menu-item ">
                            <div class="kleanity-logo kleanity-item-pdlr">
                                <div class="kleanity-logo-inner">
                                    <a href="">
                                        <noscript>
                                            <img src="{{ asset('frontend/assets/image/Ri-Logo-Colors-03-e1646326633617.png') }}"
                                                alt="" />
                                        </noscript>
                                        <img class="lazyload"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                            data-src="{{ asset('frontend/assets/image/Ri-Logo-Colors-03-e1646326633617.png') }}"
                                            alt="" />
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2748 kleanity-normal-menu {{request()->routeIs('user.work-for-us') ? 'current-menu-item' : ''}}">
                            <a href="{{route('user.work-for-us')}}">Work for Us</a>
                        </li>
                        <li
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2007 kleanity-normal-menu {{request()->routeIs('user.contact-us') ? 'current-menu-item' : ''}}">
                            <a href="{{route('user.contact-us')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
