{{-- extend master layout  --}}
@extends('frontend.layout.master')

{{-- locate title  --}}
@section('title') Locate | Gras-I @endsection

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
		<form action="" method="post">
			@csrf
		    <div class="row g-4 align-items-end">
				<div class="col-xxl-10 col-xl-10 col-lg-9 col-md-12">
					<div class="row g-4">

						<div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-4">
					        <div class="form-group input-box select-box">
						        <label>State</label>
						        <div class="relative">
							        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
								        <path d="M5.75593 5.62713C5.35716 6.08759 4.64284 6.08759 4.24407 5.62713L1.23682 2.15465C0.675942 1.50701 1.136 0.5 1.99275 0.5L8.00725 0.5C8.864 0.5 9.32406 1.50701 8.76318 2.15465L5.75593 5.62713Z" fill="#000000"></path>
							        </svg>
							        <select name=""  id="stateSelect" class="form-control input">
										<option value="">Select State</option>

										@foreach ($llumarDealerState as $state)
                                               <option value="">{{ $state }}</option>
                                        @endforeach

								        {{-- <option value="">Maharashtra</option>
								        <option value="">Maharashtra</option>
								        <option value="">Maharashtra</option>
								        <option value="">Maharashtra</option>
								        <option value="">Maharashtra</option> --}}
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
							        <select name="" id="citySelect" class="form-control input">
										<option value="">Select City</option>
                                       
									
									     @foreach ($llumarDealercity as $city)
									          <option value="">{{ $city }}</option>
							              @endforeach 
									

										

								        {{-- <option value="">Mumbai</option>
								        <option value="">Mumbai</option>
								        <option value="">Mumbai</option>
								        <option value="">Mumbai</option>
								        <option value="">Mumbai</option>
								        <option value="">Mumbai</option> --}}
							        </select>
						        </div>
					        </div>
				        </div>

				        <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-4">
					        <div class="submit_btn">
						        <div class="btn btn-primary red"><input type="submit" value="Search"></div>
					        </div>
				        </div>
					</div>
				</div>

				<div class="col-xxl-2 col-xl-2 col-lg-3 col-md-12">
					<a href="#" class="btn btn-primary red" data-bs-toggle="modal" data-bs-target="#exampleModal">Become a Dealer</a>
				</div>
		    </div>
		</form>
		{{-- dealer form end  --}}
	</div>
</section>





