<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Surface Solutions in India</title>
    <meta name="description" content="High quality & smart architectural and automobile surface solutions for style and safety">
    <meta name="keywords" content="High quality & smart architectural and automobile surface solutions for style and safety">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/frontend/images/favicon/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('assets/frontend/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32"  href="{{ URL::asset('assets/frontend/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16"  href="{{ URL::asset('assets/frontend/images/favicon/favicon-16x16.png')}} ">
    <link rel="manifest"  href="{{ URL::asset('assets/frontend/images/favicon//site.webmanifest')}}" >
    <meta name="base_url" content="{{ \Illuminate\Support\Facades\URL::to('/') }}"/>    <title>@yield('title')</title>

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
