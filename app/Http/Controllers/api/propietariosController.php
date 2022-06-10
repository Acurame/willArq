<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\propietarios;

class propietariosController extends Controller
{
    public function index()
    {
        return propietarios::all();
    }
 
    public function show($id)
    {
        return propietarios::find($id);
    }

    public function store(Request $request)
    {
        return propietarios::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = propietarios::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = propietarios::findOrFail($id);
        $article->delete();

        return 204;
    }
}
