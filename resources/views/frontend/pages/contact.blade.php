@extends('frontend.layouts.master')


@section('title', 'Liên hệ')
@section('content')
    @include('frontend/layouts/partials/banner', ['banner' => $banner, 'template' => '2'])
    <div class="kleanity-page-wrapper" id="kleanity-page-wrapper">
        <div class="kleanity-content-container kleanity-container">
            <div class="kleanity-content-area kleanity-item-pdlr kleanity-sidebar-style-none clearfix" style="padding-top: 30px; padding-bottom:  0px;">

                <p></p>
            </div>
        </div>
        <div class="gdlr-core-page-builder-body">
            <div class="gdlr-core-pbf-wrapper 04" style="padding: 0px 0px 30px 0px" id="04">
                <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff"></div>
                <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                    <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-divider-item gdlr-core-divider-item-small-center gdlr-core-item-pdlr"
                                style="margin-bottom: 15px">
                                <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #154BA3">
                                    <div class="gdlr-core-divider-line-bold gdlr-core-skin-divider"
                                        style="border-color: #154BA3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                                style="padding: 10px 0px 10px 0px">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                            style="padding-bottom: 5px">
                                            <div class="gdlr-core-title-item-title-wrap">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                    style="
                            font-size: 30px;
                            font-weight: 400;
                            letter-spacing: 0px;
                            text-transform: none;
                            color: #154BA3;
                          ">
                                                  @lang('lang.phone')<span
                                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-left-align">
                                            <ul>
                                                <li class="gdlr-core-skin-divider gdlr-core-with-hover">
                                                    <a href="tel:{{ $configWebsite->constant_hotline }}" target="_self" style="display: flex; align-items: center "><span
                                                            class="gdlr-core-icon-list-icon-wrap"><i
                                                                class="gdlr-core-icon-list-icon-hover fa fa-phone"
                                                                style="font-size: 20px"></i><i
                                                                class="gdlr-core-icon-list-icon fa fa-phone"
                                                                style="font-size: 20px; width: 20px"></i></span>
                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                            <span class="gdlr-core-icon-list-content"
                                                                style="font-size: 18px">+84
                                                                {{ $configWebsite->constant_hotline }}</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-20">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                                style="padding: 10px 0px 10px 0px">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                            style="padding-bottom: 5px">
                                            <div class="gdlr-core-title-item-title-wrap">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                    style="
                                                        font-size: 30px;
                                                        font-weight: 400;
                                                        letter-spacing: 0px;
                                                        text-transform: none;
                                                        color: #154BA3;
                                                    ">
                                                    Email<span
                                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-left-align">
                                            <ul>
                                                <li class="gdlr-core-skin-divider gdlr-core-with-hover">
                                                    <a href="mailto:{{ $configWebsite->email }}" target="_self" style="display: flex; align-items: center "><span
                                                            class="gdlr-core-icon-list-icon-wrap" ><i
                                                                class="gdlr-core-icon-list-icon fa fa-envelope-o"
                                                                style="font-size: 20px; width: 20px"></i></span>
                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                            <span class="gdlr-core-icon-list-content"
                                                                style="font-size: 20px">{{ $configWebsite->email }}</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-column gdlr-core-column-20">
                            <div class="gdlr-core-pbf-column-content-margin gdlr-core-js"
                                style="padding: 10px 0px 10px 0px">
                                <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                            style="padding-bottom: 5px">
                                            <div class="gdlr-core-title-item-title-wrap">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                                    style="
                            font-size: 30px;
                            font-weight: 400;
                            letter-spacing: 0px;
                            text-transform: none;
                            color: #154BA3;
                          ">
                                                   @lang('lang.address')<span
                                                        class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div
                                            class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix gdlr-core-left-align">
                                            <ul>
                                                <li class="gdlr-core-skin-divider gdlr-core-with-hover">
                                                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($configWebsite->address) }}" target="_blank" >
                                                        <span class="gdlr-core-icon-list-icon-wrap">
                                                            <i class="gdlr-core-icon-list-icon fa fa-map-marker" style="font-size: 22px; width: 22px; margin-top: 5px;"></i>
                                                        </span>
                                                        <div class="gdlr-core-icon-list-content-wrap">
                                                            <span class="gdlr-core-icon-list-content" style="font-size: 20px">
                                                                {{ $configWebsite->address }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="gdlr-core-skin-divider">
                                                    <div class="gdlr-core-icon-list-content-wrap"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px"></div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                style="padding-bottom: 15px">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                        style="
                                        font-size: 30px;
                                        font-weight: 400;
                                        letter-spacing: 0px;
                                        text-transform: none;
                                        color: #154BA3;
                                        ">
                                       @lang('lang.map')<span
                                            class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.1268106255457!2d105.80209477503023!3d20.98755328065149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc0169d20ab%3A0x3205424efc8bbe2c!2zMzAgTmcuIDE2OCDEkC4gTmd1eeG7hW4gWGnhu4NuLCBI4bqhIMSQw6xuaCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1729380489743!5m2!1svi!2s"
                                width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px"></div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-space-item gdlr-core-item-pdlr" style="padding-top: 30px"></div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr"
                                style="padding-bottom: 15px">
                                <div class="gdlr-core-title-item-title-wrap">
                                    <h3 class="gdlr-core-title-item-title gdlr-core-skin-title"
                                        style="
                      font-size: 50px;
                      font-weight: 400;
                      letter-spacing: 0px;
                      text-transform: none;
                      color: #154BA3;
                    ">

       @lang('lang.information')
                                        <span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider"></span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"
                                style="padding-bottom: 25px">
                                <div class="gdlr-core-text-box-item-content"
                                    style="font-size: 20px; text-transform: none">
                                    <p style="text-align: left">
                                   @lang('lang.i-and')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div
                                class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align">
                                <div class="gdlr-core-divider-container" style="max-width: 40px">
                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider"
                                        style="border-color: #154BA3; border-width: 2px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb">
                                <div class="wpcf7 js" id="wpcf7-f1319-p1977-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>
                                    <form id="contactForm" autocomplete="off">
                                        @csrf
                                        <div
                                            class="gdlr-core-input-wrap gdlr-core-large gdlr-core-full-width gdlr-core-with-column gdlr-core-no-border">
                                            <div class="gdlr-core-column-30">
                                                <p>
                                                    <input type="text" name="fullName" {{ old('fullName') }}
                                                        class="wpcf7-form-control-wrap" placeholder="@lang('lang.name')*">
                                                    <span class="text-danger error-text fullName_error"
                                                        style="color: red"></span>
                                                </p>
                                            </div>
                                            <div class="gdlr-core-column-30">
                                                <p>
                                                    <input type="text" name="email" {{ old('email') }}
                                                        placeholder="Email*" class="wpcf7-form-control-wrap">

                                                    <span class="text-danger error-text email_error"
                                                        style="color: red"></span>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="gdlr-core-column-30">
                                                <p>
                                                    <input type="text" name="phone" {{ old('phone') }}
                                                        placeholder="@lang('lang.phone_number')*" class="wpcf7-form-control-wrap">

                                                    <span class="text-danger error-text phone_error"
                                                        style="color: red"></span>
                                                </p>
                                            </div>
                                            <div class="gdlr-core-column-30">
                                                <p>
                                                    <input type="text" name="company" value="{{ old('company') }}"
                                                        placeholder="@lang('lang.company')*" class="wpcf7-form-control-wrap">

                                                    <span class="text-danger error-text company_error"
                                                        style="color: red"></span>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="gdlr-core-column-60">
                                                <p>
                                                    <input type="text" name="subject" value="{{ old('subject') }}"
                                                        placeholder="@lang('lang.subject')*" class="wpcf7-form-control-wrap">

                                                    <span class="text-danger error-text subject_error"
                                                        style="color: red"></span>
                                                </p>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="gdlr-core-column-60">
                                                <p>
                                                    <span class="wpcf7-form-control-wrap">
                                                        <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea"
                                                            placeholder="@lang('lang.message')*" name="message">{{ old('message') }}</textarea>

                                                        <span class="text-danger error-text message_error"
                                                            style="color: red"></span>
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="gdlr-core-column-60 gdlr-core-center-align">
                                                <p>

                                                    <button class="contact-button" id="btn-contact-submit">@lang('lang.send')</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
          #contactForm input, #contactForm textarea {
            border: 1px solid rgba(21, 75, 163, .3) !important;
            border-radius: 3px;
        }
        .contact-button {
            background-color: #333;
            color: white;
            padding: 15px 50px;
            border: none;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 14px;
            letter-spacing: 2px;
            cursor: pointer;
            text-align: center;
            width: 100%;
        }

        .contact-button:hover {
            background-color: #154BA3;
        }
    </style>
