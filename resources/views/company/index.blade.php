@extends('layouts.app')

@section('content')


<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-sm-10 mx-auto">
            <h1 style="text-align: center">Administración de Compañías</h1>
            <div class="d-flex flex-row-reverse">
                <a href="{{ route('companies.create') }}" class="btn btn-outline-success">Nuevo</a> 
            </div>
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th colspan="3">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>
                            <a href="{{ route('companies.edit', $company) }}" class="btn btn-outline-warning">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('companies.destroy', $company) }}" method="POST">
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