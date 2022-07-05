@extends('layouts.app')

@section('main_content')

<div class="container">
    <h3>Details</h3>
    <img src="{{$comic->thumb}}" alt="">
    <p>{{ $comic->description}}</p>
    <div class="">
        <a href="{{ route('comics.edit', ['comic' => $comic->id])}}" class="btn btn-primary mt-3">Modify</a>

        <form action="{{ route('comics.destroy' ['comic' => $comics->id]) }}" method="POST">
            @csrf
            @method('DELETE')
         <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    </div>
</div>

    
@endsection