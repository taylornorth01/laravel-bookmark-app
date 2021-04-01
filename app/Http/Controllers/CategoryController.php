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
            'categories' => Category::latest()->paginate(7)
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category) {
        //
    }
}
