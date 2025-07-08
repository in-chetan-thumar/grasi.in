<?php

namespace App\Http\Controllers\llumar;
use App\Http\Controllers\Controller;
use App\Http\Requests\SendMessageRequest;
use App\Mail\ContactMailNotification;
use App\Mail\LlumarContactNotification;
use App\Mail\LlumarSendMailNotification;
use Illuminate\Http\Request;
use Mail;

class LlumarController extends Controller
{
    
    public function automotivePPF(){
        return view('llumar.automotive_ppf');
    }
    public function sendMessage(SendMessageRequest $request)
    {
        $params = [
            'first_name' => $request->name,
            'email' => $request->email,
            'message' => $request->additional_info,
            'subject' => $request->subject,
        ];

        // Send mail only if all fields are filled 
        if (!empty($params['first_name']) && !empty($params['email']) && !empty($params['message']) && !empty($params['subject'])){
            Mail::send(new LlumarContactNotification($params));
        }

        return view('llumar.thank_you');
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
     public function decorativeWindowFilm(){
        return view('llumar.decorative_window_film');
    }
    public function solarWindowFilm(){
        return view('llumar.solar_window_film');
    }
    public function safetyAndSecurityWindowFilm(){
        return view('llumar.safety_and_security_window_film');

    }

    public function glossPPF(){
        return view('llumar.gloss_ppf');
    }
    public function platinumMattePPF(){
        return view('llumar.platinum_matte_ppf');
    }

    public function slectBlackPPF(){
        return view('llumar.select_black_ppf');

    }
    public function afc(){
        return view('llumar.afc');
        
    }
}
