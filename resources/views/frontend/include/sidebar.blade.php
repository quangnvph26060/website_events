<div class="kleanity-sidebar-right kleanity-column-20 kleanity-line-height kleanity-line-height">
    <div class="kleanity-sidebar-area kleanity-item-pdlr">
        <div id="text-2" class="widget widget_text kleanity-widget">
            <h3 class="kleanity-widget-title">
                <span class="kleanity-widget-head-text">
                    @lang('lang.recruitment')</span><span class="kleanity-widget-head-divider"></span>
            </h3>
            <span class="clear"></span>
            <div class="textwidget">
                <p>
                    @lang('lang.document')
                </p>
            </div>
        </div>
        <div id="gdlr-core-recent-portfolio-widget-2"
            class="widget widget_gdlr-core-recent-portfolio-widget kleanity-widget">
            <h3 class="kleanity-widget-title">
                <span class="kleanity-widget-head-text">
                    @lang('lang.recent-projects')</span><span class="kleanity-widget-head-divider"></span>
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
                                data-src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                alt="{{ $work->title }}" width="150" height="150"
                                title="{{ $work->title }}" /><span class="gdlr-core-image-overlay"><i
                                    class="fas fa-link"></i></span></a>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="tag_cloud-2" class="widget widget_tag_cloud kleanity-widget">
            <h3 class="kleanity-widget-title">
                <span class="kleanity-widget-head-text">
                    @lang('lang.tag')</span><span class="kleanity-widget-head-divider"></span>
            </h3>
            <span class="clear"></span>
            <div class="tagcloud">
                @foreach ($tags as $item)
                    <a href="{{ route('user.work-for-us-tag', $item->slug) }}"
                        class="tag-cloud-link tag-link-104 tag-link-position-1" style="font-size: 8pt"
                        aria-label="{{ $item->name }}">
                        {{ getLocalizedContent($item, 'name', \App::getLocale()) }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
