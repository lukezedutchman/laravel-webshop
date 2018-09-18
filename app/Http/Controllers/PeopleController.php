<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    //
    public function show()
    {
        $data = [
            "peoples" => ["Luke", "DarthVader", "Ella", "Zofia", "Tachanka", "Castle", "Caveira", "Blackbeard", "Echo"]
        ];
        return view('people', $data);
    }
}