<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

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
}
