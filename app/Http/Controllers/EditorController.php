<?php

namespace App\Http\Controllers;

use App\Models\EditorModel;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function tampilEditor () {
        $editor = EditorModel::all();
        return view('admin.editor',compact('editor'));
    }
    public function tambahEditor() {
        return view ('admin.tambahEditor');
    }
    public function submitEditor (request $request) {
        $editor = new EditorModel();
        $editor->id_editor = $request->id_editor;
        $editor->nama_editor = $request->nama_editor;
        

        $editor->save();
        return redirect()->route('admin.editor')->with('pesan','Data Berhasil Ditambahkan');
    }
    public function deleteEditor ($id) {
                // cari data berdasarkan id
                $editor = EditorModel::where('id_editor',$id)->firstOrFail(); // sesuaikan dengan primary key kamu

                // hapus data
                $editor->delete();
        
                // redirect dengan pesan sukses 
                return redirect()->route('admin.editor')->with('pesan', 'Data Berhasil Dihapus'); 
    }

    public function editEditor($id) {
        $data = EditorModel::find($id); // cari data berdasarkan id
        return view ('admin.editEditor', compact('data')); // kirim data ke view
    }
    public function updateEditor(Request $request,$id) {
        $validateData = $request->validate([
            'nama_editor'=> 'required|string|max:25'
        ]);
        $data = EditorModel::findOrFail($id); // cari data berdasarkan id
        $data->update($validateData); // Perbarui Data
        
        session()->flash('pesan','Data Berhasil diperbarui');
        return redirect()->route('admin.editor');
    }


}
