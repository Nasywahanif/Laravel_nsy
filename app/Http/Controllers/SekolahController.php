<?php

namespace App\Http\Controllers;

use App\Models\sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    function index() {
        return view('sekolahs.index', [
            'sekolahs' => sekolah::get()
        ]);
    }
    public function tambah()
    {
        return view('sekolahs.tambah');
    }
    function store(Request $request)  {
        $sekolah=new Sekolah();
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->alamat = $request->alamat_sekolah;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlah_guru = $request->jumlah_guru;
        
        $sekolah->save();
        return redirect()->route('sekolahs.index');
    }
    public function update(Request $request, $id)
    {
        $sekolah = sekolah:: find($id);

        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->alamat = $request->alamat;
        $sekolah->jurusan = $request->jurusan;
        $sekolah->jumlah_guru = $request->jumlah_guru;

        $sekolah->save();
        return redirect()->route('sekolahs.index');
    }

    public function destory($id)
    {
        $sekolah = sekolah::find($id);

        $sekolah->delete();
        return redirect()->route('sekolahs.index');

    }
    public function edit($id)
    {
        $sekolah = sekolah::find($id);
        return view ('sekolahs.edit',[
            'sekolahs'=> $sekolah,
        ]);
    }
    public function destroy($id) {
        $sekolah = sekolah::find($id);

        $sekolah->delete();
        return redirect()->route('sekolahs.index');
    }
}
