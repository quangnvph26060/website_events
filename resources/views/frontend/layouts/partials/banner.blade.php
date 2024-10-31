@if ($is_used == true)
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
                                font-size: 44px;
                                letter-spacing: 0px;
                                text-transform: none;
                                color: #ffffff;
                                ">
                                            {{ cachedTranslate($banner->title, \App::getLocale()) }}<span
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
                                            {{ cachedTranslate($banner->description, \App::getLocale()) }}
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
