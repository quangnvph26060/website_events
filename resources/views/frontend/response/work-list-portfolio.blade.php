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
                            <img src="{{ showImage($work->images->first()->image_path ?? '') }}" alt="" width="2560"
                                height="1707" title="PM3. Thank You Party (5)" /><span
                                class="gdlr-core-image-overlay gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js gdlr-core-with-margin"
                                style="background: rgba(21, 75, 163, .6)"><span class="gdlr-core-image-overlay-content"
                                    style="margin-top: -37.85px"><span
                                        class="gdlr-core-portfolio-title gdlr-core-title-font"
                                        style="
                                        font-size: 20px;
                                        font-weight: 600;
                                        letter-spacing: 0px;
                                        text-transform: none;
                                        "><a
                                            href="#">{{ $work->title }}</a></span><span
                                        class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font">
                                        @foreach ($work->catalogues as $cata)
                                            <a href="{{ route('user.portfolio_tag', $cata->slug) }}"
                                                rel="tag">{{ $cata->name }}</a>
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
@endif
