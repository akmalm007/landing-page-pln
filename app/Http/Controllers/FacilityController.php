<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        return view('fasilitas', [
            "title" => "Fasilitas",
            "primary" => Facility::where('type', 'utama')->get(),
            "secondary" => Facility::where('type', 'pendukung')->get()
        ]);
    }
}