@endpush


@push('scripts')
    <script src="{{ asset('backend/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery("#btn-contact-submit").click(function(e) {
                e.preventDefault();
                var _token = jQuery("input[name='_token']").val();
                var fullName = jQuery("input[name='fullName']").val();
                var email = jQuery("input[name='email']").val();
                var phone = jQuery("input[name='phone']").val();
                var subject = jQuery("input[name='subject']").val();
                var company = jQuery("input[name='company']").val();
                var message = jQuery("textarea[name='message']").val();

                jQuery.ajax({
                    url: '{{ route('user.contact-us.submit') }}',
                    type: 'POST',
                    data: {
                        _token: _token,
                        fullName: fullName,
                        email: email,
                        phone: phone,
                        subject: subject,
                        company: company,
                        message: message,
                    },
                    success: function(data) {
                        if (data.success) {
                            jQuery(".error-text").text('');
                            Swal.fire({
                                icon: 'success',
                                title: 'Thành công!',
                                text: data.success,
                                showConfirmButton: false,
                                timer: 2000
                            }).then(() => {
                                jQuery("#contactForm")[0].reset();
                            });
                        } else if (data.error) {
                            if (data.validation_errors) {
                                printErrorMsg(data.validation_errors);
                            } else if (data.spam_error) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Chậm lại!',
                                    text: data.spam_error,
                                    showConfirmButton: false,
                                    timer: 2000
                                });
                            }
                        }
                    },
                });


            });

            function printErrorMsg(msg) {
                jQuery(".error-text").text('');

                jQuery.each(msg, function(key, value) {
                    jQuery('.' + key + '_error').text(value[0]);
                });
            }
        })
    </script>
@endpush
