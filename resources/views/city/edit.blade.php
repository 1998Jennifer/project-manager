@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar ciudad</h1>
    <div class="justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form
            action="{{ route('city.update', $city) }}"
            method="POST"
            enctype="multipart/form-data"
            class="border border-light">
            <div class="form-group">
              <label for="inputAddress">Nombre</label>
              <input type="text" class="form-control" name="name" placeholder="Manta" required value="{{ old('name', $city->name) }}">
            </div>
            <div class="form-group">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
    </div>
</div>
@endsection