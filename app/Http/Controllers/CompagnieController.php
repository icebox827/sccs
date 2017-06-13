<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompagnieController extends Controller
{
    public function index() {
        return view('compagnie');
    }
}
