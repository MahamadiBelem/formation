<?php

namespace App\Http\Controllers;

use App\Models\Test1;
use App\Http\Requests\StoreTest1Request;
use App\Http\Requests\UpdateTest1Request;

class Test1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTest1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTest1Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test1  $test1
     * @return \Illuminate\Http\Response
     */
    public function show(Test1 $test1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test1  $test1
     * @return \Illuminate\Http\Response
     */
    public function edit(Test1 $test1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTest1Request  $request
     * @param  \App\Models\Test1  $test1
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTest1Request $request, Test1 $test1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test1  $test1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test1 $test1)
    {
        //
    }
}
