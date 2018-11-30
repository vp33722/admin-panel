<?php

namespace App\Http\Controllers;

use App\Appuser;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function edit($id)
    {

        $appuser = Appuser::with('application')->where('appusers.id', $id)->first();

        return view('Users.edit', ['appuser' => $appuser]);

    }

    public function update(Request $request, $id)
    {

        $appuser = Appuser::where('id', $id)->update($request->persist());

           /* array(

                'country'                   => $request->get('country'),
                'device_type'               => $request->get('device_type'),
                'os_version'                => $request->get('os_version'),
                'app_version'               => $request->get('app_version'),
                'is_full_access'            => ($request->get('is_full_access')) ? 1 : 0,
                'purchase_ads'              => ($request->get('purchase_ads')) ? 1 : 0,
                'is_purchase_watermark'     => ($request->get('is_purchase_watermark')) ? 1 : 0,
                'is_purchase_unlimited'     => ($request->get('is_purchase_unlimited')) ? 1 : 0,
                'is_purchase_subscription'  => ($request->get('is_purchase_subscription')) ? 1 : 0,
                'last_date_of_subscription' => $request->get('last_date_of_subscription'),

            ));
*/
        if ($appuser) {
            \Toastr::success('Users Updated Successfully');
            return redirect(route('home'));
        }
    }

    public function destroy($id)
    {
        $delete = Appuser::find($id)->delete();

        if ($delete == true) {
            \Toastr::success('Users Deleted Successfully');
            return back();
        }
    }
}
