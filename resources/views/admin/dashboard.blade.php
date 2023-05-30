@extends('layouts.admin')


@section('content')
    <div class="container">
        <h1 class="my-3">Home della Dashboard</h1>
        <a class="btn btn-success mt-2" href="{{ route('admin.posts.create') }}">New project</a>
    </div>
@endsection
