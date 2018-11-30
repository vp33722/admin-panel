<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\User;
use Auth;
use Hash;

class ProfileController extends Controller
{

    public function index()
    {
        return view('profile');
    }

    public function update_profile(ProfileRequest $request)
    {
        if ($request->get('password')) {
            if (Hash::check($request->get('password'), Auth::user()->password)) {

                $updates = User::where('id', Auth::user()->id)->update(

                    array(
                        'name'     => $request->get('name'),
                        'password' => bcrypt($request->get('new-password')),
                        'email'    => $request->get('email'),

                    ));
                if ($updates) {
                    \Toastr::success('Your Information Updated Successfully');
                    return back();
                }
            }
            \Toastr::success('The Current Password Does Not Match');
            return back();

        }

        $users = User::where('id', Auth::user()->id)->update(['name' => $request->get('name'), 'email' => $request->get('email')]);

        if ($users) {
            \Toastr::success('Your Information Updated Successfully');
            return back();

        }

    }
}
