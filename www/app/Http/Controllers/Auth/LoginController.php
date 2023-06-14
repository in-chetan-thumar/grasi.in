<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
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

    public function username()
    {
        return 'username';
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
                $user = resolve('user-repo')->findByUsername($request->username);

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
        $verify_user = app('user-helper')->verifyUserAccount($user);

        if (!empty($verify_user['error'])) {
            auth()->logout();
            $errors = new MessageBag(['username' => [$verify_user['error']]]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.
            return redirect()->back()->withErrors($errors); // redirect back to the login page, using ->withErrors($errors) you send the error created above
        }

        app('user-helper')->recordSuccessLoginAttempts($request, $user);

        if (config('constants.EMAIL_OTP_LOGIN') || config('constants.MOBILE_OTP_LOGIN')) {
            app('user-helper')->generateTwoFactorCode($user);
        }
    }
}
