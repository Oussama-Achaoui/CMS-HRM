@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Voir l'employé</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Voir l'employé</h6>
        </div>
        <div class="card-body">

            <h1>{{ ucfirst($employee->first_name) }} {{ ucfirst($employee->last_name) }} - {{ ucfirst($employee->role) }}</h1>

            <p><strong>Téléphone :</strong> {{ $employee->phone }}</p>
            <p><strong>Email :</strong> {{ $employee->email }}</p>
            <p><strong>Adresse :</strong> {{ $employee->address  }}</p>
            <!-- Display more details as needed -->

            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">{{clean( trans('niva-backend.edit') , array('Attr.EnableID' => true))}}</a>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="post" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{clean( trans('niva-backend.delete') , array('Attr.EnableID' => true))}}</button>
            </form>
            <a href="{{ route('employees.export-single', $employee->id) }}" class="btn btn-success">{{clean( trans('Download') , array('Attr.EnableID' => true))}}</a>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
