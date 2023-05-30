@extends('layouts.admin')


@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Slug</th>
                <th scope="col">Numero di progetti</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <td>{{ $technology->id }}</td>
                    <td>{{ $technology->name }}</td>
                    <td>{{ $technology->slug }}</td>
                    <td>{{ count($technology->posts) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
