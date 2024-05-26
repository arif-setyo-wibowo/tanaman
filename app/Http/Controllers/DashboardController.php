<?php

namespace App\Http\Controllers;

use App\Models\Penanaman;
use App\Models\Tanaman;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Gambar;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'tanaman' =>  Tanaman::with('perbanyak','petak','kebun','bagian')->where('status', 'Hidup')->count(),
            'tanamanMati' =>  Tanaman::with('perbanyak','petak','kebun','bagian')->where('status', 'Mati')->count(),
        ];
        return view('tanaman.dashboard', $data);
    }

    public function front()
    {
        $data = [
            'title' => 'Dashboard',
            'slider' => Slider::all(),
            'gambar' => Gambar::with('tanaman')->paginate(10)
        ];
        return view('tanaman.front', $data);

    }

    public function detail($id)
    {
        $id_tanaman = Gambar::find($id)->id_tanaman;
        $gambar = Gambar::where('id_tanaman', $id_tanaman)->get();
        $tanaman = DB::table('table_tanaman')
            ->select('table_tanaman.*', 'penanaman.tahun', 'penanaman.jumlah', 'perbanyak.NAMA as nama_perbanyak', 'petak.NAMA as nama_petak', 'kebun.NAMA as nama_kebun', 'bagian.NAMA as nama_bagian')
            ->join('penanaman', 'table_tanaman.id', '=', 'penanaman.id_tanaman')
            ->join('perbanyak', 'table_tanaman.id_perbanyak', '=', 'perbanyak.ID')
            ->join('petak', 'table_tanaman.id_petak', '=', 'petak.ID')
            ->join('kebun', 'table_tanaman.id_kebun', '=', 'kebun.ID')
            ->join('bagian', 'table_tanaman.id_bagian_yg_digunakan', '=', 'bagian.ID')
            ->where('penanaman.id_tanaman', '=', $id_tanaman)
            ->get();
        $data = [
            'title' => 'Dashboard',
            'gambar' => $gambar,
            'tanaman' => $tanaman,
        ];
        return view('tanaman.detail', $data);
    }
}
