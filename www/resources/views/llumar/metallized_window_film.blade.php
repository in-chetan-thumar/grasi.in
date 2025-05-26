@extends('llumar.layouts.master')

@section('title')
    Metallized window film
@endsection

{{-- SEO  --}}
@section('seo') 

@endsection

@section('content')
    <!-- section hero-image -->
    <section class="hero-section  hero-section-metallized responsive-desktop">
        <div class="container">
            <div class="title-section title-section-metallized">
                <h1>Shiny, Sun-Proof, <br>and Sleek</h1>
                <h6>Metallized Window Films</h6>
            </div>
        </div>
        <!-- <div>
                    <img src="{{ asset('assets/llumar/images/slider-car-new.jpg')}}" class="w-100" alt="">
                </div> -->
    </section>
    <!-- hero section mobile -->
    <section class="hero-section responsive-mobile">
        <div class="title-section">
            <h1>Shiny, Sun-Proof, <br>and Sleek</h1>
            <h6>Metallized Window Films</h6>
        </div>
        <div>
            <img src="{{ asset('assets/llumar/images/metallized_window_film/1.png')}}" class="w-100" alt="">
        </div>
    </section>
    <!-- section hero-image end -->

    <!-- section PPF -->
    <section class="section-ppf bg-dark-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 pe-md-5">
                    <h1>Metallized Window Films</h1>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                    </div>
                    <p> Sleek and stylish, Metallized Window Films reject heat instead of absorbing it, offering advanced
                        sun and heat protection. They are made of tiny metallic particles, ensuring durable,
                        scratch-resistant, and long-lasting protection without compromising on style and aesthetic appeal.
                        Their micro-thin layer and sun-taming benefits make your car look and feel as good as new for years.
                        The Diamond series includes hybrid matrix formula, ultra-performing films, PP 70, and PP 60. The
                        Platinum series, on the other hand, includes products featuring sputter deposition technology like
                        the high-performance Steel 50 and the polyester film, Neutral 50.</p>
                </div>
                <div class="col-md-6">
                    <div class="ppf-image">
                        <img src="{{ asset('assets/llumar/images/metallized_window_film/2.png')}}" class="w-100" alt="">
                        <img src="{{ asset('assets/llumar/images/metallized_window_film/3.png')}}" class="film-img"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose section -->
    <section class="why-choose why-choose-dyed reveal">
        <div class="container">
            <div>
                <label class="title-label-text-size">Why Choose</label>
                <h2>LLumar Metallized Window Films</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <!-- ppf -->
            <div class="row why-choose-points">
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/protection.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/1.png')}}" alt="" height="56px">
                    <h4>UV Protection  </h4>
                    <p>Blocks 99% of harmful UV rays, protecting your skin and preventing interior fading.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/dyed_window_film/icon/2.png')}}" alt="" height="56px">
                    <h4>Heat Reflection </h4>
                    <p>Reflects heat, keeping your car cooler and reducing AC usage for better fuel efficiency.</p>
                    <!-- <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/2.png')}}" alt=""> -->


                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/3.png')}}" alt="" height="56px">
                    <h4>Enhanced Durability</h4>
                    <p>Designed to maintain its original colour and quality despite regular sun exposure.</p>
                </div>
            </div>
            <div class="row mt-2  why-choose-points">
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/4.png')}}" alt="" height="56px">
                    <h4>Aesthetic Shine  </h4>
                    <p>Offers a stylish mirror-like finish that contributes to the aesthetic appearance of your car.</p>
                </div>
                <div class="col-md-4">

                    <!-- <img src="{{ asset('assets/llumar/images/durable.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/5.png')}}" alt="" height="56px">
                    <h4>Glare Reduction  </h4>
                    <p>Reduces glare from the sun and headlights for better visibility and a smoother drive..</p>
                </div>
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/glare.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/6.png')}}" alt="" height="56px">
                    <h4>Heat Reduction </h4>
                    <p>Offers protection against heat, keeping the interiors cool and comfortable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- features -->
    <section class="features-section features-section-metallized reveal">
        <div class="container">
            <div class="title-section-alignment">
                <label class="title-label-text-size">Features of</label>
                <h2>LLumar Metallized Window Films</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 ps-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-one">
                                <h4>IR & UV Protection</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-two">
                                <h4>Advanced Heat Rejection</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-three">
                                <h4>High Clarity & Visibility </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-four">
                                <h4>Scratch-Resistant and Durable</h4>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-five">
                                <h4>Easy Installation</h4>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-six">
                                <h4>Long-Term Performance </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <!-- vehicles -->
    {{-- <section class="vehicle-section reveal">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-3">
                    <div>
                        <h4>Full Vehicle Coverage</h4>
                        <img src="{{ asset('assets/llumar/images/full-car.webp')}}" alt="">
                        <p>Covers every painted surface of the vehicle</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <h4>Partial Plus Protection</h4>
            <div class="vehicle-container mb-4">
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-full-bonnet.webp')}}" alt="">
                    <p>FullBonnet</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-cups.webp')}}" alt="">
                    <p>Door Cups</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-side-mirrors.webp')}}" alt="">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-rear-front-bumper.webp')}}" alt="">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-edge.webp')}}" alt="">
                    <p>Door Edges Guards</p>
                </div>
            </div>
            <!--  -->
            <h4>Basic Partial Protection</h4>
            <div class="vehicle-container">
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-cups.webp')}}" alt="">
                    <p>Door Cups</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-side-mirrors.webp')}}" alt="">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-rear-front-bumper.webp')}}" alt="">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-edge.webp')}}" alt="">
                    <p>Door Edges Guards</p>
                </div>
            </div>
            <!--  -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="note-container">
                        <h5>WE CUSTOMIZE OUR OFFERINGS BASED ON CUSTOMER'S REQUIREMENTS</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- gallery -->

    <section class="gallery-section bg-dark-gray">
        <div class="container reveal">
            <div>
                <h2>Metallized Window Films Gallery</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row mt-4 d-flex g-3">
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/1.png') }}" class="img-fluid gallery-img"
                        alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/2.png') }}" class="img-fluid gallery-img"
                        alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/3.png') }}" class="img-fluid gallery-img"
                        alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/4.png') }}" class="img-fluid gallery-img"
                        alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/5.png') }}" class="img-fluid gallery-img"
                        alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/6.png') }}" class="img-fluid gallery-img"
                        alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/7.png') }}" class="img-fluid gallery-img"
                        alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/8.png') }}" class="img-fluid gallery-img"
                        alt="Metallized window films">
                </div>
                <!-- Continue other images similarly -->
            </div>
        </div>
    </section>
    <!-- Image Modal -->
    <div id="imageModal" class="image-modal">
        <span class="close-modal">&times;</span>
        <button class="nav-btn prev-btn">&lt;</button>
        <div class="square-image-container">
            <img class="modal-content" id="expandedImg">
        </div>
        <button class="nav-btn next-btn">&gt;</button>
    </div>

    <!-- protection -->
    <section class="protection-section">
        <div class="container">
            <div class="row align-items-center reveal">
                <div class="col-md-4 title-section-alignment">
                    <div>
                        <label class="title-label-text-size">Clear & Complete</label>
                        <h2>Protection Against</h2>
                        <div class="title-divider">
                            <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6 com-md-4">
                            <!-- <img src="{{ asset('assets/llumar/images/weather.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/7.png/')}}" alt="">
                            <p class="mt-3">Harmful <br>UV Rays</p>
                        </div>
                        <div class="col-6 com-md-4">
                            <!-- <img src="{{ asset('assets/llumar/images/rock-chips.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/8.png')}}" alt="">
                            <p class="mt-3">Distracting <br>Glare </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 com-md-4">
                            <!-- <img src="{{ asset('assets/llumar/images/paint-fading-staining.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/9.png')}}" alt="">
                            <p class="mt-3">Excessive <br> Heat </p>
                        </div>
                        <div class="col-6 com-md-4">
                            <!-- <img src="{{ asset('assets/llumar/images/bird-dropping.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/10.png')}}" alt="">
                            <p class="mt-3">Interior <br>Fading </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8    ">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/7.png')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- related products -->
    {{-- <section class="products-section bg-dark-gray">
        <div class="container reveal">
            <div class="text-center">
                <h2>Related Products</h2>
                <div class="title-divider mb-0">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="button-view">
                <a href="#" class="btn btn-outline-dark btn-llumar-second">VIEW ALL</a>
            </div>
            <div class="mt-4">
                <div class="sliderproducts">
                    <div>
                        <a href="{{route('llumar.platinumPPF')}}">
                            <img src="{{ asset('assets/llumar/images/about-car.webp')}}" class="w-100" alt="">
                            <div class="title-product">
                                <label>Platinum paint protection film </label><br>
                                {{-- <label>A clear PPF that enhances your car’s aesthetics while protecting against
                                    scratches, road debris, and environmental damage. --}}
                                    {{-- </label>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('llumar.valorPPF')}}">
                            <img src="{{ asset('assets/llumar/images/about-car.webp')}}" class="w-100" alt="">
                            <div class="title-product">
                                <label>Valor paint protection film </label><br>
                                {{-- <label>A clear PPF that enhances your car’s aesthetics while protecting against
                                    scratches, road debris, and environmental damage. --}}
                                    {{-- </label>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- section form -->
    <section class="form-section">
        <div class="container reveal">
            <div class="row bg-dark-gray rounded-5 p-3">
                <div class="col-md-4 ps-0">
                    <img src="{{ asset('assets/llumar/images/inquiry-car.webp')}}" class="w-100" alt="">
                </div>
                <div class="col-md-8 form-section-alignment">
                    <div class="mb-3">
                        <h2 class="mb-0">Start Your LLumar Journey</h2>
                        <label class="title-label-text-size">Fill Out the Form Below!</label>
                    </div>
                    {!! Form::open([
                        'url' => route('llumar.send.message'),
                        'method' => 'POST',
                        'id' => 'metallized-window-film',
                        'class' => 'metallized-window-film',
                    ]) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                {!! Form::text('name', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Name',
                                    // 'id' => 'floatingInput',
                                ]) !!}
                                {{-- <input type="text" class="form-control" id="floatingInput" placeholder="Name"> --}}
                                    {!! Form::hidden('subject', 'Metallized window film') !!}
                               
                                <label for="floatingInput">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                {!! Form::email('email', null, [
                                    'class' => 'form-control  ',
                                    'placeholder' => 'Email',
                                    // 'floatingInput'
                                ]) !!}
                                {{-- <input type="email" class="form-control" id="floatingInput" placeholder="Email"> --}}
                                <label for="floatingInput">Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                {!! Form::tel('contact_no', null, [
                                    'class' => 'form-control ',
                                    'placeholder' => 'Contact number',
                                    // 'id' => 'floatingInput',
                                ]) !!}
                                {{-- <input type="tel" class="form-control" id="floatingInput" placeholder="Contact Number">
                                --}}
                                <label for="floatingInput">Contact number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                {!! Form::select('service', [
                                        '' => 'Choose your service',
                                        '1' => 'Paint Protection Film',
                                        '2' => 'Automotive Window Film',
                                        '3' => 'Architectural Window Film',
                                    ], null, [
                                        'class' => 'form-select custom-select ',
                                        'id' => 'floatingSelect',
                                        'aria-label' => 'Floating label select example',
                                    ]) !!}
                                <label for="floatingSelect">Choose your service</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        {!! Form::textarea('additional_info', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Additional info',
                                            'id' => 'floatingTextarea',
                                            'style' => 'height: 100px;', // Optional: control initial height
                                        ]) !!}
                                        <label for="floatingTextarea">Additional info</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-3">
                            {!! Form::submit('Send Message', [
                                'class' => 'btn btn-llumar',
                                'name' => 'sendllumar',
                                'id' => 'btn-submit'

                            ]) !!}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>

    <!-- section faq -->
    <section class="section-faq bg-dark-gray">
        <div class="container">
            <div class="text-center  reveal">
                <label class="title-label-text-size">Frequently Asked Questions</label>
                <h2> About Metallized Window Film</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     How long does LLumar metallized window film last?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A LLumar Metallized Films can last 5 years or more if taken care of.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Does metallic window film make my car windows too shiny?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, a Metallized Window Film has a subtle, sleek sheen without excessive reflectivity.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I roll down my windows immediately after installation?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, it's best to wait 48-72 hours for the film to fully adhere before rolling down windows.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                     Where can I find an authorized LLumar dealer for metallized window film installation?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Click on the ‘Locate LLumar Dealer’ option on our website to find the nearest expert installer.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How much does it cost to install LLumar metallized window film?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Pricing depends on your vehicle type and coverage. Fill out our contact form for a quote.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Will the metallized window film enhance my car’s aesthetics?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, the subtle sheen of the film is also designed to lend a sleek appearance to your car. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top">
        <i class="bi bi-arrow-up"></i>
    </button>
@endsection
@section('js')
    {!! JsValidator::formRequest('App\Http\Requests\SendMessageRequest', '#metallized-window-film') !!}
    <script src="{{ asset('assets/llumar/js/image_modal.js')}}"></script>
@endsection