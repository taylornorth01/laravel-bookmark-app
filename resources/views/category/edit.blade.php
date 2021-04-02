@extends('layout')

@section('content')

<div>
    <h1>Edit category</h1>
    <form method="POST" action="{{ route('categories.update', $category) }}">
        @method('PUT')
        @csrf
        <div>
            <label for="category_name">Category Name:</label>
            <input type="text"  
            name="category_name" 
            id="category_name" 
            value="{{ $category->category_name }}"
            {{-- required --}}/>
            @error('category_name')
                <p>{{ $errors->first('category_name') }}
            @enderror
        </div>
        <div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
    <form method="POST" action="{{ route('categories.destroy', $category) }}">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('categories.index') }}">
        <button type="button">Cancel</button>
    </a>
</div>

@endsection