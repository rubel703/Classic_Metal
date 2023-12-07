<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.meta')
    @include('admin.includes.link')
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        @yield('content')
        @include('admin.layouts.footer')
    </div>
    @include('admin.includes.script')
    @include('admin.includes.script2')
</body>

</html>
