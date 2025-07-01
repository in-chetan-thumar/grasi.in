<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('frontend.home') }}">
                <img src="{{ asset('assets/llumar/images/llamar-logo.png')}}" alt="Logo" class="llumar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <button class="menu-btn responsive-mobile" onclick="openDrawer()">☰</button>
                <!-- <span class="navbar-toggler-icon"></span> -->
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        {{-- <a class="nav-link" aria-current="page" href="{{ route('frontend.our_story') }}">Our
                            Story</a> --}}
                        <a class="nav-link" aria-current="page" href="{{ route('frontend.our_story') }}">Our Story</a>

                    </li>
                    <!--li class="nav-item">
                        <a class="nav-link" href="our-products.html">Our Solutions</a>
                    </li-->
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" href="our-products.html"> -->
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" href="#">
                            Our Solutions
                        </a>
                        <div class="dropdown-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="column">
                                        <img src="{{ asset('assets/llumar/images/menuimg1.webp')}}" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="header">
                                        <h4><a href="{{ route('enquiry.index') }}">Automotive</a></h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 column">
                                            <h6><a href="{{route('llumar.automotive.window.film')}}"target="_blank">Window Films</a></h6>
                                            <a href="{{route('llumar.ceramic.window.film')}}">Ceramic</a>
                                            <a href="{{route('llumar.metallized.window.film')}}">Metallized</a>
                                            <a href="{{route('llumar.dyed.window.film')}}">Dyed</a>
                                            <a href="https://llumar.com/emea/en/automotive/window-tint/clear/"
                                                                                    target="_blank"  >Clear</a>
                                            <a href="https://llumar.com/emea/en/automotive/window-tint/benefits/"
                                                                                    target="_blank">Window Film Benefits</a>
                                        </div>
                                        <div class="col-md-3 column">
                                            <h6><a href="{{route('llumar.automotive.PPF')}}">Paint Protection Films</a></h6>
                                            <a href="{{route('llumar.valor.PPF')}}">Valor</a>
                                            <a href="{{route('llumar.platinum.PPF')}}">Platinum</a>
                                            <a href="{{route('llumar.classeco')}}">Classeco</a>
                                            <a href="https://llumar.com/emea/en/automotive/paint-protection-film/platinum-matte/"
                                                                                        target="_blank">Platinum Matte</a>
                                            <a href="https://llumar.com/emea/en/automotive/paint-protection-film/platinum-extra/"
                                                                                        target="_blank">Platinum Extra</a>
                                            <a href="https://llumar.com/emea/en/automotive/paint-protection-film/gloss-matte/"
                                                                                        target="_blank">Gloss & Matte</a>
                                            <a href="https://llumar.com/emea/en/automotive/paint-protection-film/select-black/"
                                                                                        target="_blank">Select Black</a>
                                        </div>
                                        <div class="col-md-3 column">
                                            <h6><a href="https://llumar.com/emea/en/automotive/window-film-ppf-viewer/"
                                                                                target="_blank">Window Films & PPF Viewer</a></h6>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <hr>
                            <!--  -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="column">
                                        <img src="{{ asset('assets/llumar/images/menuimg2.webp')}}" class="w-100" alt="">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="header">
                                        <h4><a href="{{ route('llumar.window.films.index') }}"
                                                                    target="_blank">Architectural</a></h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 column">
                                            <h6><a href="https://llumar.com/emea/en/architectural/residential-window-film/"
                                                                                target="_blank">Residential</a></h6>
                                            <a href="{{route('llumar.solar.control.window.film')}}"
                                                                                        >Solar Control</a>
                                            <a href="{{route('llumar.decorative.window.film')}}"
                                                                                        >Decorative</a>
                                            <a href="{{ route('llumar.safety.and.security.window.film') }}" 
                                                                                        target="_blank">Safety & Security</a>
                                            <a href="https://llumar.com/emea/en/architectural/residential-window-film/benefits/"
                                                                                        target="_blank">Window Film Benefits</a>
                                        </div>
                                        <div class="col-md-2 column">
                                            <h6><a href="https://llumar.com/emea/en/architectural/commercial-window-film/"
                                                target="_blank">Commercial</a></h6>
                                            <a href="{{route('llumar.solar.control.window.film')}}"
                                                                                        >Solar Control</a>
                                            <a href="{{route('llumar.decorative.window.film')}}"
                                                                                        >Decorative</a>
                                            <a href="{{ route('llumar.safety.and.security.window.film') }}" 
                                                                                        target="_blank">Safety & Security</a>
                                            <a href="https://llumar.com/emea/en/architectural/commercial-window-film/benefits/"
                                                                                        target="_blank">Commercial
                                                                                        Benefits</a></>
                                        </div>
                                        <div class="col-md-2 column">
                                            <h6><a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/"
                                                target="_blank">
                                                <h4>Resources</h4>
                                            </a></h6>
                                            <a href="https://llumar.com/emea/en/dealers/dealer-resources/window-film-spec-sheets/"
                                                                                        target="_blank">Spec Sheets</a>
                                            <a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/performance-comparison/"
                                                                                        target="_blank">Product Comparison</a>
                                            <a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/energy-savings-calculator/"
                                                                                        target="_blank">Energy Savings Calaculator</a>
                                            <a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/downloads/"
                                                                                        target="_blank">Downloads Library</a>
                                        </div>
                                        <div class="col-md-2 column">
                                            <h6><a href="" target="_blank">
                                                                                <h4>Film Viewers</h4>
                                                                            </a></h6>
                                            <a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/solar-decorative-film-viewer/"
                                                                                        target="_blank">Commercial</a>
                                            <a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/viewer-for-home/"
                                                                                        target="_blank">Residential</a>
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                            <hr>
                            <!--  -->
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="column">
                                        <img src="{{ asset('assets/llumar/images/menuimg3.webp')}}" class="w-100" alt="">
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="header">
                                        <h4><a href="{{ route('frontend.graphic') }}">Graphics</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link"
                            href="https://www.linkedin.com/company/gras-%E2%80%93i-intelligent-surface-solutions/">Careers</a>
                        --}}
                        <a class="nav-link"
                            href="https://www.linkedin.com/company/gras-%E2%80%93i-intelligent-surface-solutions/"
                                        target="_blank">Careers</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="https://grasi.in/blog/" target="_blank">Blogs</a> --}}
                        <a class="nav-link" href="https://grasi.in/blog/" target="_blank">Blogs</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ route('contact.index') }}">Contact</a> --}}
                        <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Toggle Button -->
    <!-- <button class="menu-btn" onclick="openDrawer()">☰ Menu</button> -->

    <!-- Side Drawer -->
    <div id="drawer" class="side-drawer">
        <a href="javascript:void(0)" onclick="closeDrawer()">
            <i class="bi bi-x-circle"></i>
        </a>

        <a href="our-story.html">Our Story</a>
        <!-- Submenu item -->
        <div id="servicesMenu" class="submenu-container">
            <a href="javascript:void(0)" class="submenu-toggle" onclick="toggleSubmenu()">Our Products</a>
            <div class="submenu" id="submenu">
                <div class="dropdown-menu-mob">
                    <div class="row">
                        <div class="col-md-3 column">
                            <div class="header">
                                <h4><a href="{{ route('enquiry.index') }}">Automotive</a></h4>
                            </div>
                            <img src="{{ asset('assets/llumar/images/menuimg1.webp')}}" class="w-100" alt="">
                        </div>

                        <div class="col-md-2 column">
                            <h6><a href="{{route('llumar.automotive.window.film')}}" target="_blank">Window Films</a></h6>
                            <a href="{{route('llumar.ceramic.window.film')}}">Ceramic</a>
                            <a href="{{route('llumar.metallized.window.film')}}">Metallized</a>
                            <a href="{{route('llumar.dyed.window.film')}}">Dyed</a>
                            <a href="https://llumar.com/emea/en/automotive/window-tint/clear/" target="_blank">Clear</a>
                            <a href="https://llumar.com/emea/en/automotive/window-tint/benefits/" target="_blank">Window Film Benefits</a>
                        </div>
                        <div class="col-md-2 column">
                            <h6><a href="{{route('llumar.automotive.PPF')}}">Paint Protection Films</a></h6>
                            <a href="{{route('llumar.valor.PPF')}}">Valor</a>
                            <a href="{{route('llumar.platinum.PPF')}}">Platinum</a>
                            <a href="{{route('llumar.classeco')}}">Classeco</a>
                            <a href="https://llumar.com/emea/en/automotive/paint-protection-film/platinum-matte/" target="_blank">Platinum Matte</a>
                            <a href="https://llumar.com/emea/en/automotive/paint-protection-film/platinum-extra/" target="_blank">Platinum Extra</a>
                            <a href="https://llumar.com/emea/en/automotive/paint-protection-film/gloss-matte/" target="_blank">Gloss & Matte</a>
                            <a href="https://llumar.com/emea/en/automotive/paint-protection-film/select-black/" target="_blank">Select Black</a>
                        </div>
                        <div class="col-md-3 column">
                            <h6><a href="https://llumar.com/emea/en/automotive/window-film-ppf-viewer/" target="_blank">Window Films & PPF Viewer</a></h6>
                        </div>
                    </div>
                    <hr>
                    <!--  -->
                    <div class="row">
                        <div class="col-md-3 column">
                            <div class="header">
                                <h4><a href="{{ route('llumar.window.films.index') }}" target="_blank">Architectural</a></h4>
                            </div>
                            <img src="{{ asset('assets/llumar/images/menuimg2.webp')}}" class="w-100" alt="">
                        </div>

                        <div class="col-md-2 column">
                            <h6><a href="https://llumar.com/emea/en/architectural/residential-window-film/" target="_blank">Residential</a></h6>
                            <a href="https://llumar.com/emea/en/architectural/residential-window-film/solar/" target="_blank">Solar Control</a>
                            <a href="https://llumar.com/emea/en/architectural/residential-window-film/decorative/" target="_blank">Decorative</a>
                            <a href="https://llumar.com/emea/en/architectural/residential-window-film/safety-security/" target="_blank">Safety & Security</a>
                            <a href="https://llumar.com/emea/en/architectural/residential-window-film/benefits/" target="_blank">Window Film Benefits</a>
                        </div>
                        <div class="col-md-2 column">
                            <h6><a href="https://llumar.com/emea/en/architectural/commercial-window-film/" target="_blank">Commercial</a></h6>
                            <a href="{{route('llumar.solar.control.window.film')}}" target="_blank">Solar Control</a>
                            <a href="{{route('llumar.decorative.window.film')}}" target="_blank">Decorative</a>
                            <a href="https://llumar.com/emea/en/architectural/commercial-window-film/safety-security/" target="_blank">Safety & Security</a>
                            <a href="https://llumar.com/emea/en/architectural/commercial-window-film/benefits/" target="_blank">Commercial Benefits</a>
                        </div>
                        <div class="col-md-3 column">
                            <h6><a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/" target="_blank">Resources</a></h6>
                            <a href="https://llumar.com/emea/en/dealers/dealer-resources/window-film-spec-sheets/" target="_blank">Spec Sheets</a>
                            <a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/performance-comparison/" target="_blank">Product Comparison</a>
                            <a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/energy-savings-calculator/" target="_blank">Energy Savings Calaculator</a>
                            <a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/downloads/" target="_blank">Downloads Library</a>
                        </div>
                        <div class="col-md-2 column">
                            <h6><a href="#">Film Viewers</a></h6>
                            <a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/solar-decorative-film-viewer/" target="_blank">Commercial</a>
                            <a href="https://llumar.com/emea/en/architectural/interactive-window-film-tools/viewer-for-home/" target="_blank">Residential</a>
                        </div>
                    </div>
                    <hr>
                    <!--  -->
                    <div class="row">
                        <div class="col-md-3 column">
                            <div class="header">
                                <h4><a href="{{ route('frontend.graphic') }}">Graphics</a></h4>
                            </div>
                            <img src="{{ asset('assets/llumar/images/menuimg3.webp')}}" class="w-100 menu-img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="careers.html">Careers</a>
        <a href="blogs.html">Blogs</a>
        <a href="contact-us.html">Contact Us</a>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="overlay" onclick="closeDrawer()"></div>

</header>