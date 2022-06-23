
@extends('layouts.main')

@section('content')

    @foreach ($comics as $comic)

    <div class="container">
        <div class="row">

            <div class="col-6 my-3">
                <img src="{{$comic->image}}" alt="">
            </div>

            <div class="col-6 my-3">
                <ul>
                    <li class="d-flex justify-content-center align-content-center my-5">
                        <h3>{{$comic->title}}</h3>
                        <h5>{{$comic->type}}</h5>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    @endforeach

@endsection
