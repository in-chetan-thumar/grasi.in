<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\EnquiryMailNotification;
use App\Models\EnquiryLandingPage;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class EnquiryLandingController extends Controller
{


    //    home page view return
    public function index()
    {
        return view('landing_page.enquiry_landing_page');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'g-recaptcha-response' => [
                'required',
                function (string $attribute, mixed $value, Closure $fail) {
                    $g_response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
                        'secret' => env('NOCAPTCHA_SECRET_V3'),
                        'response' => $value,
                        'remoteip' => \request()->ip(),
                    ]);
                    if (!$g_response->json('success')) {
                        $fail("The {$attribute} is invalid.");
                    }
                },
            ],
        ]);
        $params = [];
        $params['first_name'] = $request->first_name;
        $params['last_name'] = $request->last_name;
        $params['brand'] = $request->brand;
        $params['state'] = $request->state;
        $params['city'] = $request->city;
        $params['pincode'] = $request->pincode;
        $params['mobile'] = $request->mobile;
        $params['email'] = $request->email;
        $enquiry = EnquiryLandingPage::create($params);

        if ($enquiry) {
            Mail::send(new EnquiryMailNotification($params));
            app('common-helper')->CreateLead($request);
            toastr()->success('Your enquire has been submitted successfully!');
            return redirect()->route('enquiry.thank.you');
        }
        toastr()->success('Your enquire not submitted successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function thankYou()
    {
        return view('landing_page.thank-you');

    }
}
