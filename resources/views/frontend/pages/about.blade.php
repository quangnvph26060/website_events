@extends('frontend.layouts.master')


@section('content')
@include('frontend/layouts/partials/banner', ['banner' => $banner , 'is_used' => true])

    <div class="gdlr-core-pbf-section">
        <div class="gdlr-core-pbf-section-container gdlr-core-container clearfix">
            <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 80px 0px 40px 0px;">
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                style="padding-bottom: 40px;">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                        style="font-size: 44px; letter-spacing: 0px; text-transform: none; color: #154BA3;">
                                        Core Skills &amp; Services<span
                                            class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gdlr-core-pbf-element">
                <div
                    class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"></div>
                </div>
            </div>
        </div>
    </div>
    @if ($aboutUs->isNotEmpty())
        @foreach ($aboutUs as $about)
            <div class="gdlr-core-pbf-wrapper"
                style="margin: 0px 0px 0px 0px; padding: 95px 0px 45px 0px; background-color: #f2f2f2;"
                id="gdlr-core-wrapper-1">
                <div class="gdlr-core-pbf-background-wrap">
                    <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js lazyloaded"
                        data-bg="{{ showImage($about->image) }}"
                        style="
              background-image: url('{{ showImage($about->image) }}');
              background-size: cover;
              background-position: center center;
              height: 532.46px;
              transform: translate(0px, -142.043px);
            "
                        data-parallax-speed="0.3"></div>
                </div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js" data-gdlr-animation-duration="600ms"
                    data-gdlr-animation-offset="0.8" style="">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
                        <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                                style="margin: 200px 0px 200px 0px;">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #154BA3; opacity: 0.8;">
                                </div>
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                            style="padding-bottom: 10px;" id="gdlr-core-title-item-1">
                                            <div class="gdlr-core-title-item-title-wrap">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                    style="font-size: 40px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #ffffff;">
                                                    {{ $about->title }}<span
                                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3>
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
                    <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 60px 0px 60px 0px;">
                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                <div class="gdlr-core-pbf-element">
                                    <div
                                        class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-left-align">
                                        <ul>
                                            @foreach ($about->content as $content)
                                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20">
                                                    <span class="gdlr-core-icon-list-icon-wrap">
                                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                            style="color: #154BA3; font-size: 20px;"></i>
                                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                            style="color: #154BA3; font-size: 20px; width: 20px;"></i>
                                                    </span>
                                                    <div class="gdlr-core-icon-list-content-wrap">
                                                        <span class="gdlr-core-icon-list-content"
                                                            style="font-size: 20px;">{{ $content }}</span>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif


@endsection
