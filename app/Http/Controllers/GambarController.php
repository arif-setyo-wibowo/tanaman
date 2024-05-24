<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use App\Models\Tanaman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Gambar',
            'gambar' => Gambar::with('tanaman')->get(),
            'tanaman' => Tanaman::all()
        ];

        return view('tanaman.gambar',$data);
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
        $request->validate([
            'images' => 'image|mimes:png,jpg,jpeg',
        ]);

        $gambar = new Gambar;
        if ($request->file('images')) {
            $images = $request->file('images');
            $imagesName = Str::random(20) . '.' . $images->getClientOriginalExtension();
            $images->move(public_path('uploads'), $imagesName);
            $gambar->path = $imagesName;
        }
        $gambar->id_tanaman = $request->tanaman;
        $gambar->save();

        Session::flash('msg', 'Berhasil Menambah Data Gambar');
        return redirect()->route('gambar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function show(Gambar $gambar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit',
            'tanaman' => Tanaman::all(),
            'gambar' => Gambar::with('tanaman')->where('id',$id)->get()
        ];

        return view('tanaman.gambar_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'images' => 'image|mimes:png,jpg,jpeg',
        ]);

        $gambar = Gambar::find($request->idgambar);

        if ($request->file('images')) {
            $images = $request->file('images');
            $imagesName = Str::random(20) . '.' . $images->getClientOriginalExtension();
            $images->move(public_path('uploads'), $imagesName);
            File::delete('uploads/'.$gambar->path);
            $gambar->path = $imagesName;
        }else{
            $gambar->path = $request->imagesAwal;
        }

        $gambar->id_tanaman = $request->tanaman;
        $gambar->save();

        Session::flash('msg', 'Berhasil Mengubah Data Gambar');
        return redirect()->route('gambar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gambar  $gambar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            
            $gambar = Gambar::find($id);
            DB::table('gambar')->where('id', $id)->delete();
            File::delete('uploads/'.$gambar->path);
            Session::flash('msg', 'Berhasil Menghapus Data Gambar');
        } catch (\Exception $e) {
            Session::flash('error', 'Gagal menghapus data Gambar. Data tersebut masih digunakan dalam tabel lain.');
        }
        
        return redirect()->route('gambar.index');
    }
}
