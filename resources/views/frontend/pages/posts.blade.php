@extends('frontend.layouts.master')

@section('title', $post->title ?? '')

@section('description', $post->meta_description)

@section('keywords', $post->meta_keywords)

@section('content')
    @include('frontend/include/banner-job', ['image' => $post->featured_image, 'banner' => $banner ?? null])

    <div class="kleanity-content-container kleanity-container">
        <div class="kleanity-sidebar-wrap clearfix kleanity-line-height-0 kleanity-sidebar-style-right">
            <div class="kleanity-sidebar-center kleanity-column-40 kleanity-line-height">
                <div class="kleanity-content-wrap kleanity-item-pdlr clearfix">
                    <div class="kleanity-page-builder-wrap kleanity-item-rvpdlr">
                        <div class="gdlr-core-page-builder-body">
                            <div class="gdlr-core-pbf-wrapper">
                                <div class="gdlr-core-pbf-wrapper-title" style="padding-left: 10px; ">
                                    <h1 style="color: #4e4e4e"> {{ cachedTranslate($post->title, \App::getLocale()) }}</h1>
                                </div>
                                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                        <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first">
                                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                                    <div class="gdlr-core-pbf-element">
                                                        <div
                                                            class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                            <div class="gdlr-core-text-box-item-content"
                                                                style="text-transform: none">

                                                                {!! translateHtmlContent($post->content, \App::getLocale()) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kleanity-single-social-share kleanity-item-rvpdlr">
                        <div class="gdlr-core-social-share-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-social-share-left-text gdlr-core-item-mglr gdlr-core-style-plain gdlr-core-no-counter"
                            style="padding-bottom: 0px">
                            <span class="gdlr-core-social-share-wrap"><a class="gdlr-core-social-share-facebook"
                                    href="#" target="_blank"
                                    onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=602,width=555');return false;"><i
                                        class="fa fa-facebook"></i></a><a class="gdlr-core-social-share-linkedin"
                                    href="#" target="_blank"
                                    onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=452,width=550');return false;"><i
                                        class="fa fa-linkedin"></i></a><a class="gdlr-core-social-share-google-plus"
                                    href="#" target="_blank"
                                    onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=614,width=496');return false;"><i
                                        class="fa fa-google-plus"></i></a><a class="gdlr-core-social-share-email"
                                    href="#"><i class="fa fa-envelope"></i></a></span>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="kleanity-single-author">
                        <div class="kleanity-single-author-wrap">
                            <div class="kleanity-single-author-avartar kleanity-media-image">
                                <noscript><img alt="{{$post->featured_image}}"
                                        src="https://secure.gravatar.com/avatar/8cd00d80e294820fbf2670ff01b0f960?s=90&#038;d=mm&#038;r=g"

                                        class="avatar avatar-90 photo" height="90" width="90"
                                        decoding="async" /></noscript><img alt="{{$post->featured_image}}"
                                    src="https://secure.gravatar.com/avatar/8cd00d80e294820fbf2670ff01b0f960?s=90&amp;d=mm&amp;r=g"
                                    data-src="https://secure.gravatar.com/avatar/8cd00d80e294820fbf2670ff01b0f960?s=90&amp;d=mm&amp;r=g"
                                    data-srcset="https://secure.gravatar.com/avatar/8cd00d80e294820fbf2670ff01b0f960?s=180&amp;d=mm&amp;r=g 2x"
                                    class="avatar avatar-90 photo lazyloaded" height="90" width="90" decoding="async"
                    />
                            </div>
                            <div class="kleanity-single-author-content-wrap">
                                <div class="kleanity-single-author-caption kleanity-info-font">
                                    About the author
                                </div>
                                <h4 class="kleanity-single-author-title">
                                    <a href="#" title="Posts by rievents" rel="author">rievents</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="kleanity-single-nav-area clearfix">
                        <span class="kleanity-single-nav kleanity-single-nav-left"><a href="#" rel="prev"><i
                                    class="arrow_left"></i><span
                                    class="kleanity-text kleanity-title-font">Prev</span></a></span>
                    </div>
                    <div id="comments" class="kleanity-comments-area">
                        <div id="respond" class="comment-respond">
                            <h4 id="reply-title" class="comment-reply-title kleanity-content-font">
                                Leave a Reply
                                <small><a rel="nofollow" id="cancel-comment-reply-link" href="#"
                                        style="display: none">Cancel Reply</a></small>
                            </h4>
                            <form action="https://rievents.vn/wp-comments-post.php" method="post" id="commentform"
                                class="comment-form" novalidate="">
                                <div class="comment-form-comment">
                                    <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment*"></textarea>
                                </div>
                                <div class="comment-form-head">
                                    <div class="kleanity-comment-form-author">
                                        <input id="author" name="author" type="text" value=""
                                            placeholder="Name*" size="30" aria-required="true" />
                                    </div>
                                    <div class="kleanity-comment-form-email">
                                        <input id="email" name="email" type="text" value=""
                                            placeholder="Email*" size="30" aria-required="true" />
                                    </div>
                                    <input id="url" name="url" type="text" value=""
                                        placeholder="Website" size="30" />
                                    <div class="clear"></div>
                                </div>
                                <p class="comment-form-cookies-consent">
                                    <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent"
                                        type="checkbox" value="yes" /><label for="wp-comment-cookies-consent">Save my
                                        name, email, and website in this browser
                                        for the next time I comment.</label>
                                </p>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit"
                                        value="Post Comment" />
                                    <input type="hidden" name="comment_post_ID" value="7721" id="comment_post_ID" />
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0" />
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @include('frontend.include.sidebar')
        </div>
    </div>
@endsection
