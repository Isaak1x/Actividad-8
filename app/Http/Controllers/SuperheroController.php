<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;

class SuperheroController extends Controller 
{
    public function index() 
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create() 
    {
        return view('superheroes.create');
    }

    public function store(Request $request) 
    {
    $request->validate([
        'nombre_superheroe' => 'required|string',
        'nombre_real' => 'required|string',
        'foto_url' => 'required|url',
        'info' => 'nullable|string',
    ]);

    $superhero = new Superhero();
        $superhero->nombre_superheroe = $request->input('nombre_superheroe');
        $superhero->nombre_real= $request->input('nombre_real');
        $superhero->foto_url = $request->input('foto_url');
        $superhero->info = $request->input('info');
    $superhero->save();

    return redirect()->route('superheroes.index');
    }

    public function show(Superhero $superhero) 
    {
        return view('superheroes.show', compact('superhero'));
    }

    public function edit(Superhero $superhero) 
    {
        return view('superheroes.edit', compact('superhero'));
    }

    public function update(Request $request, Superhero $superhero) 
    {
        $request->validate([
            'nombre_superheroe' => 'required|string',
            'nombre_real' => 'required|string',
            'foto_url' => 'required|url',
            'info' => 'nullable|string',
        ]);

        $superhero->update([
            'nombre_superheroe' => $request->input('nombre_superheroe'),
            'nombre_real' => $request->input('nombre_real'),
            'foto_url' => $request->input('foto_url'),
            'info' => $request->input('info'),
        ]);

        return redirect()->route('superheroes.index');
    }

    public function destroy(Superhero $superhero) 
    {
        $superhero->delete();
        return redirect()->route('superheroes.index');
    }
}