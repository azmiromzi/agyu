<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index() {
        return view('admin.menu.index');
    }

    public function create() {
        return view('admin.menu.create');
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'category_id' => ['required'],
            'name' => ['required', 'string', 'max:125'],
            'desc' => ['required', 'string'],
            'price' => ['required', 'integer']
        ]);
        $validateData['image'] = $request->file('image')->store('public/menu');

        Menu::create($validateData);

        return to_route('admin.menu.index');

    }

    public function edit() {
        return view('admin.menu.edit');
    }

    public function update(Request $request, Menu $menu) {
        $validateData = $request->validate([
            'category_id' => ['required'],
            'name' => ['required', 'string', 'max:125'],
            'desc' => ['required', 'string'],
            'price' => ['required', 'integer']
        ]);

        if($request->hasFile('image')) {
            Storage::delete($menu->image);
            $validateData['image'] = $request->file('image')->store('public/menu');
        }

        $menu->update($validateData);

        return to_route('admin.menu.index');
    }

    public function destroy(Menu $menu) {
        Storage::delete($menu->image);
        $menu->delete();
    }
}
