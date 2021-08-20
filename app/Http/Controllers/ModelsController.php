<?php

namespace App\Http\Controllers;

use App\Models\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ModelsController extends Controller
{
    public function index()
    {
        $models = Models::all();
        return view('admin.models.model', compact('models'));
    }

    public function createModelForm()
    {
        return \view('admin.models.create_model');
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

    public function editModelForm($id)
    {
        $model = Models::findOrFail($id);
        return view('admin.models.edit_model', compact('model'));
    }

    public function modelChanges(Request $request, $id)
    {
        $this->validate($request, [
            'header' => 'required',
            'icon' => 'required',
            'description' => 'required'
        ]);

        $model = Models::findOrFail($id);

        $model -> header = $request -> header;
        $model -> icon = $request -> icon;
        $model -> description = $request -> description;

        $model-> save();

        return redirect()->route('models');
    }

    public function deleteModel($id)
    {
        $model = Models::findOrFail($id);
        $model->delete();
        return redirect()->route('models');
    }

}
