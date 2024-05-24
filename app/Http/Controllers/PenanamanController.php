<?php

namespace App\Http\Controllers;

use App\Models\Penanaman;
use App\Models\Tanaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PenanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Penanaman', 
            'tanaman' => Tanaman::all(),
            'penanaman' => Penanaman::with('tanaman')->get()
        ];

        return view('tanaman.penanaman',$data);
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
        $penanaman = new Penanaman;
        $penanaman->id_tanaman = $request->tanaman;
        $penanaman->tahun = $request->tahun;
        $penanaman->jumlah = $request->jumlah;
        $penanaman->save();
        Session::flash('msg', 'Berhasil Menambah Data Penanaman');
        return redirect()->route('penanaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penanaman  $penanaman
     * @return \Illuminate\Http\Response
     */
    public function show(Penanaman $penanaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penanaman  $penanaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit',
            'tanaman' => Tanaman::all(),
            'penanaman' => Penanaman::with('tanaman')->where('id',$id)->get()
        ];

        return view('tanaman.penanaman_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penanaman  $penanaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $penanaman = Penanaman::find($request->idpenanaman);
        $penanaman->id_tanaman = $request->tanaman;
        $penanaman->tahun = $request->tahun;
        $penanaman->jumlah = $request->jumlah; 
        $penanaman->save();
        Session::flash('msg', 'Berhasil Mengubah Data Penanaman');
        return redirect()->route('penanaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penanaman  $penanaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penanaman $penanaman)
    {
        //
    }
}
