<?php

namespace App\Http\Controllers;

use App\Models\AlumniModel;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    private $alumniModel;

    public function __construct()
    {
        $this->alumniModel = new AlumniModel();
    }


    public function store(Request $request)
    {
        $request -> only([
            'name' => 'name',
            'email' => 'email',
            'no_hp' => 'no_hp',
            'departemen' => 'departemen',
            'prodi' => 'prodi',
            'angkatan' => 'angkatan',
            'pekerjaan_saat_ini' => 'pekerjaan_saat_ini',
        ]);
            
        $payload = [
            "name" => $request['name'],
            "email" => $request['email'],
            "no_hp" => $request['no_hp'],
            "departemen" => $request['departemen'],
            "prodi" => $request['prodi'],
            "angkatan" => $request['angkatan'],
            "pekerjaan_saat_ini" => $request['pekerjaan_saat_ini'],
        ];
        // dd($payload);
        $createdModel = $this->alumniModel->store($payload);

        if($createdModel){
            return redirect('/admin');
        }

        return back()->withErrors([
            'Error' => 'data yang anda masukkan sandi salah'
        ]);
    }


    public function update(Request $request)
    {
        //
    }
}
