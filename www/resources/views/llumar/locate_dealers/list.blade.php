{{-- extend master layout --}}
@extends('llumar.layouts.master')
@section('title')
   Locate LLumar Dealer
@endsection
{{-- locate sco --}}
@section('css')
    <style>
        .dealer-card {
            background-color: #000;
            color: #fff;
            min-height: 385px;
            overflow: visible;
            word-wrap: break-word;
            word-break: break-word;
            border: 1px solid #b2524e;
            border-radius: 12px;
            padding: 16px;
        }
        .dealer-card p{
            font-size: 15px;
        }
        .dealer-card h5 {
            color: #ff4d00;
        }

        a {
            color: #fff;
            text-decoration: underline;
        }
        .copy-button-locate-dealer{
            background: transparent;
            border: 1px solid #070707;
            color: #070707;
            font-size: 12px;
        }
        /* Gradient Button */
        .

        /* Background */
        section.dealer {
            background-color: #000;
        }

        /* Title styling */
        .title_main {
            font-size: 32px;
            font-weight: 600;
            color: #fff;
            position: relative;
            display: inline-block;
        }
        .color-orange{
            color: #de5625;
        }
    </style>
@endsection

{{-- locate main content --}}
@section('content')

{{-- locate section start --}}

<section class="p0 inner_page locate_page">
    
    <section class="dealer py-4">
        <div class="container">
            <div class="title_1 text-left mb-4">
                <div class="title_main text-white">Locate LLumar Dealer</div>
                   <div class="title-divider">
                        <img src="{{ asset('assets/llumar/images/dash.svg')}}" alt="">
                    </div>
            </div>

        {!! Form::open(['url' => route('llumar.locate.llumar.dealer'), 'id' => 'form-search', 'method' => 'get']) !!}
            <div class="row g-3 align-items-end mt-4">

                {{-- Left Side: State, City, Search --}}
                <div class="col-12 col-xl-10 col-lg-9">
                    <div class="row g-3 align-items-end">
                        
                        {{-- State --}}
                        <div class="col-md-4">
                            <label class="text-white mb-1">State</label>
                            <div class="custom-select-wrapper-dealer-locate">
                               <select name="state_id"  id="state_id" class=" form-control custom-select-dealer-locate">
                                        <option value="">Select State</option>

                                        @foreach ($states as $state)
                                            <option value="{{$state}}" {{request()->query('state_id') == $state ? 'selected' : ''}}>{{ $state }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                       
                        {{-- City --}}
                        <div class="col-md-4">
                            <label class="text-white mb-1">Location</label>
                            <div class="custom-select-wrapper-dealer-locate">
                                {!! Form::select(
                                    'city_id',
                                    isset($states) ? $cities : [],
                                    request()->query('city_id'),
                                    ['class' => 'form-control custom-select-dealer-locate', 'id' => 'city_id', 'placeholder' => 'Select City']
                                ) !!}
                            </div>
                        </div>

                        {{-- Search Button --}}
                        <div class="col-md-4">
                            <label class="text-white mb-1 d-block invisible">Search</label>
                            <button type="submit" class="btn gradient-btn ">Search</button>
                        </div>
                    </div>
                </div>

                {{-- Become Dealer Button --}}
              <div class="col-12 col-xl-2 col-lg-3 ms-auto text-end">
                <label class="text-white mb-1 d-block invisible">Become a Dealer</label>
                <a href="#" class="btn gradient-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Become a Dealer</a>
            </div>
            </div>
    {!! Form::close() !!}

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
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content text-white" style="background-color: #000; border: 2px solid #b2524e; border-radius: 12px;">

            {{-- Close Button --}}
            <button type="button" class="btn-close position-absolute end-0 m-3" style="filter: invert(1);" data-bs-dismiss="modal" aria-label="Close"></button>

            {{-- Modal Body --}}
            <div class="p-4">
                {{-- Form Start --}}
                {!! Form::open([
                    'url' => route( 'llumar.dealer.locate.send-email'),
                    'method' => 'POST',
                    'id' => 'locate-form',
                    'class' => 'locate-form'
                ]) !!}
                @csrf

                <div class="row mb-4">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <h3 class="mb-0 text-white">Become a Dealer</h3>
                        <a href="#" class="btn " style="border: 1px solid #b2524e; color: #b2524e;">Find a Dealer</a>
                    </div>
                </div>

                <div class="row g-3">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            {!! Form::text('first_name', null, [
                                'class' => 'form-control bg-dark text-white border-secondary',
                                'placeholder' => 'Enter',
                                'id' => 'first_name'
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            {!! Form::text('last_name', null, [
                                'class' => 'form-control bg-dark text-white border-secondary',
                                'placeholder' => 'Enter',
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            {!! Form::text('city', null, [
                                'class' => 'form-control bg-dark text-white border-secondary',
                                'placeholder' => 'Enter City',
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State</label>
                            {!! Form::text('state', null, [
                                'class' => 'form-control bg-dark text-white border-secondary',
                                'placeholder' => 'Enter State',
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Mobile</label>
                            {!! Form::number('number', null, [
                                'class' => 'form-control bg-dark text-white border-secondary',
                                'id' => 'number',
                                'placeholder' => 'ex. 1234567890',
                                'oninput' => "if (this.value.length > 10) this.value = this.value.slice(0, 10);"
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email</label>
                            {!! Form::email('email', null, [
                                'class' => 'form-control bg-dark text-white border-secondary',
                                'placeholder' => 'ex. john@mail.com',
                            ]) !!}
                        </div>
                    </div>

                    <div class="col-12 text-end mt-3">
                    {!! Form::submit('Enquire Now', [
                        'class' => 'btn',
                        'id' => 'btnsubmit1',
                        'style' => 'background-color: #de5625; color: #fff; border: none; padding: 8px 24px;'
                    ]) !!}
                    </div>

                </div>
                {!! Form::close() !!}
                {{-- Form End --}}
            </div>

        </div>
    </div>
</div>




@endsection
{{-- js code --}}

@section('js')
    {!! JsValidator::formRequest('App\Http\Requests\LocateContactRequest', '#locate-form') !!}

    <script>

        $("#state_id").on('change', function (e) {
           
            e.preventDefault();
            $('#status').show();
            $('#preloader').show();
            var url = window.origin + "/dealer-state/" + $(e.currentTarget).val();
          
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
$(document).ready(function () {
    $(".copy-button-locate-dealer").click(function (e) {
        e.preventDefault();
        const button = $(this);
        const textToCopy = this.previousElementSibling.textContent.trim();

        // Copy to clipboard
        const tempTextArea = $("<textarea>");
        $("body").append(tempTextArea);
        tempTextArea.val(textToCopy).select();
        document.execCommand("copy");
        tempTextArea.remove();

        // Save original icon HTML
        const originalHTML = button.html();

        // Show "Copied" with white text
        button.html('<span style="color: white;">Copied</span>');

        // Revert after 2 seconds
        setTimeout(function () {
            button.html(originalHTML);
        }, 2000);
    });
});
</script>


    <script>
        var swiperjourney = new Swiper(".mySwiper_journey", {
            autoplay: 2000,
            speed: 1000,
            autoplay: {
                delay: 4000,
            },
            loop: true,
            slidesPerView: 5,
            spaceBetween: 11,
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
@endsection