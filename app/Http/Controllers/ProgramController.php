<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        return view('program', [
            "title" => "Program",
            "programs" => Program::all()
        ]);
    }
    public function show($slug)
    {
        return view('signature', [
            "title" => "Signature Program",
            "signature" => Program::find($slug)
        ]);
    }
}
