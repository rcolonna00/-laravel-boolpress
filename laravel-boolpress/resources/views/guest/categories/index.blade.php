@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Guarda tutte le nostre categorie</h1>

        <div class="row">
            @foreach ($categories as $category)
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <a href="{{ route('category-page', ['slug' => $category->slug]) }}" class="btn btn-primary">Leggi la ricetta</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection