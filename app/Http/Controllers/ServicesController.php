<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Services::skip(0)->take(3)->get();
        return view('admin.services.services', compact('services'));
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
        return redirect()->route('services');
    }

    public function editService($id)
    {
        $service = Services::findOrFail($id);
        return view('admin.services.edit_service', compact('service'));
    }

    public function saveEditService(Request $request, $id)
    {
        $service = Services::findOrFail($id);

        $service -> title = $request -> title;
        $service -> icon = $request -> icon;
        $service -> description = $request -> description;

        $service -> save();
        return redirect()->route('services');
    }

    public function deleteService($id)
    {
        $service = Services::findOrFail($id);
        $service -> delete();
        return redirect()->route('services');
    }
}
