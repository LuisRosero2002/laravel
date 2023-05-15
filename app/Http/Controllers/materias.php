<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materias extends Controller
{
    public function materia() {
        return view('materias.materia');
    }
}
