@extends('layouts.app')

@section('content')


<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-sm-10 mx-auto">
            <h1 style="text-align: center">Administración de Ciudades</h1>
            <div class="d-flex flex-row-reverse">
                <a href="{{ route('city.create') }}" class="btn btn-outline-success">Nuevo</a>
               
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th colspan="3">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cities as $city)
                    <tr>
                        <td>{{ $city->id }}</td>
                        <td>{{ $city->name }}</td>
                        <td>
                            <a href="{{ route('city.edit', $city) }}" class="btn btn-outline-warning">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('city.destroy', $city) }}" method="POST">
                                @method ('DELETE')
                                @csrf
                                <input
                                    type="submit"
                                    value="Eliminar"
                                    class="btn btn-outline-danger"
                                    onclick="return confirm('¿Seguro de eliminar?')">
                            </form>
                        </td>
                       
                    </tr>
                        
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection