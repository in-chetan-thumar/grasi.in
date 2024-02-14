<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\EnquiryMailNotification;
use App\Models\EnquiryLandingPage;
use Illuminate\Http\Request;
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
        $params = [];
        $params['full_name'] = $request->full_name;
        $params['brand'] = $request->brand;
        $params['state'] = $request->state;
        $params['city'] = $request->city;
        $params['pincode'] = $request->pincode;
        $params['mobile'] = $request->mobile;
        $params['email'] = $request->email;
        $enquiry= EnquiryLandingPage::create($params);
        if($enquiry){
            Mail::send(new EnquiryMailNotification($params));
            toastr()->success('Your enquire has been submitted successfully!');
            return redirect()->back();
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
}
