<?php

namespace App\Http\Controllers;

use App\Models\AuthorModel;
use App\Models\ArtikelModel;
use Illuminate\Http\Request;
use App\Models\DetailArtikelModel;

class GuestController extends Controller
{
    public function author () {
        $author = AuthorModel::all();
        return view ('guest.author',compact('author'));
    }
    public function artikel() {
        $artikel = ArtikelModel::all();
        return view ('guest.artikel',compact('artikel'));
    }
    public function detailArtikel() {
        $detail = DetailArtikelModel::all();
        return view ('guest.detailArtikel',compact('detail'));
    }
}
