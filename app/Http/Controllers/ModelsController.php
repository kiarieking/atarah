<?php

namespace App\Http\Controllers;

use App\Models\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ModelsController extends Controller
{
    public function index()
    {
        return view('admin.models.model');
    }

    public function newModel(Request $request)
    {
        $this->validate($request, [
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);
        
        $model = new Models();

        $model -> icon = $request -> icon;
        $model -> header = $request -> title;
        $model -> description = $request -> description;
        
        $model -> save();
        return redirect()->route('models');
    }
}
