@extends('layouts.admin')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Dossiers des Employés</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tous les Dossiers des Employés</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>File Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employeeFiles as $file)
                                <tr>
                                    <td>{{ $file->employee->first_name }} {{ $file->employee->last_name }}</td>
                                    <td>{{ $file->file_type }}</td>
                                    <td>
                                        <a href="{{ route('employee-files.show', $file->id) }}"
                                            class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('employee-files.edit', $file->id) }}"
                                            class="btn btn-warning btn-sm"><i class="fa-solid fa-file-pen"></i></a>
                                        @if ($file->file_path)
                                            <a href="{{ route('employee-files.download', $file->id) }}"
                                                class="btn btn-secondary btn-sm" target="_blank"><i class="fa-solid fa-download"></i></a>
                                        @endif
                                        <form action="{{ route('employee-files.destroy', $file->id) }}" method="post"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette dossier ?')"><i
                                                    class="fa-solid fa-trash"></i></button>
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
