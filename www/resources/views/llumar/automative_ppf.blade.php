@extends('llumar.layouts.master')

@section('title')
    LLumar
@endsection
@section('content')


    <!-- section hero-image -->
    <section class="hero-section responsive-desktop">
        <div class="title-section">
            <h1>KEEP YOUR CAR <br><span>looking new</span></h1>
            <h6>with automotive paint protection film</h6>
        </div>
        <!-- <div>
            <img src="assets/images/slider-car-new.jpg" class="w-100" alt="">
        </div> -->
    </section>

    <!-- hero section mobile -->
    <section class="hero-section responsive-mobile">
        <div class="title-section">
            <h1>KEEP YOUR CAR <br><span>looking new</span></h1>
            <h6>with automotive paint protection film</h6>
        </div>
        <div>
            <img src="assets/images/slider-car-new.webp" class="w-100" alt="">
        </div>
    </section>
    <!-- section hero-image end -->

    <!-- section PPF -->
    <section class="section-ppf bg-dark-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Automotive <br> Paint Protection Film(PPF)</h1>
                    <div class="title-divider">
                        <img src="assets/images/dash.svg" alt="">
                    </div>
                    <p>Your car can radiate the same shine and pristine exterior for
                        years, despite all the external contaminants and road hazards
                        with the transformative benefits of Automotive Paint Protection
                        Film. It is a durable layer that protects your vehicle's exterior
                        against rock chips, scratches, bird droppings, and road debris.
                        Designed with self-healing technology, it not only shields the car
                        but also helps maintain its aesthetic finish.</p>
                </div>
                <div class="col-md-6">
                    <div class="ppf-image">
                        <img src="assets/images/about-car.webp" class="w-100" alt="">
                        <img src="assets/images/about-film.webp" class="film-img" alt="">
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
                    <img src="assets/images/dash.svg" alt="">
                </div>
            </div>
            <!-- ppf -->
            <div class="row why-choose-points">
                <div class="col-md-4">
                    <!-- <img src="assets/images/protection.svg" alt=""> -->
                    <img src="assets/images/protection.png" alt="">
                    <h4>Scratch & Impact Resistance</h4>
                    <p>Shields your car from minor abrasions,
                        rock chips, and road debris,
                        preventing scratches.</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/images/UV-1.png" alt="">
                    <h4>Hydrophobic Topcoat</h4>
                    <p>Designed to repel water, dirt,
                        and contaminants, making cleaning
                        and maintaining it easier.</p> 
                     <!-- <img src="assets/images/self-healing.svg" alt=""> -->
                    
                  
                </div>
                <div class="col-md-4">
                     <img src="assets/images/self-healing.png" alt="">
                     <h4>Self Healing Technology</h4>
                     <p>When exposed to the sun or warm water,
                         it automatically disappears minor
                         scratches and swirls.</p> 
                   
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <img src="assets/images/durable.png" alt="">
                    <h4>Customized Fit</h4>
                    <p>Made to fit your vehicle seamlessly
                        by adding a layer of invisible yet
                        strong protection.</p> 

                    
                </div>
                <div class="col-md-4">
                    
                    <!-- <img src="assets/images/durable.svg" alt=""> -->
                    <img src="assets/images/UV.png" alt="">
                    <h4>UV & Stain Resistance</h4>
                    <p>Prevents paint fading, yellowing,
                        and staining caused by UV rays,
                        bird droppings, and road grime.</p> 
                </div>
                <div class="col-md-4">
                    <!-- <img src="assets/images/glare.svg" alt=""> -->
                    <img src="assets/images/glare.png" alt="">
                    <h4>Multiple Finishes</h4>
                    <p>An array of options, from glossy,
                        atte, or specialty finishes,
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
                    <img src="assets/images/dash.svg" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 ps-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-two">
                                <h4>Self-Healing Coating</h4>
                              
                           </div>

                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-three">
                                <h4>UV Resistance</h4>
                              
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-four">
                                <h4>Hydrophobic Surface</h4>
                           </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-one">
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
                        <img src="assets/images/full-car.webp" alt="">
                        <p>Covers every painted surface of the vehicle</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <h4>Partial Plus Protection</h4>
            <div class="vehicle-container mb-4">
                <div>
                    <img src="assets/images/cars-full-bonnet.webp" alt="">
                    <p>FullBonnet</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="assets/images/cars-door-cups.webp" alt="">
                    <p>Door Cups</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="assets/images/cars-side-mirrors.webp" alt="">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="assets/images/cars-rear-front-bumper.webp" alt="">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="assets/images/cars-door-edge.webp" alt="">
                    <p>Door Edges Guards</p>
                </div>
            </div>
            <!--  -->
            <h4>Basic Partial Protection</h4>
            <div class="vehicle-container">
                <div>
                    <img src="assets/images/cars-door-cups.webp" alt="">
                    <p>Door Cups</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="assets/images/cars-side-mirrors.webp" alt="">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="assets/images/cars-rear-front-bumper.webp" alt="">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="assets/images/cars-door-edge.webp" alt="">
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
    {{-- <section class="gallery-section bg-dark-gray">
        <div class="container reveal">
            <div>
                <h2>Automotive PPF Gallery</h2>
                <div class="title-divider">
                    <img src="assets/images/dash.svg" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="responsive-desktop">
                        <div class="mb-3">
                            <iframe width="100%" height="190"
                                src="https://www.youtube.com/embed/qUyuPqDAJTE?si=BmCte9l4_YTrVXiM"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="mb-3">
                            <iframe width="100%" height="190"
                                src="https://www.youtube.com/embed/qUyuPqDAJTE?si=BmCte9l4_YTrVXiM"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div>
                            <iframe width="100%" height="190"
                                src="https://www.youtube.com/embed/qUyuPqDAJTE?si=BmCte9l4_YTrVXiM"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <!-- mobile reponsive video -->
                    <div class="responsive-mobile">
                        <div class="slidervideo">
                            <div>
                                <iframe width="100%" height="190"
                                    src="https://www.youtube.com/embed/qUyuPqDAJTE?si=BmCte9l4_YTrVXiM"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div>
                                <iframe width="100%" height="190"
                                    src="https://www.youtube.com/embed/qUyuPqDAJTE?si=BmCte9l4_YTrVXiM"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div>
                                <iframe width="100%" height="190"
                                    src="https://www.youtube.com/embed/qUyuPqDAJTE?si=BmCte9l4_YTrVXiM"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="video-container">
                        <video class="video" id="bVideo">
                            <source src="https://youtu.be/EQHmxX8RSJM" />
                        </video>
                        <!-- <iframe width="100%" height="450" class="video" id="bVideo"
                            src="https://www.youtube.com/embed/n3XnqbxQF_E?si=mDOLQtKUEKd2b4cx"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                        <!-- <div id="playButton" class="playButton" onclick="playPause()"><i
                                class="bi bi-play-circle-fill play-icon"></i></div> -->
                        <div id="playButton" class="playButton" onclick="playPause()"></div>
                    </div>
                    <div class="video-desc">
                        <div>
                            <h4>See LLumar in action!</h4>
                            <p>Experience this product first-hand with these visuals that display their look,
                                feel, & benefits effortlessly.</p>
                        </div>
                        <div>
                            <a href="#"><i class="bi bi-arrow-right fs-4"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- protection -->
    <section class="protection-section">
        <div class="container">
            <div class="row align-items-center reveal">
                <div class="col-md-5 title-section-alignment">
                    <div>
                        <label class="title-label-text-size">Clear & Complete</label>
                        <h2>Protection Against</h2>
                        <div class="title-divider">
                            <img src="assets/images/dash.svg" alt="">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4 col-6">
                            <!-- <img src="assets/images/weather.svg" alt=""> -->
                            <img src="assets/images/weather.png" alt="">
                            <p>Harsh <br> Weather</p>
                        </div>
                        <div class="col-md-4 col-6">
                            <!-- <img src="assets/images/rock-chips.svg" alt=""> -->
                            <img src="assets/images/rock-chips.png" alt="">
                            <p>Rock Chips <br>& Scratches</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <!-- <img src="assets/images/paint-fading-staining.svg" alt=""> -->
                            <img src="assets/images/paint-fading-staining.png" alt="">
                            <p>Paint Fading <br> & Staining</p>
                        </div>
                        <div class="col-md-4 col-6">
                            <!-- <img src="assets/images/bird-dropping.svg" alt=""> -->
                            <img src="assets/images/bird-dropping.png" alt="">
                            <p>Bird <br> Droppings</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <img src="assets/images/protection against.webp" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- related products -->
    <section class="products-section bg-dark-gray">
        <div class="container reveal">
            <div class="text-center">
                <h2>Related Products</h2>
                <div class="title-divider mb-0">
                    <img src="assets/images/dash.svg" alt="">
                </div>
            </div>
            <div class="button-view">
                <a href="#" class="btn btn-outline-dark btn-llumar-second">VIEW ALL</a>
            </div>
            <div class="mt-4">
                <div class="sliderproducts">
                    <div>
                        <a href="{{route('llumar.platinumPPF')}}">
                            <img src="assets/images/about-car.webp" class="w-100" alt="">
                            <div class="title-product">
                                <label>Platinum Paint Protection Film </label><br>
                                {{-- <label>A clear PPF that enhances your car’s aesthetics while protecting against scratches, road debris, and environmental damage. --}}
                                </label>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('llumar.valorPPF')}}">
                            <img src="assets/images/about-car.webp" class="w-100" alt="">
                            <div class="title-product">
                                <label>Valor Paint Protection Film </label><br>
                                {{-- <label>A clear PPF that enhances your car’s aesthetics while protecting against scratches, road debris, and environmental damage. --}}
                                </label>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- section form -->
    <section class="form-section">
        <div class="container reveal">
            <div class="row bg-dark-gray rounded-5 p-3">
                <div class="col-md-4 ps-0">
                    <img src="assets/images/inquiry-car.webp" class="w-100" alt="">
                </div>
                <div class="col-md-8 form-section-alignment">
                    <div class="mb-3">
                        <h2 class="mb-0">Start Your LLumar Journey</h2>
                        <label class="title-label-text-size">Fill Out the Form Below!</label>
                    </div>
                    {!! Form::open([
                        'url' => route('llumar.automativePPF.send.message'),
                        'method' => 'POST',
                        'id' => 'automative-ppf-form',
                        'class' => 'automative-ppf-form',
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
                                        'placeholder' => 'Contact Number',
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
                                    '1' => 'Service One',
                                    '2' => 'Service Two',
                                    '3' => 'Service Three',
                                ], null, [
                                    'class' => 'form-select',
                                    'id' => 'floatingSelect',
                                    'aria-label' => 'Floating label select example',
                                ]) !!}
                                <label for="floatingSelect">Choose your Service</label>
                            </div>
                        </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            {!! Form::textarea('additional_info', null, [
                                                'class' => 'form-control',
                                                'placeholder' => 'Additional Info',
                                                'id' => 'floatingTextarea',
                                                'style' => 'height: 100px;', // Optional: control initial height
                                            ]) !!}
                                            <label for="floatingTextarea">Additional Info</label>
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
                <h2>About Automotive PPF</h2>
                <div class="title-divider">
                    <img src="assets/images/dash.svg" alt="">
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
                                    LLumar PPF is designed to last up to 10 years with proper care and maintenance.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Is LLumar PPF visible on my car's paint?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, LLumar PPF is optically clear and matches your car’s finish.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can LLumar PPF be removed without damaging my paint?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, LLumar PPF can be professionally removed without leaving residue or damaging the paint.
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
                                    The PPF’s self-healing topcoat disappears minor scratches and swirls with heat exposure from the sun or warm water.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Does LLumar PPF affect my car's warranty?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    LLumar PPF is factory-backed and does not void your vehicle’s warranty.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What's the difference between gloss and matte PPF?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    While a Gloss PPF enhances your car’s shine, the matte PPF gives it a satin-like, non-reflective look.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    How much does it cost to install LLumar Automotive PPF?
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
    {!! JsValidator::formRequest('App\Http\Requests\SendMessageRequest', '#automative-ppf-form') !!}
    <script> 
    </script>
@endsection