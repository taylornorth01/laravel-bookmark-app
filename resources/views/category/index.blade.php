@extends('layout')

@section('content')
<ul class="nostyle">
    {{ $categories->links() }}
    @foreach ($categories as $category)
        <li>
            <h1>{{ $category->category_name }}</h1>
            <p>Created on: {{ $category->created_at }}</p>
        </li>
    @endforeach
</ul>

@endsection