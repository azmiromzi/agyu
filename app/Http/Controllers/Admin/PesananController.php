<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index() {
        $pesanans = Pesanan::with('user', 'menu')->get();
        return view('admin.pesanan.index', compact(['pesanans']));
    }
}
