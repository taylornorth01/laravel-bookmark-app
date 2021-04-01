<?php

namespace App\Http\Controllers;

use App\Bookmark;
use App\Category;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\BookmarkRequest;

class BookmarkController extends Controller {


    public function index() {
        return View::make('bookmark.index', [
            'bookmarks' => Bookmark::latest()->paginate(7)
        ]);
    }


    public function create() {
        return View::make('bookmark.create', [
            'categories' => Category::all()
        ]);
    }


    public function store(BookmarkRequest $request) {
        Bookmark::create($request->validated());
        return Redirect::route('bookmarks.index');
    }


    public function show(Bookmark $bookmark) {
        return View::make('bookmark.show', compact('bookmark'));
    }


    public function edit(Bookmark $bookmark) {
        return View::make('bookmark.edit', [
            'bookmark' => $bookmark,
            'categories' => Category::all()
        ]);
    }


    public function update(BookmarkRequest $request, Bookmark $bookmark) {
        $bookmark->update($request->validated());
        return Redirect::route('bookmarks.show', $bookmark);
    }


    public function destroy(Bookmark $bookmark) {
        $bookmark->delete();
        return Redirect::route('bookmarks.index');
    }
}
