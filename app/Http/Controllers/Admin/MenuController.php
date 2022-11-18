<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index() {
        $menus = Menu::with('category')->get();
        $categories = Category::get();
        return view('admin.menu.index', compact(['menus', 'categories']));
    }

    public function create() {
        $categories = Category::get();
        return view('admin.menu.create', compact(['categories']));
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'category_id' => ['required'],
            'name' => ['required', 'string', 'max:125'],
            'desc' => ['required', 'string'],
            'price' => ['required', 'integer']
        ]);
        $validateData['image'] = $request->file('image')->store('public/photo/menu');

        Menu::create($validateData);

        return to_route('admin.menu.index')->with('success', 'Menu Created Successfully');

    }

    public function edit(Menu $menu) {
        $categories = Category::get();
        return view('admin.menu.edit', compact(['menu', 'categories']));
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
            $validateData['image'] = $request->file('image')->store('public/photo/menu');
        }

        $menu->update($validateData);

        return to_route('admin.menu.index')->with('success', 'Menu Updated Successfully');
    }

    public function destroy(Menu $menu) {
        Storage::delete($menu->image);
        $menu->delete();

        return to_route('admin.menu.index')->with('success', 'Menu Deleted Successfully');
    }
}
