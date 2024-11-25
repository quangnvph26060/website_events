<div class="kleanity-footer-wrapper">
    <div class="kleanity-footer-container kleanity-container clearfix">
        <div class="kleanity-footer-column kleanity-item-pdlr kleanity-column-24">
            <div id="text-3" class="widget widget_text kleanity-widget">
                <div class="textwidget">
                    <p>
                        <span style="font-size: 18px; color: #154BA3">
                            <strong>@lang('lang.contact_footer')</strong>
                        </span>
                    </p>
                    <p>
                        <span style="font-size: 14px">
                            <strong> {{ $configWebsite->company }}</strong>

                        </span>
                        <br>

                        @php
                            $ad = getLocalizedContent($configWebsite, 'address', \App::getLocale());
                            $address = explode('|', $ad);
                        @endphp

                        @foreach ($address as $a)
                            <span style="font-size: 14px">
                                <strong>
                                    @if ($loop->index == 0)
                                        @lang('lang.headquarters')
                                    @elseif($loop->index == 1)
                                        @lang('lang.branch_hn')
                                    @else
                                        @lang('lang.branch_hcm')
                                    @endif
                                </strong>
                                : {{ $a }}
                            </span>
                            <br />
                        @endforeach

                        <span style="font-size: 14px">
                            <strong>Email &nbsp;</strong>
                            &nbsp;&nbsp;:
                            <span style="color: #154BA3">
                                <a style="color: #154BA3" href="mailto:{{ $configWebsite->email }}" target="_blank"
                                    rel="noopener">{{ $configWebsite->email }}</a>
                            </span>
                        </span>
                        <br />
                        <span style="font-size: 14px">
                            <strong> @lang('lang.phone')</strong>
                            &nbsp;:
                            <span style="color: #154BA3">
                                <a style="color: #154BA3"
                                    href="tel:{{ $configWebsite->constant_hotline }}">{{ $configWebsite->constant_hotline }}</a>
                            </span>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="kleanity-footer-column kleanity-item-pdlr kleanity-column-15">
            <div id="recent-posts-3" class="widget widget_recent_entries kleanity-widget">
                <h3 class="kleanity-widget-title">
                    <span class="kleanity-widget-head-text"> @lang('lang.recent-articles')</span>
                    <span class="kleanity-widget-head-divider"></span>
                </h3>
                <span class="clear"></span>
                <ul>

                    @foreach ($postF->take(3) as $item)
                        <li>
                            <a href="{{ route('user.work-for-us', $item->slug) }}">
                                {{ getLocalizedContent($item, 'title', \App::getLocale()) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="kleanity-footer-column kleanity-item-pdlr kleanity-column-20">
            <div id="gdlr-core-recent-portfolio-widget-3"
                class="widget widget_gdlr-core-recent-portfolio-widget kleanity-widget">
                <h3 class="kleanity-widget-title">
                    <span class="kleanity-widget-head-text">
                        @lang('lang.recent-projects')
                    </span>
                    <span class="kleanity-widget-head-divider"></span>
                </h3>
                <span class="clear"></span>
                <div class="gdlr-core-recent-portfolio-widget-wrap clearfix">
                    @foreach ($works->take(4) as $work)
                        <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                            <a href="{{ route('user.portfolio', $work->slug) }}">

                                <img class="lazyload" src="{{ showImage($work->images->first()->image_path ?? '') }}"
                                    data-src="{{ showImage($work->images->first()->image_path ?? '') }}" alt=""
                                    width="150" height="150" title="{{ $work->title }}" />
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
            {{ $configWebsite->footer }}
        </div>
    </div>
</div>
