<?php

namespace App\Http\api;


use App\Models\Level;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        return Level::all();
    }

    public function store(Request $request)
    {
        Level::create($request->all());
    }

    public function show(Level $Level)
    {
        return $Level;
    }

    public function update(Request $request, Level $Level)
    {
        $Level->update($request->all());
    }

    public function destroy(Level $Level)
    {
        $Level->delete();
    }
}
