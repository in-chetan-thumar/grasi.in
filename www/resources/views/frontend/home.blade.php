{{-- extend master layout  --}}
@extends('frontend.layout.master')

{{-- home page title  --}}
@section('title') Home | Gras-I @endsection

{{-- home page main content  --}}
@section('content')

{{-- home page main content start --}}

<section class="banner p0">
    <!-- Swiper -->
    <div class="swiper_main_slide">
        <div class="swiper-container-banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img srcset="{{ asset('assets/frontend/images/banner1.webp')}}" src="{{ asset('assets/frontend/images/banner1.webp')}}" alt="image"/>
                    <div class="banner_figcaption">
                        <div class="container">
                            <figcaption>
                                <h2>Protective, Aesthetic &<br> Versatile Films</h2>
                                <p>To elevate the feel and functionality of automobiles and properties.</p>
                            </figcaption>
                        </div>
                    </div>
               </div>


               <div class="swiper-slide">
                   <img srcset="{{ asset('assets/frontend/images/banner2.webp')}}" src="{{ asset('assets/frontend/images/banner2.webp')}}" alt="image"/>
                   <div class="banner_figcaption">
                       <div class="container">
                            <figcaption>
                               <h2>Adding Life to <br>Your Surfaces</h2>
                               <p>To augment their value with high-quality smart surface solutions</p>
                            </figcaption>
                       </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <img srcset="{{ asset('assets/frontend/images/banner3.webp')}}" src="{{ asset('assets/frontend/images/banner3.webp')}}" alt="image"/>
                    <div class="banner_figcaption">
                        <div class="container">
                            <figcaption>
                                <h2>Rendering the Finishing Touch</h2>
                                <p>To a living space with graphic surface</p>
                            </figcaption>
                        </div>
                    </div>
                </div>

            </div>
             <div class="swiper-pagination-banner"></div>
        </div>
    </div>
</section>






<section class="solution">
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-xxl-10">
               <div class="row g-4">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex align-items-center">
                        <div class="title_1 text-left mb-0">
                            <div class="title_main">Solutions<br> We Offer</div>
                            <p>Premium smart surface solutions that<br> create a lasting impact.</p>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <figure class="solution_box hover_box">
                            <a href="https://llumar.com/na/en/architectural/" target="blank"  class="hover_img">
                                <img src="{{ asset('assets/frontend/images/solutionimg1.webp')}}" alt="image">
                                    <figcaption>
                                        <h2>Architectural<br> Films</h2>
                                    </figcaption>
                                </a>
                        </figure>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <figure class="solution_box hover_box">
                             <a href="https://llumar.com/na/en/automotive/" target="blank" class="hover_img">
                                <img src="{{ asset('assets/frontend/images/solutionimg2.webp')}}" alt="image">
                                <figcaption>
                                  <h2>Automotive<br> Films</h2>
                               </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <figure class="solution_box hover_box">
                            <a href="{{ route('frontend.graphic')}}" class="hover_img">
                                <img src="{{ asset('assets/frontend/images/GrayMcLaren.webp')}}" alt="image">
                                <figcaption>
                                    <h2>Graphics</h2>
                                </figcaption>
                            </a>
                        </figure>
                    </div>

                    {{-- whtasp icon  --}}
                    {{-- <a href="https://wa.link/35uzb5" target="_blank" class="" style="">
                            <img src="{{ asset('assets/frontend/images/whatsapp.svg')}}" alt="whatsapp">
                         </a> --}}
                </div>
            </div>
        </div>
    </div>
</section>


{{-- youtub video  --}}
<section class="video p0">
   <a href="https://youtu.be/Kr4SVDffpZk" data-fancybox="group">
       <div class="video_icon">
           <svg viewBox="0 0 462.000000 512.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                     <path d="M175 5105 c-60 -22 -110 -68 -139 -127 l-26 -52 0 -2366 0 -2366 26 -52 c31 -63 81 -106 148 -128 72 -24 141 -14 229 34 40 21 974 546 2077 1166 1250 703 2019 1142 2043 1164 54 53 77 106 77 182 0 76 -23 129 -77 182 -24 22 -793 461 -2043 1164 -1103 620 -2038 1145 -2078 1167 -86 46 -168 57 -237 32z">
                     </path>
                </g>
            </svg>
       </div>
       <img src="{{ asset('assets/frontend/images/videoimg.webp')}}" alt="image">
   </a>
</section>


