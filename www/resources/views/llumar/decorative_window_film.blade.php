@extends('llumar.layouts.master')

@section('title')
    Decorative window film
@endsection

{{-- SEO --}}
@section('seo')

@endsection

@section('content')
    <!-- section hero-image -->
    <section class="hero-section hero-section-decorative-window-film  responsive-desktop">
        <div class="title-section title-section-dyed-window-film">

        </div>
        <!-- <div>
                                    <img src="{{ asset('assets/llumar/images/slider-car-new.jpg')}}" class="w-100" alt="">
                                </div> -->
    </section>
    <!-- hero section mobile -->
    <section class=".hero-section hero-section-decorative-window-film  responsive-mobile">
        <div class="title-section">

        </div>
        <div>
            <img src="{{ asset('assets/llumar/images/decorative_window_film/LLumar_Decorative-Window-Film_Banner.jpg')}}"
                class="w-100" alt="">
        </div>
    </section>
    <!-- section hero-image end -->

    <!-- section PPF -->
 <section class="section-ppf bg-dark-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 p-3 p-md-0 pe-md-5">
                <h1>LLumar <br> Decorative Window Film</h1>
                <div class="title-divider mb-3">
                    <img src="{{ asset('assets/llumar/images/dash.svg') }}" alt="">
                </div>
                <p>
                      Enhance the privacy level, look, or mood of any room with premium decorative window film for
                    residential and commercial spaces. With a variety of styles, inspired by current design trends,
                    these films can complement interiors ranging from traditional to contemporary. A stylish route to
                    the protection of your interior space, the films add texture and a new dimension to your home or
                    office, all while keeping harsh glare from the sun away. The film also preserves your privacy,
                    contributing to the comfort of all occupants with an aesthetic touch.
                </p>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-5">
                <div class="ppf-image  position-relative">
                     <img src="{{ asset('assets/llumar/images/decorative_window_film/LLumar_Decorative-Window_banner_1.jpg')}}"
                        class="w-100 img-fluid" alt="">
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/LLumar_Decorative-Window_banner_2.jpg')}}"
                        class="film-img" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- why choose section -->
    <section class="benefits benefits-decorative reveal">
        <div class="container">
            <div>
                <label class="title-label-text-size mt-4 mb-3">Benefits of </label>
                <h2>Decorative Window Film</h2>
                <div class="title-divider">
                    {{-- <img
                        src="{{ asset('assets/llumar/images/decorative_window_film/LLumar_Decorative-Window-Film_8.jpg ')}}"
                        alt=""> --}}
                </div>
            </div>
            <!-- ppf -->
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/Designer-Style.png')}}" alt=""
                        height="56px">
                    <h4>Designer Style</h4>
                    <p> Express yourself, create a mood, or update the look of a room with a subtle or dramatic film.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/Added-Privacy.png')}}" alt=""
                        height="56px">
                    <h4>Added Privacy</h4>
                    <p>Completely shield or partially obscure views with a range of privacy levels.
                    </p>
                    <!-- <img src="{{ asset('assets/llumar/images/dyed_window_film/icon/2.png')}}" alt=""> -->

                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/Hidden-Views.png')}}" alt=""
                        height="56px">
                    <h4>Hidden Views</h4>
                    <p> If you can’t change an unsightly outdoor view, you can conceal it without sacrificing sunlight.
                    </p>
                </div>
            </div>
            <div class="row mt-2  why-choose-points">
                <div class="col-md-4">
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/Specialty-Effects.png')}}" alt=""
                        height="56px">
                    <h4>Specialty Effects </h4>
                    <p> Get the look of etched, textured or fluted glass, minus the hassle and expense of replacement.
                    </p>
                </div>
                <div class="col-md-4">

                    <!-- <img src="{{ asset('assets/llumar/images/durable.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/Light-Filtering.png')}}" alt=""
                        height="56px">
                    <h4>Light Filtering</h4>
                    <p>Soften bright, direct light for better aesthetics and a more eye-friendly environment.
                    </p>
                </div>
                <div class="col-md-4">
                    <!-- <img src="{{ asset('assets/llumar/images/glare.svg')}}" alt=""> -->
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/Easy-Updates.png')}}" alt=""
                        height="56px">
                    <h4>Easy Updates</h4>
                    <p>Keep decorative film until you’re ready for a change – it’s durable and easy to add or remove.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- features -->

    <section class="feature-section-decorative-solar bg-dark-gray py-5">
        <div class="container reveal">
            <div class="row   align-items-center">
                 <label class="title-label-text-size">Types of </label><h2>Decorative Window Film</h2>
                <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
                <div class="col-md-6 mt-3  feature-one feature-section-container text-white">
                   
                    <h2 class="feature-section-heading ">Matte Film</h2>
                      <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
                    <p class="feature-section-desc">
                        Our collection of understated, premium-look frost variations can harmonize with homes
                        ranging from historic to modern. Any style you choose will add privacy and softly diffuse light.
                    </p>
                    <h5 class="text-white font-weight-bold mt-4">Benefits</h5>
                    <ul class="feature-section-benefits">
                        <li>Soft, frosted glass look</li>
                        <li>Maintains natural light flow</li>
                        <li>Enhances daytime privacy</li>
                        <li>Cost-effective etched glass alternative</li>
                    </ul>
                </div>

                <!-- Right: Image -->
                <div class="col-md-6">
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/LLumar_Decorative-Window-Film_4.jpg')}}"
                        class="img-fluid rounded shadow" alt="Matte Film Example">
                </div>
            </div>
            <!-- Section 2: Pattern Film -->
            <div class="row align-items-center flex-row-reverse ">
                <div class="col-md-6  mt-5  feature-two feature-section-container text-white">
                   
                    <h2 class="feature-section-heading  ">Pattern Film</h2>
                      <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
                    <p class="feature-section-desc">
                        Our striking geometric patterns offer a variety of coverage levels and styles, from playful dots to
                        soothing stripes. Attract attention, distract from clutter, or create privacy with your favorite
                        pattern.
                    </p>
                    <h5 class="text-white font-weight-bold mt-4">Benefits</h5>
                    <ul class="feature-section-benefits">
                        <li>Stylish dots and lines</li>
                        <li>Decorative yet functional</li>
                        <li>Adjustable privacy levels</li>
                        <li>Easy to apply/remove</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/LLumar_Decorative-Window-Film_6.jpg') }}"
                        class="img-fluid rounded shadow" alt="Pattern Film">
                </div>
            </div>

            <!-- Section 3: Graphic Art Film -->
            <div class="row  align-items-center">
                <div class="col-md-6 mt-5  feature-three feature-section-container matte-container text-white">
                   
                    <h2 class="feature-section-heading ">Graphic Art Film</h2>
                      <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
                    <p class="feature-section-desc">
                        Graphic Art Film: Graphic Art Film transforms plain glass into a creative canvas with custom
                        designs, logos, or imagery—perfect for making a bold visual statement in any space.

                    </p>
                    <h5 class="text-white font-weight-bold mt-4">Benefits</h5>
                    <ul class="feature-section-benefits">
                        <li>Fully customizable designs</li>
                        <li>Great for logos or art
                        </li>
                        <li>Creative space transformation
                        </li>
                        <li>Ideal for branding
                        </li>
                    </ul>
                </div>

                <!-- Right: Image -->
                <div class="col-md-6">
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/LLumar_Decorative-Window-Film_5.jpg')}}"
                        class="img-fluid rounded shadow" alt="Matte Film Example">
                </div>
            </div>

            <!-- Section 4: Coloured Film -->
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-6 mt-5 feature-four  feature-section-container text-white mt-5">
                    
                    <h2 class="feature-section-heading ">Coloured Film</h2>
                      <div class="title-divider">
                    <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                </div>
                    <p class="feature-section-desc">
                        Create an architectural feature, enhance privacy, or even hide unsightly clutter with this film
                        series. We offer a range of warm and cool frosted tones to enhance your home.
                    </p>
                    <h5 class="text-white font-weight-bold mt-4">Benefits</h5>
                    <ul class="feature-section-benefits">
                        <li>Adds color to glass</li>
                        <li>Subtle mood tones</li>
                        <li>Stylish privacy solution</li>
                        <li>Blocks harmful UV rays</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/LLumar_Decorative-Window-Film_7.jpg') }}"
                        class="img-fluid rounded shadow" alt="Coloured Film">
                </div>
            </div>


        </div>
    </section>

   
    <section class="form-section">
        <div class="container reveal">
            <div class="row bg-dark-gray rounded-5 p-3">
                <div class="col-md-4 ps-0">
                    <img src="{{ asset('assets/llumar/images/decorative_window_film/form_image.png')}}" class="w-100" alt="">
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
                <h2> About LLumar Decorative Window Film
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
                                    What is decorative window film?

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                     It’s a stylish protective film applied to glass surfaces to enhance privacy, filter light, and increase the aesthetic value of any space.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Does it offer privacy?

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                   Yes, they are designed to offer privacy with an aesthetic value.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                   Will it block natural light?

                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  No, our films are made to diffuse light while maintaining a bright and pleasant atmosphere indoors.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                     Can I use it in both homes and offices?

                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                 Yes, these films are designed to work great for commercial and residential spaces.


                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                 Can I customize the film with my logo or design?


                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                 
 Yes, Graphic Art Films can be fully customizable for branding and other requirements.

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item reveal">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Does decorative film reduce UV exposure?

                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                  Yes, they block harmful UV rays to protect interiors.

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