<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('client.header')

<body>
    @include('client.navbar')
    
    @yield('content')
    
    @include('client.footer')
    @include('client.script')
</body>
</html>
