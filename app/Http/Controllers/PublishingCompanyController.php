<?php

namespace App\Http\Controllers;
use App\Models\PublishingCompany;
use Illuminate\Http\Request;

class PublishingCompanyController extends Controller
{
public function index()
{
    return PublishingCompany::all();
}
public function store(Request $request) 
{
    $request->validate([
        'Name' => 'required',
        'Creator' => 'required',
        'CurrentOwner' => 'required',
    ]);
    return PublishingCompany::create($request->all());
}
public function show($id)
{
    return PublishingCompany::find($id);
}
public function update(Request $request, $id)
{
    $publishingcompany = PublishingCompany::find($id);
    $publishingcompany->update($request->all());
    return $publishingcompany;
}
public function destroy($id)
{
    return PublishingCompany::destroy($id);
}
}
