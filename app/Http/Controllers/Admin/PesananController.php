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

    public function edit(Pesanan $pesanan) {
        return view('admin.pesanan.edit', compact('pesanan'));
    }

    public function update(Request $request, Pesanan $pesanan) {
        $validatedData = $request->validate([
            'status' => ['required', 'string']
        ]);

        $pesanan->update($validatedData);
        return to_route('admin.pesanan.index')->with('success', 'pesanan updated successfully');
    }
}
