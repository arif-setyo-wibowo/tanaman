<?php

namespace App\Http\Controllers;

use App\Models\Petak;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PetakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Petak',
            'petak' => Petak::all()
        ];

        return view('tanaman.petak',$data);
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
        $petak = new Petak;
        $petak->NAMA = $request->nama;
        $petak->save();
        Session::flash('msg', 'Berhasil Tambah Data Petak');
        return redirect()->route('petak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petak  $petak
     * @return \Illuminate\Http\Response
     */
    public function show(Petak $petak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petak  $petak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['petak'] = Petak::find($id);
        $data['title'] = 'Edit';
        return view('tanaman.petak_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petak  $petak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $idpetak = $request->idpetak;
        $namaBaru = $request->nama;

        DB::table('petak')
            ->where('ID', $idpetak)
            ->update(['NAMA' => $namaBaru]);

        Session::flash('msg', 'Berhasil Mengubah Data Petak');

        return redirect()->route('petak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petak  $petak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::table('petak')->where('ID', $id)->delete();
            Session::flash('msg', 'Berhasil Menghapus Data Petak');
        } catch (\Exception $e) {
            Session::flash('error', 'Gagal menghapus data Petak. Data tersebut masih digunakan dalam tabel lain.');
        }
        
        return redirect()->route('petak.index');
    }
}
