@extends('llumar.layouts.master')

@section('title')
    Authorize Fitment Center
@endsection

@section('content')

    <!-- section hero-image -->
    <section class="hero-section  hero-section-afc responsive-desktop">
        <div class="title-section title-section-valor">
            {{-- <h1><br>Paint Flawless</h1>
            <h6>With Valor Paint Protection Film</h6> --}}
            {{-- <img src="{{ asset('assets/llumar/images/valor_ppf/hero-cover.webp')}}" class="w-100"
                alt="valor paint protection film"> --}}
        </div>
    </section>

    <!-- hero section mobile -->
    <section class="hero-section hero-section-afc   responsive-mobile">
      
        <div>
            <img src="{{ asset('assets/llumar/images/afc/LLumar_LLumar-AFC_Banner.jpg')}}" class="w-100"
                alt="valor paint protection film">
        </div> 
    </section>
    <!-- section hero-image end -->

    <!-- section PPF -->
    <section class="section-ppf  section-ppf-afc bg-dark-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 pe-md-5">
                    <h1>What is a<br> LLumar AFC?</h1>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                    </div>
                    <p>
                    <strong>LLumar AFCs</strong> (Authorised Fitment Centres) are a 
                        <strong>select league of elite LLumar partners</strong> across India, handpicked 
                        for their excellence in installing LLumar’s <strong>premium Paint Protection Films (PPF)</strong> 
                        and <strong>Window Films</strong>.
                    </p>
                    <p>
                        An AFC isn’t just another dealer — it’s a centre of 
                        <strong>credibility, expertise, and trust</strong>. What makes them elite?
                    </p>
                    <ul class="afc-feature-list">
                        <li>Years of experience working with high-end automotive films</li>
                        <li>A highly skilled, <strong>meticulous installation team</strong> trained for precision</li>
                        <li>Sleek and professional infrastructure with <strong>LLumar’s signature branding</strong></li>
                        <li>Verified, authentic LLumar products — <strong>no duplication, no compromise</strong></li>
                    </ul>
                    <p>
                        Each AFC proudly carries the <strong>badge of authenticity</strong>, setting the standard 
                        for quality and integrity in an industry where counterfeit materials and misinformation are common.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="ppf-image">
                        <img src="{{ asset('assets/llumar/images/afc/LLumar_LLumar-AFC_1.jpg')}}" class="w-100"
                            alt="llumar valor ppf">
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why choose section -->
    <section class="why-choose why-choose-afc reveal">
        <div class="container">
            <div class="why-chhoose-heading ">
                <label class="title-label-text-size">Why Choose</label>
                <h2> LLumar AFC's in India?</h2>
                 <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
                <p class="mt-4 p-heading" >
                    When it comes to protecting your vehicle, not all options are created equal.<br> Choosing a LLumar AFC means choosing peace of mind, quality, and transparency at every step of your journey.
                </p>
            </div>
            <!-- ppf -->
            <div class="row why-choose-points">
                <div class="col-md-6">
                    <!-- <img src="{{ asset('assets/llumar/images/protection.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/afc/Product-Education-&-Transparency.png')}}"
                        alt="llumar valor ppf with easy-to-clean surface" height="56px">
                    <h4>Product Education & Transparency</h4>
                    <p>Clear, honest, and complete product information <br>— no misleading claims, no grey market risks.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/llumar/images/afc/Certified-Installation.png')}}"
                        alt="llumar valor ppf for ultra-glossy finish" height="56px">
                    <h4>Certified Installation</h4>
                    <p>Enjoy expert application by trained installers using<br> cutting-edge techniques and tools.
                    </p>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <!-- <img src="{{ asset('assets/llumar/images/glare.svg')}}" alt=""> -->
                        <img src="{{ asset('assets/llumar/images/afc/Genuine-Product-Guarantee.png')}}" alt="Customized Fit"
                            height="56px">
                        <h4>Genuine Product Guarantee</h4>
                        <p>  Each install is backed by a digital e-warranty that can<br> be verified directly with LLumar India.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/llumar/images/afc/Customer-First-Experience.png')}}" alt="Stain & Fade Resistance"
                            height="56px">
                        <h4>Customer-First experience</h4>
                        <p> A polished, premium buying experience from<br> start to finish — just as it should be.
                        </p>
                        <!-- <img src="{{ asset('assets/llumar/images/durable.svg')}}" alt=""> -->
                    </div>
                </div>           
        </div>
    </section>

    <!-- features -->
    <section class="features-section features-section-afc reveal">
        <div class="container">
            <div class="title-section-alignment">
                <label class="title-label-text-size">Exclusive Benefits</label>
                <h2>for Customers at LLumar AFCs</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="line icon">
                </div>
            </div>
            <div class="row mt-2"> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature">
                                <h4>Expert Installation</h4>
                                <p>Trained installers backed by years of experience deliver flawless protection for your car.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="features-points feature">
                                <h4>Verified Digital E-Warranty
                                </h4>
                                <p>Your warranty is registered digitally and verified through LLumar India — no paperwork, no doubt.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                           <div class="features-points feature">
                                
                                <h4>Authentic Products</h4>
                                <p>Direct supply from brand-authorised dealers — no middlemen,no risk of tampering, only 100% genuine LLumar films.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature">
                                <h4> Reliable After-Sales Support</h4>
                                <p>Need help post-install? LLumar AFCs offer dependable aftercare, service touch-ups, and guidance.
                                </p>
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
                        <img src="{{ asset('assets/llumar/images/full-car.webp')}}"
                            alt="get full vehicle Coverage with llumar valor ppf">
                        <p>Covers every painted surface of the vehicle</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <h4>Partial Plus Protection</h4>
            <div class="vehicle-container mb-4">
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-full-bonnet.webp')}}"
                        alt="llumar valor ppf for fullBonnet">
                    <p>FullBonnet</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-cups.webp')}}" alt="llumar valor ppf for door cups">
                    <p>Door Cups</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-side-mirrors.webp')}}"
                        alt="llumar valor ppf for side mirrors">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-rear-front-bumper.webp')}}"
                        alt="llumar valor ppf for Rear & Front Bumpers">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-edge.webp')}}"
                        alt="llumar valor ppf for Door Edges Guards">
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
                    <img src="{{ asset('assets/llumar/images/cars-side-mirrors.webp')}}"
                        alt="llumar valor ppf for side mirrors">
                    <p>Side Mirrors</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-rear-front-bumper.webp')}}"
                        alt="llumar valor ppf for rear 7 front bumpers">
                    <p>Rear & Front Bumpers</p>
                </div>
                <h5>+</h5>
                <div>
                    <img src="{{ asset('assets/llumar/images/cars-door-edge.webp')}}"
                        alt="llumar valor ppf for door edges guards">
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
    <section class="gallery-section gallery-section-afc bg-dark-gray  position-relative ">
        <div class="container reveal text-center">
            <div class="title-divider mb-2">
                <img src="{{ asset('assets/llumar/images/dash.svg') }}" alt="">
            </div>
            <h4>LLumar AFCs span across india,</h4>
            <p>bringing authentic car care experiences closer to you.</p>
            <div class="afc-slider mt-4 ">
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_New_Detailing-Dada.jpg') }}" class="img-fluid gallery-img" alt="Detailing Dada">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Perron-Marketers.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Auto-Clinic.jpg') }}" class="img-fluid gallery-img" alt="Detailing Dada">
                </div>
                 <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Autograde.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>

                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Autologix.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Autozville.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Bajoria-Car-Care.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Bob_s-Auto-Mall.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Brown-Bear-Car-Coat.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Car-Art.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Ceramic-Coat.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Detailing-Bull.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Detailing-Xpert.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Detailing-Xpert_1.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Detail-Xpertz.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Fortify-Car-Care.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Mquik.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_My-Tradalink-LLP.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
            

                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_New-Delhi.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Poona-Motors.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Prime-Car-Care.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_RPR-Services.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Studio-J.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Studio-J_1.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>

                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_T&R-Auto.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_THE-DETAILING-STUDIO.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Tyre-Shoppee.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div>
                <div class="afc-card">
                    <img src="{{ asset('assets/llumar/images/afc/profiles/AFC_Profile_Xtreme-Wraps.jpg') }}" class="img-fluid gallery-img" alt="Perron Marketers">
                </div> 
                {{-- Add more slides here --}}
            </div>
            <div class="mt-4 ">
                <a href="{{route('frontend.locate')}}"target="_blank" class="btn btn-danger px-4">CLICK HERE TO LOCATE YOUR NEAREST DEALER</a>
            </div>
            <div class="afc-custom-arrow">
             <button class=" afc-prev d-none">
                <img src="{{ asset('assets/llumar/images/afc/arrowleft.svg') }}" alt="Prev" />
            </button>
            <button class=" afc-next">
                <img src="{{ asset('assets/llumar/images/afc/arrow3.svg') }}" alt="Next" />
            </button>
        </div>
        </div>
       
    
    </section>

    <!-- Image Modal -->
    {{-- <div class="row">
        <div id="imageModal" class="image-modal col-6">
            <span class="close-modal">&times;</span>
            <button class="nav-btn prev-btn">&lt;</button>
            <div class="square-image-container">
                <img class="modal-content" id="expandedImg">
            </div>
            <button class="nav-btn next-btn">&gt;</button>
        </div>
    </div> --}}

   <section class="afc-text-section">
        <div class="container">
            <div class="text-center  reveal">
            
            <div class="container reveal text-center">   
                <p>LLumar AFCs aren't just fitment centers</p>
                <h3 class="mb-5">They're premium destinations for car protection<br>-designed for car lovers, by car experts</h3>
                <div class="title-divider mb-2">
                    <img src="{{ asset('assets/llumar/images/dash.svg') }}" alt="">
                </div>
                <p class="mt-5 with-orange-bg">LLumar. Trusted worldwide.Delivered with Excellence in india</p>
            </div>
            </div>
        </div>
   </section>

    <section class="form-section afc-from-section">
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
                        'id' => 'authorised-fitment-centres',
                        'class' => 'authorised-fitment-centres',
                    ]) !!}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                {!! Form::text('name', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Name',
                                ]) !!}
                                {!! Form::hidden('subject', 'Authorized fitment centres') !!}
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
   
    </section> 
    <button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top">
        <i class="bi bi-arrow-up"></i>
    </button>
