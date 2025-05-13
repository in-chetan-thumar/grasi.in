<?php

namespace App\Http\Controllers\llumar;
use App\Http\Controllers\Controller;
use App\Http\Requests\SendMessageRequest;
use App\Mail\ContactMailNotification;
use Illuminate\Http\Request;
use Mail;

class LlumarController extends Controller
{
    
    public function automotivePPF(){
        return view('llumar.automotive_ppf');
    }
    public function sendMessage(SendMessageRequest $request){
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

    public function valorPPF(){
        return view('llumar.valor_ppf');
    }

    public function dyedWindowFilm(){
        return view('llumar.dyed_window_film');
    }

    public function  ceramicWindowFilm(){
        return view('llumar.ceramic_window_film');

    }
    public function metallizedWindowFilm(){
        return view('llumar.metallized_window_film');

    }
    
    public function classeco(){
        return view('llumar.classeco');
    }
    public function automotiveWindowFilm(){
        return view('llumar.automotive_window_film');
    }
}
