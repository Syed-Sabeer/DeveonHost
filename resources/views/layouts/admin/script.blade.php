 <script src="{{ asset('AdminAssets/vendor/libs/jquery/jquery.js')}}"></script>

  <script src="{{ asset('AdminAssets/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{ asset('AdminAssets/vendor/js/bootstrap.js')}}"></script>
  <script src="{{ asset('AdminAssets/vendor/libs/node-waves/node-waves.js')}}"></script>

  <script src="{{ asset('AdminAssets/vendor/libs/pickr/pickr.js')}}"></script>

  <script src="{{ asset('AdminAssets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

  <script src="{{ asset('AdminAssets/vendor/libs/hammer/hammer.js')}}"></script>

  <script src="{{ asset('AdminAssets/vendor/libs/i18n/i18n.js')}}"></script>

  <script src="{{ asset('AdminAssets/vendor/js/menu.js')}}"></script>

  <!-- endbuild -->

  <!-- Main JS -->

  <script src="{{ asset('AdminAssets/js/main.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @include('partials.swal-alerts')

      @yield('script')
    @yield('js')