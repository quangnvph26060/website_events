@extends('frontend.layouts.master')

@section('title', $work->title)

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
                                                                data-type="image">
                                                                <img class="ls-is-cached lazyloaded"
                                                                    src="{{ showImage($item->image_path ?? '') }}"
                                                                    data-src="{{ showImage($item->image_path ?? '') }}"
                                                                    alt="{{ $item->title }}" width="2560" height="1600"
                                                                    title="PTSC.30Years (122)" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    @if ($work->link_video)
                                        <div class="gdlr-core-pbf-element">
                                            <div class="gdlr-core-video-item gdlr-core-item-pdlr gdlr-core-item-pdb">
                                                <div class="gdlr-core-video-item-type-youtube">
                                                    <div class="gdlr-core-fluid-video-wrapper" style="padding-top: 56.25%">
                                                        {!! $work->link_video !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
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
                                        font-size: 40px;
                                        font-weight: 700;
                                        text-transform: none;
                                        color: #154BA3;
                                        margin-bottom: 20px
                                        ">
                                        @lang('lang.info-work')<span
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
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">@lang('lang.client')</span>
                                                    <span class="gdlr-core-port-info-value" id="client">
                                                        {{ getLocalizedContent($work, 'customer', \App::getLocale()) }}
                                                    </span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">@lang('lang.project')</span><span
                                                        class="gdlr-core-port-info-value" id="project">
                                                        {{ getLocalizedContent($work, 'project_name', \App::getLocale()) }}
                                                    </span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span class="gdlr-core-port-info-key gdlr-core-skin-title">
                                                        @lang('lang.attendee')</span><span class="gdlr-core-port-info-value"
                                                        id="attendee">
                                                        {{ $work->participants_count }}
                                                    </span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">@lang('lang.year')</span><span
                                                        class="gdlr-core-port-info-value"
                                                        id="year">{{ $work->year }}</span>
                                                </div>
                                                <div class="gdlr-core-port-info">
                                                    <span
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">@lang('lang.location')</span><span
                                                        class="gdlr-core-port-info-value" id="location">
                                                        {{ getLocalizedContent($work, 'location', \App::getLocale()) }}
                                                    </span>
                                                </div>
                                                <div class="gdlr-core-port-info gdlr-core-port-info-post-type-tax">
                                                    <span
                                                        class="gdlr-core-port-info-key gdlr-core-skin-title">@lang('lang.catalogue')
                                                    </span>
                                                    <span class="gdlr-core-port-info-value" id="catalogue">
                                                        {{ $work->cata->name }}
                                                        {{-- @foreach ($work->catalogues as $catalogue)
                                                            <a href="{{ route('user.portfolio_tag', $catalogue->slug) }}"
                                                                rel="tag">
                                                                {{ getLocalizedContent($catalogue, 'name', \App::getLocale()) }}
                                                            </a>{{ !$loop->last ? ', ' : '' }}
                                                        @endforeach --}}
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

        <style>
            @media (min-width: 767px) {
                #client {
                    margin-left: 85px
                }

                #project {
                    margin-left: 100px
                }

                #attendee {
                    margin-left: 60px
                }

                #year {
                    margin-left: 102px
                }

                #location {
                    margin-left: 96px
                }

                #catalogue {
                    margin-left: 98px
                }

            }

            @media (max-width: 767px) {
                #client {
                    margin-left: 25px
                }

                #project {
                    margin-left: 39px
                }



                #year {
                    margin-left: 40px
                }

                #location {
                    margin-left: 40px
                }

                #catalogue {
                    margin-left: 40px
                }
            }
        </style>

        <div class="gdlr-core-portfolio-single-related gdlr-core-style-grid">
            <div class="gdlr-core-container">
                <h3 class="gdlr-core-portfolio-single-related-head gdlr-core-item-pdlr">@lang('lang.related-projects')</h3>
                <div class="gdlr-core-portfolio-item-holder clearfix">
                    @foreach ($relatedWorks as $key => $relatedWork)
                        <div
                            class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-column-15 @if ($key % 4 == 0) gdlr-core-column-first @endif">
                            <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-normal">
                                <div
                                    class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-icon-title">
                                    <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover">
                                        <noscript>
                                            <img src="{{ showImage($relatedWork->images->first()->image_path ?? '') }}"
                                                alt="{{ $relatedWork->title }}" width="700" height="450"
                                                title="{{ $relatedWork->title }}" />
                                        </noscript>
                                        <img class=" ls-is-cached lazyloaded"
                                            src="{{ showImage($relatedWork->images->first()->image_path ?? '') }}"
                                            data-src="{{ showImage($relatedWork->images->first()->image_path ?? '') }}"
                                            alt="" width="700" height="450" title="{{ $relatedWork->title }}">
                                        <span
                                            class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js">
                                            <span class="gdlr-core-image-overlay-content" style="margin-top: -45.55px;">
                                                <span class="gdlr-core-portfolio-icon-wrap"><a
                                                        class="gdlr-core-ilightbox gdlr-core-js "
                                                        href="{{ showImage($relatedWork->images->first()->image_path ?? '') }}"
                                                        data-ilightbox-group="single-related-portfolio" data-type="image">
                                                        <i class="fas fa-expand-alt"></i>
                                                    </a>
                                                </span>
                                                <span class="gdlr-core-portfolio-title gdlr-core-title-font ">
                                                    <a href="{{ route('user.portfolio', $relatedWork->slug) }}">
                                                        {{ getLocalizedContent($relatedWork, 'title', \App::getLocale()) }}
                                                    </a>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                    <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title"><a
                                        href="{{ route('user.portfolio', $relatedWork->slug) }}">
                                        {{ getLocalizedContent($relatedWork, 'title', \App::getLocale()) }}
                                    </a>
                                </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

