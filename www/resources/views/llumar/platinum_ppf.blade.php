@extends('llumar.layouts.master')

@section('title')
    Platinum paint protection film
@endsection

{{-- SEO  --}}
@section('seo') 
<title>LLumar Platinum PPF | Platinum Paint Protection Film – Grasi</title>
    <meta name="description" content="LLumar platinum paint protection film from Grasi offers advanced defense against scratches, chips, and stains. LLumar platinum ppf for lasting gloss and strong durability. Available through dealers across India for lasting vehicle protection." />
    <meta name="keywords" content="platinum paint protection film, llumar platinum ppf, llumar platinum, dealer, india, grasi" />
    
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 day" />
    <meta name="language" content="English" />
    <meta name="generator" content="N/A" />
    <meta property="og:title" content="LLumar Platinum PPF | Platinum Paint Protection Film – Grasi" />
    <meta property="og:description" content="LLumar platinum paint protection film from Grasi offers advanced defense against scratches, chips, and stains. LLumar platinum ppf for lasting gloss and strong durability. Available through dealers across India for lasting vehicle protection." />
    <meta property="og:url" content="https://www.grasi.in/automotive-ppf/platinum" />
    <meta property="og:image" content="https://www.grasi.in/assets/llumar/images/platinum_ppf/about-side-photo-two.webp" />
    <meta property="og:site_name" content="LLumar by Gras-i" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="LLumar Platinum PPF | Platinum Paint Protection Film – Grasi" />
    <meta name="twitter:description" content="LLumar platinum paint protection film from Grasi offers advanced defense against scratches, chips, and stains. LLumar platinum ppf for lasting gloss and strong durability. Available through dealers across India for lasting vehicle protection." />
    <meta name="twitter:image" content="https://www.grasi.in/assets/llumar/images/platinum_ppf/about-side-photo-two.webp" />
    <meta name="twitter:url" content="https://www.grasi.in/automotive-ppf/platinum" />

    <link rel="canonical" href="https://www.grasi.in/automotive-ppf/platinum" />
@endsection

