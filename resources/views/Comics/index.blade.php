@extends('layouts.app')

@section('title')
    <div class="container">
        <h1>Comics :</h1>        
    </div>
@endsection

@section('content')
    <div class="container">
        @forelse ($comics as $comic)
            <ul>
                <li><img src="{{ $comic->thumb }}" width="200" alt=""></li>
                <li>
                    <a href="{{ route('comics.show',$comic) }}">{{ $comic->title }}</a>
                </li>
            </ul>

        @empty
            <h1>Nessun comic trovato!</h1>
        @endforelse
    </div>
@endsection
