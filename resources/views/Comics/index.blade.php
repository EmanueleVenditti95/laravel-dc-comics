@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse ($comics as $comic)
            <ul>
                <li><img src="{{ $comic->thumb }}" width="200" alt=""></li>
                <li>{{ $comic->title }}</li>
                <li>{{ $comic->description }}</li>
                <li>{{ $comic->price }}</li>
                <li>{{ $comic->series }}</li>
                <li>{{ $comic->sale_date }}</li>
                <li>{{ $comic->type }}</li>
            </ul>

        @empty
            <h1>Nessun comic trovato!</h1>
        @endforelse
    </div>
@endsection
