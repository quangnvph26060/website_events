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
                        <a href="{{ route('user.portfolio', $work->slug) }}">

                            <img class="ls-is-cached lazyloaded"
                                src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                data-src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                alt="{{ $work->title }}" width="150" height="150" title="{{ $work->title }}" />
                            <span class="gdlr-core-image-overlay"><i class="fas fa-link"></i></span>
                        </a>
                    </div>
                @endforeach
            </div>
            <style>
                /* Container */


                /* Media Query cho mobile */
                @media (max-width: 768px) {
                    .gdlr-core-recent-portfolio-widget-wrap {
                        display: flex;
                        flex-wrap: wrap;
                        /* Cho phép các phần tử xuống hàng */
                        justify-content: space-between;
                        /* Canh đều khoảng cách giữa các ảnh */
                    }

                    /* Ảnh trong mỗi ô */
                    .gdlr-core-recent-portfolio-widget {
                        flex: 1 1 calc(33.33% - 10px);
                        /* Mỗi ảnh chiếm 1/3 chiều rộng (trừ khoảng cách) */
                        max-width: calc(33.33% - 10px);
                        /* Đảm bảo không vượt quá chiều rộng 1/3 */
                        box-sizing: border-box;
                        /* Bao gồm padding và border vào chiều rộng */
                    }

                    .gdlr-core-recent-portfolio-widget {
                        flex: 1 1 calc(33.33% - 5px);
                        /* Giữ 3 ảnh mỗi hàng */
                    }
                }
            </style>
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
