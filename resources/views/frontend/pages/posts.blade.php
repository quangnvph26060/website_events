@extends('frontend.layouts.master')

@section('title', $post->title ?? '')

@section('description', $post->meta_description)

@section('keywords', $post->meta_keywords)

@section('content')
    @include('frontend/include/banner-job', ['image' => $post->featured_image, 'banner' => $banner ?? null])

    <div class="kleanity-content-container kleanity-container">
        <div class="kleanity-sidebar-wrap clearfix kleanity-line-height-0 kleanity-sidebar-style-right">
            <div class="kleanity-sidebar-center kleanity-column-40 kleanity-line-height" >
                <div class="kleanity-content-wrap kleanity-item-pdlr clearfix">
                    <div class="kleanity-page-builder-wrap kleanity-item-rvpdlr">
                        <div class="gdlr-core-page-builder-body">
                            <div class="gdlr-core-pbf-wrapper">
                                <div class="gdlr-core-pbf-wrapper-title" style="padding-left: 10px; ">
                                    <h1 style="color: #4e4e4e">
                                        {{ getLocalizedContent($post, 'title', \App::getLocale()) }}

                                    </h1>
                                </div>
                                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                    <div class="gdlr-core-pbf-element">
                                                        <div
                                                            class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                            <div class="gdlr-core-text-box-item-content"
                                                                style="text-transform: none">
                                                                {!! getLocalizedContent($post, 'content', \App::getLocale()) !!}
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

            @include('frontend.include.sidebar')
        </div>
    </div>
@endsection
