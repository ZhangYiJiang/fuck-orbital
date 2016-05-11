<?php

namespace App\Http\Controllers;

use App\Fuck;
use Illuminate\Http\Request;

use App\Http\Requests;

class ApiController extends Controller
{
    public function listFucks(Request $request)
    {
        $fucks = Fuck::chronological()
            ->confirmed()
            ->paginate($request->input('pagesize'));

        $this->enableFields($request, $fucks);
        return response()->json($fucks);
    }

    public function getFucks($fucks, Request $request)
    {
        $this->enableFields($request, $fucks);

        return response()->json([
            'total' => count($fucks),
            'data' => $fucks
        ]);
    }

    protected function enableFields(Request $request, $models)
    {
        $fields = ['source' => 'fuck'];

        foreach ($fields as $input => $field) {
            if ($request->input($input)) {
                $models->each(function($m) use ($field){
                    $m->addVisible($field);
                });
            }
        }
    }
}
