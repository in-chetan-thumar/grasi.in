<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title> @yield('title')  {{ config('constants.APP_NAME') }}</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta name="og:description" content="">
    @include('llumar.layouts.head-css')
</head>
<body>

    {{-- include header  --}}
        @include('llumar.layouts.header')
        {{-- main content  --}}
        @yield('content')
        @include('llumar.layouts.footer')
        
        @include('llumar.layouts.footer_js')
        
        @yield('js')
   
</body>
</html>

