<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'title' => 'Dashboard'
        ];
        return view('tanaman.front', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('tanaman.detail', $data);
    }
}
