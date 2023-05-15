<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personas extends Controller
{
    public function docentes() {
        return view('personas.docentes');
    }

    public function estudiantes() {
        return view('personas.estudiantes');
    }
}
