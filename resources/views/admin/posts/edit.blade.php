@extends('layouts.admin')



@section('content')
    <form method="POST" action="{{ route('admin.posts.update', ['post' => $post->slug]) }}" class="my-4"
        enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title"
                value="{{ old('title', $post->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="content" class="form-label">Descrizione:</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Linguaggio di program.</label>
            <select class="form-select" name="type_id" id="type" aria-label="Default select">
                <option value="">Choose a type</option>
                @foreach ($types as $type)
                    <option @if ($type->id == old('type_id', $post->type?->id)) selected @endif value="{{ $type->id }}">
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <p for="type" class="form-label">Tecnologie usate</p>
            @foreach ($technologies as $technology)
                <input type="checkbox" id="{{ $technology->slug }}" name="technologies[]" value="{{ $technology->id }}"
                    @if (!$errors->all() && $post->technologies->contains($technology)) checked @elseif ($errors->all() && in_array($technology->id, old('technologies', []))) checked @endif>
                <label class="me-2" for="{{ $technology->slug }}">{{ $technology->name }}</label>
            @endforeach
        </div>

        <div class="text-center my-4">
            <img class="img-thumbnail " width="300" src="{{ asset('storage/' . $post['cover_image']) }}" />
        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">Modifica immagine di copertina</label>
            <input type="file" class="form-control @error('cover_image') is-invalid @enderror " id="cover_image"
                name="cover_image">

            @error('cover_image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>





        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
@endsection
