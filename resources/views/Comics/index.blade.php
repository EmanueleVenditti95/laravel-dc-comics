@extends('layouts.app')

@section('title')
    <h1>Comics :</h1>        
@endsection

@section('create_link')
    <div><a href="{{route('comics.create')}}">Inserisci un nuovo comic</a></div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @forelse ($comics as $comic)
            <div class="col-4">
                <ul class="card">
                    <li><img src="{{ $comic->thumb }}" width="200" alt=""></li>
                    <li>
                        <a href="{{ route('comics.show',$comic) }}">{{ $comic->title }}</a>
                    </li>
                    <li class="d-flex">
                        <button class="btn btn-warning"><a href="{{ route('comics.edit',$comic) }}">modifica</a></button>
                        <div>
                            <form action="{{route('comics.destroy',$comic)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="elimina">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>

            @empty
                <h1>Nessun comic trovato!</h1>
            @endforelse
        </div>
    </div>
@endsection
