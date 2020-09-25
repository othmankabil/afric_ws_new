<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class solutionController extends Controller
{
    public function __construct()
    {
        $this->middleware('roles:admin');
    }
    public function solutions()
    {
        return view('admin_forms.solution_form');
    }
}
