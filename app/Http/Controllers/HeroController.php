<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
{
    return Hero::all();
}
public function store(Request $request) 
{
    $request->validate([
        'PublisherID' => 'required',
        'PowerID' => 'required',
        'HeroName' => 'required',
        'AlterEgo' => 'required',
        'City' => 'required',
    ]);
    return Hero::create($request->all());
}
public function show($id)
{
    return Hero::find($id);
}
public function update(Request $request, $id)
{
    $hero = Hero::find($id);
    $hero->update($request->all());
    return $hero;
}
public function destroy($id)
{
    return Hero::destroy($id);
}
}
