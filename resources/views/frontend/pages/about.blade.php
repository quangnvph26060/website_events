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
                                        style="font-size: 44px; letter-spacing: 0px; text-transform: none; color: #eba904;">
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
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #eba904; opacity: 0.8;">
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
                                                            style="color: #eba904; font-size: 20px;"></i>
                                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                            style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                    </span>
                                                    <div class="gdlr-core-icon-list-content-wrap">
                                                        <span class="gdlr-core-icon-list-content"
                                                            style="font-size: 20px;">{{ $content }}</span>
                                                    </div>
                                                </li>
                                            @endforeach

                                            {{-- <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Client appreciation events</span>
                                                </div>
                                            </li>
                                            <li
                                                class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20 gdlr-core-column-first">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Internal board or employee meetings &amp;
                                                        retreats</span>
                                                </div>
                                            </li>
                                            <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Employee appreciation events</span>
                                                </div>
                                            </li>
                                            <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Employee milestone events</span>
                                                </div>
                                            </li>
                                            <li
                                                class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20 gdlr-core-column-first">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Business development events or
                                                        trips</span>
                                                </div>
                                            </li>
                                            <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Sales or hospitality trips (destination
                                                        events)</span>
                                                </div>
                                            </li>
                                            <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Corporate annual parties ( Year-end,
                                                        Christmas, Award...)</span>
                                                </div>
                                            </li>
                                            <li
                                                class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20 gdlr-core-column-first">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Ceremonial events (grand opening, ground
                                                        breaking, award receiving)</span>
                                                </div>
                                            </li>
                                            <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Global meeting or conference</span>
                                                </div>
                                            </li>
                                            <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Corporate music show or concert</span>
                                                </div>
                                            </li>
                                            <li
                                                class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20 gdlr-core-column-first">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Employee engagement events </span>
                                                </div>
                                            </li>
                                            <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-20">
                                                <span class="gdlr-core-icon-list-icon-wrap">
                                                    <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px;"></i>
                                                    <i class="gdlr-core-icon-list-icon fa fa-check-circle"
                                                        style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                                </span>
                                                <div class="gdlr-core-icon-list-content-wrap">
                                                    <span class="gdlr-core-icon-list-content"
                                                        style="font-size: 20px;">Staff or family festival events</span>
                                                </div>
                                            </li> --}}
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

    {{-- <div class="gdlr-core-pbf-wrapper" style="margin: 0px 0px 0px 0px;" data-skin="Dark" id="gdlr-core-wrapper-2">
    <div class="gdlr-core-pbf-background-wrap">
        <div
            class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js lazyloaded"
            data-bg="{{ asset('frontend/assets/image/SAN-KHAU-BW.jpg') }}"
            style="
          opacity: 1;
          background-image: url('{{ asset('frontend/assets/image/SAN-KHAU-BW.jpg') }}');
          background-size: cover;
          background-position: center center;
          height: 617.12px;
          transform: translate(0px, -428.205px);
        "
            data-parallax-speed="0.6"
        ></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom">
            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 200px 0px 200px 0px;">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #eba904; opacity: 0.8;"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 10px;" id="gdlr-core-title-item-2">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 40px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #ffffff;">
                                        Public Events<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
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
            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 60px 0px 120px 0px;">
                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-left-align">
                            <ul>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30 gdlr-core-column-first">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Exhibitions, expositions, fairs </span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Festivals</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30 gdlr-core-column-first">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;"> Entertainment events</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Cause-related events</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30 gdlr-core-column-first">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Fundraising events</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;"> Cultural events</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gdlr-core-pbf-wrapper" style="margin: 0px 0px 0px 0px;" id="gdlr-core-wrapper-3">
    <div class="gdlr-core-pbf-background-wrap">
        <div
            class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js lazyloaded"
            data-bg="{{ asset('frontend/assets/image/San-Khau-Tiec-Tai-Gia_BW02.jpg') }}"
            style="
          background-image: url('{{ asset('frontend/assets/image/San-Khau-Tiec-Tai-Gia_BW02.jpg') }}');
          background-size: cover;
          background-position: center center;
          height: 677.56px;
          transform: translate(0px, -385.6px);
        "
            data-parallax-speed="0.8"
        ></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 200px 0px 200px 0px;">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #eba904; opacity: 0.8;"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 20px;" id="gdlr-core-title-item-3">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 40px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #ffffff;">
                                        Private Events<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3>
                                </div>
                                <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="color: #ffffff;"> </span>
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
            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 60px 0px 120px 0px;">
                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-left-align">
                            <ul>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30 gdlr-core-column-first">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Wedding Party</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Birthday Party</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30 gdlr-core-column-first">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Reunion Party</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Wedding Anniversaries</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30 gdlr-core-column-first">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">VIP Party</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Family Party</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gdlr-core-pbf-wrapper" style="margin: 0px 0px 0px 0px;" id="gdlr-core-wrapper-4">
    <div class="gdlr-core-pbf-background-wrap">
        <div
            class="lazyload gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
            data-bg="{{ asset('frontend/assets/image/PTSC.30Years-18-scaled.jpg') }}"
            style="
          background-image: url('{{ asset('frontend/assets/image/PTSC.30Years-18-scaled.jpg') }}');
          background-size: cover;
          background-position: center center;
          height: 679.56px;
        "
            data-parallax-speed="0.8"
        ></div>
    </div>
    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full">
            <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="margin: 200px 0px 200px 0px;">
                    <div class="gdlr-core-pbf-background-wrap" style="background-color: #eba904; opacity: 0.8;"></div>
                    <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="gdlr-core-title-item-4">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 30px; font-weight: 400; letter-spacing: 0px; text-transform: none; color: #ffffff;">
                                        Design &amp; Production<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3>
                                </div>
                                <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="color: #ffffff;"> </span>
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
            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 60px 0px 120px 0px;">
                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                    <div class="gdlr-core-pbf-element">
                        <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-left-align">
                            <ul>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30 gdlr-core-column-first">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Exhibition booth design &amp; production</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Art installation design &amp; production</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30 gdlr-core-column-first">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Stage design &amp; production</span>
                                    </div>
                                </li>
                                <li class="gdlr-core-skin-divider gdlr-core-with-hover gdlr-core-column-30">
                                    <span class="gdlr-core-icon-list-icon-wrap">
                                        <i class="gdlr-core-icon-list-icon-hover fa fa-check-circle" style="color: #eba904; font-size: 20px;"></i>
                                        <i class="gdlr-core-icon-list-icon fa fa-check-circle" style="color: #eba904; font-size: 20px; width: 20px;"></i>
                                    </span>
                                    <div class="gdlr-core-icon-list-content-wrap">
                                        <span class="gdlr-core-icon-list-content" style="font-size: 20px;">Showroom design &amp; production</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
