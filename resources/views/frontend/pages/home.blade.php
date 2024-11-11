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
                                        <noscript><img src="{{ asset('frontend/assets/image/hp1-service-icon.png') }}"
                                                alt="{{ $configHome->title_1 }}" width="44" height="35"
                                                title="hp1-service-icon" /></noscript><img class="ls-is-cached lazyloaded"
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

                            @php($textArray = getLocalizedContent($configHome, 'content', \App::getLocale()))

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
                                <span
                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                            </h3>
                        </div>
                        <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption">
                            {{ getLocalizedContent($configHome, 'quote_2', \App::getLocale()) }}
                        </span>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px">
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix gdlr-core-portfolio-item-style-metro"
                        style="padding-bottom: 0px">
                        <div class="gdlr-core-filterer-wrap gdlr-core-js gdlr-core-style-text gdlr-core-item-pdlr gdlr-core-center-align kleanity-with-left-divider"
                            data-ajax="gdlr_core_home_ajax"
                            data-settings='{"category":["corporate-event","design-production","private-event","public-event"],"tag":["launching-en","business-development","ceremonial","corporate-annual-party","corporate-celebrations","music-show","customer-conference","employee-appreciation","employee-engagement","milestones","entertainment","exhibition","global-conference","internal-meeting","partner-appreciations","press-conference","sales-or-hospitality","festival"],"num-fetch":"15","layout":"masonry","thumbnail-size":"medium_large","orderby":"date","order":"desc","portfolio-style":"metro","hover":"title-date","hover-info":["title","date"],"has-column":"yes","no-space":"no","excerpt":"specify-number","excerpt-number":"55","column-size":"20","filterer":"text","filterer-align":"center","pagination":"none","id":"","class":"","filterer-left-margin":"305px","filterer-left-divider":"enable","pagination-style":"default","pagination-align":"default","view-all-works-button":"disable","view-all-works-text":"xem tất cả tác phẩm","view-all-works-link":"","portfolio-grid-text-align":"left","portfolio-grid-style":"normal","portfolio-frame-opacity":"1","enable-portfolio-title":"enable","enable-portfolio-tag":"enable","enable-portfolio-date":"disable","portfolio-medium-size":"small","portfolio-medium-style":"left","enable-thumbnail-zoom-on-hover":"enable","enable-thumbnail-grayscale-effect":"disable","enable-badge":"enable","carousel-autoslide":"enable","carousel-start-at":"","carousel-scrolling-item-amount":"1","carousel-navigation":"navigation","carousel-bullet-style":"default","read-more-button":"disable","filter-font-size":"20px","filter-font-weight":"","filter-letter-spacing":"","filter-text-transform":"uppercase","portfolio-title-font-size":"","portfolio-title-font-weight":"","portfolio-title-letter-spacing":"","portfolio-title-text-transform":"uppercase","portfolio-tag-font-style":"default","portfolio-hover-title-font-size":"","portfolio-hover-title-font-weight":"","portfolio-hover-title-letter-spacing":"","portfolio-hover-title-text-transform":"uppercase","filterer-bottom-margin":"50px","portfolio-frame-padding":"","portfolio-border-radius":"","portfolio-item-bottom-margin":"","portfolio-title-bottom-margin":"","pagination-top-margin":"","padding-bottom":"0px","frame-shadow-size":"","frame-shadow-color":"","frame-shadow-opacity":"0.2","overlay-color":"#154BA3","overlay-opacity":"0.85","title-align":"left","title-left-media":"icon","title-left-icon":"","title-left-image":"","title":"","caption":"","caption-position":"top","read-more-style":"default","read-more-text":"Read More","read-more-link":"http:\/\/rievents.vn\/portfolio\/","read-more-target":"_self","title-size":"41px","title-letter-spacing":"","title-line-height":"","title-font-style":"","title-text-transform":"uppercase","caption-size":"20px","caption-font-style":"","caption-spaces":"","read-more-size":"20px","read-more-font-weight":"","title-left-icon-color":"","title-color":"","caption-color":"","read-more-color":"#154BA3","read-more-divider":"none","read-more-divider-color":"#154BA3","title-wrap-bottom-margin":"","title-carousel-nav-style":"default","lightbox-group":"gdlr-core-img-group-1","paged":1}'
                            data-target="gdlr-core-portfolio-item-holder" data-target-action="replace">
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
                        <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix" data-layout="masonry"
                            style="position: relative; height: 1252.35px">
                            @if ($works->isNotEmpty())
                                @foreach ($works as $work)
                                    <div class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 gdlr-core-column-first gdlr-core-animate-end"
                                        style="position: absolute; left: 0px; top: 0px">
                                        <div class="gdlr-core-portfolio-metro">
                                            <div
                                                class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-date gdlr-core-metro-rvpdlr">
                                                <div
                                                    class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                    <noscript><img
                                                            src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                                            alt="{{ $work->title }}" width="2560" height="1707"
                                                            title="{{ $work->title }}" /></noscript><img
                                                        class="ls-is-cached lazyloaded"
                                                        src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                                        data-src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                                        alt="{{ $work->title }}" width="2560" height="1707"
                                                        title="{{ $work->title }}" /><span
                                                        class="gdlr-core-image-overlay gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"
                                                        style="background: rgba(235, 169, 4, 0.85)"><span
                                                            class="gdlr-core-image-overlay-content"
                                                            style="margin-top: -26.725px"><span
                                                                class="gdlr-core-portfolio-title gdlr-core-title-font"><a
                                                                    href="{{ route('user.portfolio', $work->slug) }}">
                                                                    {{-- {{getLocalizedContent($work, 'title', \App::getLocale())}} --}}
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
                                            <span
                                                class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
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
                                            @foreach ($partners as $partner)
                                                <noscript><img src="{{ showImage($partner->logo ?? '') }}"
                                                        alt="{{ $partner->title }}"
                                                        style="width: 200px; height: 100px !important; margin-bottom: 5px"
                                                        title="{{ $partner->title }}" /></noscript>
                                                <img class="lazyload" src="{{ showImage($partner->logo ?? '') }}"
                                                    data-src="{{ showImage($partner->logo ?? '') }}"
                                                    alt="{{ $partner->title }}" title="{{ $partner->title }}"
                                                    style="margin-bottom: 5px; width: 200px; height: 100px !important" />
                                            @endforeach
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

    <div class="gdlr-core-pbf-wrapper 04" style="padding: 20px 0px 100px 0px" id="04">
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
                                <span
                                    class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
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
                                    style="padding-bottom: 15px">
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
                                            <a href="tel:+84%20090%20969%2015%2011" target="_self"><span
                                                    class="gdlr-core-icon-list-icon-wrap"><i
                                                        class="gdlr-core-icon-list-icon-hover fa fa-phone"
                                                        style="font-size: 20px"></i><i
                                                        class="gdlr-core-icon-list-icon fa fa-phone"
                                                        style="font-size: 20px; width: 20px"></i></span>
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
                                    style="padding-bottom: 15px">
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
                                                    class="gdlr-core-icon-list-icon-wrap"><i
                                                        class="gdlr-core-icon-list-icon-hover fa fa-envelope-o"
                                                        style="font-size: 20px"></i><i style="font-size: 20px;"
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
                                    style="padding-bottom: 15px">
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
                                        <li class="gdlr-core-skin-divider gdlr-core-with-hover">
                                            <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($configWebsite->address) }}"
                                                target="_blank">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-map-marker"
                                                        style="font-size: 22px"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-map-marker"
                                                        style="font-size: 22px; width: 22px"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content" style="font-size: 16px">
                                                        {{ $configWebsite->address }}
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
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
                                                class="wpcf7-form-control-wrap" placeholder="Full Name*">
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
                                                placeholder="Phone*" class="wpcf7-form-control-wrap">

                                            <span class="text-danger error-text phone_error" style="color: red"></span>
                                        </p>
                                    </div>
                                    <div class="gdlr-core-column-30">
                                        <p>
                                            <input type="text" name="company" value="{{ old('company') }}"
                                                placeholder="Company*" class="wpcf7-form-control-wrap">

                                            <span class="text-danger error-text company_error" style="color: red"></span>
                                        </p>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="gdlr-core-column-60">
                                        <p>
                                            <input type="text" name="subject" value="{{ old('subject') }}"
                                                placeholder="Subject*" class="wpcf7-form-control-wrap">

                                            <span class="text-danger error-text subject_error" style="color: red"></span>
                                        </p>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="gdlr-core-column-60">
                                        <p>
                                            <span class="wpcf7-form-control-wrap">
                                                <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea"
                                                    placeholder="Message*" name="message">{{ old('message') }}</textarea>

                                                <span class="text-danger error-text message_error"
                                                    style="color: red"></span>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="gdlr-core-column-60 gdlr-core-center-align">
                                        <p>

                                            <button class="contact-button" id="btn-contact-submit">Submit
                                                now</button>
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
