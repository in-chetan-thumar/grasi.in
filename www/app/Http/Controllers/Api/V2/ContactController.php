<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
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
            $params['email'] = $request->email;
            $params['message'] = $request->message;

            Mail::send(new ContactMailNotification($params));
            return response()->json([
                'status' => 200,
                'message' => 'Your enquire has been submitted successfully!'
            ], 200);
        }

    }
}
