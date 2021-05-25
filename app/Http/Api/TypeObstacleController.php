<?php

namespace App\Http\api;


use App\Models\type_obstacle;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class TypeObstacleController extends Controller
{
    public function index()
    {
        return type_obstacle::all();
    }

    public function store(Request $request)
    {
        type_obstacle::create($request->all());
    }

    public function show(type_obstacle $type_obstacle)
    {
        return $type_obstacle;
    }

    public function update(Request $request, type_obstacle $type_obstacle)
    {
        $type_obstacle->update($request->all());
    }

    public function destroy(type_obstacle $type_obstacle)
    {
        $type_obstacle->delete();
    }
}
