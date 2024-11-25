<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $barang = Barang::count();
        $kategori = Kategori::count();

        return view('dashboard', compact(['barang', 'kategori']));

    }
}
