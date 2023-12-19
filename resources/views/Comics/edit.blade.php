@extends('layouts.app')

@section('title')
    <div class="container">
        <h1>Modifica comic :</h1>        
    </div>
@endsection

@section('content')
    <div class="container">
        <form action="{{route('comics.update',$comic)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="title">Titolo</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci titolo" value="{{$comic->title}}">
            </div>
            <div class="form-group">
              <label for="description">Descrizione</label>
              <input type="text" class="form-control" name="description" id="description" placeholder="Inserisci descrizione" value="{{$comic->description}}">
            </div>
            <div class="form-group">
                <label for="thumb">Immagine</label>
                <input type="title" class="form-control" name="thumb" id="thumb" placeholder="Inserisci link immagine" value="{{$comic->thumb}}">
              </div>
              <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Inserisci prezzo" value="{{$comic->price}}">
              </div>
              <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Inserisci serie" value="{{$comic->series}}">
              </div>
              <div class="form-group">
                <label for="sale_date">Data di vendita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="YYYY/MM/DD" value="{{$comic->sale_date}}">
              </div>
              <div class="form-group">
                <label for="type">Genere</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Inserisci genere" value="{{$comic->type}}">
              </div>
            <input type="submit" class="btn btn-primary mt-3" value="Inserisci">
          </form>
    </div>
@endsection