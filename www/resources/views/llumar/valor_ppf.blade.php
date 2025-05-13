@extends('llumar.layouts.master')

@section('title')
    Valor paint protection film
@endsection

{{-- SEO  --}}
@section('seo')
<title>LLumar Valor PPF | Valor Paint Protection Film by Gras-i</title>
    <meta name="description" content="Protect your car with LLumar valor paint protection film — offered by Grasi in India. Get advanced self-healing valor PPF with ceramic-like shine and lasting durability. Available through dealers across India for lasting vehicle protection." />
    <meta name="keywords" content="valor paint protection film, valor protection film, valor ppf, llumar valor ppf, dealer, india, grasi" />
    
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 day" />
    <meta name="language" content="English" />
    <meta name="generator" content="N/A" />
    <meta property="og:title" content="LLumar Valor PPF | Valor Paint Protection Film by Gras-i" />
    <meta property="og:description" content="Protect your car with LLumar valor paint protection film — offered by Grasi in India. Get advanced self-healing valor PPF with ceramic-like shine and lasting durability. Available through dealers across India for lasting vehicle protection." />
    <meta property="og:url" content="https://www.grasi.in/automotive-ppf/valor" />
    <meta property="og:image" content="https://www.grasi.in/assets/llumar/images/valor_ppf/about-photo-sec.webp" />
    <meta property="og:site_name" content="LLumar by Gras-i" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="LLumar Valor PPF | Valor Paint Protection Film by Gras-i" />
    <meta name="twitter:description" content="Protect your car with LLumar valor paint protection film — offered by Grasi in India. Get advanced self-healing valor PPF with ceramic-like shine and lasting durability. Available through dealers across India for lasting vehicle protection." />
    <meta name="twitter:image" content="https://www.grasi.in/assets/llumar/images/valor_ppf/about-photo-sec.webp" />
    <meta name="twitter:url" content="https://www.grasi.in/automotive-ppf/valor" />

    <link rel="canonical" href="https://www.grasi.in/automotive-ppf/valor" />

@endsection

