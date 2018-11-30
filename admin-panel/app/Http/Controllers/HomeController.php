<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Domain\Admin\Datatables\UserDatatableScope;
use App\Application;


class HomeController extends Controller
{
    
    public function index(UserDatatableScope $datatable)
    {
        if (request()->ajax()) 
         {
            return $datatable->query();
         }
         return view('home',['html'=>$datatable->html(),'application'=>Application::all()->pluck('name','id')->toArray()]);
    }
}
