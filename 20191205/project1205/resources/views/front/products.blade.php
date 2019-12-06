@extends('layouts.front_layout')

@section('css')
<style>
.bg-img{
background-image: url('https://cdn.pixabay.com/photo/2019/11/28/14/00/lamb-4659214__340.jpg');
background-position: center;
background-size: contain;
width: 100%;
height: 100%;
}


</style>

@endsection

@section('content')
<div class="bg-img">

</div>

<div class="container">
    <div class="row">
        @foreach ($pics as $pic)
        <div class="col-12 col-md-4">
            <div class="card">
                    <img src="{{ $pic->img }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <a href="/products/{{ $pic ->id }}" class="btn btn-primary">
                    <h1>{{ $pic ->title }}</h1>
                    {{-- <p>{{ $pic ->img }}</p> --}}
                </a></div>
                </div>
            </div>

        @endforeach
    </div>
</div>

@endsection
