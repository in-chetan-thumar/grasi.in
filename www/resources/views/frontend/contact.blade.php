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
                                        <a href="mailto:enquiry@grasi.in" class="text-to-copy">
                                            enquiry@grasi.in
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
                                                                 <label>Subject</label>
                                                                {!! Form::text('subject',  null, [
                                               'class' => 'form-control input ',
                                               'placeholder' => 'Enter subject',
                                           ]) !!}
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
