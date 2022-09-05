<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('inscription');
    }

    public function adduser(Request $request)
    {
        User::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "email" => $request->email,
            "password" => $request->password,
            "email_verified_at" => now()
        ]);
    }
}