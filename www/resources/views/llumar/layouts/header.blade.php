<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html" >
                <img src="{{ asset('assets/llumar/images/llamar-logo.png')}}" alt="Logo" class="llumar-logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list text-white fs-1"></i>
                <!-- <span class="navbar-toggler-icon"></span> -->
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        {{-- <a class="nav-link" aria-current="page" href="{{ route('frontend.our_story') }}">Our Story</a> --}}
                        <a class="nav-link" aria-current="page" href="#">Our Story</a>
                        
                    </li>
                    <!--li class="nav-item">
                        <a class="nav-link" href="our-products.html">Our Solutions</a>
                    </li-->
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="https://www.linkedin.com/company/gras-%E2%80%93i-intelligent-surface-solutions/" >Careers</a> --}}
                        <a class="nav-link" href="#" >Careers</a>     
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="https://grasi.in/blog/" target="_blank">Blogs</a> --}}
                        <a class="nav-link" href="#" target="">Blogs</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ route('contact.index') }}">Contact</a> --}}
                        <a class="nav-link" href="#">Contact</a>

                    </li>
                </ul>
            </div>

        </div>
    </nav>

</header>