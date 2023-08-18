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
                                        <a href="tel:+917400480852">

                                                +91 7400480852
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.833984H7.296C6.07067 0.833984 5.1 0.833984 4.34067 0.935984C3.55933 1.04132 2.92667 1.26265 2.42733 1.76132C1.92867 2.26065 1.70733 2.89332 1.602 3.67465C1.5 4.43465 1.5 5.40465 1.5 6.62998V10.6673C1.50002 11.2629 1.71262 11.839 2.09956 12.2918C2.48649 12.7446 3.02234 13.0444 3.61067 13.1373C3.702 13.6467 3.87867 14.0813 4.232 14.4353C4.63333 14.8367 5.13867 15.0087 5.73867 15.09C6.31667 15.1673 7.052 15.1673 7.96333 15.1673H10.0367C10.948 15.1673 11.6833 15.1673 12.2613 15.09C12.8613 15.0087 13.3667 14.8367 13.768 14.4353C14.1693 14.034 14.3413 13.5287 14.4227 12.9287C14.5 12.3507 14.5 11.6153 14.5 10.704V7.29732C14.5 6.38598 14.5 5.65065 14.4227 5.07265C14.3413 4.47265 14.1693 3.96732 13.768 3.56598C13.414 3.21265 12.9793 3.03598 12.47 2.94465C12.3771 2.35633 12.0773 1.82048 11.6245 1.43354C11.1717 1.04661 10.5956 0.834 10 0.833984ZM11.42 2.84798C11.3186 2.55198 11.1272 2.29509 10.8726 2.11327C10.618 1.93144 10.3129 1.83379 10 1.83398H7.33333C6.062 1.83398 5.15933 1.83532 4.47333 1.92732C3.80333 2.01732 3.41667 2.18665 3.13467 2.46865C2.85267 2.75065 2.68333 3.13732 2.59333 3.80798C2.50133 4.49332 2.5 5.39598 2.5 6.66732V10.6673C2.49981 10.9802 2.59746 11.2853 2.77928 11.5399C2.96111 11.7945 3.218 11.9859 3.514 12.0873C3.5 11.6806 3.5 11.2207 3.5 10.704V7.29732C3.5 6.38598 3.5 5.65065 3.578 5.07265C3.658 4.47265 3.83133 3.96732 4.232 3.56598C4.63333 3.16465 5.13867 2.99265 5.73867 2.91198C6.31667 2.83398 7.052 2.83398 7.96333 2.83398H10.0367C10.5533 2.83398 11.0133 2.83398 11.42 2.84798ZM4.93867 4.27398C5.12333 4.08932 5.382 3.96932 5.872 3.90332C6.37467 3.83598 7.04267 3.83465 7.99933 3.83465H9.99933C10.956 3.83465 11.6233 3.83598 12.1273 3.90332C12.6167 3.96932 12.8753 4.08998 13.06 4.27398C13.2447 4.45865 13.3647 4.71732 13.4307 5.20732C13.498 5.70998 13.4993 6.37798 13.4993 7.33465V10.668C13.4993 11.6247 13.498 12.292 13.4307 12.796C13.3647 13.2853 13.244 13.544 13.06 13.7287C12.8753 13.9133 12.6167 14.0333 12.1267 14.0993C11.6233 14.1667 10.956 14.168 9.99933 14.168H7.99933C7.04267 14.168 6.37467 14.1667 5.87133 14.0993C5.382 14.0333 5.12333 13.9126 4.93867 13.7287C4.754 13.544 4.634 13.2853 4.568 12.7953C4.50067 12.292 4.49933 11.6247 4.49933 10.668V7.33465C4.49933 6.37798 4.50067 5.70998 4.568 5.20665C4.634 4.71732 4.75467 4.45865 4.93867 4.27398Z" fill="#A0A4AC"/>
                                             </svg>
                                        </a>
                                   </div>
                              </div>

                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                   <div class="contact_info_wrpr">
                                        <span>Landline</span>
                                        <a href="tel:022-2850 0371" class="text-to-copy">
                                             022-2850 0371
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="copy-button">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.833984H7.296C6.07067 0.833984 5.1 0.833984 4.34067 0.935984C3.55933 1.04132 2.92667 1.26265 2.42733 1.76132C1.92867 2.26065 1.70733 2.89332 1.602 3.67465C1.5 4.43465 1.5 5.40465 1.5 6.62998V10.6673C1.50002 11.2629 1.71262 11.839 2.09956 12.2918C2.48649 12.7446 3.02234 13.0444 3.61067 13.1373C3.702 13.6467 3.87867 14.0813 4.232 14.4353C4.63333 14.8367 5.13867 15.0087 5.73867 15.09C6.31667 15.1673 7.052 15.1673 7.96333 15.1673H10.0367C10.948 15.1673 11.6833 15.1673 12.2613 15.09C12.8613 15.0087 13.3667 14.8367 13.768 14.4353C14.1693 14.034 14.3413 13.5287 14.4227 12.9287C14.5 12.3507 14.5 11.6153 14.5 10.704V7.29732C14.5 6.38598 14.5 5.65065 14.4227 5.07265C14.3413 4.47265 14.1693 3.96732 13.768 3.56598C13.414 3.21265 12.9793 3.03598 12.47 2.94465C12.3771 2.35633 12.0773 1.82048 11.6245 1.43354C11.1717 1.04661 10.5956 0.834 10 0.833984ZM11.42 2.84798C11.3186 2.55198 11.1272 2.29509 10.8726 2.11327C10.618 1.93144 10.3129 1.83379 10 1.83398H7.33333C6.062 1.83398 5.15933 1.83532 4.47333 1.92732C3.80333 2.01732 3.41667 2.18665 3.13467 2.46865C2.85267 2.75065 2.68333 3.13732 2.59333 3.80798C2.50133 4.49332 2.5 5.39598 2.5 6.66732V10.6673C2.49981 10.9802 2.59746 11.2853 2.77928 11.5399C2.96111 11.7945 3.218 11.9859 3.514 12.0873C3.5 11.6806 3.5 11.2207 3.5 10.704V7.29732C3.5 6.38598 3.5 5.65065 3.578 5.07265C3.658 4.47265 3.83133 3.96732 4.232 3.56598C4.63333 3.16465 5.13867 2.99265 5.73867 2.91198C6.31667 2.83398 7.052 2.83398 7.96333 2.83398H10.0367C10.5533 2.83398 11.0133 2.83398 11.42 2.84798ZM4.93867 4.27398C5.12333 4.08932 5.382 3.96932 5.872 3.90332C6.37467 3.83598 7.04267 3.83465 7.99933 3.83465H9.99933C10.956 3.83465 11.6233 3.83598 12.1273 3.90332C12.6167 3.96932 12.8753 4.08998 13.06 4.27398C13.2447 4.45865 13.3647 4.71732 13.4307 5.20732C13.498 5.70998 13.4993 6.37798 13.4993 7.33465V10.668C13.4993 11.6247 13.498 12.292 13.4307 12.796C13.3647 13.2853 13.244 13.544 13.06 13.7287C12.8753 13.9133 12.6167 14.0333 12.1267 14.0993C11.6233 14.1667 10.956 14.168 9.99933 14.168H7.99933C7.04267 14.168 6.37467 14.1667 5.87133 14.0993C5.382 14.0333 5.12333 13.9126 4.93867 13.7287C4.754 13.544 4.634 13.2853 4.568 12.7953C4.50067 12.292 4.49933 11.6247 4.49933 10.668V7.33465C4.49933 6.37798 4.50067 5.70998 4.568 5.20665C4.634 4.71732 4.75467 4.45865 4.93867 4.27398Z" fill="#A0A4AC"/>
                                             </svg>
                                        </a>
                                   </div>
                              </div>

                              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                   <div class="contact_info_wrpr" >
                                        <span>Email Address</span>
                                        <a href="mailto:enquiry@gras.in" class="text-to-copy">
                                             enquiry@gras.in
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" class="copy-button">
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.833984H7.296C6.07067 0.833984 5.1 0.833984 4.34067 0.935984C3.55933 1.04132 2.92667 1.26265 2.42733 1.76132C1.92867 2.26065 1.70733 2.89332 1.602 3.67465C1.5 4.43465 1.5 5.40465 1.5 6.62998V10.6673C1.50002 11.2629 1.71262 11.839 2.09956 12.2918C2.48649 12.7446 3.02234 13.0444 3.61067 13.1373C3.702 13.6467 3.87867 14.0813 4.232 14.4353C4.63333 14.8367 5.13867 15.0087 5.73867 15.09C6.31667 15.1673 7.052 15.1673 7.96333 15.1673H10.0367C10.948 15.1673 11.6833 15.1673 12.2613 15.09C12.8613 15.0087 13.3667 14.8367 13.768 14.4353C14.1693 14.034 14.3413 13.5287 14.4227 12.9287C14.5 12.3507 14.5 11.6153 14.5 10.704V7.29732C14.5 6.38598 14.5 5.65065 14.4227 5.07265C14.3413 4.47265 14.1693 3.96732 13.768 3.56598C13.414 3.21265 12.9793 3.03598 12.47 2.94465C12.3771 2.35633 12.0773 1.82048 11.6245 1.43354C11.1717 1.04661 10.5956 0.834 10 0.833984ZM11.42 2.84798C11.3186 2.55198 11.1272 2.29509 10.8726 2.11327C10.618 1.93144 10.3129 1.83379 10 1.83398H7.33333C6.062 1.83398 5.15933 1.83532 4.47333 1.92732C3.80333 2.01732 3.41667 2.18665 3.13467 2.46865C2.85267 2.75065 2.68333 3.13732 2.59333 3.80798C2.50133 4.49332 2.5 5.39598 2.5 6.66732V10.6673C2.49981 10.9802 2.59746 11.2853 2.77928 11.5399C2.96111 11.7945 3.218 11.9859 3.514 12.0873C3.5 11.6806 3.5 11.2207 3.5 10.704V7.29732C3.5 6.38598 3.5 5.65065 3.578 5.07265C3.658 4.47265 3.83133 3.96732 4.232 3.56598C4.63333 3.16465 5.13867 2.99265 5.73867 2.91198C6.31667 2.83398 7.052 2.83398 7.96333 2.83398H10.0367C10.5533 2.83398 11.0133 2.83398 11.42 2.84798ZM4.93867 4.27398C5.12333 4.08932 5.382 3.96932 5.872 3.90332C6.37467 3.83598 7.04267 3.83465 7.99933 3.83465H9.99933C10.956 3.83465 11.6233 3.83598 12.1273 3.90332C12.6167 3.96932 12.8753 4.08998 13.06 4.27398C13.2447 4.45865 13.3647 4.71732 13.4307 5.20732C13.498 5.70998 13.4993 6.37798 13.4993 7.33465V10.668C13.4993 11.6247 13.498 12.292 13.4307 12.796C13.3647 13.2853 13.244 13.544 13.06 13.7287C12.8753 13.9133 12.6167 14.0333 12.1267 14.0993C11.6233 14.1667 10.956 14.168 9.99933 14.168H7.99933C7.04267 14.168 6.37467 14.1667 5.87133 14.0993C5.382 14.0333 5.12333 13.9126 4.93867 13.7287C4.754 13.544 4.634 13.2853 4.568 12.7953C4.50067 12.292 4.49933 11.6247 4.49933 10.668V7.33465C4.49933 6.37798 4.50067 5.70998 4.568 5.20665C4.634 4.71732 4.75467 4.45865 4.93867 4.27398Z" fill="#A0A4AC"/>
                                             </svg>
                                        </a>
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


         $(".copy-button").click(function(e) {
               var btn = $(this)
             // Select the text within the paragraph

            var textToCopy =$(this).siblings(".text-to-copy").text();
             //    var textToCopy =$('.number').val();
                     alert(textToCopy)
             // Create a temporary textarea element to hold the text
             var tempTextArea = $("<textarea>");
             $("body").append(tempTextArea);
             tempTextArea.val(textToCopy).select();

             // Copy the text to clipboard
             document.execCommand("copy");

             // Remove the temporary textarea
             tempTextArea.remove();

             // Optionally, provide some visual feedback that the copy was successful
            //    $(this).text("Copied!")
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
