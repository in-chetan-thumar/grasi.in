@extends('llumar.layouts.master')

@section('seo')


@endsection

@section('content')
    <!-- section hero-image -->
    <section class="hero-section hero-section-classeco responsive-desktop">
        <div class="container">
            <div class="title-section title-section-classeco d-flex">
                <div class="title-border"></div>
                <div>
                    <h1>Show-Room<br> Ready, Indeed</h1>
                    <h6>With Classeco Paint Protection Film</h6>
                </div>
                
            </div>
        </div>
        <!-- <div>
            <img src="{{ asset('assets/llumar/images/slider-car-new.jpg')}}" class="w-100" alt="">
        </div> -->
    </section>

    <!-- hero section mobile -->
    <section class="hero-section hero-section-classeco responsive-mobile">
        <div class="title-section">
            <h1>Show-Room<br><span>Ready, Indeed</span></h1>
            <h6>With Classeco Paint Protection Film
        </div>
        <div>
            <img src="{{ asset('assets/llumar/images/classeco/slider-car-new.jpg')}}" class="w-100" alt="">
        </div>
    </section>
    <!-- section hero-image end -->
    <!-- section PPF -->
    <section class="section-ppf bg-dark-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 pe-md-5">
                    <h1> Classeco <br> Paint Protection Film</h1>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                    </div>
                    <p>Engineered with precision at Eastman’s world-class facility in Dresden, Germany, the LLumar Classeco Paint Protection Film (PPF) combines the best of German design with advanced paint protection. Made for showrooms only, Classeco offers exceptional value to car owners with its smooth, high-gloss finish and sturdy protection from sand, debris, rocks, and other external contaminants. Its glossy finish enhances the vehicle’s visual appeal, while self-healing properties help maintain a fresh, like-new look over time. Additionally, its stain-resistant surface protects the original paint from common contaminants such as bird droppings, mud splatters, tar marks, tree sap, and more.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="ppf-image">
                        <img src="{{ asset('assets/llumar/images/classeco/about-car.jpg')}}" class="w-100" alt="">
                        <img src="{{ asset('assets/llumar/images/classeco/about-film.jpg')}}" class="film-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why choose section -->
    <section class="why-choose why-choose-classeco reveal">
        <div class="container">
            <div>
                <label class="title-label-text-size">Why Choose</label>
                <h2>LLumar Classeco Paint Protection Film</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <!-- ppf -->
            <div class="row why-choose-points">
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/classeco/german-precision.png')}}" alt="" height="56px">
                    <h4>German Precision</h4>
                    <p>Manufactured at Eastman’s high-tech facility in Dresden for world-class performance.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/classeco/gloss.png')}}" alt="" height="56px">
                    <h4>Smooth Gloss Finish</h4>
                    <p>Offers a clear, distortion-free shine that exudes a premium quality.</p> 
                </div>
                <div class="col-md-4">
                     <img src="{{ asset('assets/llumar/images/classeco/protection.png')}}" alt="" height="56px">
                     <h4>Everyday Protection </h4>
                     <p>Shields your car’s paint from scratches, chips, and environmental pollutants.</p> 
                </div>
            </div>
            <div class="row mt-2" style="justify-content: center;">
                <div class="col-md-4">
                     <img src="{{ asset('assets/llumar/images/classeco/self-healing.png')}}" alt="" height="56px">
                    <h4>Self-Healing Technology</h4>
                    <p>Vanishes minor scratches and swirl marks when exposed to the sun or warm water.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/classeco/stain.png')}}" alt="" height="56px">
                    <h4>Stain Resistance</h4>
                    <p>Superior protection against discoloration and stains from acid rain, tree sap, and bird droppings.</p> 
                </div>
            </div>
        </div>
    </section>

    <!-- features -->
    <section class="features-section features-section-classeco reveal">
        <div class="container">
            <div class="title-section-alignment">
                <label class="title-label-text-size">Features of</label>
                <h2>Classeco Paint Protection Film</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 ps-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-one">
                                <h4>German Engineering Excellence</h4>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-two">
                                <h4>High-Gloss & Smooth Finish</h4>     
                           </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                           <div class="features-points feature-three">
                                 <h4>Stain Resistance</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-four">
                                 <h4>Self-Healing Technology</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-five">
                                <h4>Premium Appearance</h4>                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-six">
                                <h4>Manufacturer- backed 5- year warranty</h4>
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
<div>
    <section class="gallery-section bg-dark-gray">
        <div class="container reveal">
            <div>
                <h2>Classeco PPF Gallery</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row  mt-4 d-flex g-3 "> 
                <div class="col-md-3" >
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/1.png') }}" class="w-100 gallery-img" alt="Platinum PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/2.png') }}" class="w-100 gallery-img" alt="Platinum PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/3.png') }}" class="w-100 gallery-img" alt="Platinum PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/4.png') }}" class="w-100 gallery-img" alt="Platinum PPF">
                </div>
            </div>
        
            <div class="row  mt-4 d-flex g-3">
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/5.png') }}" class="w-100 gallery-img" alt="Platinum PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/6.png') }}" class="w-100 gallery-img" alt="Platinum PPF">
                </div>
            </div>
            </div>
        </div>

    <!-- Image Modal -->
    <div id="imageModal" class="image-modal ">
        <span class="close-modal">&times;</span>
        <button class="nav-btn prev-btn">&lt;</button>
        <div class="square-image-container">
            <img class="modal-content" id="expandedImg">
        </div>
        <button class="nav-btn next-btn">&gt;</button>
    </div>
