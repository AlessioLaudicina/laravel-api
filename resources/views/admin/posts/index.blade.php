@extends('layouts.admin')


@section('content')
    <table class="table w-90 m-auto">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Cover</th>
                <th scope="col">Linguaggio</th>
                <th scope="col">Tecnologie</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>

                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->type?->name }}</td>
                    <td>
                        @forelse ($post->technologies as $technology)
                            <span class="badge text-bg-secondary d-none d-md-inline">{{ $technology->name }}</span>

                        @empty
                        @endforelse
                    </td>

                    <td class="d-flex flex-nowrap">
                        <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->slug) }}">VEDI</a>
                        <a class="btn btn-warning mx-2" href="{{ route('admin.posts.edit', $post->slug) }}">MODIFICA</a>

                        <form class="form_delete_post" action="{{ route('admin.posts.destroy', ['post' => $post->slug]) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
