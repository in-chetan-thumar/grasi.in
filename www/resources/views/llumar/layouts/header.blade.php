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
                                        <h4><a href="#">Automotive</a></h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 column">
                                            <h6><a href="#">Window Films</a></h6>
                                            <a href="#">Ceramic</a>
                                            <a href="#">Metallized</a>
                                            <a href="#">Dyed</a>
                                            <a href="#">Clear</a>
                                            <a href="#">Window Film Benefits</a>
                                        </div>
                                        <div class="col-md-3 column">
                                            <h6><a href="#">Paint Protection Films</a></h6>
                                            <a href="#">Valor</a>
                                            <a href="#">Platinum</a>
                                            <a href="#">Classeco</a>
                                            <a href="#">Platinum Matte</a>
                                            <a href="#">Platinum Extra</a>
                                            <a href="#">Gloss & Matte</a>
                                            <a href="#">Select Black</a>
                                        </div>
                                        <div class="col-md-3 column">
                                            <h6><a href="#">Window Films & PPF Viewer</a></h6>
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
                                        <h4><a href="#">Architectural</a></h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2 column">
                                            <h6><a href="#">Residential</a></h6>
                                            <a href="#">Solar Control</a>
                                            <a href="#">Decorative</a>
                                            <a href="#">Safety & Security</a>
                                            <a href="#">Window Film Benefits</a>
                                        </div>
                                        <div class="col-md-2 column">
                                            <h6><a href="#">Commercial</a></h6>
                                            <a href="#">Solar Control</a>
                                            <a href="#">Decorative</a>
                                            <a href="#">Safety & Security</a>
                                            <a href="#">Window Film Benefits</a>
                                        </div>
                                        <div class="col-md-2 column">
                                            <h6><a href="#">Resources</a></h6>
                                            <a href="#">Spec Sheets</a>
                                            <a href="#">Product Comparison</a>
                                            <a href="#">Energy Savings Calaculator</a>
                                            <a href="#">Downloads Library</a>
                                        </div>
                                        <div class="col-md-2 column">
                                            <h6><a href="#">Film Reviews</a></h6>
                                            <a href="#">Commercial</a>
                                            <a href="#">Residential</a>
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
                                        <h4><a href="#">Graphics</a></h4>
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
                                <h4><a href="#">Automotive</a></h4>
                            </div>
                            <img src="{{ asset('assets/llumar/images/menuimg1.webp')}}" class="w-100" alt="">
                        </div>

                        <div class="col-md-2 column">
                            <h6><a href="#">Window Films</a></h6>
                            <a href="#">Ceramic</a>
                            <a href="#">Metallized</a>
                            <a href="#">Dyed</a>
                            <a href="#">Clear</a>
                            <a href="#">Window Film Benefits</a>
                        </div>
                        <div class="col-md-2 column">
                            <h6><a href="#">Paint Protection Films</a></h6>
                            <a href="#">Valor</a>
                            <a href="#">Platinum</a>
                            <a href="#">Classeco</a>
                            <a href="#">Platinum Matte</a>
                            <a href="#">Platinum Extra</a>
                            <a href="#">Gloss & Matte</a>
                            <a href="#">Select Black</a>
                        </div>
                        <div class="col-md-3 column">
                            <h6><a href="#">Window Films & PPF Viewer</a></h6>
                        </div>
                    </div>
                    <hr>
                    <!--  -->
                    <div class="row">
                        <div class="col-md-3 column">
                            <div class="header">
                                <h4><a href="#">Architectural</a></h4>
                            </div>
                            <img src="{{ asset('assets/llumar/images/menuimg2.webp')}}" class="w-100" alt="">
                        </div>

                        <div class="col-md-2 column">
                            <h6><a href="#">Residential</a></h6>
                            <a href="#">Solar Control</a>
                            <a href="#">Decorative</a>
                            <a href="#">Safety & Security</a>
                            <a href="#">Window Film Benefits</a>
                        </div>
                        <div class="col-md-2 column">
                            <h6><a href="#">Commercial</a></h6>
                            <a href="#">Solar Control</a>
                            <a href="#">Decorative</a>
                            <a href="#">Safety & Security</a>
                            <a href="#">Window Film Benefits</a>
                        </div>
                        <div class="col-md-3 column">
                            <h6><a href="#">Resources</a></h6>
                            <a href="#">Spec Sheets</a>
                            <a href="#">Product Comparison</a>
                            <a href="#">Energy Savings Calaculator</a>
                            <a href="#">Downloads Library</a>
                        </div>
                        <div class="col-md-2 column">
                            <h6><a href="#">Film Reviews</a></h6>
                            <a href="#">Commercial</a>
                            <a href="#">Residential</a>
                        </div>
                    </div>
                    <hr>
                    <!--  -->
                    <div class="row">
                        <div class="col-md-3 column">
                            <div class="header">
                                <h4><a href="#">Graphics</a></h4>
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