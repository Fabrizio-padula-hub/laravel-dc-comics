@extends('layouts.app')

@section('content')


    <section>

        <div class="container">
            <h1>Fumetti</h1>

            <div class="row">
                @foreach ($comics as $comicItem)
                    <div class="col-4 mb-3">

                        <div class="card">
                            <img src="{{ $comicItem->thumb }}" class="card-img-top" alt="{{$comicItem->title}}">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$comicItem->title}}
                                </h5>
                                <p class="card-text">
                                    <strong>Descrizione</strong>: {{$comicItem->description}}
                                </p>
                                <h5>
                                    <strong>Prezzo</strong>: {{$comicItem->price}} $ 
                                </h5>
                                <span>
                                    <strong>Serie</strong>: {{$comicItem->series}} 
                                </span>
                            </div>

                            <div class="d-flex justify-content-center align-items-center align-items-stretch mb-3">
                                
                                <a href="{{ route('comics.show', ['comic' => $comicItem->id])}}" class="btn btn-primary">
                                    Scopri
                                </a>
                            
                                <a href="{{ route('comics.edit', ['comic' => $comicItem->id])}}" class="btn btn-primary mx-2">
                                    Modifica
                                </a>

                                <div>
                                    <form action="{{ route('comics.destroy', ['comic' => $comicItem->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Elimina</button>

                                    </form>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                @endforeach
                
                
            </div>
        </div>

    </section>

    
@endsection