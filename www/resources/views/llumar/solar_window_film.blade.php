@extends('llumar.layouts.master')

@section('title')
    Solar window film
@endsection

{{-- SEO --}}
@section('seo')

@endsection

@section('content')
    <!-- section hero-image -->
    <section class="hero-section hero-section-solar-window-film  responsive-desktop">
        <div class="title-section title-section-dyed-window-film">

        </div>
        <!-- <div>
                            <img src="{{ asset('assets/llumar/images/slider-car-new.jpg')}}" class="w-100" alt="">
                        </div> -->
    </section>
    <!-- hero section mobile -->
    <section class=".hero-section hero-section-solar-window-film  responsive-mobile">
        <div class="title-section">

        </div>
        <div>
            <img src="{{ asset('assets/llumar/images/solar_window_film/LLumar_Solar-Window-Films_banner.jpg')}}"
                class="w-100" alt="">
        </div>
    </section>
    <!-- section hero-image end -->

   <!-- section PPF -->
<section class="section-ppf bg-dark-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 p-3 p-md-0 pe-md-5">
                <h1>LLumar <br> Solar Window Films</h1>
                <div class="title-divider mb-3">
                    <img src="{{ asset('assets/llumar/images/dash.svg') }}" alt="">
                </div>
                <p>
                    An effective and stylish way to improve energy efficiency, comfort, and aesthetics in both homes and
                    commercial buildings. Solar Window Films block excessive solar heat, reduce harsh glare, and filter
                    out harmful UV rays while allowing natural light in. These window films step in as a practical and
                    stylish solution to help reduce energy costs, protect interiors from fading, and improve comfort
                    indoors. They also enhance privacy and offer stylish protection for your windows to match all
                    preferences and architectural needs.
                </p>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-5">
                <div class="ppf-image  position-relative">
                    <img src="{{ asset('assets/llumar/images/solar_window_film/LLumar_Solar-Window-Films_banner_2.jpg') }}"
                         class="w-100 img-fluid" alt="">
                    <img src="{{ asset('assets/llumar/images/solar_window_film/LLumar_Solar-Window-Films_banner_1.jpg') }}"
                         class="film-img img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- why choose section -->
    <section class="benefits benefits-solar reveal">
        <div class="container">
            <div>
                <label class="title-label-text-size mt-4">Benefits of </label>
                <h2>Solar Window Film</h2>
                <div class="title-divider">
                    {{-- <img
                        src="{{ asset('assets/llumar/images/decorative_window_film/LLumar_Decorative-Window-Film_8.jpg ')}}"
                        alt=""> --}}
                </div>
            </div>
            <!-- ppf -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/solar_window_film/Energy-Efficiency.png')}}" alt=""
                        height="56px">
                    <h4>Energy Efficiency</h4>
                    <p> Relieve heating and cooling systems, to help conserve energy and shrink bills.  

                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/solar_window_film/Consistent-Comfort.png')}}" alt=""
                        height="56px">
                    <h4>Consistent Comfort</h4>
                    <p>Temper the sun’s harsh heat and glare to make commercial spaces and homes more pleasant and usable.  
                    </p>
                    <!-- <img src="{{ asset('assets/llumar/images/dyed_window_film/icon/2.png/')}}" alt=""> -->

                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/solar_window_film/UV-Protection.png')}}" alt="" height="56px">
                    <h4>UV Protection</h4>
                    <p>Block more than 99% of the UV rays that contribute to fading of interiors, artwork, and furnishings.

                    </p>
                </div>
            </div>
            <div class="row mt-2  why-choose-points">
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/solar_window_film/Aesthetic-Appeal.png')}}" alt=""
                        height="56px">
                    <h4>Aesthetic Appeal</h4>
                    <p>Complement any architecture style, with films from barely visible to neutral to reflective.
                        .
                    </p>
                </div>
                <div class="col-md-4">

                    <!-- <img src="{{ asset('assets/llumar/images/durable.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/solar_window_film/More-Privacy.png')}}" alt="" height="56px">
                    <h4>More Privacy</h4>
                    <p> Choose reflective sun control film in a broad range of colors to disguise mismatched blinds,
                        curtains, or clutter.

                    </p>
                </div>
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/glare.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/solar_window_film/Impressive-ROI.png')}}" alt="" height="56px">
                    <h4>Impressive ROI</h4>
                    <p>Expect a reliable payback on solar film installation.

                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- features -->

    <section class="feature-section-decorative-solar bg-dark-gray py-5">
        <div class="container reveal">
            <div class="row  align-items-center">
                <label class="title-label-text-size">Types of </label>
                <h2>Solar Window Film</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
                <div class="col-md-6 mt-3 feature-one feature-section-container text-white">

                    <h2 class="feature-section-heading ">Reflective Films</h2>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                    </div>
                    <p class="feature-section-desc">
                        High-performance solar control films that offer a mirrored look, improving occupant comfort.

                    </p>
                    <h5 class="text-white font-weight-bold mt-4">Benefits</h5>
                    <ul class="feature-section-benefits">
                        <li>Maximum heat and glare reduction
                        </li>
                        <li>High daytime privacy
                        </li>
                        <li>High energy savings
                        </li>
                        <li>Contemporary exterior appearance
                        </li>
                    </ul>
                </div>

                <!-- Right: Image -->
                <div class="col-md-6">
                    <img src="{{ asset('assets/llumar/images/solar_window_film/LLumar_Solar-Window-Films_banner_4.jpg')}}"
                        class="img-fluid rounded shadow" alt="Matte Film Example">
                </div>
            </div>
            <!-- Section 2: Pattern Film -->
            <div class="row align-items-center flex-row-reverse mb-5">
                <div class="col-md-6 mt-5 feature-two feature-section-container text-white">

                    <h2 class="feature-section-heading ">Dual-Reflective Films</h2>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                    </div>
                    <p class="feature-section-desc">
                        An optically clear sputtered film with a reflective exterior and a neutral interior with advanced
                        colour-stable technology.

                    </p>
                    <h5 class="text-white font-weight-bold mt-4">Benefits</h5>
                    <ul class="feature-section-benefits">
                        <li>Superior glare reduction
                        </li>
                        <li>Improved energy savings
                        </li>
                        <li>Enhanced daytime privacy
                        </li>
                        <li>Maintains visibility from the inside out
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/llumar/images/solar_window_film/LLumar_Solar-Window-Films_banner_5.jpg') }}"
                        class="img-fluid rounded shadow" alt="Pattern Film">
                </div>
            </div>

            <!-- Section 3: Graphic Art Film -->
            <div class="row  align-items-center">
                <div class="col-md-6 feature-three feature-section-container matte-container text-white">

                    <h2 class="feature-section-heading">Spectrally-Selective Films</h2>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                    </div>
                    <p class="feature-section-desc">
                        Advanced films that offer exceptional heat protection with a virtually clear surface.


                    </p>
                    <h5 class="text-white font-weight-bold mt-4">Benefits</h5>
                    <ul class="feature-section-benefits">
                        <li>High clarity and low reflectivity
                        </li>
                        <li>Preserves natural light and views

                        </li>
                        <li>Excellent UV and heat rejection

                        </li>
                        <li>Perfect for storefronts or residential use where appearance matters
                        </li>
                    </ul>
                </div>

                <!-- Right: Image -->
                <div class="col-md-6">
                    <img src="{{ asset('assets/llumar/images/solar_window_film/LLumar_Solar-Window-Films_banner_6.jpg')}}"
                        class="img-fluid rounded shadow" alt="Matte Film Example">
                </div>
            </div>

            <!-- Section 4: Coloured Film -->
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-6 mt-5 feature-four  feature-section-container text-white">

                    <h2 class="feature-section-heading ">Safety Clear Helios Series</h2>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                    </div>
                    <p class="feature-section-desc">
                        A premium clear window film installed from the outside with exceptional exterior heat rejection.

                    </p>
                    <h5 class="text-white font-weight-bold mt-4">Benefits</h5>
                    <ul class="feature-section-benefits">
                        <li>Excellent solar performance
                        </li>
                        <li>Elegant appearance
                        </li>
                        <li>Reduces interior fading
                        </li>
                        <li>Blends well with upscale interiors and exteriors
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/llumar/images/solar_window_film/LLumar_Solar-Window-Films_banner_7.jpg') }}"
                        class="img-fluid rounded shadow" alt="Coloured Film">
                </div>
            </div>


        </div>
    </section>

    <!-- protection -->
    {{-- <section class="protection-section">
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
                            <img src="{{ asset('assets/llumar/images/dyed_window_film/icon/7.png/')}}" alt="">
                            <p class="mt-3">Harmful <br>UV Rays</p>
                        </div>
                        <div class="col-6 com-md-4">
                            <!-- <img src="{{ asset('assets/llumar/images/rock-chips.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/dyed_window_film/icon/8.png')}}" alt="">
                            <p class="mt-3">Distracting <br>Glare </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 com-md-4">
                            <!-- <img src="{{ asset('assets/llumar/images/paint-fading-staining.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/dyed_window_film/icon/9.png')}}" alt="">
                            <p class="mt-3">Excessive <br> Heat </p>
                        </div>
                        <div class="col-6 com-md-4">
                            <!-- <img src="{{ asset('assets/llumar/images/bird-dropping.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/dyed_window_film/icon/10.png')}}" alt="">
                            <p class="mt-3">Interior <br>Fading </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('assets/llumar/images/dyed_window_film/web page 6.png')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section> --}}

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
                    <img
                        src="{{ asset('assets/llumar/images/solar_window_film/form_image.png')}}"
                        class="w-100" alt=""> 
                </div>
                <div class="col-md-8 form-section-alignment">
                    <div class="mb-3">
                        <h2 class="mb-0">Start Your LLumar Journey</h2>
                        <label class="title-label-text-size">Fill Out the Form Below!</label>
                    </div>
                    {!! Form::open([
        'url' => route('llumar.send.message'),
        'method' => 'POST',
        'id' => 'dyed-window-film',
        'class' => 'dyed-window-film',
    ]) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                {!! Form::text('name', null, [
        'class' => 'form-control',
        'placeholder' => 'Name',
        // 'id' => 'floatingInput',
    ]) !!}
                                {!! Form::hidden('subject', 'Dyed window film') !!}

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
                <h2> About LLumar Solar Window Film
                </h2>
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
                                    What are solar window films?


                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    They are transparent coatings applied to window surfaces in residential and commercial
                                    spaces to reduce heat, glare, and UV rays from the sun.


                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do solar window films work?


                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    They use advanced technology to block UV rays, reduce heat, and limit glare by
                                    reflecting or absorbing the sun’s energy, all while allowing natural light in.


                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can solar window films help with energy savings?


                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, solar window films can help reduce the need for air conditioning by blocking excess
                                    solar heat, in turn, regulating indoor temperatures and reducing energy consumption.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Are solar window films easy to install?


                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    It is recommended to hire a professional for proper installation.



                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Will solar window films affect the appearance of my windows?



                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    The aesthetic of your film may vary depending on the type of film you choose.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Are solar window films durable?


                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    High-quality LLumar solar window films are highly durable and can last for many years.
                                    They are resistant to cracking, fading, and peeling, making them a long-lasting
                                    investment for your home or business.


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSix">
                                    Can solar window films be removed?



                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, solar window films can be removed if necessary, and it’s best to hire a
                                    professional for the same.



                                </div>
                            </div>
                        </div>
                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseSix">
                                    Will solar window films affect my view?



                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Solar window films are designed to reduce glare and heat without affecting your view.
                                    Some films may have a slight tint, but they still allow clear visibility.



                                </div>
                            </div>
                        </div>
                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseSix">
                                    How much does LLumar Solar Window Film cost?


                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Pricing depends on the type of film and coverage area. Fill out our contact form for a
                                    quote.

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
    {!! JsValidator::formRequest('App\Http\Requests\SendMessageRequest', '#dyed-window-film') !!}
    <script src="{{ asset('assets/llumar/js/image_modal.js')}}"></script>
@endsection