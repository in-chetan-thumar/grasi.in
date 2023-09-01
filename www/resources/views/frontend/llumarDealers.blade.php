
@if(!empty(request()->query('state_id')))
<div class="title_1 text-left">
    <div class="title_main" id="cityName">{{$DealersData[0]['city']}}<span>{{$DealersData->count()}}</span></div>
</div>
@else
    <div class="title_1 text-left">
        <div class="title_main" id="cityName">All<span>{{$DealersData->count()}}</span></div>
    </div>
@endif


@foreach ($DealersData as $key => $row)

            <div class="dealers_row">
                <div class="row g-4">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                    <div class="dealers_info">
						<h2>{{$row->dealership_name}}</h2>
						<span>Address: </span>
						<p>{{$row->address}} - {{$row->pincode}}</p>
						<h3>{{$row->contact_name}}</h3>
						<ul>

							<li class="details">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
									<path d="M12.916 0.833984H6.24935C5.69681 0.833984 5.16691 1.05348 4.77621 1.44418C4.38551 1.83488 4.16602 2.36478 4.16602 2.91732V17.084C4.16602 17.6365 4.38551 18.1664 4.77621 18.5571C5.16691 18.9478 5.69681 19.1673 6.24935 19.1673H12.916C13.4685 19.1673 13.9985 18.9478 14.3892 18.5571C14.7799 18.1664 14.9993 17.6365 14.9993 17.084V2.91732C14.9993 2.36478 14.7799 1.83488 14.3892 1.44418C13.9985 1.05348 13.4685 0.833984 12.916 0.833984ZM9.58268 18.334C8.89102 18.334 8.33268 17.7757 8.33268 17.084C8.33268 16.3923 8.89102 15.834 9.58268 15.834C10.2743 15.834 10.8327 16.3923 10.8327 17.084C10.8327 17.7757 10.2743 18.334 9.58268 18.334ZM13.3327 15.0007H5.83268V3.33398H13.3327V15.0007Z" fill="black"/>
								</svg>
								<a href="tel:9876543221" >
									{{$row->contact_number}}
								</a>
								<button class="copy-button"> <img src="{{asset('assets/frontend/images/copy.svg')}}" /></button>
							</li>

							<li class="details">
								<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
									<path d="M15 3H3C2.175 3 1.5075 3.675 1.5075 4.5L1.5 13.5C1.5 14.325 2.175 15 3 15H15C15.825 15 16.5 14.325 16.5 13.5V4.5C16.5 3.675 15.825 3 15 3ZM15 6L9 9.75L3 6V4.5L9 8.25L15 4.5V6Z" fill="black"/>
								</svg>
								<a href="mailto:santosh@gmail.com">
									{{$row->contact_email}}
								</a>
								<button class="copy-button"> <img src="{{asset('assets/frontend/images/copy.svg')}}" /></button>
							</li>

						</ul>
					</div>
				</div>

				<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
					<div class="dealers_map">
{{--						<iframe title="myFrame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60474.123469991544!2d78.0544702293211!3d18.680470466431572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcddb27a9a89045%3A0x9f38c4351a15bbf2!2sNizamabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1691326796663!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}

{{--                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d57765.99227337182!2d{{$row->longitude}}!3d{{$row->latitude}}!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1692266161871!5m2!1sen!2sin" width="100%" height="450"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}


                                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0"
                                        marginwidth="0"
                                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q={{$row->dealership_name}}{{$row->address}} &amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>

					</div>
				</div>

			</div>
		</div>
@endforeach
    <div class="row  mt-4">
        <div class="col-12">
                <div class="float-end">
                     {{$DealersData->links()}}
                </div>
        </div>
    </div>


