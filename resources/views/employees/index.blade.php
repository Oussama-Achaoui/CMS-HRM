@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Les Employées</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Toutes les Employées</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom & Prénom</th>
                                <th>Rôle</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees  as $employee )
                                <tr>
                                    <td>{{ ucfirst($employee->first_name) }} {{ ucfirst($employee->last_name) }}</td>
                                    <td>{{ ucfirst($employee->role) }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>
                                        <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm">Voir</a>
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                        <a href="{{ route('employees.export-single', $employee->id) }}" class="btn btn-secondary btn-sm">Télécharger</a>
                                        <form action="{{ route('employees.destroy', $employee->id) }}"
                                            method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette demande de congé ?')">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@stop