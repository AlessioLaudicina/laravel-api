@extends('layouts.admin')

@section('content')


    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.posts.store') }}">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover url</label>
            <input type="text" class="form-control @error('cover_image') is-invalid @enderror " id="cover_image"
                name="cover_image" value="{{ old('cover_image') }}">
            @error('cover_image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Descrizione del progetto</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{ old('content') }}</textarea>
            @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Linguaggio di program.</label>
            <select class="form-select" name="type_id" id="type" aria-label="Default select">
                <option value="">Scegli il tipo di linguaggio</option>
                @foreach ($types as $type)
                    <option @if ($type->id == old('type_id')) selected @endif value="{{ $type->id }}">
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <p for="type" class="form-label">Tecnologie usate</p>
            @foreach ($technologies as $technology)
                <input type="checkbox" id="{{ $technology->slug }}" name="technologies[]" value="{{ $technology->id }}"
                    @if (in_array($technology->id, old('technologies', []))) checked @endif>
                <label class="me-2" for="{{ $technology->slug }}">{{ $technology->name }}</label>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Carica immagine</label>
            <input onchange="showImage(event)" type="file" class="form-control @error('image') is-invalid @enderror"
                name="image" id="image" value="{{ old('image') }}" placeholder="Add image">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Salva</button>

    </form>

@endsection
