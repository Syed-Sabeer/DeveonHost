 <!-- JS here -->
    <script src="{{ asset('FrontendAssets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/slick.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/nice-select.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/jquery.parallaxScroll.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/wow.min.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/aos.js') }}"></script>
    <script src="{{ asset('FrontendAssets/js/main.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   @include('partials.swal-alerts')

    @yield('script')
    @yield('js')