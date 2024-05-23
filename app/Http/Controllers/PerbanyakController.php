<?php

namespace App\Http\Controllers;

use App\Models\Perbanyak;
use App\Models\Tanaman;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

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
            'title' => 'Perbanyak',
            'perbanyak' => Perbanyak::all()
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
        $perbanyak = new Perbanyak;
        $perbanyak->NAMA = $request->nama;
        $perbanyak->save();
        Session::flash('msg', 'Berhasil Tambah Data Perbanyak');
        return redirect()->route('perbanyak.index');
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
    public function edit($id)
    {
        $data['perbanyak'] = Perbanyak::find($id);
        $data['title'] = 'Edit';
        return view('tanaman.perbanyak_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perbanyak  $perbanyak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $idperbanyak = $request->idperbanyak;
        $namaBaru = $request->nama;

        DB::table('perbanyak')
            ->where('ID', $idperbanyak)
            ->update(['NAMA' => $namaBaru]);

        Session::flash('msg', 'Berhasil Mengubah Data Perbanyak');

        return redirect()->route('perbanyak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perbanyak  $perbanyak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::table('perbanyak')->where('ID', $id)->delete();
            Session::flash('msg', 'Berhasil Menghapus Data Perbanyak');
        } catch (\Exception $e) {
            Session::flash('error', 'Gagal menghapus data kebun. Data tersebut masih digunakan dalam tabel lain.');
            \Log::error('Error saat menghapus data kebun: ' . $e->getMessage());
        }
        
        return redirect()->route('perbanyak.index');
    }
}
