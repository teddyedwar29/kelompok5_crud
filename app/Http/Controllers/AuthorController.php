<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthorModel;

class AuthorController extends Controller
{
    // disini logic crudnya
    public function tampilAuthor() {
        $author = AuthorModel::all();
        return view ('admin.author',compact('author'));
    }
    public function tambahAuthor() {
        return view ('admin.tambahAuthor');
    }
    public function submitAuthor(Request $request) {
        $authorModel = new AuthorModel();
        $authorModel->id_author = $request->id_author;
        $authorModel->nama_author = $request->nama_author;
        $authorModel->prodi = $request->prodi;
        $authorModel->afiliasi = $request->afiliasi;
        $authorModel->email = $request->email;
        $authorModel->wa = $request->wa;
        $authorModel->save();
        return redirect()->route('admin.author')->with('pesan','Data Berhasil Ditambahkan');
    }
    public function editAuthor($id) {
        $data = AuthorModel::find($id); // cari data berdasarkan id
        return view ('admin.editAuthor', compact('data')); // kirim data ke view
    }

    public function updateAuthor(Request $request,$id) {
        $validateData = $request->validate([
            'nama_author'=> 'required|string|max:255',
            'prodi'=>'required',
            'afiliasi'=>'required',
            'email'=>'required|email|max:255'
        ]);
        $data = AuthorModel::findOrFail($id); // cari data berdasarkan id
        $data->update($validateData); // Perbarui Data
        
        session()->flash('pesan','Data Berhasil diperbaruih');
        return redirect()->route('admin.author');
    }

    public function deleteAuthor($id) {
        // cari data berdasarkan id
        $author = AuthorModel::where('id_author',$id)->firstOrFail(); // sesuaikan dengan primary key kamu

        // hapus data
        $author->delete();

        // redirect dengan pesan sukses 
        return redirect()->route('admin.author')->with('success', 'Data Berhasil Dihapus'); 
    }

}
