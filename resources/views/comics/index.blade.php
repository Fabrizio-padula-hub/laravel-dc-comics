@extends('layouts.app')

@section('content')


    <section>
        <nav class="nav">
            <a class="nav-link active" aria-current="page" href="{{route('comics.index')}}">Home</a>
            <a class="nav-link" href="{{route('comics.create')}}">Aggiungi un fumetto</a>
        </nav>

        <div class="container">
            <h1>Fumetti</h1>

            <div class="row">
                @foreach ($comics as $comicItem)
                    <div class="col-4 mb-3">

                        <div class="card">
                            <img src="{{ $comicItem->thumb }}" class="card-img-top" alt="{{$comicItem->title}}">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Titolo: {{$comicItem->title}}
                                </h5>
                                <p class="card-text">
                                    Descrizione: {{$comicItem->description}}
                                </p>
                                <h5>Prezzo: {{$comicItem->price}} $ </h5>
                                <span>Serie: {{$comicItem->series}} </span>
                            </div>

                            <div>
                                <a href="{{ route('comics.show', ['comic' => $comicItem->id])}}" class="btn btn-primary">
                                    Scopri
                                </a>
                            </div>

                            <div class="mt-3">
                                <a href="{{ route('comics.edit', ['comic' => $comicItem->id])}}" class="btn btn-primary">
                                    Modifica
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
                
                
            </div>
        </div>

    </section>

    
@endsection