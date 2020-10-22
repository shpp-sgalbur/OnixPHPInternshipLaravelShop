<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('admin.head')
    <body class="nav-md">
        @include('admin.content')
        

        @include('admin.js')
    </body>
</html>
