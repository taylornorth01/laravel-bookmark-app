@extends('layout')

@section('content')
<a href="{{ route('bookmarks.index') }}">
    <button type="button">Bookmark list</button>
</a>
<ul class="nostyle">
    <li>
        <h1>{{ $bookmark->link_title }}</h1>
        <h3>{{ $bookmark->category->category_name ?? 'No category' }}</h3>
        <a>{{ $bookmark->url }}</a>
        <p>Created on: {{ $bookmark->publication_date }}</p>
        <p>Last visited: {{ $bookmark->date_last_accessed }}</p>
    </li>
</ul>

@endsection