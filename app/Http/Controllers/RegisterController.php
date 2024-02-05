<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterModel;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    private $registerModel;

    public function __construct()
    {
        $this->registerModel = new RegisterModel();
    }


    public function store(Request $request)
    {
        $request -> only([
            'name' => 'name',
            'email' => 'email',
            'password' => 'password',
            'roles' => 'roles',
        ]);
        
        try {
            $request['password'] = Hash::make($request['password']);
            
        } catch (\Throwable $th) {
            return [
                'status' => false,
                'error' => $th->getMessage()
            ];
        }
        $payload = [
            "name" => $request['name'],
            "email" => $request['email'],
            "password" => $request['password'],
            "roles" => $request['roles'],
        ];
        // dd($payload);
        $createdModel = $this->registerModel->store($payload);

        if($createdModel){
            return redirect('/admin');
        }

        return back()->withErrors([
            'Error' => 'email atau kata sandi salah'
        ]);
    }
}
