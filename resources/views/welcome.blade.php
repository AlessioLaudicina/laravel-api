@extends('layouts.guest')
@section('content')
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold text-body-emphasis">Il mio Boolfoglio</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam id velit fuga repellat modi,
                dolorem, commodi rerum iste eum atque qui! Obcaecati repudiandae consequuntur deleniti?</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <button class="btn btn-primary btn-lg px-4 me-sm-3"
                    href="{{ route('login') }}">{{ __('Login') }}</button>
                <button class="btn btn-outline-secondary btn-lg px-4"
                    href="{{ route('register') }}">{{ __('Register') }}</button>
            </div>
        </div>
    </div>
@endsection
