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
}
