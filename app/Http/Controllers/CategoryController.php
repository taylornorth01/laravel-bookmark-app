<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;


class CategoryController extends Controller {
    

    public function index() {
        return View::make('category.index', [
            'categories' => Category::newest()
        ]);
    }


    public function create() {
        return View::make('category.create');
    }


    public function store(CategoryRequest $request) {
        Category::create($request->validated());
        return Redirect::route('categories.index');
    }


    public function show(Request $request, Category $category) {
        return View::make('category.show', [
            'category' => $category,
            'bookmarks' => $category->bookmarkPage($request->input('page'))
        ]);
    }


    public function edit(Category $category) {
        return View::make('category.edit', compact('category'));
    }


    public function update(CategoryRequest $request, Category $category) {
        $category->update($request->validated());
        return Redirect::route('categories.show', compact('category'));
    }


    public function destroy(Category $category) {
        $category->delete();
        return Redirect::route('categories.index');
    }
}
