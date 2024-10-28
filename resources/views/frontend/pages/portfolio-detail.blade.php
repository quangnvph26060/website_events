@extends('frontend.layouts.master')

@section('content')
    <div class="kleanity-page-wrapper" id="kleanity-page-wrapper">
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-wrapper" style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px">
                <div class="gdlr-core-pbf-background-wrap"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-1">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix gdlr-core-gallery-item-style-stack-image gdlr-core-item-pdlr">
                                            <div class="gdlr-core-gallery-item-holder gdlr-core-js-2">

                                                @foreach ($work->images as $item)
                                                    <div class="gdlr-core-item-list gdlr-core-item-mgb"
                                                        style="margin-bottom: 30px">
                                                        <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                            <a class="gdlr-core-ilightbox gdlr-core-js"
                                                                href="{{ showImage($item->image_path ?? '') }}"
                                                                data-ilightbox-group="gdlr-core-img-group-1"
                                                                data-type="image"><noscript><img
                                                                        src="{{ showImage($item->image_path ?? '') }}"
                                                                        alt="" width="2560" height="1600"
                                                                        title="PTSC.30Years (122)" /></noscript>
                                                                <img class="ls-is-cached lazyloaded"
                                                                    src="{{ showImage($item->image_path ?? '') }}"
                                                                    data-src="{{ showImage($item->image_path ?? '') }}"
                                                                    alt="" width="2560" height="1600"
                                                                    title="PTSC.30Years (122)" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-video-item gdlr-core-item-pdlr gdlr-core-item-pdb">
                                            <div class="gdlr-core-video-item-type-youtube">
                                                <div class="gdlr-core-fluid-video-wrapper" style="padding-top: 56.25%">
                                                    {!! $work->link_video !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-wrapper" style="padding: 30px 0px 30px 0px">
                <div class="gdlr-core-pbf-background-wrap"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h4 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                        style="
                                        font-size: 40;
                                        font-weight: 700;
                                        text-transform: none;
                                        color: #eba904;
                                        ">
                                        Thông tin dự án<span
                                            class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-port-info-item gdlr-core-item-pdb gdlr-core-item-pdlr"
                                            style="padding-bottom: 50px">
                                            <div
                                                class="gdlr-core-port-info-wrap gdlr-core-skin-divider gdlr-core-with-border">
                                                <div class="gdlr-core-port-info">
                                                    <span class="gdlr-core-port-info-key gdlr-core-skin-title">Khách
                                                        hàng</span><span
                                                        class="gdlr-core-port-info-value">{{ $work->customer }}</span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span class="gdlr-core-port-info-key gdlr-core-skin-title">Dự
                                                        án</span><span
                                                        class="gdlr-core-port-info-value">{{ $work->project_name }}</span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span class="gdlr-core-port-info-key gdlr-core-skin-title">
                                                        Người tham dự</span><span
                                                        class="gdlr-core-port-info-value">{{ $work->participants_count }}</span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">Năm</span><span
                                                        class="gdlr-core-port-info-value">{{ $work->year }}</span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span class="gdlr-core-port-info-key gdlr-core-skin-title">Địa
                                                        điểm</span><span
                                                        class="gdlr-core-port-info-value">{{ $work->location }}</span>
                                                </div>
                                                <div class="gdlr-core-port-info gdlr-core-port-info-post-type-tax">
                                                    <span class="gdlr-core-port-info-key gdlr-core-skin-title">Danh
                                                        mục</span>
                                                    <span class="gdlr-core-port-info-value">
                                                        @foreach ($work->catalogues as $catalogue)
                                                            <a href="{{ route('user.portfolio_tag', $catalogue->slug) }}"
                                                                rel="tag">
                                                                {{ $catalogue->name }}
                                                            </a>{{ !$loop->last ? ', ' : '' }}
                                                        @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gdlr-core-portfolio-single-related gdlr-core-style-grid">
            <div class="gdlr-core-container">
                <h3 class="gdlr-core-portfolio-single-related-head gdlr-core-item-pdlr">Dự án liên quan</h3>
                <div class="gdlr-core-portfolio-item-holder clearfix">
                    @foreach ($relatedWorks as $key => $relatedWork)
                        <div
                            class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-column-15 @if ($key % 3 == 0) gdlr-core-column-first @endif">
                            <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-normal">
                                <div
                                    class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-icon-title">
                                    <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                                        <noscript><img
                                                src="{{ showImage($relatedWork->images->first()->image_path ?? '') }}"
                                                alt="" width="700" height="450"
                                                title="PM3. Thank You Party (5)" /></noscript><img
                                            class=" ls-is-cached lazyloaded"
                                            src="{{ showImage($relatedWork->images->first()->image_path ?? '') }}"
                                            data-src="{{ showImage($relatedWork->images->first()->image_path ?? '') }}"
                                            alt="" width="700" height="450"
                                            title="PM3. Thank You Party (5)"><span
                                            class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"><span
                                                class="gdlr-core-image-overlay-content" style="margin-top: -45.55px;"><span
                                                    class="gdlr-core-portfolio-icon-wrap"><a
                                                        class="gdlr-core-ilightbox gdlr-core-js "
                                                        href="{{ route('user.portfolio', $relatedWork->slug) }}"
                                                        data-ilightbox-group="single-related-portfolio"
                                                        data-type="image"><i
                                                            class="gdlr-core-portfolio-icon arrow_expand"></i></a></span><span
                                                    class="gdlr-core-portfolio-title gdlr-core-title-font "><a
                                                        href="{{ route('user.portfolio', $relatedWork->slug) }}">{{ $relatedWork->title }}</a></span></span></span>
                                    </div>
                                </div>
                                <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                    <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title"><a
                                            href="{{ route('user.portfolio', $relatedWork->slug) }}">{{ $relatedWork->title }}</a>
                                    </h3>

                                    <span
                                        class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption">

                                        @foreach ($relatedWork->catalogues as $catalogue2)
                                            <a href="{{ route('user.portfolio_tag', $catalogue2->slug) }}"
                                                rel="tag">{{ $catalogue2->name }}</a>
                                            @if (!$loop->last)
                                                <span class="gdlr-core-sep">/</span>
                                            @endif
                                        @endforeach
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
