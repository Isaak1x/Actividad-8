@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 style="margin-bottom: 35px;">Registrar Nuevo Superheroe</h1>

        <form action="{{ route('superheroes.store') }}" method="POST">
            @csrf
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="nombre_superheroe">Nombre del superheroe</label>
                <input type="text" class="form-control" id="nombre_superheroe" name="nombre_superheroe" required>
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="nombre_real">Nombre real del superheroe</label>
                <input type="text" class="form-control" id="nombre_real" name="nombre_real" required>
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="foto_url">Foto (Agrega la URL)</label>
                <input type="text" class="form-control" id="foto_url" name="foto_url" required>
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="info">Descripcion</label>
                <textarea class="form-control" id="info" name="info"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Registrar superheroe</button>
            <button type="button" onclick="window.location='{{ route('superheroes.index') }}'" class="btn btn-secondary">Cancelar</button>
        </form>
    </div>
@endsection
