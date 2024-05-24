@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Modifica il fumetto: {{$comic->title}} </h2>

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <select class="form-select" id="type" name="type">
                    <option selected>Seleziona il tipo di fumetto</option>
                    <option {{ $comic->type === 'graphic novel' ? 'selected' : ''}} value="graphic novel">Graphic novel</option>
                    <option {{ $comic->type === 'comic book' ? 'selected' : ''}} value="comic book">Comic Book</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="5" name="description">
                    {{ $comic->description}}
                </textarea>
            </div>

              <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection