<?php

namespace App\Http\Controllers\Auth;

use App\Events\SMS;
use App\Http\Controllers\Controller;
use App\Notifications\TwoFactorCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class TwoFactorController extends Controller
{
    public function index()
    {
        if(empty(auth()->user()->email) AND empty(auth()->user()->two_factor_code)){
            abort(404);
        }
        return view('admin.auth.two_factor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'two_factor_code' => 'numeric|required|digits:6',
        ]);

        $user = auth()->user();

        $attempt = $user->login_attempt ;
        if ($attempt < 5 and $user->is_account_locked == 'N') {
            $user->update([
                'login_attempt' => $attempt + 1,
            ]);
        } else {
            $user->update([
                'is_account_locked' => 'Y',
                'account_locked_at' => Carbon::now()->toDateTimeString(),
            ]);
            auth()->logout();
            $error = 'Your account has been locked. Please try after sometimes.';
            return redirect('/login')
                ->withErrors(['username' =>$error]);
        }

        $is_otp_valid = FALSE;

        if ($request->input('two_factor_code') == $user->two_factor_code){
            $is_otp_valid = TRUE;
        }
        if (env('APP_ENV') != 'Production' AND $request->input('two_factor_code') == '111111') {
            $is_otp_valid = TRUE;
        }

		/* if ($request->input('two_factor_code') == '111111') {
            $is_otp_valid = TRUE;
        } */

        if ($is_otp_valid) {
            app('user-helper')->resetTwoFactorCode($user);
            app('user-helper')->recordLoginAttempts($request, $user);

            // $user->update([
            //     'logins' => $user->logins + 1,
            //     'last_login_ip' => $request->getClientIp(),
            //     'last_login_at' => Carbon::now()->toDateTimeString()
            // ]);

            return redirect()->route('root');
        }

        return redirect()->back()
            ->withErrors(['two_factor_code' =>
                'The two factor code you have entered does not match']);
    }

    public function resend()
    {
        $user = auth()->user();
        if ($user->is_account_locked == 'N') {
            $attempt = $user->login_attempt ;
            if ($attempt < 5 and $user->is_account_locked == 'N') {
                $user->generateTwoFactorCode();
                $user->update([
                    'login_attempt' => $attempt + 1,
                ]);
                $error_message = 'The two factor code has been sent again';
            } else {
                $user->update([
                    'is_account_locked' => 'Y',
                    'account_locked_at' => Carbon::now()->toDateTimeString(),
                ]);
                $error = 'Your account has been blocked till ' . $user->account_release_time_formatted;
            return view('admin.auth.login', compact('error'));
            }
        }

        $errors = new MessageBag(['two_factor_code' => [$error_message]]); // if Auth::attempt fails

        return redirect()->back()->withErrors($errors);
    }
}