@section('content')
    <!-- section hero-image -->
    <section class="hero-section hero-section-platinum responsive-desktop">
        <div class="container">
            <div class="title-section title-section-platinum d-flex">
                <div class="title-border"></div>
                <div>
                    <h1>Protect & Preserve<br> Your Car’s Style</h1>
                    <h6>Platinum Paint Protection Film</h6>
                </div>
                
            </div>
        </div>
        <!-- <div>
            <img src="{{ asset('assets/llumar/images/slider-car-new.jpg')}}" class="w-100" alt="">
        </div> -->
    </section>

    <!-- hero section mobile -->
    <section class="hero-section hero-section-platinum responsive-mobile">
        <div class="title-section">
            <h1>Protect & Preserve<br><span> Your Car’s Style</span></h1>
            <h6>Platinum Paint Protection Film
        </div>
        <div>
            <img src="{{ asset('assets/llumar/images/platinum_ppf/cover.webp')}}" class="w-100" alt="platinum paint protection film">
        </div>
    </section>
    <!-- section hero-image end -->
    <!-- section PPF -->
    <section class="section-ppf bg-dark-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 pe-md-5">
                    <h1> Platinum  <br> Paint Protection Film (PPF)</h1>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                    </div>
                    <p>Your vehicle is an investment - protect it with LLumar Platinum PPF, designed for unmatched durability and high-end defense. The Platinum paint protection film offers a solid and stylish shield against road debris, scratches, and environmental contaminants. Backed by advanced self-healing technology, a hydrophobic topcoat, and superior stain resistance, LLumar Platinum PPF ensures long-lasting protection with a crystal-clear layer that enhances your vehicle’s aesthetic appeal.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="ppf-image">
                        <img src="{{ asset('assets/llumar/images/platinum_ppf/about-main-photo.webp')}}" class="w-100" alt="Platinum paint protection film">
                        <img src="{{ asset('assets/llumar/images/platinum_ppf/about-side-photo-two.webp')}}" class="film-img" alt="Platinum paint protection film">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why choose section -->
    <section class="why-choose why-choose-platinum reveal">
        <div class="container">
            <div>
                <label class="title-label-text-size">Why Choose</label>
                <h2>LLumar Platinum PPF</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                </div>
            </div>
            <!-- ppf -->
            <div class="row why-choose-points">
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/protection.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/protection.png')}}" alt="llumar platinum ppf" height="56px">
                    <h4>Strong Protection</h4>
                    <p>Shields against rock chips, road debris, and scratches.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/why-choose-icons -Hydro.png')}}" alt="Hydrophobic Topcoat" height="56px">
                    <h4>Hydrophobic Topcoat </h4>
                    <p>Our patented top coat, Hydrogard offers strong durability and repels water, dirt, and grime for seamless and easier maintenance.</p> 
                </div>
                <div class="col-md-4">
                     <!-- <img src="{{ asset('assets/llumar/images/self-healing.svg')}}" alt=""> -->
                     <img src="{{ asset('assets/llumar/images/self-healing.png')}}" alt="llumar platinum ppf with Self-Healing Surface" height="56px">
                     <h4>Self-Healing Surface </h4>
                     <p>Minor scratches disappear with sun or heat exposure.
                    </p> 
                   
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/why-choose-icons -Durable.png')}}" alt="llumar platinum ppf is know for Long-Lasting Durability" height="56px"> 
                    <h4>Long-Lasting Durability </h4>
                    <p>Designed to withstand extreme external conditions with a factory-backed warranty of upto 10 years.
                    </p>
                </div>
                <div class="col-md-4">
                    
                     <img src="{{ asset('assets/llumar/images/platinum_ppf/why-choose-icons -Stain.png')}}" alt="Stain Resistance" height="56px">
                    <h4>Stain Resistance</h4>
                    <p>Blocks staining from bird droppings, bug splatter, and pollutants.</p> 
                    <!-- <img src="{{ asset('assets/llumar/images/durable.svg')}}" alt=""> -->
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/why-choose-icons -Crystal clear.png')}}" alt="Crystal-Clear Transparency" height="56px">
                    <h4>Crystal-Clear Transparency </h4>
                    <p>Virtually invisible with no texture and distortion, maintaining your car’s original finish</p> 
                </div>
            </div>
        </div>
    </section>

    <!-- features -->
    <section class="features-section features-section-platinum reveal">
        <div class="container">
            <div class="title-section-alignment">
                <label class="title-label-text-size">Features of</label>
                <h2>LLumar Platinum  PPF</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 ps-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-one">
                                <h4>Superior Protection
                                </h4>  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-two">
                                <h4>Stain Resistance 
                               </h4>     
                           </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                           <div class="features-points feature-three">
                                 <h4>Self-Healing Coating </h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-four">
                                 <h4>Hydrogard Technology
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-five">
                                <h4>Long-Lasting Durability
                                </h4>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-six">
                                <h4>Crystal-Clear Finish
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
                        <img src="{{ asset('assets/llumar/images/full-car.webp')}}" alt="llumar platinum ppf">
                        <p>Covers every painted surface of the vehicle</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <h4>Partial Plus Protection</h4>
            <div class="vehicle-container mb-4">
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-full-bonnet.webp')}}" alt="llumar platinum ppf for full bonnet">
                    <p>FullBonnet</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-cups.webp')}}" alt="llumar platinum ppf for doo cups">
                    <p>Door Cups</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-side-mirrors.webp')}}" alt="llumar platinum ppf for side mirrors">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-rear-front-bumper.webp')}}" alt="llumar platinum ppf for rear & front bumpers">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-edge.webp')}}" alt="llumar platinum ppf for door edge guards">
                    <p>Door Edges Guards</p>
                </div>
            </div>
            <!--  -->
            <h4>Basic Partial Protection</h4>
            <div class="vehicle-container">
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-cups.webp')}}" alt="llumar platinum">
                    <p>Door Cups</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-side-mirrors.webp')}}" alt="llumar platinum ppf for side mirrors">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-rear-front-bumper.webp')}}" alt="llumar platinum ppf for rear & front bumpers">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-edge.webp')}}" alt="llumar platinum ppf for door edges guards">
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
                <h2>Platinum PPF Gallery</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                </div>
            </div>
            <div class="row  mt-4 d-flex g-3 "> 
                <div class="col-md-3" >
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/1.png') }}" class="w-100 gallery-img" alt="llumar platinum ppf">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/2.png') }}" class="w-100 gallery-img" alt="platinum paint protection film">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/3.png') }}" class="w-100 gallery-img" alt="platinum paint protection film">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/4.png') }}" class="w-100 gallery-img" alt="platinum paint protection">
                </div>
            </div>
        
            <div class="row  mt-4 d-flex g-3">
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/5.png') }}" class="w-100 gallery-img" alt="llumar platinum">
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
                            <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class=" col-6">
                            <img src="{{ asset('assets/llumar/images/rock-chips.png')}}" alt=" Scratches & Swirl Marks">
                           <p> Scratches &<br>Swirl Marks</p>                            
                            
                        </div>
                        <div class="col-6">
                       
                            <img src="{{ asset('assets/llumar/images/platinum_ppf/protection-rock-chips.png')}}" alt="platinum ppf for Rock Chips & Road Debris">
                            <p>Rock Chips &<br>  Road Debris</p> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img src="{{ asset('assets/llumar/images/paint-fading-staining.png')}}" alt="Paint Damage & Staining">
                            <p>Paint Damage<br> & Staining</p>
                        </div>
                        <div class="col-6">
 
                            <img src="{{ asset('assets/llumar/images/bird-dropping.png')}}" alt="Bug Splatters & Bird Droppings">
                            <p>Bug Splatters<br> & Bird Droppings</p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-8 ">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/protection-sec-photo.webp')}}" class="w-100" alt="llumar platinum ppf">
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
            </div> --}}
            <!--div class="button-view">
                <a href="#" class="btn btn-outline-dark btn-llumar-second">VIEW ALL</a>
            </div-->
            {{-- <div class="mt-4">
                <div class="sliderproducts">
                    <div>
                        <a href="{{route('llumar.automotivePPF')}}">
                            <img src="{{ asset('assets/llumar/images/about-car.webp')}}" class="w-100" alt="">
                            <div class="title-product">
                                <label>Automotive paint protection film </label><br>
                                 <label>A clear PPF that enhances your car’s aesthetics while protecting against scratches, road debris, and environmental damage. --}}
                                {{-- </label>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="{{route('llumar.valorPPF')}}">
                            <img src="{{ asset('assets/llumar/images/about-car.webp')}}" class="w-100" alt="">
                            <div class="title-product">
                                <label>Valor paint protection film </label><br>
                                 <label>A clear PPF that enhances your car’s aesthetics while protecting against scratches, road debris, and environmental damage. --}}
                                {{-- </label>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}

    <!-- section form -->
  
    <!-- related products -->
    <section class="form-section">
        <div class="container reveal">
            <div class="row bg-dark-gray rounded-5 p-3">
                <div class="col-md-4 ps-0">
                    <img src="{{ asset('assets/llumar/images/inquiry-car.webp')}}" class="w-100" alt="llumar platinum ppf">
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
                <label class="title-label-text-size">Frequently Asked Questions (FAQ)</label>
                <h2>About Platinum PPF</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How long does LLumar Platinum PPF last?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    LLumar Platinum PPF is designed to last up to 10 years with proper maintenance. You can check the LLumar Care and Maintenance Guidelines to know more. 
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Is LLumar Platinum PPF noticeable on my car?

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, it is optically clear and designed to blend with your car’s original paint.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can LLumar platinum paint protection film be removed without damaging my paint?

                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, it can be professionally removed without leaving any residue or damage if it is applied on OEM car paint and not on re-painted vehicles.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How does self-healing technology work for LLumar platinum ppf?

                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The self-healing top coat is made up of special elastomeric polymers. A scratch is visible on the car’s surface when the bond of this polymer breaks. With heat, this broken bond rearranges itself, disappearing scratches or swirls.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Does LLumar platinum ppf affect my car’s warranty?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, LLumar PPF is factory-backed and does not void your vehicle’s warranty.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How much does it cost to install LLumar Platinum PPF?

                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
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
    {!! JsValidator::formRequest('App\Http\Requests\SendMessageRequest', '#platinum-ppf-form') !!}
    <script src="{{ asset('assets/llumar/js/image_modal.js')}}"></script>

@endsection