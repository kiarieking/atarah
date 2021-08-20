<?php

namespace App\Http\Controllers;

use App\Models\Models;
use App\Models\Clients;
use App\Models\Services;
use App\Models\Testimony;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $services = Services::skip(0)->take(3)->get();
        $models = Models::skip(0)->take(4)->get();
        $testimonies = Testimony::skip(0)->take(3)->get();
        $clients = Clients::skip(0)->take(5)->get();

        return view('index',compact('services','models','testimonies','clients'));
    }
}
