<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $data   = array('title' => 'Dashboard');
        return view('backend.dashboard.index', $data);
    }
}
