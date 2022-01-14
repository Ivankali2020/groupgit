<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIvanRequest;
use App\Http\Requests\UpdateIvanRequest;
use App\Models\Ivan;

class IvanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'hello';
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
     * @param  \App\Http\Requests\StoreIvanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIvanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ivan  $ivan
     * @return \Illuminate\Http\Response
     */
    public function show(Ivan $ivan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ivan  $ivan
     * @return \Illuminate\Http\Response
     */
    public function edit(Ivan $ivan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIvanRequest  $request
     * @param  \App\Models\Ivan  $ivan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIvanRequest $request, Ivan $ivan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ivan  $ivan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ivan $ivan)
    {
        //
    }
}
