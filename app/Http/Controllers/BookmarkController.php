<?php

namespace App\Http\Controllers;

use App\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('bookmark.index', [
            'bookmarks' => Bookmark::paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('bookmark.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Bookmark::create($this->validateBookmark($request));
        return redirect(route('bookmarks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function show(Bookmark $bookmark) {
        return view('bookmark.show', [
            'bookmark' => $bookmark
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookmark $bookmark) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookmark $bookmark) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookmark $bookmark) {
        //
    }

    protected function validateBookmark(Request $request) {
        return $request->validate([
            'link_title' => 'required|max:100|unique:App\Bookmark,link_title',
            'url' => 'required|url'
        ]);
    }
}
