<?php

namespace App\Http\Controllers;

use App\Models\ResParking;
use Illuminate\Http\Request;

class ResParkinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('BACK\sections\parking\reservation_parking');
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
     * @param  \App\Models\ResParking  $resParking
     * @return \Illuminate\Http\Response
     */
    public function show(ResParking $resParking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResParking  $resParking
     * @return \Illuminate\Http\Response
     */
    public function edit(ResParking $resParking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResParking  $resParking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResParking $resParking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResParking  $resParking
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResParking $resParking)
    {
        //
    }
}
