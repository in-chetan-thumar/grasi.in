@extends('llumar.layouts.master')

@section('title')
   Automotive paint protection film
@endsection

{{-- SEO  --}}
@section('seo') 
 <title>Automotive Paint Protection Film | Car PPF in India – LLumar by Gras-i</title>
    <meta name="description" content="Get LLumar automotive paint protection film from authorized dealers across major cities in India. Our high-performance car PPF in India shields your vehicle from scratches, chips, and UV damage - perfect for lasting protection." />

    <meta name="keywords" content="automotive paint protection film, paint protection film in india, car paint protection film, automotive ppf, car ppf, llumar, grasi" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 day" />
    <meta name="language" content="English" />
    <meta name="generator" content="N/A" />
    <meta property="og:title" content="Automotive Paint Protection Film | Car PPF in India – LLumar by Gras-i" />
    <meta property="og:description" content="Get LLumar automotive paint protection film from authorized dealers across major cities in India. Our high-performance car PPF in India shields your vehicle from scratches, chips, and UV damage - perfect for lasting protection." />
    <meta property="og:url" content="https://www.grasi.in/automotive-ppf" />
    <meta property="og:image" content="https://www.grasi.in/assets/llumar/images/about-car.webp" />
    <meta property="og:site_name" content="LLumar by Gras-i" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Automotive Paint Protection Film | Car PPF in India – LLumar by Gras-i" />
    <meta name="twitter:description" content="Get LLumar automotive paint protection film from authorized dealers across major cities in India. Our high-performance car PPF in India shields your vehicle from scratches, chips, and UV damage - perfect for lasting protection." />
    <meta name="twitter:image" content="https://www.grasi.in/assets/llumar/images/about-car.webp" />
    <meta name="twitter:url" content="https://www.grasi.in/automotive-ppf" />

    <link rel="canonical" href="https://www.grasi.in/automotive-ppf" />
@endsection

