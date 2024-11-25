@if ($works->isNotEmpty())
    @foreach ($works as $work)
        <div class="gdlr-core-item-list gdlr-core-item-pdlr gdlr-core-item-mgb gdlr-core-column-20 gdlr-core-column-first gdlr-core-animate-end"
            style="position: absolute; left: 0px; top: 0px">
            <div class="gdlr-core-portfolio-metro">
                <div
                    class="gdlr-core-portfolio-thumbnail gdlr-core-media-image gdlr-core-style-title-date gdlr-core-metro-rvpdlr">
                    <div class="gdlr-core-portfolio-thumbnail-image-wrap gdlr-core-zoom-on-hover">
                      <img class="ls-is-cached lazyloaded"
                            src="{{ showImage($work->images->first()->image_path ?? '') }}"
                            data-src="{{ showImage($work->images->first()->image_path ?? '') }}"
                            alt="{{ $work->title }}" width="2560" height="1707"
                            title="{{ $work->title }}" /><span
                            class="gdlr-core-image-overlay gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js"
                            style="background: rgba(21, 75, 163, .6)"><span class="gdlr-core-image-overlay-content"
                                style="margin-top: -26.725px"><span
                                    class="gdlr-core-portfolio-title gdlr-core-title-font"><a
                                        href="{{ route('user.portfolio', $work->slug) }}">
                                        {{ getLocalizedContent($work, 'title', \App::getLocale()) }}
                                    </a></span><span class="gdlr-core-portfolio-info gdlr-core-portfolio-date-wrap">
                                    {{ \Carbon\Carbon::parse($work->created_at)->format('F j, Y') }}</span></span></span></span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
