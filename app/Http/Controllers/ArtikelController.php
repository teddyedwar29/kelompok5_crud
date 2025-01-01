<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function tampilArtikel() {
        $artikel = ArtikelModel::all();
        return view ('admin.artikel',compact('artikel'));
    }
    public function tambahArtikel() {
        return view ('admin.tambahArtikel');
    }
    public function submitArtikel(Request $request) {
        $artikelModel = new ArtikelModel();
        $artikelModel->id_artikel = $request->id_artikel;
        $artikelModel->judul_artikel = $request->judul_artikel;

        $artikelModel->save();
        return redirect()->route('admin.artikel')->with('pesan','Data Berhasil Ditambahkan');
    }
    public function deleteArtikel($id) {
        // cari data berdasarkan id
        $artikel = ArtikelModel::where('id_artikel',$id)->firstOrFail(); // sesuaikan dengan primary key kamu

        // hapus data
        $artikel->delete();

        // redirect dengan pesan sukses 
        return redirect()->route('admin.artikel')->with('success', 'Data Berhasil Dihapus'); 
    }

    // logic edit artikel
    public function editArtikel($id) {
        $data = ArtikelModel::find($id); // cari data berdasarkan id
        return view ('admin.editArtikel', compact('data')); // kirim data ke view
    }
    public function updateArtikel(Request $request,$id) {
        $validateData = $request->validate([
            'judul_artikel'=> 'required|string|max:255'
        ]);
        $data = ArtikelModel::findOrFail($id); // cari data berdasarkan id
        $data->update($validateData); // Perbarui Data
        
        session()->flash('pesan','Data Berhasil diperbaruih');
        return redirect()->route('admin.artikel');
    }
}
