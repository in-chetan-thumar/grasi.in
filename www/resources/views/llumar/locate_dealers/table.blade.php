
@foreach ($DealersData as $key => $row)
    <div class="dealer-card mb-4 p-4 rounded-3" style="background-color: #000; border: 1px solid #b2524e;">
        <div class="row g-4 align-items-stretch">
            <div class="col-md-4 mr-5"> 
                <img src="{{ asset($row->profile_image) }}"    
                        style="width: 348px; height: 350px; object-fit: cover;" 
                        alt="{{$row->dealership_name}}">
            </div>
           
            {{-- Dealer Info Column --}}
            <div class="col-md-4 text-white">
              
                <h4 class="color-orange">{{ $row->dealership_name }}</h4>
                  <p>{{$row->bio}}</p>
                <p class="mb-1">Address:<br> {{ $row->address }} - {{ $row->pincode }}</p>
                
                <div class="mb-3 mt-3">                
                    <p class="color-orange" > {{ $row->contact_name }}</p>
                </div>

                <ul class="list-unstyled mb-0">
                    <li class="mb-2">
                        <img src="{{ asset('assets/llumar/images/locate_llumar_dealer/icons/Locate-Dealer_Icons_Call.png') }}" height="20px">
                        <a href="tel:{{ $row->contact_number }}" class="text-white">{{ $row->contact_number }}</a>
                          <button class="copy-button-locate-dealer"> <img src="{{asset('assets/frontend/images/copy.svg')}}" /></button>
                    </li>
                    @if (!empty($row->contact_email))
                        <li class="mb-2">
                            <img src="{{ asset('assets/llumar/images/locate_llumar_dealer/icons/Locate-Dealer_Icons_Email.png') }}" height="20px">
                            <a href="mailto:{{ $row->contact_email }}" class="text-white">{{ $row->contact_email }}</a>
                             <button class="copy-button-locate-dealer"> <img src="{{asset('assets/frontend/images/copy.svg')}}" /></button>
                        </li>
                    @endif
                   @if (!empty($row->ig_handler))
                    <li class="mb-2 d-flex align-items-center gap-1">
                        @php
                            $isInstagram = Str::contains($row->ig_handler, 'instagram.com');
                            $displayText = $isInstagram ? '@' . basename($row->ig_handler) : $row->ig_handler;
                            $href = $isInstagram ? $row->ig_handler : 'mailto:' . $row->ig_handler;
                            $icon = $isInstagram
                                ? asset('assets/llumar/images/locate_llumar_dealer/icons/Locate-Dealer_Icons_Insta.png')
                                : asset('assets/llumar/images/locate_llumar_dealer/icons/email.png'); // replace with correct email icon path
                        @endphp

                        <img src="{{ $icon }}" height="20px" alt="icon">
                        <a href="{{ $href }}" target="_blank" class="text-white text-decoration-underline">{{ $displayText }}</a>
                        <button class="copy-button-locate-dealer ms-1">
                            <img src="{{ asset('assets/frontend/images/copy.svg') }}" alt="copy" />
                        </button>
                    </li>
                @endif
                </ul>
            </div>
            {{-- Google Map Column --}}
            <div class="col-md-4"> 
                <div style=" height: 400px;"> {{-- Increased height --}}
                    <iframe src="{!! $row->url !!}" class="w-100 h-100"
                            style="border: 0;"
                            allowfullscreen=""
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
@endforeach

<div class="row mt-4">
    <div class="col-12">
        <div class="dealer-pagination float-end">
            {{ $DealersData->links() }}
        </div>
    </div>
</div>