<section class="p0 middle_main">

    <section class="counter">
        <div class="container">
            <div class="row g-4">

                <div class="col-12 col-xxl-4 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="count_up animate is_done in_view">
                        <p class="number">
                            <span class="value" data-seperator="" data-decimal="0" data-count="6000">6000</span>
                            <span class="suffix">+</span>
                        </p>
                        <p>Cars Protected with LLumar PPF</p>
                    </div>
                </div>

                <div class="col-12 col-xxl-4 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="count_up animate is_done in_view">
                        <p class="number">
                            <span class="value" data-seperator="" data-decimal="0" data-count="20000000">200,00,000</span>
                            <span class="suffix">+</span>
                        </p>
                        <p>sq. ft. of window films</p>
                    </div>
                </div>

                <div class="col-12 col-xxl-2 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="count_up animate is_done in_view">
                         <p class="number">
                                <span class="value" data-seperator="" data-decimal="0" data-count="20">20</span>
                                <span class="suffix">+</span>
                         </p>
                         <p>years of experience</p>
                    </div>
                </div>

                <div class="col-12 col-xxl-2 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="count_up animate is_done in_view">
                        <p class="number">
                            <span class="value" data-seperator="" data-decimal="0" data-count="1000">1000</span>
                            <span class="suffix">+</span>
                        </p>
                        <p>Dealers across India</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="whygrassi">
        <div class="container">
           <div class="row justify-content-center">
               <div class="col-xxl-10">
                   <div class="row g-4 align-items-center flex-row-reverse">
                       <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="whygrass_img">
                               <img src="{{ asset('assets/frontend/images/whygrassimg.webp')}}" alt="image">
                            </div>
                       </div>
                       <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="why_grass">
                                <div class="title_1 text-left">
                                    <div class="title_main">Why Gras-i</div>
                                </div>

                                <ul>
                                    <li>
                                        <div class="whygrass_icn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                <path d="M14.0007 11.6673C16.578 11.6673 18.6673 9.57798 18.6673 7.00065C18.6673 4.42332 16.578 2.33398 14.0007 2.33398C11.4233 2.33398 9.33398 4.42332 9.33398 7.00065C9.33398 9.57798 11.4233 11.6673 14.0007 11.6673Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M24.5 25.668C24.5 19.8691 19.7989 15.168 14 15.168C8.20108 15.168 3.5 19.8691 3.5 25.668" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M13.9993 25.668L16.3327 22.7513L13.9993 15.168L11.666 22.7513L13.9993 25.668Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="whygrass_cnt">
                                            <h2>Veteran Business</h2>
                                            <p>Backed by over 20 years of experience, we come with unparalleled expertise in the market.</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="whygrass_icn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                <path d="M17.5 5.83398C17.5 4.90573 17.1313 4.01549 16.4749 3.35911C15.8185 2.70273 14.9283 2.33398 14 2.33398C13.0717 2.33398 12.1815 2.70273 11.5251 3.35911C10.8687 4.01549 10.5 4.90573 10.5 5.83398V14.0007C10.5 14.9289 10.8687 15.8191 11.5251 16.4755C12.1815 17.1319 13.0717 17.5007 14 17.5007C14.9283 17.5007 15.8185 17.1319 16.4749 16.4755C17.1313 15.8191 17.5 14.9289 17.5 14.0007V5.83398Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M22.2496 10.7007C22.8971 10.0426 23.2584 9.15516 23.2546 8.23184C23.2509 7.30853 22.8824 6.42411 22.2295 5.77122C21.5766 5.11833 20.6922 4.74988 19.7689 4.74612C18.8456 4.74236 17.9582 5.1036 17.3 5.75115L11.525 11.5261C11.2 11.8512 10.9422 12.237 10.7663 12.6617C10.5905 13.0864 10.5 13.5415 10.5 14.0011C10.5001 14.9294 10.8689 15.8197 11.5253 16.476C12.1817 17.1324 13.072 17.5011 14.0003 17.501C14.9286 17.501 15.8188 17.1322 16.4752 16.4757L22.2502 10.7007H22.2496Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M22.1667 17.5C23.0949 17.5 23.9852 17.1313 24.6415 16.4749C25.2979 15.8185 25.6667 14.9283 25.6667 14C25.6667 13.0717 25.2979 12.1815 24.6415 11.5251C23.9852 10.8687 23.0949 10.5 22.1667 10.5H14C13.0717 10.5 12.1815 10.8687 11.5251 11.5251C10.8687 12.1815 10.5 13.0717 10.5 14C10.5 14.9283 10.8687 15.8185 11.5251 16.4749C12.1815 17.1313 13.0717 17.5 14 17.5H22.1667Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M17.3003 22.2496C17.6243 22.5789 18.0104 22.8409 18.4361 23.0203C18.8619 23.1997 19.319 23.293 19.781 23.2949C20.243 23.2968 20.7008 23.2072 21.128 23.0313C21.5553 22.8553 21.9434 22.5965 22.2701 22.2698C22.5968 21.9431 22.8556 21.555 23.0315 21.1278C23.2075 20.7005 23.2971 20.2427 23.2952 19.7807C23.2933 19.3187 23.2 18.8616 23.0206 18.4358C22.8412 18.0101 22.5792 17.624 22.2499 17.3L16.4749 11.525C16.1498 11.2 15.764 10.9422 15.3393 10.7663C14.9147 10.5905 14.4595 10.5 13.9999 10.5C13.5402 10.5 13.0851 10.5906 12.6605 10.7665C12.2358 10.9424 11.85 11.2003 11.525 11.5253C11.2 11.8503 10.9422 12.2362 10.7663 12.6609C10.5905 13.0855 10.5 13.5407 10.5 14.0003C10.5 14.4599 10.5906 14.9151 10.7665 15.3397C10.9424 15.7643 11.2003 16.1502 11.5253 16.4752L17.3003 22.2502V22.2496Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.5 22.1667C10.5 23.0949 10.8687 23.9852 11.5251 24.6415C12.1815 25.2979 13.0717 25.6667 14 25.6667C14.9283 25.6667 15.8185 25.2979 16.4749 24.6415C17.1313 23.9852 17.5 23.0949 17.5 22.1667V14C17.5 13.0717 17.1313 12.1815 16.4749 11.5251C15.8185 10.8687 14.9283 10.5 14 10.5C13.0717 10.5 12.1815 10.8687 11.5251 11.5251C10.8687 12.1815 10.5 13.0717 10.5 14V22.1667Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.75044 17.3003C5.42109 17.6243 5.15915 18.0104 4.97974 18.4361C4.80033 18.8619 4.70699 19.319 4.70511 19.781C4.70323 20.243 4.79284 20.7008 4.96878 21.128C5.14472 21.5553 5.4035 21.9434 5.7302 22.2701C6.05691 22.5968 6.44506 22.8556 6.87227 23.0315C7.29949 23.2075 7.75731 23.2971 8.21933 23.2952C8.68135 23.2933 9.13843 23.2 9.5642 23.0206C9.98996 22.8412 10.376 22.5792 10.7 22.2499L16.475 16.4749C17.1314 15.8184 17.5001 14.9282 17.5 13.9999C17.5 13.0716 17.1312 12.1814 16.4747 11.525C16.1497 11.2 15.7638 10.9422 15.3392 10.7663C14.9145 10.5905 14.4594 10.5 13.9997 10.5C13.0715 10.5001 12.1812 10.8689 11.5249 11.5253L5.75044 17.3003Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.83398 10.5C4.90573 10.5 4.01549 10.8687 3.35911 11.5251C2.70273 12.1815 2.33398 13.0717 2.33398 14C2.33398 14.9283 2.70273 15.8185 3.35911 16.4749C4.01549 17.1313 4.90573 17.5 5.83398 17.5H14.0007C14.9289 17.5 15.8191 17.1313 16.4755 16.4749C17.1319 15.8185 17.5007 14.9283 17.5007 14C17.5007 13.0717 17.1319 12.1815 16.4755 11.5251C15.8191 10.8687 14.9289 10.5 14.0007 10.5H5.83398Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10.7007 5.75115C10.0426 5.1036 9.15516 4.74236 8.23184 4.74612C7.30853 4.74988 6.42411 5.11833 5.77122 5.77122C5.11833 6.42411 4.74988 7.30853 4.74612 8.23184C4.74236 9.15516 5.1036 10.0426 5.75115 10.7007L11.5261 16.4757C11.8502 16.8051 12.2362 17.067 12.662 17.2464C13.0877 17.4258 13.5448 17.5192 14.0068 17.5211C14.4689 17.5229 14.9267 17.4333 15.3539 17.2574C15.7811 17.0815 16.1693 16.8227 16.496 16.496C16.8227 16.1693 17.0815 15.7811 17.2574 15.3539C17.4333 14.9267 17.5229 14.4689 17.5211 14.0068C17.5192 13.5448 17.4258 13.0877 17.2464 12.662C17.067 12.2362 16.8051 11.8502 16.4757 11.5261L10.7007 5.75115Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="whygrass_cnt">
                                            <h2>One-Stop Solutions</h2>
                                            <p>Armed with a solution for every request, we also come equipped with resources to fabricate one to match novel needs.</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="whygrass_icn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                <g clip-path="url(#clip0_2003_1337)">
                                                    <path d="M14 27C21.1797 27 27 21.1797 27 14C27 6.8203 21.1797 1 14 1C6.8203 1 1 6.8203 1 14C1 21.1797 6.8203 27 14 27Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14 19C16.7614 19 19 16.7614 19 14C19 11.2386 16.7614 9 14 9C11.2386 9 9 11.2386 9 14C9 16.7614 11.2386 19 14 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_2003_1337">
                                                        <rect width="28" height="28" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="whygrass_cnt">
                                            <h2>Excellence</h2>
                                            <p>Curated with state-of-the-art technology, our offerings are rightfully discerned as the best in business.</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="whygrass_icn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                <path d="M7 7.875C6.30777 7.875 5.63108 7.66973 5.0555 7.28514C4.47993 6.90056 4.03133 6.35393 3.76642 5.71439C3.50152 5.07485 3.4322 4.37112 3.56725 3.69219C3.7023 3.01325 4.03564 2.38961 4.52513 1.90013C5.01461 1.41064 5.63825 1.0773 6.31718 0.942253C6.99612 0.807205 7.69985 0.876516 8.33939 1.14142C8.97893 1.40633 9.52556 1.85493 9.91014 2.43051C10.2947 3.00608 10.5 3.68277 10.5 4.375C10.5 5.30326 10.1313 6.1935 9.47487 6.84988C8.8185 7.50625 7.92826 7.875 7 7.875ZM7 2.625C6.65388 2.625 6.31554 2.72764 6.02775 2.91993C5.73997 3.11222 5.51566 3.38553 5.38321 3.70531C5.25076 4.02508 5.2161 4.37694 5.28363 4.71641C5.35115 5.05588 5.51782 5.3677 5.76256 5.61244C6.00731 5.85718 6.31913 6.02385 6.65859 6.09138C6.99806 6.1589 7.34993 6.12424 7.6697 5.99179C7.98947 5.85934 8.26278 5.63504 8.45507 5.34725C8.64736 5.05946 8.75 4.72112 8.75 4.375C8.75 3.91087 8.56563 3.46575 8.23744 3.13756C7.90925 2.80938 7.46413 2.625 7 2.625ZM21 7.875C20.3078 7.875 19.6311 7.66973 19.0555 7.28514C18.4799 6.90056 18.0313 6.35393 17.7664 5.71439C17.5015 5.07485 17.4322 4.37112 17.5673 3.69219C17.7023 3.01325 18.0356 2.38961 18.5251 1.90013C19.0146 1.41064 19.6383 1.0773 20.3172 0.942253C20.9961 0.807205 21.6999 0.876516 22.3394 1.14142C22.9789 1.40633 23.5256 1.85493 23.9101 2.43051C24.2947 3.00608 24.5 3.68277 24.5 4.375C24.5 5.30326 24.1313 6.1935 23.4749 6.84988C22.8185 7.50625 21.9283 7.875 21 7.875ZM21 2.625C20.6539 2.625 20.3155 2.72764 20.0278 2.91993C19.74 3.11222 19.5157 3.38553 19.3832 3.70531C19.2508 4.02508 19.2161 4.37694 19.2836 4.71641C19.3512 5.05588 19.5178 5.3677 19.7626 5.61244C20.0073 5.85718 20.3191 6.02385 20.6586 6.09138C20.9981 6.1589 21.3499 6.12424 21.6697 5.99179C21.9895 5.85934 22.2628 5.63504 22.4551 5.34725C22.6474 5.05946 22.75 4.72112 22.75 4.375C22.75 3.91087 22.5656 3.46575 22.2374 3.13756C21.9092 2.80938 21.4641 2.625 21 2.625ZM22.75 26.25H19.25C18.7859 26.25 18.3408 26.0656 18.0126 25.7374C17.6844 25.4093 17.5 24.9641 17.5 24.5V18.375H19.25V24.5H22.75V16.625H24.5V11.375C24.5 11.1429 24.4078 10.9204 24.2437 10.7563C24.0796 10.5922 23.8571 10.5 23.625 10.5H18.0075L14 17.5L9.9925 10.5H4.375C4.14294 10.5 3.92038 10.5922 3.75628 10.7563C3.59219 10.9204 3.5 11.1429 3.5 11.375V16.625H5.25V24.5H8.75V18.375H10.5V24.5C10.5 24.9641 10.3156 25.4093 9.98744 25.7374C9.65925 26.0656 9.21413 26.25 8.75 26.25H5.25C4.78587 26.25 4.34075 26.0656 4.01256 25.7374C3.68437 25.4093 3.5 24.9641 3.5 24.5V18.375C3.03587 18.375 2.59075 18.1906 2.26256 17.8624C1.93437 17.5343 1.75 17.0891 1.75 16.625V11.375C1.75 10.6788 2.02656 10.0111 2.51884 9.51885C3.01113 9.02656 3.67881 8.75 4.375 8.75H11.0075L14 14L16.9925 8.75H23.625C24.3212 8.75 24.9889 9.02656 25.4812 9.51885C25.9734 10.0111 26.25 10.6788 26.25 11.375V16.625C26.25 17.0891 26.0656 17.5343 25.7374 17.8624C25.4092 18.1906 24.9641 18.375 24.5 18.375V24.5C24.5 24.9641 24.3156 25.4093 23.9874 25.7374C23.6592 26.0656 23.2141 26.25 22.75 26.25Z" fill="white"/>
                                            </svg>
                                        </div>
                                        <div class="whygrass_cnt">
                                            <h2>Strong Associations</h2>
                                            <p>Trusted by over 1000+ dealers and channel partners, We are their foremost choice in the industry.  </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</section>



<section class="bannerbelowlogo">
   <div class="container">
       <div class="title_1">
           <div class="title_main">Brands We Worked With</div>
       </div>
       <div class="slider">
            <div class="slide-track">
                <div class="slide"><img src="{{ asset('assets/frontend/images/logo1.svg')}}" alt="image"></div>
                <div class="slide"><img src="{{ asset('assets/frontend/images/logo2.svg')}}" alt="image"></div>
                <div class="slide"><img src="{{ asset('assets/frontend/images/logo3.svg')}}" alt="image"></div>
                <div class="slide"><img src="{{ asset('assets/frontend/images/logo4.svg')}}" alt="image"></div>
                <div class="slide"><img src="{{ asset('assets/frontend/images/logo5.svg')}}" alt="image"></div>
                <div class="slide"><img src="{{ asset('assets/frontend/images/brands/brand-logos/Google-G.png')}}" alt="image"></div>
                <div class="slide"><img src="{{ asset('assets/frontend/images/brands/brand-logos/RBS.png')}}" alt="image"></div>
                <div class="slide"><img src="{{ asset('assets/frontend/images/brands/brand-logos/vodafone.png')}}" alt="image"></div>
                <div class="slide"><img src="{{ asset('assets/frontend/images/brands/brand-logos/DBS.png')}}" alt="image"></div>
                {{-- <div class="slide"><img src="{{ asset('assets/frontend/images/logo5.svg')}}" alt="image"></div> --}}
            </div>
        </div>
   </div>
</section>


<section class="industries pt0">
   <div class="container">
       <div class="title_1">
           <div class="title_main">Industries We Cater To</div>
       </div>
       <div class="row justify-content-center">
           <div class="col-xxl-10">
               <div class="row g-4 row-cols-5 justify-content-center">
                   <div class="col">
                       <figure class="industries_box">
                           <div class="industries_icn">
                               <svg xmlns="http://www.w3.org/2000/svg" width="85" height="78" viewBox="0 0 85 78" fill="none">
                                    <path opacity="0.09" d="M55.1618 0.4375C58.0651 0.437574 60.9173 1.20186 63.4316 2.65355C65.9459 4.10524 68.0338 6.19318 69.4855 8.70753L82.2158 30.7609C83.6675 33.2753 84.4318 36.1276 84.4318 39.031C84.4318 41.9344 83.6675 44.7866 82.2158 47.301L69.4855 69.3544C68.0338 71.8687 65.9459 73.9567 63.4316 75.4084C60.9173 76.8601 58.0651 77.6244 55.1618 77.6244H29.6938C26.7905 77.6244 23.9383 76.8601 21.424 75.4084C18.9097 73.9567 16.8218 71.8687 15.3701 69.3544L2.63978 47.301C1.18808 44.7866 0.423828 41.9344 0.423828 39.031C0.423828 36.1276 1.18808 33.2753 2.63978 30.7609L15.3701 8.70753C16.8218 6.19318 18.9097 4.10524 21.424 2.65355C23.9383 1.20186 26.7905 0.437574 29.6938 0.4375L55.1618 0.4375Z" fill="url(#paint0_linear_2003_1503)"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_2003_1503" x1="42.4278" y1="0.4375" x2="42.4278" y2="77.6244" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#16A5F5"/>
                                            <stop offset="1" stop-color="#16A5F5" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                               <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M21 10H17V6H15V10H11V12H15V16H17V12H21V10Z" fill="#00A6C0"/>
                                    <path d="M28 10H26V4C25.9995 3.46973 25.7886 2.96133 25.4136 2.58637C25.0387 2.21141 24.5303 2.00053 24 2H8C7.46973 2.00053 6.96133 2.21141 6.58637 2.58637C6.21141 2.96133 6.00053 3.46973 6 4V10H4C3.46973 10.0005 2.96133 10.2114 2.58637 10.5864C2.21141 10.9613 2.00053 11.4697 2 12V30H30V12C29.9995 11.4697 29.7886 10.9613 29.4136 10.5864C29.0387 10.2114 28.5303 10.0005 28 10ZM14 28V22H18V28H14ZM20 28V21C20 20.7348 19.8946 20.4804 19.7071 20.2929C19.5196 20.1054 19.2652 20 19 20H13C12.7348 20 12.4804 20.1054 12.2929 20.2929C12.1054 20.4804 12 20.7348 12 21V28H4V12H8V4H24V12H28V28H20Z" fill="black"/>
                                </svg>
                           </div>
                           <h2>Hospitality</h2>
                       </figure>
                   </div>
                   <div class="col">
                       <figure class="industries_box">
                           <div class="industries_icn">
                               <svg xmlns="http://www.w3.org/2000/svg" width="85" height="78" viewBox="0 0 85 78" fill="none">
                                    <path opacity="0.09" d="M55.1618 0.4375C58.0651 0.437574 60.9173 1.20186 63.4316 2.65355C65.9459 4.10524 68.0338 6.19318 69.4855 8.70753L82.2158 30.7609C83.6675 33.2753 84.4318 36.1276 84.4318 39.031C84.4318 41.9344 83.6675 44.7866 82.2158 47.301L69.4855 69.3544C68.0338 71.8687 65.9459 73.9567 63.4316 75.4084C60.9173 76.8601 58.0651 77.6244 55.1618 77.6244H29.6938C26.7905 77.6244 23.9383 76.8601 21.424 75.4084C18.9097 73.9567 16.8218 71.8687 15.3701 69.3544L2.63978 47.301C1.18808 44.7866 0.423828 41.9344 0.423828 39.031C0.423828 36.1276 1.18808 33.2753 2.63978 30.7609L15.3701 8.70753C16.8218 6.19318 18.9097 4.10524 21.424 2.65355C23.9383 1.20186 26.7905 0.437574 29.6938 0.4375L55.1618 0.4375Z" fill="url(#paint0_linear_2003_1503)"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_2003_1503" x1="42.4278" y1="0.4375" x2="42.4278" y2="77.6244" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#16A5F5"/>
                                            <stop offset="1" stop-color="#16A5F5" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                               <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                                    <g clip-path="url(#clip0_2003_1532)">
                                        <path d="M3.49937 14.558L17.9994 6.22797L32.4994 14.558C32.7279 14.6775 32.9938 14.7041 33.2415 14.6323C33.4892 14.5604 33.6996 14.3956 33.8287 14.1723C33.9577 13.949 33.9955 13.6845 33.9342 13.434C33.8728 13.1835 33.717 12.9663 33.4994 12.828L17.9994 3.91797L2.49937 12.828C2.37986 12.8905 2.27424 12.9765 2.18885 13.0809C2.10346 13.1853 2.04007 13.3059 2.00249 13.4354C1.96491 13.565 1.95392 13.7008 1.97019 13.8346C1.98645 13.9685 2.02963 14.0977 2.09712 14.2145C2.16462 14.3313 2.25503 14.4332 2.36293 14.5141C2.47083 14.595 2.59398 14.6533 2.72498 14.6853C2.85598 14.7174 2.99211 14.7227 3.12519 14.7008C3.25827 14.6789 3.38555 14.6303 3.49937 14.558Z" fill="black"/>
                                        <path d="M4 26.9989C4 27.2641 4.10536 27.5185 4.29289 27.706C4.48043 27.8936 4.73478 27.9989 5 27.9989H31C31.2652 27.9989 31.5196 27.8936 31.7071 27.706C31.8946 27.5185 32 27.2641 32 26.9989C32 26.7337 31.8946 26.4793 31.7071 26.2918C31.5196 26.1043 31.2652 25.9989 31 25.9989H28V18.6289H26V25.9989H19V18.6289H17V25.9989H10V18.6289H8V25.9989H5C4.73478 25.9989 4.48043 26.1043 4.29289 26.2918C4.10536 26.4793 4 26.7337 4 26.9989Z" fill="black"/>
                                        <path d="M5.01953 14.998H31.0195V16.998H5.01953V14.998Z" fill="black"/>
                                        <path d="M33 29.998H3C2.73478 29.998 2.48043 30.1034 2.29289 30.2909C2.10536 30.4785 2 30.7328 2 30.998C2 31.2633 2.10536 31.5176 2.29289 31.7052C2.48043 31.8927 2.73478 31.998 3 31.998H33C33.2652 31.998 33.5196 31.8927 33.7071 31.7052C33.8946 31.5176 34 31.2633 34 30.998C34 30.7328 33.8946 30.4785 33.7071 30.2909C33.5196 30.1034 33.2652 29.998 33 29.998Z" fill="#00A6C0"/>
                                        <path d="M22.1509 12.5785H25.3609L18.6509 8.71851C18.5292 8.64829 18.3913 8.61133 18.2509 8.61133C18.1104 8.61133 17.9725 8.64829 17.8509 8.71851L11.1309 12.5785H14.3409L18.2409 10.3385L22.1509 12.5785Z" fill="#00A6C0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2003_1532">
                                            <rect width="36" height="36" fill="white" transform="translate(0 0.998047)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h2>Banking</h2>
                       </figure>
                   </div>
                   <div class="col">
                       <figure class="industries_box">
                           <div class="industries_icn">
                               <svg xmlns="http://www.w3.org/2000/svg" width="85" height="78" viewBox="0 0 85 78" fill="none">
                                    <path opacity="0.09" d="M55.1618 0.4375C58.0651 0.437574 60.9173 1.20186 63.4316 2.65355C65.9459 4.10524 68.0338 6.19318 69.4855 8.70753L82.2158 30.7609C83.6675 33.2753 84.4318 36.1276 84.4318 39.031C84.4318 41.9344 83.6675 44.7866 82.2158 47.301L69.4855 69.3544C68.0338 71.8687 65.9459 73.9567 63.4316 75.4084C60.9173 76.8601 58.0651 77.6244 55.1618 77.6244H29.6938C26.7905 77.6244 23.9383 76.8601 21.424 75.4084C18.9097 73.9567 16.8218 71.8687 15.3701 69.3544L2.63978 47.301C1.18808 44.7866 0.423828 41.9344 0.423828 39.031C0.423828 36.1276 1.18808 33.2753 2.63978 30.7609L15.3701 8.70753C16.8218 6.19318 18.9097 4.10524 21.424 2.65355C23.9383 1.20186 26.7905 0.437574 29.6938 0.4375L55.1618 0.4375Z" fill="url(#paint0_linear_2003_1503)"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_2003_1503" x1="42.4278" y1="0.4375" x2="42.4278" y2="77.6244" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#16A5F5"/>
                                            <stop offset="1" stop-color="#16A5F5" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                               <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                                   <g clip-path="url(#clip0_2003_1522)">
                                       <path d="M16.3333 14.0164L16.3517 13.9962M23.6667 14.0164L23.685 13.9962M16.3333 21.3497L16.3517 21.3295M23.6667 21.3497L23.685 21.3295M16.3333 28.683L16.3517 28.6629M23.6667 28.683L23.685 28.6629M9 34.898V7.76471C9 7.47298 9.11589 7.19319 9.32218 6.9869C9.52847 6.78061 9.80826 6.66471 10.1 6.66471H20V4.09805C20 3.80631 20.1159 3.52652 20.3222 3.32023C20.5285 3.11394 20.8083 2.99805 21.1 2.99805H29.9C30.1917 2.99805 30.4715 3.11394 30.6778 3.32023C30.8841 3.52652 31 3.80631 31 4.09805V34.898C31 35.1898 30.8841 35.4696 30.6778 35.6759C30.4715 35.8822 30.1917 35.998 29.9 35.998H10.1C9.80826 35.998 9.52847 35.8822 9.32218 35.6759C9.11589 35.4696 9 35.1898 9 34.898Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <rect x="22.4453" y="20.1094" width="2.44444" height="14.6667" fill="#00A6C0"/>
                                   </g>
                                   <defs>
                                       <clipPath id="clip0_2003_1522">
                                           <rect width="36" height="36" fill="white" transform="translate(0 0.998047)"/>
                                       </clipPath>
                                   </defs>
                               </svg>
                           </div>
                           <h2>Tech Companies</h2>
                       </figure>
                   </div>

                   <div class="col">
                       <figure class="industries_box">
                           <div class="industries_icn">
                               <svg xmlns="http://www.w3.org/2000/svg" width="85" height="78" viewBox="0 0 85 78" fill="none">
                                   <path opacity="0.09" d="M55.0876 0.4375C57.9909 0.437574 60.843 1.20186 63.3574 2.65355C65.8717 4.10524 67.9596 6.19318 69.4113 8.70753L82.1416 30.7609C83.5933 33.2753 84.3575 36.1276 84.3575 39.031C84.3575 41.9344 83.5933 44.7866 82.1416 47.301L69.4113 69.3544C67.9596 71.8687 65.8717 73.9567 63.3574 75.4084C60.843 76.8601 57.9909 77.6244 55.0876 77.6244H29.6196C26.7163 77.6244 23.8641 76.8601 21.3498 75.4084C18.8355 73.9567 16.7475 71.8687 15.2959 69.3544L2.56556 47.301C1.11386 44.7866 0.349609 41.9344 0.349609 39.031C0.349609 36.1276 1.11386 33.2753 2.56556 30.7609L15.2959 8.70753C16.7475 6.19318 18.8355 4.10524 21.3498 2.65355C23.8641 1.20186 26.7163 0.437574 29.6196 0.4375L55.0876 0.4375Z" fill="url(#paint0_linear_2003_1510)"/>
                                   <path d="M30.3047 29.9999L42.9046 21V56.9997H30.3047V29.9999Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M42.8998 29.1016L55.4997 38.1015V57.0013M24 57.0013H59.9997" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                   <rect x="36" y="41" width="2.44444" height="14.6667" fill="#00A6C0"/>
                                   <defs>
                                       <linearGradient id="paint0_linear_2003_1510" x1="42.3536" y1="0.4375" x2="42.3536" y2="77.6244" gradientUnits="userSpaceOnUse">
                                           <stop stop-color="#16A5F5"/>
                                           <stop offset="1" stop-color="#16A5F5" stop-opacity="0"/>
                                       </linearGradient>
                                   </defs>
                               </svg>
                           </div>
                           <h2>Commercial Spaces / MNCs</h2>
                       </figure>
                   </div>

                   <div class="col">
                       <figure class="industries_box">
                           <div class="industries_icn">
                               <svg xmlns="http://www.w3.org/2000/svg" width="85" height="78" viewBox="0 0 85 78" fill="none">
                                    <path opacity="0.09" d="M55.1618 0.4375C58.0651 0.437574 60.9173 1.20186 63.4316 2.65355C65.9459 4.10524 68.0338 6.19318 69.4855 8.70753L82.2158 30.7609C83.6675 33.2753 84.4318 36.1276 84.4318 39.031C84.4318 41.9344 83.6675 44.7866 82.2158 47.301L69.4855 69.3544C68.0338 71.8687 65.9459 73.9567 63.4316 75.4084C60.9173 76.8601 58.0651 77.6244 55.1618 77.6244H29.6938C26.7905 77.6244 23.9383 76.8601 21.424 75.4084C18.9097 73.9567 16.8218 71.8687 15.3701 69.3544L2.63978 47.301C1.18808 44.7866 0.423828 41.9344 0.423828 39.031C0.423828 36.1276 1.18808 33.2753 2.63978 30.7609L15.3701 8.70753C16.8218 6.19318 18.9097 4.10524 21.424 2.65355C23.9383 1.20186 26.7905 0.437574 29.6938 0.4375L55.1618 0.4375Z" fill="url(#paint0_linear_2003_1503)"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_2003_1503" x1="42.4278" y1="0.4375" x2="42.4278" y2="77.6244" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#16A5F5"/>
                                            <stop offset="1" stop-color="#16A5F5" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                               <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <path d="M3.375 31.5H32.625M5.625 4.5V31.5M21.375 4.5V31.5M30.375 11.25V31.5M10.125 10.125H11.25M10.125 14.625H11.25M10.125 19.125H11.25M15.75 10.125H16.875M15.75 14.625H16.875M15.75 19.125H16.875M10.125 31.5V26.4375C10.125 25.506 10.881 24.75 11.8125 24.75H15.1875C16.119 24.75 16.875 25.506 16.875 26.4375V31.5M4.5 4.5H22.5M21.375 11.25H31.5M25.875 16.875H25.887V16.887H25.875V16.875ZM25.875 21.375H25.887V21.387H25.875V21.375ZM25.875 25.875H25.887V25.887H25.875V25.875Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="15" y="7" width="3" height="15" fill="#00A6C0"/>
                                </svg>
                           </div>
                           <h2>Government Buildings & Embassies</h2>
                       </figure>
                   </div>

                   <div class="col">
                       <figure class="industries_box">
                           <div class="industries_icn">
                               <svg xmlns="http://www.w3.org/2000/svg" width="85" height="78" viewBox="0 0 85 78" fill="none">
                                    <path opacity="0.09" d="M55.1618 0.4375C58.0651 0.437574 60.9173 1.20186 63.4316 2.65355C65.9459 4.10524 68.0338 6.19318 69.4855 8.70753L82.2158 30.7609C83.6675 33.2753 84.4318 36.1276 84.4318 39.031C84.4318 41.9344 83.6675 44.7866 82.2158 47.301L69.4855 69.3544C68.0338 71.8687 65.9459 73.9567 63.4316 75.4084C60.9173 76.8601 58.0651 77.6244 55.1618 77.6244H29.6938C26.7905 77.6244 23.9383 76.8601 21.424 75.4084C18.9097 73.9567 16.8218 71.8687 15.3701 69.3544L2.63978 47.301C1.18808 44.7866 0.423828 41.9344 0.423828 39.031C0.423828 36.1276 1.18808 33.2753 2.63978 30.7609L15.3701 8.70753C16.8218 6.19318 18.9097 4.10524 21.424 2.65355C23.9383 1.20186 26.7905 0.437574 29.6938 0.4375L55.1618 0.4375Z" fill="url(#paint0_linear_2003_1503)"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_2003_1503" x1="42.4278" y1="0.4375" x2="42.4278" y2="77.6244" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#16A5F5"/>
                                            <stop offset="1" stop-color="#16A5F5" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                               <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                    <path d="M11.5492 14.7008C11.2707 14.7008 11.0037 14.8114 10.8068 15.0083C10.6098 15.2052 10.4992 15.4723 10.4992 15.7508V22.0508C10.4992 22.3293 10.6098 22.5963 10.8068 22.7932C11.0037 22.9902 11.2707 23.1008 11.5492 23.1008H30.4492C30.7277 23.1008 30.9948 22.9902 31.1917 22.7932C31.3886 22.5963 31.4992 22.3293 31.4992 22.0508V15.7508C31.4992 15.4723 31.3886 15.2052 31.1917 15.0083C30.9948 14.8114 30.7277 14.7008 30.4492 14.7008H11.5492ZM12.5992 21.0008V16.8008H29.3992V21.0008H12.5992ZM24.1492 25.2008C23.8707 25.2008 23.6037 25.3114 23.4068 25.5083C23.2098 25.7052 23.0992 25.9723 23.0992 26.2508V30.4508C23.0992 30.7293 23.2098 30.9963 23.4068 31.1932C23.6037 31.3902 23.8707 31.5008 24.1492 31.5008H30.4492C30.7277 31.5008 30.9948 31.3902 31.1917 31.1932C31.3886 30.9963 31.4992 30.7293 31.4992 30.4508V26.2508C31.4992 25.9723 31.3886 25.7052 31.1917 25.5083C30.9948 25.3114 30.7277 25.2008 30.4492 25.2008H24.1492ZM25.1992 29.4008V27.3008H29.3992V29.4008H25.1992ZM4.19922 9.45078C4.19922 8.61535 4.53109 7.81414 5.12183 7.2234C5.71257 6.63266 6.51379 6.30078 7.34922 6.30078H34.6492C35.3931 6.29968 36.1134 6.56188 36.6825 7.04095C37.2516 7.52003 37.6328 8.18505 37.7586 8.91825C37.8843 9.65144 37.7465 10.4055 37.3696 11.0468C36.9927 11.6882 36.401 12.1754 35.6992 12.4223V34.6508C35.6992 34.9293 35.5886 35.1963 35.3917 35.3932C35.1948 35.5902 34.9277 35.7008 34.6492 35.7008H7.34922C7.07074 35.7008 6.80367 35.5902 6.60676 35.3932C6.40984 35.1963 6.29922 34.9293 6.29922 34.6508V12.4223C5.68481 12.2051 5.15289 11.8026 4.77678 11.2704C4.40067 10.7382 4.19888 10.1025 4.19922 9.45078ZM7.34922 8.40078C7.07074 8.40078 6.80367 8.51141 6.60676 8.70832C6.40984 8.90524 6.29922 9.17231 6.29922 9.45078C6.29922 9.72926 6.40984 9.99633 6.60676 10.1932C6.80367 10.3902 7.07074 10.5008 7.34922 10.5008H34.6492C34.9277 10.5008 35.1948 10.3902 35.3917 10.1932C35.5886 9.99633 35.6992 9.72926 35.6992 9.45078C35.6992 9.17231 35.5886 8.90524 35.3917 8.70832C35.1948 8.51141 34.9277 8.40078 34.6492 8.40078H7.34922ZM8.39922 12.6008V33.6008H10.4992V26.2508C10.4992 25.9723 10.6098 25.7052 10.8068 25.5083C11.0037 25.3114 11.2707 25.2008 11.5492 25.2008H19.9492C20.2277 25.2008 20.4948 25.3114 20.6917 25.5083C20.8886 25.7052 20.9992 25.9723 20.9992 26.2508V33.6008H33.5992V12.6008H8.39922ZM12.5992 33.6008H18.8992V27.3008H12.5992V33.6008Z" fill="#394D58"/>
                                    <rect x="20" y="17" width="9" height="4" fill="#00A6C0"/>
                                </svg>
                           </div>
                           <h2>Retail</h2>
                       </figure>
                   </div>

                   <div class="col">
                       <figure class="industries_box">
                           <div class="industries_icn">
                               <svg xmlns="http://www.w3.org/2000/svg" width="85" height="78" viewBox="0 0 85 78" fill="none">
                                    <path opacity="0.09" d="M55.1618 0.4375C58.0651 0.437574 60.9173 1.20186 63.4316 2.65355C65.9459 4.10524 68.0338 6.19318 69.4855 8.70753L82.2158 30.7609C83.6675 33.2753 84.4318 36.1276 84.4318 39.031C84.4318 41.9344 83.6675 44.7866 82.2158 47.301L69.4855 69.3544C68.0338 71.8687 65.9459 73.9567 63.4316 75.4084C60.9173 76.8601 58.0651 77.6244 55.1618 77.6244H29.6938C26.7905 77.6244 23.9383 76.8601 21.424 75.4084C18.9097 73.9567 16.8218 71.8687 15.3701 69.3544L2.63978 47.301C1.18808 44.7866 0.423828 41.9344 0.423828 39.031C0.423828 36.1276 1.18808 33.2753 2.63978 30.7609L15.3701 8.70753C16.8218 6.19318 18.9097 4.10524 21.424 2.65355C23.9383 1.20186 26.7905 0.437574 29.6938 0.4375L55.1618 0.4375Z" fill="url(#paint0_linear_2003_1503)"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_2003_1503" x1="42.4278" y1="0.4375" x2="42.4278" y2="77.6244" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#16A5F5"/> \
                                            <stop offset="1" stop-color="#16A5F5" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                               <svg xmlns="http://www.w3.org/2000/svg" width="49" height="48" viewBox="0 0 49 48" fill="none">
                                    <g clip-path="url(#clip0_2003_1447)"> <path d="M13.9096 19.7203L18.6563 21.0537L20.843 19.467L15.5096 17.9203L17.9096 16.4537L25.203 16.2403L28.2696 14.0137L17.9096 14.3337C17.583 14.316 17.2584 14.3948 16.9763 14.5603L13.4696 16.6003C13.1797 16.7721 12.9471 17.0258 12.8012 17.3295C12.6553 17.6332 12.6025 17.9734 12.6495 18.307C12.6966 18.6407 12.8414 18.9529 13.0656 19.2045C13.2898 19.456 13.5835 19.6355 13.9096 19.7203Z" fill="#394D58"/> <path d="M45.5432 15.9766C45.4549 15.4062 45.1982 14.8767 44.8073 14.4581C44.4163 14.0395 43.9095 13.7517 43.354 13.6328L36.5908 12.1211C35.8656 11.9602 35.1148 11.9596 34.3893 12.1193C33.6637 12.2791 32.9804 12.5954 32.3854 13.0469L12.3954 27.8593L6.79586 27.625C6.34573 27.6086 5.90196 27.7369 5.52759 27.9916C5.15322 28.2463 4.86728 28.6146 4.71038 29.044C4.55349 29.4734 4.53362 29.9422 4.65359 30.3838C4.77356 30.8254 5.02727 31.2173 5.3787 31.5039L11.1395 36.1093C11.8308 36.9648 12.2917 36.8007 23.7327 30.4609L24.8042 41.4999C24.822 41.8011 24.9235 42.0909 25.0969 42.3356C25.2702 42.5804 25.5084 42.7701 25.7835 42.8827C25.9815 42.9623 26.1928 43.0021 26.4057 42.9999C26.8342 42.9866 27.2435 42.8159 27.5579 42.5194L30.3115 39.9648C30.5857 39.7064 30.7715 39.3656 30.8415 38.9921L33.3648 25.0469C37.478 22.7031 41.3723 20.5 44.149 18.8945C44.6458 18.6103 45.0455 18.1786 45.2946 17.6572C45.5437 17.1358 45.6304 16.5495 45.5432 15.9766ZM43.0084 16.8555C40.128 18.5195 36.0954 20.8516 31.7633 23.2656L31.2909 23.5351L28.6063 38.3827L26.9127 39.9531L25.6453 26.7109L24.1129 27.5078C15.8519 32.1953 13.0982 33.5546 12.1534 33.9765L7.19912 29.9804L13.0521 30.2382L33.7911 14.9336C34.1171 14.6857 34.4908 14.5106 34.8879 14.4198C35.285 14.3289 35.6965 14.3243 36.0954 14.4063L42.8356 15.8828C42.9394 15.902 43.0346 15.9544 43.1071 16.0324C43.1796 16.1104 43.2258 16.2099 43.2388 16.3164C43.2625 16.4195 43.2529 16.5277 43.2114 16.6248C43.1699 16.7219 43.0987 16.8028 43.0084 16.8555Z" fill="#394D58"/>
                                        <circle cx="33.5762" cy="19" r="1" fill="#00A6C0"/>
                                        <circle cx="29.5762" cy="22" r="2" fill="#00A6C0"/>
                                        <circle cx="25.5762" cy="25" r="1" fill="#00A6C0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2003_1447">
                                            <rect width="48" height="48" fill="white" transform="translate(0.576172)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h2>Airports</h2>
                       </figure>
                   </div>

                   <div class="col">
                       <figure class="industries_box">
                           <div class="industries_icn">
                               <svg xmlns="http://www.w3.org/2000/svg" width="85" height="78" viewBox="0 0 85 78" fill="none">
                                    <path opacity="0.09" d="M55.1618 0.4375C58.0651 0.437574 60.9173 1.20186 63.4316 2.65355C65.9459 4.10524 68.0338 6.19318 69.4855 8.70753L82.2158 30.7609C83.6675 33.2753 84.4318 36.1276 84.4318 39.031C84.4318 41.9344 83.6675 44.7866 82.2158 47.301L69.4855 69.3544C68.0338 71.8687 65.9459 73.9567 63.4316 75.4084C60.9173 76.8601 58.0651 77.6244 55.1618 77.6244H29.6938C26.7905 77.6244 23.9383 76.8601 21.424 75.4084C18.9097 73.9567 16.8218 71.8687 15.3701 69.3544L2.63978 47.301C1.18808 44.7866 0.423828 41.9344 0.423828 39.031C0.423828 36.1276 1.18808 33.2753 2.63978 30.7609L15.3701 8.70753C16.8218 6.19318 18.9097 4.10524 21.424 2.65355C23.9383 1.20186 26.7905 0.437574 29.6938 0.4375L55.1618 0.4375Z" fill="url(#paint0_linear_2003_1503)"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_2003_1503" x1="42.4278" y1="0.4375" x2="42.4278" y2="77.6244" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#16A5F5"/>
                                            <stop offset="1" stop-color="#16A5F5" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                               <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36" viewBox="0 0 37 36" fill="none">
                                    <path d="M5.07617 3.00012C4.94356 3.00012 4.81639 3.0528 4.72262 3.14657C4.62885 3.24035 4.57617 3.36753 4.57617 3.50015V24.5014C4.57617 24.7774 4.80017 25.0014 5.07617 25.0014H13.5762V27.0015H5.07617C3.69617 27.0015 2.57617 25.8815 2.57617 24.5014V3.50015C2.57617 2.12007 3.69617 1 5.07617 1H16.0762C17.4562 1 18.5762 2.12007 18.5762 3.50015V8.50044C18.5762 8.77646 18.8002 9.00047 19.0762 9.00047H22.0762C23.4562 9.00047 24.5762 10.1205 24.5762 11.5006V13.0007C23.8742 13.0807 23.1862 13.3227 22.5762 13.7307V11.5006C22.5762 11.368 22.5235 11.2408 22.4297 11.147C22.336 11.0533 22.2088 11.0006 22.0762 11.0006H19.0762C17.6962 11.0006 16.5762 9.88052 16.5762 8.50044V3.50015C16.5762 3.36753 16.5235 3.24035 16.4297 3.14657C16.336 3.0528 16.2088 3.00012 16.0762 3.00012H5.07617ZM26.6982 15.5689C26.2458 15.1831 25.6707 14.9712 25.0762 14.9712C24.4816 14.9712 23.9066 15.1831 23.4542 15.5689L16.5142 21.4892C16.2204 21.7393 15.9844 22.0501 15.8225 22.4002C15.6605 22.7504 15.5765 23.1315 15.5762 23.5173V32.7499C15.5762 33.9939 16.5842 35 17.8262 35H21.3262C22.5682 35 23.5762 33.9939 23.5762 32.7499V29.2517C23.5762 29.1137 23.6882 29.0016 23.8262 29.0016H26.3262C26.4642 29.0016 26.5762 29.1137 26.5762 29.2517V32.7519C26.5762 33.9919 27.5842 35 28.8262 35H32.3262C33.5682 35 34.5762 33.9939 34.5762 32.7499V23.5173C34.5762 22.7373 34.2342 21.9952 33.6402 21.4892L26.6982 15.5689ZM24.7522 17.0909C24.8426 17.014 24.9574 16.9718 25.0762 16.9718C25.1949 16.9718 25.3097 17.014 25.4002 17.0909L32.3402 23.0113C32.4137 23.0736 32.4728 23.1511 32.5136 23.2385C32.5543 23.3258 32.5757 23.4209 32.5762 23.5173V32.7499C32.5762 32.8899 32.4642 32.9999 32.3262 32.9999H28.8262C28.7599 32.9999 28.6963 32.9735 28.6494 32.9267C28.6025 32.8798 28.5762 32.8162 28.5762 32.7499V29.2517C28.5762 28.0096 27.5682 27.0015 26.3262 27.0015H23.8262C22.5842 27.0015 21.5762 28.0096 21.5762 29.2517V32.7519C21.5756 32.8178 21.5491 32.8809 21.5022 32.9274C21.4554 32.9738 21.3921 32.9999 21.3262 32.9999H17.8262C17.7599 32.9999 17.6963 32.9735 17.6494 32.9267C17.6025 32.8798 17.5762 32.8162 17.5762 32.7499V23.5173C17.5762 23.3233 17.6622 23.1373 17.8102 23.0113L24.7502 17.0909H24.7522Z" fill="black"/>
                                    <rect x="7.57617" y="6" width="3" height="15" fill="#00A6C0"/>
                                </svg>
                            </div>
                            <h2>Residencies </h2>
                       </figure>
                   </div>

                   <div class="col">
                       <figure class="industries_box">
                           <div class="industries_icn">
                               <svg xmlns="http://www.w3.org/2000/svg" width="85" height="78" viewBox="0 0 85 78" fill="none">
                                   <path opacity="0.09" d="M55.1618 0.4375C58.0651 0.437574 60.9173 1.20186 63.4316 2.65355C65.9459 4.10524 68.0338 6.19318 69.4855 8.70753L82.2158 30.7609C83.6675 33.2753 84.4318 36.1276 84.4318 39.031C84.4318 41.9344 83.6675 44.7866 82.2158 47.301L69.4855 69.3544C68.0338 71.8687 65.9459 73.9567 63.4316 75.4084C60.9173 76.8601 58.0651 77.6244 55.1618 77.6244H29.6938C26.7905 77.6244 23.9383 76.8601 21.424 75.4084C18.9097 73.9567 16.8218 71.8687 15.3701 69.3544L2.63978 47.301C1.18808 44.7866 0.423828 41.9344 0.423828 39.031C0.423828 36.1276 1.18808 33.2753 2.63978 30.7609L15.3701 8.70753C16.8218 6.19318 18.9097 4.10524 21.424 2.65355C23.9383 1.20186 26.7905 0.437574 29.6938 0.4375L55.1618 0.4375Z" fill="url(#paint0_linear_2003_1503)"/>
                                   <defs>
                                        <linearGradient id="paint0_linear_2003_1503" x1="42.4278" y1="0.4375" x2="42.4278" y2="77.6244" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#16A5F5"/>
                                            <stop offset="1" stop-color="#16A5F5" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>

                               <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36" viewBox="0 0 37 36" fill="none">
                                   <path d="M27.5762 3H9.57617C8.78052 3 8.01746 3.31607 7.45485 3.87868C6.89224 4.44129 6.57617 5.20435 6.57617 6V30C6.57617 30.7957 6.89224 31.5587 7.45485 32.1213C8.01746 32.6839 8.78052 33 9.57617 33H27.5762C28.3718 33 29.1349 32.6839 29.6975 32.1213C30.2601 31.5587 30.5762 30.7957 30.5762 30V6C30.5762 5.20435 30.2601 4.44129 29.6975 3.87868C29.1349 3.31607 28.3718 3 27.5762 3Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M14.0762 24L14.5982 23.64C16.7957 22.1205 20.3582 22.1205 22.5542 23.64L23.0762 24M12.5762 10.5H12.5912M24.5762 10.5H24.5912M18.5762 10.5H18.5912M18.5762 16.5H18.5912M24.5762 16.5H24.5912M12.5762 16.5H12.5912M15.5762 33V23.25M21.5762 23.25V33" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                   <rect x="27.5762" y="9" width="3" height="18" transform="rotate(90 27.5762 9)" fill="#00A6C0"/>
                               </svg>
                           </div>
                           <h2>Restaurants </h2>
                       </figure>
                   </div>

                   <div class="col">
                       <figure class="industries_box">
                           <div class="industries_icn">
                               <svg xmlns="http://www.w3.org/2000/svg" width="85" height="78" viewBox="0 0 85 78" fill="none">
                                    <path opacity="0.09" d="M55.1618 0.4375C58.0651 0.437574 60.9173 1.20186 63.4316 2.65355C65.9459 4.10524 68.0338 6.19318 69.4855 8.70753L82.2158 30.7609C83.6675 33.2753 84.4318 36.1276 84.4318 39.031C84.4318 41.9344 83.6675 44.7866 82.2158 47.301L69.4855 69.3544C68.0338 71.8687 65.9459 73.9567 63.4316 75.4084C60.9173 76.8601 58.0651 77.6244 55.1618 77.6244H29.6938C26.7905 77.6244 23.9383 76.8601 21.424 75.4084C18.9097 73.9567 16.8218 71.8687 15.3701 69.3544L2.63978 47.301C1.18808 44.7866 0.423828 41.9344 0.423828 39.031C0.423828 36.1276 1.18808 33.2753 2.63978 30.7609L15.3701 8.70753C16.8218 6.19318 18.9097 4.10524 21.424 2.65355C23.9383 1.20186 26.7905 0.437574 29.6938 0.4375L55.1618 0.4375Z" fill="url(#paint0_linear_2003_1503)"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_2003_1503" x1="42.4278" y1="0.4375" x2="42.4278" y2="77.6244" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#16A5F5"/>
                                            <stop offset="1" stop-color="#16A5F5" stop-opacity="0"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                               <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36" viewBox="0 0 37 36" fill="none">
                                   <path d="M6.57617 9L18.5762 3L30.5762 9M27.5762 15L33.5762 18V30C33.5762 30.7957 33.2601 31.5587 32.6975 32.1213C32.1349 32.6839 31.3718 33 30.5762 33H6.57617C5.78052 33 5.01746 32.6839 4.45485 32.1213C3.89224 31.5587 3.57617 30.7957 3.57617 30V18L9.57617 15" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M21.5762 33V27C21.5762 26.2044 21.2601 25.4413 20.6975 24.8787C20.1349 24.3161 19.3718 24 18.5762 24C17.7805 24 17.0175 24.3161 16.4549 24.8787C15.8922 25.4413 15.5762 26.2044 15.5762 27V33M27.5762 7.5V33M9.57617 7.5V33" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                   <path d="M18.5762 16.5C20.233 16.5 21.5762 15.1569 21.5762 13.5C21.5762 11.8431 20.233 10.5 18.5762 10.5C16.9193 10.5 15.5762 11.8431 15.5762 13.5C15.5762 15.1569 16.9193 16.5 18.5762 16.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                   <circle cx="18.5762" cy="13" r="4" fill="#00A6C0"/>
                               </svg>
                           </div>
                           <h2>Educational Institutions</h2>
                       </figure>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>

<!--
<section class="instagram_story">
   <div class="container">

   </div>
</section> -->



<section class="video_slider">
   <div class="container">
       <div class="swiper mySwiper_video">

           <div class="main_arrow">
                <div class="swiper-button-prev swiper-button-prev-video">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M14.6 6L16 7.4L11.4 12L16 16.6L14.6 18L8.6 12L14.6 6Z" fill="white"/>
                    </svg>
                </div>

                <div class="swiper-button-next swiper-button-next-video">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect width="24" height="24" rx="12" fill="#00A6C0"/>
                        <path d="M9.4 18L8 16.6L12.6 12L8 7.4L9.4 6L15.4 12L9.4 18Z" fill="white"/>
                    </svg>
                </div>
           </div>
           {{-- insta reels  --}}
           <div class="swiper-wrapper">
               <div class="swiper-slide">
                   <video class="insta-video" controls="" id="reel1" poster="{{ asset('assets/frontend/images/Reel_Covers/4.webp')}}">
                       <source src="{{ asset('assets/frontend/images/videos/Checkout _this_video.mp4')}}" type="video/mp4">
                       <source src="{{ asset('assets/frontend/images/videos/Checkout _this_video.mp4')}}" type="video/ogg">
                    </video>
                    <div class="video-controls1 video-icon insta-play-icon reel1" data-reel="reel1">
                        <img src="{{ asset('assets/frontend/images/video-icon.webp')}}" alt="video-icon">
                    </div>
               </div>
               <div class="swiper-slide">
                   <video class="insta-video" controls="" id="reel2" poster="{{ asset('assets/frontend/images/Reel_Covers/5.webp')}}">
                        <source src="{{ asset('assets/frontend/images/videos/Enjoy_the_best.mp4')}}" type="video/mp4">
                        <source src="{{ asset('assets/frontend/images/videos/Enjoy_the_best.mp4')}}" type="video/ogg">
                   </video>
                   <div class="video-controls1 video-icon insta-play-icon reel2" data-reel="reel2">
                        <img src="{{ asset('assets/frontend/images/video-icon.webp')}}" alt="video-icon">
                    </div>
               </div>
               <div class="swiper-slide">
                   <video class="insta-video" controls="" id="reel3" poster="{{ asset('assets/frontend/images/Reel_Covers/1.webp')}}">
                       <source src="{{ asset('assets/frontend/images/videos/Gras-i_Meet-The.mp4')}}" type="video/mp4">
                       <source src="{{ asset('assets/frontend/images/videos/Gras-i_Meet-The.mp4')}}" type="video/ogg">
                    </video>
                    <div class="video-controls1 video-icon insta-play-icon reel3" data-reel="reel3">
                         <img src="{{ asset('assets/frontend/images/video-icon.webp')}}" alt="video-icon">
                    </div>
               </div>
               <div class="swiper-slide">
                   <video class="insta-video" controls="" id="reel4" poster="{{ asset('assets/frontend/images/Reel_Covers/3.webp')}}">
                       <source src="{{ asset('assets/frontend/images/videos/Gras-i_was_delighted.mp4')}}" type="video/mp4">
                       <source src="{{ asset('assets/frontend/images/videos/Gras-i_was_delighted.mp4')}}" type="video/ogg">
                   </video>
                   <div class="video-controls1 video-icon insta-play-icon reel4" data-reel="reel4">
                        <img src="{{ asset('assets/frontend/images/video-icon.webp')}}" alt="video-icon">
                    </div>
               </div>
               <div class="swiper-slide">
                   <video class="insta-video" controls="" id="reel5" poster="{{ asset('assets/frontend/images/Reel_Covers/2.webp')}}">
                       <source src="{{ asset('assets/frontend/images/videos/The_Ferrari_296_GTB.mp4')}}" type="video/mp4">
                       <source src="{{ asset('assets/frontend/images/videos/The_Ferrari_296_GTB.mp4')}}" type="video/ogg">
                    </video>
                     <div class="video-controls1 video-icon insta-play-icon reel5" data-reel="reel5">
                        <img src="{{ asset('assets/frontend/images/video-icon.webp')}}" alt="video-icon">
                     </div>
               </div>
               {{-- <div class="swiper-slide">
                   <video class="insta-video" controls="" id="reel6" poster="{{ asset('assets/frontend/images/itrh.webp')}}">
                       <source src="{{ asset('assets/frontend/images/Cuin_2.mp4')}}" type="video/mp4">
                       <source src="{{ asset('assets/frontend/images/Cuin_2.mp4')}}" type="video/ogg">
                   </video>
                   <div class="video-controls1 video-icon insta-play-icon reel6" data-reel="reel6">
                       <img src="{{ asset('assets/frontend/images/video-icon.webp')}}" alt="video-icon">
                   </div>
               </div>
               <div class="swiper-slide">
                   <video class="insta-video" controls="" id="reel7" poster="{{ asset('assets/frontend/images/itrh.webp')}}">
                       <source src="{{ asset('assets/frontend/images/Cuin_2.mp4')}}" type="video/mp4">
                       <source src="{{ asset('assets/frontend/images/Cuin_2.mp4')}}" type="video/ogg">
                    </video>
                    <div class="video-controls1 video-icon insta-play-icon reel7" data-reel="reel7">
                        <img src="{{ asset('assets/frontend/images/video-icon.webp')}}" alt="video-icon">
                    </div>
               </div> --}}
           </div>
        </div>
    </div>
</section>







<section class="faq pt0">
   <div class="container">
       <div class="title_1">
           <div class="title_main">FAQ’s</div>
           <p>Frequently Asked <span>Questions</span></p>
       </div>
       <div class="row justify-content-center">
           <div class="col-xxl-11 col-xl-11">
               <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 What kind of solutions we provide?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Gras-i offers surface solutions for buildings and cars. We provide performance films and graphics solutions, such as window films and Paint Protection Films, for both interior and exterior surfaces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                   Does Gras-i sell directly to end-users?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Gras-i offers surface solutions for buildings and cars. We provide performance films and graphics solutions, such as window films and Paint Protection Films, for both interior and exterior surfaces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I contact the Gras-i team?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Gras-i offers surface solutions for buildings and cars. We provide performance films and graphics solutions, such as window films and Paint Protection Films, for both interior and exterior surfaces.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                 How can I ensure the authenticity of the products I purchase from Gras-i?
                            </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Gras-i offers surface solutions for buildings and cars. We provide performance films and graphics solutions, such as window films and Paint Protection Films, for both interior and exterior surfaces.</p>
                            </div>
                        </div>
                    </div>

                </div>
           </div>
       </div>
   </div>
</section>
{{--home page main content end--}}



{{-- include footer  --}}
@include('frontend.layout.footer')

@endsection



{{-- js code  --}}
@section('js')


        <script>
               var swiper_banner = new Swiper('.swiper-container-banner', {
               autoplay:5000,
               speed: 1000,
               //loop: true,
                     autoplay: {
                     delay: 5000,
                 },
                pagination: {
                    el: '.swiper-pagination-banner',
                    clickable: true
                    },
                    navigation: {
                    nextEl: '.swiper-button-next-banner',
                    prevEl: '.swiper-button-prev-banner',
                    },
                });
        </script>


        <script>
            var swiperverticals = new Swiper(".mySwiper_video", {
            //autoplay:2000,
            speed: 1000,

            slidesPerView: 4,
            spaceBetween:40,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next-video',
                prevEl: '.swiper-button-prev-video',
            },
            breakpoints: {
                1200: {
                    //centeredSlides: true,
                    spaceBetween:30,
                },

                991: {
                slidesPerView: 4,
                centeredSlides: true,
                spaceBetween:30,
                },
                767: {
                slidesPerView: 3,
                centeredSlides: true,
                spaceBetween:20,
                },
                575: {
                slidesPerView: 2,
                spaceBetween:20,
                },
                480: {
                slidesPerView: 1,
                spaceBetween:20,
                },
                0: {
                slidesPerView: 1,
                spaceBetween:20,
                },
            }
            });
        </script>

@endsection
