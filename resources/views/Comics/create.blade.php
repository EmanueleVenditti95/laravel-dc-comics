@extends('layouts.app')

@section('title')
    <div class="container">
        <h1>Inserisci comic :</h1>        
    </div>
@endsection

@section('content')
    <div class="container">
        <form>
            <div class="form-group">
              <label for="title">Titolo</label>
              <input type="text" class="form-control" name="title" placeholder="Inserisci titolo">
            </div>
            <div class="form-group">
              <label for="description">Descrizione</label>
              <input type="text" class="form-control" name="description" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="thumb">Immagine</label>
                <input type="title" class="form-control" name="thumb" placeholder="Inserisci link immagine">
              </div>
              <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" name="price" placeholder="Inserisci prezzo">
              </div>
              <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" name="series" placeholder="Inserisci serie">
              </div>
              <div class="form-group">
                <label for="sale_date">Data di vendita</label>
                <input type="text" class="form-control" name="sale_date" placeholder="Inserisci data di vendita">
              </div>
              <div class="form-group">
                <label for="type">Genere</label>
                <input type="text" class="form-control" name="type" placeholder="Inserisci genere">
              </div>
            <button type="submit" class="btn btn-primary mt-3">Inserisci</button>
          </form>
    </div>
@endsection