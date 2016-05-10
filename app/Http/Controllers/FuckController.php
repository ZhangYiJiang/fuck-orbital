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
        // Refresh token when editing so the user won't run out of time
        $fuck->refreshToken();
        return view('fuck.edit', compact('fuck'));
    }

    public function update(Fuck $fuck, Request $request)
    {
        // Email cannot be changed when updating
        $this->validate($request, $this->getRules(['email']));
        
        $fuck->update($request->only(['name', 'fuck']));
        return redirect()
            ->action('FuckController@show', [$fuck])
            ->with('success', "Your fuck has been updated!");
    }

    public function token(Fuck $fuck)
    {
        $fuck->sendTokenEmail();
        return redirect()
            ->action('FuckController@show', [$fuck])
            ->with('success', "An email has been sent to you. Use the links in it to 
                edit/delete your fuck - but hurry, because the token expires pretty quickly");
    }

    public function delete(Fuck $fuck)
    {
        // Refresh token before deleting so the user won't run out of time
        $fuck->refreshToken();
        return view('fuck.delete', compact('fuck'));
    }
    
    public function trash(Fuck $fuck, Request $request)
    {
        $fuck->delete();
        return redirect('/')->with('success', "Your fuck has been deleted. We're sad to see you go :(");
    }

    protected function getRules(array $exclude = []){
        return array_except([
            'name' => 'string|max:120',
            'email' => 'required|email',
            'fuck' => 'required|string',
        ], $exclude);
    }
}
