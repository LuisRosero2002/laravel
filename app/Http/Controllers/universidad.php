<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class universidad extends Controller
{
    public function programas() {
        return view('universidad.programas');
    }

    public function facultades() {
        return view('universidad.facultades');
    }
}
