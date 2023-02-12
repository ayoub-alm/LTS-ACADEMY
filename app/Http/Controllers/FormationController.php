<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function qhse()
    {
        return view('formations.qhse');
    }

    public function web()
    {
        return view('formations.web');
    }
}
