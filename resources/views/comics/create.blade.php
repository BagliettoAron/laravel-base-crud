@extends('layouts.app')

@section('main_content')
<div class="container">

    <h1>Create new Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  

    <form action="{{ route ('comics.store') }}"" method="POST">
        @csrf

        <div class="form-group mb-2">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
        </div>

        <div class="form-group mb-2">
            <label for="description">Descrizione</label>
            <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }}">
          </div>

          <div class="form-group mb-2">
            <label for="thumb">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb" value="{{ old('thumb') }}">
          </div>

          <div class="form-group mb-2">
            <label for="price">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}">
          </div>

          <div class="form-group mb-2">
            <label for="series">Serie</label>
            <input type="text" class="form-control" name="series" id="series" value="{{ old('series') }}">
          </div>

          <div class="form-group mb-2">
            <label for="sale_date">Data vendita</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ old('sale_date') }}">
          </div>

          <div class="form-group mb-2">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" name="type" id="type" value="{{ old('type') }}">
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
  
</div>
    
@endsection