<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailArtikelModel;
class DetailArtikelController extends Controller
{
    // logic detail artikel
    public function tampilDetailArtikel() {
        $detail = DetailArtikelModel::all();
        return view ('admin.detailArtikel',compact('detail'));
    }
    public function tambahDetailArtikel() {
        return view ('admin.tambahDetailArtikel');
    }
    public function submitDetailArtikel(Request $request) {
        $detailArtikel = new DetailArtikelModel();
        $detailArtikel->id_artikel = $request->id_artikel;
        $detailArtikel->id_author = $request->id_author;
        $detailArtikel->penulis_ke = $request->penulis_ke;

        $detailArtikel->save();
        return redirect()->route('admin.detailArtikel')->with('pesan','Data Berhasil Ditambahkan');
    }
    public function deleteDetailArtikel($id) {
        // cari data berdasarkan id
        $detailArtikel = detailArtikelModel::where('id_artikel',$id)->firstOrFail(); // sesuaikan dengan primary key kamu

        // hapus data
        $detailArtikel->delete();

        // redirect dengan pesan sukses 
        return redirect()->route('admin.detailArtikel')->with('pesan', 'Data Berhasil Dihapus'); 
    }
    public function editDetailArtikel($id) {
        $data = DetailArtikelModel::find($id); // cari data berdasarkan id
        return view ('admin.editDetailArtikel', compact('data')); // kirim data ke view
    }
    public function updateDetailArtikel(Request $request,$id) {
        $validateData = $request->validate([
            'penulis_ke'=>'required',
            
        ]);
        $data = DetailArtikelModel::findOrFail($id); // cari data berdasarkan id
        $data->update($validateData); // Perbarui Data
        
        session()->flash('pesan','Data Berhasil diperbarui');
        return redirect()->route('admin.detailArtikel');
    }
}
