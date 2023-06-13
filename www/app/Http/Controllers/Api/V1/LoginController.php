<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\LoginRequest;
use App\Http\Requests\Api\V1\OtpVerifyRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    public function login(LoginRequest $request)
    {
        try {
            $mobile = $request->mobile;
            $user = resolve('user-repo')->findByMobile($mobile);
            if (empty($user)) {
                $params = [];
                $params['mobile'] = $mobile;
                $params['is_active'] = 'Y';
                $params['role'] = 6;

                $user = resolve('user-repo')->create($params);
            }
            if ($user->is_active == 'N') {
                return response(['errors' => 'Your account is inactive. Please contact to administator'], 422);
            }
            if ($user->is_account_locked == 'Y') {
                return response(['errors' => 'Your account is locked. Please check after sometime.'], 422);
            }
            $user->mobile_otp = app('common-helper')->numericOTP();
            $user->mobile_otp_resend_attempt = 0;
            $user->save();

            return response(['message' => 'OTP sent successfully on Whatsapp'], 200);
        } catch (\Exception $e) {
            return response(['message' => app('common-helper')->generateErrorMessage($e)], 422);;
        }
    }

    public function resendOTP(LoginRequest $request)
    {
        try {
            $mobile = $request->mobile;
            $user = resolve('user-repo')->findByMobile($mobile);
            if (empty($user)) {
                return response(['errors' => 'Account not found. Please contact to administator.'], 422);
            }
            if ($user->is_active == 'N') {
                return response(['errors' => 'Your account is inactive. Please contact to administator.'], 422);
            }
            if ($user->is_account_locked == 'Y') {
                return response(['errors' => 'Your account is locked. Please check after sometime.'], 422);
            }
            if ($user->mobile_otp_resend_attempt == 5) {
                $user->is_account_locked = 'Y';
                $user->account_locked_at = Carbon::now()->format('Y-m-d H:i:s');
                $user->save();
                return response(['errors' => 'Your account is locked. Please check after sometime.'], 422);
            }
            $user->increment('mobile_otp_resend_attempt');
            return response(['message' => 'OTP sent successfully on Whatsapp'], 200);
        } catch (\Exception $e) {
            return response(['message' => app('common-helper')->generateErrorMessage($e)], 422);;
        }
    }

    public function verifyOTP(OtpVerifyRequest $request)
    {
        try {
            $response = [];
            $mobile = $request->mobile;
            $mobile_otp = $request->mobile_otp;
            $user = resolve('user-repo')->findByMobile($mobile);
            if (empty($user)) {
                return response(['errors' => 'Account not found. Please contact to administator.'], 422);
            }
            if ($user->is_active == 'N') {
                return response(['errors' => 'Your account is inactive. Please contact to administator.'], 422);
            }
            if ($user->is_account_locked == 'Y') {
                return response(['errors' => 'Your account is locked. Please check after sometime.'], 422);
            }
            if ($user->mobile_login_attempt == 5) {
                $user->is_account_locked = 'Y';
                $user->account_locked_at = Carbon::now()->format('Y-m-d H:i:s');
                $user->save();
                return response(['errors' => 'Your account is locked. Please check after sometime.'], 422);
            }
            if ($user->mobile_otp != $mobile_otp and env('APP_ENV') == 'PRODUCTION') {
                $user->increment('mobile_login_attempt');
                return response(['errors' => 'Your OTP is wrong.'], 422);
            }
            $user->mobile_login_attempt = 0;
            $user->mobile_otp_resend_attempt = 0;
            $user->save();

            $token = $user->createToken('Laravel Password Grant Client')->accessToken;
            $response['access_token'] = $token;
            $response['message'] = 'OTP verified successfully.';
            $response['redirect_to_register'] = empty($user->first_name) ? 'Y' : 'N';

            return response($response, 200);
        } catch (\Exception $e) {
            return response(['message' => app('common-helper')->generateErrorMessage($e)], 422);
        }
    }




    protected function validateLogin(Request $request)
    {
        if (config('constants.EMAIL_OTP_LOGIN')) {
            $rules = ['username' => 'required|email'];
        } elseif (config('constants.MOBILE_OTP_LOGIN')) {
            $rules = ['username' => 'required|numeric|digits:10'];
        } else {
            $rules = ['username' => 'required|string', 'password' => 'required|string'];
        }
        $request->validate($rules);
    }

    protected function credentials(Request $request)
    {
        return [
            "email" => $request->username,
            "password" => $request->password,
        ];
    }

    protected function attemptLogin(Request $request)
    {
        try {
            if (config('constants.MOBILE_OTP_LOGIN') || config('constants.EMAIL_OTP_LOGIN')) {

                if (config('constants.MOBILE_OTP_LOGIN')) {
                    $user = \App\Models\User::where('mobile', $request->only($this->username()))->first();
                }
                if (config('constants.EMAIL_OTP_LOGIN')) {
                    $user = \App\Models\User::where('email', $request->only($this->username()))->first();
                }
                if (!empty($user)) {
                    return $this->guard()->loginUsingId($user->id);
                } else {
                    return false;
                }
            } else {
                return $this->guard()->attempt(
                    $this->credentials($request), $request->boolean('remember')
                );
            }
        } catch (\Exception $e) {
            $errors = new MessageBag(['username' => ['Something went wrong..!']]);
            auth()->logout();
            return redirect()->back()->withErrors($errors);
        }
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->is_account_locked == 'Y') {
            auth()->logout();
            $errors = new MessageBag(['username' => ['You account is deactivate, Please contact to administrator.']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.

            return redirect()->back()->withErrors($errors); // redirect back to the login page, using ->withErrors($errors) you send the error created above
        }

        if ($user->is_account_locked == 'Y' and $user->account_release_time_formatted > Carbon::now()->format('d-m-Y H:i')) {
            auth()->logout();
            $error = 'Your account has been blocked till ' . $user->account_release_time_formatted;
            return view('admin.auth.login', compact('error'));
        }

        $user->update([
            'logins' => $user->logins + 1,
            'last_login_ip' => $request->getClientIp(),
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'mobile_login_attempt' => 0,
            'is_account_locked' => 'N',
            'login_attempt' => 0,
            'account_locked_at' => null,
        ]);

        if (config('constants.EMAIL_OTP_LOGIN') || config('constants.MOBILE_OTP_LOGIN')) {
            $user->generateTwoFactorCode();
        }
    }
}
