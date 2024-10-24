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
                                                    <span
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">Khách hàng</span><span
                                                        class="gdlr-core-port-info-value">{{ $work->customer }}</span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">Dự án</span><span
                                                        class="gdlr-core-port-info-value">{{ $work->project_name }}</span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">
                                                        Người tham dự</span><span
                                                        class="gdlr-core-port-info-value">{{ $work->participants_count }}</span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">Năm</span><span
                                                        class="gdlr-core-port-info-value">{{ $work->year }}</span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">Địa điểm</span><span
                                                        class="gdlr-core-port-info-value">{{ $work->location }}</span>
                                                </div>
                                                <div class="gdlr-core-port-info gdlr-core-port-info-post-type-tax">
                                                    <span
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">Danh mục</span>
                                                        <span class="gdlr-core-port-info-value">
                                                            <a href="#" rel="tag">
                                                                {{ implode(', ', $work->catalogues->pluck('name')->toArray()) }}
                                                            </a>
                                                </div>
                                                <div
                                                    class="gdlr-core-port-info gdlr-core-port-info-social-share gdlr-core-skin-divider">
                                                    <span class="gdlr-core-port-info-key gdlr-core-skin-title">Share</span>
                                                    <div class="gdlr-core-port-info-value">
                                                        <div class="gdlr-core-social-share-item gdlr-core-item-pdb gdlr-core-left-align gdlr-core-social-share-left-text gdlr-core-item-mglr gdlr-core-style-plain gdlr-core-no-counter"
                                                            style="padding-bottom: 0px">
                                                            <span class="gdlr-core-social-share-wrap"><a
                                                                    class="gdlr-core-social-share-facebook" href="#"
                                                                    target="_blank"
                                                                    onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=602,width=555');return false;"><i
                                                                        class="fa fa-facebook"></i></a><a
                                                                    class="gdlr-core-social-share-google-plus"
                                                                    href="#" target="_blank"
                                                                    onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=614,width=496');return false;"><i
                                                                        class="fa fa-google-plus"></i></a><a
                                                                    class="gdlr-core-social-share-email" href="#"><i
                                                                        class="fa fa-envelope"></i></a></span>
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
            </div>
        </div>
    </div>
@endsection
