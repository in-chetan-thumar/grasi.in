@extends('llumar.layouts.master')

@section('title')
    Selct black paint protection film
@endsection

@section('content')
    <!-- section hero-image -->
    <section class="hero-section hero-section-selct-black-ppf responsive-desktop">
        <div class="container">
            <div class="title-section title-select-black-ppf">
                <h1>Unmistakable<br>Shine & Style</h1>
                <h6>With Select Black Paint Protection Film</h6>
            </div>
        </div>
    </section>
    <!-- hero section mobile -->
    <section class="hero-section hero-section-selct-black-ppf-mobile responsive-mobile">
        <div class="title-section">
            <h1>Unmistakable<br>Shine & Style</h1>
            <h6>With Select Black Paint Protection Film</h6>
        </div>
        <div>
            <img src="{{ asset('assets/llumar/images/select_black_ppf/LLumar_Select-Black-PPF-Webpage_Banner.jpg')}}"
                class="w-100" alt="">
        </div>
    </section>
    <!-- section hero-image end -->

    <!-- section PPF -->
    <section class="section-ppf section-ppf-select-black-ppf bg-dark-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 p-3 p-md-0 pe-md-5">
                    <h1>LLumar<br>Select Black <br>Paint Protection Film</h1>
                    <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                    </div>
                    <p>Give your car an unmatched upgrade with a sleek, high-gloss black finish that fuels it with
                        sophistication. The Select Black Paint Protection Film offers a deep, mirror-like shine while
                        protecting against scratches, rock chips, and environmental damage. Its self-healing technology and
                        hydrophobic topcoat ensure your car stays showroom-ready while being protected from daily wear and
                        tear.
                    </p>
                </div>
                <div class="col-12 col-md-6 mt-md-5">
                    <div class="ppf-image ppf-image-select-black-ppf  position-relative">
                        <img src="{{ asset('assets/llumar/images/select_black_ppf/LLumar_Select-Black-PPF-Webpage_2.jpg')}}"
                            class="w-100 img-fluid" alt="">
                        <img src="{{ asset('assets/llumar/images/select_black_ppf/LLumar_Select-Black-PPF-Webpage_1.jpg')}}"class="film-img img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why choose section -->
    <section class="why-choose why-choose-select-black-ppf reveal">
        <div class="container">
            <div>
                <label class="title-label-text-size">Why Choose</label>
                <h2>LLumar Select Black PPF</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <!-- ppf -->
            <div class="row why-choose-points">
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/protection.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/select_black_ppf/Satin-Matte-Finish.png')}}" alt=""
                        height="56px">
                    <h4>Ultra-Glossy Black Finish </h4>
                    <p>This product gives a deep, smooth black gloss finish, unlike black vinyl wraps, which may lead to distortions.</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/select_black_ppf/Self-Healing.png')}}" alt="" height="56px">
                    <h4>Self-Healing Technology </h4>
                    <p>Removes minor scratches and swirl marks when exposed to heat.</p>
                    <!-- <img src="{{ asset('assets/llumar/images/metallized_window_film/icon/2.png')}}" alt=""> -->
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/select_black_ppf/Stain.png')}}" alt="" height="56px">
                    <h4>Stain Resistance</h4>
                    <p> Protects against fading, yellowing, and contaminants like road grime and bird droppings.</p>
                </div>
            </div>
            <div class="row mt-2  why-choose-points">
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/select_black_ppf/Hydrophobic-Surface.png')}}" alt=""
                        height="56px">
                    <h4>Hydrophobic Surface </h4>
                    <p> Repels dirt, water, and stains, making it easier to clean and maintain.
                    </p>
                </div>
                <div class="col-md-4">

                    <!-- <img src="{{ asset('assets/llumar/images/durable.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/select_black_ppf/Seamless-Application.png')}}" alt=""
                        height="56px">
                    <h4>Precision Fit & Optical Clarity</h4>
                    <p>A virtually clear layer that comes with seamless application and a flawless finish.
                    </p>
                </div>
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/durable.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/select_black_ppf/Repainting.png')}}" alt=""
                        height="56px">
                    <h4>No Repainting Required  </h4>
                    <p> Ideal for restyling your car with a bold, custom look without the hassle of paint.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- features -->
    <section class="features-section features-section-select-black-ppf reveal">
        <div class="container">
            <div class="title-section-alignment">
                <label class="title-label-text-size">Features of</label>
                <h2>LLumar  Select Black PPF</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 ps-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-one">
                                <h4>Ultimate Protection</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-two">
                                <h4>Self-Healing Coating</h4>
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
                                <h4>Hydrophobic Surface</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="features-points feature-five">
                                <h4>Factory-Backed Durability</h4>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="features-points feature-five">
                                <h4>Optical Clarity & Ultra-Glossy </h4>
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
                <h2>Metallized Window Films Gallery</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
            </div>
            <div class="row mt-4 d-flex g-3">
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/1.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/2.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/3.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/4.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/5.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/6.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/7.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('assets/llumar/images/metallized_window_film/gallery/8.png') }}"
                        class="img-fluid gallery-img" alt="Metallized window films">
                </div>
                <!-- Continue other images similarly -->
            </div>
        </div>
    </section> --}}
    <!-- Image Modal -->
    {{-- <div id="imageModal" class="image-modal">
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
                            <img src="{{ asset('assets/llumar/images/select_black_ppf/Scratches.png')}}" alt="">
                            <p class="mt-3">Scratches & <br>Swirl Marks</p>
                        </div>
                        <div class="col-6 com-md-4">
                            <img src="{{ asset('assets/llumar/images/select_black_ppf/Chips.png')}}" alt="">
                            <p class="mt-3">Rock Chips &  <br> Road Debris

                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 com-md-4">
                            <img src="{{ asset('assets/llumar/images/select_black_ppf/Paint.png')}}" alt="">
                             <p class="mt-3">Paint Fading &<br>  Discoloration</p>
                        </div>
                        <div class="col-6 com-md-4">

                            <img src="{{ asset('assets/llumar/images/select_black_ppf/Bird.png')}}" alt="">
                                <p class="mt-3">Bug Splatters & <br> Bird Droppings
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('assets/llumar/images/select_black_ppf/LLumar_Select-Black-PPF-Webpage_5.jpg')}}" class="w-100"
                        alt="">
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
                            'id' => 'select-black-ppf',
                            'class' => 'select-black-ppf',
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
                                {!! Form::hidden('subject', 'Select black paint protection film') !!}
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
                <h2> About LLumar Select Black PPF</h2>
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
                                   How long does LLumar Select Black PPF last?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   LLumar Select Black PPF is designed to last up to 10 years with proper maintenance.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Will LLumar Select Black PPF make my car look repainted?

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    No, it offers a high-gloss, factory-like finish without the need for repainting.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can LLumar Select Black PPF be removed without damaging my paint?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Yes, it can be professionally removed without leaving a residue or damage.
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
                                  The self-healing topcoat repairs minor scratches when exposed to heat from the sun or warm water.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                   Does LLumar Select Black PPF affect my car’s warranty?
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
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                  How much does it cost to install LLumar Select Black PPF?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   Pricing varies based on coverage area and vehicle type. Fill out our contact form for a customized quote.
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
    {!! JsValidator::formRequest('App\Http\Requests\SendMessageRequest', '#select-black-ppf') !!}
    <script src="{{ asset('assets/llumar/js/image_modal.js')}}"></script>
@endsection