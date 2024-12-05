@extends('frontend.layouts.master')

@section('title', $post->title ?? '')

@section('description', $post->meta_description)

@section('keywords', $post->meta_keywords)

@section('og_image', showImage($post->featured_image))

@section('og_title', $post->title)
@section('og_description', $post->meta_description)



@section('content')
    @include('frontend/include/banner-job', [
        'image' => $post->featured_image,
        'banner' => $banner ?? null,
    ])

    @isset($slug)
        <style>
            .kleanity-column-40 {
                width: 100% !important;
            }
        </style>
    @endisset

    <div class="kleanity-content-container kleanity-container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Trang chủ

                    </a></li>
                <li class="breadcrumb-item " aria-current="page"><a href="{{ route('user.work-for-us') }}">Tin tức</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ getLocalizedContent($post, 'title', \App::getLocale()) }}</li>
            </ol>
        </nav>
        <div class="kleanity-sidebar-wrap clearfix kleanity-line-height-0 kleanity-sidebar-style-right">
            <div class="kleanity-sidebar-center kleanity-column-40 kleanity-line-height">
                <div class="kleanity-content-wrap kleanity-item-pdlr clearfix">
                    <div class="kleanity-page-builder-wrap kleanity-item-rvpdlr">
                        <div class="gdlr-core-page-builder-body">
                            <div class="gdlr-core-pbf-wrapper">
                                <div class="gdlr-core-pbf-wrapper-title">
                                    <h1 style="margin-bottom: 50px !important; color: #4e4e4e">
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
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const images = document.querySelectorAll('.gdlr-core-pbf-wrapper img');

        images.forEach(img => {
            // Lấy giá trị alt của từng ảnh
            const altText = img.alt;

            // Tạo thẻ div để hiển thị alt
            const altDiv = document.createElement('div');
            altDiv.classList.add('image-alt');
            altDiv.textContent = altText;

            // Thêm thẻ altDiv bên dưới ảnh
            img.parentElement.appendChild(altDiv);
        });
    </script>
@endpush
@push('styles')
    <style>
        .breadcrumb {
            display: flex;
            list-style: none;
            padding: 10px 15px;
            margin: 0;
            background-color: #f8f9fa;
            /* Màu nền nhạt */
            border-radius: 5px;
            /* Bo góc */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Đổ bóng */
        }

        .breadcrumb li {
            margin-right: 5px;
            font-size: 18px;
            /* Kích thước chữ */
            font-weight: 500;
            /* Chữ đậm nhẹ */
        }

        .breadcrumb li:not(:last-child)::after {
            content: "/";
            margin-left: 5px;
            color: #6c757d;
            /* Màu xám nhạt cho dấu phân cách */
        }

        .breadcrumb a {
            text-decoration: none;
            color: #007bff;
            /* Màu xanh Bootstrap */
            transition: color 0.3s ease;
            /* Hiệu ứng mượt khi hover */
        }

        .breadcrumb a:hover {
            color: #0056b3;
            /* Đậm hơn khi hover */
        }

        .breadcrumb .active {
            color: #6c757d;
            /* Màu xám nhạt */
            font-weight: 600;
            /* Chữ đậm */
        }


        .image-alt {
            margin-top: 10px;
            font-style: italic;
            color: #555;
        }
    </style>
@endpush
