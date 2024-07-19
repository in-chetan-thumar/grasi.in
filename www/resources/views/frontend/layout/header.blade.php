{{-- header section  --}}
<div class="site-main">
    <noscript>
        <div class="noscript">
            <p><i class="fa fa-exclamation-triangle"></i>Please enable JavaScript in your browser.</p>
        </div>
    </noscript>





    <header class="header header_main">
        <div class="top_header">
            <div class="container">
                <div class="d-flex align-items-center justify-content-end">
                    <ul>
                        <li><a href="https://www.llumarppf.in/Ewar/Dealer/login.php" target="_blank"
                                class="btn btn-primary">LLumar E-warranty</a></li>
                        <li><a href="{{ route('frontend.locate') }}" class="btn btn-primary">Locate LLumar Dealer</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main_header">
            <div class="container">
                <div class="d-flex align-items-end justify-content-between">
                    <div class="logo_main">
                        <a href="{{ route('frontend.home') }}">
                            <img src="{{ asset('assets/frontend/images/logo.svg') }}" alt="image">
                        </a>
                    </div>
                    <div class="menu_main">
                        <nav class="wsmenu">
                            <ul class="wsmenu-list">
                                <li>
                                    <a href="{{ route('frontend.our_story') }}">Our Story</a>
                                </li>
                                <li class="megamenumain"><a href="#">Our Solutions</a>
                                    <ul class="sub-menu">
                                        {{-- mega menu start  --}}
                                        <div class="megamenu">
                                            <div class="megamenu_sub">
                                                <div class="megamenu_row">
                                                    <div class="row g-5">
                                                        <div class="col-lg-3">
                                                            <div class="megamenu_wrpr">
                                                                <div class="menu_img">
                                                                    <img src="{{ asset('assets/frontend/images/menuimg1.webp') }}"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="megamenu_right">
                                                                <a href="{{ route('enquiry.index') }}" target="_blank">
                                                                    <h2>Automotive</h2>
                                                                </a>
                                                                <div class="row">
                                                                    <div class="col-xl-3 col-lg-3">
                                                                        <div class="megamenu_wrpr">
                                                                            <a href="https://llumar.com/emea/en/automotive/window-tint/"
                                                                                target="_blank">
                                                                                <h4>Window Tint</h4>
                                                                            </a>
                                                                            <ul>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/window-tint/ceramic/"
                                                                                        target="_blank">Ceramic</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/window-tint/metallized/"
                                                                                        target="_blank">Metallized</a>
                                                                                </li>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/window-tint/dyed/"
                                                                                        target="_blank">Dyed</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/window-tint/clear/"
                                                                                        target="_blank">Clear</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/window-tint/benefits/"
                                                                                        target="_blank">Window Tint
                                                                                        Benefits</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg-3">
                                                                        <div class="megamenu_wrpr">
                                                                            <a href="https://llumar.com/emea/en/automotive/paint-protection-film/"
                                                                                target="_blank">
                                                                                <h4>Paint Protection Film</h4>
                                                                            </a>
                                                                            <ul>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/paint-protection-film/valor/"
                                                                                        target="_blank">Valor</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/paint-protection-film/platinum-matte/"
                                                                                        target="_blank">Platinum
                                                                                        Matte</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/paint-protection-film/platinum-extra/"
                                                                                        target="_blank">Platinum
                                                                                        Extra</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/paint-protection-film/gloss-matte/"
                                                                                        target="_blank">Gloss and
                                                                                        Matte</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/paint-protection-film/select-black/"
                                                                                        target="_blank">Select Black</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg-3">
                                                                        <div class="megamenu_wrpr">
                                                                            <a href="https://llumar.com/emea/en/automotive/window-film-ppf-viewer/"
                                                                                target="_blank">
                                                                                <h4>Window Film and PPF Viewer</h4>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="megamenu_row">
                                                    <div class="row g-5">
                                                        <div class="col-lg-3">
                                                            <div class="megamenu_wrpr">
                                                                <div class="menu_img">
                                                                    <img src="{{ asset('assets/frontend/images/menuimg2.webp') }}"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="megamenu_right">
                                                                <a href="{{ route('llumar.window.films.index') }}"
                                                                    target="_blank">
                                                                    <h2>Architectural</h2>
                                                                </a>
                                                                <div class="row">
                                                                    <div class="col-xl-3 col-lg-3">
                                                                        <div class="megamenu_wrpr">
                                                                            <a href="https://llumar.com/emea/en/architectural/residential-window-film/"
                                                                                target="_blank">
                                                                                <h4>Residential</h4>
                                                                            </a>
                                                                            <ul>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/residential-window-film/solar/"
                                                                                        target="_blank">Solar
                                                                                        Control</a>
                                                                                </li>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/residential-window-film/decorative/"
                                                                                        target="_blank">Decorative</a>
                                                                                </li>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/residential-window-film/safety-security/"
                                                                                        target="_blank">Safety &
                                                                                        Security</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/residential-window-film/benefits/"
                                                                                        target="_blank">Window Film
                                                                                        Benefits</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg-3">
                                                                        <div class="megamenu_wrpr">
                                                                            <a href="https://llumar.com/emea/en/architectural/commercial-window-film/"
                                                                                target="_blank">
                                                                                <h4>Commercial</h4>
                                                                            </a>
                                                                            <ul>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/commercial-window-film/solar/"
                                                                                        target="_blank">Solar
                                                                                        Control</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/commercial-window-film/decorative/"
                                                                                        target="_blank">Decorative</a>
                                                                                </li>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/commercial-window-film/safety-security/"
                                                                                        target="_blank">Safety &
                                                                                        Security</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/commercial-window-film/benefits/"
                                                                                        target="_blank">Commercial
                                                                                        Benefits</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-lg-3">
                                                                        <div class="megamenu_wrpr">
                                                                            <a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/"
                                                                                target="_blank">
                                                                                <h4>Resources</h4>
                                                                            </a>
                                                                            <ul>
                                                                                <li><a href="https://llumar.com/emea/en/dealers/dealer-resources/window-film-spec-sheets/"
                                                                                        target="_blank">Spec Sheets</a>
                                                                                </li>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/performance-comparison/"
                                                                                        target="_blank">Product
                                                                                        Comparison</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/energy-savings-calculator/"
                                                                                        target="_blank">Energy Savings
                                                                                        Calaculator</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/downloads/"
                                                                                        target="_blank">Downloads
                                                                                        Library</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-lg-3">
                                                                        <div class="megamenu_wrpr">
                                                                            <a href="" target="_blank">
                                                                                <h4>Film Viewers</h4>
                                                                            </a>
                                                                            <ul>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/solar-decorative-film-viewer/"
                                                                                        target="_blank">Commercial</a>
                                                                                </li>
                                                                                <li><a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/viewer-for-home/"
                                                                                        target="_blank">Residential</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="megamenu_row">
                                                    <div class="row g-5 align-items-center">
                                                        <div class="col-lg-3">
                                                            <div class="megamenu_wrpr">
                                                                <div class="menu_img">
                                                                    <img src="{{ asset('assets/frontend/images/menuimg3.webp') }}"
                                                                        alt="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="megamenu_right">
                                                                <a href="{{ route('frontend.graphic') }}">
                                                                    <h2>Graphics</h2>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- mega menu end  --}}
                                    </ul>
                                </li>
                                {{-- <li><a href="casestudies.php">Casestudies</a></li> --}}
                                <li><a href="https://www.linkedin.com/company/gras-%E2%80%93i-intelligent-surface-solutions/"
                                        target="_blank">Careers</a></li>
                                <li><a href="{{ route('contact.index') }}">Contact</a></li>
                            </ul>
                        </nav>
                        <a id="wsnavtoggle" class="wsanimated-arrow menu_close">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </header>
