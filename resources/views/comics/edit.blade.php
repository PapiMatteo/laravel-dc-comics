@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Crea una nuova pasta</h1>

        <div class="row justify-content-center mt-5">
            <div class="col-6 mb-5">
                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    {{-- Cross Site Request Forgery --}}
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Data di uscita ( AAAA-mm-DD )</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo con $ all'inizio</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <select id="type" class="form-select" name="type">
                            <option @selected($comic->type === 'comic book') value="comic book">Comic book</option>
                            <option @selected($comic->type === 'graphic novel') value="graphic novel">Graphic novel</option>
                          </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ $comic->description }}</textarea>
                    </div>

                    <button class="btn btn-success" type="submit">Salva</button>
                   
                </form>
            </div>
        </div>
       
    </div>
@endsection