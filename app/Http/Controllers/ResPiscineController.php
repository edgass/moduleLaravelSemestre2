<?php

namespace App\Http\Controllers;

use App\Models\ResPiscine;
use Illuminate\Http\Request;

class ResPiscineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('BACK\sections\piscine\reservation_piscine');
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
     * @param  \App\Models\ResPiscine  $resPiscine
     * @return \Illuminate\Http\Response
     */
    public function show(ResPiscine $resPiscine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResPiscine  $resPiscine
     * @return \Illuminate\Http\Response
     */
    public function edit(ResPiscine $resPiscine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResPiscine  $resPiscine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResPiscine $resPiscine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResPiscine  $resPiscine
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResPiscine $resPiscine)
    {
        //
    }
}
