<script src="{{ asset('frontend/assets/js/jquery/jquery.min.js') }}"></script>

<script>

    function toggleView() {
        const desktopView = document.querySelector('.desktop-view');
        const mobileView = document.querySelector('.mobile-view');
        if (window.innerWidth <= 768) { // Mobile breakpoint
            desktopView.style.display = 'none';
            mobileView.style.display = 'block';
        } else {
            desktopView.style.display = 'block';
            mobileView.style.display = 'none';
        }
    }

        // Listen to resize event
        window.addEventListener('resize', toggleView);
        document.addEventListener('DOMContentLoaded', toggleView);

    jQuery(document).ready(function() {
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>

<script type="text/javascript" id="gdlr-core-page-builder-js-extra">
    var gdlr_core_pbf = {
        admin: "",
        video: {
            width: "640",
            height: "360"
        },
        // ajax_url: "https:\/\/rievents.vn\/wp-admin\/admin-ajax.php",
        ajax_url: "{{ route('user.portfolio.ajax') }}",


        ilightbox_skin: "dark",
    };
</script>


<script type="text/javascript" id="contact-form-7-js-extra">
    var wpcf7 = {
        api: {
            root: "https:\/\/rievents.vn\/wp-json\/",
            namespace: "contact-form-7\/v1",
        },
        cached: "1",
    };
</script>

<script src="{{ asset('frontend/assets/js/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/autoptimize_single_ba.js') }}"></script>
<script src="{{ asset('frontend/assets/js/autoptimize_single_d3.js') }}"></script>
<script src="{{ asset('frontend/assets/js/lazysizes.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/dist/hooks.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/dist/min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/autoptimize.js') }}"></script>
<script src="{{ asset('frontend/assets/js/autoptimize_single.js') }}"></script>
<script src="{{ asset('frontend/assets/js/autoptimize_single_1.js') }}"></script>
<script src="{{ asset('frontend/assets/js/autoptimize_single_fe.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery/ui/effect.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/autoptimize_single_e7.js') }}"></script>
<script src="{{ asset('frontend/assets/js/dist/vendor/wp-polyfill.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/lib/remodal.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/lib/pako_deflate.min.js') }}"></script>
@include('backend/includes/alert')

@stack('scripts')
