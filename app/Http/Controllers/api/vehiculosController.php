<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vehiculos;

class vehiculosController extends Controller
{
    public function index()
    {
        return vehiculos::all();
    }
 
    public function show($id)
    {
        return vehiculos::find($id);
    }

    public function store(Request $request)
    {
        return vehiculos::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = vehiculos::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = vehiculos::findOrFail($id);
        $article->delete();

        return 204;
    }
}
