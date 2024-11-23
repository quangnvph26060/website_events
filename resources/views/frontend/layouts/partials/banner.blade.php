@if ($template == '1')
    <div class="gdlr-core-pbf-wrapper gdlr-core-wrapper-full-height gdlr-core-js gdlr-core-full-height-center"
        style="
        padding: 95px 0px 45px;
        background-color: rgb(242, 242, 242);
        min-height: 730px;
        ">
        <div class="gdlr-core-full-height-pre-spaces" style="height: 57.8px"></div>
        <div class="gdlr-core-pbf-background-wrap">
            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js lazyloaded" data-bg=""
                style="
        background-image: url('{{ showImage($banner->path_image) }}');
        background-size: cover;
        background-position: center center;
        height: 730px;
        transform: translate(0px, 150.037px);
    "
                data-parallax-speed="0.3"></div>
        </div>
        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js gdlr-core-full-height-content"
            data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8" style="">
            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px">
                    </div>
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
                    <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px">
                    </div>
                </div>
                <div class="gdlr-core-pbf-element">
                    <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px">
                    </div>
                </div>
                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-center-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                    <div class="gdlr-core-title-item-title-wrap">
                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                            style="
                                                font-weight: 600;
                                                letter-spacing: 0px;
                                                text-transform: none;
                                                 color: #ffffff;
                                ">
                                            {{ getLocalizedContent($banner, 'title', \App::getLocale()) }}
                                            <span
                                                class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-element">
                                <div
                                    class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                    <div class="gdlr-core-divider-container" style="max-width: 50px">
                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                            style="border-color: #ffffff; border-width: 2px"></div>
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
                                    style="padding-bottom: 20px">
                                    <div class="gdlr-core-text-box-item-content"
                                        style="
                                    font-size: 20px;
                                    letter-spacing: 1px;
                                    text-transform: none;
                                    color: #ffffff;
                                ">
                                        <p style="text-align: center">
                                            {{ getLocalizedContent($banner, 'description', \App::getLocale()) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if ($template == '2')
    <div class="kleanity-page-title-wrap kleanity-style-medium kleanity-left-align lazyloaded"
        data-bg="{{ showImage($banner->path_image) }}"
        style="background-image: url('{{ showImage($banner->path_image) }}');">
        <div class="kleanity-header-transparent-substitute" style="height: 0px;"></div>
        <div class="kleanity-page-title-overlay"></div>
        <div class="kleanity-page-title-container kleanity-container">
            <div class="kleanity-page-title-content kleanity-item-pdlr">
                <h1 class="kleanity-page-title" style=" font-weight: 600;
                            letter-spacing: 0px;
                            text-transform: none;
                            color: #fff;"
                    data-orig-font="57px">{{ getLocalizedContent($banner, 'title', \App::getLocale()) }}</h1>
                <p class="kleanity-page-caption" style="color: rgb(255, 255, 255);">
                    {{ getLocalizedContent($banner, 'description', \App::getLocale()) }}
                </p>
            </div>
        </div>
    </div>
@endif

<style>
    .kleanity-page-title-wrap {
        position: relative;
        /* Quan trọng để áp dụng ::before */
        background-size: cover;
        /* Đảm bảo ảnh nền bao phủ đầy đủ */
        background-position: center;
        /* Căn giữa ảnh nền */
        color: #fff;
        /* Màu chữ trắng */
    }

    /* Lớp phủ tối */
    .kleanity-page-title-wrap::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        /* Lớp phủ màu đen 50% trong suốt */
        z-index: 1;
        /* Đặt dưới nội dung */
    }

    /* Nội dung chữ */
    .kleanity-page-title-content {
        position: relative;
        z-index: 2;
        /* Đặt trên lớp phủ */
    }
</style>
