@extends('layouts.app')

@section('content')
    <div class="container">
        
        
        <div class="container">
            <h1>Crea un nuovo post</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- INIZIO Crea nuovo post -->
            <form action="{{ route('admin.posts.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea name="content" class="form-control" id="content" cols="30" rows="10" value="{{ old('content') }}"></textarea>
                </div>

                <input type="submit" value="Salva post" class="btn btn-success">

            </form>
            <!-- FINE Crea nuovo post -->

        </div>
        


    </div>
@endsection