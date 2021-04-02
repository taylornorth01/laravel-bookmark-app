@extends('layout')

@section('content')

<ul class="nostyle">
    <h1>{{ $category->category_name }}</h1>
    <p>Created on: {{ $category->created_at }}</p>
</ul>

@endsection