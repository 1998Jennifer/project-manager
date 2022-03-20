@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Projectos</div>
                <h2 style="padding: 0.5em; text-align: center"><strong>Proyectos</strong></h2>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            @foreach ($projects as $project)
                            <div class="card border-primary mb-3" style="max-width: 18rem; margin: 1em">
                                <div class="card-header">{{ $project->company->name }}</div>
                                <div class="card-body text-primary">
                                  <h5 class="card-title">{{ $project->name }}</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
