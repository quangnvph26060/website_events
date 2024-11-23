@extends('frontend.layouts.master')

@section('content')
    @include('frontend.layouts.partials.banner', ['template' => '2', 'banner' => $banner])

    <div class="gdlr-core-pbf-wrapper" style="padding: 0px 0px 30px 0px">
        <div class="gdlr-core-pbf-background-wrap"></div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js" data-gdlr-animation-duration="600ms"
            data-gdlr-animation-offset="0.8" style="">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                <div class="gdlr-core-pbf-element">
                    <div
                        class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                        <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix gdlr-core-portfolio-item-style-metro"
                        style="padding-bottom: 0px">
                        <div class="gdlr-core-filterer-wrap gdlr-core-js gdlr-core-style-text gdlr-core-item-pdlr gdlr-core-center-align"
                            data-ajax="gdlr_core_portfolio_ajax" data-target="gdlr-core-portfolio-item-holder"
                            data-target-action="replace" style="font-size: 22px; margin-bottom: 30px">
                            <a href="#"
                                class="gdlr-core-filterer gdlr-core-button-color gdlr-core-active">@lang('lang.all')</a>

                            @foreach ($catalogues as $catalogue)
                                <a href="#" class="gdlr-core-filterer gdlr-core-button-color"
                                    data-ajax-value="{{ $catalogue->id }}">
                                    {{ getLocalizedContent($catalogue, 'name', \App::getLocale()) }}
                                </a>
                                @if ($loop->last == false)
                                    <span class="kleanity-separater">/</span>
                                @endif
                            @endforeach

                            <div class="gdlr-core-filterer-slide-bar" style="width: 21px; left: 369.6px; overflow: hidden">
                            </div>
                        </div>

                        @if ($works->isNotEmpty())
                            <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix" data-layout="masonry"
                                style="position: relative; height: 1951.77px">
                                @foreach ($works as $work)
                                    <div class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 gdlr-core-column-first gdlr-core-animate-end"
                                        style="position: absolute; left: 0px; top: 0px">
                                        <div class="gdlr-core-portfolio-metro">
                                            <div
                                                class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-margin-title-tag gdlr-core-metro-rvpdlr">
                                                <div class="gdlr-core-portfolio-thumbnail-image-wrap">
                                                    <img src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                                        alt="" width="2560" height="1707"
                                                        title="PM3. Thank You Party (5)" /><span
                                                        class="gdlr-core-image-overlay gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js gdlr-core-with-margin"
                                                        style="background: rgba(21, 75, 163, .6)"><span
                                                            class="gdlr-core-image-overlay-content"
                                                            style="margin-top: -37.85px"><span
                                                                class="gdlr-core-portfolio-title gdlr-core-title-font"
                                                                style="
                                                                    font-size: 20px;
                                                                    font-weight: 600;
                                                                    letter-spacing: 0px;
                                                                    text-transform: none;
                                                                    ">
                                                                <a href="{{ route('user.portfolio', $work->slug) }}">
                                                                    {{ getLocalizedContent($work, 'title', \App::getLocale()) }}
                                                                </a></span><span
                                                                class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font">
                                                                @foreach ($work->catalogues as $cata)
                                                                    <a href="{{ route('user.portfolio_tag', $cata->slug) }}"
                                                                        rel="tag">
                                                                        {{ getLocalizedContent($cata, 'name', \App::getLocale()) }}
                                                                    </a>
                                                                    @if ($loop->last == false)
                                                                        <span class="gdlr-core-sep">/</span>
                                                                    @endif
                                                                @endforeach


                                                            </span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{ $works->links('vendor/pagination/custom') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
