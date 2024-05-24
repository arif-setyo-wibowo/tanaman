<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Gambar;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
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
        $data = [
            'title' => 'Dashboard',
            'gambar' => $gambar,
        ];
        // echo '<pre>';
        // print_r($gambar);
        // echo '</pre>';
        // exit();
        return view('tanaman.detail', $data);
    }
}
