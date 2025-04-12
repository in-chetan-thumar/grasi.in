@extends('llumar.layouts.master')

@section('title')
    LLumar
@endsection
@section('content')

    <!-- section hero-image -->
    <section class="hero-section responsive-desktop">
        <div class="title-section">
            <h1>Keep Your Car’s<br><span>Paint Flawless</span></h1>
            <h6>With Valor Paint Protection Film</h6>
        </div>
        <!-- <div>
            <img src="assets/images/slider-car-new.jpg" class="w-100" alt="">
        </div> -->
    </section>

    <!-- hero section mobile -->
    <section class="hero-section responsive-mobile">
        <div class="title-section">
            <h1> Keep Your Car’s<br><span>Paint Flawless</span></h1>
            <h6>With Valor Paint Protection Film</h6>
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
                    <h1>Valor  <br> Paint Protection Film</h1>
                    <div class="title-divider">
                        <img src="assets/images/dash.svg" alt="">
                    </div>
                    <p>Keep your car protected and as good as new with the Valor Paint Protection Film. This film combines the best of both worlds—the self-healing defense of premium PPF with the seamless maintenance of a ceramic-style coating. The highly durable PPF safeguards your car’s paint against chips, scratches, and environmental damage while retaining its shine. It promises superior stain resistance, hydrophobic technology, and a glossy finish that retains its aesthetic appeal.
                        .</p>
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
                <h2>LLumar Valor Paint Protection Film</h2>
                <div class="title-divider">
                    <img src="assets/images/dash.svg" alt="">
                </div>
            </div>
            <!-- ppf -->
            <div class="row why-choose-points">
                <div class="col-md-4">
                    <!-- <img src="assets/images/protection.svg" alt=""> -->
                    <img src="assets/images/protection.png" alt="">
                    <h4>Easy-to-Clean Surface</h4>
                    <p>Our patented Tetrashield technology enhances the film’s stain resistance and hydrophobicity, which repels dirt and water.</p>
                </div>
                <div class="col-md-4">
                    <img src="assets/images/UV.png" alt="">
                    <h4>Ultra-Glossy Finish</h4>
                    <p> Enhances your car’s paint with an optically clear finish and smooth shine.
                        </p> 
                </div>
                <div class="col-md-4">
                    <img src="assets/images/durable.png" alt="">
                    <h4>Advanced Durability </h4>
                    <p> Protects against rock chips, road debris, mud splatters, and tar marks, increasing its life.
                    </p> 
                </div>
                </div>
            
            <div class="row mt-2">
                <div class="col-md-4">
                   <!-- <img src="assets/images/glare.svg" alt=""> -->
                   <img src="assets/images/glare.png" alt="">
                   <h4>Customized Fit</h4>
                   <p> Made to fit your vehicle seamlessly by adding a layer of invisible yet strong protection. 
                   </p>
                  
                </div>
                <div class="col-md-4">
                      <img src="assets/images/UV-1.png" alt="">
                    <h4>Stain & Fade Resistance </h4>
                    <p>Offers superior protection against acid rain, tree sap, and bird droppings.
                    </p> 
                    
                       <!-- <img src="assets/images/durable.svg" alt=""> -->
                </div>
                <div class="col-md-4">
                      <!-- <img src="assets/images/self-healing.svg" alt=""> -->
                     <img src="assets/images/self-healing.png" alt="">
                     <h4>Self Healing Technology</h4>
                     <p>Vanishes minor scratches and swirl marks when exposed to the sun or warm water.
                    </p>
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
                            <div class="features-points feature-one">
                                <h4>Hydrophobic Surface </h4>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-two">
                                <h4>Self-Healing Protection 
                                </h4>  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-three">
                                <h4>Ultra-Glossy Finish
                                </h4>
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-four">
                                <h4>Environmental Resistance</h4>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-five">
                                <h4>Tough & Durable 
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-six">
                                 <h4>OEM-Trusted Tetrashield™ Technology
                                </h4>
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
                            <div class="col-md-4 col-6">
                                <!-- <img src="assets/images/rock-chips.svg" alt=""> -->
                                <img src="assets/images/rock-chips.png" alt="">
                                <p>Rock Chips<br>& Scratches</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <!-- <img src="assets/images/rock-chips.svg" alt=""> -->
                            <img src="assets/images/rock-chips.png" alt="">
                            <p>Acid Rain &<br>UV Damage</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <!-- <img src="assets/images/paint-fading-staining.svg" alt=""> -->
                            <img src="assets/llumar/images/platinum_ppf/protection-rock-chips.png" alt="">
                            <p>Road Debris &<br>Salt Corrosion </p>
                        </div>
                        <div class="col-md-4 col-6">
                            <!-- <img src="assets/images/bird-dropping.svg" alt=""> -->
                            <img src="assets/images/bird-dropping.png" alt="">
                            <p>Bird Droppings& <br>Tree Sap</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <img src="assets/llumar/images/platinum_ppf/about-side-photo-two.webp" class="w-100" alt="">
                    
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
                        <a href="{{route('llumar.automativePPF')}}">
                            <img src="assets/images/about-car.webp" class="w-100" alt="">
                            <div class="title-product">
                                <label>Automative Paint Protection Film </label><br>
                                {{-- <label>A clear PPF that enhances your car’s aesthetics while protecting against scratches, road debris, and environmental damage. --}}
                                </label>
                            </div>
                        </a>
                    </div>
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
                </div>
            </div>
        </div>
    </section>

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
                        'url' => route('llumar.valorPPF.send.message'),
                        'method' => 'POST',
                        'id' => 'valor-ppf-form',
                        'class' => 'valor-ppf-form',
                    ]) !!}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    {!! Form::text('name', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Name',
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
                                     How long does LLumar Valor PPF last?

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    With proper care, LLumar Valor PPF can last up to 12 years, backed by a manufacturer’s limited warranty.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Does Valor PPF make my car look different?

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, Valor has an ultra-glossy, optically clear finish that protects and maintains your car’s original paint without distortion or texture. 

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Will self-healing technology work forever?

                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, minor scratches and swirls will self-heal with heat exposure if the PPF’s top coat maintains well. We recommend following the LLumar PPF Care & Maintenance guide.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Does Valor PPF need ceramic coating?

                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, the film already includes a ceramic-style, hydrophobic surface, eliminating the need for additional coatings.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Where can I get LLumar Valor PPF installed?

                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Click on our website's ‘Locate LLumar Dealer’ option or call our representative to find a certified installer near you.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Will Valor PPF affect my car’s warranty?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                     LLumar PPF can be applied on OEM (factory finish) car paint without any issues. However, the warranty does not cover any LLumar PPF applied on re-painted surfaces.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    How much does Valor PPF installation cost?

                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Pricing varies based on coverage area and vehicle type. Fill out our contact form for a quote.
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
    {!! JsValidator::formRequest('App\Http\Requests\SendMessageRequest', '#valor-ppf-form') !!}
    <script> 
    </script>
@endsection