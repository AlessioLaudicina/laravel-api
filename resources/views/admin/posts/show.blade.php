@extends('layouts.admin')


@section('content')
    <div class="container mt-4">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif


        <h1 class="my-4">{{ $post->title }}</h1>
        <div>Descrizione: <strong>{{ $post->content }}</strong></div>

        @if ($post->type)
            <div>Linguaggi: <strong>{{ $post->type->name }}</strong></div>
        @endif


        <div>
            Tecnologie usate:
            @foreach ($post->technologies as $technology)
                <span><strong>{{ $technology->name }} </strong></span>
            @endforeach
        </div>

        <div class="text-center my-4">
            <img class="" width="300" src="{{ asset('storage/' . $post['image']) }}"
                alt="{{ $post['image_original_name'] }}">
        </div>




        <div class="text-center my-4">
            <img class="" width="300" src="{{ asset('storage/' . $post['image']) }}"
                alt="{{ $post['image_original_name'] }}">
        </div>

        <a href="{{ route('admin.posts.index', $post) }}" class="btn btn-primary">
            Torna ai tuoi progetti
        </a>
    </div>
@endsection
