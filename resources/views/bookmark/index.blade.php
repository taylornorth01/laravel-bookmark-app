@extends('layout')

@section('content')

<a href="{{ route('categories.index') }}">
    <button type="button">Category list</button>
</a>
<a href="{{ route('bookmarks.create') }}">
    <button type="button">Create bookmark</button>
</a>
<ul class="nostyle">
    {{ $bookmarks->links() }}
    @foreach ($bookmarks as $bookmark)
        <li>
            <h1>{{ $bookmark->link_title }}</h1>
            <h3>{{ $bookmark->category->category_name ?? 'No category' }}</h3>
            <a>{{ $bookmark->url }}</a>
            <p>Created on: {{ $bookmark->publication_date }}</p>
            <p>Last visited: {{ $bookmark->date_last_accessed }}</p>
            <div>
                <a href="{{ route('bookmarks.edit', $bookmark) }}">
                    <button type="button">Edit</button>
                </a>
                <form method="POST" action="{{ route('bookmarks.accessed', $bookmark) }}">
                    @method('PUT')
                    @csrf
                    <button type="submit">Visit</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>

@endsection