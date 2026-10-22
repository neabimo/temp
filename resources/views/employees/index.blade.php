@extends('layouts.appemp')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2>Funcionários</h2>
            <a class="btn btn-success" href="{{ route('employees.create') }}">Cadastrar novo funcionário</a>
            <a class="btn btn-info" href="{{ route('departments.index') }}">Gerenciar departamentos</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-2">
        <tr>
            <th>No</th>
            <th>Primeiro Nome</th>
            <th>Último Nome</th>
            <th>Email</th>
            <th>Departamento</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $employee->first_name }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->department->name ?? 'N/A' }}</td>
            <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $employees->links() }}
@endsection