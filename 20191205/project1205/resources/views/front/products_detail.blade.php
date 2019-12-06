@extends('layouts.front_layout')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($product as $pic)
        <div class="col">
            <div class="card">
                <img src="{{ $pic->img }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{ $pic->title }} </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's
                        content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
