@extends('layout')

@section('content')

<div>
    <h1>New bookmark</h1>
    <form method="POST" action="{{ route('bookmarks.store') }}">
        @csrf
        <div>
            <label for="link_title">Title</label>
            <div>
                <input type="text" 
                name="link_title" 
                id="link_title" 
                value="{{ old('link_title') }}"
                {{-- required --}}/>
                @error('link_title')
                    <p>{{ $errors->first('link_title') }}
                @enderror
            </div>
        </div>
        <div>
            <label for="url">Url</label>
            <div>
                <input type="text" 
                name="url" 
                id="url" 
                value="{{ old('url') }}"
                {{-- required --}}>
                @error('url')
                    <p>{{ $errors->first('url', ) }}
                @enderror
            </div>
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