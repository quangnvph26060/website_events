<div class="kleanity-sidebar-right kleanity-column-20 kleanity-line-height kleanity-line-height">
    <div class="kleanity-sidebar-area kleanity-item-pdlr">
        <div id="text-2" class="widget widget_text kleanity-widget">
            <h3 class="kleanity-widget-title">
                <span class="kleanity-widget-head-text">TUYỂN DỤNG</span><span
                    class="kleanity-widget-head-divider"></span>
            </h3>
            <span class="clear"></span>
            <div class="textwidget">
                <p>
                    We do not need you too much experience because we will
                    give it to you. We just need you with a great passion
                    and an excellent thinking that is the foundation to
                    help you create value and difference.
                </p>
            </div>
        </div>
        <div id="gdlr-core-recent-portfolio-widget-2"
            class="widget widget_gdlr-core-recent-portfolio-widget kleanity-widget">
            <h3 class="kleanity-widget-title">
                <span class="kleanity-widget-head-text">
                    DỰ ÁN GẦN ĐÂY</span><span
                    class="kleanity-widget-head-divider"></span>
            </h3>
            <span class="clear"></span>
            <div class="gdlr-core-recent-portfolio-widget-wrap clearfix">
                @foreach ($works as $work)
                    <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                        <a href="{{ route('user.portfolio', $work->slug) }}"><noscript><img
                                    src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                    alt="{{ $work->title }}" width="150" height="150"
                                    title="{{ $work->title }}" /></noscript><img class="ls-is-cached lazyloaded"
                                src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                data-src="{{ showImage($work->images->first()->image_path ?? '') }}" alt="{{ $work->title }}"
                                width="150" height="150" title="{{ $work->title }}" /><span
                                class="gdlr-core-image-overlay"><i class="fas fa-link"></i></span></a>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div id="recent-comments-3" class="widget widget_recent_comments kleanity-widget">
            <h3 class="kleanity-widget-title">
                <span class="kleanity-widget-head-text">Recent Comments</span><span
                    class="kleanity-widget-head-divider"></span>
            </h3>
            <span class="clear"></span>
            <ul id="recentcomments"></ul>
        </div> --}}
        <div id="tag_cloud-2" class="widget widget_tag_cloud kleanity-widget">
            <h3 class="kleanity-widget-title">
                <span class="kleanity-widget-head-text">
                    Gắn thẻ đám mây</span><span
                    class="kleanity-widget-head-divider"></span>
            </h3>
            <span class="clear"></span>
            <div class="tagcloud">
                @foreach ($tags as $item)
                    <a href="{{ route('user.work-for-us-tag', $item->slug) }}" class="tag-cloud-link tag-link-104 tag-link-position-1"
                        style="font-size: 8pt" aria-label="{{ $item->name }}">{{ $item->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
