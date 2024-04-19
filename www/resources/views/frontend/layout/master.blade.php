<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PHWHB2DS');
    </script>
    <!-- End Google Tag Manager -->


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Surface Solutions in India</title>
    <meta name="description"
        content="High quality & smart architectural and automobile surface solutions for style and safety">
    <meta name="keywords"
        content="High quality & smart architectural and automobile surface solutions for style and safety">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/frontend/images/favicon/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ URL::asset('assets/frontend/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ URL::asset('assets/frontend/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ URL::asset('assets/frontend/images/favicon/favicon-16x16.png') }} ">
    <link rel="manifest" href="{{ URL::asset('assets/frontend/images/favicon//site.webmanifest') }}">
    <meta name="base_url" content="{{ \Illuminate\Support\Facades\URL::to('/') }}" />
    <title>@yield('title')</title>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BE7WYHDH3H"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-BE7WYHDH3H');
    </script>
    {{-- include css links  --}}
    @include('frontend.layout.header_css')

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '435501495476111');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=435501495476111&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11116955619"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-11116955619');
    </script>
</head>

<body>
    <div id="loader-overlay">
        <div class="loader"></div>
    </div>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHWHB2DS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    {{-- include header  --}}
    @include('frontend.layout.header')


    {{-- main content  --}}
    @yield('content')


    {{-- js links  --}}
    @include('frontend.layout.footer_js')


    {{-- js code  --}}
    @yield('js')
</body>
<script type="text/javascript">
    _linkedin_partner_id = "5920020";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script>
    // Function to show the loader
    function showLoader() {
        var loader = document.getElementById('loader-overlay');
        loader.style.display = 'flex'; // Display loader overlay
    }

    // Function to hide the loader
    function hideLoader() {
        var loader = document.getElementById('loader-overlay');
        loader.style.display = 'none'; // Hide loader overlay
    }

    // Show loader whenever an event is running
    function handlePageTransition() {
        showLoader();
    }

    document.addEventListener('readystatechange', handlePageTransition);
    window.addEventListener('beforeunload', handlePageTransition);
    // Hide loader when all events are complete
    window.addEventListener('load', function() {
        hideLoader();
    });
</script>
<script type="text/javascript">
    (function(l) {
        if (!l) {
            window.lintrk = function(a, b) {
                window.lintrk.q.push([a, b])
            };
            window.lintrk.q = []
        }
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";
        b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);
    })(window.lintrk);
</script> <noscript> <img height="1" width="1" style="display:none;" alt=""
        src="https://px.ads.linkedin.com/collect/?pid=5920020&fmt=gif" /> </noscript>

</html>
