<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\Program;

class ProgramController extends Controller
{
    // public function index()
    // {
    //     return view('program', [
    //         "title" => "Program",
    //         "programs" => Program::all()
    //     ]);
    // }

    public function show(Program $program)
    {
        return view('program', [
            "title" =>  $program->name,
            "program" => $program,
            "signature_program" => $program->signatureProgram,
        ]);
    }
}
