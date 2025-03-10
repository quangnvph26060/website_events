<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', getLocalizedContent($configWebsite, 'title_seo', \App::getLocale()) ?? env('APP_NAME'))</title>
    <meta name="description" content="@yield('description', getLocalizedContent($configWebsite, 'description_seo', \App::getLocale()) ?? 'Beesea Đơn vị Tổ chức sự kiện số 1 Việt Nam')">
    <meta name="keywords" content="@yield('keywords', getLocalizedContent($configWebsite, 'meta_seo', \App::getLocale()) ?? 'Beesea Đơn vị Tổ chức sự kiện số 1 Việt Nam')">
    {{-- icon --}}

    <link rel="icon" type="image/png" href="{{ showImage($configWebsite->icon) }}">

    <meta property="og:title" content="@yield('og_title', getLocalizedContent($configWebsite, 'title_seo', \App::getLocale()) ?? env('APP_NAME'))">
    <meta property="og:image" content="@yield('og_image', 'https://beesea.vn/storage/sliders/17325006226743dc8e99cc2.jpg')">
    <meta property="og:description" content="@yield('og_description', getLocalizedContent($configWebsite, 'description_seo', \App::getLocale()) ?? 'Beesea Đơn vị Tổ chức sự kiện số 1 Việt Nam')">
    <meta property="og:url" content="{{ url()->current() }}">

    {!! $configWebsite->head_scripts !!}

    @include('frontend.layouts.partials.styles')
</head>

<body
    class="page-template-default page page-id-2876 gdlr-core-body unselectable kleanity-body kleanity-body-front kleanity-full kleanity-with-sticky-navigation gdlr-core-link-to-lightbox">
    {!! $configWebsite->body_scripts !!}
    @include('frontend.layouts.partials.menu')

    <h1 style="display: none">{{ $configWebsite->title_seo ?? env('APP_NAME') }}</h1>
    <h2 style="display: none">{{ $configWebsite->title_seo ?? env('APP_NAME') }}</h2>

    <div class="kleanity-body-outer-wrapper">
        <div class="kleanity-body-wrapper clearfix kleanity-with-transparent-header kleanity-with-frame">
            <div class="kleanity-header-background-transparent">

                @include('frontend.layouts.partials.header')

            </div>

            <div class="kleanity-page-wrapper" id="kleanity-page-wrapper">
                <div class="gdlr-core-page-builder-body">

                    {{-- banner --}}

                    <!-- start content -->

                    @yield('content')

                    <!-- end content -->
                </div>
            </div>
        </div>
        <footer class="kleanity-fixed-footer" id="kleanity-fixed-footer">

            @include('frontend.layouts.partials.footer')

        </footer>
    </div>
    <a href="#kleanity-top-anchor" class="kleanity-footer-back-to-top-button" id="kleanity-footer-back-to-top-button">
        <i class="fa fa-angle-up " style="color: white"></i>
    </a>
    <div id="wpcp-error-message" class="msgmsg-box-wpcp hideme">
        <span>error: </span>
        Content is protected !!
    </div>

    {!! $configWebsite->footer_scripts !!}
    @include('frontend.layouts.partials.scripts')
</body>

</html>
