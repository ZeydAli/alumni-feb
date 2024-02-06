<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiodataController extends Controller
{
    public function index() {
        $user = Auth::user();
    
        return view('user.dashboard.biodata', compact('user'));
    }
}
