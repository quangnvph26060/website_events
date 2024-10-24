@if ($works->isNotEmpty())
    <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 clearfix" data-layout="masonry"
        style="position: relative; height: 1951.77px">
        @foreach ($works as $work)
            <div class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 gdlr-core-column-first gdlr-core-animate-end"
                style="position: absolute; left: 0px; top: 0px">
                <div class="gdlr-core-portfolio-metro">
                    <div
                        class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-date gdlr-core-metro-rvpdlr">
                        <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                            <noscript><img src="{{ showImage($work->images->first()->image_path ?? '') }}" alt=""
                                    width="2560" height="1707" title="{{ $work->title }}" /></noscript><img
                                class="ls-is-cached lazyloaded"
                                src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                data-src="{{ showImage($work->images->first()->image_path ?? '') }}" alt=""
                                width="2560" height="1707" title="PM3. Thank You Party (5)" /><span
                                class="gdlr-core-image-overlay gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"
                                style="background: rgba(235, 169, 4, 0.85)"><span
                                    class="gdlr-core-image-overlay-content" style="margin-top: -26.725px"><span
                                        class="gdlr-core-portfolio-title gdlr-core-title-font"><a
                                            href="">{{ $work->title }}</a></span><span
                                        class="gdlr-core-portfolio-info gdlr-core-portfolio-date-wrap">
                                        {{ \Carbon\Carbon::parse($work->created_at)->format('F j, Y') }}</span></span></span></span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


@endif
