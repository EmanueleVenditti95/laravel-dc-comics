@extends('layouts.app')

@section('title')
    <div class="container">
        <h1>Inserisci comic :</h1>        
    </div>
@endsection

@section('content')
    <div class="container">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="form-group">
              <label for="title">Titolo</label>
              <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci titolo">
            </div>
            <div class="form-group">
              <label for="description">Descrizione</label>
              <input type="text" class="form-control" name="description" id="description" placeholder="Inserisci descrizione">
            </div>
            <div class="form-group">
                <label for="thumb">Immagine</label>
                <input type="title" class="form-control" name="thumb" id="thumb" placeholder="Inserisci link immagine">
              </div>
              <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Inserisci prezzo">
              </div>
              <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Inserisci serie">
              </div>
              <div class="form-group">
                <label for="sale_date">Data di vendita</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="YYYY/MM/DD">
              </div>
              <div class="form-group">
                <label for="type">Genere</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Inserisci genere">
              </div>
            <input type="submit" class="btn btn-primary mt-3" value="Inserisci">
          </form>
    </div>
@endsection