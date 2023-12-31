<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use Illuminate\Http\Request;

class AcademyController extends Controller
{
    //
    public function index()
    {
        return view('academy', [
            "title" => "Academy",
            "academies" => Academy::all(),
        ]);
    }

    public function show(Academy $academy)
    {
        return view('academies', [
            "title" => "Academy",
            "academy" => $academy
        ]);
    }
}
