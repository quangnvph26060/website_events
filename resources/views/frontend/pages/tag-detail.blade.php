@extends('frontend.layouts.master')

@section('title', $catalogue->name)

@section('content')
    <div class="kleanity-page-title-wrap  kleanity-style-medium kleanity-left-align">
        <div class="kleanity-header-transparent-substitute" style="height: 101.4px;"></div>
        <div class="kleanity-page-title-overlay"></div>
        <div class="kleanity-page-title-container kleanity-container">
            <div class="kleanity-page-title-content kleanity-item-pdlr">
                <h3 class="kleanity-page-title">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Nhãn</font>
                    </font>
                </h3>
                <div class="kleanity-page-caption">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">{{ $catalogue->name }}</font>
                    </font>
                </div>
            </div>
        </div>
    </div>

    <div class="kleanity-page-wrapper" id="kleanity-page-wrapper">
        <div class="kleanity-content-container kleanity-container">
            <div class=" kleanity-sidebar-wrap clearfix kleanity-line-height-0 kleanity-sidebar-style-none">
                <div class=" kleanity-sidebar-center kleanity-column-60 kleanity-line-height">
                    <div class="kleanity-content-area">
                        {{-- <div class="kleanity-archive-taxonomy-description kleanity-item-pdlr">
                            <p>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Ngày kỷ niệm, lễ kỷ niệm cột mốc quan trọng.
                                    </font>
                                </font>
                            </p>
                        </div> --}}
                        <div
                            class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-grid">
                            <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">

                                @if ($catalogue->works->isNotEmpty())
                                    @foreach ($catalogue->works as $index => $work)
                                        <div
                                            class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-column-20 {{ $index % 3 == 0 ? 'gdlr-core-column-first' : '' }}">
                                            <div
                                                class="gdlr-core-portfolio-grid gdlr-core-center-align gdlr-core-style-normal">
                                                <div
                                                    class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-icon">
                                                    <div
                                                        class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                                                        <a class="gdlr-core-ilightbox gdlr-core-js"
                                                            href="{{ showImage($work->images->first()->image_path ?? '') }}"
                                                            data-ilightbox-group="gdlr-core-img-group-1"
                                                            data-type="image">
                                                            <noscript><img
                                                                    src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                                                    alt="" width="700" height="500"
                                                                    title="{{ $work->title }}" /></noscript>
                                                            <img class="lazyloaded"
                                                                src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                                                data-src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                                                alt="" width="700" height="500"
                                                                title="{{ $work->title }}">
                                                            <span
                                                                class="gdlr-core-image-overlay gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js">
                                                                <span class="gdlr-core-image-overlay-content"
                                                                    style="margin-top: -14.35px;">
                                                                    <span class="gdlr-core-portfolio-icon-wrap">
                                                                        <i
                                                                            class="gdlr-core-portfolio-icon arrow_expand"></i>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                    <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title">
                                                        <a href="{{ route('user.portfolio', $work->slug) }}">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">{{ $work->title }}
                                                                </font>
                                                            </font>
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
