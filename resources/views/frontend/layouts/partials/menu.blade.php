<div class="kleanity-mobile-header-wrap">

    <div class="kleanity-mobile-header kleanity-header-background kleanity-style-slide" id="kleanity-mobile-header">
        <div class="header-language">
            <a href="#" class="changeLanguage" data-lang="vi">
                <img style="max-width: 30px" src="{{ asset('frontend/assets/image/Flag_of_Vietnam.svg.png') }}"
                    alt="Vietnamese Flag">
            </a>
            <a href="#" class="changeLanguage" data-lang="en">
                <img style="max-width: 30px"
                    src="{{ asset('frontend/assets/image/Flag_of_the_United_Kingdom_(3-5).svg.png') }}" alt="UK Flag">
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
                <div id="menuOverlay"></div>
                <div class="kleanity-overlay-menu kleanity-mobile-menu" id="kleanity-mobile-menu">
                    <div class="menu-container">
                        <input type="checkbox" id="menuToggle" class="hidden">
                        <label for="menuToggle" class="menu-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </label>
                        <div class="kleanity-overlay-menu-content kleanity-navigation-font mobile-menu kleanity-active"
                            style="display: block">
                            <div class="kleanity-overlay-menu-row">
                                <div class="kleanity-overlay-menu-cell">
                                    <ul id="menu-en_main-navigation" class="menu">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2043">
                                            <a href="/">@lang('lang.home')</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2876 current_page_item menu-item-2886">
                                            <a href="{{ route('user.about-us') }}"
                                                aria-current="page">@lang('lang.about')</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4036 has-children">
                                            <a href="{{ route('user.portfolio') }}">@lang('lang.service')</a>
                                            <span class="toggle-icon"><i class="fa fa-chevron-down"></i></span>
                                            <ul class="sub-menu">
                                                @foreach ($catalogues as $category)
                                                    <li class="menu-item">
                                                        <a style="padding: 0px;"
                                                            href="{{ route('user.portfolio_tag', $category->slug) }}">{{ $category->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2748">
                                            <a href="{{ route('user.work-for-us') }}">@lang('lang.blog')</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2007">
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
</div>
<script>
    document.getElementById('menuOverlay').addEventListener('click', function() {
        document.getElementById('menuToggle').checked = false;
        document.getElementById('menuOverlay').style.display = 'none';
    });

    document.querySelector('#menuToggle').addEventListener('click', function() {
        document.getElementById('menuOverlay').style.display = 'block';
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Lấy tất cả icon toggle
        const toggleIcons = document.querySelectorAll('.menu-item.has-children .toggle-icon');

        toggleIcons.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.stopPropagation(); // Ngăn sự kiện lan đến phần tử cha
                const parent = this.parentElement;

                // Đóng tất cả menu con khác
                document.querySelectorAll('.menu-item.open').forEach(item => {
                    if (item !== parent) {
                        item.classList.remove('open');
                    }
                });

                // Mở/đóng menu con hiện tại
                parent.classList.toggle('open');
            });
        });
    });
</script>
<style>


    .menu .menu-item {
        position: relative;
        border-bottom: 1px solid #ddd;
    }
    .menu li.menu-item {
        padding: 10px 20px;
    }

    .menu .menu-item a:hover {
        background-color: #f5f5f5;
        color: #000;
    }

    /* Menu con */
    .menu .sub-menu {
        display: none;
        list-style: none;
        margin: 0;
        padding: 0;
        background: #f9f9f9;
        border-left: 1px solid #ddd;
    }

    .menu .sub-menu .menu-item a {

        font-size: 14px;
        color: #555;
    }

    /* Khi mở menu con */
    .menu .menu-item.open>.sub-menu {
        display: block;
    }

    /* Icon toggle */
    .toggle-icon {
        display: inline-block;
        cursor: pointer;
        margin-left: 10px;
        color: #555;
        font-size: 14px;
        transition: transform 0.3s ease;
    }

    .menu-item.open>.toggle-icon i {
        transform: rotate(180deg);
        /* Xoay icon xuống khi mở */
    }

    /* Overlay styles */
    #menuOverlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: none;
        z-index: 8888;
    }

    /* Hiển thị overlay khi menu mở */
    #menuToggle:checked~#menuOverlay {
        display: block;
    }

    #menuToggle {
        display: none;
    }

    .menu-btn {
        display: block;

        width: 24px;
        height: 24px;
        position: relative;
        cursor: pointer;
    }

    .menu-btn span {
        position: absolute;
        width: 100%;
        height: 3px;
        background-color: black;
        transition: all 0.3s ease-in-out;
    }

    .menu-btn span:nth-child(1) {
        top: 0;
    }

    .menu-btn span:nth-child(2) {
        top: 8px;
    }

    .menu-btn span:nth-child(3) {
        top: 16px;
    }

    /* Change to "X" when checked */
    #menuToggle:checked+.menu-btn span:nth-child(1) {
        transform: rotate(45deg) translateY(11px);
    }

    #menuToggle:checked+.menu-btn span:nth-child(2) {
        opacity: 0;
    }

    #menuToggle:checked+.menu-btn span:nth-child(3) {
        transform: rotate(-45deg) translateY(-11px);
    }

    /* Mobile menu styles */
    .mobile-menu {
        position: fixed;
        top: 0;
        left: 0;
        width: 80%;
        height: 100%;
        background-color: black;
        color: white;
        transform: translateX(-100%);
        transition: transform 0.3s ease-in-out;
        padding: 20px;
        z-index: 9999
    }

    #menuToggle:checked~.mobile-menu {
        transform: translateX(0);
    }

    .mobile-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mobile-menu li {
        margin-bottom: 20px;
    }

    .mobile-menu a {
        color: white;
        text-decoration: none;
        font-size: 16px;
    }
</style>
