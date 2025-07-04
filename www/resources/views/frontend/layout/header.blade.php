{{-- header section  --}}
<div class="site-main">
    <noscript>
        <div class="noscript">
            <p><i class="fa fa-exclamation-triangle"></i>Please enable JavaScript in your browser.</p>
        </div>
    </noscript>





    <header class="header header_main">
        <div class="top_header link-for-web">
            <div class="container">
                <div class="d-flex align-items-center justify-content-end">
                    <ul>
                         <li><a href="{{ route('frontend.locate') }}" class="btn btn-primary">Locate LLumar Dealer</a>
                        </li>
                        <li><a href="https://www.llumarppf.in/Ewar/Dealer/login.php" target="_blank"
                                class="btn btn-primary">LLumar E-warranty</a></li>
                       
                           <li>
                            <a href="https://llumarppf.in/Ewar/User/index.php" class="btn btn-primary">Verify
                                E-Warranty</a>
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
                                {{-- <li class="link-for-mobile"> <a href="{{ route('frontend.locate') }}">Locate LLumar
                                        Dealer</a></li>
                                <li class="link-for-mobile"> <a href="https://www.llumarppf.in/Ewar/Dealer/login.php"
                                        target="_blank">LLumar
                                        E-warranty</a></li>
                                
                                <li class="link-for-mobile"> <a href="https://llumarppf.in/Ewar/User/index.php"
                                        target="_blank">Verify
                                        E-Warranty</a></li> --}}
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
                                                                <div class="megamenu_right">
                                                                    <a href="{{ route('enquiry.index') }}" target="_blank">
                                                                        <h2>Automotive</h2>
                                                                    </a>
                                                                <div class="row">
                                                                    <div class="col-xl-3 col-lg-3">
                                                                        <div class="megamenu_wrpr">
                                                                            <a href="{{route('llumar.automotive.window.film')}}"
                                                                                target="_blank">
                                                                                <h4>Window Films</h4>
                                                                            </a>
                                                                            <ul>
                                                                                <li><a href="{{route('llumar.ceramic.window.film')}}"
                                                                                   >Ceramic</a></li>
                                                                                <li><a href="{{route('llumar.metallized.window.film')}}"
                                                                                    >Metallized</a>
                                                                                </li>
                                                                                <li><a href="{{route('llumar.dyed.window.film')}}"
                                                                                    >Dyed</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/window-tint/clear/"
                                                                                    target="_blank"       >Clear</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/window-tint/benefits/"
                                                                                    target="_blank">Window Film
                                                                                        Benefits</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-3 col-lg-3">
                                                                        <div class="megamenu_wrpr">
                                                                            <a href="{{route('llumar.automotive.PPF')}}"
                                                                               >
                                                                                <h4>Paint Protection Films</h4>
                                                                            </a>
                                                                            <ul>
                                                                                
                                                                                    <li><a href="{{route('llumar.valor.PPF')}}"
                                                                                   >Valor</a></li>
                                                                                <li><a href="{{route('llumar.platinum.PPF')}}"
                                                                                   >Platinum</a></li>
                                                                                <li><a href="{{route('llumar.classeco')}}"
                                                                                        target="_blank">Classeco</a></li>
                                                                                <li><a href="{{route('llumar.platinum.matte.ppf')}}"
                                                                                        target="_blank">Platinum
                                                                                        Matte</a></li>
                                                                                <li><a href="https://llumar.com/emea/en/automotive/paint-protection-film/platinum-extra/"
                                                                                        target="_blank">Platinum
                                                                                        Extra</a></li>
                                                                                <li><a href="{{route('llumar.gloss.ppf')}}"
                                                                                        target="_blank">Gloss PPF</a></li>
                                                                                <li><a href="{{route('llumar.select.black.ppf')}}"
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
                                                                                <li><a href="{{route('llumar.solar.control.window.film')}}"
                                                                                       >Solar
                                                                                        Control</a>
                                                                                </li>
                                                                                <li><a href="{{route('llumar.decorative.window.film')}}"
                                                                                       >Decorative</a>
                                                                                </li>
                                                                                <li><a href="{{ route('llumar.safety.and.security.window.film') }}"
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
                                                                                <li><a href="{{route('llumar.solar.control.window.film')}}"
                                                                                       >Solar
                                                                                        Control</a>
                                                                                </li>
                                                                                <li><a href="{{route('llumar.decorative.window.film')}}"
                                                                                       >Decorative</a>
                                                                                </li>
                                                                                <li><a href="{{ route('llumar.safety.and.security.window.film') }}"
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
                                <li><a href="https://grasi.in/blog/"
                                        target="_blank">Blogs</a></li>
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
