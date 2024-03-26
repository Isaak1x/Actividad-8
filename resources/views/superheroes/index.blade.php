@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #FAFAFA;
    }

    /* Estilos para las tarjetas de superhéroes */
    .card {
        background-color: #CAEBEA; 
        border: 2px solid #467794; 
        border-radius: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
        margin-bottom: 25px;
    }

    .card:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .card-body {
        padding: 30px;
    }

    .card-title {
        color: #333;
        font-weight: bold;
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .card-text {
        color: #666;
        font-size: 1rem;
        margin-bottom: 20px;
    }

    .button-group {
        margin-top: 15px;
    }

    .btn {
        font-size: 0.9rem;
    }

    .card-title {
        margin-top: 0;
    }

    .btn-success {
        margin-bottom: 20px;
    }
</style>

<div class="container">
    <h1 class="mb-4">Lista de Superheroes</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('superheroes.create') }}" method="GET" class="mb-4">
                @csrf
                <button type="submit" class="btn btn-success">Registrar Nuevo Superhéroe</button>
            </form>
        </div>
    </div>

    <div class="row mt-4">
        @foreach($superheroes as $superhero)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $superhero->nombre_real }}</h5>
                        <p class="card-text">{{ $superhero->nombre_superheroe }}</p>
                        <div class="button-group">
                            <button onclick="window.location='{{ route('superheroes.show', $superhero) }}'" class="btn btn-info btn-sm">Ver Detalles</button>
                            <button onclick="window.location='{{ route('superheroes.edit', $superhero) }}'" class="btn btn-primary btn-sm">Editar</button>
                            <form action="{{ route('superheroes.destroy', $superhero) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro de eliminar este superhéroe?')">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection
