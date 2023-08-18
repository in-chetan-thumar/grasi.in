{{-- extend master layout  --}}
@extends('frontend.layout.master')

{{-- home page title  --}}
@section('title') Contact | Gras-I @endsection

{{-- home page main content  --}}
@section('content')


{{-- contact section start  --}}
<section class="p0 inner_page contact_page">

     <section class="inner_banner p0" style="background:url({{ asset('assets/frontend/images/contact_pagebg.webp')}});background-position: center;background-repeat: no-repeat;background-size: cover;">
          <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                         <div class="row">
                              <div class="col-xl-8 col-lg-8">
                                   <figcaption>
                                        <h2>We'd love to hear from you</h2>
                                        <p>Have any question in mind or want to enquire? Please feel free to contact us through the form or the following details.</p>
                                   </figcaption>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>




     <section class="contact_details">
          <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                         <div class="row g-4">

                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                   <div class="contact_info_wrpr">
                                        <span>Phone</span>
                                        <a href="tel:+917400480852" class="text-to-copy">
                                            <input type="hidden"  name="text" value="+91 7400480852" class="number">
                                                +91 7400480852
                                        </a>
                                       <button class="copy-button"> <img src="{{asset('assets/frontend/images/copy.svg')}}" /></button>
                                   </div>
                              </div>

                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">

                                   <div class="contact_info_wrpr">
                                        <span>Landline</span>
                                        <a href="tel:022-2850 0371" class="text-to-copy">
                                             022-2850 0371
                                        </a>
                                       <button class="copy-button"> <img src="{{asset('assets/frontend/images/copy.svg')}}" /></button>
                                   </div>
                              </div>

                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                   <div class="contact_info_wrpr" >
                                        <span>Email Address</span>
                                        <a href="mailto:enquiry@gras.in" class="text-to-copy">
                                             enquiry@gras.in
                                        </a>
                                       <button class="copy-button"> <img src="{{asset('assets/frontend/images/copy.svg')}}" /></button>
                                   </div>
                              </div>

                         </div>
                    </div>
               </div>
          </div>
     </section>


     <section class="contact_page_form">
          <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                         <div class="footer_form_main">

                             {!! Form::open([
                                 'url' => route('contact.store'),
                                 'method' => 'POST',
                                 'id'=>'Contact-form',
                                 'class'=>'Contact-form'
                             ]) !!}
                             <div class="row">
                                                       <div class="col-12 col-lg-6 col-lg-6 col-md-6 col-sm-6">
                                                            <div class="form-group input-box">
                                                                 <label>First Name</label>

                                                                {!! Form::text('first_name',  null, [
                                          'class' => 'form-control input first_name',
                                          'placeholder' => 'Enter',
                                          'id'=>'first_name'
                                      ]) !!}

                                                            </div>
                                                       </div>
                                                       <div class="col-12 col-lg-6 col-lg-6 col-md-6 col-sm-6">
                                                            <div class="form-group input-box">
                                                                 <label>Last Name</label>

                                                                {!! Form::text('last_name',  null, [
                                          'class' => 'form-control input ',
                                          'placeholder' => 'Enter',
                                      ]) !!}

                                                            </div>
                                                       </div>

                                                       <div class="col-12 col-lg-6 col-lg-6 col-md-6 col-sm-6">
                                                            <div class="form-group input-box">
                                                                 <label>Email</label>
                                                                {!! Form::text('email',  null, [
                                                 'class' => 'form-control input ',
                                                 'placeholder' => 'ex. john@mail.com',
                                             ]) !!}

                                                            </div>
                                                       </div>
                                                       <div class="col-12 col-lg-6 col-lg-6 col-md-6 col-sm-6">
                                                            <div class="form-group input-box select-box">
                                                                 <label>Select a Subject</label>
                                                                 <div class="relative">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" width="9" height="6" viewBox="0 0 9 6" fill="none"> <path d="M4.85786 5.83586C4.80723 5.88839 4.74709 5.93001 4.68089 5.95833C4.61469 5.98664 4.54374 6.0011 4.47213 6.00086H4.2002C4.05585 5.99983 3.91754 5.94067 3.81448 5.83586L0.106722 1.98086C0.0729013 1.94601 0.0460606 1.90457 0.0277449 1.85892C0.00942918 1.81327 0 1.76431 0 1.71486C0 1.66542 0.00942918 1.61646 0.0277449 1.57081C0.0460606 1.52516 0.0729013 1.48372 0.106722 1.44886L0.619733 0.915864C0.652695 0.88088 0.692068 0.853081 0.735538 0.834102C0.779008 0.815123 0.825697 0.805346 0.872863 0.805346C0.920028 0.805346 0.966718 0.815123 1.01019 0.834102C1.05366 0.853081 1.09303 0.88088 1.12599 0.915864L4.33906 4.25286L7.54827 0.915864C7.58189 0.880641 7.62192 0.852679 7.66603 0.833596C7.71014 0.814513 7.75746 0.804687 7.80526 0.804688C7.85305 0.804688 7.90037 0.814513 7.94448 0.833596C7.98859 0.852679 8.02862 0.880641 8.06224 0.915864L8.5685 1.44886C8.60232 1.48372 8.62916 1.52516 8.64748 1.57081C8.6658 1.61646 8.67523 1.66542 8.67523 1.71486C8.67523 1.76431 8.6658 1.81327 8.64748 1.85892C8.62916 1.90457 8.60232 1.94601 8.5685 1.98086L4.85786 5.83586Z" fill="#5B6782"/>
                                                                 </svg>
                                                                     <select name="subject"    class="form-control input subject">
                                                                      <option value="">Please Select</option>
                                                                      <option value="1">Select</option>
                                                                      <option value="2">Select</option>
                                                                      <option value="3">Select</option>
                                                                      <option value="4">Select</option>
                                                                      <option value="5">Select</option>
                                                                 </select>

                                                            </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-12 col-lg-12 col-lg-12 col-md-12 col-sm-12">
                                                            <div class="form-group input-box">
                                                                 <label>Message</label>
                                                                {!! Form::textarea('message',  null, [
                                                 'class' => 'form-control input message',
                                                 'placeholder' => 'Tell us more about your project, needs, and timeline.',
                                                 'rows'=>'10',
                                                 'cols'=>'30'
                                             ]) !!}


                                                            </div>
                                                       </div>
                                                       <div class="col-12 col-lg-12 col-lg-12 col-md-12 col-sm-12">

                                                            <div class="submit_btn">
                                                                 <div class="btn btn-primary">
                                                                     {!! Form::submit('Send Message', ['class' => 'save primary-button', 'id' => 'btnsubmit1']) !!}

                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>

                             {{ Form::close() }}


                         </div>
                    </div>
               </div>
          </div>
     </section>