<section class="dealers_list pt0">
	<div class="container">
		<div class="title_1 text-left">
			<div class="title_main">Mumbai <span>02</span></div>
		</div>
		<div class="dealers_row">
			<div class="row g-4">
				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
					<div class="dealers_info">
						<h2>Dealer’s name</h2>
						<span>Address: </span>
						<p>1782, Have any question in mind or want to enquire Please feel free to contact us through the form </p>
						<h3>Krishna Jajoo</h3>
						<ul>

							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
									<path d="M12.916 0.833984H6.24935C5.69681 0.833984 5.16691 1.05348 4.77621 1.44418C4.38551 1.83488 4.16602 2.36478 4.16602 2.91732V17.084C4.16602 17.6365 4.38551 18.1664 4.77621 18.5571C5.16691 18.9478 5.69681 19.1673 6.24935 19.1673H12.916C13.4685 19.1673 13.9985 18.9478 14.3892 18.5571C14.7799 18.1664 14.9993 17.6365 14.9993 17.084V2.91732C14.9993 2.36478 14.7799 1.83488 14.3892 1.44418C13.9985 1.05348 13.4685 0.833984 12.916 0.833984ZM9.58268 18.334C8.89102 18.334 8.33268 17.7757 8.33268 17.084C8.33268 16.3923 8.89102 15.834 9.58268 15.834C10.2743 15.834 10.8327 16.3923 10.8327 17.084C10.8327 17.7757 10.2743 18.334 9.58268 18.334ZM13.3327 15.0007H5.83268V3.33398H13.3327V15.0007Z" fill="black"/>
								</svg>
								<a href="tel:9876543221">
									9876543221
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.833984H7.296C6.07067 0.833984 5.1 0.833984 4.34067 0.935984C3.55933 1.04132 2.92667 1.26265 2.42733 1.76132C1.92867 2.26065 1.70733 2.89332 1.602 3.67465C1.5 4.43465 1.5 5.40465 1.5 6.62998V10.6673C1.50002 11.2629 1.71262 11.839 2.09956 12.2918C2.48649 12.7446 3.02234 13.0444 3.61067 13.1373C3.702 13.6467 3.87867 14.0813 4.232 14.4353C4.63333 14.8367 5.13867 15.0087 5.73867 15.09C6.31667 15.1673 7.052 15.1673 7.96333 15.1673H10.0367C10.948 15.1673 11.6833 15.1673 12.2613 15.09C12.8613 15.0087 13.3667 14.8367 13.768 14.4353C14.1693 14.034 14.3413 13.5287 14.4227 12.9287C14.5 12.3507 14.5 11.6153 14.5 10.704V7.29732C14.5 6.38598 14.5 5.65065 14.4227 5.07265C14.3413 4.47265 14.1693 3.96732 13.768 3.56598C13.414 3.21265 12.9793 3.03598 12.47 2.94465C12.3771 2.35633 12.0773 1.82048 11.6245 1.43354C11.1717 1.04661 10.5956 0.834 10 0.833984ZM11.42 2.84798C11.3186 2.55198 11.1272 2.29509 10.8726 2.11327C10.618 1.93144 10.3129 1.83379 10 1.83398H7.33333C6.062 1.83398 5.15933 1.83532 4.47333 1.92732C3.80333 2.01732 3.41667 2.18665 3.13467 2.46865C2.85267 2.75065 2.68333 3.13732 2.59333 3.80798C2.50133 4.49332 2.5 5.39598 2.5 6.66732V10.6673C2.49981 10.9802 2.59746 11.2853 2.77928 11.5399C2.96111 11.7945 3.218 11.9859 3.514 12.0873C3.5 11.6806 3.5 11.2207 3.5 10.704V7.29732C3.5 6.38598 3.5 5.65065 3.578 5.07265C3.658 4.47265 3.83133 3.96732 4.232 3.56598C4.63333 3.16465 5.13867 2.99265 5.73867 2.91198C6.31667 2.83398 7.052 2.83398 7.96333 2.83398H10.0367C10.5533 2.83398 11.0133 2.83398 11.42 2.84798ZM4.93867 4.27398C5.12333 4.08932 5.382 3.96932 5.872 3.90332C6.37467 3.83598 7.04267 3.83465 7.99933 3.83465H9.99933C10.956 3.83465 11.6233 3.83598 12.1273 3.90332C12.6167 3.96932 12.8753 4.08998 13.06 4.27398C13.2447 4.45865 13.3647 4.71732 13.4307 5.20732C13.498 5.70998 13.4993 6.37798 13.4993 7.33465V10.668C13.4993 11.6247 13.498 12.292 13.4307 12.796C13.3647 13.2853 13.244 13.544 13.06 13.7287C12.8753 13.9133 12.6167 14.0333 12.1267 14.0993C11.6233 14.1667 10.956 14.168 9.99933 14.168H7.99933C7.04267 14.168 6.37467 14.1667 5.87133 14.0993C5.382 14.0333 5.12333 13.9126 4.93867 13.7287C4.754 13.544 4.634 13.2853 4.568 12.7953C4.50067 12.292 4.49933 11.6247 4.49933 10.668V7.33465C4.49933 6.37798 4.50067 5.70998 4.568 5.20665C4.634 4.71732 4.75467 4.45865 4.93867 4.27398Z" fill="#A0A4AC"/>
                                    </svg>
								</a>
							</li>

							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
									<path d="M15 3H3C2.175 3 1.5075 3.675 1.5075 4.5L1.5 13.5C1.5 14.325 2.175 15 3 15H15C15.825 15 16.5 14.325 16.5 13.5V4.5C16.5 3.675 15.825 3 15 3ZM15 6L9 9.75L3 6V4.5L9 8.25L15 4.5V6Z" fill="black"/>
								</svg>
								<a href="mailto:santosh@gmail.com">
									santosh@gmail.com 
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.833984H7.296C6.07067 0.833984 5.1 0.833984 4.34067 0.935984C3.55933 1.04132 2.92667 1.26265 2.42733 1.76132C1.92867 2.26065 1.70733 2.89332 1.602 3.67465C1.5 4.43465 1.5 5.40465 1.5 6.62998V10.6673C1.50002 11.2629 1.71262 11.839 2.09956 12.2918C2.48649 12.7446 3.02234 13.0444 3.61067 13.1373C3.702 13.6467 3.87867 14.0813 4.232 14.4353C4.63333 14.8367 5.13867 15.0087 5.73867 15.09C6.31667 15.1673 7.052 15.1673 7.96333 15.1673H10.0367C10.948 15.1673 11.6833 15.1673 12.2613 15.09C12.8613 15.0087 13.3667 14.8367 13.768 14.4353C14.1693 14.034 14.3413 13.5287 14.4227 12.9287C14.5 12.3507 14.5 11.6153 14.5 10.704V7.29732C14.5 6.38598 14.5 5.65065 14.4227 5.07265C14.3413 4.47265 14.1693 3.96732 13.768 3.56598C13.414 3.21265 12.9793 3.03598 12.47 2.94465C12.3771 2.35633 12.0773 1.82048 11.6245 1.43354C11.1717 1.04661 10.5956 0.834 10 0.833984ZM11.42 2.84798C11.3186 2.55198 11.1272 2.29509 10.8726 2.11327C10.618 1.93144 10.3129 1.83379 10 1.83398H7.33333C6.062 1.83398 5.15933 1.83532 4.47333 1.92732C3.80333 2.01732 3.41667 2.18665 3.13467 2.46865C2.85267 2.75065 2.68333 3.13732 2.59333 3.80798C2.50133 4.49332 2.5 5.39598 2.5 6.66732V10.6673C2.49981 10.9802 2.59746 11.2853 2.77928 11.5399C2.96111 11.7945 3.218 11.9859 3.514 12.0873C3.5 11.6806 3.5 11.2207 3.5 10.704V7.29732C3.5 6.38598 3.5 5.65065 3.578 5.07265C3.658 4.47265 3.83133 3.96732 4.232 3.56598C4.63333 3.16465 5.13867 2.99265 5.73867 2.91198C6.31667 2.83398 7.052 2.83398 7.96333 2.83398H10.0367C10.5533 2.83398 11.0133 2.83398 11.42 2.84798ZM4.93867 4.27398C5.12333 4.08932 5.382 3.96932 5.872 3.90332C6.37467 3.83598 7.04267 3.83465 7.99933 3.83465H9.99933C10.956 3.83465 11.6233 3.83598 12.1273 3.90332C12.6167 3.96932 12.8753 4.08998 13.06 4.27398C13.2447 4.45865 13.3647 4.71732 13.4307 5.20732C13.498 5.70998 13.4993 6.37798 13.4993 7.33465V10.668C13.4993 11.6247 13.498 12.292 13.4307 12.796C13.3647 13.2853 13.244 13.544 13.06 13.7287C12.8753 13.9133 12.6167 14.0333 12.1267 14.0993C11.6233 14.1667 10.956 14.168 9.99933 14.168H7.99933C7.04267 14.168 6.37467 14.1667 5.87133 14.0993C5.382 14.0333 5.12333 13.9126 4.93867 13.7287C4.754 13.544 4.634 13.2853 4.568 12.7953C4.50067 12.292 4.49933 11.6247 4.49933 10.668V7.33465C4.49933 6.37798 4.50067 5.70998 4.568 5.20665C4.634 4.71732 4.75467 4.45865 4.93867 4.27398Z" fill="#A0A4AC"/>
                                    </svg>
								</a>
							</li>

						</ul>
					</div>
				</div>

				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
					<div class="dealers_map">
						<iframe title="myFrame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60474.123469991544!2d78.0544702293211!3d18.680470466431572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcddb27a9a89045%3A0x9f38c4351a15bbf2!2sNizamabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1691326796663!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>

		<div class="dealers_row">
			<div class="row g-4">
				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
					<div class="dealers_info">
						<h2>Dealer’s name</h2>
						<span>Address: </span>
						<p>1782, Have any question in mind or want to enquire Please feel free to contact us through the form </p>
						<h3>Krishna Jajoo</h3>
						<ul>
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
									<path d="M12.916 0.833984H6.24935C5.69681 0.833984 5.16691 1.05348 4.77621 1.44418C4.38551 1.83488 4.16602 2.36478 4.16602 2.91732V17.084C4.16602 17.6365 4.38551 18.1664 4.77621 18.5571C5.16691 18.9478 5.69681 19.1673 6.24935 19.1673H12.916C13.4685 19.1673 13.9985 18.9478 14.3892 18.5571C14.7799 18.1664 14.9993 17.6365 14.9993 17.084V2.91732C14.9993 2.36478 14.7799 1.83488 14.3892 1.44418C13.9985 1.05348 13.4685 0.833984 12.916 0.833984ZM9.58268 18.334C8.89102 18.334 8.33268 17.7757 8.33268 17.084C8.33268 16.3923 8.89102 15.834 9.58268 15.834C10.2743 15.834 10.8327 16.3923 10.8327 17.084C10.8327 17.7757 10.2743 18.334 9.58268 18.334ZM13.3327 15.0007H5.83268V3.33398H13.3327V15.0007Z" fill="black"/>
								</svg>
								<a href="tel:9876543221">
									9876543221 
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.833984H7.296C6.07067 0.833984 5.1 0.833984 4.34067 0.935984C3.55933 1.04132 2.92667 1.26265 2.42733 1.76132C1.92867 2.26065 1.70733 2.89332 1.602 3.67465C1.5 4.43465 1.5 5.40465 1.5 6.62998V10.6673C1.50002 11.2629 1.71262 11.839 2.09956 12.2918C2.48649 12.7446 3.02234 13.0444 3.61067 13.1373C3.702 13.6467 3.87867 14.0813 4.232 14.4353C4.63333 14.8367 5.13867 15.0087 5.73867 15.09C6.31667 15.1673 7.052 15.1673 7.96333 15.1673H10.0367C10.948 15.1673 11.6833 15.1673 12.2613 15.09C12.8613 15.0087 13.3667 14.8367 13.768 14.4353C14.1693 14.034 14.3413 13.5287 14.4227 12.9287C14.5 12.3507 14.5 11.6153 14.5 10.704V7.29732C14.5 6.38598 14.5 5.65065 14.4227 5.07265C14.3413 4.47265 14.1693 3.96732 13.768 3.56598C13.414 3.21265 12.9793 3.03598 12.47 2.94465C12.3771 2.35633 12.0773 1.82048 11.6245 1.43354C11.1717 1.04661 10.5956 0.834 10 0.833984ZM11.42 2.84798C11.3186 2.55198 11.1272 2.29509 10.8726 2.11327C10.618 1.93144 10.3129 1.83379 10 1.83398H7.33333C6.062 1.83398 5.15933 1.83532 4.47333 1.92732C3.80333 2.01732 3.41667 2.18665 3.13467 2.46865C2.85267 2.75065 2.68333 3.13732 2.59333 3.80798C2.50133 4.49332 2.5 5.39598 2.5 6.66732V10.6673C2.49981 10.9802 2.59746 11.2853 2.77928 11.5399C2.96111 11.7945 3.218 11.9859 3.514 12.0873C3.5 11.6806 3.5 11.2207 3.5 10.704V7.29732C3.5 6.38598 3.5 5.65065 3.578 5.07265C3.658 4.47265 3.83133 3.96732 4.232 3.56598C4.63333 3.16465 5.13867 2.99265 5.73867 2.91198C6.31667 2.83398 7.052 2.83398 7.96333 2.83398H10.0367C10.5533 2.83398 11.0133 2.83398 11.42 2.84798ZM4.93867 4.27398C5.12333 4.08932 5.382 3.96932 5.872 3.90332C6.37467 3.83598 7.04267 3.83465 7.99933 3.83465H9.99933C10.956 3.83465 11.6233 3.83598 12.1273 3.90332C12.6167 3.96932 12.8753 4.08998 13.06 4.27398C13.2447 4.45865 13.3647 4.71732 13.4307 5.20732C13.498 5.70998 13.4993 6.37798 13.4993 7.33465V10.668C13.4993 11.6247 13.498 12.292 13.4307 12.796C13.3647 13.2853 13.244 13.544 13.06 13.7287C12.8753 13.9133 12.6167 14.0333 12.1267 14.0993C11.6233 14.1667 10.956 14.168 9.99933 14.168H7.99933C7.04267 14.168 6.37467 14.1667 5.87133 14.0993C5.382 14.0333 5.12333 13.9126 4.93867 13.7287C4.754 13.544 4.634 13.2853 4.568 12.7953C4.50067 12.292 4.49933 11.6247 4.49933 10.668V7.33465C4.49933 6.37798 4.50067 5.70998 4.568 5.20665C4.634 4.71732 4.75467 4.45865 4.93867 4.27398Z" fill="#A0A4AC"/>
                                    </svg>
								</a>
							</li>

							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
									<path d="M15 3H3C2.175 3 1.5075 3.675 1.5075 4.5L1.5 13.5C1.5 14.325 2.175 15 3 15H15C15.825 15 16.5 14.325 16.5 13.5V4.5C16.5 3.675 15.825 3 15 3ZM15 6L9 9.75L3 6V4.5L9 8.25L15 4.5V6Z" fill="black"/>
								</svg>
								<a href="mailto:santosh@gmail.com">
									santosh@gmail.com 
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.833984H7.296C6.07067 0.833984 5.1 0.833984 4.34067 0.935984C3.55933 1.04132 2.92667 1.26265 2.42733 1.76132C1.92867 2.26065 1.70733 2.89332 1.602 3.67465C1.5 4.43465 1.5 5.40465 1.5 6.62998V10.6673C1.50002 11.2629 1.71262 11.839 2.09956 12.2918C2.48649 12.7446 3.02234 13.0444 3.61067 13.1373C3.702 13.6467 3.87867 14.0813 4.232 14.4353C4.63333 14.8367 5.13867 15.0087 5.73867 15.09C6.31667 15.1673 7.052 15.1673 7.96333 15.1673H10.0367C10.948 15.1673 11.6833 15.1673 12.2613 15.09C12.8613 15.0087 13.3667 14.8367 13.768 14.4353C14.1693 14.034 14.3413 13.5287 14.4227 12.9287C14.5 12.3507 14.5 11.6153 14.5 10.704V7.29732C14.5 6.38598 14.5 5.65065 14.4227 5.07265C14.3413 4.47265 14.1693 3.96732 13.768 3.56598C13.414 3.21265 12.9793 3.03598 12.47 2.94465C12.3771 2.35633 12.0773 1.82048 11.6245 1.43354C11.1717 1.04661 10.5956 0.834 10 0.833984ZM11.42 2.84798C11.3186 2.55198 11.1272 2.29509 10.8726 2.11327C10.618 1.93144 10.3129 1.83379 10 1.83398H7.33333C6.062 1.83398 5.15933 1.83532 4.47333 1.92732C3.80333 2.01732 3.41667 2.18665 3.13467 2.46865C2.85267 2.75065 2.68333 3.13732 2.59333 3.80798C2.50133 4.49332 2.5 5.39598 2.5 6.66732V10.6673C2.49981 10.9802 2.59746 11.2853 2.77928 11.5399C2.96111 11.7945 3.218 11.9859 3.514 12.0873C3.5 11.6806 3.5 11.2207 3.5 10.704V7.29732C3.5 6.38598 3.5 5.65065 3.578 5.07265C3.658 4.47265 3.83133 3.96732 4.232 3.56598C4.63333 3.16465 5.13867 2.99265 5.73867 2.91198C6.31667 2.83398 7.052 2.83398 7.96333 2.83398H10.0367C10.5533 2.83398 11.0133 2.83398 11.42 2.84798ZM4.93867 4.27398C5.12333 4.08932 5.382 3.96932 5.872 3.90332C6.37467 3.83598 7.04267 3.83465 7.99933 3.83465H9.99933C10.956 3.83465 11.6233 3.83598 12.1273 3.90332C12.6167 3.96932 12.8753 4.08998 13.06 4.27398C13.2447 4.45865 13.3647 4.71732 13.4307 5.20732C13.498 5.70998 13.4993 6.37798 13.4993 7.33465V10.668C13.4993 11.6247 13.498 12.292 13.4307 12.796C13.3647 13.2853 13.244 13.544 13.06 13.7287C12.8753 13.9133 12.6167 14.0333 12.1267 14.0993C11.6233 14.1667 10.956 14.168 9.99933 14.168H7.99933C7.04267 14.168 6.37467 14.1667 5.87133 14.0993C5.382 14.0333 5.12333 13.9126 4.93867 13.7287C4.754 13.544 4.634 13.2853 4.568 12.7953C4.50067 12.292 4.49933 11.6247 4.49933 10.668V7.33465C4.49933 6.37798 4.50067 5.70998 4.568 5.20665C4.634 4.71732 4.75467 4.45865 4.93867 4.27398Z" fill="#A0A4AC"/>
                                    </svg>
								</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
					<div class="dealers_map">
						<iframe title="myFrame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60474.123469991544!2d78.0544702293211!3d18.680470466431572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcddb27a9a89045%3A0x9f38c4351a15bbf2!2sNizamabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1691326796663!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
  	    <div class="modal-content">
            <div class="footer_form_main">
				{{-- model form start  --}}
				<form action="">
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
								<input class="form-control input" placeholder="Type here" value="" type="text">
							</div>
						</div>

						<div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6">
							<div class="form-group input-box">
								<label>Last Name</label>
								<input class="form-control input" placeholder="Type here" value="" type="text">
							</div>
						</div>

						<div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="form-group input-box select-box">
								<label>Location</label>
								<div class="relative">
								    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
									    <path d="M5.75593 5.62713C5.35716 6.08759 4.64284 6.08759 4.24407 5.62713L1.23682 2.15465C0.675942 1.50701 1.136 0.5 1.99275 0.5L8.00725 0.5C8.864 0.5 9.32406 1.50701 8.76318 2.15465L5.75593 5.62713Z" fill="#35ADD9"/>
								    </svg>
								    <select name="" id="" class="form-control input">
									    <option value="">Location</option>
									    <option value="">Location</option>
									    <option value="">Location</option>
									    <option value="">Location</option>
									    <option value="">Location</option>
									    <option value="">Location</option>
								    </select>
							    </div>
							</div>
						</div>

						<div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="form-group input-box">
								<label>Mobile</label>
								<input class="form-control input" placeholder="Mobile Number" value="" type="number">
							</div>
						</div>

						<div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="form-group input-box">
								<label>Email</label>
								<input class="form-control input" placeholder="email address" value="" type="email">
							</div>
						</div>

						<div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="submit_btn">
								<div class="btn btn-primary">
									<input placeholder="Enquire Now" value="Enquire Now" type="submit">
								</div>
							</div>
						</div>

					</div>
				</form>
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

<script>
    // Use JavaScript/jQuery to handle AJAX request
    $('#stateSelect').on('change', function() {
        var selectedState = $(this).val();

        // Send AJAX request to fetch cities based on selected state
        $.get('/get-cities', { state: selectedState }, function(data) {
            $('#citySelect').empty();
            $.each(data.cities, function(key, value) {
                $('#citySelect').append($('<option>').text(value).attr('value', value));
            });
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