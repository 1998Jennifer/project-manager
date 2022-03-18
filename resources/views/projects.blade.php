@extends('layouts.app')

@section('content')


<div class="container-sm">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="d-flex flex-row-reverse">
                <input class="btn btn-outline-success " type="button" value="Nuevo">
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CIUDAD</th>
                        <th>COMPAÑIA</th>
                        <th>USUARIO</th>
                        <th>NOMBRE DE PROYECTO</th>
                        <th>FECHA DE EJECUCIÓN</th>
                        <th colspan="3">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->city->name }}</td>
                        <td>{{ $project->company->name }}</td>
                        <td>{{ $project->user->name }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->execution_date }}</td>
                        <td><input class="btn btn-outline-warning" type="button" value="Editar"></td>
                        <td>
                            <form action="{{ route('users.destroy', $project) }}" method="POST">
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