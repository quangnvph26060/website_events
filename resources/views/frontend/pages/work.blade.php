@extends('frontend.layouts.master')


@section('content')
    @include('frontend.layouts.partials.banner', ['is_used' => true])

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
                                                    {{-- <div
                                                        class="gdlr-core-stunning-text-item-caption gdlr-core-info-font gdlr-core-skin-caption">
                                                        Don't wait for opportunity. Create it.
                                                    </div> --}}
                                                    <h3 class="gdlr-core-stunning-text-item-title">
                                                        LIFE IS SHORT. WORK SOMEWHERE AWESOME.
                                                    </h3>
                                                    {{-- <div class="gdlr-core-stunning-text-item-content">
                                                        <p>Oh hey, we’re hirring!</p>
                                                    </div> --}}
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
                                        {{-- <div class="gdlr-core-filterer-wrap gdlr-core-js gdlr-core-item-pdlr gdlr-core-style-text gdlr-core-center-align"
                                            data-ajax="gdlr_core_post_ajax" data-target="gdlr-core-blog-item-holder"
                                            data-target-action="replace">
                                            <a href="#"
                                                class="gdlr-core-filterer gdlr-core-button-color gdlr-core-active">All</a>
                                            <span class="kleanity-separater">/</span><a href="#"
                                                class="gdlr-core-filterer gdlr-core-button-color" data-ajax-name="category"
                                                data-ajax-value="account-vi">Account</a><span
                                                class="kleanity-separater">/</span><a href="#"
                                                class="gdlr-core-filterer gdlr-core-button-color" data-ajax-name="category"
                                                data-ajax-value="office">Back Office</a><span
                                                class="kleanity-separater">/</span><a href="#"
                                                class="gdlr-core-filterer gdlr-core-button-color" data-ajax-name="category"
                                                data-ajax-value="designer">Design</a><span
                                                class="kleanity-separater">/</span><a href="#"
                                                class="gdlr-core-filterer gdlr-core-button-color" data-ajax-name="category"
                                                data-ajax-value="operation">Operation</a>
                                        </div> --}}
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
                                                                {{-- <span
                                                                    class="gdlr-core-head">By</span>
                                                                    {{-- <a href="#"
                                                                    title="Posts by rievents"
                                                                    rel="author">rievents</a> --}}
                                                            </span>
                                                            {{-- <span
                                                                class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><span
                                                                    class="gdlr-core-head">In</span><a href="#"
                                                                    rel="tag">Account</a>
                                                                </span> --}}
                                                        </div>
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title"
                                                            style="
                                                    font-size: 40px;
                                                    font-weight: 800;
                                                    letter-spacing: 0px;
                                                    ">
                                                            <a href="#">{{ $post->title }}</a>
                                                        </h3>
                                                    </div>
                                                    <div class="gdlr-core-blog-content">
                                                        {{ $post->excerpt }}
                                                        <div class="clear"></div>
                                                        <a class="gdlr-core-excerpt-read-more kleanity-title-font"
                                                            href="{{ route('user.work-for-us', $post->slug) }}">Continue
                                                            Reading<i class="fa fa-long-arrow-right"></i></a>
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
