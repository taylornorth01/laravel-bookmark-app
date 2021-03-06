@extends('layout')

@section('content')

<div>
    <h1>New bookmark</h1>
    <form method="POST" action="{{ route('bookmarks.store') }}">
        @csrf
        <div>
            <label for="link_title">Title:</label>
            <input type="text"  
            name="link_title" 
            id="link_title" 
            value="{{ old('link_title') }}"
            {{-- required --}}/>
            @error('link_title')
                <p>{{ $errors->first('link_title') }}
            @enderror
        </div>
        <div>
            <label for="url">Url:</label>
            <input type="text" 
            name="url" 
            id="url" 
            value="{{ old('url') }}"
            {{-- required --}}>
            @error('url')
                <p>{{ $errors->first('url') }}
            @enderror
        </div>
        @if ($categories->isNotEmpty())
            <div>
                <label for="category_id">Categories:</label>
                <select name="category_id" id="category_id">
                    <option value="" selected>No category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->category_name }}
                            </option>
                        @endforeach
                </select>
                @error('category_id')
                    <p>{{ $errors->first('category_id') }}
                @enderror
            </div>
        @endif
        <div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
    <a href="{{ route('bookmarks.index') }}">
        <button type="button">Cancel</button>
    </a>
</div>

@endsection