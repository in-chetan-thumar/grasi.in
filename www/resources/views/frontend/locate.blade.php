{{-- extend master layout  --}}
@extends('frontend.layout.master')

{{-- locate sco  --}}
@section('sco')
@endsection

{{-- locate main content  --}}
@section('content')

{{-- locate section start --}}

<section class="p0 inner_page locate_page">
<section class="inner_banner p0">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xxl-12 col-xl-12">
				<div class="row">
					<div class="col-xxl-12 col-xl-12">
						<figcaption>
							<img src="{{ asset('assets/frontend/images/locate_logo.png')}}" alt="image">
						</figcaption>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="dealer">
	<div class="container">
		<div class="title_1 text-left">
			<div class="title_main">Locate LLumar Dealer</div>
		</div>
		{{-- dealer form start  --}}

        {!! Form::open(['url' =>route('frontend.locate'),'id' =>'form-search','method' => 'get']) !!}
		    <div class="row g-4 align-items-end">
				<div class="col-xxl-10 col-xl-10 col-lg-9 col-md-12">
					<div class="row g-4">

						<div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-4">

					        <div class="form-group input-box select-box" id="filterDropdown">
						        <label>State</label>
						        <div class="relative">
							        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
								        <path d="M5.75593 5.62713C5.35716 6.08759 4.64284 6.08759 4.24407 5.62713L1.23682 2.15465C0.675942 1.50701 1.136 0.5 1.99275 0.5L8.00725 0.5C8.864 0.5 9.32406 1.50701 8.76318 2.15465L5.75593 5.62713Z" fill="#000000"></path>
							        </svg>
                                    <select name="state_id"  id="state_id" class="form-control input">
                                        <option value="">Select State</option>

                                        @foreach ($states as $state)
                                            <option value="{{$state}}" {{request()->query('state_id') == $state ? 'selected' : ''}}>{{ $state }}</option>
                                        @endforeach
                                    </select>
						        </div>
					        </div>
				        </div>

				        <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-4">
					        <div class="form-group input-box select-box">
						        <label>Location</label>
						        <div class="relative">
							        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
								        <path d="M5.75593 5.62713C5.35716 6.08759 4.64284 6.08759 4.24407 5.62713L1.23682 2.15465C0.675942 1.50701 1.136 0.5 1.99275 0.5L8.00725 0.5C8.864 0.5 9.32406 1.50701 8.76318 2.15465L5.75593 5.62713Z" fill="#000000"></path>
							        </svg>

                                    {!! Form::select(
                                 'city_id',
                                 isset($states) ? $cities : [],
                                     request()->query('city_id'),
                                 ['class' => 'form-control input', 'id' => 'city_id', 'placeholder' => 'Select City']
                                 ) !!}

						        </div>
					        </div>
				        </div>

				        <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-4">
					        <div class="submit_btn">
						        <div class="btn btn-primary red">
                                    {!! Form::submit('Search', ['class' => 'btn ', 'id' => 'filterBtn']) !!}

                                </div>
					        </div>
				        </div>
					</div>
				</div>

				<div class="col-xxl-2 col-xl-2 col-lg-3 col-md-12 link" >

					<a href="#" class="btn btn-primary red" data-bs-toggle="modal" data-bs-target="#exampleModal">Become a Dealer</a>
				</div>
		    </div>
		{!!Form::close()!!}
		{{-- dealer form end  --}}
	</div>
</section>

    <div class="clearfix"></div>

<section class="dealers_list pt0">
	<div class="container" id="filteredData">
             {!!$llumarDealers!!}
	</div>

</section>


</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
  	    <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="footer_form_main">
				{{-- model form start  --}}
					{!! Form::open([
						'url' => route('locate.send-email'),
						'method' => 'POST',
						'id'=>'locate-form',
						'class'=>'locate-form'
					]) !!}
						@csrf
					<div class="row">

						<div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="form-group input-box popup_head">
							    <div class="d-flex align-items-center justify-content-between">
								    <div><h3>Become a dealer</h3></div>
								    <div><a href="#" class="btn btn-primary">Find a Dealer</a></div>
							    </div>
							</div>
						</div>

						<div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6">
							<div class="form-group input-box">
								<label>First Name</label>
								{!! Form::text('first_name',  null, [
                                    'class' => 'form-control input first_name',
									'placeholder' => 'Enter',
                                    'id'=>'first_name'
                                  ]) !!}


							</div>
						</div>

						<div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6">
							<div class="form-group input-box">
								<label>Last Name</label>
								{!! Form::text('last_name',  null, [
                                    'class' => 'form-control input ',
                                   'placeholder' => 'Enter',
                                ]) !!}


							</div>
						</div>

						<div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
							<div class="form-group input-box select-box">
								<label>City</label>
								{!! Form::text('city',  null, [
									'class' => 'form-control input ',
									'placeholder' => 'Enter City',
								   ]) !!}
						</div>
						</div>
                        <div class="col-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group input-box">
                                <label>State</label>
                                {!! Form::text('state',  null, [
                                       'class' => 'form-control input ',
                                       'placeholder' => 'Enter State',
                                ]) !!}

                                <span class="text-danger" style="font-size:15px"></span>
                            </div>
                        </div>

						<div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="form-group input-box">
								<label>Mobile</label>
								{!! Form::number('number',  null, [
                                       'class' => 'form-control input ',
									   'id' =>'number',
                                       'placeholder' => 'ex. 1234567890',
                                       'oninput'=>"javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);",'maxlength' => "10",
                                ]) !!}

                                <span class="text-danger" style="font-size:15px"></span>

							</div>
						</div>

						<div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="form-group input-box">
								<label>Email</label>
								{!! Form::text('email',  null, [
                                      'class' => 'form-control input ',
                                     'placeholder' => 'ex. john@mail.com',
                                 ]) !!}


							</div>
						</div>

						<div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="submit_btn">
								<div class="btn btn-primary">
									{!! Form::submit('Enquire Now', [
										'class' => 'save primary-button',
										'id' => 'btnsubmit1'
									]) !!}
								</div>
							</div>
						</div>

					</div>
					{!!Form::close()!!}

				{{-- model form end--}}
			</div>
		</div>
  </div>
</div>


{{-- locate section end --}}


{{-- include footer  --}}
@include('frontend.layout.footer')


@endsection




{{-- js code  --}}

@section('js')
    {!! JsValidator::formRequest('App\Http\Requests\LocateContactRequest', '#locate-form') !!}

<script>

    $("#state_id").on('change',function (e) {
        e.preventDefault();
        $('#status').show();
        $('#preloader').show();
        var url = window.origin+"/state/"+$(e.currentTarget).val();
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: "get",
            data: {},
            success: function (data, textStatus, jqXHR) {
                $('#status').hide();
                $('#preloader').hide();
                if (!data.error) {
                    $("#city_id").html(data.view);
                } else {
                    toastr.error(data.message);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $('#status').hide()
                $('#preloader').hide();
                toastr.error('Error occurred!');
            }
        });
    })
    //     // Send AJAX request to fetch cities based on selected state
    //     $.get('/get-cities', { state: selectedState }, function(data) {
    //         $('#citySelect').empty();
    //         $.each(data.cities, function(key, value) {
    //             $('#citySelect').append($('<option>').text(value).attr('value', value));
    //         });
    //     });
    // });
</script>
    <script>
        // $('#filteredData').hide;
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
        });

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

@endsection
