@extends('layouts.app')

@section('content')
    
    <div class="container py-5">
        <h1 class="pb-2">{{ $comic->title }}</h1>

        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

        <hr>

        <ul>
            <li>
                <strong>Serie: </strong>
                {{ $comic->series }}
            </li>

            <li>
                <strong>Tipologia: </strong>
                {{ $comic->type }}
            </li>

            <li>
                <strong>Descrizione: </strong>
                {{ $comic->description }}
            </li>
        </ul>
    </div>

@endsection