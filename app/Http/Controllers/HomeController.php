<?php

namespace App\Http\Controllers;

use App\Fuck;
use Illuminate\Support\Facades\View;

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

    public function doc($page = 'index')
    {
        $view = "docs.$page";

        if ( ! view()->exists($view)) {
            abort(404);
        } else {
            return view($view);
        }
    }


}
