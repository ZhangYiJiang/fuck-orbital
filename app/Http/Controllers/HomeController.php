<?php

namespace App\Http\Controllers;

use App\Fuck;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fucks = Fuck::confirmed()
            ->chronological()
            ->paginate(10);

        return view('welcome', compact('fucks'));
    }
}
