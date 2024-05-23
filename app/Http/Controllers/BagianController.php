<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bagian = Bagian::all();
        $title = 'Bagian';

        return view('tanaman.bagian', compact('bagian','title'));
    }

     public function store(Request $request)
    {
        $bagian = new Bagian;
        $bagian->NAMA = $request->nama;
        $bagian->save();
        Session::flash('msg', 'Berhasil Menambah Data Bagian');
        return redirect()->route('bagian.index');
        
    }

    public function edit($id){
        $data = [
            'bagian' => Bagian::find($id),
            'title' => 'Edit'
        ];
        return view('tanaman.bagian_edit',$data);
    }

    public function update(Request $request){

        $idBagian = $request->idbagian;
        $namaBaru = $request->nama;

        DB::table('bagian')
            ->where('ID', $idBagian)
            ->update(['NAMA' => $namaBaru]);

        Session::flash('msg', 'Berhasil Mengubah Data Bagian');

        return redirect()->route('bagian.index');
    }

    public function destroy($id)
    {
        try {
            DB::table('bagian')->where('ID', $id)->delete();
            Session::flash('msg', 'Berhasil Menghapus Data Bagian');
        } catch (\Exception $e) {
            Session::flash('error', 'Gagal menghapus data Bagian. Data tersebut masih digunakan dalam tabel lain.');
        }
        
        return redirect()->route('bagian.index');
    }
}
