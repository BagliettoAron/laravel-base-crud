@extends('layouts.app')

@section('main_content')
<div class="container">

    <h1>Comics:</h1>
    
    <ul>
        @foreach ($comics as $comic)
            <li>
                <h3>{{ $comic->title}}</h3>
                <h5>{{$comic->type}}</h5>
                <a href="{{route('comics.show', ['comic'=>$comic->id])}}">Go To Details</a>
            </li>
        @endforeach
    </ul>
</div>
    
@endsection