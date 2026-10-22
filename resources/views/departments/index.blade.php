@extends('layouts.appemp')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2>Departamentos</h2>
            <a class="btn btn-success" href="{{ route('departments.create') }}">Criar novo departamento</a>
            <a class="btn btn-info" href="{{ route('employees.index') }}">Gerenciar funcionários</a>
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
            <th>Nome</th>
            <th>Local</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($departments as $department)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $department->name }}</td>
            <td>{{ $department->location }}</td>
            <td>
                <form action="{{ route('departments.destroy',$department->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('departments.edit',$department->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $departments->links() }}
@endsection