</section>
     {{-- contact section end  --}}



{{-- include footer  --}}
@include('frontend.layout.footer')


@endsection




{{-- js  --}}
@section('js')

    {!! JsValidator::formRequest('App\Http\Requests\ContactRequest', '#Contact-form') !!}

<script>

     $(document).ready(function() {
         $(".copy-button").click(function (e) {
             const textToCopy = this.previousElementSibling.textContent;
             var tempTextArea = $("<textarea>");
             $("body").append(tempTextArea);
             tempTextArea.val(textToCopy).select();
             document.execCommand("copy");
             tempTextArea.remove();
             alert("Copied!");
         });

     })

 </script>


<script>
     var swiperjourney = new Swiper(".mySwiper_journey", {
       autoplay:2000,
     speed: 1000,
     autoplay: {
       delay: 4000,
   },
          loop: true,
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
           slidesPerView: 5,
         },
         575: {
           slidesPerView: 2,
         },
         480: {
           slidesPerView: 1,
         },
         0: {
           slidesPerView: 1,
         },
     }
     });
   </script>


    <script>
     var swiperjourney = new Swiper(".mySwiper_testimonials", {
       autoplay:2000,
     speed: 1000,
     autoplay: {
       delay: 4000,
   },
          loop: true,
       slidesPerView: 2,
       spaceBetween:34,
       pagination: {
         el: ".swiper-pagination-testimonials",
         clickable: true,
       },
        navigation: {
         nextEl: '.swiper-button-next-testimonials',
         prevEl: '.swiper-button-prev-testimonials',
       },
       breakpoints: {
         992: {
           slidesPerView: 2,
         },
         991: {
           slidesPerView: 2,
         },
         575: {
           slidesPerView: 2,
         },
         480: {
           slidesPerView: 1,
         },
         0: {
           slidesPerView: 1,
         },
     }
     });
   </script>
@endsection
