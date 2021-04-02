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
            <div>
                <button>Cancel</button>
            </div>
        </div>
    </form>
</div>

@endsection