@endsection
@section('js')
    {!! JsValidator::formRequest('App\Http\Requests\SendMessageRequest', '#authorised-fitment-centres') !!}
    {{-- <script src="{{ asset('assets/llumar/js/image_modal.js')}}"></script> --}}
    <script src="{{ asset('assets/llumar/js/llumar.js')}}"></script>
     <!-- Slick CSS -->

<script>
    $(document).ready(function () {
        var $slider = $('.afc-slider');

        $slider.on('init', function (event, slick) {
            updateArrows(slick, 0); // Initial call
        });

        $slider.slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            infinite: false,
            arrows: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.afc-next').on('click', function () {
            $slider.slick('slickNext');
        });

        $('.afc-prev').on('click', function () {
            $slider.slick('slickPrev');
        });

        $slider.on('afterChange', function (event, slick, currentSlide) {
            updateArrows(slick, currentSlide);
        });

        function updateArrows(slick, currentSlide) {
            const slidesToShow = slick.options.slidesToShow;
            const totalSlides = slick.slideCount;
           
            // Left Arrow
            if (currentSlide <= 0) {
                $('.afc-prev').addClass('d-none');
            } else {
                $('.afc-prev').removeClass('d-none');
            }

            // Right Arrow - only hide when last visible slide reaches end
            if (currentSlide >= totalSlides - slidesToShow) {
                $('.afc-next').addClass('d-none');
            } else {
                $('.afc-next').removeClass('d-none');
            }
        }
    });
</script>


@endsection