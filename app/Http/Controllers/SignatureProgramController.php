<?php

namespace App\Http\Controllers;

use App\Models\SignatureProgram;
use Illuminate\Http\Request;

class SignatureProgramController extends Controller
{
    public function show(SignatureProgram $sig)
    {
        return view('signature', [
            "title" => $sig->title,
            "sig" => $sig,
            "program" => $sig->program
        ]);
    }
}
