<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TampilanPetaController extends Controller
{
    function index () {
        return view('modul.peta');
    }
}
