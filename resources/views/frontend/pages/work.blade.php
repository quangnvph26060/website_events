@extends('frontend.layouts.master')


@section('title', 'Công việc')
@section('content')


    @isset($banner)
        @include('frontend.layouts.partials.banner', ['is_used' => true, 'banner' => $banner])
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
                <div class="kleanity-sidebar-center kleanity-column-40 kleanity-line-height">
                    <div class="gdlr-core-page-builder-body">
                        <div class="gdlr-core-pbf-section">
                            <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"
                                                    style="margin-top: 5px">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div
                                                    class="gdlr-core-stunning-text-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align gdlr-core-stunning-text-caption-above-title">

                                                    <h3 class="gdlr-core-stunning-text-item-title">
                                                        @lang('lang.life-is-short')
                                                    </h3>

                                                </div>
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
                                    <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix gdlr-core-style-blog-full"
                                        style="padding-bottom: 40px">
                                        <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix"
                                            data-layout="fitrows">

                                            @foreach ($posts as $post)
                                                <div
                                                    class="gdlr-core-item-list gdlr-core-blog-full gdlr-core-item-pdlr gdlr-core-style-left">
                                                    <div
                                                        class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><noscript><img
                                                                    src="{{ showImage($post->featured_image ?? '') }}"
                                                                    alt="" width="1200" height="580"
                                                                    title="Senior Account Executive Job" /></noscript><img
                                                                class="lazyloaded"
                                                                src="{{ showImage($post->featured_image ?? '') }}"
                                                                data-src="{{ showImage($post->featured_image ?? '') }}"
                                                                alt="" width="1200" height="580"
                                                                title="Senior Account Executive Job" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-head clearfix">
                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                            <span
                                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a
                                                                    href="#">
                                                                    {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}</a></span><span
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
