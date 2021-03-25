@extends('layout')

@section('content')

<ul class="nostyle">
    @foreach ($bookmarks as $bookmark)
        <li>
            <h1>{{ $bookmark->link_title }}</h1>
            <h3>{{ $bookmark->category->category_name }}</h3>
            <p>{{ $bookmark->url  }}</p>
            <p>{{ $bookmark->publication_date  }}</p>
            <p>{{ $bookmark->date_last_accessed  }}</p>
        </li>
    @endforeach
</ul>

@endsection