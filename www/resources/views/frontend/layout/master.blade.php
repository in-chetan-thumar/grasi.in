<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico')}}" type="image/x-icon">
    <title>@yield('title')</title>

    {{-- include css links  --}}
    @include('frontend.layout.header_css')
    
</head>
<body>

    {{-- include header  --}}
    @include('frontend.layout.header')

    
     {{-- main content  --}}
     @yield('content')


     {{-- js links  --}}
     @include('frontend.layout.footer_js')


     {{-- js code  --}}
     @yield('js')
</body>
</html>