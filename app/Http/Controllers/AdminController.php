<?php

namespace App\Http\Controllers;

use App\Fuck;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $fucks = Fuck::chronological()->paginate(30);

        return view('admin.index', compact('fucks'));
    }
}
