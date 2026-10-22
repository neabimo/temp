@extends('layouts.appemp')

@section('content')
    <h2>Cadastrar Novo Departamento</h2>
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Local:</label>
            <input type="text" name="location" class="form-control" placeholder="Location">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection