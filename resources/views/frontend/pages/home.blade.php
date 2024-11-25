@extends('frontend.layouts.master')

@section('content')

    @include('frontend/include/slider')


    <div class="gdlr-core-pbf-wrapper 01" style="padding: 20px 0px 40px 0px" id="01">
        <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff"></div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px">
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle"
                                        style="border-width: 0px">
                                        <img class="ls-is-cached lazyloaded"
                                            src="{{ asset('frontend/assets/image/hp1-service-icon.png') }}"
                                            data-src="{{ asset('frontend/assets/image/hp1-service-icon.png') }}"
                                            alt="{{ $configHome->title_1 }}" width="44" height="35"
                                            title="hp1-service-icon" />
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                    style="padding-bottom: 25px">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                            style="

                                                font-weight: 600;
                                                letter-spacing: 0px;
                                                text-transform: none;
                                                color: #154BA3;
                                                ">

                                            {{ getLocalizedContent($configHome, 'title_1', \App::getLocale()) }}
                                            <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                        </h3>
                                    </div>
                                    <span
                                        class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption">{{ getLocalizedContent($configHome, 'quote_1', \App::getLocale()) }}</span>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                    <div class="gdlr-core-divider-container" style="max-width: 20px">
                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                            style="border-color: #154BA3"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- {!! getLocalizedContentHtml($configHome, 'content', \App::getLocale()) !!} --}}



                            @php
                                $textArray = getLocalizedContent($configHome, 'content', \App::getLocale());
                            @endphp

                            @foreach ($textArray as $item)
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                        <div class="gdlr-core-text-box-item-content">
                                            {!! $item !!}
                                        </div>
                                    </div>
                                </div>
                                @if ($loop->last == false)
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align"
                                            style="margin-top: 0px">
                                            <div class="gdlr-core-divider-container" style="max-width: 20px">
                                                <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                                    style="border-color: #154BA3"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"
                                    style="margin-top: 30px">
                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-button-with-border"
                                        href="{{ route('user.about-us') }}"
                                        style="
                                        font-size: 20px;
                                        color: #154BA3;
                                        border-color: #154BA3;
                                      "><span
                                            class="gdlr-core-content">
                                            @lang('lang.learn-more')</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gdlr-core-pbf-section">
        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
            <div class="gdlr-core-pbf-element">
                <div
                    class="gdlr-core-divider-item gdlr-core-divider-item-with-icon gdlr-core-item-pdlr gdlr-core-center-align">
                    <div class="gdlr-core-divider-item-with-icon-inner gdlr-core-js">
                        <div class="gdlr-core-divider-line gdlr-core-left gdlr-core-skin-divider"
                            style="
                            border-color: #154BA3;
                            width: 439.9px;
                            margin-top: -0.4px;
                            ">
                        </div>
                        <i class="fa fa-briefcase"></i>
                        <div class="gdlr-core-divider-line gdlr-core-skin-divider gdlr-core-right"
                            style="
                            border-color: #154BA3;
                            width: 439.9px;
                            margin-top: -0.4px;
                            ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gdlr-core-pbf-wrapper 02" style="padding: 20px 0px 40px 0px" data-skin="Blog Hp 6" id="02">
        <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff"></div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-icon-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"
                        style="padding-bottom: 15px">
                        <i class="gdlr-core-icon-item-icon fa fa-folder-open-o"
                            style="
                        color: #154BA3;
                        font-size: 40px;
                        min-width: 40px;
                        min-height: 40px;
                        "></i>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                        style="padding-bottom: 25px">
                        <div class="gdlr-core-title-item-title-wrap">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                style="
                            font-weight: 600;
                            letter-spacing: 0px;
                            text-transform: none;
                            color: #154BA3;
                            ">

                                {{ getLocalizedContent($configHome, 'title_2', \App::getLocale()) }}
                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                            </h3>
                        </div>
                        <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption">
                            {{ getLocalizedContent($configHome, 'quote_2', \App::getLocale()) }}
                        </span>
                    </div>
                </div>

                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix gdlr-core-portfolio-item-style-metro"
                        style="padding-bottom: 0px">
                        <div class="gdlr-core-filterer-wrap gdlr-core-js gdlr-core-style-text gdlr-core-item-pdlr gdlr-core-center-align kleanity-with-left-divider"
                            data-ajax="gdlr_core_home_ajax" data-target="gdlr-core-portfolio-item-holder"
                            data-target-action="replace">
                            <div class="desktop-view">
                                <a href="#"
                                    class="gdlr-core-filterer gdlr-core-button-color gdlr-core-active">@lang('lang.all')</a>
                                @foreach ($catalogues as $catalogue)
                                    <a href="#" class="gdlr-core-filterer gdlr-core-button-color"
                                        data-ajax-name="category" data-ajax-value="{{ $catalogue->id }}">

                                        {{ getLocalizedContent($catalogue, 'name', \App::getLocale()) }}
                                    </a>
                                    @if ($loop->last == false)
                                        <span class="kleanity-separater">/</span>
                                    @endif
                                @endforeach
                            </div>
                            <div class="mobile-view" style="display: none">
                                <select id="mobile-filter-select" class="gdlr-core-filterer-select">
                                    <option value="" data-ajax-name="category" data-ajax-value="">@lang('lang.all')
                                    </option>
                                    @foreach ($catalogues as $catalogue)
                                        <option value="{{ $catalogue->id }}" data-ajax-name="category"
                                            data-ajax-value="{{ $catalogue->id }}">
                                            {{ getLocalizedContent($catalogue, 'name', \App::getLocale()) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix" data-layout="masonry"
                            style="position: relative; height: 1252.35px;">
                            @if ($works->isNotEmpty())
                                @foreach ($works as $work)
                                    <div class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 gdlr-core-column-first gdlr-core-animate-end"
                                        style="position: absolute; left: 0px; top: 0px">
                                        <div class="gdlr-core-portfolio-metro">
                                            <div
                                                class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-date gdlr-core-metro-rvpdlr">
                                                <div
                                                    class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                    <img class="ls-is-cached lazyloaded"
                                                        src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                                        data-src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                                        alt="{{ $work->title }}" width="2560" height="1707"
                                                        title="{{ $work->title }}" /><span
                                                        class="gdlr-core-image-overlay gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"
                                                        style="background: rgba(31, 4, 235, 0.6)"><span
                                                            class="gdlr-core-image-overlay-content"
                                                            style="margin-top: -26.725px"><span
                                                                class="gdlr-core-portfolio-title gdlr-core-title-font"><a
                                                                    href="{{ route('user.portfolio', $work->slug) }}">
                                                                    {{ getLocalizedContent($work, 'title', \App::getLocale()) }}
                                                                </a></span><span
                                                                class="gdlr-core-portfolio-info gdlr-core-portfolio-date-wrap">
                                                                {{ \Carbon\Carbon::parse($work->created_at)->format('F j, Y') }}</span></span></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: -18px 0px 0px 0px">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"
                                    style="margin-top: 30px">
                                    <a class="gdlr-core-button gdlr-core-button-transparent gdlr-core-button-with-border"
                                        href="{{ route('user.portfolio') }}"
                                        style="
            font-size: 20px;
            color: #154BA3;
            border-color: #154BA3;
          "><span
                                            class="gdlr-core-content">
                                            @lang('lang.see-all-works')</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gdlr-core-pbf-section">
        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
            <div class="gdlr-core-pbf-element">
                <div
                    class="gdlr-core-divider-item gdlr-core-divider-item-with-icon gdlr-core-item-pdlr gdlr-core-center-align">
                    <div class="gdlr-core-divider-item-with-icon-inner gdlr-core-js">
                        <div class="gdlr-core-divider-line gdlr-core-left gdlr-core-skin-divider"
                            style="
                            border-color: #154BA3;
                            width: 439.9px;
                            margin-top: -0.4px;
                            ">
                        </div>
                        <i class="fa fa-briefcase"></i>
                        <div class="gdlr-core-divider-line gdlr-core-skin-divider gdlr-core-right"
                            style="
                        border-color: #154BA3;
                        width: 439.9px;
                        margin-top: -0.4px;
                        ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gdlr-core-pbf-wrapper 03" style="padding: 20px 0px 20px 0px" id="03">
        <div class="gdlr-core-pbf-background-wrap"></div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                    style="padding-bottom: 25px">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                            style="
                            font-weight: 600;
                            letter-spacing: 0px;
                            text-transform: none;
                            color: #154BA3;">
                                            {{ getLocalizedContent($configHome, 'title_3', \App::getLocale()) }}
                                            <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"
                                    style="padding-bottom: 0px">
                                    <div class="gdlr-core-text-box-item-content">
                                        <p>
                                            {{ getLocalizedContent($configHome, 'quote_3', \App::getLocale()) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-divider-item gdlr-core-divider-item-small-center gdlr-core-item-pdlr">
                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #154BA3">
                            <div class="gdlr-core-divider-line-bold gdlr-core-skin-divider" style="border-color: #154BA3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin  gdlr-core-full-height-center"
                        style="min-height: 520px">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js gdlr-core-full-height-content">
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle"
                                        style="border-width: 0px">
                                        @if ($partners->isNotEmpty())
                                            <div class="partner-container">
                                                @foreach ($partners as $partner)
                                                    <img class="lazyload d-flex-box"
                                                        src="{{ showImage($partner->logo ?? '') }}"
                                                        data-src="{{ showImage($partner->logo ?? '') }}"
                                                        alt="{{ $partner->title }}" title="{{ $partner->title }}"
                                                        style="margin-bottom: 5px; width: 200px; auto" />
                                                @endforeach
                                            </div>
                                        @endif
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
        /* Media Queries */
        @media (max-width: 768px) {
            .partner-container {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                /* Khoảng cách giữa các ảnh */
                justify-content: center;
                /* Canh giữa các ảnh */
            }

            .partner-container img {
                flex: 1 1 calc(33.33% - 10px);
                /* Mỗi ảnh chiếm 1/3 chiều rộng trừ khoảng cách */
                max-width: calc(33.33% - 10px);
                /* Đảm bảo giới hạn chiều rộng */
                height: auto;
                /* Tự động điều chỉnh chiều cao theo tỷ lệ */
            }

            .partner-container img {
                flex: 1 1 calc(100% / 3 - 10px);
                /* Điều chỉnh cho mobile */
            }
        }
    </style>

    <div class="gdlr-core-pbf-section">
        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
            <div class="gdlr-core-pbf-element">
                <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px"></div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div
                    class="gdlr-core-divider-item gdlr-core-divider-item-with-icon gdlr-core-item-pdlr gdlr-core-center-align">
                    <div class="gdlr-core-divider-item-with-icon-inner gdlr-core-js">
                        <div class="gdlr-core-divider-line gdlr-core-left gdlr-core-skin-divider"
                            style="
                border-color: #154BA3;
                width: 439.9px;
                margin-top: -0.4px;
                    ">
                        </div>
                        <i class="fa fa-briefcase"></i>
                        <div class="gdlr-core-divider-line gdlr-core-skin-divider gdlr-core-right"
                            style="
                    border-color: #154BA3;
                    width: 439.9px;
                    margin-top: -0.4px;
                    ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="gdlr-core-pbf-wrapper 04" style="padding: 20px 0px 30px 0px" id="04">
        <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff"></div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                        style="padding-bottom: 25px">
                        <div class="gdlr-core-title-item-title-wrap">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                style="
                                font-weight: 600;
                            letter-spacing: 0px;
                            text-transform: none;
                            color: #154BA3;">
                                {{ getLocalizedContent($configHome, 'title_4', \App::getLocale()) }}
                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align"
                        style="padding-bottom: 25px">
                        <div class="gdlr-core-text-box-item-content">
                            <p style="text-align: center">
                                {{ getLocalizedContent($configHome, 'quote_4', \App::getLocale()) }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-divider-item gdlr-core-divider-item-small-center gdlr-core-item-pdlr"
                        style="margin-bottom: 15px">
                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #154BA3">
                            <div class="gdlr-core-divider-line-bold gdlr-core-skin-divider" style="border-color: #154BA3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 10px 0px 10px 0px">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                    style="padding-bottom: 10px">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                            style="
                        font-size: 25px;
                        font-weight: 400;
                        letter-spacing: 0px;
                        text-transform: none;
                        color: #154BA3;
                        ">
                                            @lang('lang.phone') <span
                                                class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-left-align">
                                    <ul>
                                        <li class="gdlr-core-skin-divider gdlr-core-with-hover">
                                            <a href="tel: {{ $configWebsite->constant_hotline }}" target="_self">
                                                <span class="gdlr-core-icon-list-icon-wrap"><i
                                                        class="gdlr-core-icon-list-icon fa fa-phone"
                                                        style="font-size: 20px; width: 20px"></i>
                                                </span>

                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content">+84
                                                        {{ $configWebsite->constant_hotline }}</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 10px 0px 10px 0px">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                    style="padding-bottom: 10px">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                            style="
                        font-size: 25px;
                        font-weight: 400;
                        letter-spacing: 0px;
                        text-transform: none;
                        color: #154BA3;
                        ">
                                            Email<span
                                                class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-left-align">
                                    <ul>
                                        <li class="gdlr-core-skin-divider gdlr-core-with-hover">
                                            <a href="mailto:contact@rievents.vn" target="_self"><span
                                                    class="gdlr-core-icon-list-icon-wrap"><i style="font-size: 20px;"
                                                        class="gdlr-core-icon-list-icon fa fa-envelope-o"></i></span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span
                                                        class="gdlr-core-icon-list-content">{{ $configWebsite->email }}</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 10px 0px 10px 0px">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                            <div class="gdlr-core-pbf-element">
                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                    style="padding-bottom: 10px">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                            style="
                                                font-size: 25px;
                                                font-weight: 400;
                                                letter-spacing: 0px;
                                                text-transform: none;
                                                color: #154BA3;
                                                ">
                                            @lang('lang.address')<span
                                                class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-left-align">
                                    <ul>
                                        @php
                                            $ad = getLocalizedContent($configWebsite, 'address', \App::getLocale());
                                            $address = explode('|', $ad);
                                        @endphp

                                        @foreach ($address as $a)
                                            <li class="gdlr-core-skin-divider gdlr-core-with-hover">
                                                <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($a) }}"
                                                    target="_blank">
                                                    <span class="gdlr-core-icon-list-icon-wrap">
                                                        <i class="gdlr-core-icon-list-icon-hover fa fa-map-marker"
                                                            style="font-size: 22px"></i>
                                                        <i class="gdlr-core-icon-list-icon fa fa-map-marker"
                                                            style="font-size: 22px; width: 22px"></i>
                                                    </span>
                                                    <div class="gdlr-core-icon-list-content-wrap">
                                                        <span class="gdlr-core-icon-list-content" style="font-size: 16px">
                                                            {{ $a }}
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach

                                        <li class="gdlr-core-skin-divider">
                                            <div class="gdlr-core-icon-list-content-wrap"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px">
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                        style="padding-bottom: 15px">
                        <div class="gdlr-core-title-item-title-wrap">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                style="
                        font-size: 30px;
                        font-weight: 400;
                        letter-spacing: 0px;
                        text-transform: none;
                        color: #154BA3;
                    ">

                                @lang('lang.map')<span
                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    {!! $configHome->map !!}
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px">
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px">
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                        style="padding-bottom: 15px">
                        <div class="gdlr-core-title-item-title-wrap">
                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                style="
                                    font-weight: 600;
                                    letter-spacing: 0px;
                                    text-transform: none;
                                    color: #154BA3;
                                ">

                                @lang('lang.information')
                                <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                        style="padding-bottom: 25px">
                        <div class="gdlr-core-text-box-item-content">
                            <p style="text-align: left">
                                @lang('lang.i-and')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div
                        class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                        <div class="gdlr-core-divider-container" style="max-width: 40px">
                            <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                style="border-color: #154BA3; border-width: 2px"></div>
                        </div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb">
                        <div class="wpcf7 js" id="wpcf7-f1319-p2039-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form id="contactForm" autocomplete="off">
                                @csrf
                                <div
                                    class="gdlr-core-input-wrap gdlr-core-large gdlr-core-full-width gdlr-core-with-column gdlr-core-no-border">
                                    <div class="gdlr-core-column-30">
                                        <p>
                                            <input type="text" name="fullName" {{ old('fullName') }}
                                                class="wpcf7-form-control-wrap" placeholder="@lang('lang.name')*">
                                            <span class="text-danger error-text fullName_error" style="color: red"></span>
                                        </p>
                                    </div>
                                    <div class="gdlr-core-column-30">
                                        <p>
                                            <input type="text" name="email" {{ old('email') }}
                                                placeholder="Email*" class="wpcf7-form-control-wrap">

                                            <span class="text-danger error-text email_error" style="color: red"></span>
                                        </p>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="gdlr-core-column-30">
                                        <p>
                                            <input type="text" name="phone" {{ old('phone') }}
                                                placeholder="@lang('lang.phone_number')*" class="wpcf7-form-control-wrap">

                                            <span class="text-danger error-text phone_error" style="color: red"></span>
                                        </p>
                                    </div>
                                    <div class="gdlr-core-column-30">
                                        <p>
                                            <input type="text" name="company" value="{{ old('company') }}"
                                                placeholder="@lang('lang.company')*" class="wpcf7-form-control-wrap">

                                            <span class="text-danger error-text company_error" style="color: red"></span>
                                        </p>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="gdlr-core-column-60">
                                        <p>
                                            <input type="text" name="subject" value="{{ old('subject') }}"
                                                placeholder="@lang('lang.subject')*" class="wpcf7-form-control-wrap">

                                            <span class="text-danger error-text subject_error" style="color: red"></span>
                                        </p>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="gdlr-core-column-60">
                                        <p>
                                            <span class="wpcf7-form-control-wrap">
                                                <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea"
                                                    placeholder="@lang('lang.message')*" name="message">{{ old('message') }}</textarea>

                                                <span class="text-danger error-text message_error"
                                                    style="color: red"></span>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="gdlr-core-column-60 gdlr-core-center-align">
                                        <p>

                                            <button class="contact-button"
                                                id="btn-contact-submit">@lang('lang.send')</button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('styles')
    <style>
        #contactForm input,
        #contactForm textarea {
            border: 1px solid rgba(21, 75, 163, .3) !important;
            border-radius: 3px;
        }

        .gdlr-core-pbf-element iframe {
            width: 100% !important;
        }

        .contact-button {
            background-color: #333;
            color: white;
            padding: 15px 50px;
            border: none;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 14px;
            letter-spacing: 2px;
            cursor: pointer;
            text-align: center;
            width: 100%;
        }

        .contact-button:hover {
            background-color: #154BA3;
        }
    </style>
@endpush


@push('scripts')
    <script src="{{ asset('backend/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script>

    

        jQuery(document).ready(function() {
            jQuery("#btn-contact-submit").click(function(e) {
                e.preventDefault();
                var _token = jQuery("input[name='_token']").val();
                var fullName = jQuery("input[name='fullName']").val();
                var email = jQuery("input[name='email']").val();
                var phone = jQuery("input[name='phone']").val();
                var subject = jQuery("input[name='subject']").val();
                var company = jQuery("input[name='company']").val();
                var message = jQuery("textarea[name='message']").val();

                jQuery.ajax({
                    url: '{{ route('user.contact-us.submit') }}',
                    type: 'POST',
                    data: {
                        _token: _token,
                        fullName: fullName,
                        email: email,
                        phone: phone,
                        subject: subject,
                        company: company,
                        message: message,
                    },
                    success: function(data) {
                        if (data.success) {
                            jQuery(".error-text").text('');
                            Swal.fire({
                                icon: 'success',
                                title: 'Thành công!',
                                text: data.success,
                                showConfirmButton: false,
                                timer: 2000
                            }).then(() => {
                                jQuery("#contactForm")[0].reset();
                            });
                        } else if (data.error) {
                            if (data.validation_errors) {
                                printErrorMsg(data.validation_errors);
                            } else if (data.spam_error) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Chậm lại!',
                                    text: data.spam_error,
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                            }
                        }
                    },
                });


            });

            function printErrorMsg(msg) {
                jQuery(".error-text").text('');

                jQuery.each(msg, function(key, value) {
                    jQuery('.' + key + '_error').text(value[0]);
                });
            }
        })
    </script>
@endpush
