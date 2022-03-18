@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('users.destroy', $user) }}" method="POST">
                                @method ('DELETE')
                                @csrf
                                <input
                                    type="submit"
                                    value="Eliminar"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Seguro de eliminar?')">
                            </form>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div> --}}
@endsection