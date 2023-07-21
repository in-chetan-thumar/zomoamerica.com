<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\LoginEmailRequest;
use App\Http\Requests\Api\V1\LoginMobileRequest;
use App\Http\Requests\Api\V1\LoginRequest;
use App\Http\Requests\Api\V1\OtpVerifyRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\MessageBag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected function credentials(Request $request)
    {
        return [
            "email" => $request->username,
            "password" => $request->password,
        ];
    }

    public function loginWithUsernamePassword(LoginRequest $request)
    {
        try {
            $response = [];

            $user = resolve('user-repo')->findByUsername($request->username);
            if (empty($user)) {
                return response(['errors' => 'We can\'t find a user with these credentials.'], 422);
            }

            $verify_user = app('user-helper')->verifyUserAccount($user);
            if (!empty($verify_user['error'])) {
                return response(['errors' => $verify_user['error']], 422);
            }

            $login_attempt = app('user-helper')->recordLoginAttempts($user);
            if (!empty($login_attempt['error'])) {
                return response(['errors' => $login_attempt['error']], 422);
            }
            if (!$this->guard()->attempt(
                $this->credentials($request),
                $request->boolean('remember')
            )) {
                return response(['errors' => 'These credentials do not match our records.'], 422);
            }

            app('user-helper')->recordSuccessLoginAttempts($request, $user);

            $response['access_token'] = $user->createToken('Laravel Password Grant Client')->accessToken;
            $response['message'] = 'Account verified successfully.';

            return response($response, 200);
        } catch (\Exception $e) {
            return response(['message' => app('common-helper')->generateErrorMessage($e)], 422);;
        }
    }

    public function loginWithMobileNumber(LoginMobileRequest $request)
    {
        try {
            $response = [];

            $user = resolve('user-repo')->findByUsername($request->username); 
            if (empty($user)) {
                return response(['errors' => 'We can\'t find a user with these credentials.'], 422);
            }

            $verify_user = app('user-helper')->verifyUserAccount($user);
            if (!empty($verify_user['error'])) {
                return response(['errors' => $verify_user['error']], 422);
            }
            if ($user->is_account_locked == 'Y' and $user->account_release_time_formatted > Carbon::now()->format('Y-m-d H:i:s')) {
                return response(['errors' => 'Your account has been locked. Please try after sometimes.'], 422);
            }
            if ($user->is_account_locked == 'Y' and $user->account_release_time_formatted < Carbon::now()->format('Y-m-d H:i:s')) {
                $user->update([
                    'login_attempt' => 0,
                    'two_factor_code_resend_attempt' => 0,
                    'is_account_locked' => 'N',
                    'account_locked_at' => null,
                ]);
            }

            app('user-helper')->generateTwoFactorCode($user);
            $response['message'] = 'OTP sent successfully.';
            return response($response, 200);
        } catch (\Exception $e) {
            return response(['message' => app('common-helper')->generateErrorMessage($e)], 422);;
        }
    }


    public function loginWithEmailAddress(LoginEmailRequest $request)
    {
        try {
            $response = [];

            $user = resolve('user-repo')->findByUsername($request->username); 
            if (empty($user)) {
                return response(['errors' => 'We can\'t find a user with these credentials.'], 422);
            }

            $verify_user = app('user-helper')->verifyUserAccount($user);
            if (!empty($verify_user['error'])) {
                return response(['errors' => $verify_user['error']], 422);
            }
            if ($user->is_account_locked == 'Y' and $user->account_release_time_formatted > Carbon::now()->format('Y-m-d H:i:s')) {
                return response(['errors' => 'Your account has been locked. Please try after sometimes.'], 422);
            }
            if ($user->is_account_locked == 'Y' and $user->account_release_time_formatted < Carbon::now()->format('Y-m-d H:i:s')) {
                $user->update([
                    'login_attempt' => 0,
                    'two_factor_code_resend_attempt' => 0,
                    'is_account_locked' => 'N',
                    'account_locked_at' => null,
                ]);
            }

            app('user-helper')->generateTwoFactorCode($user);
            $response['message'] = 'OTP sent successfully.';
            return response($response, 200);
        } catch (\Exception $e) {
            return response(['message' => app('common-helper')->generateErrorMessage($e)], 422);;
        }
    }


    protected function resendOTP(Request $request)
    {
        try {

            $user = resolve('user-repo')->findByUsername($request->username); 

            if (empty($user)) {
                return response(['errors' => 'We can\'t find a user with these credentials.'], 422);
            }

            $resend_otp = app('user-helper')->resendTwoFectorCode($user);

            if (!empty($resend_otp['error'])) {
                return response(['errors' => $resend_otp['error']], 422);
            }
            return response(['message' => $resend_otp['message']], 200);
        } catch (\Exception $e) {
            return response(['message' => app('common-helper')->generateErrorMessage($e)], 422);;
        }
    }

    protected function verifyOTP(OtpVerifyRequest $request)
    {
        try {
            $response = [];

            $user = resolve('user-repo')->findByUsername($request->username); 

            if (empty($user)) {
                return response(['errors' => 'We can\'t find a user with these credentials.'], 422);
            }

            $verify_otp = app('user-helper')->verifyTwoFactorCode($user, $request->two_factor_code);

            if (!empty($verify_otp['error'])) {
                return response(['errors' => $verify_otp['error']], 422);
            }
            $response['access_token'] = $user->createToken('Laravel Password Grant Client')->accessToken;
            $response['message'] = 'Account verified successfully.';

            return response($response, 200);
            
        } catch (\Exception $e) {
            return response(['message' => app('common-helper')->generateErrorMessage($e)], 422);;
        }
    }
}
