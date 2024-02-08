<?php

namespace App\Http\Controllers;

use App\Models\Alumnus;
use Illuminate\Http\Request;

class AlumnusController extends Controller
{
    public function index(){
        $alumni = Alumnus::all();
        
        return view('master.dashboard.alumni', compact('alumni'));
    }
}
