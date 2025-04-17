@extends('llumar.layouts.master')

@section('title')
    1. Ceramic window film
@endsection
@section('content')
    <!-- section hero-image -->

    <section class="hero-section hero-section-ceramic responsive-desktop">
        <div class="title-section">
            <h1>Style, Protection, <br> and Comfort in One</h1>
            <h6>Ceramic Window Films</h6>
        </div>
        <!-- <div>
                            <img src="{{ asset('assets/llumar/images/slider-car-new.jpg')}}" class="w-100" alt="">
                        </div> -->
    </section>
    <!-- hero section mobile -->
    <section class="hero-section responsive-mobile">
        <div class="title-section">
            <h1>Style, Protection, <br> and Comfort in One</h1>
            <h6>Ceramic Window Films</h6>
        </div>
        <div>
            <img src="{{ asset('assets/llumar/images/ceramic_window_film/Group 3.png')}}" class="w-100" alt="">
        </div>
    </section>
    <!-- section hero-image end -->

    <!-- section PPF -->
    <section class="section-ppf bg-dark-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Ceramic Window Films</h1>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                    </div>
                    <p> Give your car the best protection against heat, glare, and UV rays without compromising style.
                        Ceramic Window Films, made of advanced nano-ceramic particles, lend top-notch performance and
                        functionalities with a sleek and polished look. Their advanced cooling technology and ultra-thin
                        material promise a more comfortable and cool ride with a stylish appearance. The Avantegarde Series
                        of Ceramic Window Film has high-tech variants like Air 80 and Air 90 that offer optimum clarity and
                        high heat rejection. It also includes ultra-high-tech variants, Stratos 70 and Stratos 50 series of
                        films that blend the benefits of both dyed and metalized film. .</p>
                </div>
                <div class="col-md-6">
                    <div class="ppf-image">
                        <img src="{{ asset('assets/llumar/images/ceramic_window_film/2.png')}}" class="w-100" alt="">
                        <img src="{{ asset('assets/llumar/images/ceramic_window_film/3.png')}}" class="film-img"
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
                <h2>LLumar Ceramic Window Film</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <!-- ppf -->
            <div class="row why-choose-points">
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/protection.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/ceramic_window_film/icons/1.png')}}" alt="">
                    <h4>Advanced Heat Rejection </h4>
                    <p> Helps your car cool down faster with its IR-blocking nano-ceramic particles.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/ceramic_window_film    /icons/2.png')}}" alt="">
                    <h4>UV Protection</h4>
                    <p>Blocks 99% of UV & IR rays, protecting interiors from fading and preventing skin damage.</p>
                    <!-- <img src="{{ asset('assets/llumar/images/ceramic_window_film/icons/2.png')}}" alt=""> -->


                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/ceramic_window_film/icons/3.png')}}" alt="">
                    <h4>Glare Reduction: </h4>
                    <p>Decreases harsh glare for better visibility and a safer driving experience.</p>
                </div>
            </div>
            <div class="row mt-2 mt-3 justify-content-center text-center why-choose-points">
                <div class="col-md-4 ">
                    <img src="{{ asset('assets/llumar/images/ceramic_window_film/icons/4.png')}}" alt="">
                    <h4>Non-Metallic Composition </h4>
                    <p>Allows smooth, seamless GPS, mobile, and radio connectivity.</p>
                </div>
                <div class="col-md-4  ">

                    <!-- <img src="{{ asset('assets/llumar/images/durable.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/ceramic_window_film/icons/5.png')}}" alt="">
                    <h4>Clear View</h4>
                    <p>Optimum clarity with superior heat rejection, allowing natural light in without blocking the view. </p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- features -->
    <section class="features-section features-section-ceramic reveal">
        <div class="container">
            <div class="title-section-alignment">
                <label class="title-label-text-size">Features of</label>
                <h2>LLumar Ceramic Window Film</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 ps-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-one">
                                <h4>Superior Heat Rejection</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-two">
                                <h4>Enhanced Visibility and Clarity</h4>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-three">
                                <h4>Maximum UV Protection </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-four">
                                <h4>Fade-Resistant and Durable</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-five">
                                <h4>Easy Installation </h4>
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

    {{-- <section class="gallery-section bg-dark-gray">
        <div class="container reveal">
            <div>
                <h2>Dyed Window Films Gallary</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row mt-4 d-flex g-3">
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/automotive_ppf/1.png') }}" class="img-fluid gallery-img"
                        alt="Automotive PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/automotive_ppf/2.png') }}" class="img-fluid gallery-img"
                        alt="Automotive PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/automotive_ppf/3.png') }}" class="img-fluid gallery-img"
                        alt="Automotive PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/automotive_ppf/4.png') }}" class="img-fluid gallery-img"
                        alt="Automotive PPF">
                </div>
                <!-- Continue other images similarly -->
            </div>
            <div class="row mt-4 d-flex gap-3">
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/automotive_ppf/5.png') }}" class="w-100 gallery-img"
                        alt="Automotive PPF">
                </div>
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
    </div> --}}

    <!-- protection -->
    <section class="protection-section">
        <div class="container">
            <div class="row align-items-center reveal">
                <div class="col-md-6 title-section-alignment">
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
                            <img src="{{ asset('assets/llumar/images/ceramic_window_film/icons/1.png/')}}" alt="">
                            <p class="mt-3">Harmful <br>UV Rays</p>
                        </div>
                        <div class="col-6 com-md-4">
                            <!-- <img src="{{ asset('assets/llumar/images/rock-chips.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/ceramic_window_film/icons/7.png')}}" alt="">
                            <p class="mt-3">Excessive <br> Heat </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 com-md-4">
                            <!-- <img src="{{ asset('assets/llumar/images/paint-fading-staining.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/ceramic_window_film/icons/8.png')}}" alt="">
                            <p class="mt-3">Interior<br> Fading</p>
                        </div>
                        <div class="col-6 com-md-4">
                            <!-- <img src="{{ asset('assets/llumar/images/bird-dropping.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/ceramic_window_film/icons/3.png')}}" alt="">
                            <p class="mt-3">Distracting <br> Glare  </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/llumar/images/ceramic_window_film/6.png')}}" class="w-100" alt="">
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
                        'id' => 'ceramic-window-film',
                        'class' => 'ceramic-window-film',
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
                                    ])
                                !!}
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
                <h2> About Ceramic Window Film</h2>
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
                                    How long does LLumar Ceramic Window Film last?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    With proper maintenance, LLumar Ceramic Film can last up to 5 years or more.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Does ceramic window film darken my car windows?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    LLumar Ceramic Film promises high clarity with strong protection against heat and UV rays. You can also choose a film in a range of colours.
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
                                    It's best to wait at least 48-72 hours to allow the film to fully adhere before rolling down windows..
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Where can I find an authorized LLumar dealer for dyed window film installation?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Click on our website's ‘Locate LLumar Dealer’ option to find the nearest dealer.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How much does it cost to install LLumar Ceramic Window film?
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
                                     Will LLumar Ceramic Window film interfere with my car’s electronics?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, LLumar Ceramic Film is non-metallic and will not affect GPS, mobile, or radio signals.
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
    {!! JsValidator::formRequest('App\Http\Requests\SendMessageRequest', '#ceramic-window-film') !!}
    <script src="{{ asset('assets/llumar/js/image_modal.js')}}"></script>
@endsection