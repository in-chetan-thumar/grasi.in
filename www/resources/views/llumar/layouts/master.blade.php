<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title> @yield('title') | {{ config('constants.APP_NAME') }}</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta name="og:description" content="">
    @include('llumar.layouts.head-css')
</head>
<body>

    <div id="layout-wrapper">

        {{-- Include Header --}}
        @include('llumar.layouts.header')
    
        {{-- Main Content Section --}}
        <main>
            @yield('content')
        </main>
    
        {{-- Include Footer --}}
        @include('llumar.layouts.footer')
    
        {{-- Include Footer JavaScript --}}
        @include('llumar.layouts.footer_js')
    
        {{-- Page-Specific JavaScript --}}
        @yield('js')
    
    </div>
</body>
</html>

