@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Lista dei nostri fumetti</h1>

        <div class="text-end">
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Inserisci un fumetto</a>
        </div>

        @if (Session::has('message'))
          <div class="alert alert-success">
            {{ Session::get('message') }}
          </div>
        @endif

        <table class="table table-dark table-hover mt-3">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data di uscita</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Mostra</a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica</a>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-delete" type="submit" data-title="{{ $comic->title }}">
                                  Elimina
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>

          @include('partials.delete-modal')
    </div>
@endsection