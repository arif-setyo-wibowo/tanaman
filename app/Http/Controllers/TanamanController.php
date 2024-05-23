<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use App\Models\Petak;
use App\Models\Perbanyak;
use App\Models\Kebun;
use App\Models\Bagian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class TanamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Tanaman',
            'petak' => Petak::all(),
            'perbanyak' => Perbanyak::all(),
            'kebun' => Kebun::all(),
            'bagian' => Bagian::all(),
            'tanaman' => Tanaman::with('perbanyak','petak','kebun','bagian')->get()
        ];

        return view('tanaman.tanaman',$data);
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
        $tanaman = new Tanaman;
        $tanaman->nama_lokal = $request->lokal;
        $tanaman->nama_latin = $request->latin;
        $tanaman->kegunaan = $request->kegunaan;
        $tanaman->id_perbanyak = $request->perbanyak;
        $tanaman->famili = $request->famili;
        $tanaman->id_bagian_yg_digunakan = $request->bagian;
        $tanaman->id_petak = $request->petak;
        $tanaman->id_kebun = $request->kebun;
        $tanaman->latitude = '0';
        $tanaman->longitude = '0';
        $tanaman->asal = '0';
        $tanaman->status = $request->status;
        $tanaman->save();
        Session::flash('msg', 'Berhasil Tambah Data Tanaman');
        return redirect()->route('tanaman.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function show(Tanaman $tanaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Tanaman',
            'petak' => Petak::all(),
            'perbanyak' => Perbanyak::all(),
            'kebun' => Kebun::all(),
            'bagian' => Bagian::all(),
            'tanaman' => Tanaman::with('perbanyak','petak','kebun','bagian')->where('id',$id)->get()
        ];

        return view('tanaman.tanaman_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $idtanaman = $request->idtanaman;

        DB::table('table_tanaman')
            ->where('id', $idtanaman)
            ->update([
                'nama_lokal' => $request->lokal,
                'nama_latin' => $request->latin,
                'kegunaan' => $request->kegunaan,
                'id_perbanyak' => $request->perbanyak,
                'famili' => $request->famili,
                'id_bagian_yg_digunakan' => $request->bagian,
                'id_petak' => $request->petak,
                'id_kebun' => $request->kebun,
                'latitude' => '0',
                'longitude' => '0',
                'asal' => '0',
                'status' => $request->status
            ]);
            Session::flash('msg', 'Berhasil Mengubah Data Tanaman');

            return redirect()->route('tanaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tanaman  $tanaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::table('table_tanaman')->where('id', $id)->delete();
            Session::flash('msg', 'Berhasil Menghapus Data Tanaman');
        } catch (\Exception $e) {
            Session::flash('error', 'Gagal menghapus data Tanaman. Data tersebut masih digunakan dalam tabel lain.');
        }
        
        return redirect()->route('tanaman.index');
    }
}
