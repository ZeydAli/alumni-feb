<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // private $registerModel;

    // public function __construct()
    // {
    //     $this->registerModel = new RegisterModel();
    // }

    public function index() {
        return view('register');
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|max:255|unique:users',
            'password' => 'required|min:3|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];
        $user->role = "Alumni";

        $user->save();

        return redirect('/register')->with('registerSuccess', 'Data user baru berhasil dibuat.');
        
        // try {
        //     $request['password'] = Hash::make($request['password']);
            
        // } catch (\Throwable $th) {
        //     return [
        //         'status' => false,
        //         'error' => $th->getMessage()
        //     ];
        // }
        // $payload = [
        //     "name" => $request['name'],
        //     "email" => $request['email'],
        //     "password" => $request['password'],
        //     "roles" => $request['roles'],
        // ];
        // // dd($payload);
        // $createdModel = $this->registerModel->store($payload);

        // if($createdModel){
        //     return redirect('/admin');
        // }

        // return back()->withErrors([
        //     'Error' => 'email atau kata sandi salah'
        // ]);
    }
}
