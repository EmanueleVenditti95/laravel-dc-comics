@extends('layouts.app')

@section('title')
    <div class="container">
        <h1>{{$comic->title}}</h1>
    </div>
@endsection

@section('content')
    <div class="container">
        <ul>
            <li><img src="{{ $comic->thumb }}" width="200" alt=""></li>
            <li>
                <a href="{{ route('comics.show',$comic) }}">{{ $comic->title }}</a>
            </li>
            <li>{{ $comic->description }}</li>
            <li>{{ $comic->price }}</li>
            <li>{{ $comic->series }}</li>
            <li>{{ $comic->sale_date }}</li>
            <li>{{ $comic->type }}</li>
        </ul>
    </div>
@endsection