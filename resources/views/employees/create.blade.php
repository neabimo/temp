@extends('layouts.appemp')

@section('content')
    <h2>Cadastrar novo funcionário</h2>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Primeiro Nome:</label>
            <input type="text" name="first_name" class="form-control" placeholder="First Name">
        </div>
        <div class="mb-3">
            <label class="form-label">Último Nome:</label>
            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
        </div>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="mb-3">
            <label class="form-label">Departamento:</label>
            <select name="department_id" class="form-control">
                <option value="">Selecione o Departamento</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection