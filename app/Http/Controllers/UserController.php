<?php

namespace App\Http\Controllers;

use App\Models\AuthorModel;
use App\Models\ArtikelModel;
use Illuminate\Http\Request;
use App\Models\DetailArtikelModel;

class UserController extends Controller
{
    public function author () {
        $author = AuthorModel::all();
        return view ('user.author',compact('author'));
    }
    public function artikel() {
        $artikel = ArtikelModel::all();
        return view ('user.artikel',compact('artikel'));
    }
    public function detailArtikel() {
        $detail = DetailArtikelModel::all();
        return view ('user.detailArtikel',compact('detail'));
    }
}
