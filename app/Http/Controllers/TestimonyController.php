<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    public function getTestimonies()
    {
        $testimonies = Testimony::skip(0)->take(4)->get();
        return view('admin.testimony.testimonies', \compact('testimonies'));
    }

    public function newTestimonyForm()
    {
        return view('admin.testimony.create_testimony');
    }

    public function newTestimony(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required',
            'image' => 'required',
            'testimony' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:10092'
        ]);

        $testimony = new Testimony();

        $testimony -> name = $request -> name;
        $testimony -> testimony = $request -> testimony;

        $newImageName = time().'-'.$request->name.'.'.$request->image->extension();
        $request->image->move(\public_path('images'),$newImageName);

        $testimony -> image = $newImageName;
        $testimony->save();
        return redirect()->route('testimonies');

        
    }
}
