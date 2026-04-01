<!DOCTYPE html>

<html lang="en" class=" layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-skin="default" data-bs-theme="light" data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    @include('layouts.frontend.meta')
    @include('layouts.frontend.css')
   
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">


        @include('layouts.frontend.sidebar')

      <!-- Layout container -->
      <div class="layout-page">
        
          <!-- Content wrapper -->
        <div class="content-wrapper">

        @yield('content')
        @include('layouts.frontend.footer')

      <div class="content-backdrop fade"></div>
        </div>

      </div>
      <!-- / Layout page -->
    </div>

     <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>

    @include('layouts.frontend.footer')
   
    @include('layouts.frontend.script')
   

</body>

</html>