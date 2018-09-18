<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function show()
    {
        $data = [
            "name" => "Luke Thie",
            "email" => "lukethie28@outlook.com",
            "age" => 18,
            "description" => "Toyota",
            "interests" => ["Gaming", "Netflix", "Music"]
        ];
        return view('me', $data);
    }
}