</section>
    
    <!-- protection -->
    <section class="protection-section">
        <div class="container">
            <div class="row align-items-center reveal">
                <div class="col-md-4  title-section-alignment">
                    <div>
                        <label class="title-label-text-size">Clear & Complete</label>
                        <h2>Protection Against</h2>
                        <div class="title-divider">
                            <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class=" col-6">
                            <img src="{{ asset('assets/llumar/images/rock-chips.png')}}" alt="">
                           <p>Road Chips &<br> Scratches</p>                            
                            
                        </div>
                        <div class="col-6">
                       
                            <img src="{{ asset('assets/llumar/images/bird-dropping.png')}}" alt="">
                            <p>Bird Droppings &<br> Tree Sap</p> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('assets/llumar/images/classeco/uv-rays.png')}}" alt="">
                            <p>UV Rays &<br> Fading</p>
                        </div>
                        <div class="col-6">
 
                            <img src="{{ asset('assets/llumar/images/weather.png')}}" alt="">
                            <p>Road Debris &<br> Environmental Damage</p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-8 ">
                    <img src="{{ asset('assets/llumar/images/classeco/protection-against.jpg')}}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>

    

    <!-- section form -->
  
    <!-- related products -->
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
                        'id' => 'platinum-ppf-form',
                        'class' => 'platinum-ppf-form',
                    ]) !!}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    {!! Form::text('name', null, [
                                            'class' => 'form-control',
                                            'placeholder' => 'Name',
                                        ]) !!}
                                 {!! Form::hidden('subject', 'Classeco') !!}

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
                                    '1' => 'Paint Protection Film',
                                    '2' => 'Automotive Window Film',
                                    '3' => 'Architectural Window Film',
                                ], null, [
                                    'class' => 'form-select custom-select  ',
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
                <h2>About Classeco PPF</h2>
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
                                    What makes LLumar Classeco different?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                It’s engineered in Germany, focusing on high performance, durability, and value for vehicle showrooms that want to promise high quality to their customers.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Will Classeco affect the original car finish?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, it enhances the finish with a smooth, high-gloss look while protecting the factory paint underneath.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Is Classeco a self-healing PPF?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, it is a self-healing PPF that vanishes minor scratches and swirl marks when exposed to the sun or warm water.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How long does Classeco PPF last?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    With proper care, Classeco can last several years, supported by a 5-year LLumar warranty. 
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can Classeco be removed or replaced later?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, it can be professionally removed without damaging the underlying paint.
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
    {!! JsValidator::formRequest('App\Http\Requests\SendMessageRequest', '#platinum-ppf-form') !!}
    <script src="{{ asset('assets/llumar/js/image_modal.js')}}"></script>

@endsection
