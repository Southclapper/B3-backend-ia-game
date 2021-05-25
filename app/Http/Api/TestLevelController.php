<?php

namespace App\Http\api;


use App\Models\Test_level;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class TestLevelController extends Controller
{
    public function index()
    {
        return Test_level::all();
    }

    public function store(Request $request)
    {
        Test_level::create($request->all());
    }

    public function show(Test_level $Test_level)
    {
        return $Test_level;
    }

    public function update(Request $request, Test_level $Test_level)
    {
        $Test_level->update($request->all());
    }

    public function destroy(Test_level $Test_level)
    {
        $Test_level->delete();
    }
}
