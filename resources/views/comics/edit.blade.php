@extends('layouts.app')

@section('main_content')
<div class="container">

    <h1>Modify Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', ['comic' => $comic_to_update->id]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
          <label for="title">Title</label>
          <input type="email" class="form-control" id="title" name="title" value="{{ old('title') ? old('title'): $comic_to_update->title }}">
        </div>

        <div class="form-group">
            <label for="description">description</label>
            <input type="email" class="form-control" id="description" name="description" value="{{ old('description') ? old('description'): $comic_to_update->description }}">
        </div>

        <div class="form-group">
            <label for="thumb">thumb</label>
            <input type="email" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') ? old('thumb'): $comic_to_update->thumb }}" >
        </div>

        <div class="form-group">
            <label for="price">price</label>
            <input type="email" class="form-control" id="price" name="price" value="{{ old('price') ? old('price'): $comic_to_update->price }}">
        </div>

        <div class="form-group">
            <label for="series">series</label>
            <input type="email" class="form-control" id="series" name="series" value="{{ old('series') ? old('series'): $comic_to_update->series }}" >
        </div>

        <div class="form-group">
            <label for="sale_date">sale date</label>
            <input type="email" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') ? old('sale_date'): $comic_to_update->sale_date }}">
        </div>

        <div class="form-group">
            <label for="type">type</label>
            <input type="email" class="form-control" id="type" name="type" value="{{ old('type') ? old('type'): $comic_to_update->type }}" >
        </div>
       
        <button type="submit" class="btn btn-primary">modify</button>
      </form>
    
 
</div>
    
@endsection