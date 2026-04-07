  <link rel="stylesheet" href="{{ asset('AdminAssets/vendor/fonts/iconify-icons.css')}}" />

  <script src="{{ asset('AdminAssets/vendor/libs/@algolia/autocomplete-js.js')}}"></script>

  <!-- Core CSS -->
  <!-- build:css assets/vendor/css/theme.css  -->

  <link rel="stylesheet" href="{{ asset('AdminAssets/vendor/libs/node-waves/node-waves.css')}}" />

  <link rel="stylesheet" href="{{ asset('AdminAssets/vendor/libs/pickr/pickr-themes.css')}}" />

  <link rel="stylesheet" href="{{ asset('AdminAssets/vendor/css/core.css')}}" />
  <link rel="stylesheet" href="{{ asset('AdminAssets/css/demo.css')}}" />

  <!-- Vendors CSS -->

  <link rel="stylesheet" href="{{ asset('AdminAssets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

  <!-- endbuild -->

  <link rel="stylesheet" href="{{ asset('AdminAssets/vendor/libs/apex-charts/apex-charts.css')}}" />
  <link rel="stylesheet" href="{{ asset('AdminAssets/vendor/libs/swiper/swiper.css')}}" />
  <link rel="stylesheet" href="{{ asset('AdminAssets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
  <link rel="stylesheet" href="{{ asset('AdminAssets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
  <link rel="stylesheet" href="{{ asset('AdminAssets/vendor/fonts/flag-icons.css')}}" />

  <!-- Page CSS -->
  <link rel="stylesheet" href="{{ asset('AdminAssets/vendor/css/pages/cards-advance.css')}}" />

  <!-- Helpers -->
  <script src="{{ asset('AdminAssets/vendor/js/helpers.js')}}"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{ asset('AdminAssets/vendor/js/template-customizer.js')}}"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

  <script src="{{ asset('AdminAssets/js/config.js')}}"></script>

@yield('css')