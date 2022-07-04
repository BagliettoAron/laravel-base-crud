@extends('layouts.app')

@section('main_content')

<div class="container">
    <h3>Details</h3>
    <img src="{{$comic->thumb}}" alt="">
    <p>{{ $comic->description}}</p>
</div>

    
@endsection