@section('content')

    <!-- section hero-image -->
    <section class="hero-section  hero-section-valor responsive-desktop">
        <div class="title-section title-section-valor">
            <h1>Keep Your Car’s<br>Paint Flawless</h1>
            <h6>With Valor Paint Protection Film</h6>
            {{-- <img src="{{ asset('assets/llumar/images/valor_ppf/hero-cover.webp')}}" class="w-100" alt="valor paint protection film"> --}}
        </div>
    </section>

    <!-- hero section mobile -->
    <section class="hero-section  hero-section-valor  responsive-mobile">
        <div class="title-section">
            <h1>Keep Your Car’s<br>Paint Flawless</h1>
            <h6>With Valor Paint Protection Film</h6>
        </div>
        <div>
            <img src="{{ asset('assets/llumar/images/valor_ppf/hero-cover.webp')}}" class="w-100" alt="valor paint protection film">
        </div>
    </section>
    <!-- section hero-image end -->

    <!-- section PPF -->
    <section class="section-ppf bg-dark-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 pe-md-5">
                    <h1>Valor  <br> Paint Protection Film</h1>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                    </div>
                    <p>Keep your car protected and as good as new with the LLumar valor paint protection film. This LLumar valor ppf combines the best of both worlds—the self-healing defense of premium PPF with the seamless maintenance of a ceramic-style coating. The highly durable valor PPF safeguards your car’s paint against chips, scratches, and environmental damage while retaining its shine. It promises superior stain resistance, hydrophobic technology, and a glossy finish that retains its aesthetic appeal.</p>
                </div>
                <div class="col-md-6">
                    <div class="ppf-image">
                        <img src="{{ asset('assets/llumar/images/valor_ppf/about-photo.webp')}}" class="w-100" alt="llumar valor ppf">
                        <img src="{{ asset('assets/llumar/images/valor_ppf/about-photo-sec.webp')}}" class="film-img" alt="llumar valor ppf">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why choose section -->
    <section class="why-choose why-choose-valor reveal">
        <div class="container">
            <div>
                <label class="title-label-text-size">Why Choose</label>
                <h2>LLumar Valor PPF</h2>
                
            </div>
            <!-- ppf -->
            <div class="row why-choose-points">
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/protection.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/valor_ppf/easy-to-clean.png')}}" alt="llumar valor ppf with easy-to-clean surface" height="56px">
                    <h4>Easy-to-Clean Surface</h4>
                    <p>Our patented Tetrashield technology enhances the film’s stain resistance and hydrophobicity, which repels dirt and water.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/valor_ppf/Crystal clear.png')}}" alt="llumar valor ppf for ultra-glossy finish" height="56px">
                    <h4>Ultra-Glossy Finish</h4>
                    <p> Enhances your car’s paint with an optically clear finish and smooth shine.
                        </p> 
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/valor_ppf/Self Healing-1.png')}}" alt="llumar valor ppf for advanced durability" height="56px">
                    <h4>Advanced Durability </h4>
                    <p>Protects against rock chips, road debris, mud splatters, and tar marks, increasing its life upto 12 years.
                    </p> 
                </div>
                </div>
            
            <div class="row mt-2">
                <div class="col-md-4">
                   <!-- <img src="{{ asset('assets/llumar/images/glare.svg')}}" alt=""> -->
                   <img src="{{ asset('assets/llumar/images/valor_ppf/Customized fir.png')}}" alt="Customized Fit" height="56px">
                   <h4>Customized Fit</h4>
                   <p> Made to fit your vehicle seamlessly by adding a layer of invisible yet strong protection. 
                   </p>
                  
                </div>
                <div class="col-md-4">
                      <img src="{{ asset('assets/llumar/images/valor_ppf/stain.png')}}" alt="Stain & Fade Resistance" height="56px">
                    <h4>Stain & Fade Resistance </h4>
                    <p>Offers superior protection against acid rain, tree sap, and bird droppings.
                    </p> 
                    
                       <!-- <img src="{{ asset('assets/llumar/images/durable.svg')}}" alt=""> -->
                </div>
                <div class="col-md-4">
                      <!-- <img src="{{ asset('assets/llumar/images/self-healing.svg')}}" alt=""> -->
                     <img src="{{ asset('assets/llumar/images/valor_ppf/Self Healing.png')}}" alt="LLUmar valor ppf know for self healing technology" height="56px">
                     <h4>Self Healing Technology</h4>
                     <p>Vanishes minor scratches and swirl marks when exposed to the sun or warm water.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- features -->
    <section class="features-section features-section-valor reveal">
        <div class="container">
            <div class="title-section-alignment">
                <label class="title-label-text-size">Features of</label>
                <h2>LLumar Valor PPF</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
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
                        <img src="{{ asset('assets/llumar/images/full-car.webp')}}" alt="get full vehicle Coverage with llumar valor ppf">
                        <p>Covers every painted surface of the vehicle</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <h4>Partial Plus Protection</h4>
            <div class="vehicle-container mb-4">
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-full-bonnet.webp')}}" alt="llumar valor ppf for fullBonnet">
                    <p>FullBonnet</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-cups.webp')}}" alt="llumar valor ppf for door cups">
                    <p>Door Cups</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-side-mirrors.webp')}}" alt="llumar valor ppf for side mirrors">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-rear-front-bumper.webp')}}" alt="llumar valor ppf for Rear & Front Bumpers">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-edge.webp')}}" alt="llumar valor ppf for Door Edges Guards">
                    <p>Door Edges Guards</p>
                </div>
            </div>
            <!--  -->
            <h4>Basic Partial Protection</h4>
            <div class="vehicle-container">
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-cups.webp')}}" alt="llumar valor ppf for Door Cups">
                    <p>Door Cups</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-side-mirrors.webp')}}" alt="llumar valor ppf for side mirrors">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-rear-front-bumper.webp')}}" alt="llumar valor ppf for rear 7 front bumpers">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-edge.webp')}}" alt="llumar valor ppf for door edges guards">
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

    <section class="gallery-section bg-dark-gray">
        <div class="container reveal">
            <div>
                <h2>Valor PPF Gallery</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row  mt-4 d-flex g-3 "> 
                <div class="col-md-3" >
                    <img src="{{ asset('assets/llumar/images/valor_ppf/1.png') }}" class="w-100 gallery-img" alt="Valor PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/valor_ppf/2.png') }}" class="w-100 gallery-img" alt="Valor PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/valor_ppf/3.png') }}" class="w-100 gallery-img" alt="Valor PPF">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/valor_ppf/4.png') }}" class="w-100 gallery-img" alt="Valor PPF">
                </div>
            </div>
        
            <div class="row  mt-4 d-flex g-3">
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/valor_ppf/5.png') }}" class="w-100 gallery-img" alt="Valor PPF">
                </div>
                
            </div>
            </div>
        </div>
    </section>
  
    
    <!-- Image Modal -->
    <div class="row">
        <div id="imageModal" class="image-modal col-6">
            <span class="close-modal">&times;</span>
            <button class="nav-btn prev-btn">&lt;</button>
            <div class="square-image-container">
                <img class="modal-content" id="expandedImg">
            </div>
            <button class="nav-btn next-btn">&gt;</button>
        </div>
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
                        <div class="col-6">
                            <img src="{{ asset('assets/llumar/images/rock-chips.png')}}" alt=""class="mb-2">
                            <p>Rock Chips<br>& Scratches</p>
                        </div>
                        <div class="col-6">
                           <img src="{{ asset('assets/llumar/images/valor_ppf/protection-against-icon.png')}}" alt=""class="mb-2">
                            <p>Acid Rain &<br>UV Damage</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <!-- <img src="{{ asset('assets/llumar/images/paint-fading-staining.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/platinum_ppf/protection-rock-chips.png')}}" alt="" class="mb-2">
                            <p>Road Debris &<br>Salt Corrosion </p>
                        </div>
                        <div class=" col-6">
                            <!-- <img src="{{ asset('assets/llumar/images/bird-dropping.svg')}}" alt=""> -->
                            <img src="{{ asset('assets/llumar/images/bird-dropping.png')}}" alt="" class="mb-2">
                            <p>Bird Droppings& <br>Tree Sap</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('assets/llumar/images/platinum_ppf/about-side-photo-two.webp')}}" class="w-100" alt="">
                    
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
                                <label>A clear PPF that enhances your car’s aesthetics while protecting against scratches, road debris, and environmental damage.
                                </label>
                            </div>
                        </a>
                    </div>
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
                </div>
            </div>
        </div>
    </section> --}}

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
                                    '1' => 'Paint Protection Film',
                                    '2' => 'Automotive Window Film',
                                    '3' => 'Architectural Window Film',
                                ], null, [
                                    'class' => 'form-select custom-select  ',
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
                <h2>About Valor PPF</h2>
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
    <script src="{{ asset('assets/llumar/js/image_modal.js')}}"></script>
@endsection