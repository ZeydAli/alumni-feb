<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('master.dashboard.user');
    }
    public function alumni(){
        return view('master.dashboard.alumni');
    }
}
