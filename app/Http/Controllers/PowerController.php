<?php

namespace App\Http\Controllers;
use App\Models\Power;
use Illuminate\Http\Request;

class PowerController extends Controller
{
    public function index()
{
    return Power::all();
}
public function store(Request $request) 
{
    $request->validate([
        'Name' => 'required',
        'Use' => 'required',
        'Decription' => 'required'
    ]);
    return Power::create($request->all());
}
public function show($id)
{
    return Power::find($id);
}
public function update(Request $request, $id)
{
    $power = Power::find($id);
    $power->update($request->all());
    return $power;
}
public function destroy($id)
{
    return Power::destroy($id);
}
}
