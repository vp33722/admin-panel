<?php

namespace App\Http\Controllers;

use App\Application;
use App\Domain\Admin\Datatables\ApplicationDatatableScope;
use App\Http\Requests\ApplicationRequest;
use App\Plateform;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function index(ApplicationDatatableScope $datatable)
    {

        if (request()->ajax()) {

            return $datatable->query();
        }
        return view('Application.index', ['html' => $datatable->html(), 'plateform' => plateform::all()->pluck('name', 'id')->toArray()]);

    }

    public function create()
    {
        return view('Application.add_app', ['plateform' => Plateform::all()->pluck('name', 'id')->toArray()]);
    }

    public function store(ApplicationRequest $request)
    {

        $application = Application::create(

            array(
                'app_platform_id'  => $request->get('plateform'),
                'name'             => $request->get('name'),
                'latest_version'   => $request->get('latest_version'),
                'title_of_ad'      => $request->get('title_of_ad'),
                'messge_of_ad'     => $request->get('messge_of_ad'),
                'link'             => $request->get('link'),
                'contact_email'    => $request->get('contact_email'),
                'share_format'     => $request->get('share_format'),
                'contact_format'   => $request->get('contact_format'),
                'developer_site'   => $request->get('developer_site'),
                'developer_name'   => $request->get('developer_name'),
                'developer_apps'   => $request->get('developer_apps'),
                'generated_in_app' => $request->get('generated_in_app'),
                'is_force_update'  => $request->get('is_force_update'),
                'is_only_banner'   => $request->get('is_only_banner'),

            )
        );

        if ($application) {

            \Toastr::success('Application Created Successfully');
            return redirect(route('application.index'));
        }

    }


    public function edit($id)
    {

        $Application = Application::where('id', $id)->first();
        $plateform   = Plateform::all()->pluck('name', 'id')->toArray();
        return view('Application.edit', ['Application' => $Application, 'plateform' => $plateform]);

    }

    public function update(ApplicationRequest $request, $id)
    {

        $application = Application::where('id', $id)->update(

            array(
                'app_platform_id'  => $request->get('plateform'),
                'name'             => $request->get('name'),
                'latest_version'   => $request->get('latest_version'),
                'title_of_ad'      => $request->get('title_of_ad'),
                'messge_of_ad'     => $request->get('messge_of_ad'),
                'link'             => $request->get('link'),
                'contact_email'    => $request->get('contact_email'),
                'share_format'     => $request->get('share_format'),
                'contact_format'   => $request->get('contact_format'),
                'developer_site'   => $request->get('developer_site'),
                'developer_name'   => $request->get('developer_name'),
                'developer_apps'   => $request->get('developer_apps'),
                'generated_in_app' => $request->get('generated_in_app'),
                'is_force_update'  => ($request->get('is_force_update')) ? 1 : 0,
                'is_only_banner'   => ($request->get('is_only_banner')) ? 1 : 0,

            ));

        if ($application) {

            \Toastr::success('Application Updated Successfully');
            return redirect(route('application.index'));
        }

    }

    public function destroy($id)
    {
        $delete = Application::find($id)->delete();

        if ($delete == true) {
            \Toastr::success('Application Deleted Successfully');
            return back();
        }
    }
}
