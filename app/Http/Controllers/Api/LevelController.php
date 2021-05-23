<?php

namespace App\Http\Controllers\api;


use App\Models\Level;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Level::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Level::create($request->all());
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Level $Level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $Level)
    {
        return $Level;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Level $Level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Level $Level)
    {
        $Level->update($request->all());
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Level $Level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $Level)
    {
        $Level->delete();
    }
}
