<!DOCTYPE html>
<html lang="en" class="layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-skin="default" data-bs-theme="light" data-template="vertical-menu-template">
<head>
    @include('layouts.admin.meta')
    @include('layouts.admin.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
</head>
<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('layouts.admin.sidebar')

        <div class="layout-page">
            @include('layouts.admin.header')

            <div class="content-wrapper">
                @yield('content')
                @include('layouts.admin.footer')
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>

    <div class="layout-overlay layout-menu-toggle"></div>
    <div class="drag-target"></div>
</div>

@include('layouts.admin.script')
</body>
</html>
