<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaDanArtikelCotroller extends Controller
{
    public function index() {
        return view('page.beritaartikel');
    }
}
