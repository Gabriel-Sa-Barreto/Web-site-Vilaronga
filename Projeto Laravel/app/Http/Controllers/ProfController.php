<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:professor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $professor = Auth::guard('professor')->user()->nome;
        return view('professor', compact('professor'));
    }
}
