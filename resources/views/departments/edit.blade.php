@extends('layouts.appemp')

@section('content')
    <h2>Editar Departamento</h2>
    <form action="{{ route('departments.update', $department->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" value="{{ $department->name }}" class="form-control" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Local:</label>
            <input type="text" name="location" value="{{ $department->location }}" class="form-control" placeholder="Location">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection