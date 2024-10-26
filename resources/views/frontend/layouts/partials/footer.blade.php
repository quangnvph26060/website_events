<div class="kleanity-footer-wrapper">
    <div class="kleanity-footer-container kleanity-container clearfix">
        <div class="kleanity-footer-column kleanity-item-pdlr kleanity-column-20">
            <div id="text-3" class="widget widget_text kleanity-widget">
                <div class="textwidget">
                    <p>
                        <span style="font-size: 18px; color: #eba904">
                            <strong>RI E &amp;E CO., LTD</strong>
                        </span>
                    </p>
                    <p>
                        <span style="font-size: 14px">
                            <strong>Address</strong>
                            : 169/1/16, Luong Dinh Cua Street, An Khanh Ward, Thu Duc
                            City, HCMC, Vietnam
                        </span>
                        <br />
                        <span style="font-size: 14px">
                            <strong>Email &nbsp;</strong>
                            &nbsp;&nbsp;:
                            <span style="color: #eba904">
                                <a style="color: #eba904" href="mailto:contact@rievents.vn" target="_blank"
                                    rel="noopener">Contact@rievents.vn</a>
                            </span>
                        </span>
                        <br />
                        <span style="font-size: 14px">
                            <strong>Hotline</strong>
                            &nbsp;:
                            <span style="color: #eba904">
                                <a style="color: #eba904" href="tel:(+84)%200909 691511">(+84) 0909
                                    691511</a>
                            </span>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="kleanity-footer-column kleanity-item-pdlr kleanity-column-20">
            <div id="recent-posts-3" class="widget widget_recent_entries kleanity-widget">
                <h3 class="kleanity-widget-title">
                    <span class="kleanity-widget-head-text">RECENT POSTS</span>
                    <span class="kleanity-widget-head-divider"></span>
                </h3>
                <span class="clear"></span>
                <ul>

                    @foreach ($postF->take(3) as $item)
                        <li>
                            <a
                                href="{{ route('user.work-for-us', $item->slug) }}">{{ \Str::limit($item->title, 30, '...') }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="kleanity-footer-column kleanity-item-pdlr kleanity-column-20">
            <div id="gdlr-core-recent-portfolio-widget-3"
                class="widget widget_gdlr-core-recent-portfolio-widget kleanity-widget">
                <h3 class="kleanity-widget-title">
                    <span class="kleanity-widget-head-text">RECENT WORKS</span>
                    <span class="kleanity-widget-head-divider"></span>
                </h3>
                <span class="clear"></span>
                <div class="gdlr-core-recent-portfolio-widget-wrap clearfix">
                    @foreach ($works->take(4) as $work)
                        <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                            <a href="{{ route('user.portfolio', $work->slug) }}">
                                <noscript>
                                    <img src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                        alt="" width="150" height="150" title="{{$work->title}}" />
                                </noscript>
                                <img class="lazyload"
                                    src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                    data-src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                    alt="" width="150" height="150" title="{{$work->title}}" />
                                <span class="gdlr-core-image-overlay">
                                    <i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"></i>
                                </span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="kleanity-copyright-wrapper">
    <div class="kleanity-copyright-container kleanity-container">
        <div class="kleanity-copyright-text kleanity-item-pdlr">
            Copyright 2020 RI E&E CO.,LTD, All Right Reserved
        </div>
    </div>
</div>
