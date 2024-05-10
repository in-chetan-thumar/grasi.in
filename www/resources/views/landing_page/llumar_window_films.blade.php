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
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content = "telephone=no">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>LLumar Window films</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/llumar_window_films/images/favicon.ico') }}">

    <!-- Le styles -->
    <link rel="stylesheet" href="{{ asset('assets/llumar_window_films/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/llumar_window_films/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/llumar_window_films/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/llumar_window_films/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/llumar_window_films/css/responsive-tabs.css') }}">


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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHWHB2DS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <div class="header_left">
            <div class="logo">
                <img src="{{ asset('assets/llumar_window_films/images/logo.webp') }}" alt="LLumar" title="LLumar" />
            </div>
        </div>
        <div class="header_right">
            <div class="header_links">
                <a href="tel:+917400480852">
                    <img src="{{ asset('assets/llumar_window_films/images/whatsapp.webp') }}" alt="WhatsApp"
                        title="WhatsApp" />
                    +917400480852
                </a>
                <a href="tel:+917400480852">
                    <img src="{{ asset('assets/llumar_window_films/images/call.webp') }}" alt="Call"
                        title="Call" />
                    +917400480852
                </a>
            </div>
        </div>
    </header>

    <section class="banner">
        <div class="banner_left">
            <h1>Glass-ify Your Inquiry, <span>Enlighten</span> Your Space! </h1>
            <img src="{{ asset('assets/llumar_window_films/images/banner.webp') }}" alt="Banner" title="Banner" />
        </div>
        <div class="banner_right">
            {!! Form::open([
                'url' => route('llumar.window.films.store'),
                'method' => 'POST',
                'id' => 'form_enquiry',
                'class' => 'form_enquiry',
            ]) !!}

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" name="first_name" class="form-control" id="floatingFname" placeholder="">
                        <label for="floatingFname">First Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="last_name" class="form-control" id="floatingLname" placeholder="">
                        <label for="floatingLname">Last Name</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" name="project_type" id="floatingSelect">
                            @foreach (config('constants.LLUMAR_WINDOW_FILMS.PROJECT_TYPE') as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect" class="select_label">Project Type</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <select class="form-select" name="type_of_file" id="floatingSelect1">
                            @foreach (config('constants.LLUMAR_WINDOW_FILMS.TYPE_OF_FILM') as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect1" class="select_label">Type of Film Required</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="company_name" id="floatingCname"
                            placeholder="">
                        <label for="floatingCname">Company Name</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="mobile" id="floatingMnumber"
                            oninput='this.value = this.value.replace(/[^0-9]/g, "")' maxlength="10" placeholder="">
                        <label for="floatingMnumber">Mobile Number</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="whatsapp_number" id="floatingWnumber"
                            oninput='this.value = this.value.replace(/[^0-9]/g, "")' maxlength="10" placeholder="">
                        <label for="floatingWnumber">WhatsApp Number</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <select id="floatingSelect2" name="state" class="form-select">
                            @foreach (config('constants.LLUMAR_WINDOW_FILMS.STATES') as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach

                        </select>
                        <label for="floatingSelect2" class="select_label">State</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="floatingEadd" placeholder="">
                        <label for="floatingEadd">Email Address</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary enquiry_btn">Enquire Now</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </section>

    <section class="highlight_sec">
        <div class="highlight_title">
            <h2>Highlights</h2>
        </div>
        <ul>
            <li>
                <div class="highlight_image">
                    <img src="{{ asset('assets/llumar_window_films/images/group1.webp') }}"
                        alt="27 years in business" title="27 years in business" />
                    <p>27</p>
                </div>
                <div class="highlight_info">
                    <h4>27 years in business</h4>
                    <p>(associated for over 2 decades)</p>
                </div>
            </li>
            <li>
                <div class="highlight_image">
                    <img src="{{ asset('assets/llumar_window_films/images/group2.webp') }}" alt="2M+ sq ft of Film"
                        title="2M+ sq ft of Film" />
                    <p class="font_small">2M+</p>
                </div>
                <div class="highlight_info">
                    <h4>Installed 2M+ sq ft of Film</h4>
                </div>
            </li>
            <li>
                <div class="highlight_image">
                    <img src="{{ asset('assets/llumar_window_films/images/group3.webp') }}"
                        alt="1K+ Projects Executed" title="1K+ Projects Executed" />
                    <p class="font_big">1K+</p>
                </div>
                <div class="highlight_info">
                    <h4>1K+ Projects Executed</h4>
                </div>
            </li>
            <li>
                <div class="highlight_image">
                    <img src="{{ asset('assets/llumar_window_films/images/group4.webp') }}"
                        alt="1K+ Channel Partners" title="1K+ Channel Partners" />
                    <p class="font_big">1K+</p>
                </div>
                <div class="highlight_info">
                    <h4>1K+ Channel Partners Across India</h4>
                </div>
            </li>
        </ul>
    </section>

    <section class="film_sec">
        <div class="container-fluid">
            <h3 class="main_border"><span>Type</span> of Films</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-solar-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-solar" type="button" role="tab"
                            aria-controls="v-pills-solar" aria-selected="true">
                            Solar Window Film
                            <br />
                            <i>Increase comfort by taming the sun's heat and glare, help protect furnishings from sun
                                exposure, and help save energy too.</i>
                        </button>
                        <button class="nav-link" id="v-pills-decorative-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-decorative" type="button" role="tab"
                            aria-controls="v-pills-decorative" aria-selected="false">
                            Decorative Window Film
                            <br />
                            <i>Decorative film adds privacy from prying eyes and more interest to the decor.</i>
                        </button>
                        <button class="nav-link" id="v-pills-safety-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-safety" type="button" role="tab"
                            aria-controls="v-pills-safety" aria-selected="false">
                            Safety & Security Window Film
                            <br />
                            <i>If you're concerned about vandalism, break-ins or extreme weather, a safety and security
                                film will help you sleep better at night.</i>
                        </button>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-solar" role="tabpanel"
                            aria-labelledby="v-pills-solar-tab">
                            <div class="tab_images_top">
                                <img src="{{ asset('assets/llumar_window_films/images/residential-solar-control-hero-small-desktop.webp') }}"
                                    alt="Solar Window Film" title="Solar Window Film" />
                                <h5>Solar Window Film</h5>
                            </div>

                            <div class="tab_images_bottom">
                                <img src="{{ asset('assets/llumar_window_films/images/commercial-solar-control-hero-small-desktop.webp') }}"
                                    alt="Solar Window Film" title="Solar Window Film" />
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-decorative" role="tabpanel"
                            aria-labelledby="v-pills-decorative-tab">
                            <div class="tab_images_top">
                                <img src="{{ asset('assets/llumar_window_films/images/decorative-residential-hero-small-desktop.webp') }}"
                                    alt="Decorative Window Film" title="Decorative Window Film" />
                                <h5>Decorative Window Film</h5>
                            </div>

                            <div class="tab_images_bottom">
                                <img src="{{ asset('assets/llumar_window_films/images/decorative-commercial-hero-small-desktop.webp') }}"
                                    alt="Decorative Window Film" title="Decorative Window Film" />
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-safety" role="tabpanel"
                            aria-labelledby="v-pills-safety-tab">
                            <div class="tab_images_top">
                                <img src="{{ asset('assets/llumar_window_films/images/residential safety-security-hero-small-desktop.webp') }}"
                                    alt="Safety & Security Window Film" title="Safety & Security Window Film" />
                                <h5>Safety & Security Window Film</h5>
                            </div>

                            <div class="tab_images_bottom">
                                <img src="{{ asset('assets/llumar_window_films/images/commercial-solar-control-hero-small-desktop.webp') }}"
                                    alt="Safety & Security Window Film" title="Safety & Security Window Film" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recent_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <h3 class="main_border"><span>Recent</span> Projects</h3>
                </div>
                <div class="col-md-7">
                    <div class="recent_video owl-carousel owl-theme">
                        <div class="item-video">
                            <video width="258"
                                height="400"poster="{{ asset('assets/llumar_window_films/images/project1.webp') }}"
                                controls>
                                <source src="{{ asset('assets/llumar_window_films/images/Veronicas.mp4') }}"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="item-video">
                            <video width="258"
                                height="400"poster="{{ asset('assets/llumar_window_films/images/project2.webp') }}"
                                controls>
                                <source src="{{ asset('assets/llumar_window_films/images/Milind Soni.mp4') }}"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="item-video">
                            <video width="258"
                                height="400"poster="{{ asset('assets/llumar_window_films/images/project3.webp') }}"
                                controls>
                                <source src="{{ asset('assets/llumar_window_films/images/Friends.mp4') }}"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="item-video">
                            <video width="258"
                                height="400"poster="{{ asset('assets/llumar_window_films/images/project2.webp') }}"
                                controls>
                                <source src="{{ asset('assets/llumar_window_films/images/Bombay Sweet Shop.mp4') }}"
                                    type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="benefits_sec">
        <h3 class="main_border"><span>Benefits</span> of Window Films</h3>
        <div id="horizontalTab">
            <ul>
                <li><a href="#tab-1">Residential</a></li>
                <li><a href="#tab-2">Commercial</a></li>
            </ul>
            <div id="tab-1">
                <p>Uncomfortable home? Sun glare or hot spots ruining your day? LLumar window films offer stylish
                    solutions to cool your space, reduce glare, and save on energy bills. Quick installation, lasting
                    results.</p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills1-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-solar1-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-solar1" type="button" role="tab"
                                aria-controls="v-pills-solar1" aria-selected="true">
                                Solar
                            </button>
                            <button class="nav-link" id="v-pills-decorative1-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-decorative1" type="button" role="tab"
                                aria-controls="v-pills-decorative1" aria-selected="false">
                                Decorative
                            </button>
                            <button class="nav-link" id="v-pills-safety1-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-safety1" type="button" role="tab"
                                aria-controls="v-pills-safety1" aria-selected="false">
                                Safety & Security
                            </button>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills1-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-solar1" role="tabpanel"
                                aria-labelledby="v-pills-solar1-tab">
                                <div class="benefit_main_content">
                                    <div class="benefit_tab_content">
                                        <h6>Energy Efficiency</h6>
                                        <p>Relieve heating and cooling systems, to help save energy and shrink energy
                                            bills.</p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Consistent Comfort</h6>
                                        <p>Temper the sun's harsh heat and glare to enjoy any room, time of day or year.
                                        </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>UV Protection</h6>
                                        <p>Blocks more than 99% of the UV rays that can harm your family and contribute
                                            to fading. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Style and Privacy</h6>
                                        <p>Choose a reflective sun control film to guard against prying eyes and add
                                            modern curb appeal. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Affordable Alternative</h6>
                                        <p>Gain significant benefits with film instead of spending big on window
                                            replacement. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-decorative1" role="tabpanel"
                                aria-labelledby="v-pills-decorative1-tab">
                                <div class="benefit_main_content">
                                    <div class="benefit_tab_content">
                                        <h6>Designer Style</h6>
                                        <p>Express yourself, create a mood, or update the look of a room with a subtle
                                            or dramatic film.</p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Added Privacy</h6>
                                        <p>Completely shield or partially obscure views with a range of privacy levels.
                                        </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Hidden Views</h6>
                                        <p>If you can't change an unsightly outdoor view, you can conceal it without
                                            sacrificing sunlight. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Specialty Effects</h6>
                                        <p>Get the look of etched or textured glass, minus the hassle and expense of
                                            replacement. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Light Filtering</h6>
                                        <p>Soften bright, direct light for better aesthetics and a more eye-friendly
                                            environment. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Easy Updates</h6>
                                        <p>Keep decorative film until you're ready for a change - it's durable and easy
                                            to add or remove. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-safety1" role="tabpanel"
                                aria-labelledby="v-pills-safety1-tab">
                                <div class="benefit_main_content">
                                    <div class="benefit_tab_content">
                                        <h6>Burglary Defense</h6>
                                        <p>Safety and security film makes glass harder to penetrate so intruders will
                                            likely move on, instead of forcing their way in.</p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Holding Power</h6>
                                        <p>When hit hard enough to break, glass pieces generally adhere to the film
                                            itself instead of scattering. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Minimised Damage</h6>
                                        <p>Lessens accidental damage with daily wear and tear.</p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Storm Safety</h6>
                                        <p>Helps hold fragments in place when glass shatters due to high-force winds and
                                            flying debris. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Consistent Comfort</h6>
                                        <p>Solar control safety film tempers the sun's heat and glare to enhance the
                                            comfort at home. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>UV Protection</h6>
                                        <p>Most of these film products block 99% of the UV rays that contribute to the
                                            fading of furniture and interiors. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-2">
                <p>Rising energy costs? Tenant complaints about glare? LLumar commercial window films can help. Reduce
                    heat, glare, and UV damage, all while saving on energy bills. Enhance comfort and protect your
                    property. Quick install, big impact.</p>
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills2-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-solar2-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-solar2" type="button" role="tab"
                                aria-controls="v-pills-solar2" aria-selected="true">
                                Solar
                            </button>
                            <button class="nav-link" id="v-pills-decorative2-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-decorative2" type="button" role="tab"
                                aria-controls="v-pills-decorative2" aria-selected="false">
                                Decorative
                            </button>
                            <button class="nav-link" id="v-pills-safety2-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-safety2" type="button" role="tab"
                                aria-controls="v-pills-safety2" aria-selected="false">
                                Safety & Security
                            </button>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills2-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-solar2" role="tabpanel"
                                aria-labelledby="v-pills-solar2-tab">
                                <div class="benefit_main_content">
                                    <div class="benefit_tab_content">
                                        <h6>Energy Efficiency</h6>
                                        <p>Relieve heating and cooling systems, to help conserve energy and shrink
                                            bills.</p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Consistent Comfort</h6>
                                        <p>Temper the sun's harsh heat and glare to make commercial spaces more pleasant
                                            and usable. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>UV Protection</h6>
                                        <p>Block more than 99% of the UV rays that contribute to the fading of
                                            interiors, artwork and furnishings. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Aesthetic Appeal</h6>
                                        <p>Complement any architectural style, with films from barely visible to neutral
                                            to reflective. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>More Privacy</h6>
                                        <p>Choose reflective sun control film in a broad range of colours to disguise
                                            mismatched blinds, curtains or clutter. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Impressive ROI</h6>
                                        <p>Expect reliable payback on solar film installation. See our energy savings
                                            calculator for details. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-decorative2" role="tabpanel"
                                aria-labelledby="v-pills-decorative2-tab">
                                <div class="benefit_main_content">
                                    <div class="benefit_tab_content">
                                        <h6>Elevated Style</h6>
                                        <p>Enhance the look of spas, offices, medical practices and more with film
                                            styles that range from subtle to bold.</p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Privacy Boost</h6>
                                        <p>With varying degrees of privacy levels, decorative film can fully or
                                            partially block an individual's ability to see through the glass. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Disguised Views</h6>
                                        <p>Completely shield or partially obscure an unappealing view, without
                                            compromising daylight. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Inexpensive Alternative</h6>
                                        <p>Decorative film is a cost-effective way to convincingly simulate etched or
                                            textured glass. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Light Control</h6>
                                        <p>Soften bright, direct light to improve aesthetics, add comfort and enhance
                                            occupant productivity. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Easy Updates</h6>
                                        <p>Film is durable yet easy to install and remove. Refresh for new client needs
                                            and trends. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Creative Flexibility</h6>
                                        <p>Layer, print and custom-cut decorative film to create eye-catching branding
                                            or original artwork. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-safety2" role="tabpanel"
                                aria-labelledby="v-pills-safety2-tab">
                                <div class="benefit_main_content">
                                    <div class="benefit_tab_content">
                                        <h6>Burglary Defense</h6>
                                        <p>Safety and security film makes glass harder to penetrate so intruders will
                                            likely move on, instead of forcing their way in. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Holding Power</h6>
                                        <p>When hit hard enough to break, glass pieces generally adhere to the film
                                            itself instead of scattering. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Minimised Damage</h6>
                                        <p>Lessens accidental damage in high-traffic public areas with daily wear and
                                            tear.</p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Storm Safety</h6>
                                        <p>Helps hold fragments in place when glass shatters due to high-force winds and
                                            flying debris. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>Consistent Comfort</h6>
                                        <p>Solar control safety film tempers the sun's heat and glare to enhance
                                            productivity and comfort. </p>
                                    </div>
                                    <div class="benefit_tab_content">
                                        <h6>UV Protection</h6>
                                        <p>Most of these film products block 99% of the UV rays that contribute to the
                                            fading of merchandise and interiors. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="window_sec">
        <div class="benefits_sec">
            <h3 class="main_border"><span>Window Films</span> Characteristics</h3>
        </div>
        <div class="window_block">
            <ul class="parent_block">
                <li>
                    <div class="window_image">
                        <img src="{{ asset('assets/llumar_window_films/images/reflective-window-film.webp') }}"
                            alt="Reflective Window Film" title="Reflective Window Film" />
                        <div class="window_title">
                            <h5>Reflective Window Film</h5>
                        </div>
                    </div>
                    <p>Impressive solar control that reflects like a mirror with indoor lighting or outdoor daylight.
                    </p>
                    <ul>
                        <li>Create privacy.</li>
                        <li>Take care of uncomfortable hot spots in sunny areas of your home or office. </li>
                        <li>Blocks more than 99% of the UV rays that can fade your furnishings.</li>
                    </ul>
                </li>
                <li>
                    <div class="window_image">
                        <img src="{{ asset('assets/llumar_window_films/images/dual-reflective-window-film.webp') }}"
                            alt="Dual-Reflective Window Film" title="Dual-Reflective Window Film" />
                        <div class="window_title">
                            <h5>Dual-Reflective Window Film</h5>
                        </div>
                    </div>
                    <p>A reflective exterior and a neutral interior, for 24-hour outside views with significant solar
                        control.</p>
                    <ul>
                        <li>Blocks more than 99% of the UV rays that can fade your furnishings</li>
                        <li>Enhances viewing comfort in bright settings. </li>
                        <li>Provides solar control without compromising expansive views.</li>
                    </ul>
                </li>
                <li>
                    <div class="window_image">
                        <img src="{{ asset('assets/llumar_window_films/images/neutral-window-film.webp') }}"
                            alt="Neutral Window Film" title="Neutral Window Film" />
                        <div class="window_title">
                            <h5>Neutral Window Film</h5>
                        </div>
                    </div>
                    <p>These subtle, non-reflective grey film products provide solar benefits with less visible change
                        to glass.</p>
                    <ul>
                        <li>Adds a minor tint to preserve the current look of your window.</li>
                        <li>Blocks more than 99% of the UV rays that can fade your furnishings. </li>
                    </ul>
                </li>
                <li>
                    <div class="window_image">
                        <img src="{{ asset('assets/llumar_window_films/images/specialty-window-film.webp') }}"
                            alt="Specialty Window Film" title="Specialty Window Film" />
                        <div class="window_title">
                            <h5>Specialty Window Film</h5>
                        </div>
                    </div>
                    <p>Virtually invisible solar control benefits and maximum optical clarity; popular for historic
                        homes.</p>
                    <ul>
                        <li>Excellent heat rejection with optically clear views. </li>
                        <li>Blocks more than 99% of the UV rays that can fade your furnishings. </li>
                        <li>Virtually invisible solar control without a hint of a darkening tint. </li>
                    </ul>
                </li>
                <li>
                    <div class="window_image">
                        <img src="{{ asset('assets/llumar_window_films/images/spectrally-selective-window-film.webp') }}"
                            alt="Spectrally Selective Window Film" title="Spectrally Selective Window Film" />
                        <div class="window_title">
                            <h5>Spectrally Selective Window Film </h5>
                        </div>
                    </div>
                    <p>Minimal light control and maximum heat protection that barely alters the look of window glass.
                    </p>
                    <ul>
                        <li>Ability to block more than 99% of skin- and interior-damaging UV ray.</li>
                        <li>Eye-comforting glare reduction. </li>
                        <li>Powerful heat control to help give your air conditioner a break. </li>
                    </ul>
                </li>
                <li>
                    <div class="window_image">
                        <img src="{{ asset('assets/llumar_window_films/images/decorative-window-film.webp') }}"
                            alt="Decorative Window Film" title="Decorative Window Film" />
                        <div class="window_title">
                            <h5>Decorative Window Film </h5>
                        </div>
                    </div>
                    <p>Enhance the privacy level, look or mood of any residential/commercial space.</p>
                    <ul>
                        <li>Enhances the look of homes and office.</li>
                        <li>Completely shielded or partially obscure view with a range of privacy levels. </li>
                        <li>Soften bright, direct light to improve aesthetics, add comfort. </li>
                    </ul>
                </li>
                <li>
                    <div class="window_image">
                        <img src="{{ asset('assets/llumar_window_films/images/safety-security-film.webp') }}"
                            alt="Safety & Security Film" title="Safety & Security Film" />
                        <div class="window_title">
                            <h5>Safety & Security Film </h5>
                        </div>
                    </div>
                    <p>Safety and security film helps defend what's most valuable against break-ins, vandalism,
                        accidents, storms & more.</p>
                    <ul>
                        <li>Helps prevent break-ins, and burglary.</li>
                        <li>Adds a tough layer that will hold together better, if broken. </li>
                        <li>Controls heat, glare, and UV rays. </li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>

    <section class="choose_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="main_border"><span>Why</span> <br /> Choose Us?</h3>
                    <div class="choose_info">
                        <p>Since our inception, we have been generating and delivering intelligent, innovative, and
                            functional solutions, which has made us a reputable name in the architectural and automotive
                            industry.</p>
                        <p>Today, as we continue to provide state-of-the-art materials and services, we hold a vision to
                            make it all aesthetically and technologically superior.</p>
                        <p>Manufacturer's backed warranty with upto 10 years*</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="choose_img">
                        <img src="{{ asset('assets/llumar_window_films/images/why-choose-us.webp') }}"
                            alt="LLumar Window Film" title="LLumar Window Film" />
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="trusted_block">
        <div class="main_title">
            <h3>trusted by</h3>
        </div>
        <ul class="trusted owl-carousel">
            <li>
                <img src="{{ asset('assets/llumar_window_films/images/bank-of-america.webp') }}"
                    alt="Bank of America" title="Bank of America" />
            </li>
            <li>
                <img src="{{ asset('assets/llumar_window_films/images/google.webp') }}" alt="Google"
                    title="Google" />
            </li>
            <li>
                <img src="{{ asset('assets/llumar_window_films/images/yes-bank.webp') }}" alt="Yes Bank"
                    title="Yes Bank" />
            </li>
            <li>
                <img src="{{ asset('assets/llumar_window_films/images/vodafone.webp') }}" alt="Vodafone"
                    title="Vodafone" />
            </li>
            <li>
                <img src="{{ asset('assets/llumar_window_films/images/DBS-bank.webp') }}" alt="DBS Bank"
                    title="DBS Bank" />
            </li>
            <li>
                <img src="{{ asset('assets/llumar_window_films/images/hsbc.webp') }}" alt="HSBC"
                    title="HSBC" />
            </li>
            <li>
                <img src="{{ asset('assets/llumar_window_films/images/icici.webp') }}" alt="Icici"
                    title="Icici" />
            </li>
            <li>
                <img src="{{ asset('assets/llumar_window_films/images/rbs.webp') }}" alt="RBS"
                    title="RBS" />
            </li>
        </ul>
    </section>

    <section class="faq_block">
        <div class="main_title">
            <h3>FAQ's</h3>
        </div>
        <div id="horizontalTab1">
            <ul>
                <li><a href="#tab-3">Installation</a></li>
                <li><a href="#tab-4">Appearance</a></li>
                <li><a href="#tab-5">Performance</a></li>
                <li><a href="#tab-6">Life with Film</a></li>
            </ul>
            <div id="tab-3">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                1. Where can window film be installed?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Window film can be installed on sliding glass doors, skylights, large windows and
                                    small French panes. Professional installers cut each film to fit any shape or size
                                    of flat glass. It's also safe for dual-pane windows and most types of low-e glass.
                                    Some films are better suited for certain situations.
                                    <a href="#">Consult a dealer</a> for product recommendations compatible with
                                    your type of windows or glass.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. Does window film go on the inside or outside?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Film is almost always installed on the inside of a window. However, there are
                                    exceptions. When an area is difficult to access, a film designed specifically for
                                    exterior application will be used. This is a great alternative for skylights or
                                    commercial buildings with high security clearance in certain areas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                3. How are window films installed?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>LLumar window film is installed by our professional dealer network. The process is
                                    minimally disruptive and our dealers will take you through it step by step. Film can
                                    be precisely cut to size, then delivered to the installation site. It's usually
                                    installed on the interior side of building glass. After installation, window film
                                    needs time to cure or dry out - the number of days this will take varies, depending
                                    on factors such as weather, glass type and product type.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                4. Is window film installation expensive?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>A film upgrade for existing building windows is typically only a fraction of the cost
                                    for full window replacement. Savings depend on the particulars of each situation,
                                    and can vary. </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                5. Is window film installation messy?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>LLumar window film products are applied to glass with water-based solutions. Our film
                                    is carefully installed by professionals trained to treat your windows and property
                                    with care.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                6. How long does installation take?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Window film installation projects vary, but in many residences, film can be installed
                                    in one day. Larger projects for commercial properties can take longer. When
                                    scheduling an installation appointment with one of our professional dealers, be sure
                                    to mention any time constraints. They'll adjust, to the best of their ability, to
                                    fit your schedule.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-4">
                <div class="accordion" id="accordionExample1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                1. Can you see through window film?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse show"
                            aria-labelledby="headingSeven" data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>LLumar window film comes in various designs, colors and shades. It can be virtually
                                    clear to preserve Views or opaque for privacy. Most solar control film is optically
                                    clear. Looking through it is like wearing high-end sunglasses, or a flattering photo
                                    filter.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                2. Does window film make a space darker?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Not unless you want it to. With less need to use window treatments to block heat and
                                    glare, spaces with filmed windows can actually be brighter.</p>
                                <ul>
                                    <li>Choose a clearer film if you want solar control with virtually no change in
                                        glass appearance. </li>
                                    <li>Choose a film that is reflective or darkly tinted if you want solar control with
                                        some privacy. </li>
                                    <li>You can also use decorative film that mimics specialty glass to create privacy.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                3. Does window film block light?
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Window film filters the sun's rays with technology created to let in varying levels
                                    of sunlight. It's made to reduce the sun's heat and glare, and block up to 99% of
                                    the UV rays that contribute to skin damage and fading to furnishings. </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                4. Will my window film bubble or turn purple?
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExample1">
                            <div class="accordion-body">
                                <p>Not if it's from LLumar. Purple, bubbling film is a sign of a very low-grade window
                                    film whose mounting adhesive and dye components have broken down. LLumar film is
                                    warranted against this and made with more color stable and advanced dye chemistries
                                    and/or metal layers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-5">
                <div class="accordion" id="accordionExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEleven">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                1. Can window film help save energy?
                            </button>
                        </h2>
                        <div id="collapseEleven" class="accordion-collapse collapse show"
                            aria-labelledby="headingEleven" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Yes. According to U.S. Department of Energy statistics, solar heat gain through
                                    windows is responsible for about one third of a building's cooling costs. Window
                                    film that reduces solar heat gain can relieve overworked cooling systems, lowering
                                    energy use and bills. Some film has insulating properties, for help with heat
                                    retention in colder seasons. Ultimately, energy cost savings depend on factors such
                                    as type of glass, existence of overhangs, climate and local energy rates. Many
                                    window film projects produce a return on investment in just 3 to 5 years, making
                                    them well worth considering in lieu of full window replacement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwelve">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwelve" aria-expanded="false"
                                aria-controls="collapseTwelve">
                                2. Does window film help make a space feel cooler?
                            </button>
                        </h2>
                        <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Yes. Window film helps reduce the amount of heat transferred into a room through its
                                    windows. </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThirteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThirteen" aria-expanded="false"
                                aria-controls="collapseThirteen">
                                3. Does window film help protect against fading?
                            </button>
                        </h2>
                        <div id="collapseThirteen" class="accordion-collapse collapse"
                            aria-labelledby="headingThirteen" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Yes. This is one of the main reasons homeowners and businesses are interested in
                                    window film. All LLumar solar control window film blocks 99% of ultraviolet (UV)
                                    rays, a large contributor to fading. Our solar film also tempers the sun's hot
                                    infrared (IR) rays and visible light, two additional contributors to the fading of
                                    artwork, furnishings, finishes and merchandise. The amount of protection you get is
                                    determined by the type of film you select. </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFourteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFourteen" aria-expanded="false"
                                aria-controls="collapseFourteen">
                                4. Does window film reduce glare on screens?
                            </button>
                        </h2>
                        <div id="collapseFourteen" class="accordion-collapse collapse"
                            aria-labelledby="headingFourteen" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Yes. Window film reduces glare, so you can spend hours working on a computer or
                                    watching TV with less eye irritation and fatigue. The darker the tint of the film,
                                    the more glare reduction you can expect. </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFifteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFifteen" aria-expanded="false"
                                aria-controls="collapseFifteen">
                                5. Can window film protect glass in extreme weather?
                            </button>
                        </h2>
                        <div id="collapseFifteen" class="accordion-collapse collapse"
                            aria-labelledby="headingFifteen" data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Yes. LLumar safety and security film helps hold broken glass together, reducing the
                                    risk of small pieces flying through the air. This film will help you sleep better at
                                    night if you have concerns about extreme weather, break-ins or vandalism.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab-6">
                <div class="accordion" id="accordionExample3">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSixteen">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSixteen" aria-expanded="true"
                                aria-controls="collapseSixteen">
                                1. Does LLumar window film require special care or cleaning?
                            </button>
                        </h2>
                        <div id="collapseSixteen" class="accordion-collapse collapse show"
                            aria-labelledby="headingSixteen" data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>Not really. Window film is scratch-resistant and may be cleaned with common household
                                    cleaners, non-abrasive paper towels, or cotton cleaning cloths.</p>
                                <p>*Caution should be exercised to prevent gouging by hard, sharp, metallic objects.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeventeen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeventeen" aria-expanded="false"
                                aria-controls="collapseSeventeen">
                                2. Is LLumar window film backed by warranty?
                            </button>
                        </h2>
                        <div id="collapseSeventeen" class="accordion-collapse collapse"
                            aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>Yes. We stand behind our products with a factory-backed limited warranty. Our
                                    high-performance film is proudly made in the U.S. from globally sourced materials by
                                    Eastman Performance Films, LLC, a respected industry leader known for innovative and
                                    technology-based solutions. LLumar window film carries one of the best
                                    manufacturer's warranties in the industry. Warranty varies by product—please reach
                                    out to a local dealer for details about what products may meet your needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEighteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEighteen" aria-expanded="false"
                                aria-controls="collapseEighteen">
                                3. How long does window film last?
                            </button>
                        </h2>
                        <div id="collapseEighteen" class="accordion-collapse collapse"
                            aria-labelledby="headingEighteen" data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>Window film is made to last for years and years. Durability depends on the type of
                                    film, size, type of glass, climate and events that occur after installation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNinteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseNinteen" aria-expanded="false"
                                aria-controls="collapseNinteen">
                                4. Are rebates offered for window film?
                            </button>
                        </h2>
                        <div id="collapseNinteen" class="accordion-collapse collapse"
                            aria-labelledby="headingNinteen" data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>Many utility companies offer rebates specifically for solar control window film
                                    installation at residential or commercial properties. Often window film is named as
                                    a rebate-eligible product. Other times, window film can qualify for rebates under
                                    the “Custom Measures” option (commercial only).</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwenty">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwenty" aria-expanded="false"
                                aria-controls="collapseNinteeTwenty">
                                5. Is it easy to remove window film?
                            </button>
                        </h2>
                        <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty"
                            data-bs-parent="#accordionExample3">
                            <div class="accordion-body">
                                <p>Window film, with the exception of sacrificial anti-graffiti film, is designed for
                                    durability and long-term installation. However, it can be removed without causing
                                    any damage to the glass it was installed on, even after staying in place for years.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <ul>
            <li>
                <a href="#">
                    <img src="{{ asset('assets/llumar_window_films/images/instagram.webp') }}" alt="Instagram"
                        title="Instagram" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('assets/llumar_window_films/images/facebook.webp') }}" alt="Facebook"
                        title="Facebook" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('assets/llumar_window_films/images/youtube.webp') }}" alt="YouTube"
                        title="YouTube" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('assets/llumar_window_films/images/linked-in.webp') }}" alt="LinkedIn"
                        title="LinkedIn" />
                </a>
            </li>
        </ul>
        <div class="footer_info">
            <h6>Brought to India by </h6>
            <img src="{{ asset('assets/llumar_window_films/images/footer_img.webp') }}" alt="GRAS"
                title="GRAS" />
        </div>
        <p>Handcrafted with <span> ❤ </span> by <span>Buzz Makers.</span></p>
        <div class="footer_bottom"></div>
    </footer>

    <!-- Le javascript -->
    <script src="{{ asset('assets/llumar_window_films/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/llumar_window_films/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/llumar_window_films/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/llumar_window_films/js/jquery.responsiveTabs.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    {!! JsValidator::formRequest('App\Http\Requests\LlumarWindowFilmRequest', '#form_enquiry') !!}
    <script>
        function onSubmit(token) {
            $("#form_enquiry").submit();
        }
        $(document).ready(function() {
            $('.recent_video.owl-carousel').owlCarousel({
                loop: false,
                margin: 10,
                items: 3,
                nav: true,
                dots: false,
                video: true,
                responsive: {
                    480: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            var $tabs = $('#horizontalTab');
            $tabs.responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                //setHash: true,
                //disabled: [3,4],
                click: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> clicked!');
                },
                activate: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                },
                activateState: function(e, state) {
                    //console.log(state);
                    $('.info').html('Switched from <strong>' + state.oldState +
                        '</strong> state to <strong>' + state.newState + '</strong> state!');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.trusted.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                autoplaySpeed: 5000,
                slideTransition: "linear",
                smartSpeed: 5000,
                margin: 20,
                nav: false,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 5,
                        loop: true
                    }
                }
            })
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            var $tabs = $('#horizontalTab1');
            $tabs.responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                //setHash: true,
                //disabled: [3,4],
                click: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> clicked!');
                },
                activate: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                },
                activateState: function(e, state) {
                    //console.log(state);
                    $('.info').html('Switched from <strong>' + state.oldState +
                        '</strong> state to <strong>' + state.newState + '</strong> state!');
                }
            });
        });
    </script>
</body>
<script type="text/javascript">
    _linkedin_partner_id = "5920020";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
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
