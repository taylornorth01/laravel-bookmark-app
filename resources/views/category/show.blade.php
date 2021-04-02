@extends('layout')

@section('content')

<a href="{{ route('categories.index') }}">
    <button type="button">Category list</button>
</a>
<ul class="nostyle">
    <h1>{{ $category->category_name }}</h1>
    <p>Created on: {{ $category->created_at }}</p>
</ul>

@endsection