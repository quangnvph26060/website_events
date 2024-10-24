<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    @include('frontend.layouts.partials.styles')
</head>

<body
    class="page-template-default page page-id-2876 gdlr-core-body unselectable kleanity-body kleanity-body-front kleanity-full kleanity-with-sticky-navigation gdlr-core-link-to-lightbox">

    @include('frontend.layouts.partials.menu')

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
        <i class="fa fa-angle-up"></i>
    </a>
    <div id="wpcp-error-message" class="msgmsg-box-wpcp hideme">
        <span>error: </span>
        Content is protected !!
    </div>

    @include('frontend.layouts.partials.scripts')
</body>

</html>
