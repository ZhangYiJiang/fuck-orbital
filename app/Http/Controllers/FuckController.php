<?php

namespace App\Http\Controllers;

use App\Fuck;
use Illuminate\Http\Request;

class FuckController extends Controller
{
    public function show(Fuck $fuck)
    {
        return view('fuck.show', compact('fuck'));
    }

    public function create()
    {
        return view('fuck.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->getRules());
        $fuck = Fuck::create($request->only(['email', 'name', 'fuck']));
        $fuck->sendConfirmEmail();

        return redirect('/')
            ->with('success', "Please confirm your fuck by clicking 
            on the confirm link sent to your email address.");
    }
    
    public function confirm(Fuck $fuck)
    {
        $fuck->confirm();

        return redirect()
            ->action('FuckController@show', [$fuck])
            ->with('success', "Your fuck is now publicly visible! Aren't you proud?");
    }

    public function edit(Fuck $fuck)
    {
        return view('fuck.edit', compact('fuck'));
    }

    public function update(Fuck $fuck, Request $request)
    {
        $this->validate($request, $this->getRules(['email']));
        $fuck->update($request->only(['name', 'fuck']));
        return redirect()
            ->action('FuckController@show', [$fuck])
            ->with('success', "Your fuck is has been updated!");
    }

    public function delete(Fuck $fuck, Request $request)
    {
        
    }

    protected function getRules(array $exclude = []){
        return array_except([
            'name' => 'string|max:120',
            'email' => 'required|email',
            'fuck' => 'required|string',
        ], $exclude);
    }
}