@section('content')


    <!-- section hero-image -->
    <section class="hero-section  hero-section-autotmotive  responsive-desktop">
        <div class="title-section">
            <h1>KEEP YOUR CAR <br>looking new</h1>
            <h6>with automotive paint protection film</h6>
        </div>
        {{-- <div>
            <img src="{{ asset('assets/llumar/images/slider-car-new.jpg')}}" class="w-100" alt="automotive paint protection film">
        </div>  --}}
    </section>

    <!-- hero section mobile -->
    <section class="hero-section responsive-mobile">
        <div class="title-section">
            <h1>KEEP YOUR CAR <br>looking new</h1>
            <h6>with automotive paint protection film</h6>
        </div>
        <div>
            <img src="{{ asset('assets/llumar/images/slider-car-new.webp')}}" class="w-100" alt="automotive paint protection film">
        </div>
    </section>
    <!-- section hero-image end -->

    <!-- section PPF -->
    <section class="section-ppf bg-dark-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 pe-md-5">
                    <h1>Automotive <br> Paint Protection Film(PPF)</h1>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                    </div>
                    <p>Your car can radiate the same shine and pristine exterior for
                        years, despite all the external contaminants and road hazards
                        with the transformative benefits of automotive paint protection
                        film. It is a durable layer that protects your vehicle's exterior
                        against rock chips, scratches, bird droppings, and road debris.
                        Designed with self-healing technology, it not only shields the car
                        but also helps maintain its aesthetic finish.</p>
                </div>
                <div class="col-md-6">
                    <div class="ppf-image">
                        <img src="{{ asset('assets/llumar/images/about-car.webp')}}" class="w-100" alt="automotive paint protection
                        film">
                        <img src="{{ asset('assets/llumar/images/about-film.webp')}}" class="film-img" alt="car paint protection
                        film">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why choose section -->
    <section class="why-choose reveal">
        <div class="container">
            <div>
                <label class="title-label-text-size">Why Choose</label>
                <h2>LLumar Automotive PPF</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                </div>
            </div>
            <!-- ppf -->
            <div class="row why-choose-points">
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/protection.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/protection.png')}}" alt="Scratch & Impact Resistance icon" height="56px">
                    <h4>Scratch & Impact Resistance</h4>
                    <p>Shields your car from minor abrasions,
                        rock chips, and road debris,
                        preventing scratches.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/UV-1.png')}}" alt="Hydrophobic Topcoat icon" height="56px">
                    <h4>Hydrophobic Topcoat</h4>
                    <p>Designed to repel water, dirt,
                        and contaminants, making cleaning
                        and maintaining it easier.</p> 
                     <!-- <img src="{{ asset('assets/llumar/images/self-healing.svg')}}" alt=""> -->
                    
                  
                </div>
                <div class="col-md-4">
                     <img src="{{ asset('assets/llumar/images/self-healing.png')}}" alt="Self Healing Technology PPF" height="56px">
                     <h4>Self Healing Technology</h4>
                     <p>When exposed to the sun or warm water,
                         it automatically disappears minor
                         scratches and swirls.</p> 
                   
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/durable.png')}}" alt="Customized Fit PPF" height="56px">
                    <h4>Customized Fit</h4>
                    <p>Made to fit your vehicle seamlessly
                        by adding a layer of invisible yet
                        strong protection.</p> 

                    
                </div>
                <div class="col-md-4">
                    
                    <!-- <img src="{{ asset('assets/llumar/images/durable.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/UV.png')}}" alt="car ppf for UV & Stain resistance" height="56px">
                    <h4>UV & Stain Resistance</h4>
                    <p>Prevents paint fading, yellowing,
                        and staining caused by UV rays,
                        bird droppings, and road grime.</p> 
                </div>
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/glare.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/glare.png')}}" alt="Multiple Finishes icon" height="56px">
                    <h4>Multiple Finishes</h4>
                    <p>An array of options, from glossy,
                        matte, or specialty finishes,
                        to match your style.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- features -->
    <section class="features-section reveal">
        <div class="container">
            <div class="title-section-alignment">
                <label class="title-label-text-size">Features of</label>
                <h2>LLumar Automotive PPF</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 ps-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-one">
                                <h4>Self-Healing Coating</h4>    
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-two">
                                <h4>UV Resistance</h4>
                              
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-three">
                                <h4>Hydrophobic Surface</h4>
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-four">
                                <h4>Protection From External Hazards</h4>   
                            </div> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="features-points feature-six">
                                <h4>Diverse Surface Finishes</h4>
                            </div>
                          
                        </div>
                        <div class="col-md-6">
                             <div class="features-points feature-five">

                                <h4>Factory-Backed Durability</h4>
                                
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
                        <img src="{{ asset('assets/llumar/images/full-car.webp')}}" alt="car ppf for full vehicle coverage">
                        <p>Covers every painted surface of the vehicle</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <h4>Partial Plus Protection</h4>
            <div class="vehicle-container mb-4">
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-full-bonnet.webp')}}" alt="car ppf for FullBonnet">
                    <p>FullBonnet</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-cups.webp')}}" alt="automotive ppf for door cups">
                    <p>Door Cups</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-side-mirrors.webp')}}" alt="automotive ppf for side mirrors">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-rear-front-bumper.webp')}}" alt="car ppf for Rear & Front Bumpers">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-edge.webp')}}" alt="car ppf for Door Edges Guards">
                    <p>Door Edges Guards</p>
                </div>
            </div>
            <!--  -->
            <h4>Basic Partial Protection</h4>
            <div class="vehicle-container">
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-cups.webp')}}" alt="automotive ppf for door cups">
                    <p>Door Cups</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-side-mirrors.webp')}}" alt="automotive ppf for side mirrors">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-rear-front-bumper.webp')}}" alt="car ppf for Rear & Front Bumpers">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-edge.webp')}}" alt="car ppf for Door Edges Guards">
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
                <h2>Automotive PPF Gallery</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                </div>
            </div>
            <div class="row mt-4 d-flex g-3">
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/automotive_ppf/1.png') }}" class="img-fluid gallery-img" alt="Automotive PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/automotive_ppf/2.png') }}" class="img-fluid gallery-img" alt="car PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/automotive_ppf/3.png') }}" class="img-fluid gallery-img" alt="automotive paint protection film">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/automotive_ppf/4.png') }}" class="img-fluid gallery-img" alt="paint protection film in india">
                </div>
                <!-- Continue other images similarly -->
            </div>
            <div class="row mt-4 d-flex gap-3">
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/automotive_ppf/5.png') }}" class="w-100 gallery-img" alt="paint protection film in india">
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
                            <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6 ">
                            <!-- <img src="{{ asset('assets/llumar/images/weather.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/weather.png')}}" alt="car ppf for harsh weather">
                            <p>Harsh <br> Weather</p>
                        </div>
                        <div class="col-6">
                            <!-- <img src="{{ asset('assets/llumar/images/rock-chips.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/rock-chips.png')}}" alt="our ppf protection from Rock Chips & Scratches">
                            <p>Rock Chips <br>& Scratches</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <!-- <img src="{{ asset('assets/llumar/images/paint-fading-staining.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/paint-fading-staining.png')}}" alt="protection from Paint Fading & Staining">
                            <p>Paint Fading <br> & Staining</p>
                        </div>
                        <div class="col-6">
                            <!-- <img src="{{ asset('assets/llumar/images/bird-dropping.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/bird-dropping.png')}}" alt="protection from bird dropping">
                            <p>Bird <br> Droppings</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('assets/llumar/images/protection against.webp')}}" class="w-100" alt="get our car ppf for Complete protection ">
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- related products -->
    <section class="products-section bg-dark-gray">
        <div class="container reveal">
            <div class="text-center">
                <h2>Related Products</h2>
                <div class="title-divider mb-0">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
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
                                <label>Platinum paint protection film </label><br> --}}
                                {{-- <label>A clear PPF that enhances your car’s aesthetics while protecting against scratches, road debris, and environmental damage. --}}
                                {{-- </label>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('llumar.valorPPF')}}">
                            <img src="{{ asset('assets/llumar/images/about-car.webp')}}" class="w-100" alt="">
                            <div class="title-product">
                                <label>Valor paint protection film </label><br> --}}
                                {{-- <label>A clear PPF that enhances your car’s aesthetics while protecting against scratches, road debris, and environmental damage. --}}
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
                        'id' => 'automotive-ppf-form',
                        'class' => 'automotive-ppf-form',
                    ]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    {!! Form::text('name', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Name',
                                            // 'id' => 'floatingInput',
                                        ]) !!}
                                         {!! Form::hidden('subject', 'Automotive paint protection film') !!}
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
                                    {{-- <input type="tel" class="form-control" id="floatingInput"
                                        placeholder="Contact Number"> --}}
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
                                    'class' => 'form-select custom-select  ',
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
                <label class="title-label-text-size">Frequently Asked Questions (FAQ)</label>
                <h2>About Automotive PPF</h2>
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
                                    How long does LLumar Automotive PPF last?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    LLumar car PPF is designed to last up to 10 years with proper care and maintenance.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Is LLumar Automotive PPF visible on my car's paint?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, LLumar car PPF is optically clear and matches your car’s finish.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can LLumar automotive PPF be removed without damaging my paint?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, LLumar automotive paint protection film can be professionally removed without leaving residue or damaging the paint.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How does self-healing technology work?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The car PPF’s self-healing topcoat disappears minor scratches and swirls with heat exposure from the sun or warm water.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Does LLumar automotive PPF affect my car's warranty?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    LLumar car paint protection film is factory-backed and does not void your vehicle’s warranty.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What's the difference between gloss and matte automotive paint protection film?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    While a Gloss automotive PPF enhances your car’s shine, the matte car PPF gives it a satin-like, non-reflective look.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    How much does it cost to install LLumar automotive paint protection film in India?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Pricing depends on coverage area and vehicle type. Fill out our contact form for a quote.
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
    {!! JsValidator::formRequest('App\Http\Requests\SendMessageRequest', '#automotive-ppf-form') !!}
    <script src="{{ asset('assets/llumar/js/image_modal.js')}}"></script>
@endsection