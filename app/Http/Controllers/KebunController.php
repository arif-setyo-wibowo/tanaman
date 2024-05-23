<?php

namespace App\Http\Controllers;

use App\Models\Kebun;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KebunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Kebun',
            'kebun' => Kebun::all()
        ];

        return view('tanaman.kebun',$data);
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
        $kebun = new Kebun;
        $kebun->NAMA = $request->nama;
        $kebun->save();
        Session::flash('msg', 'Berhasil Tambah Data Kebun');
        return redirect()->route('kebun.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kebun  $kebun
     * @return \Illuminate\Http\Response
     */
    public function show(Kebun $kebun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kebun  $kebun
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kebun'] = Kebun::find($id);
        $data['title'] = 'Edit';
        return view('tanaman.kebun_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kebun  $kebun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    { 
        $idKebun = $request->idkebun;
        $namaBaru = $request->nama;

        DB::table('kebun')
            ->where('id', $idKebun)
            ->update(['NAMA' => $namaBaru]);

        Session::flash('msg', 'Berhasil Mengubah Data Kebun');

        return redirect()->route('kebun.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kebun  $kebun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::table('kebun')->where('ID', $id)->delete();
            Session::flash('msg', 'Berhasil Menghapus Data Kebun');
        } catch (\Exception $e) {
            Session::flash('error', 'Gagal menghapus data Kebun. Data tersebut masih digunakan dalam tabel lain.');
        }
        
        return redirect()->route('kebun.index');
    }
}
