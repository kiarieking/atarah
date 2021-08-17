<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function getClients()
    {
        return view('admin.clients.clients');
    }
}
