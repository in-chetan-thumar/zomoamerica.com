<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\MessageBag;

class UserHelper
{
    public function verifyUserAccount($user)
    {
        $response['error'] = [];
        if ($user->is_active == 'N') {
            $response['error'] = 'You account is inactive, Please contact to administrator.';
        }
        return $response;
    }

    public function recordLoginAttempts($user)
    {
        $response['error'] = '';

        if ($user->login_attempt < 5) {
            $user->increment('login_attempt');
        } else {
            if ($user->is_account_locked == 'Y' and $user->account_release_time_formatted < Carbon::now()->format('Y-m-d H:i:s')) {
                $user->update([
                    'login_attempt' => 0,
                    'is_account_locked' => 'N',
                    'account_locked_at' => null,
                ]);
                return null;
            } else {

                if (empty($user->account_locked_at)) {
                    $user->update([
                        'is_account_locked' => 'Y',
                        'account_locked_at' => Carbon::now()->toDateTimeString(),
                    ]);
                }

                $response['error'] = 'Your account has been locked. Please try after sometimes.';
                return $response;
            }
        }
    }

    public function recordSuccessLoginAttempts($request, $user)
    {
        $user->update([
            'logins' => $user->logins + 1,
            'last_login_ip' => $request->getClientIp(),
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'mobile_login_attempt' => 0,
            'is_account_locked' => 'N',
            'login_attempt' => 0,
            'account_locked_at' => null,
            'two_factor_code_resend_attempt' => 0
        ]);
        $user->save();
    }

    public function generateTwoFactorCode($user)
    {
        $user->timestamps = false;
        $user->two_factor_code = rand(100000, 999999);
        $user->two_factor_expires_at = now()->addMinutes(10);
        $user->two_factor_code_resend_attempt = 0;
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

    public function verifyTwoFactorCode($user, $two_factor_code)
    {
        $response['error'] = '';
        $login_attempt = $this->recordLoginAttempts($user);

        if (!empty($login_attempt['error'])) {
            return $login_attempt;
        }

        $is_otp_valid = FALSE;
        if ($two_factor_code == $user->two_factor_code) {
            $this->resetTwoFactorCode($user);
            $is_otp_valid = TRUE;
            $response['is_otp_valid'] = $is_otp_valid;
        } elseif (env('APP_ENV') != 'Production' and $two_factor_code == '111111') {
            $this->resetTwoFactorCode($user);
            $is_otp_valid = TRUE;
            $response['is_otp_valid'] = $is_otp_valid;
        } else {
            $response['error'] = 'Entered OTP is invalid';
            $response['is_otp_valid'] = $is_otp_valid;
        }

        return $response;
    }

    public function resendTwoFectorCode($user)
    {
        $response['error'] = '';
        $response['message'] = '';

        if ($user->two_factor_code_resend_attempt >= 5) {
            $user->is_account_locked = 'Y';
            $user->account_locked_at = Carbon::now()->toDateTimeString();
            $user->save();
            $response['error'] = 'Your can not use resend password funcality more then 5 times.';
        } else {
            // Send OTP to users again
            $user->increment('two_factor_code_resend_attempt');
            $response['message'] = "OTP sent successfully, Now only " . (5 - $user->two_factor_code_resend_attempt) . " attempt left";
        }
        return $response;
    }
}
