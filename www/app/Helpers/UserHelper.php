<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\MessageBag;

class UserHelper
{
  public function verifyUserAccount($user){
      $response['error'] =[];
    if ($user->is_account_active == 'N') {
        return $response['error'] = 'You account is locked, Please contact to administrator.' ;
    }
    if ($user->is_account_locked == 'Y' and $user->account_release_time_formatted < Carbon::now()->format('d-m-Y H:i')) {
        return $response['error'] = 'You account is deactivate, Please contact to administrator.' ;
    }

  }

  public function recordLoginAttempts($request, $user){
    $user->update([
        'logins' => $user->logins + 1,
        'last_login_ip' => $request->getClientIp(),
        'last_login_at' => Carbon::now()->toDateTimeString(),
        'mobile_login_attempt' => 0,
        'is_account_locked' => 'N',
        'login_attempt' => 0,
        'account_locked_at' => null,
    ]);
    $user->save();
  }

  public function generateTwoFactorCode($user)
  {
      $user->timestamps = false;
      $user->two_factor_code = rand(100000, 999999);
      $user->two_factor_expires_at = now()->addMinutes(10);
      $user->save();
  }

  public function resetTwoFactorCode($user)
  {
      $user->timestamps = false;
      $user->two_factor_code = null;
      $user->two_factor_expires_at = null;
      $user->login_attempt = 0;
      $user->save();
  }
}
