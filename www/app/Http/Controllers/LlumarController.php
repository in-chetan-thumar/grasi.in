<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutomativePPFRequest;
use App\Http\Requests\SendMessageRequest;
use App\Mail\ContactMailNotification;
use Illuminate\Http\Request;
use Mail;

class LlumarController extends Controller
{
    
    public function automativePPF(){
        return view('llumar.automative_ppf');
    }
    public function automativePPFSendMessage(SendMessageRequest $request){
        $params = [];
        $params['first_name'] = $request->name;
        $params['last_name'] = '';
        $params['email'] = $request->email;
        $params['message'] = $request->additional_info;

        Mail::send(new ContactMailNotification($params));
        toastr()->success('Your message has been send successfully!');
        return redirect()->back();
    }

    public function platinumPPF(){
        return view('llumar.platinum_ppf');

    }
    public function platinumPPFSendMessage(SendMessageRequest $request){
        $params = [];
        $params['first_name'] = $request->name;
        $params['last_name'] = '';
        $params['email'] = $request->email;
        $params['message'] = $request->additional_info;

        Mail::send(new ContactMailNotification($params));
        toastr()->success('Your message has been send successfully!');
        return redirect()->back();
    }
    public function valorPPF(){
        return view('llumar.valor_ppf');
    }

    public function valorPPFSendMessage(SendMessageRequest $request){
        $params = [];
        $params['first_name'] = $request->name;
        $params['last_name'] = '';
        $params['email'] = $request->email;
        $params['message'] = $request->additional_info;

        Mail::send(new ContactMailNotification($params));
        toastr()->success('Your message has been send successfully!');
        return redirect()->back();
    }
}
