<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function indexlayanan() {
        return view('layanandsw.indexlayanandsw');
    }
}
