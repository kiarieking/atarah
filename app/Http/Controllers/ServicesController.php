<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('admin.services');
    }
    public function newService(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|min:12',
            'icon' => 'required|min:10',
            'description' =>'required|min:50',

        ]);
        $service = new Services();

        $service -> icon = $request -> icon;
        $service -> title = $request -> title;
        $service -> description = $request -> description;

        $service->save();
        return redirect()->route('admin');
    }
}
