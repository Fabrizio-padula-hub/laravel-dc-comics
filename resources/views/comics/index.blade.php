@extends('layouts.app')

@section('content')


    <section>

        <div class="container">
            <h1>Fumetti</h1>

            <div class="row">
                @foreach ($comics as $comicItem)
                    <div class="col-4 mb-3">

                        <div class="card">
                            <img src="https://picsum.photos/200/300" class="card-img-top" alt="{{$comicItem->title}}">
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
                        </div>
                        
                    </div>
                @endforeach
                
                
            </div>
        </div>

    </section>

    
@endsection