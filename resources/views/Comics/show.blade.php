@extends('layouts.app')

@section('title')
        <h1>{{$comic->title}}</h1>
@endsection

@section('create_link')
    <div><a href="{{route('comics.create')}}">Inserisci un nuovo comic</a></div>
@endsection

@section('content')
    <div class="container">
        <ul>
            <li><img src="{{ $comic->thumb }}" width="200" alt=""></li>
            <li>
                <a href="{{ route('comics.show',$comic) }}">{{ $comic->title }}</a>
            </li>
            <li>{{ $comic->description }}</li>
            <li>$ {{ $comic->price }}</li>
            <li>{{ $comic->series }}</li>
            <li>{{ $comic->sale_date }}</li>
            <li>{{ $comic->type }}</li>
            <li><button class="btn btn-warning"><a href="{{ route('comics.edit',$comic) }}">modifica</a></button></li>
        </ul>
    </div>
@endsection