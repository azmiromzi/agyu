<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('admin.category.index');
    }

    public function create() {
        return view('admin.category.create');
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'desc' => ['required', 'string', 'max:200']
        ]);
        Category::create($validateData);

        return to_route('admin.category.index')->with('success', 'Category created successfully');
    }

    public function edit(Category $category) {
        return view('admin.category.edit');
    }

    public function update(Category $category, Request $request) {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'desc' => ['required', 'string', 'max:200']
        ]);
        $category->update($validateData);

        return to_route('admin.category.index')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category){
        $category->delete();
        return to_route('admin.category.index')->with('success', 'Category deleted successfully');
    }
}
