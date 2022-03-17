<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('admin.layout.header')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.layout.navbar')
        @include('admin.layout.sidebar')

       <div class="content-wrapper">
        @include('flash-message')
        @yield('content')
       </div>
       

        @include('admin.layout.footer')
    </div>  
    @include('admin.layout.script')   
</body>
</html>
