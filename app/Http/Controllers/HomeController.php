<?php

namespace App\Http\Controllers;

use App\Models\Models;
use App\Models\Services;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $services = Services::skip(0)->take(3)->get();
        $models = Models::skip(0)->take(3)->get();

        return view('index',compact('services','models'));
    }
}
