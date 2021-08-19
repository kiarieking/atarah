<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function getHeaders()
    {
        $header = Header::all();
        return view('admin.header.header', compact('header'));
    }

    public function newHeaderForm()
    {
        return view('admin.header.new_header');

    }

    public function newHeader(Request $request)
    {
        $this -> validate($request, [
            'background_img' => 'required|mimes:jpg,png,jpeg|max:10092',
            'logo_img' => 'required|mimes:jpg,png,jpeg|max:10092',
            'big_heading' => 'required',
            'small_heading' => 'required'
        ]);

        $header = new Header();
        $header -> big_heading  = $request -> big_heading;
        $header -> small_heading = $request -> small_heading;
        
        $bgimagename = time().'-'."backgroundimg".'.'.$request->background_img->extension();
        $logoimagename = time().'-'."logoimg".'.'.$request->logo_img->extension();
        
        $request->background_img->move(public_path('images/headers'), $bgimagename);
        $request->logo_img->move(public_path('images/headers'), $logoimagename);

        $header->background_img = $bgimagename;
        $header -> logo_img = $logoimagename;

        $header->save();
        return redirect()->route('headers');

    }

    public function editHeaderForm($id)
    {
        $header = Header::findOrFail($id);
        return view('admin.header.edit_header', compact('header'));
    }

    public function editHeader(Request $request, $id)
    {
        $this -> validate($request, [
            'background_img' => 'required|mimes:jpg,png,jpeg|max:10092',
            'logo_img' => 'required|mimes:jpg,png,jpeg|max:10092',
            'big_heading' => 'required',
            'small_heading' => 'required'
        ]);

        $header = Header::findOrFail($id);
        $header -> big_heading  = $request -> big_heading;
        $header -> small_heading = $request -> small_heading;

        $bgimagename = time().'-'."backgroundimg".'.'.$request->background_img->extension();
        $logoimagename = time().'-'."logoimg".'.'.$request->logo_img->extension();

        $request->background_img->move(public_path('images/headers'), $bgimagename);
        $request->logo_img->move(public_path('images/headers'), $logoimagename);
        
        $header->background_img = $bgimagename;
        $header -> logo_img = $logoimagename;

        $header->save();
        return redirect()->route('headers');
    }
}
