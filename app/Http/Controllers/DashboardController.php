<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Gambar;


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
        $data = [
            'title' => 'Dashboard'
        ];
        return view('tanaman.detail', $data);
    }
}
