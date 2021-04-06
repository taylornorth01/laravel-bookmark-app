@extends('layout')

@section('content')

<a href="{{ route('categories.index') }}">
    <button type="button">Category list</button>
</a>
<ul class="nostyle">
    <h1>{{ $category->category_name }}</h1>
    <p>Created on: {{ $category->created_at }}</p>
</ul>
{{ $bookmarks->links() }}
<ul class="nostyle">
    @foreach ($bookmarks as $bookmark)
        <li>
            <h1>{{ $bookmark->link_title }}</h1>
            <h3>{{ $bookmark->category->category_name ?? 'No category' }}</h3>
            <a>{{ $bookmark->url }}</a>
            <p>Created on: {{ $bookmark->publication_date }}</p>
            <p>Last visited: {{ $bookmark->date_last_accessed }}</p>
        </li>
    @endforeach
</ul>

@endsection