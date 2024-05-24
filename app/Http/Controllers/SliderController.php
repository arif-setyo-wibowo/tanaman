<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Slider',
            'slider' => Slider::all()
        ];

        return view('tanaman.admin_slider',$data);
    }

    public function storeUpdate(Request $request)
    {
        if ($request->proses == 'Update') {
            $request->validate([
                'slider.*' => 'image|mimes:jpg,jpeg,png,svg',
            ]);
            
            $slider = Slider::find($request->idslider);
            $slider->judul = $request->judul;
            $slider->deskripsi = $request->deskripsi;
            if ($request->file('foto')) {
                $foto = $request->file('foto');
                $fotoName = Str::random(20) . '.' . $foto->getClientOriginalExtension();
                $foto->move(public_path('uploads'), $fotoName);
                $slider->slider = $fotoName;
            }

            $slider->save();

            Session::flash('msg', 'Berhasil Mengubah Data Slider');
            return redirect()->route('admin.slider');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
