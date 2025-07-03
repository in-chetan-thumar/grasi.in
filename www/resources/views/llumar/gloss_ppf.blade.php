@extends('llumar.layouts.master')

@section('title')
    Gloss paint protection film
@endsection

@section('content')
    <!-- section hero-image -->
    <section class="hero-section  hero-section-gloss responsive-desktop">
        <div class="container">
            <div class="title-section title-section-gloss-ppf">
                <h1>sleek gloss, <br>and unmatched<br>protection </h1>
                <h6>with gloss paint protection film</h6>
            </div>
        </div>
        <!-- <div>
            <img src="{{ asset('assets/llumar/images/slider-car-new.jpg')}}" class="w-100" alt="">
        </div> -->
    </section>
    <!-- hero section mobile -->
    <section class="hero-section hero-section-gloss-ppf  responsive-mobile">
        <div class="title-section">
            <h1>sleek gloss, <br>and unmatched<br>protection </h1>
            <h6>with gloss paint protection film</h6>
        </div>
        <div>
            <img src="{{ asset('assets/llumar/images/gloss_ppf/LLumar_Gloss-PPF_Banner.jpg')}}" class="w-100" alt="">
        </div>
    </section>
    <!-- section hero-image end -->
    <!-- section PPF -->
    <section class="section-ppf  bg-dark-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <h1>LLumar<br> Gloss Paint Protection Film</h1>
                    <div class="title-divider">
                        <img src="{{ asset(path: 'assets/llumar/images/dash.svg')}}" alt="">
                    </div>
                    <p> Your vehicle’s glossy finish deserves the best defense against everyday wear and tear. The Gloss
                        Paint Protection Film, made in the US and Germany, steps to the forefront with its sleek, showroom
                        finish and self-healing surface. The paint-protecting film enhances your car’s natural shine while
                        safeguarding it from scratches, chips, and environmental damage. Designed to keep your paint looking
                        newer for longer, this protective film also features a crystal-clear gloss and shine.
                    </p>
                </div>
                <div class="col-md-6 ">
                    <div class="ppf-image ">
                        <img src="{{ asset('assets/llumar/images/gloss_ppf/LLumar_Gloss-PPF_2.jpg')}}" class="w-100" alt="">
                        <img src="{{ asset('assets/llumar/images/gloss_ppf/LLumar_Gloss-PPF_1.jpg')}}" class="film-img"
                         class="w-100 img-fluid"   alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose section -->
    <section class="why-choose why-choose-gloss-ppf reveal">
        <div class="container">
            <div>
                <label class="title-label-text-size">Why Choose</label>
                <h2> LLumar Gloss Paint Protection Film</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <!-- ppf -->
            <div class="row why-choose-points">
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/protection.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/gloss_ppf/Self-Healing.png')}}" alt="" height="56px">
                    <h4>Self-Healing Technology </h4>
                    <p> Surface scratches disappear when exposed to the sun or warm water.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/gloss_ppf/Stain-&-Chemical-Resistant.png')}}" alt=""
                        height="56px">
                    <h4>Stain & Chemical Resistant</h4>
                    <p> Shields your car against bird droppings, tree sap, acid rain, and stains.</p>
                    <!-- <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/2.png')}}" alt=""> -->


                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/gloss_ppf/Durable.png')}}" alt="" height="56px">
                    <h4>Durable Paint Protection</h4>
                    <p> Protects your car’s exterior from rock chips, road debris, and everyday scuffs.</p>
                </div>
            </div>
            <div class="row mt-2 justify-content-center  why-choose-points">
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/gloss_ppf/Fade-Resistant.png')}}" alt="" height="56px">
                    <h4>Discolouration & Fade-Resistant </h4>
                    <p>Promises long-lasting clarity and shine without discolouration over time.</p>
                </div>
                <div class="col-md-5">
                    <!-- <img src="{{ asset('assets/llumar/images/durable.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/gloss_ppf/Warranty.png')}}" alt="" height="56px">
                    <h4>Manufacturer’s Limited 5-Year Warranty</h4>
                    <p>A guaranteed confidence in the PPF’s <br>long-term performance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- features -->
    <section class="features-section features-section-gloss-ppf reveal">
        <div class="container">
            <div class="title-section-alignment">
                <label class="title-label-text-size">Features of</label>
                <h2>LLumar Gloss Paint Protection Film</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 ps-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-one">
                                <h4>Self-Healing Technology </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-two">
                                <h4>Invisible Protection </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-three">
                                <h4>Stain Resistant </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-four">
                                <h4>Easy Maintenance</h4>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-five">
                                <h4>Custom Fit </h4>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <!-- vehicles -->
  <section class="vehicle-section reveal">
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
    </section> 

    <!-- gallery -->

    <section class="gallery-section bg-dark-gray">
        <div class="container reveal">
            <div>
                <h2>Gloss PPF Gallery</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row mt-4 d-flex g-3">
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/gloss_ppf/gallery/1.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/gloss_ppf/gallery/2.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/gloss_ppf/gallery/3.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/gloss_ppf/gallery/4.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
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
                            <img src="{{ asset('assets/llumar/images/gloss_ppf/Scratches.png')}}" alt="">
                            <p class="mt-3">Scratches &<br>Swirl Marks</p>
                        </div>
                        <div class="col-6 com-md-4">
                            <img src="{{ asset('assets/llumar/images/gloss_ppf/Acid-Rain.png')}}" alt="">
                            <p class="mt-3">Acid Rain &<br>Stain</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 com-md-4">
                            <img src="{{ asset('assets/llumar/images/gloss_ppf/Chips.png')}}" alt="">
                            <p class="mt-3">Rock Chips &<br> Road Debris</p>
                        </div>
                        <div class="col-6 com-md-4">
                            <img src="{{ asset('assets/llumar/images/gloss_ppf/Bird.png')}}" alt="">
                            <p class="mt-3">Bird Droppings &<br>Tree Sap </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('assets/llumar/images/gloss_ppf/LLumar_Gloss-PPF_5.jpg')}}" class="w-100" alt="">
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
                        'id' => 'gloss-paint-protection-film',
                        'class' => 'gloss-paint-protection-film',
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
                                {!! Form::hidden('subject', 'Gloss paint protection film') !!}

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
                <h2> About Gloss Paint Protection Film</h2>
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
                                    How long does LLumar Gloss Paint protection film last?

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A Llumar Gloss Paint protection film can last for up to 5 years.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Does it change the appearance of my car’s paint?

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No. LLumar Gloss Paint protection film enhances your car’s paint while keeping it free
                                    of any distortion or texture.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Will self-healing technology last over time?

                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, the self-healing technology fades minor scratches when exposed to heat.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Is ceramic coating necessary with a Gloss Paint protection film?

                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, it already provides high-gloss clarity and superior stain resistance, eliminating
                                    the need for ceramic coating.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Where can I get LLumar Gloss Paint protection film installed?

                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Use our ‘Locate LLumar Dealer’ tool to locate the nearest LLumar professional.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Will this film affect my car’s warranty?

                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    LLumar PPF can be applied on OEM (factory finish) car paint without any issues. However,
                                    the warranty does not cover any LLumar PPF applied on re-painted surfaces.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSeven">
                                    How much does LLumar Gloss Paint protection film cost?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Pricing depends on vehicle size and coverage area. Fill out our quote request form for
                                    an estimate.
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
    {!! JsValidator::formRequest('App\Http\Requests\SendMessageRequest', '#gloss-paint-protection-film') !!}
    <script src="{{ asset('assets/llumar/js/image_modal.js')}}"></script>
@endsection