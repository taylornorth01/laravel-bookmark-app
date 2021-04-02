@extends('layout')

@section('content')

<ul class="nostyle">
    <h1>{{ $category->category_name }}</h1>
    <p>Created on: {{ $category->created_at }}</p>
</ul>

<ul class="nostyle">
    @foreach ($bookmarks as $bookmark)
        <li>
            <h1>{{ $bookmark->link_title }}</h1>
            <h3>{{ $bookmark->category ? $bookmark->category->category_name : 'No category' }}</h3>
            <a>{{ $bookmark->url }}</a>
            <p>Created on: {{ $bookmark->publication_date }}</p>
            <p>Last visited: {{ $bookmark->date_last_accessed }}</p>
        </li>
    @endforeach
</ul>

@endsection