@extends('frontend.layouts.master')


@section('title', $banner->title)
@section('description', $banner->description)
@section('og_title', $banner->title)
@section('og_description', $banner->description)
@section('og_image', showImage($banner->path_image))



@section('content')
    @isset($banner)
        @include('frontend.layouts.partials.banner', ['template' => '2', 'banner' => $banner])
    @else
        <div class="kleanity-page-title-wrap  kleanity-style-medium kleanity-left-align">
            <div class="kleanity-header-transparent-substitute" style="height: 101.4px;"></div>
            <div class="kleanity-page-title-overlay"></div>
            <div class="kleanity-page-title-container kleanity-container">
                <div class="kleanity-page-title-content kleanity-item-pdlr">
                    <h3 class="kleanity-page-title">@lang('lang.tags')</h3>
                    <div class="kleanity-page-caption">

                        {{ getLocalizedContent($tag, 'name', \App::getLocale()) }}

                    </div>
                </div>
            </div>
        </div>
    @endisset



    <div class="kleanity-page-wrapper" id="kleanity-page-wrapper">
        <div class="kleanity-content-container kleanity-container">



            <div class="kleanity-sidebar-wrap clearfix kleanity-line-height-0 kleanity-sidebar-style-left">
                <div class="kleanity-sidebar-center kleanity-column-40 kleanity-line-height"
                    style="padding-left: 15px !important">

                    <div class="gdlr-core-page-builder-body">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                            </ol>
                        </nav>


                        <div class="gdlr-core-pbf-section">
                            <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"
                                                    style="margin-top: 5px">
                                                    {{-- <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div> --}}
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                {{-- <div
                                                    class="gdlr-core-stunning-text-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-stunning-text-caption-above-title">

                                                    <h3 class="gdlr-core-stunning-text-item-title">
                                                        @lang('lang.life-is-short')
                                                    </h3>

                                                </div> --}}
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"
                                                    style="margin-bottom: 26px">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix gdlr-core-style-blog-full">
                                        <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix"
                                            data-layout="fitrows">

                                            @foreach ($posts as $post)
                                                <div class="gdlr-core-item-list gdlr-core-blog-full gdlr-core-item-pdlr gdlr-core-style-left"
                                                    style="margin-bottom: 30px">
                                                    <div
                                                        class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="{{route('user.work-for-us', $post->slug) }}"><img class="lazyloaded"
                                                                src="{{ showImage($post->featured_image ?? '') }}"
                                                                data-src="{{ showImage($post->featured_image ?? '') }}"
                                                                alt="" width="1200" height="580"
                                                                title="Senior Account Executive Job" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-head clearfix">
                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                            <span
                                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a
                                                                    href="{{route('user.work-for-us', $post->slug) }}">
                                                                    {{ \Carbon\Carbon::parse($post->created_at)->locale(config('app.locale'))->translatedFormat('j F, Y') }}
                                                                </a></span><span
                                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">

                                                            </span>

                                                        </div>
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                            style="
                                                    font-size: 40px;
                                                    font-weight: 700;
                                                    letter-spacing: 0px;
                                                    ">
                                                            <a href="{{ route('user.work-for-us', $post->slug) }}">
                                                                {{ getLocalizedContent($post, 'title', \App::getLocale()) }}
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div class="gdlr-core-blog-content">
                                                        {{ getLocalizedContent($post, 'excerpt', \App::getLocale()) }}
                                                        <div class="clear"></div>
                                                        <a class="gdlr-core-excerpt-read-more kleanity-title-font"
                                                            href="{{ route('user.work-for-us', $post->slug) }}">
                                                            @lang('lang.continue')<i class="fa fa-long-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('frontend.include.sidebar')

            </div>


        </div>
    </div>
@endsection

@push('styles')
    <style>
        .breadcrumb {
            display: flex;
            list-style: none;
            padding: 10px 15px;
            margin: 0;
            background-color: #f8f9fa; /* Màu nền nhạt */
            border-radius: 5px; /* Bo góc */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng */
        }

        .breadcrumb li {
            margin-right: 5px;
            font-size: 18px; /* Kích thước chữ */
            font-weight: 500; /* Chữ đậm nhẹ */
        }

        .breadcrumb li:not(:last-child)::after {
            content: "/";
            margin-left: 5px;
            color: #6c757d; /* Màu xám nhạt cho dấu phân cách */
        }

        .breadcrumb a {
            text-decoration: none;
            color: #007bff; /* Màu xanh Bootstrap */
            transition: color 0.3s ease; /* Hiệu ứng mượt khi hover */
        }

        .breadcrumb a:hover {
            color: #0056b3; /* Đậm hơn khi hover */
        }

        .breadcrumb .active {
            color: #6c757d; /* Màu xám nhạt */
            font-weight: 600; /* Chữ đậm */
        }
    </style>
@endpush

