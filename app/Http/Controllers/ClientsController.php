<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function getClients()
    {
        $clients = Clients::all();
        return view('admin.clients.clients',\compact('clients'));
    }

    public function newClientForm(Request $request)
    {
        return view('admin.clients.create_client');
    }

    public function newClient(Request $request)
    {
        $this -> validate($request, [
            'name' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:10092', 
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'instagram' => 'required|url',

        ]);

        $client = new Clients();

        $client -> name = $request -> name;
        $client -> facebook = $request -> facebook;
        $client -> twitter = $request -> twitter;
        $client -> instagram = $request -> instagram;

        $clientImgName = time().'-'.$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('images/clients'),$clientImgName);

        $client -> image = $clientImgName;
        $client->save();
        return redirect()->route('clients');

    }

    public function editClientForm($id)
    {
        $client = Clients::findOrFail($id);
        return view('admin.clients.edit_client',\compact('client'));
    }

    public function editClient(Request $request,$id)
    {
        $this -> validate($request, [
            'name' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:10092',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'instagram' => 'required|url',

        ]);

        $client = Clients::findOrFail($id);

        $client -> name = $request -> name;
        $client -> facebook = $request -> facebook;
        $client -> twitter = $request -> twitter;
        $client -> instagram = $request -> instagram;

        $editClientImage = time().'-'.$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('images/clients'), $editClientImage);
        $client->image = $editClientImage;

        $client -> save();
        return redirect()->route('clients');
    }

    public function deleteClient($id)
    {
        $client = Clients::findOrFail($id);
        $client ->delete();

        return redirect()->route('clients');
    }
}
