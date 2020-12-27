<?php

namespace App\Http\Controllers;

use App\Models\stdClass;
use Illuminate\Http\Request;

class StdClassController extends Controller
{
    public function detail(Request $request)
    {
        $students = stdClass::findOrFail($request->id)->students()->get();
        return view("list", compact(['students']));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cls = stdClass::all();
        return view("classes.list", compact(["cls"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stdClass  $stdClass
     * @return \Illuminate\Http\Response
     */
    public function show(stdClass $stdClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stdClass  $stdClass
     * @return \Illuminate\Http\Response
     */
    public function edit(stdClass $stdClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stdClass  $stdClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stdClass $stdClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stdClass  $stdClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(stdClass $stdClass)
    {
        //
    }
}
