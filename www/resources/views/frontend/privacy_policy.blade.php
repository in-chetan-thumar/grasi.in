{{-- extend master layout  --}}
@extends('frontend.layout.master')

{{-- Our Story sco  --}}
@section('sco')
    <title>Privacy Policy - Gras-i</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        li {
            color: black;
            margin-left: 25px;
        }
    </style>
@endsection

{{-- Our Story main content  --}}
@section('content')
    <section class="p0 inner_page our_story_page ">
        <section class="inner_banner p0 mb-5"
            style="background:url({{ asset('assets/frontend/images/ourstory_banner.webp') }});background-position: center;background-repeat: no-repeat;background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                        <div class="row">
                            <div class="col-10 col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <figcaption>
                                    <h2>Privacy Policy</h2>
                                </figcaption>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container p-4 mt-4">
            <h4>Overview</h4>
            <p>
                At Gras-i, we value your privacy and are committed to protecting any personal information you share with us.
                This Privacy Policy outlines what data we collect, how we use it, and what steps you can take if you prefer
                not to share your information.
            </p>
            <h4>Collection of Personal Information</h4>
            <p>
                We do not collect personally identifiable information (such as your name, phone number, address, or email)
                unless you voluntarily provide it. If you choose not to share this information, you can still browse our
                website without restriction.
            </p>
            <p>
                If you have previously submitted personal details and wish to have them removed from our records, please
                contact us at the email address provided below. We will make reasonable efforts to delete your data from our
                system.
            </p>
            <p>When you provide your personal information, we may use it for:
            <ul>
                <li>&#8226; Enhancing our products and services based on customer needs.</li>
                <li>&#8226; Contacting you regarding inquiries, promotions, or updates.</li>
                <li>&#8226; Sharing it with trusted third-party service providers for marketing purposes.</li>
            </ul>
            </p>

            <h4>Automatic Collection of Non-Personal Information</h4>
            <p>We may gather non-personally identifiable data, such as your browser type, operating system, or the website
                you
                visited before arriving at ours. This helps us improve user experience and website performance.</p>
            <h4>Use of Cookies</h4>
            <p>To enhance your browsing experience, we may store small data files, known as cookies, on your device. These
                cookies help us tailor our content and advertisements to better suit your preferences. Most broil us at
                <a href="mailto:enquiry@grasi.in" class="fw-bold text-primary">enquiry@grasi.in</a>. We will take reasonable
                steps to ensure your request is fulfilled.wsers allow you to
                manage or
                disable cookies through settings.
            </p>
            <h4>Contact Us</h4>
            <p>If you wish to have your personal information removed from our records or have any concerns about data
                privacy, Please email us.</p>

        </div>
    </section>
    {{-- include footer  --}}
    @include('frontend.layout.footer')
@endsection


{{-- js  --}}
@section('js')
@endsection
