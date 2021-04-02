@extends('layout')

@section('content')

<div>
    <a href="{{ route('bookmarks.index') }}">
        <button type="button">Bookmark list</button>
    </a>
    <a href="{{ route('categories.create') }}">
        <button type="button">Create category</button>
    </a>
</div>
<ul class="nostyle">
    {{ $categories->links() }}
    @foreach ($categories as $category)
        <li>
            <h1>{{ $category->category_name }}</h1>
            <p>Created on: {{ $category->created_at }}</p>
            <div>
                <a href="{{ route('categories.edit', $category) }}">
                    <button type="button">Edit</button>
                </a>
            </div>
        </li>
    @endforeach
</ul>

@endsection