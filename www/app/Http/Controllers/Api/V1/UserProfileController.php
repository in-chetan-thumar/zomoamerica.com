<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\ChangePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserDeatils()
    {
        try {
            $response = [];
            $response['id'] = auth()->user()->id;
            $response['name'] = auth()->user()->name;
            $response['email'] = auth()->user()->email;
            $response['mobile'] = auth()->user()->mobile;
            $response['avatar'] = auth()->user()->profile_image;
            return response($response, 200);
        } catch (\Exception $e) {
            return response(['message' => app('common-helper')->generateErrorMessage($e)], 422);;
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateUserDeatils(Request $request)
    {
        try {
            $params = $response = [];
            $params['name'] = $request->name;
            $params['email'] = $request->email;
            $params['mobile'] = $request->mobile;
            if ($request->hasFile('profile')) {

                $fileDir = config('constants.USER_DOC_PATH') . auth()->id();

                if (!File::exists($fileDir)) {
                    Storage::makeDirectory($fileDir, 0777);
                }
                $params['avatar'] = basename($request->file('profile')->store($fileDir));
            }

            $user = resolve('user-repo')->findByID(auth()->user()->id)->update($params);
            if ($user) {
                $response['message'] = 'Profile changed successfully..!';
                return response($response, 200);
            } else {
                return $response['error'] = 'Profile not changed successfully..!';
                return response($response, 422);
            }
        } catch (\Exception $e) {
            toastr()->error(app('common-helper')->generateErrorMessage($e));
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Change Password

    public function changePassword(ChangePasswordRequest $request)
    {
        try {
            $params = [];
            $params['password'] = Hash::make($request->password);
            $user = resolve('user-repo')->changePassword($params, auth()->user()->id);
            if ($user) {
                $response['message'] = 'Password changed successfully..!';
                return response($response, 200);
            } else {
                $response['error'] = 'Password not changed successfully..!';
                return response($response, 422);
            }
        } catch (\Exception $e) {
            toastr()->error(app('common-helper')->generateErrorMessage($e));
        }
        return redirect()->back();
    }
}
