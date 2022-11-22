<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function index() {
        $menucategory1 = Menu::where('category_id', 1)->get();
        $menucategory2 = Menu::where('category_id', 2)->get();
        $menucategory3 = Menu::where('category_id', 3)->get();
        return view('user.menu', compact(['menucategory1', 'menucategory2', 'menucategory3']));
    }

    public function create($id) {
        $pesan = Menu::findOrFail($id);
        return view('user.pesanmenu.create', compact(['pesan']));
    }

    public function store(Request $request, ) {
        $validatedData = $request->validate([
            'menu_id' => ['integer'],
            'special_request' => ['string', 'nullable',],
        ]);

        if($request->total_harga) {
            $validatedData['total_harga'] = $request->total_harga * $request->total_barang;
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['status'] = 'sedang di proses';

        Pesanan::create($validatedData);

        return to_route('user.menu')->with('success', 'Pesanan Berhasil di Buat');
    }

    public function keranjang() {

        $keranjangs = Pesanan::where('user_id', Auth::user()->id)->with('menu', 'user')->get();
        return view('user.keranjang', compact(['keranjangs']));
    }
}
