@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crear ciudad</h1>
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form
            action="{{ route('city.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="border border-light">
            <div class="form-group">
              <label for="inputAddress">Nombre</label>
              <input type="text" class="form-control" name="name" placeholder="Example" required>
            </div>
            <div class="form-group">
                @csrf
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection