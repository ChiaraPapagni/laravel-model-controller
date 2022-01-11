@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Movies</h1>

    <section class="movies">
        @forelse ($movies as $movie)

        <div class="movie">
            <h3>{{$movie->title}}</h3>
            <h4>
                Titolo originale:
                <span class="italic">{{$movie->original_title}}</span>
            </h4>
            <p>
                <span class="bold">Nazionalità:</span>
                @if($movie->nationality === 'american')
                <img src="{{asset('img/usa.png')}}" alt="usa">
                @elseif($movie->nationality === 'american/british')
                <img src="{{asset('img/usa.png')}}" alt="usa">
                <img src="{{asset('img/gb.svg')}}" alt="gb">
                @else
                <img src="{{asset('img/gb.svg')}}" alt="gb">
                @endif
            </p>
            <p><span class="bold">Data di uscita:</span> {{$movie->date}}</p>
            <p><span class="bold">Punteggio:</span> {{$movie->vote}}/10</p>
        </div>

        @empty
        <p class="alert"> Sorry no movies available</p>
        @endforelse
    </section>
</div>

@endsection