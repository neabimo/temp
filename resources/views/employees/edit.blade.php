@extends('layouts.appemp')

@section('content')
    <h2>Editar funcionário</h2>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Primeiro Nome:</label>
            <input type="text" name="first_name" value="{{ $employee->first_name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Último Nome:</label>
            <input type="text" name="last_name" value="{{ $employee->last_name }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" value="{{ $employee->email }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Departamento:</label>
            <select name="department_id" class="form-control">
                <option value="">Selecione o Departamento</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}" {{ $employee->department_id == $department->id ? 'selected' : '' }}>
                        {{ $department->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection