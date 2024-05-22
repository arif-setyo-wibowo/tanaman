<?php

namespace App\Http\Controllers;

use App\Models\Perbanyak;
use Illuminate\Http\Request;

class PerbanyakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Perbanyak'
        ];

        return view('tanaman.perbanyak',$data);
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
     * @param  \App\Models\Perbanyak  $perbanyak
     * @return \Illuminate\Http\Response
     */
    public function show(Perbanyak $perbanyak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perbanyak  $perbanyak
     * @return \Illuminate\Http\Response
     */
    public function edit(Perbanyak $perbanyak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perbanyak  $perbanyak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perbanyak $perbanyak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perbanyak  $perbanyak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perbanyak $perbanyak)
    {
        //
    }
}
