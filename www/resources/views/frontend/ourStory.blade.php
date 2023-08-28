{{-- extend master layout  --}}
@extends('frontend.layout.master')

{{-- Our Story title  --}}
@section('title') Our Story | Gras-I  @endsection

{{-- Our Story main content  --}}
@section('content')


<section class="p0 inner_page our_story_page">
    <section class="inner_banner p0" style="background:url({{ asset('assets/frontend/images/ourstory_banner.webp')}});background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="row">
                        <div class="col-10 col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <figcaption>
                                <h2>Pioneers of Smart Surface<br> Solutions that are Transformative, Versatile, & Sustainable</h2>
                            </figcaption>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="page_middle_desc">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-9">
                    <div class="text-center">
                        <p>Founded in 1997, we have gained significant experience and expertise in surface solutions over the past two decades. As a reputable player in the industry today, we are consistently striving to offer innovative and high-quality solutions that cater to all customer needs while standing head-to-head with future trends.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="journey pt0">
        <div class="container">
            <div class="title_1">
                <div class="title_main">Journey</div>
                <div class="main_arrow">
                    <div class="swiper-button-prev swiper-button-prev-journey">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M14.6 6L16 7.4L11.4 12L16 16.6L14.6 18L8.6 12L14.6 6Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next swiper-button-next-journey">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect width="24" height="24" rx="12" fill="#00A6C0"/>
                            <path d="M9.4 18L8 16.6L12.6 12L8 7.4L9.4 6L15.4 12L9.4 18Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>


            <div class="swiper mySwiper_journey">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure class="journey_box" style="background:url({{ asset('assets/frontend/images/journeyimg1.webp')}});background-repeat: no-repeat;background-position: center;background-size: cover;">
                            <span class="journey_year">1964</span>
                            <figcaption>
                                <span>1964</span>
                                <h2>Laid the Foundation</h2>
                                <p>Established Bhavi Motors in Mumbai which focused on car upholstery as a prime offering.</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="swiper-slide">
                        <figure class="journey_box" style="background:url({{ asset('assets/frontend/images/journeyimg2.webp')}});background-repeat: no-repeat;background-position: center;background-size: cover;">
                            <span class="journey_year">1987</span>
                            <figcaption>
                                <span>1987</span>
                                <h2>A Step Ahead with New Offerings</h2>
                                <p>Added car accessories as a line of offerings alongside car upholstery in Bhavi Motors</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="swiper-slide">
                        <figure class="journey_box" style="background:url({{ asset('assets/frontend/images/journeyimg3.webp')}});background-repeat: no-repeat;background-position: center;background-size: cover;">
                            <span class="journey_year">1999</span>
                            <figcaption>
                                <span>1999</span>
                                <h2>The Beginning of Gras-i</h2>
                                <p>Established Gras Impex Pvt. Ltd. as a pan India distributor for LLumar Window Films.</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="swiper-slide">
                        <figure class="journey_box" style="background:url({{ asset('assets/frontend/images/journeyimg4.webp')}});background-repeat: no-repeat;background-position: center;background-size: cover;">
                            <span class="journey_year">2009</span>
                            <figcaption>
                                <span>2009</span>
                                <h2>Introduced High-Tech Innovations</h2>
                                <p>Plexiglass as its all-India distributor.</p>
                                <p>Krystal Bond, a technology from Japan.</p>
                                <p>Magic Headlamps, a ceramic coating product that rejuvenates headlights.</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="swiper-slide">
                        <figure class="journey_box" style="background:url({{ asset('assets/frontend/images/journeyimg5.webp')}});background-repeat: no-repeat;background-position: center;background-size: cover;">
                            <span class="journey_year">2010</span>
                            <figcaption>
                                <span>2010</span>
                                <h2>Became an OEM Supplier</h2>
                                <p>Undertook the role of an OEM supplier to Maruti Udyog Ltd, Hyundai, Tata Motors, Volkswagen, Honda, and Fiat for LLumar automotive window films.</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="swiper-slide">
                        <figure class="journey_box" style="background:url({{ asset('assets/frontend/images/journeyimg6.webp')}});background-repeat: no-repeat;background-position: center;background-size: cover;">
                            <span class="journey_year">2012 / 2013</span>
                            <figcaption>
                                <span>2012/2013</span>
                                <h2>New Milestones with Surface Solutions</h2>
                                <p>Expanded our architectural line of business, 3M Dinoc Master distributors for West and South India.</p>
                                <p>Started with surface solutions as a concept. - Became all-India distributors for Avery Fleet Graphics products car vinyl wrapping till 2015.</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="swiper-slide">
                        <figure class="journey_box" style="background:url({{ asset('assets/frontend/images/journeyimg1.webp')}});background-repeat: no-repeat;background-position: center;background-size: cover;">
                            <span class="journey_year">2015 / 2016</span>
                            <figcaption>
                                <span>2015/2016</span>
                                <h2>Executed Monumental Security Films Projects</h2>
                                <p>India's largest project at the Pullman Hotel in Aerocity, Delhi with total coverage amounting to 1,58,550 sq ft.</p>
                                <p>Projects for hotels like Lemon Tree, Marriott, Hyatt, and Pride Hotel amounting to more than 2.5 lakh sq. ft of work.</p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="swiper-slide">
                        <figure class="journey_box" style="background:url({{ asset('assets/frontend/images/journeyimg1.webp')}});background-repeat: no-repeat;background-position: center;background-size: cover;">
                            <span class="journey_year">2018 & Now</span>
                            <figcaption>
                                <span>2018 & Now</span>
                                <h2>Executed Monumental Security Films Projects</h2>
                                <p>Launched a unique SCION division that specializes in signage and branding solutions for the retail, corporate, and hospitality spaces.</p>
                                <p>Launched LLumar’s top-of-the-line paint protection films as a prime offering.</p>
                            </figcaption>
                        </figure>
                    </div>

                </div>
            </div>
        </div>
    </section>





    <section class="team pt0" style="background-image: url({{ asset('assets/frontend/images/team_bg.svg')}});background-repeat: no-repeat;background-position:top center;background-size: 100% auto;">
        <div class="container">
            <div class="title_1">
                <div class="title_main">Management Team</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="row g-4 justify-content-center">

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <figure class="team_box">
                                <div class="team_img">
                                    <img src="{{ asset('assets/frontend/images/team/1.png')}}" width="" height="" alt="image">
                                    <figcaption>
                                        <h2>Suryakant<br> Zaveri</h2>
                                        <p>Chairman</p>
                                    </figcaption>
                                </div>
                            </figure>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <figure class="team_box">
                                <div class="team_img">
                                    <img src="{{ asset('assets/frontend/images/team/2.png')}}" width="" height="" alt="image">
                                    <figcaption>
                                        <h2>Sanjiv<br> Zaveri</h2>
                                        <p>Founder & Managing Director</p>
                                    </figcaption>
                                </div>
                            </figure>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <figure class="team_box">
                                <div class="team_img">
                                    <img src="{{ asset('assets/frontend/images/team/3.png')}}" width="" height="" alt="image">
                                    <figcaption>
                                        <h2>Siddharth<br> Zaveri</h2>
                                        <p>Marketing Director</p>
                                    </figcaption>
                                </div>
                            </figure>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <figure class="team_box">
                                <div class="team_img">
                                    <img src="{{ asset('assets/frontend/images/team/4.png')}}" width="" height="" alt="image">
                                    <figcaption>
                                        <h2>Shobhit<br> Zaveri</h2>
                                        <p>Customer Relationships</p>
                                    </figcaption>
                                </div>
                            </figure>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <figure class="team_box">
                                <div class="team_img">
                                    <img src="{{ asset('assets/frontend/images/team/5.png')}}" width="" height="" alt="image">
                                    <figcaption>
                                        <h2>Director Ashok<br> Singh</h2>
                                        <p>Sales Director</p>
                                    </figcaption>
                                </div>
                            </figure>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <figure class="team_box">
                                <div class="team_img">
                                    <img src="{{ asset('assets/frontend/images/team/6.png')}}" width="" height="" alt="image">
                                    <figcaption>
                                        <h2>Bharat<br> Pandya</h2>
                                        <p>Accounts</p>
                                    </figcaption>
                                </div>
                            </figure>
                        </div>


                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <figure class="team_box">
                                <div class="team_img">
                                    <img src="{{ asset('assets/frontend/images/team/7.png')}}" width="" height="" alt="image">
                                    <figcaption>
                                        <h2>Binita<br> Zaveri</h2>
                                        <p>Administrative Director</p>
                                    </figcaption>
                                </div>
                            </figure>
                        </div>







                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mission">
        <div class="container">

            <div class="mission_row">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-9">
                                <div class="mission_img">
                                    <img src="{{ asset('assets/frontend/images/missionimg1.webp')}}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-11">
                                <div class="mission_cnt">
                                    <div class="title_1 text-left">
                                        <div class="title_main">Mission</div>
                                    </div>
                                    <p>As a company whose prime focus has always been customer satisfaction, our mission is to provide excellence through total Integrity, professionalism and dedication. </p>

                                    <p>We offer intelligent surface solutions that are not only premium in nature and offer optimum functional value but are also available at mass-affordable prices. As a part of our mission, we make sure we continue to deliver the quality, execution, and service that we are known for.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mission_row">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row justify-content-end">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-9">
                                <div class="mission_img">
                                    <img src="{{ asset('assets/frontend/images/missionimg2.webp')}}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-11">
                                <div class="mission_cnt">
                                    <div class="title_1 text-left">
                                     <div class="title_main">Vision</div>
                                    </div>
                                    <p>Since our inception, we have been generating and delivering intelligent, innovative, and functional solutions, which has made us a reputable name in the architectural and automotive industry. </p>
                                    <p>Today, as we continue to provide state-of-the-art materials and services, we hold a vision to make it all aesthetically and technologically superior.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</section>

{{-- include footer  --}}
@include('frontend.layout.footer')


@endsection


{{-- js  --}}
@section('js')
  <script>
     var swiperjourney = new Swiper(".mySwiper_journey", {

    speed: 1000,

  	  //loop: true,
      slidesPerView: 5,
      spaceBetween:11,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
       navigation: {
        nextEl: '.swiper-button-next-journey',
        prevEl: '.swiper-button-prev-journey',
      },
      breakpoints: {
        992: {
          slidesPerView: 5,
        },
        991: {
          slidesPerView: 4,
          centeredSlides: true,
        },
        575: {
          slidesPerView: 4,
          centeredSlides: true,
        },
        480: {
          slidesPerView: 3,
          centeredSlides: true,
        },
        0: {
          slidesPerView: 2,
          centeredSlides: true,
        },
    }
    });
  </script>
@endsection
