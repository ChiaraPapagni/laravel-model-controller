@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Movies</h1>

    <section class="movies">
        @forelse ($movies as $movie)

        <div class="movie">
            <h3>{{$movie->title}}</h3>
            <h4>{{$movie->original_title}}</h4>

            <p>{{$movie->nationality}}</p>
            <p>{{$movie->date}}</p>
            <p>{{$movie->vote}}</p>
        </div>

        @empty
        <p class="alert"> Sorry no movies available</p>
        @endforelse
    </section>
</div>

@endsection