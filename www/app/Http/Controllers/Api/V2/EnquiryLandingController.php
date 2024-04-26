<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\EnquiryLandingPage;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryMailNotification;

class EnquiryLandingController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'brand' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|numeric|digits:6',
            'mobile' => 'required|numeric|digits:10',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'message' => $validator->messages()
            ], 422);
        } else {
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
                return response()->json([
                    'status' => 200,
                    'message' => 'Your enquire has been submitted successfully!'
                ], 200);
            }
        }
    }
}
