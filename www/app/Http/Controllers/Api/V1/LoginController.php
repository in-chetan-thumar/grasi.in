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

    // public function login(LoginRequest $request)
    // {
    //     try {
    //         $mobile = $request->mobile;
    //         $user = resolve('user-repo')->findByMobile($mobile);
    //         if (empty($user)) {
    //             $params = [];
    //             $params['mobile'] = $mobile;
    //             $params['is_active'] = 'Y';
    //             $params['role'] = 6;

    //             $user = resolve('user-repo')->create($params);
    //         }
    //         if ($user->is_active == 'N') {
    //             return response(['errors' => 'Your account is inactive. Please contact to administator'], 422);
    //         }
    //         if ($user->is_account_locked == 'Y') {
    //             return response(['errors' => 'Your account is locked. Please check after sometime.'], 422);
    //         }
    //         $user->mobile_otp = app('common-helper')->numericOTP();
    //         $user->mobile_otp_resend_attempt = 0;
    //         $user->save();

    //         return response(['message' => 'OTP sent successfully on Whatsapp'], 200);
    //     } catch (\Exception $e) {
    //         return response(['message' => app('common-helper')->generateErrorMessage($e)], 422);;
    //     }
    // }


    public function login(Request $request)
    {
        try {
            if (config('constants.MOBILE_OTP_LOGIN') || config('constants.EMAIL_OTP_LOGIN')) {

                if (config('constants.MOBILE_OTP_LOGIN')) {
                    $user = \App\Models\User::where('mobile', $request->username)->first();
                }
                if (config('constants.EMAIL_OTP_LOGIN')) {
                    $user = \App\Models\User::where('email', $request->username)->first();
                }
            } else {
                $user = \App\Models\User::where('email', $request->username)->first();
            }

            if (empty($user)) {
                return response(['errors' => 'We can\'t find a user with these credentials.'], 422);
            }

            $verify_user = app('user-helper')->verifyUserAccount($user);

            if (!empty($verify_user['error'])) {
                return response(['errors' => $verify_user['error']], 422);
            }

            if (!$this->guard()->attempt(
                $this->credentials($request),
                $request->boolean('remember')
            )) {
                if ($user->login_attempt < 5) {
                    $user->increment('login_attempt');
                } else {
                    $user->update([
                        'is_account_locked' => 'Y',
                        'account_locked_at' => Carbon::now()->toDateTimeString(),
                    ]);
                    return response(['errors' => 'Your account has been locked. Please try after sometimes.'], 422);
                }

                return response(['errors' => 'These credentials do not match our records.'], 422);
            }
            
            app('user-helper')->recordLoginAttempts($request, $user);

            $response['access_token'] = $user->createToken('Laravel Password Grant Client')->accessToken;
            $response['message'] = 'Account verified successfully.';

            return response($response, 200);


        } catch (\Exception $e) {
            return response(['message' => app('common-helper')->generateErrorMessage($e)], 422);;
        }
    }

    protected function credentials(Request $request)
    {
        return [
            "email" => $request->username,
            "password" => $request->password,
        ];
    }
}
