<?php

namespace App\Http\Controllers;

use App\Fuck;
use Illuminate\Http\Request;

use App\Http\Requests;

class ApiController extends Controller
{
    public function getFucks(Request $request)
    {
        $fucks = Fuck::chronological()
            ->confirmed()
            ->paginate($request->input('pagesize'));

        return $fucks;
    }
}
