@extends('layouts.app')

@section('main_content')
<h1>Comics:</h1>

<ul>
    @foreach ($comics as $comic)
        <li>
            <h3>{{ $comic->title}}</h3>
            <h5>{{$comic->type}}</h5>
        </li>
    @endforeach
</ul>
    
@endsection