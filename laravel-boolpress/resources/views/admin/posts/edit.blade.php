@extends('layouts.app')

@section('content')
    <div class="container">
        
        
        <div class="container">
            <h1>Modifica post: {{ $post->title }}</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- INIZIO Crea nuovo edit post -->
            <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
                </div>

                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea name="content" class="form-control" id="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
                </div>

                <input type="submit" value="Salva le Modifiche" class="btn btn-success">

            </form>
            <!-- FINE Crea nuovo edit post -->

        </div>
        


    </div>
@endsection