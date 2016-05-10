<?php

namespace App\Http\Controllers;

use App\Fuck;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fucks = Fuck::confirmed()
            ->chronological()
            ->get();

        return view('welcome', compact('fucks'));
    }
}
